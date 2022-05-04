<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $fillable = ['user_id','CF','SF','total','ranking'];
    
    public function calon(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
