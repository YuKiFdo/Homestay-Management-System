<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\Bills;
use Illuminate\Support\Facades\Http;
use PhpParser\Node\Expr\Cast\Double;
use PhpParser\Node\Scalar\Float_;
use Ramsey\Uuid\Type\Decimal;

class DashboardController extends Controller
{

    public function fetchExchangeRate()
    {
        $apiUrl = 'https://v6.exchangerate-api.com/v6/17b940675279e11f53c533d5/latest/USD';

        $response = Http::get($apiUrl);

        if ($response->successful()) {
            $data = $response->json();
            $exchangeRate = $data['conversion_rates']['LKR'];
            return $exchangeRate;
        } else {
            dd($response->status());
            return null;
        }
    }

    /**
     * Display dashbnoard
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $title = "Dashboard";
        $description = "Insights about your business";

        // Monthly sales
        $monthlySales = (Float)Bills::whereMonth('created_at', date('m'))->sum('total');

        // Sales in USD
        $exchangeRate = $this->fetchExchangeRate();
        $monthlySalesUSD = $monthlySales / $exchangeRate;

        // Monthly sales formatted
        $monthlySales = number_format($monthlySales, 2);
        $parts = explode('.', $monthlySales);
        $monthlySales = $parts[0];

        // USD formatted
        $monthlySalesUSD = number_format($monthlySalesUSD, 2);

        // Exchange rate formatted
        $exchangeRate = number_format($exchangeRate, 2);

        $dashboardData = [
            'totalCustomers' => Customers::count(),
            'recentCustomer' => Customers::latest()->first()->name,
            'monthlySales' => $monthlySales,
            'exchangeRate' => $exchangeRate,
            'monthlySalesUSD' => $monthlySalesUSD,
            'salesDifference' => number_format((Bills::whereMonth('created_at', date('m'))->sum('total') - Bills::whereMonth('created_at', date('m', strtotime('-1 month')))->sum('total')) / Bills::whereMonth('created_at', date('m', strtotime('-1 month')))->sum('total') * 100, 2),
        ];
        return view('dashboard.main', compact('title', 'description') + $dashboardData);
    }

}
