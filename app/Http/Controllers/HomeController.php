<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }
    public function menu()
    {
        return view('menu');
    }
    public function home()
    {
        return view('Home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
    public function member_menu()
    {
        // Retrieve the authenticated user
        $user = auth()->user();

        // Retrieve notifications for the user
        $notifications = $user->unreadNotifications;

        // Mark notifications as read (optional)
        $user->unreadNotifications->markAsRead();

        return view('home', compact('notifications'));
    }

}
