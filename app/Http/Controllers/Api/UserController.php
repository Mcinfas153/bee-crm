<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {

            $request->validate([
                'name' => 'required|min:6',
                'email' => 'required|email',
                'password' => 'required|min:8',
                'repassword' => 'required|same:password',
                'agreed' => 'required',
            ]);

            if(User::where('email', $request->email)->get()){
                return response()->json([
                    'message' => config('msg.2'),
                ], 200);
            }
    
            $user = new User();
    
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
    
            return response()->json([
                'message' => config('msg.1'),
                'user' => $user
            ], 200);
    }
}
