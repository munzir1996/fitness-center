<?php

namespace App\Http\Controllers;

use App\Reminder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(){

        $reminders = Reminder::query()->with(['lead'])
        ->where('reminders.reminder_date', now()->format('Y-m-d'))
        ->where('reminders.user_id', Auth::user()->id)
        ->where('reminders.status', 'pending')
        ->get();

        $data = [

            'fname' => 'Munzir',
            'lname' => 'Mukhtar',
            'reminders' => $reminders,
        ];

        return Inertia::render('Dashboard/Index', $data);

    }
}
