<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index($id_kelas, $hari)
    {
    	$data['kelas'] = DB::table('jadwal')->join('kelas','jadwal.id_kelas','=','kelas.id')->join('matpel','jadwal.id_matpel','=','matpel.id')->join('guru','jadwal.id_guru','=','guru.id')->join('ruangan','jadwal.id_ruangan','=','ruangan.id')->where('jadwal.id_kelas',$id_kelas)->where('jadwal.hari', $hari)->get();
    	$data['nama'] = DB::table('kelas')->where('id',$id_kelas)->get();
    	return view('pages.kelas_jadwal',$data);
    }
}
