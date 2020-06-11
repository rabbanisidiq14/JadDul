<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $data['ruangan'] = DB::table('ruangan')->get();
        $hari = date ("D");
 
        switch($hari){
            case 'Sun':
                $data['hari_ini'] = "Minggu";
            break;
     
            case 'Mon':         
                $data['hari_ini'] = "Senin";
            break;
     
            case 'Tue':
                $data['hari_ini'] = "Selasa";
            break;
     
            case 'Wed':
                $data['hari_ini'] = "Rabu";
            break;
     
            case 'Thu':
                $data['hari_ini'] = "Kamis";
            break;
     
            case 'Fri':
                $data['hari_ini'] = "Jumat";
            break;
     
            case 'Sat':
                $data['hari_ini'] = "Sabtu";
            break;
            
            default:
                $data['hari_ini'] = "Tidak di ketahui";     
            break;
        }

        return view('home', $data);
    }

    public function about()
    {
        return view('root');
    }
}
