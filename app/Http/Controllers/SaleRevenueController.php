<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bills;
use Illuminate\Support\Facades\DB;

class SaleRevenueController extends Controller
{
    public function getSalesRevenue()
    {


        try {
            $salesData = Bills::selectRaw('DATEPART(HOUR, created_at) as hour, SUM(total) as total_sales')
            ->where('created_at', '>=', now()->subHours(24)) // Get records for the last 24 hours
            ->groupByRaw('DATEPART(HOUR, created_at)')
            ->orderByRaw('hour DESC')
            ->get();

            return response()->json($salesData);
        } catch (\Exception $e) {
            // Handle any exceptions that may occur during the database query
            return 'Error: ' . $e->getMessage();
        }
    }

    public function getWeeklySalesRevenue()
    {
        try {
            $salesData = Bills::selectRaw('CAST(created_at as DATE) as date, SUM(total) as total_sales')
            ->whereDate('created_at', '>=', now()->subDays(6)->toDateString()) // Get records for the last 7 days
            ->groupByRaw('CAST(created_at as DATE)')
            ->orderByRaw('CAST(created_at as DATE) ASC')
            ->get();

            return response()->json($salesData);
        } catch (\Exception $e) {
            // Handle any exceptions that may occur during the database query
            return 'Error: ' . $e->getMessage();
        }
    }

    public function getMonthlySalesRevenue()
    {
        try {
            $salesData = Bills::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, SUM(total) as total_sales')
                ->where('created_at', '>=', now()->subMonths(11)) // Get records for the last 12 months
                ->groupByRaw('YEAR(created_at), MONTH(created_at)')
                ->orderByRaw('YEAR(created_at), MONTH(created_at) ASC')
                ->get();

            return response()->json($salesData);
        } catch (\Exception $e) {
            // Handle any exceptions that may occur during the database query
            return 'Error: ' . $e->getMessage();
        }
    }
}
