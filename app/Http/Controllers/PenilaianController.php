<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Penilaian;

class PenilaianController extends Controller
{
    public function index(){
        $pln = Penilaian::paginate();
        return view('datapenilaian',compact('pln'));
    }
}
