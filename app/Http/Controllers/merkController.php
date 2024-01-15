<?php

namespace App\Http\Controllers;

use App\Models\merk;
use App\Models\ruangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class merkController extends Controller
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
            $data = merk::where('nama_merk','like',"%$katakunci%")
            ->orWhereHas('ruangan', function ($query) use ($katakunci) {
                $query->where('nama_ruangan', 'like', '%' . $katakunci . '%');
                })
            ->orWhere('jenis','like',"%$katakunci%")
            ->orWhere('keterangan','like',"%$katakunci%")
            ->paginate($jumlahbaris);
         } else{
            $data = merk::with('ruangan')->latest()->get();
         }
        return view('dashboard.merk.index',[
            "tittle" => "tambah-tambah-merk"
            ], compact('data'));
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.merk.create',[
            "tittle" => "tambah-tambah-merk"
            ],['data_ruangan'=> ruangan::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nama_merk',$request->merk);
        Session::flash('id_ruangan',$request->ruangan);
        Session::flash('jenis',$request->jenis);
        Session::flash('keterangan',$request->keterangan);

        $request->validate([
            'nama_merk'=>'required',
            'jenis'=>'required',
            'keterangan'=>'required',
        ],[
            'nama_merk.required' => 'nama_merk wajib diisi',
            'jenis.required' => 'jenis wajib diisi',
            'keterangan.required' => 'keterangan wajib diisi',
        ]);
        $data = [
            'id_ruangan'=>$request->id_ruangan,
            'nama_merk'=>$request->nama_merk,
            'jenis'=>$request->jenis,
            'keterangan'=>$request->keterangan,

        ];
        merk::create($data);
        return redirect()->to('tambah-merk')->with('success','Berhasil Menambahkan Data');
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
        $data = merk::where('id',$id)->first();
        return view('dashboard.merk.edit',[
            "tittle" => "tambah-tambah-merk"
            ],[
                'data_ruangan' => ruangan::all()
            ])->with('merk',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, merk $merk, $id)
    {
        $request->validate([
            'nama_merk'=>'required',
            'jenis'=>'required',
            'keterangan'=>'required',
        ],[
            'nama_merk.required' => 'nama_merk wajib diisi',
            'jenis.required' => 'jenis wajib diisi',
            'keterangan.required' => 'keterangan wajib diisi',
        ]);
        $data = [
            'id_ruangan'=>$request->id_ruangan,
            'nama_merk'=>$request->nama_merk,
            'jenis'=>$request->jenis,
            'keterangan'=>$request->keterangan,

        ];
        merk::where('id',$id)->update($data);
        return redirect()->to('tambah-merk')->with('success','Berhasil Mengedit Data');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        merk::where('id', $id)->delete();
        return redirect()->to('tambah-merk')->with('success','Berhasil Menghapus Data');
    }
}

