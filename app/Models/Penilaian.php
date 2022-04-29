<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    protected $fillable = ['user_id'];
    
    public function peserta(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
