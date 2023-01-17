<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
}
