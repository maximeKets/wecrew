<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::factory()
            ->hasAttached(
                Skill::all()->random(3)
            )
            ->count(100)
            ->create();
    }
}
