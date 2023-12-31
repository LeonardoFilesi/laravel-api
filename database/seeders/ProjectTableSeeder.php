<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;
use App\Models\Project;
use Illuminate\Support\Str;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {
        for ($i = 0; $i < 20; $i++) {
            $project = new Project();
            $project->title = $faker->sentence(3); // le funzioni di php
            $project->slug = Str::slug($project->title, '-'); // le-funzioni-di-php
            $project->image = $faker->imageUrl(600, 300, 'Post', false, false);
            $project->content = $faker->text();
            $project->save();
        }
    }
}