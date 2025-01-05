<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
	    $now = Carbon::now();

        // Sample tasks with client numbers
        $tasks = [
            [
                'name' => 'Draft Responsive Pleading',
                'description' => 'Prepare and submit responsive pleading.',
                'client_number' => '17201.01',
                'puppy_points' => 8,
                'severity' => 10,
                'deadline' => $now->copy()->addHours(24), // 24 hours from now
                'completed' => false,
            ],
            [
                'name' => 'Anti-SLAPP Reply Memo',
                'description' => 'Draft points and authorities for reply.',
                'client_number' => '17201.02',
                'puppy_points' => 6,
                'severity' => 8,
                'deadline' => $now->copy()->addHours(48), // 48 hours from now
                'completed' => false,
            ],
            [
                'name' => 'File Petition',
                'description' => 'Submit petition to court.',
                'client_number' => '17202.01',
                'puppy_points' => 4,
                'severity' => 2,
                'deadline' => $now->copy()->addHours(168), // 7 days from now
                'completed' => false,
            ],
            [
                'name' => 'Submit Discovery Motion',
                'description' => 'Motion related to discovery issues.',
                'client_number' => '17203.01',
                'puppy_points' => 7,
                'severity' => 9,
                'deadline' => $now->copy()->addHours(12), // 12 hours from now
                'completed' => false,
            ],
            [
                'name' => 'Prepare Client Update',
                'description' => 'Summarize progress and share with client.',
                'client_number' => '17204.01',
                'puppy_points' => 3,
                'severity' => 5,
                'deadline' => $now->copy()->addHours(36), // 36 hours from now
                'completed' => false,
            ],
            [
                'name' => 'Finalize Settlement Proposal',
                'description' => 'Draft and finalize settlement proposal.',
                'client_number' => '17201.03',
                'puppy_points' => 9,
                'severity' => 6,
                'deadline' => $now->copy()->addHours(72), // 72 hours from now
                'completed' => false,
            ],
        ];

        // Insert tasks into the database
        foreach ($tasks as $task) {
            Task::create($task);
        }
    }

}
