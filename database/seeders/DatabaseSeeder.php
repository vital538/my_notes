<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            NoteSeeder::class,
            TopicSeeder::class,
        ]);
    }
}
