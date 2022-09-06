<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public static $middware=null;
    public static $setting=null;
    public static function middware($midware,$stting)
    {
        $rollconfig=array();
        $getsetting=array();
        foreach($midware as $r){
            array_push($rollconfig,$r->pagename);
        }
        foreach($stting as $s){
            $getsetting[$s->title]=$s->value;
                }



        self::$setting = $getsetting;
        self::$middware = $rollconfig;

        View::share('setting', $getsetting);
        View::share('rollconfig', $rollconfig);
    }
}
