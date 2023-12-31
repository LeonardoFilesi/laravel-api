<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = ['XBOX', 'PLAYSTATION', 'PERSONALCOMPUTER'];
        foreach ($technologies as $technology_value) {
            $new_technology = new Technology();
            $new_technology->name_technologies = $technology_value;
            $new_technology->slug = Str::slug($technology_value);
            $new_technology->save();
        }
    }
}
