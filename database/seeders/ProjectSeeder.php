<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Model
use App\Models\Project;

// Faker
use Faker\Generator as Faker;
//Str
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i<10; $i++){
            $title = $faker->sentence(3); //lo definisco prima fuori per poterlo mettere nello slug
            
            Project::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'description' => $faker->paragraph(),
                'link' => $faker->sentence(15),
            ]);
        }
    }
}
