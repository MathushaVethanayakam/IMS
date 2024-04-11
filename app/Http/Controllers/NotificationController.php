<?php

namespace App\Http\Controllers;
use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //
    public function index()
    {
        $notifications = Notification::latest()->get(); // Assuming you have a Notification model

        return view('notifications', compact('notifications'));
    }
}
