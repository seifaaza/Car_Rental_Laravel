<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id' );
    }
    public function cars(){
        return $this->belongsTo(Car::class, 'car_id', 'id' );
    }
}
