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
//            ->hasAttached(
//                Skill::factory()
//                    ->count(2)
//                    ->state(function (array $attributes, User $user) {
//                        return [
//                            'category_id' => Category::inRandomOrder()->first()->id,
//                        ];
//                    })
//            )
            ->count(100)
            ->create();
    }
}
