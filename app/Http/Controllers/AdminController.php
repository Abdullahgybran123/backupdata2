<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminController extends Controller
{
    public function getData()
    {
        $admin = User::count();
        // dd($totalUser);
        return view('admin.admin', compact('admin'));
    }
}