<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepostsController extends Controller
{
 public function create(Request $request)
    {
        $songName = $_POST['songName'];
        $urlSpotify = $_POST['urlSpotify'];
        $previewSpotify = $_POST['previewSpotify'];
        $datos=[$songName,$urlSpotify,$previewSpotify];
        return view('modalView',compact('datos'));
                
    }
}
