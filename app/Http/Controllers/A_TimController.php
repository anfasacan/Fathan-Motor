<?php

namespace App\Http\Controllers;

use App\Tim;
use Illuminate\Http\Request;


class A_TimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function edit_tim(Tim $tim)
    {
        return view ('admin.edit.A_edit_tim',compact('tim'));
    }

    public function update_tim(request $request,tim $tim)
    {
        $request->validate([
            'id'=>'required',
            'nama'=>'required',
            'jabatan'=>'required',
        ]);

        $foto = $tim->foto;
        if($request->foto != null){
            $foto = $request->foto;
        }

        Tim::where('id',$tim->id)
        ->update([
            'id' => $request -> id,
            'nama' => $request -> nama,
            'jabatan' => $request -> jabatan
            ]);
        
        if($request -> hasFile('foto')){
            $request->file('foto') -> move('img/poto/tim/',$request->file('foto')->getClientOriginalName());
            $tim -> foto = $request -> file('foto')-> getClientOriginalName();
            $tim -> save();
        }

        return redirect()->back()->withSuccess('data berhasil diubah!');
    }

    public function tambah_tim()
    {
        return view ('admin.add.A_tambah_tim');
    }

    public function tambahkan_tim(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'nama'=>'required',
            'foto'=>'required',
            'jabatan'=>'required',
        ]);

        $tim = new Tim();
        $tim -> id = $request->id;
        $tim -> nama = $request->nama;
        $tim -> jabatan = $request->jabatan;
        

        if($request -> hasFile('foto')){
            $request->file('foto') -> move('img/poto/tim/',$request->file('foto')->getClientOriginalName());
            $tim -> foto = $request -> file('foto')-> getClientOriginalName();
        }

        $tim->save();
        return redirect()->back()->withSuccess('data berhasil ditambah');
    }

    public function hapus_tim(Tim $tim)
    {
        Tim::destroy($tim -> id);
        return redirect('/admin_tim')->with ('status','Data Ini Berita Berhasil Dihapus!');
    }

    public function index()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}