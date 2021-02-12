<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'promocao',
        'descricao',
        'user_id',
        'feira_id',
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function feira(){
    	return $this->belongsTo(Feira::class);
    }
}
