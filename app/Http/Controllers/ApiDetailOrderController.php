<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiDetailOrderController extends Controller
{
  public function index()
  {
    $orders = "loldek";
    //
    return response()->json(['orders' => $orders]);
  }

  public function create()
  {
    //
  }

  public function store(Request $request)
  {
    //
  }

  public function show($id)
  {
    //
  }

  public function edit($id)
  {
    //
  }

  public function update(Request $request, $id)
  {
    //
  }

  public function destroy($id)
  {
    //
  }
}
