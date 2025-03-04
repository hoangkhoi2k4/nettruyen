<?php

namespace App\Http\Controllers\Dev\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class AuthController extends Controller
{
    public function register(Request $request){

        $data = $request -> except('_token');
        $data['password'] = bcrypt($data['password']);
        $data['created_at'] = Carbon::now();

        $user = User::create($data);

        if(!$user){
            return redirect() -> back() -> with('error', 'Failed to register user');
        } 

        Auth::login($user);
        if(Auth::check()){
            return redirect() -> route('home');
        }
    }

    public function login(Request $request){

        $data = $request->only('username', 'password');
        if(Auth::attempt($data)){
            return redirect()->route('home');
        } else {
            return redirect()->back()->with('error', 'Failed to login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request -> session() -> invalidate();
        $request -> session() -> regenerateToken();
        return redirect() -> route('home');
    }
}
