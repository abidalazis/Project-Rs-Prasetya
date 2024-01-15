<?php

namespace App\Http\Controllers;

use App\Models\ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ruanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jumlahbaris = 5;
        $katakunci= $request->katakunci;
        if(strlen($katakunci)){
            $data = ruangan::where('nama_ruangan','like',"%$katakunci%")
            ->orWhere('keterangan','like',"%$katakunci%")
            ->paginate($jumlahbaris);
         } else{
            $data = ruangan::paginate($jumlahbaris);
         }
        return view('dashboard.ruangan.index',[
            "tittle" => "tambah-ruangan-service"
            ], compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.ruangan.create',[
            "tittle" => "tambah-ruangan-service"
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama_ruangan',$request->nama_ruangan);
        Session::flash('keterangan',$request->keterangan);

        $request->validate([
            'nama_ruangan'=>'required|unique:ruangans,nama_ruangan',
            'keterangan'=>'required',
        ],[
            'nama_ruangan.required' => 'nama_ruangan wajib diisi',
            'nama_ruangan.unique' => 'Nama ruangan tidak boleh sama',
            'keterangan.required' => 'keterangan wajib diisi',
        ]);
        $data = [
            'nama_ruangan'=>$request->nama_ruangan,
            'keterangan'=>$request->keterangan,

        ];
        ruangan::create($data);
        return redirect()->to('tambah-ruangan')->with('success','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function show(ruangan $ruangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ruangan::where('id',$id)->first();
        return view('dashboard.ruangan.edit',[
            "tittle" => "tambah-ruangan-service"
            ])->with('datas',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ruangan'=>'required',
            'keterangan'=>'required',
        ],[
            'nama_ruangan.required' => 'nama_ruangan wajib diisi',
            'nama_ruangan.unique' => 'Nama ruangan tidak boleh sama',
            'keterangan.required' => 'keterangan wajib diisi',
        ]);
        $data = [
            'nama_ruangan'=>$request->nama_ruangan,
            'keterangan'=>$request->keterangan,

        ];
        ruangan::where('id',$id)->update($data);
        return redirect()->to('tambah-ruangan')->with('success','Berhasil Mengedit Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ruangan  $ruangan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ruangan::where('id', $id)->delete();
        return redirect()->to('tambah-ruangan')->with('success','Berhasil Menghapus Data');
    }
}
