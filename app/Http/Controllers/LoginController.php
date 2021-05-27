<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use JWTAuth;
use Auth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Response;
class LoginController extends Controller
{
    public function Register(Request $request)
    {      
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return response()->json($user);
    }
    public function Login(Request $request)
    {

        $input = $request->only('email', 'password');
        $token = null;
        if (!$token = JWTAuth::attempt($input)) {
            return response()->json("fails", 401);
        } 
        return response()->json([
            'status' => true,
            'message' => '正常にログイン',
            'token' => $token,
        ]);
    }
    public function getUser(Request $request)
    {
        $user = Auth::user();
        if($user){
            return response()->json([$user],200);
        }
        return response()->json(['message'=>"fails",200]);
    }

}
