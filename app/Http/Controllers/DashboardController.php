<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class DashboardController extends Controller
{
    public function index(){
        $data=[
            'fcar' => 'benz',
            'lcar' => 'matic'

        ];
        return Inertia::render('Dashboard/Index', $data);
    }
}
