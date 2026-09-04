<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicPhotoController extends Controller
{
 public function show($id)
 {
        return view('photo.show',['id' => $id]);
 }   
}
