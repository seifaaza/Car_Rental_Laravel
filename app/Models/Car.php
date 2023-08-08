<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public function owners(){
        return $this->belongsTo(Owner::class, 'owner_id', 'id' );
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function users(){
        return $this->belongsToMany(User::class , 'car_user', 'car_id', 'user_id' );
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

}
