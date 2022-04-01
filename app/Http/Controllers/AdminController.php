<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller

{
     public function add_car(Request $request){
         $car_name = $request->car_name;
         $description = $request->description;
         $model_year = $request->model_year;
         $car_brand = $request->car_brand;
         $color = $request->color;
         $capacity = $request->capacity;
         $plate_number = $request->plate_number;
         $rate = $request->rate;
         $owner_id = $request->owner_id;
         $status = $request->status;
            return Inertia::render('admin/add_car');

        //  $data =[
        //      'car_name' => '',
        //      'description' => '',
        //      'model_year' => '',
        //      'car_brand' => '',
        //      'color' => '',
        //      'capacity' => '',
        //      'plate_number' => '',
        //      'rate' => '',
        //      'status' => '',
        //  ];
        //  Car::create($data);
    }
        public function update_car(Request $request){
            $car_name = $request-> car_name;
            $description = $request->description;
         $model_year = $request->model_year;
         $car_brand = $request->car_brand;
         $color = $request->color;
         $capacity = $request->capacity;
         $plate_number = $request->plate_number;
         $rate = $request->rate;
         $owner_id = $request->owner_id;
         $status = $request->status;
         return Inertia::render('update_car/store');
        }

}
