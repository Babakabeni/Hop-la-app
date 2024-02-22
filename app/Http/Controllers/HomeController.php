<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::user()->Fonction === null)
        {
            return redirect()->route('dashboard')->with('sucess', 'Vous ne pouvez pas acceder aux fonctionnalités');
        }
        return view('layouts.fontionnality');
    }
}
