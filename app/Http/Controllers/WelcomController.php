<?php

namespace App\Http\Controllers;

use App\Image;
use Faker\Provider\File;
use Illuminate\Http\Request;

class WelcomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('welcome');
    }
    public function delete($id){
        $image = Image::find($id);
        $href = "images/".$image->href;
        if(\File::exists(public_path($href))){

            \File::delete(public_path($href));

        }
        $image->delete();
        return response()->json("success");
    }
}
