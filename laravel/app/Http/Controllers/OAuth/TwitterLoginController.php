<?php

namespace App\Http\Controllers\OAuth;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Socialite;

class TwitterLoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * ユーザーをTwitterの認証ページにリダイレクトする
     *
     * @return Response
     */
    public function redirect()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Twitterからユーザー情報を取得する
     *
     * @return Response
     */
    public function callback(User $user)
    {
        try {
            $twitter_user = Socialite::driver('twitter')->userFromTokenAndSecret(config('services.twitter.access_token'),config('services.twitter.access_token_key'));
        } catch (Exception $e) {
            return redirect('auth/twitter');
        }
        $authUser = $user->firstOrCreateUser($twitter_user);

        Auth::login($authUser, true);

        if($authUser->registered_flg == false)
        {
            return redirect()->route('mypages.create');
        }else{
            return redirect()->route('mypages.show');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
