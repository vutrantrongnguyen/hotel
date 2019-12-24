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
            ['redirect' => 'http://127.0.0.1:8000/callback'])->redirect();
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
    public function redirectToProviderF()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallbackF()
    {
        $user = Socialite::driver('facebook')->user();

        $authUser = $this->findOrCreateUser($user);

        // Chỗ này để check xem nó có chạy hay không
        // dd($user);

        Auth::login($authUser, true);

        return redirect()->route('home');
    }

    private function findOrCreateUser($facebookUser){
        $authUser = \App\User::where('provider_id', $facebookUser->id)->first();

        if($authUser){
            return $authUser;
        }

        return User::create([
            'name' => $facebookUser->name,
            'password' => $facebookUser->token,
            'email' => $facebookUser->email,
            'provider_id' => $facebookUser->id,
            'provider' => $facebookUser->id,
            'role' => 'staff',
        ]);
    }
}
