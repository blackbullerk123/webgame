<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        // $user = $this->createUser($getInfo, $provider);
        $existingUser = User::where('provider_id', $getInfo->id)->orWhere('email', $getInfo->email)->first();

        if($existingUser){
            // log them in
            Auth::login($existingUser, true);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $getInfo->name;
            $newUser->email           = $getInfo->email;
            $newUser->avatar          = $getInfo->avatar;
            $newUser->password        = hash::make($getInfo->id);
            $newUser->provider_id     = $getInfo->id;
            $newUser->save();

            Auth::login($newUser, true);
        }
        if(session('link') != null){
            return redirect(session('link'));
        }
        else{
            return redirect()->route('index');
        }
    }

    // function createUser($getInfo, $provider){
    //     $user = User::where('provider_id', $getInfo->id)->orWhere('email', $getInfo->email)->first();
    //     if($user){
    //         // log them in
    //         Auth::login($user, true);
    //     } else {
    //         $user = User::create([
    //             'name' => $getInfo->name,
    //             'email' => $getInfo->email,
    //             'avatar' => $getInfo->avatar,
    //             'provider' => $provider,
    //             'provider_id' => $getInfo->id
    //         ]);
    //     }
    // }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
