<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatpelController extends Controller
{
    public function index($id_matpel)
    {
    	$data['matpel'] = DB::table('matpel')->join('guru','matpel.id','=','guru.id_matpel')->where('matpel.id',$id_matpel)->get();
    	return view('pages.matpel',$data);
    }
}
