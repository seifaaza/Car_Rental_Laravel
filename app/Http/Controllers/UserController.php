<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\User;
use App\Models\Review;
use App\Models\Bag;
use App\Models\Tag;
use App\Models\Owner;
use Symfony\Contracts\Service\Attribute\Required;

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

        // $bag=new Bag();
        // $bag -> car_id = $car->id;
        // $bag -> user_id = $user -> id;

        // $bag -> save();
        return redirect()->back();
    }


    public function saved($id){
        $user = User::findOrFail($id);
        $cars = Car::all();
        return view('user.saved', compact('user', 'cars'));
    }

    public function deleteSaved($id)
    {
        // $id= Car::findOrFail($id);
        // DB::table('orders')->delete()->where('id' == $id);
        // return redirect()->back();
    }

    // public function destroy($id)
    // {
    //     $review= Review::find($id);
    //     $review->delete();
    //     return redirect('/info');
    // }

    public function rent( $id)
    {
        $car= Car::findOrFail($id);
        return view('user.rent', compact('car'));
    }
    public function shareReview(Request $request, $id)
    {
        $owner = Owner::findOrFail($id);
        $tags = Tag::all();
        $car = Car::findOrFail($id);
        $userId =  Auth::user()->id;

        // $request -> validate([
        //     'review' => 'required'
        // ]);

        $review = new Review();
        $review -> review = strip_tags($request -> review) ;
        $review -> user_id = Auth::user() -> id ;
        $review -> car_id = $car -> id ;
        $review -> save();

        $reviews = Review::where('car_id','=',$id)->get();
        return redirect()->back()->with('success', 'successfully inserted');
    }

    public function editReview(Request $request, $id )
    {
        $review = Review::findOrFail($id);
        $user = Auth::user();

        $review -> review = $request -> review;
        $review -> save();
        return redirect()->back();
    }

    public function deleteReview($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();
        return redirect()->back();
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
