<?php

namespace App\Http\Controllers\OAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;
use Socialite;

class TwitterLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/home';

    /**
     * ユーザーをTwitterの認証ページにリダイレクトする
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Twitterからユーザー情報を取得する
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('twitter')->user();
        } catch (Exception $e) {
            return redirect('auth/twitter');
        }

        $authUser = $this->findOrCreateUser($user);

        Auth::login($authUser, true);

        return redirect()->route('home');
    }

    private function findOrCreateUser($twitterUser)
    {
        $authUser = User::where('twitter_id', $twitterUser->id)->first();

        if ($authUser){
            return $authUser;
        }

        return User::create([
            'name' => $twitterUser->name,
            'handle' => $twitterUser->nickname,
            'twitter_id' => $twitterUser->id
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

}
