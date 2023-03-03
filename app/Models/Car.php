<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function owners()
    {
        return $this->belongsTo(Owner::class, 'owner_id', 'id');
    }
}
