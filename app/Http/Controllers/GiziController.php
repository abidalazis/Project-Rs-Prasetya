<?php

namespace App\Http\Controllers;

use App\Models\gizi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class GiziController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = gizi::all();
        // $tittle = 'tittle';
        return view('dashboard-admin.gizi.index',[
            "tittle" => "gizi"
            ], compact('data'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-admin.gizi.create',[
            "tittle" => "tambah-tambah-gizi"
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
        gizi::create($data);
        return redirect()->to('tambah-gizi')->with('success','Berhasil Menambahkan Data');
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
        $data = gizi::where('id',$id)->first();
        return view('dashboard-admin.gizi.edit',[
            "tittle" => "tambah-tambah-gizi"
            ])->with('gizi',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gizi $gizi, $id)
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
        gizi::where('id',$id)->update($data);
        return redirect()->to('tambah-gizi')->with('success','Berhasil Mengedit Data');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        gizi::where('id', $id)->delete();
        return redirect()->to('tambah-gizi')->with('success','Berhasil Menghapus Data');
    }
}
