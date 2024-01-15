<?php

namespace App\Http\Controllers;

use App\Models\merk;
use App\Models\ruangan;
use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class servicesController extends Controller
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
            $data = services::where('tanggal','like',"%$katakunci%")
            ->orWhereHas('ruangan', function ($query) use ($katakunci) {
                $query->where('nama_ruangan', 'like', '%' . $katakunci . '%');
                })
            ->orWhereHas('merk', function ($query) use ($katakunci) {
                $query->where('nama_merk', 'like', '%' . $katakunci . '%');
                })
            // ->orWhere('','like',"%$katakunci%")
            // ->orWhere('id_merk','like',"%$katakunci%")
            ->orWhere('status','like',"%$katakunci%")
            ->orWhere('keterangan','like',"%$katakunci%")
            ->paginate($jumlahbaris);
         } else{
            // $data_ruangan = ruangan::all();
            // $data_merk = merk::with('ruangan')->latest()->get();
            $data = services::paginate($jumlahbaris);
         }
        return view('dashboard.laporan-service.index',[
            "tittle" => "tambah-laporan-service"
            ],compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.laporan-service.create',[
            "tittle" => "tambah-laporan-service"
            ],[
            'data_ruangan'=> ruangan::all(),
            'data_merk'=> merk::all()
        ]);
    }
    
    public function getMerk($id)
    {
        $merk = merk::where('id_ruangan',$id)->get();
        return response()->json($merk);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('tanggal',$request->tanggal);
        Session::flash('id_ruangan',$request->id_ruangan);
        Session::flash('id_merk',$request->id_merk);
        Session::flash('status',$request->status);
        Session::flash('keterangan',$request->keterangan);

        $request->validate([
            'tanggal'=>'required',
            'id_ruangan'=>'required',
            'id_merk'=>'required',
            'status'=>'required',
            'keterangan'=>'required',
        ],[
            'tanggal.required' => 'Tanggal wajib diisi',
            'id_ruangan.required' => 'ruangan wajib diisi',
            'id_merk.required' => 'merk wajib diisi',
            'status.required' => 'status wajib diisi',
            'keterangan.required' => 'keterangan wajib diisi',
        ]);
        $data = [
            'tanggal'=>$request->tanggal,
            'id_ruangan'=>$request->id_ruangan,
            'id_merk'=>$request->id_merk,
            'status'=>$request->status,
            'keterangan'=>$request->keterangan,

        ];
        services::create($data);
        return redirect()->to('laporan-service')->with('success','Berhasil Menambahkan Data');
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
        $data = services::where('id',$id)->first();
        return view('dashboard.laporan-service.edit',[
            "tittle" => "tambah-laporan-service"
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
            'tanggal'=>'required',
            'id_ruangan'=>'required',
            'id_merk'=>'required',
            'status'=>'required',
            'keterangan'=>'required',
        ],[
            'tanggal.required' => 'Tanggal wajib diisi',
            'id_ruangan.required' => 'ruangan wajib diisi',
            'id_merk.required' => 'merk wajib diisi',
            'status.required' => 'status wajib diisi',
            'keterangan.required' => 'keterangan wajib diisi',
        ]);
        $data = [
            'tanggal'=>$request->tanggal,
            'id_ruangan'=>$request->id_ruangan,
            'id_merk'=>$request->id_merk,
            'status'=>$request->status,
            'keterangan'=>$request->keterangan,

        ];
        services::where('id',$id)->update($data);
        return redirect()->to('laporan-service')->with('success','Berhasil Mengedit Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response    
     */
    public function destroy($id)            
    {
        services::where('id', $id)->delete();
        return redirect()->to('laporan-service')->with('success','Berhasil Menghapus Data');
    }
}
