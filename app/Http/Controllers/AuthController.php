<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Http\Requests\RegisterRequest;
use App\User;

class AuthController extends Controller
{
     public function getRegisterForm()
    {
      return view('register');
    }

    public function getLoginForm() {
        return view('login');
      }
        

    public function register(RegisterRequest $request)
  {
    $data = $request->validated();

    $user = User::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']) // bcrypt($data['password'])
    ]);

    auth()->login($user);
    // auth()->check();
    // auth()->user();
    // auth()->logout();
    return redirect('/login');
  }

  public function login(Request $request) {
    $credentials = [
      'email' => $request->get('email'),
      'password' => $request->get('password')
    ];
    if (auth()->attempt($credentials)) {
      return redirect('/');
    }

    return view('login', ['loginFailed' => true]);
  }

  public function logout() {
    auth()->logout();
    return redirect('/login');
  }
}
