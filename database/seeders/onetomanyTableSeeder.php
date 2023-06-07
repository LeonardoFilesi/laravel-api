<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Onetomany;
use Faker\Generator as faker;
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
            $onetomany = new Onetomany();
            $onetomany->title = $faker->sentence(3); // le funzioni di php
            $onetomany->slug = Str::slug($onetomany->title, '-'); // le-funzioni-di-php
            $onetomany->type = $faker->text();
            $onetomany->content = $faker->text();
            $onetomany->save();
        }
    }
}
