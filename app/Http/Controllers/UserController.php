<?php

namespace App\Http\Controllers;

class UserController extends Controller
{

  public function show($nama = "Raihan")
  {
    return view('welcome', [
      'nama' => $nama
    ]);
  }
}
