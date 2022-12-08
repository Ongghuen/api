<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB; 
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use Illuminate\Support\Facades\File; 

class UserController extends Controller
{
  public function index(Request $request){
    $keyword = $request->keyword;

    $user = User::with('roles')
              ->where(function ($query) use($keyword){
                $query
                  ->where('name', 'LIKE', '%'.$keyword.'%')
                  ->orWhere('phone', 'LIKE', '%'.$keyword.'%')
                  ->orWhere('username', 'LIKE', '%'.$keyword.'%')
                  ->orWhere('address', 'LIKE', '%'.$keyword.'%')
                  ->orWhere('email', 'LIKE', '%'.$keyword.'%');
              })
              ->whereHas('roles', function($query) use($keyword){
                $query->where('name', 'User');
              })
              ->sortable()
              ->paginate(15);
    return view('dashboard.user', ['userList' => $user]);
  }

  public function update(UserUpdateRequest $request, $id){
    $user = User::findOrFail($id);

    $user->update($request->all());
    if($user){
      Session::flash('status','failed');
      Session::flash('message', 'update data pengguna success!');
    }
    return redirect('/user');
  }

  public function store(UserCreateRequest $request){
    $newUser = new User;

    if($request->image){
      $newUser->image = $request->image->store('user_image', 'public');
    }

    $newUser->name = $request->name;
    $newUser->username = $request->username;
    $newUser->email = $request->email;
    $newUser->phone = $request->phone;
    $newUser->address = $request->address;
    $newUser->role_id = 2;
    $newUser->password = bcrypt($request->password);
    $newUser->save();

    if($newUser){
        Session::flash('status','success');
        Session::flash('message', 'tambah pengguna baru sukses!');
    }
    return redirect('/user');
  }

  public function destroy($id){
    $delete = User::findOrFail($id);
    $delete->delete();

    if($delete){
        Session::flash('status','success');
        Session::flash('message', 'hapus data pengguna sukses.');
    }

    return redirect('/user');
  }

  public function profile(UserUpdateRequest $request, $id){
    $user = User::findOrFail($id);

    if($request->image){
      File::delete(storage_path('app/public/' . User::find($id)->image));
      $user->image = $request->image->store('product_image', 'public');
    }

    $user->name = $request->name;
    $user->phone = $request->phone;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->address = $request->address;
    $user->update();
    if($user){
      Session::flash('status','success');
      Session::flash('message', 'update data profile sukses!');
    }
    return back();
  }

  // public function create() {
  //   return view('users.register');
  // }

  // public function store(Request $request) {
  //   $formField = $request->validate([
  //     'name' => ['required', 'min:3'],
  //     'email' => ['required', 'email', Rule::unique('users', 'email')],
  //     'password' => 'required|confirmed|min:6'
  //   ]);

  //   // bcrypt
  //   $formField['password'] = bcrypt($formField['password']);

  //   $user = User::create($formField);
  //   auth()->login($user);

  //   return redirect('/listings')->with('message', 'User created and logged in');
  // }

  // public function logout(Request $request) {
  //   auth()->logout();

  //   $request->session()->invalidate();
  //   $request->session()->regenerateToken();

  //   return redirect('/login')->with('message', 'You have been logged out');
  // }

  // public function show() {
  //   return view('users.login');
  // }

  // public function authenticate() {
  //   $formField = request()->validate([
  //     'email' => ['required', 'email'],
  //     'password' => 'required'
  //   ]);

  //   if (auth()->attempt($formField)) {
  //     request()->session()->regenerate();

  //     return redirect('/dashboard')->with('message', 'You are now logged in');
  //   }

  //   return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
  // }
}
