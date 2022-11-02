<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    const title = 'Dashboard - Grocetaria';

    public function index()
    {
        return view('customer.dashboard', [
            'title' => self::title,
        ]);
    }

    public function indexadmin()
    {
        $countallpasien = User::count();
        return view('staff.dashboardstaff', [
            'title' => self::title,
            'countallpasien' => $countallpasien
        ]);
    }

}
