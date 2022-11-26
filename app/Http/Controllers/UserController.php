<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

  public function create() {
    return view('users.register');
  }

  public function store(Request $request) {
    $formField = $request->validate([
      'name' => ['required', 'min:3'],
      'email' => ['required', 'email', Rule::unique('users', 'email')],
      'password' => 'required|confirmed|min:6'
    ]);

    // bcrypt
    $formField['password'] = bcrypt($formField['password']);

    $user = User::create($formField);
    auth()->login($user);

    return redirect('/listings')->with('message', 'User created and logged in');
  }

  public function logout(Request $request) {
    auth()->logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/listings')->with('message', 'You have been logged out');
  }

  public function show() {
    return view('users.login');
  }

  public function authenticate() {
    $formField = request()->validate([
      'email' => ['required', 'email'],
      'password' => 'required'
    ]);

    if (auth()->attempt($formField)) {
      request()->session()->regenerate();

      return redirect('/listings')->with('message', 'You are now logged in');
    }

    return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
  }
}
