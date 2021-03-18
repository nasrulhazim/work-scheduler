<?php

namespace Database\Seeders\Mock;

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)
            ->create()
            ->each(function ($user) {
                $user->assignRole('user');

                $team = \App\Models\Team::factory()->create([
                    'user_id' => $user->id,
                ]);
            });
    }
}
