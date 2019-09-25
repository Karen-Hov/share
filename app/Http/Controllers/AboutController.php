<?php

namespace App\Http\Controllers;

use App\Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    //
    public  function index()
    {
        $article = new Image();
        $hash = $this->generateHash();
        $article->fill(["href" => "Dayle", "text" => "mobile", "hash" => $hash]);
        $article->save();
    }
    public function generateHash(){
        $random = Str::random(16);
        if (Image::where("hash",$random)->exists()){
            return $this->generateHash();

        }
        return $random;

    }


    public function hr()
    {
        $image= Image::where("text","LIKE","mobile")->random(1)->first();
        return view('about',compact("image"));
    }
}
