<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use App\Models\Owner;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Review;

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
        $categories = Category::all();
        return view('cars.cars', compact('cars', 'categories'));
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        $owner = Owner::find($id);
        $tags = Tag::all();
        // $userId =  Auth::user()->id;
        $reviews = Review::where('car_id','=',$id)->latest()->get();
        return view('cars.info', compact('car', 'owner', 'tags', 'reviews'))->with('success', 'successfully inserted');
    }

    public function tags($id)
    {
        $cars = Car::all();
        $tag = Tag::findOrFail($id);
        return view('cars.tags', compact('cars', 'tag'));
    }

    public function profil($id)
    {
        $owner = Owner::findOrFail($id);
        $cars = Car::where('owner_id','=',$id)->get();
        return view('owners.profil', compact('cars', 'owner'));
    }

    public function category($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::all();
        $cars = Car::all();
        return view( 'cars.category', compact('category', 'cars', 'categories'));

    }
}
