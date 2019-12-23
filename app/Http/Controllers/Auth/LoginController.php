<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Contracts\User;
use Laravel\Socialite\Facades\Socialite;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function showLoginForm()
    {
        $tab = 4;
        return view('auth.login', compact('tab'));
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->with(
            ['client_id' => '243235186177-opvkatfmdv87darh41kmfmp4grs142bo.apps.googleusercontent.com'],
            ['client_secret' => 'YGYDIp7igSNM6yxv28cJzNpM'],
            ['redirect' => 'http://hotel.com/callback'])->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->with(
            ['client_id' => '243235186177-opvkatfmdv87darh41kmfmp4grs142bo.apps.googleusercontent.com'],
            ['client_secret' => 'YGYDIp7igSNM6yxv28cJzNpM'],
            ['redirect' => 'http://hotel.com/callback']
            )->user();
        $dbUser = User::where('email', $user->email)->first();
        if ($dbUser) {
            Auth::login($dbUser);
            return redirect('/');
        } else {
            return \App\User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt($user->password),
            ]);
            $user->save();
            Auth::login($user, true);
            return redirect('/');
        }

    }

}
