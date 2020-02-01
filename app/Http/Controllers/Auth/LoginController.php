<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $userInfo = Socialite::driver($provider)->user();
        // dd($userInfo);
        $newUser = $this->createUser($userInfo, $provider);
        auth()->login($newUser);
        return redirect()->to('/home');

        // $user->token;
    }

    public function createUser($userInfo, $provider)
    {
        $user=User::where('provider_id', $userInfo->id)->first();

        if ($user) {auth()->login($user, true);}
        else{
            if ($provider=='github') {
                $user=User::create([
                    'first_name'=>$userInfo->nickname,
                    'email'    => $userInfo->email,
                    'provider' => $provider,
                    'provider_id' => $userInfo->id,
                    'image'=>$userInfo->avatar,
                                       
                ]);
               

            } elseif ($provider=='google') {
                $user=User::create([
                    'first_name'=>$userInfo->user["given_name"],
                    'last_name'=>$userInfo->user["family_name"],
                    'email'    => $userInfo->email,
                    'provider' => $provider,
                    'provider_id' => $userInfo->id,
                    'image'=>$userInfo->getAvatar(),                    
                    
                ]);
            }
        }
        return $user;
    }
}
