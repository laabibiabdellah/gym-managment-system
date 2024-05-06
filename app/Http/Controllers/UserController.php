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
        $members = User::paginate(10);
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
        ]);

        $data['date_payement'] = Carbon::now()->toDateString();
        $data['date_expriration'] = Carbon::now()->addDays(30 * $data['nombre_mois'])->toDateString();

        User::create($data);
        return to_route('members.index')->with('success', 'membre créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $member)
    {
        // dd($member);
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
        ]);

        $data['date_payement'] = Carbon::now()->toDateString();
        $data['date_expriration'] = Carbon::now()->addDays(30 * $data['nombre_mois'])->toDateString();

        $member->update($data);
        return to_route('members.index')->with('success', 'membre updated avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $member, Request $request)
    {
        $member->delete();
        return to_route('members.index')->with('success', 'Membre supprimée avec succès');
    }
}
