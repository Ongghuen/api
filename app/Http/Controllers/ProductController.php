<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{

  public function index()
  {
    return view('dashboard.product', [
      'listings' => Product::latest()->filter(request(['tag', 'search']))->simplePaginate(6),
    ]);
  }

  public function show(Product $listing)
  {
    return view('listings.show', [
      'listing' => $listing,
    ]);
  }

  public function create()
  {
    return view('listings.create');
  }

  public function store(Request $request)
  {
    $formField = $request->validate([
      'title' => 'required',
      'company' => ['required', Rule::unique("listings", "company")],
      'location' => 'required',
      'website' => 'required',
      'email' => ['required', 'email'],
      'tags' => 'required',
      'description' => 'required',
    ]);

    if ($request->hasFile('logo')) {
      $formField['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $formField['user_id'] = auth()->id();

    Product::create($formField);

    /* Session::flash('message', 'Product Created'); */

    /* dd($request->all()); */
    return redirect('/listings')->with('message', 'Product Created Successfully');
  }

  public function edit(Product $listing)
  {
    return view('listings.edit', ['listing' => $listing]);
  }

  public function update(Request $request, Product $listing)
  {

    // biar aman yg login aja
    if ($listing->user_id != auth()->id()) {
      abort(403, 'Gak boleh brow');
    }

    $formField = $request->validate([
      'title' => 'required',
      'company' => ['required'],
      'location' => 'required',
      'website' => 'required',
      'email' => ['required', 'email'],
      'tags' => 'required',
      'description' => 'required',
    ]);

    if ($request->hasFile('logo')) {
      $formField['logo'] = $request->file('logo')->store('logos', 'public');
    }

    $listing->update($formField);

    /* Session::flash('message', 'Product Created'); */

    /* dd($request->all()); */
    return back()->with('message', 'Product updated Successfully');
  }

  public function destroy(Product $listing)
  {
    // biar aman yg login aja
    if ($listing->user_id != auth()->id()) {
      abort(403, 'Gak boleh brow');
    }

    $listing->delete();
    return redirect('/listings')->with('message', 'Product deleted successfully');
  }

  public function manage()
  {
    return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
  }
}
