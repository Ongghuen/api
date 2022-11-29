<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB; 
use App\Http\Requests\UserCreateRequest;

class ProductController extends Controller
{
    public function index(){
        $product = Product::paginate(15);
        return view('dashboard.product', ['productList' => $product]);
    }
}
