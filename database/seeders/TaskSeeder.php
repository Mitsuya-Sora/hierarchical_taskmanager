<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'user_id'        => 1,
            'title'          => '親タスク1',
            'status'         => 1,
            'parent_task_id' => 0,
            'created_at'     => now(),
            'updated_at'    => now()
        ]);
        Task::create([
            'user_id'        => 1,
            'title'          => '子タスク1',
            'status'         => 1,
            'parent_task_id' => 1,
            'created_at'     => now(),
            'updated_at'    => now()
        ]);
        Task::create([
            'user_id'        => 1,
            'title'          => '子タスク2',
            'status'         => 1,
            'parent_task_id' => 1,
            'created_at'     => now(),
            'updated_at'    => now()
        ]);
        Task::create([
            'user_id'        => 1,
            'title'          => '孫タスク1',
            'status'         => 1,
            'parent_task_id' => 3,
            'created_at'     => now(),
            'updated_at'    => now()
        ]);
        Task::create([
            'user_id'        => 1,
            'title'          => '孫タスク2',
            'status'         => 1,
            'parent_task_id' => 3,
            'created_at'     => now(),
            'updated_at'    => now()
        ]);
        Task::create([
            'user_id'        => 1,
            'title'          => '子タスク3',
            'status'         => 1,
            'parent_task_id' => 1,
            'created_at'     => now(),
            'updated_at'    => now()
        ]);
        Task::create([
            'user_id'        => 1,
            'title'          => '親タスク2',
            'status'         => 1,
            'parent_task_id' => 0,
            'created_at'     => now(),
            'updated_at'    => now()
        ]);
        Task::create([
            'user_id'        => 1,
            'title'          => '親タスク3',
            'status'         => 1,
            'parent_task_id' => 0,
            'created_at'     => now(),
            'updated_at'    => now()
        ]);
    }
}
