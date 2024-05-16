<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;

class ApiAuthController extends Controller
{
  // function untuk login
  public function login(Request $request)
  {
    try {
        $formField = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (auth()->attempt($formField)) {
            $user = User::where('username', $formField['username'])->first();
            $token = $user->createToken('suki')->plainTextToken;

            return response([
                'user' => $user,
                'token' => $token
            ], 201);
        } else {
            return response([
                'message' => 'Invalid username or password'
            ], 401);
        }
    } catch (\Throwable $e) {
        return response([
            'message' => 'An error occurred during login'
        ], 500);
    }
  }

  // function untuk register
  public function register(Request $request)
  {
    try {
      $formField = $request->validate([
        'name' => ['required', 'min:3'],
        'username' => 'required|unique:users,username',
        'phone' => 'required|unique:users,phone|max:13',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:6'
      ]);
  
      $formField['password'] = bcrypt($formField['password']);
  
      $user = User::create($formField);
      $token = $user->createToken('suki')->plainTextToken;
  
      $new = Transaction::create([
        'user_id' => $user->id,
      ]);
  
      Transaction::create([
        'user_id' => $user->id,
        'categories' => "Custom"
      ]);
  
      return response([
        'user' => $user,
        'token' => $token,
        'cart' => $new
      ], 201);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during register'
      ], 500);
    }
  }

  // function untuk update profile
  public function update(Request $request)
  {
    try {
      $user = auth()->user();
  
      $request->validate([
        'name' => 'min:3',
        'phone' => 'unique:users,phone|max:13',
        'email' => 'email|unique:users,email',
      ]);
  
      if ($request->name) {
        $user->name = $request->name;
      }
      if ($request->phone) {
        $user->phone = $request->phone;
      }
      if ($request->email) {
        $user->email = $request->email;
      }
      if ($request->alamat) {
        $user->address = $request->alamat;
      }
      $user->update();
  
      return response([
        'user' => $user,
        'token' => $request->bearerToken(),
      ]);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during update'
      ], 500);
    }
  }

  // function untuk upload image
  public function upload(Request $request)
  {
    try {
      $user = auth()->user();
      if ($request->image) {
        File::delete(storage_path('app/public/' . $user->image));
        $user->image = $request->image->store('avatar', 'public');
      }
      $user->update();
  
      return response([
        'user' => $user,
        'token' => $request->bearerToken(),
      ]);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during upload image'
      ], 500);
    }
  }

  // function untuk logout
  public function logout(Request $request)
  {
    try {
      auth()->user()->tokens()->delete();
      return response(['message' => 'Logged Out']);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during logout'
      ], 500);
    }
  }

  // function untuk check token
  public function token()
  {
    try {
      return response(['msg' => 'Token is valid']);
    } catch (\Throwable $th) {
      return response([
        'message' => 'An error occurred during check token'
      ], 500);
    }
  }
}
