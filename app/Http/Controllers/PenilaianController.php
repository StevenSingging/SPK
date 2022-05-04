<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Penilaian;
use App\Models\Bobot;
use App\Models\Hasil;

class PenilaianController extends Controller
{
    public function index(){
        $pst = User::paginate();
        $plz = Penilaian::paginate();
        $bbt = Bobot::paginate();
        $hsl = Hasil::orderBy('total','DESC')->paginate();
        return view('datapenilaian',compact('pst','plz','bbt','hsl'));
    }
}
