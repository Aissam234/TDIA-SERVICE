<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Method to return the user calendar view
    public function userCalendar()
    {
        return view('student.calendar');
    }

    // Method to return the list of events as JSON
    public function listEvent(Request $request)
    {
        $start = date('Y-m-d', strtotime($request->start));
        $end = date('Y-m-d', strtotime($request->end));

        $events = Event::where('start_date', '>=', $start)
            ->where('end_date', '<=', $end)
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'title' => $item->title,
                    'start' => $item->start_date,
                    'end' => date('Y-m-d', strtotime($item->end_date . '+1 days')),
                    'category' => $item->category,
                    'className' => ['bg-' . $item->category]
                ];
            });

        return response()->json($events);
    }
}
