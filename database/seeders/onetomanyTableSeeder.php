<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class onetomanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $project = new Project();
            $project->title = $faker->sentence(3); // le funzioni di php
            $project->slug = Str::slug($project->title, '-'); // le-funzioni-di-php
            $project->type = $faker->text();
            $project->content = $faker->text();
            $project->save();
        }
    }
}
