<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AddController extends Controller
{
    public function index(Request $request)
    {
        $mobile  = $request->file("mobile");
        $descop  = $request->file("desktop");
     if ($mobile){
         foreach ($mobile as $m){
             $filename = microtime().'.'.$m->getClientOriginalExtension();
             $m->move(public_path('images'), $filename);
             $img = new Image();
             $img->href =  $filename;
             $img->text =  "mobile";
             $img->hash = $this->generateHash();
             $img->save();
         }
     }
     if ($descop){
         foreach ($descop as $m){
             $filename = microtime().'.'.$m->getClientOriginalExtension();
             $m->move(public_path('images'), $filename);
             $img = new Image();
             $img->href =  $filename;
             $img->text =  "desktop";
             $img->hash = $this->generateHash();
             $img->save();
         }
     }
     $img = Image::all();
//     foreach ($img as $val){
//         if($val->text === 'mobile'){
//
//             echo $val->href;
//         }
//     }
        return view('page',compact('img'));
    }
    public function generateHash(){
        $random = Str::random(16);
        if (Image::where("hash",$random)->exists()){
            return $this->generateHash();
        }
        return $random;

    }


}
