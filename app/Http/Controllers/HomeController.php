<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $agent = new Agent();
        $mob=  $agent->isMobile();
        if ($mob){
            $type= "mobile";
        }else{
            $type= "desktop";
        }
        $image= Image::where("text","LIKE",$type)->inRandomOrder()->first();
        return view('home',compact("image"));
    }


}
