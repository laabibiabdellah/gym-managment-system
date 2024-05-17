<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = User::where('password', '=', null)->paginate(10);
        $categories = Category::all();
        return view('members.all-members', compact('members', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('members.add-member', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nom' => ['required', 'min:3'],
            'prenom' => ['required', 'min:3'],
            'category_id' => ['required', 'numeric'],
            'montant_payé' => ['required', 'numeric'],
            'nombre_mois' => ['required', 'numeric'],
            'date_payement' => ['required', 'date'],
        ]);



        $data['date_payement'] = Carbon::parse($request->date_payement)->toDateString();
        $data['date_expriration'] = Carbon::parse($request->date_payement)->addDays(30 * $data['nombre_mois'])->toDateString();

        if ($request->has('assurance_payé')) {
            $data['assurance_payé'] = 1;
            $data['montant_assurance'] = $request['montant_assurance'];
            $data['date_assurance'] = Carbon::now()->toDateString();
        } else {
            unset($data['montant_assurance']);
        }

        User::create($data);
        return to_route('members.index')->with('success', 'membre créé avec succès.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $member)
    {
        $categories = Category::all();
        return view('members.edit-member', compact('categories', 'member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $member)
    {
        $data = $request->validate([
            'nom' => ['required', 'min:3'],
            'prenom' => ['required', 'min:3'],
            'category_id' => ['required', 'numeric'],
            'montant_payé' => ['required', 'numeric'],
            'nombre_mois' => ['required', 'numeric'],
            'date_payement' => ['required', 'date'],
        ]);

        $data['date_payement'] = Carbon::parse($request->date_payement)->toDateString();
        $data['date_expriration'] = Carbon::parse($request->date_payement)->addDays(30 * $data['nombre_mois'])->toDateString();

        if ($request->has('assurance_payé')) {
            $data['assurance_payé'] = 1;
            $data['montant_assurance'] = $request['montant_assurance'];
            $data['date_assurance'] = Carbon::now()->toDateString();
        } else {
            unset($data['montant_assurance']);
        }

        $member->update($data);
        return to_route('members.index')->with('success', 'membre modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $member)
    {
        $member->delete();
        return to_route('members.index')->with('success', 'Membre supprimée avec succès');
    }
}
