<?php

namespace App\Http\Controllers;
use App\Artikel;
use App\Tim;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        $tim = Tim::all();
        return view('layout/master',compact('artikel','tim'));
    }

    public function artikel(Artikel $artikel)
    {
        return view('artikel',compact('artikel'));
    }
    public function penawaran()
    {
        return view('penawaran');
    }

    public function kirim(Request $request)
    {
        $nama = $request->input('name');
        $subject = $request->email;
        $message = $request->pesan;
        return Redirect()->to('https://api.whatsapp.com/send?phone=6281514472908&text=*Nama%20%3A%20'.$nama.'*%0A%0A*E-mail%20%3A%20'.$subject.'*%0A%0A*Pesan%20%3A%20*%20'.$message);
    }

    public function login()
    {
        return view ('admin.login_admin');
    }
}
