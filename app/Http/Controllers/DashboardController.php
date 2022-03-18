<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class DashboardController extends Controller
{
    public function index(){
        $data =[
            'fcar'=>'benz',
            'lcar'=>'matic'
        ];
        return Inertia::render('Dashboard/Index',$data);
    }

}
