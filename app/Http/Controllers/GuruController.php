<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index($id_guru)
    {
    	$data['guru'] = DB::table('matpel')->join('guru','matpel.id','=','guru.id_matpel')->where('guru.id',$id_guru)->get();
    	return view('pages.guru',$data);
    }
}
