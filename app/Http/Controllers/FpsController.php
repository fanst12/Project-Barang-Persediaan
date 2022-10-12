<?php

namespace App\Http\Controllers;

use App\Models\fps;
use App\Models\Kfs;
use App\Models\Bp;
use Illuminate\Http\Request;

class FpsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        
        if($request->has('search')){
            $datas = fps::where('no_surat','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $datas = fps::paginate(5);
        }
        return view('fp/fpindex',compact('datas'));
    }


    public function tambahfp(){
        return view('fp.tambahfp');
    }

    public function tambahfungsi(){
        $datafungsi = Kfs::all();
        $databarang = Bp::all();
        return view('fp.tambahfp', compact('datafungsi','databarang'));
    }

    // //public function tambahbarang(){
    //     $databarang = Bp::all();

    //     return view('fp.tambahfp', compact('databarang'));
    // }


    public function insertfp(Request $request){
        $model = new fps;
        $model ->no_surat=$request->no_surat;
        $model ->id_kf=$request->id_kf;
        $model ->tanggal=$request->tanggal;
        $model ->id_bp=$request->id_bp;
        $model ->jumlah=$request->jumlah;
        $model ->save();  
        return redirect ('fp/fpindex')->with('success','Data Berhasil di Input');
    }

    public function tampilfp($id){
        $datas=fps::find($id); 
        $datafungsi = Kfs::all();
        $databarang = Bp::all();
        return view('fp.tampilfp', compact('datas','datafungsi','databarang'));
    }

    public function editfp(Request $request, $id){
        $datas=fps::find($id);
        $datas->update($request->all());
        return redirect ('fp/fpindex')->with('success','Data Berhasil di Edit');
    }


    public function deletefp($id){
        $datas=fps::find($id);
        $datas->delete();
        return redirect ('fp/fpindex')->with('success','Data Berhasil di Hapus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fps  $fps
     * @return \Illuminate\Http\Response
     */
    public function show(fps $fps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fps  $fps
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fps  $fps
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fps $fps)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fps  $fps
     * @return \Illuminate\Http\Response
     */
    public function destroy(fps $fps)
    {
        //
    }
}
