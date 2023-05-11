<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LogoutResponse as LogoutResponseContract;

class LogoutResponse implements LogoutResponseContract
{
    /**
     * to response
     */
    public function toResponse($request)
    {
        return redirect('/login');
    }
}
