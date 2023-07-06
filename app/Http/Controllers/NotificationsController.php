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

    public function markRead($id)
    {
        $notification = Auth::user()->unreadNotifications->where('id', $id)->first();
    
        if ($notification) {
            $notification->markAsRead();
        } else {
            return response()->json([
                'message' => 'Notification already read!',
            ]);
        }
    
        return response()->json([
            'message' => 'Read notification successfully!',
        ]);
    }
    
    public function readNotifications()
    {
        $read_notifications = Auth::user()->readNotifications;
        
        return response()->json([
            'notifications' => $read_notifications
        ]);
    }
    public function unReadNotifications()
    {
        $unread_notifications = Auth::user()->unReadNotifications;
        
        return response()->json([
            'notifications' => $unread_notifications
        ]);
    }
}
