<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

/**
 * Description
 * @author : sean
 * @since : 2019-06-18
 * @copyright : Ant Internet Sdn Bhd
 */

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function sendResetLinkResponse(Request $request, $response)
    {
        return response(['status' => 'success' , 'message'=> $response]);
    }
    
    protected function sendResetLinkFailedResponse(Request $request, $response)
    {
        return response(['status' => 'fail' , 'error'=> $response], 422);
    }
}
