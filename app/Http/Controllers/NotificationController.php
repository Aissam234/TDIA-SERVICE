<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function notify()
    {
        // Fetch notifications that are not marked as deleted
        $notifications = Notification::with('teacher')->where('deleted', false)->get();

        return view('student.blank', compact('notifications'));
    }
    public function index()
    {
        // Fetch notifications that are not marked as deleted
        $notifications = Notification::where('teacher_id', auth()->id())->where('deleted', false)->get();
        return view('profs.Annonce', compact('notifications'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'filliere' => 'required|string|max:255',
            'data' => 'required|string|max:65535',
            'file' => 'nullable|file|mimes:jpg,png,pdf,docx,txt|max:102400',
        ]);

        // Handle file upload
        $file = $request->file('file');
        $filePath = null;
        if ($file) {
            $filePath = $file->store('files', 'public');
        }

        // Create a new notification
        Notification::create([
            'teacher_id' => auth()->id(),
            'filliere' => $validatedData['filliere'],
            'data' => $validatedData['data'],
            'file' => $filePath,
            'deleted' => false,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Notification created successfully!');
    }

    public function markAsDeleted(Request $request)
    {
        // Check if delete_notifications key is present in the request
        if ($request->has('delete_notifications')) {
            // Validate the selected notifications for deletion
            $validatedData = $request->validate([
                'delete_notifications' => 'array',
                'delete_notifications.*' => 'exists:notifications,id',
            ]);

            // Mark selected notifications as deleted
            Notification::whereIn('id', $validatedData['delete_notifications'])
                        ->update(['deleted' => true]);

            return redirect()->back()->with('success', 'Selected notifications marked as deleted successfully!');
        }

        return redirect()->back()->with('warning', 'No notifications selected to delete.');
    }

    public function edit($id)
    {
        $notification = Notification::findOrFail($id);
        return view('profs.editNotification', compact('notification'));
    }

    public function update(Request $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'filliere' => 'required|string|max:255',
            'data' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:jpg,png,pdf,docx,txt|max:2048',
        ]);

        $notification = Notification::findOrFail($id);

        // Handle file upload
        $file = $request->file('file');
        if ($file) {
            $filePath = $file->store('files', 'public');
            $notification->file = $filePath;
        }

        // Update the notification
        $notification->filliere = $validatedData['filliere'];
        $notification->data = $validatedData['data'];
        $notification->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Notification updated successfully!');
    }

    public function destroy($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();

        return redirect()->back()->with('success', 'Notification deleted successfully!');
    }
}
