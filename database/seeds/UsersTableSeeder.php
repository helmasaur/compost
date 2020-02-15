<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\User::create(
            [
                'username' => 'Horsengel',
                'email' => 'horsengel@canard.plastique',
                'password' => bcrypt('batteur')
            ]
        );
    }
}
