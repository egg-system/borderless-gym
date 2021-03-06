<?php

namespace Database\Seeds\Testing;

use App\Models\Gym;
use App\Models\Login;
use Illuminate\Database\Seeder;

class GymsTableSeeder extends Seeder
{
    public function run()
    {
        $gym = factory(Gym::class)->create();

        $loginEmail = config('test.seeds.default.email.gym');
        if (Login::where('email', $loginEmail)->exists()) {
            return;
        }

        $gym->login->update([
            'email' => $loginEmail,
        ]);
    }
}
