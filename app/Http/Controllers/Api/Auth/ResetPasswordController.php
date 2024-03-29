<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;

/**
 * Description
 * @author : sean
 * @since : 2019-06-18
 * @copyright : Ant Internet Sdn Bhd
 */

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
    

    protected function sendResetResponse(Request $request, $response)
    {
        return response(['status' => 'success' , 'message'=> trans($response)]);
    }
    
    protected function sendResetFailedResponse(Request $request, $response)
    {
        return response(['status' => 'fail' , 'error'=> trans($response)], 422);
    }
}
