<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;

class CarsController extends Controller
{


    public function home()
    {
        return view('main.interface');
    }
    public function about()
    {
        return view('main.about');
    }

    public function cars()
    {
        $cars = Car::all();
        return view('cars.cars', compact('cars'));
    }

    public function show( $id)
    {
        $car= Car::find($id);
        return view('cars.view', compact('car'));
    }



    }
