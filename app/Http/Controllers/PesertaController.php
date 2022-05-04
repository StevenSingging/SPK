<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Penilaian;
use App\Models\Bobot;
use App\Models\Hasil;

class PesertaController extends Controller
{
    public function index(){
        $pst = User::paginate();
        return view('datapeserta',compact('pst'));
    }

    public function simpandata(Request $request){
        //dd($request->all());
        $bobot = new Bobot;
        $hasil = new Hasil;
        $ceknm = User::where('name','like',"%".$request->name."%")->first();
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
            $gap = Penilaian::create([
                'user_id' => $peserta['id'],
                'A1'=> $request -> penghasilan_ortu - 3,
                'A2'=> $request -> listrik - 3,
                'A3'=> $request -> kendaraan - 3,
                'A4'=> $request -> rata_nilai - 3,
                'A5'=> $request -> tahun_lulus - 3,
                'A6'=> $request -> luas_tanah - 2,
                'A7'=> $request -> jml_tanggungan - 2,
            ]);
            $bobot->user_id = $peserta['id'];
            if($gap['A1'] == 0){$bobot->A1 = 5;}elseif($gap['A1'] == 1){$bobot->A1 = 4.5;}elseif($gap['A1'] == -1){$bobot->A1 = 4;}elseif($gap['A1'] == 2){$bobot->A1 = 3.5;}elseif($gap['A1'] == -2){$bobot->A1 = 3;}elseif($gap['A1'] == 3){$bobot->A1 = 2.5;}elseif($gap['A1'] == -3){$bobot->A1 = 2;}elseif($gap['A1'] == 4){$bobot->A1 = 1.5;}elseif($gap['A1'] == -4){$bobot->A1 = 1;}
            if($gap['A2'] == 0){$bobot->A2 = 5;}elseif($gap['A2'] == 1){$bobot->A2 = 4.5;}elseif($gap['A2'] == -1){$bobot->A2 = 4;}elseif($gap['A2'] == 2){$bobot->A2 = 3.5;}elseif($gap['A2'] == -2){$bobot->A2 = 3;}elseif($gap['A2'] == 3){$bobot->A2 = 2.5;}elseif($gap['A2'] == -3){$bobot->A2 = 2;}elseif($gap['A2'] == 4){$bobot->A2 = 1.5;}elseif($gap['A2'] == -4){$bobot->A2 = 1;}
            if($gap['A3'] == 0){$bobot->A3 = 5;}elseif($gap['A3'] == 1){$bobot->A3 = 4.5;}elseif($gap['A3'] == -1){$bobot->A3 = 4;}elseif($gap['A3'] == 2){$bobot->A3 = 3.5;}elseif($gap['A3'] == -2){$bobot->A3 = 3;}elseif($gap['A3'] == 3){$bobot->A3 = 2.5;}elseif($gap['A3'] == -3){$bobot->A3 = 2;}elseif($gap['A3'] == 4){$bobot->A3 = 1.5;}elseif($gap['A3'] == -4){$bobot->A3 = 1;}
            if($gap['A4'] == 0){$bobot->A4 = 5;}elseif($gap['A4'] == 1){$bobot->A4 = 4.5;}elseif($gap['A4'] == -1){$bobot->A4 = 4;}elseif($gap['A4'] == 2){$bobot->A4 = 3.5;}elseif($gap['A4'] == -2){$bobot->A4 = 3;}elseif($gap['A4'] == 3){$bobot->A4 = 2.5;}elseif($gap['A4'] == -3){$bobot->A4 = 2;}elseif($gap['A4'] == 4){$bobot->A4 = 1.5;}elseif($gap['A4'] == -4){$bobot->A4 = 1;}
            if($gap['A5'] == 0){$bobot->A5 = 5;}elseif($gap['A5'] == 1){$bobot->A5 = 4.5;}elseif($gap['A5'] == -1){$bobot->A5 = 4;}elseif($gap['A5'] == 2){$bobot->A5 = 3.5;}elseif($gap['A5'] == -2){$bobot->A5 = 3;}elseif($gap['A5'] == 3){$bobot->A5 = 2.5;}elseif($gap['A5'] == -3){$bobot->A5 = 2;}elseif($gap['A5'] == 4){$bobot->A5 = 1.5;}elseif($gap['A5'] == -4){$bobot->A5 = 1;}
            if($gap['A6'] == 0){$bobot->A6 = 5;}elseif($gap['A6'] == 1){$bobot->A6 = 4.5;}elseif($gap['A6'] == -1){$bobot->A6 = 4;}elseif($gap['A6'] == 2){$bobot->A6 = 3.5;}elseif($gap['A6'] == -2){$bobot->A6 = 3;}elseif($gap['A6'] == 3){$bobot->A6 = 2.5;}elseif($gap['A6'] == -3){$bobot->A6 = 2;}elseif($gap['A6'] == 4){$bobot->A6 = 1.5;}elseif($gap['A6'] == -4){$bobot->A6 = 1;}
            if($gap['A7'] == 0){$bobot->A7 = 5;}elseif($gap['A7'] == 1){$bobot->A7 = 4.5;}elseif($gap['A7'] == -1){$bobot->A7 = 4;}elseif($gap['A7'] == 2){$bobot->A7 = 3.5;}elseif($gap['A7'] == -2){$bobot->A7 = 3;}elseif($gap['A7'] == 3){$bobot->A7 = 2.5;}elseif($gap['A7'] == -3){$bobot->A7 = 2;}elseif($gap['A7'] == 4){$bobot->A7 = 1.5;}elseif($gap['A7'] == -4){$bobot->A7 = 1;}
            $bobot ->save();

            $hasil->user_id = $peserta['id'];
            $hasil->CF = ($bobot['A1'] + $bobot['A2'] + $bobot['A3'] + $bobot['A4'] + $bobot['A5']) / 5 ;
            $hasil->SF = ($bobot['A6'] + $bobot['A7'] ) / 2 ;
            $hasil->total = (0.60 * $hasil->CF) + (0.40 * $hasil->SF);
            $hasil -> save();
            return redirect('/datapeserta')->with('success', 'Task Created Successfully!');
        }else{
            Alert::error('Data Anda Sudah Ada');
            return redirect('/datapeserta');      
        }
        
    }
}
