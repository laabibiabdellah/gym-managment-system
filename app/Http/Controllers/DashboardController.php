<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardController extends Controller
{
    public function index()
    {
        // stats
        $membersCount = User::count();
        $categoriesCount = Category::count();

        // charts
        $membersChart = $this->membersChart();
        $incomeChart = $this->incomeChart();
        $userCategoryChart = $this->userCategoryChart();

        return view('members.dash', compact('membersChart', 'incomeChart', 'membersCount', 'categoriesCount', 'userCategoryChart'));
    }

    public function membersChart()
    {
        $chart_options = [
            'chart_title' => 'Nombre de clients par mois',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'filter_field' => 'created_at',
            'group_by_period' => 'month',
            'chart_type' => 'line',
            'aggregate_function' => 'count',
        ];
        return new LaravelChart($chart_options);
    }

    public function incomeChart()
    {
        $chart_options = [
            'chart_title' => 'Profit par mois',
            'report_type' => 'group_by_date',
            'group_by_field' => 'created_at',
            'model' => 'App\Models\User',
            'group_by_period' => 'month',
            'chart_type' => 'bar',
            'aggregate_field' => 'montant_payé',
            'aggregate_function' => 'sum',
        ];
        return new LaravelChart($chart_options);
    }

    public function userCategoryChart()
    {
       $chart_options = [
            'chart_title' => 'Nombre de membres par categorie',
           'report_type' => 'group_by_relationship',
            'model' => 'App\Models\User',
            'relationship_name' => 'category',
            'group_by_field' => 'nom_categorie',
            'chart_type' => 'pie',
            'aggregate_field' => 'nom_categorie',
            'aggregate_function' => 'count',
        ];
        return new laravelChart($chart_options);
    }
}
