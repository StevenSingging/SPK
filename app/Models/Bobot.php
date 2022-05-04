<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bobot extends Model
{
    protected $fillable = ['user_id','A1','A2','A3','A4','A5','A6','A7'];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
