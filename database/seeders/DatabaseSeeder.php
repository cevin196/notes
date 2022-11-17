<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Note;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            NoteSeeder::class,
            CategorySeeder::class,
        ]);

        foreach (Note::all() as $note) {
            $categories = Category::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $note->categories()->attach($categories);
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
