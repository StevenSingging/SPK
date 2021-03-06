<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $fillable = ['user_id','A1','A2','A3','A4','A5','A6','A7'];
    
    public function peserta(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
