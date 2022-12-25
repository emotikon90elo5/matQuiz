<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\questions;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        questions::factory(1000)->create();
        questions::create(['category'=> 'x',
    'subCategory'=> 'xy',
    'question'=> '2x=10',
    'trueAnswer'=> 1,
    'answer1'=> '5',
    'answer2'=>'2',
    'answer3'=>'10',
    'answer4'=>'5'
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
