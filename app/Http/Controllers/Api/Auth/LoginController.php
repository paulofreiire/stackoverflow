<?php
namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     * @throws ValidationException
     */
    public function __invoke(LoginRequest $request)
    {

        if (!auth()->attempt($request->only(['email', 'password']))) {
            throw ValidationException::withMessages([
                'email' => 'The credentials you entered are incorrect.'
            ]);
        }
    }


}
