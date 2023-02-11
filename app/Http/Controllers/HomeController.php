<?php

namespace App\Http\Controllers;

use Laratrust;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Laratrust::hasRole('admin')) {
            return $this->adminDashboard();
        }

        if (Laratrust::hasRole('member')) {
            return $this->memberDashboard();
        }

        return view('home');
    }

    protected function adminDashboard()
    {
        return view('admin.index');
    }

    protected function memberDashboard()
    {
        return view('welcome');
    }

}
