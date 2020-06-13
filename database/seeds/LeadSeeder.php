<?php

use App\Lead;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lead::create([
            'name' => 'Lead',
            'email' => 'lead@gmail.com',
            'phone' => '0999500087',
            'package' => 'Daily',
            'dob' => Carbon::parse('02/05/1996'),
            'age' => Carbon::parse('02/05/1996')->age,
            'branch_id' => 1,
            'user_id' => 1,
        ]);

        Lead::create([
            'name' => 'Lead2',
            'email' => 'lead2@gmail.com',
            'phone' => '0994580087',
            'package' => 'Monthly',
            'dob' => Carbon::parse('02/05/1969'),
            'age' => Carbon::parse('02/05/1969')->age,
            'branch_id' => 1,
            'user_id' => 1,
        ]);
    }
}
