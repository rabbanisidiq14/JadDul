<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function index($id_matpel)
    {
    	$data['guru'] = DB::table('guru')->join('matpel','guru.id_matpel','=','matpel.id')->where('matpel.id',$id_matpel)->get();
    	return view('pages.guru',$data);
    }
}
