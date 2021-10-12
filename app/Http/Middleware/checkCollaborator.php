<?php

namespace App\Http\Middleware;

use App\Http\Controllers\RoleConstant;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkCollaborator
{
    function handle(Request $request, Closure $next) {
        $userLogin = Auth::user();

        if ($userLogin->role !== RoleConstant::COLLABORATOR) {
            abort(403);
        }

        return $next($request);
    }
}
