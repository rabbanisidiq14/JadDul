<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RuanganController extends Controller
{
    public function index($id_ruangan,$hari)
    {
    	$data['jadwal'] = DB::table('jadwal')->join('kelas','jadwal.id_kelas','=','kelas.id')->join('matpel','jadwal.id_matpel','=','matpel.id')->join('guru','jadwal.id_guru','=','guru.id')->join('ruangan','jadwal.id_ruangan','=','ruangan.id')->where('jadwal.id_ruangan',$id_ruangan)->where('jadwal.hari', $hari)->get();
    	$data['hari'] = $hari;
    	return view('pages.info', $data);
    }
}
