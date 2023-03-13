<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function harta()
    {
        return inertia()->render('superadmin/akun/harta');
    }
}
