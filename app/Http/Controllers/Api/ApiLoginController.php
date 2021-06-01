<?php


namespace App\Http\Controllers\Api;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiLoginController
{
    public function login(Request $request)
    {


        $user = User::where('email', $request->email)->first();

        if ($user &&
            Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return response()->json(auth()->user(), 200);
        }else{
            return response()->json('Missing or Incorrect Credentials, Please try again', 401);
        }

    }
}
