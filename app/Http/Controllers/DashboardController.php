<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardController extends Controller
{
    public function index()
    {
        // stats
        $membersCount = User::all()->where('montant_payé', '>', 0)->count();
        $categoriesCount = Category::count();

        // charts
        $membersChart = $this->membersChart();
        $incomeChart = $this->incomeChart();


        return view('members.dash', compact('membersChart', 'incomeChart', 'membersCount', 'categoriesCount'));
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
}
