<?php

namespace App\Http\Controllers;

use App\Models\farmasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FarmasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = farmasi::all();
        // $tittle = 'tittle';
        return view('dashboard-admin.farmasi.index',[
            "tittle" => "farmasi"
            ], compact('data'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-admin.farmasi.create',[
            "tittle" => "tambah-tambah-farmasi"
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
        Session::flash('nama_form',$request->nama_form);
        Session::flash('link',$request->link);

        $request->validate([
            'nama_form'=>'required',
            'link'=>'required',
        ],[
            'nama_form.required' => 'nama_form wajib diisi',
            'link.required' => 'link wajib diisi',
        ]);
        $data = [
            'nama_form'=>$request->nama_form,
            'link'=>$request->link,

        ];
        farmasi::create($data);
        return redirect()->to('tambah-farmasi')->with('success','Berhasil Menambahkan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = farmasi::where('id',$id)->first();
        return view('dashboard-admin.farmasi.edit',[
            "tittle" => "tambah-tambah-farmasi"
            ])->with('farmasi',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, farmasi $farmasi, $id)
    {
        $request->validate([
            'nama_form'=>'required',
            'link'=>'required',
        ],[
            'nama_form.required' => 'nama_form wajib diisi',
            'link.required' => 'link wajib diisi',
        ]);
        $data = [
            'nama_form'=>$request->nama_form,
            'link'=>$request->link,

        ];
        farmasi::where('id',$id)->update($data);
        return redirect()->to('tambah-farmasi')->with('success','Berhasil Mengedit Data');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        farmasi::where('id', $id)->delete();
        return redirect()->to('tambah-farmasi')->with('success','Berhasil Menghapus Data');
    }
}
