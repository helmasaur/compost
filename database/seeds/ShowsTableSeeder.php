<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class ShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Show::create(
            [
                'name' => 'Yu-Gi-Oh!',
                'user_id' => User::where('username', 'Horsengel')->firstOrFail()->id
            ]
        );
        App\Models\Show::create(
            [
                'name' => 'Sakura, chasseuse de cartes',
                'is_completed' => true,
                'user_id' => User::where('username', 'Horsengel')->firstOrFail()->id
            ]
        );
    }
}
