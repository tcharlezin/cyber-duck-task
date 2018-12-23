<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    /****
     * Handle request to 404 page.
     * By default, the application have the register disabled.
     */
    public function showRegistrationForm()
    {
        abort(404, __("Registration is not authorized."));
    }

    /****
     * Don't receive any request for register
     * @param Request $request
     */
    public function register(Request $request)
    {
        abort(404, __("Registration is not authorized."));
    }
}
