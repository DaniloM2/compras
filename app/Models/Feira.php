<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feira extends Model
{
    use HasFactory;

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function locals(){
    	return $this->hasMany(Local::class);
    }
}
