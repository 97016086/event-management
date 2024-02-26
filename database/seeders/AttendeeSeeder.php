<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttendeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = \App\Models\User::all();
        $events = \App\Models\Event::all();

        foreach($users as $user)
        {
          $eventsToAttend = $events->random(rand(1, 3));
        }
    }
}
