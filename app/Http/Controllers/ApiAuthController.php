<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApiAuthController extends Controller
{
  //

  public function login(Request $request)
  {
    $formField = $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if (auth()->attempt($formField)) {
      $user = User::where('email', $formField['email'])->first();
      $token = $user->createToken('suki')->plainTextToken;

      return response([
        'user' => $user,
        'token' => $token
      ], 201);
    } else {

      return response([
        'message' => 'Bad credentials'
      ], 401);
    }
  }

  public function register(Request $request)
  {
    $formField = $request->validate([
      'name' => ['required', 'min:3'],
      'email' => 'required|email|unique:users,email',
      'password' => 'required|confirmed|min:6'
    ]);

    // bcrypt
    $formField['password'] = bcrypt($formField['password']);

    $user = User::create($formField);
    $token = $user->createToken('suki')->plainTextToken;

    return response([
      'user' => $user,
      'token' => $token
    ], 201);
  }

  public function logout(Request $request)
  {
    auth()->user()->tokens()->delete();

    return [
      'message' => 'Logged Out'
    ];
  }
}
