<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Penilaian;

class PesertaController extends Controller
{
    public function index(){
        $pst = User::paginate();
        return view('datapeserta',compact('pst'));
    }

    public function simpandata(Request $request){
        //dd($request->all());
        $ceknm = User::where('name',$request->name)->first();
        if(empty($ceknm)){
            $peserta = User::create([
                'nis' => $request -> nis ,  
                'name' => $request -> name ,
                'penghasilan_ortu' => $request -> penghasilan_ortu,
                'listrik' => $request -> listrik,
                'kendaraan' => $request -> kendaraan,
                'rata_nilai' => $request -> rata_nilai,
                'tahun_lulus' => $request -> tahun_lulus,
                'luas_tanah' => $request -> luas_tanah,
                'jml_tanggungan' => $request -> jml_tanggungan,
                ]);
            Penilaian::create([
                'user_id' => $peserta['id'],
            ]);
                return redirect('/datapeserta')->with('success', 'Task Created Successfully!');
        }else{
            Alert::error('Data Anda Sudah Ada');
            return redirect('/datapeserta');      
        }
        
    }
}
