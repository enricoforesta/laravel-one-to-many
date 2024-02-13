<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            $project = new Project();
            $project->title = $faker->sentence(3);
            $project->description = $faker->text(50);
            $project->slug = Str::of($project->title)->slug('-');
            $project->language = $faker->sentence(1);
            $project->start_date = $faker->date('Y_m_d');
            $project->save();
        }
    }
}
