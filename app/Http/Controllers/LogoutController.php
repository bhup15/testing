<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LogoutController extends Controller
{
    
    public function logout()
    {
        Auth::logout();

        // Redirect to a specific route after logout
        return redirect('/todos');
    }
}
