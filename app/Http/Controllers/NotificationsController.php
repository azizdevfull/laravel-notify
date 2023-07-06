<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    public function index()
    {
        $notifications = Auth::user()->notifications;
        
        return response()->json([
            'notifications' => $notifications
        ]);
    }
}
