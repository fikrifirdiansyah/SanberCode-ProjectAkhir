<?php

namespace App\Http\Controllers;

use App\pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    //
    public function pertanyaan(){
    $pertanyaan = pertanyaan::all();
    return view('admin/pertanyaan',['pertanyaan'=>$pertanyaan]);
    }

    public function buat(){
        return view('admin/buat_pertanyaan');
    }
    public function buat_selesai(Request $request){
        pertanyaan::create([
            'id' => $request->id,
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tag' => $request->tag,
            'profil_id' => $request->profil_id,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ]);
        return redirect('/pertanyaan');
    }
    public function edit($id){
        $pertanyaan = pertanyaan::find($id);
        return view('admin/edit_pertanyaan',['pertanyaan'=>$pertanyaan]);
    }
    public function update($id, Request $request){
        $pertanyaan =pertanyaan::find($id);
        $pertanyaan->judul=$request->judul;
        $pertanyaan->isi=$request->isi;
        $pertanyaan->tag=$request->tag;
        $pertanyaan->profil_id=$request->profil_id;
        $pertanyaan->created_at=$request->created_at;
        $pertanyaan->updated_at=$request->updated_at;
        $pertanyaan->save();
        return redirect('/pertanyaan');
    }
    public function hapus($id){
        $pertanyaan = pertanyaan::find($id);
        $pertanyaan->delete();
        return redirect('/pertanyaan');
    }
}
