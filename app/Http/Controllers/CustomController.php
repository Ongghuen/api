<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Custom;

class CustomController extends Controller
{
    public function index(){
        $custom = Custom::with('transactions')->paginate(15);
        return view('dashboard.custom', ['customList' => $custom]);
    }
}
