<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Owner;

class CarsController extends Controller
{

    public function home()
    {
        return view('main.home');
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

    public function show($id)
    {
        $car = Car::find($id);
        $owner = Owner::find($id);
        return view('cars.info', compact('car', 'owner'));
    }

    public function profil($id)
    {
        $owner = Owner::find($id);
        $cars = Car::where('owner_id','=',$id)->get();
        return view('owners.profil', compact('cars', 'owner'));
    }
}
