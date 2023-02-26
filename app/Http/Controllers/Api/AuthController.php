<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\NotificationToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create([
           'name' => $request->input('name'),
           'email' => $request->input('email'),
           'phone' => $request->input('phone'),
            'password' => bcrypt($request->input('password')),
        ]);
        Log::debug('registration request', $request->all());
        return response()->json(data: array(
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'token' => explode('|', $user->createToken($request->input('device_name'))->plainTextToken)[1]
        ));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json(data: array(
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'token' => explode('|', $user->createToken($request->device_name)->plainTextToken)[1]
        ));
    }

    public function registerToken(Request $request)
    {
        NotificationToken::create([
            'token' => $request->input('notifyToken')
        ]);

        return response()->json([], 200);
    }

    public function resetPass(Request $request)
    {
        //
    }

    public function checkUser(Request $request)
    {
        Log::debug('check user request', [
            'request' => $request->query
        ]);
        $user = User::where('phone', $request->query('phone'))->first();

        if(!$user){
            return response()->json('no user found', 404);
        }

        //TODO: send otp via firebase.

        return response()->json('', 200);
    }
}
