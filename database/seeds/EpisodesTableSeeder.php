<?php

use Illuminate\Database\Seeder;
use App\Models\Show;
use App\Models\User;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Episode::create(
            [
                'show_id' => Show::where('name', 'Yu-Gi-Oh!')->firstOrFail()->id,
                'episode_no' => 1,
                'user_id' => User::where('username', 'Horsengel')->firstOrFail()->id
            ]
        );
    }
}
