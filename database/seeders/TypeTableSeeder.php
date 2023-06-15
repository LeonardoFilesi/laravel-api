<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Type;
use Faker\Generator as faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = ['ActionRPG', 'FPS', 'MOBA', 'SoulsLike'];
        foreach($types as $type_value){
            $new_type= new Type();
            $new_type->name = $type_value;
            $new_type->slug = Str::slug($type_value, '-');
            $new_type->save();
        }
    }
}
