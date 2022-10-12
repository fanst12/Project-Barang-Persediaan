<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bp;

class BpController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $datas = Bp::where('nama_barang','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $datas = Bp::paginate(10);
        }       
        return view('persediaan.index', compact('datas'));
    }

    public function tambahbp(){
        return view('persediaan.tambahbp');
    }

    public function insertbp(Request $request){
        $model = new Bp;
        $model ->no=$request->no;
        $model ->nama_barang=$request->nama_barang;
        $model ->satuan=$request->satuan;
        $model ->stok=$request->stok;
        $model ->save();  
        return redirect ('persediaan/index')->with('success','Data Berhasil di Tambah');
    }

    public function tampilbp ($id){
        $data = Bp::find($id);
        //dd($data);
        return view('persediaan.tampilbp', compact('data'));
    }

    public function editbp(Request $request, $id){
        $data = Bp::find($id);
        $data->update($request->all());
        return redirect ('persediaan/index')->with('success','Data Berhasil di Edit');
    }

    public function deletebp($id){
        $data = Bp::find($id);
        $data->delete();
        return redirect('persediaan/index')->with('success','Data Berhasil di Hapus');
    }

}
    
    