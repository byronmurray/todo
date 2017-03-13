<?php

use App\User;
use App\Task;
use App\Note;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Task::truncate();
        Note::truncate();


        factory(User::class, 1)->create();
        factory(Task::class, 5)->create();
        factory(Note::class, 5)->create();
    }
}
