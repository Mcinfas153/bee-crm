<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateStatus(Request $request)
    {
        try{

            $user = User::find((int) $request->input('user'));
            $user->is_active = (int) $request->isActive;
            $user->save();

            $status = 204;

            $msg = config('msg.11');

        } catch (Exception $ex) {

            $status = 500;

            $msg = config('msg.100');

        }
        return response()->json([
            'status' => $status,
            'msg' => $msg
        ]);
    }
}
