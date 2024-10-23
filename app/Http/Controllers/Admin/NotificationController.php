<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Notifications\UserNotification;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class NotificationController extends VoyagerBaseController
{
    public function index(Request $request)
    {
        $notifications = DatabaseNotification::all();
        return view('admin.notifications.index', compact('notifications'));
    }

    public function create(Request $request)
    {
        return view('admin.notifications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required',
        ]);

        $users = User::all();
        foreach ($users as $user) {
            $user->notify(new UserNotification($request->input('message')));
        }

        return redirect()->route('voyager.notifications.index')->with('success', 'Notification sent successfully!');
    }

    // Thêm các action khác như edit, delete, show tại đây nếu cần
}