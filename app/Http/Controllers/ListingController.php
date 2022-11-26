<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{

  public function index()
  {
    return view('listings.index', [
      'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(6),
    ]);
  }

  public function show(Listing $listing)
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

    Listing::create($formField);

    /* Session::flash('message', 'Listing Created'); */

    /* dd($request->all()); */
    return redirect('/listings')->with('message', 'Listing Created Successfully');
  }

  public function edit(Listing $listing)
  {
    return view('listings.edit', ['listing' => $listing]);
  }

  public function update(Request $request, Listing $listing)
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

    /* Session::flash('message', 'Listing Created'); */

    /* dd($request->all()); */
    return back()->with('message', 'Listing updated Successfully');
  }

  public function destroy(Listing $listing)
  {
    // biar aman yg login aja
    if ($listing->user_id != auth()->id()) {
      abort(403, 'Gak boleh brow');
    }

    $listing->delete();
    return redirect('/listings')->with('message', 'Listing deleted successfully');
  }

  public function manage()
  {
    return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
  }
}
