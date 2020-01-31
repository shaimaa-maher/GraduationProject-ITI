<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;

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
        $newUser=User::where('provider_id', $userInfo->id)->first();

        if (!$newUser) {
            if ($provider=='github') {
                $newUser=User::create([
                    'first_name'=>$userInfo->nickname,
                    'email'    => $userInfo->email,
                    'provider' => $provider,
                    'provider_id' => $userInfo->id,
                    'image'=>$userInfo->avatar,
                    'last_name'=>"undefined",
                    'password'=>"undefined",
                    'birthdate'=>"1900-01-01",
                    'country'=>"undefined",
                    
                    
                ]);
            } elseif ($provider=='google') {
                $newUser=User::create([
                    'first_name'=>$userInfo->name,
                    // 'last_name'=>null,
                    'email'    => $userInfo->email,
                    'provider' => $provider,
                    'provider_id' => $userInfo->id,
                ]);
            }
        }
        return $newUser;
    }
}
