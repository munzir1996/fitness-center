<?php

use App\Reminder;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ReminderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reminder::create([
            'lead_id' => 1,
            'user_id' => 1,
            'reminder' => 'Monthly',
            'reminder_date' => Carbon::now()->addDays(2),
            'note' => 'Not Intrested',
            'status' => 'Completed',
        ]);

        Reminder::create([
            'lead_id' => 1,
            'user_id' => 1,
            'reminder' => 'Daily',
            'reminder_date' => Carbon::now()->addDays(1),
            'note' => 'Intrested',
            'status' => 'Pending',
        ]);
    }
}
