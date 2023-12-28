<?php

namespace App\Http\Controllers;

use Diglactic\Breadcrumbs\Breadcrumbs;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('pages.home', [
            'breadcrumbs' => Breadcrumbs::render('dashboard'),
        ]);
    }

    public function dashboard()
    {
        return view('dashboard', [
            'breadcrumbs' => Breadcrumbs::render('dashboard'),
        ]);
    }
}
