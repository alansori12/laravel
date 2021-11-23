<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DosenModel;

class DosenController extends Controller
{
    public function index(){
        $dosen = DosenModel::all();
        return view('dosen',['data'=>$dosen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DosenModel::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'telp' => $request->telp,
            'email' => $request->email,
        ]);
        return redirect('dosen');
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
        $dtdosen = DosenModel::find($id);
        return view('edit',['data' => $dtdosen]);
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
        $dtdosen = DosenModel::find($id);
        $dtdosen -> update($request->all());
        return redirect('dosen')->with('berhasil','Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtdosen = DosenModel::find($id);
        $dtdosen -> delete();
        return redirect('dosen')->with('berhasil','Data berhasil dihapus');
    }
}
