<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use App\Models\Bag;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function save(Request $request, $id)
    {
        $user = Auth::user();
        $car = Car::find($id);

        $bag=new Bag();
        $bag -> id = $car->id;
        $bag -> name = $car -> name;
        $bag -> description = $car -> description;
        $bag -> model = $car -> model;
        $bag -> type = $car -> type;
        $bag -> price = $car -> price;
        $bag -> image = $car -> image;
        $bag -> owner_id = $car -> owner_id;
        $bag -> user_id = $user -> id;

        $bag -> save();
        return redirect('/cars');
    }

    public function bag(){
        $user = Auth::user();
        $bags = Bag::where('user_id','=',$user->id)->get();
        return view('user.bag', compact('bags'));
    }

    public function destroy($id)
    {
        $bag= Bag::find($id);
        $bag->delete();
        return redirect('/bag');
    }

    public function rent( $id)
    {

        $user= User::find($id);
        $car= Car::find($id);
        return view('user.rent', compact('car', 'user'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }


}
