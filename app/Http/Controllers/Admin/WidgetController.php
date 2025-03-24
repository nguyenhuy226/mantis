<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WidgetController extends Controller
{
    public function data()
    {
        return view('page.widget.data');
    }
    public function chart()
    {
        return view('page.widget.chart');
    }
    public function statistics()
    {
        return view('page.widget.statistics');
    }
}
