<?php

namespace App\Http\Controllers;

use App\Models\lt4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class Lt4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = lt4::all();
        // $tittle = 'tittle';
        return view('dashboard-admin.lt4.index',[
            "tittle" => "lt4"
            ], compact('data'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard-admin.lt4.create',[
            "tittle" => "tambah-tambah-lt4"
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
        lt4::create($data);
        return redirect()->to('tambah-lt4')->with('success','Berhasil Menambahkan Data');
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
        $data = lt4::where('id',$id)->first();
        return view('dashboard-admin.lt4.edit',[
            "tittle" => "tambah-tambah-lt4"
            ])->with('lt4',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lt4 $lt4, $id)
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
        lt4::where('id',$id)->update($data);
        return redirect()->to('tambah-lt4')->with('success','Berhasil Mengedit Data');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        lt4::where('id', $id)->delete();
        return redirect()->to('tambah-lt4')->with('success','Berhasil Menghapus Data');
    }
}
