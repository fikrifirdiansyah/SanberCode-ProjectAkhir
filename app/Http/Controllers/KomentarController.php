<?php

namespace App\Http\Controllers;

use App\Komentar;
use Illuminate\Http\Request;

class KomentarController extends Controller
{
    //
    public function index(){
        $komentar = komentar::all();
        return view('admin/komentar',['komentar'=>$komentar]);
        }
    public function buat(){
        return view('admin/buat_komentar');
    }
    public function buat_selesai(Request $request){
        komentar::create([
            'id' => $request->id,
            'isi' => $request->isi,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
            'pertanyaan_id' => $request->pertanyaan_id,
            'profil_id' => $request->profil_id,
        ]);
        return redirect('/komentar');
    }
}
