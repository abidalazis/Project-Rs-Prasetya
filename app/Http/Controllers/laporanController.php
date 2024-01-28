<?php

namespace App\Http\Controllers;

use App\Models\laporan_it;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
     
    public function index(Request $request)
    {
        $jumlahbaris = 10;
        $katakunci= $request->katakunci;
        if(strlen($katakunci)){
            $data = laporan_it::where('tanggal','like',"%$katakunci%")
            ->orWhereHas('ruangan', function ($query) use ($katakunci) {
                $query->where('nama_ruangan', 'like', '%' . $katakunci . '%');
                })
            ->orWhereHas('merk', function ($query) use ($katakunci) {
                $query->where('nama_merk', 'like', '%' . $katakunci . '%');
                })
            // ->orWhere('','like',"%$katakunci%")
            // ->orWhere('id_merk','like',"%$katakunci%")
            ->orWhere('status','like',"%$katakunci%")
            ->orWhere('keterangan','like',"%$katakunci%");
            // ->paginate($jumlahbaris);
         } else{
            // $data_ruangan = ruangan::all();
            // $data_merk = merk::with('ruangan')->latest()->get();
            $data = laporan_it::get();
         }
        return view('laporan.laporan-it.index',[
            "tittle" => "tambah-laporan-it"
            ],compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporan.laporan-it.create',[
            "tittle" => "tambah-laporan-it"
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
        Session::flash('nama',$request->nama);
        Session::flash('tanggal',$request->tanggal);
        Session::flash('unit',$request->unit);
        Session::flash('jenis',$request->jenis);
        Session::flash('keluhan',$request->keluhan);
        Session::flash('jam_laporan',$request->jam_laporan);
        Session::flash('jam_selesai',$request->jam_selesai);
        Session::flash('jenis_keluhan',$request->jenis_keluhan);
        Session::flash('keterangan',$request->keterangan);

        $request->validate([
            'nama'=>'required',
            'tanggal'=>'required',
            'unit'=>'required',
            'jenis'=>'required',
            'keluhan'=>'required',
            'jam_laporan'=>'required',
            'jam_selesai'=>'required',
            'jenis_keluhan'=>'required',
            'keterangan'=>'required'
        ],[
            'nama.required'=>'Nama wajib di isi!',
            'tanggal.required'=>' Tanggal wajib di isi!',
            'unit.required'=>'Unit wajib di isi!',
            'jenis.required'=>'Jenis wajib di isi!',
            'keluhan.required'=>'keluhan wajib di isi!',
            'jam_laporan.required'=>'Jam laporan wajib di isi!',
            'jam_selesai.required'=>'jam selesai wajib di isi!',
            'jenis_keluhan.required'=>'jenis_keluhan waktu wajib di isi!',
            'keterangan.required'=>'Keterangan wajib di isi!'
        ]);
        $data = [ 
            'nama'=>$request->nama,
            'tanggal'=>$request->tanggal,
            'unit'=>$request->unit,
            'jenis'=>$request->jenis,
            'keluhan'=>$request->keluhan,
            'jam_laporan'=>$request->jam_laporan,
            'jam_selesai'=>$request->jam_selesai,
            'jenis_keluhan'=>$request->jenis_keluhan,
            'keterangan'=>$request->keterangan
        ];
        laporan_it::create($data);
        return redirect()->to('laporan-it')->with('success','Berhasil Menambahkan Data');
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
        $data = laporan_it::where('id',$id)->first();
        return view('laporan.laporan-it.edit',[
            "tittle" => "tambah-laporan-it"
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
        Session::flash('nama',$request->nama);
        Session::flash('tanggal',$request->tanggal);
        Session::flash('unit',$request->unit);
        Session::flash('jenis',$request->jenis);
        Session::flash('Keluhan',$request->Keluhan);
        Session::flash('jam_laporan',$request->jam_laporan);
        Session::flash('jam_selesai',$request->jam_selesai);
        Session::flash('jenis_keluhan',$request->jenis_keluhan);
        Session::flash('keterangan',$request->keterangan);

        $request->validate([
            'nama'=>'required',
            'tanggal'=>'required',
            'unit'=>'required',
            'jenis'=>'required',
            'Keluhan'=>'required',
            'jam_laporan'=>'required',
            'jam_selesai'=>'required',
            'jenis_keluhan'=>'required',
            'keterangan'=>'required'
        ],[
            'nama.required'=>'Nama wajib di isi!',
            'tanggal.required'=>' Tanggal wajib di isi!',
            'unit.required'=>'Unit wajib di isi!',
            'jenis.required'=>'Jenis wajib di isi!',
            'Keluhan.required'=>'keluhan wajib di isi!',
            'jam_laporan.required'=>'Jam laporan wajib di isi!',
            'jam_selesai.required'=>'jam selesai wajib di isi!',
            'jenis_keluhan.required'=>'jenis_keluhan waktu wajib di isi!',
            'keterangan.required'=>'Keterangan wajib di isi!'
        ]);
        $data = [ 
            'nama'=>$request->nama,
            'tanggal'=>$request->tanggal,
            'unit'=>$request->unit,
            'jenis'=>$request->jenis,
            'keluhan'=>$request->keluhan,
            'jam_laporan'=>$request->jam_laporan,
            'jam_selesai'=>$request->jam_selesai,
            'jenis_keluhan'=>$request->jenis_keluhan,
            'keterangan'=>$request->keterangan
        ];
        laporan_it::where('id',$id)->update($data);
        return redirect()->to('laporan-it')->with('success','Berhasil Mengedit Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response    
     */
    public function destroy($id)            
    {
        laporan_it::where('id', $id)->delete();
        return redirect()->to('laporan-it')->with('success','Berhasil Menghapus Data');
    }
}
