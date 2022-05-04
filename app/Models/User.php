<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nis','name','penghasilan_ortu','listrik','kendaraan','rata_nilai','tahun_lulus','luas_tanah','jml_tanggungan'];
    
    public function peserta(){
        return $this->hasOne(Penilaian::class,'user_id','id');
    }

    public function user(){
        return $this->hasOne(Bobot::class,'user_id','id');
    }

    public function calon(){
        return $this->hasOne(Hasil::class,'user_id','id');
    }
}