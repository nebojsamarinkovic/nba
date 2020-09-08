<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use App\Http\Requests\RegisterRequest;
use App\User;
use App\Mail\AccountConfirmation;
use Carbon\Carbon;

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

    Mail::to($user)->send(new AccountConfirmation($user));
    auth()->login($user);

    // auth()->login($user);
    // auth()->check();
    // auth()->user();
    // auth()->logout();
    return redirect('/');
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

  public function verifyUser($id){

    $user = User::findOrFail($id);

    $user->email_verified_at = new Carbon;
    $user->save();

    return redirect('/');
    // $user->update([
    //   'email_verified_at' => '123142',
    //   'sadasfa' => '21312414'
    // ]);
  } 
}
