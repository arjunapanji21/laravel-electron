<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function superadmin()
    {
        $master = [
            'logo' => asset('images/kobaps.png'),
        ];
        return inertia()->render('superadmin/home', compact('master'));
    }
}
