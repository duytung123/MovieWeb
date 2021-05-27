<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;

class GoogleController extends Controller
{
    public function login12()
    {

    	 return view('login');
    }
     public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
     public function handleGoogleCallback()
    {
        try {
    
            $user = Socialite::driver('google')->user();
     		
            $finduser = User::where('google_id', $user->id)->first();
      		
            if($finduser){
     
                Auth::login($finduser);
    
               return redirect('/trangchu');
     
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id
                    
                ]);
    
                Auth::login($newUser);
     
                return redirect('/trangchu');
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
