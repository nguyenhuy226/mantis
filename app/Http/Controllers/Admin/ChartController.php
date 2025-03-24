<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class ChartController extends Controller
{
    public function chart()
    {
        return view('page.chart.chart');
    }

    public function map()
    {
        return view('page.chart.map');
    }
}
