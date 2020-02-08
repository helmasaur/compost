<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class IdeaCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\IdeaCategory::create(
            [
                'name' => 'IRL',
                'description' => 'Idée d\'actvités pour les IRL.',
                'user_id' => User::where('name', 'Horsengel')->firstOrFail()->id
            ]
        );
        App\Models\IdeaCategory::create(
            [
                'name' => 'TTB TV',
                'description' => 'Proposition de séries pour la TTB TV.',
                'user_id' => User::where('name', 'Horsengel')->firstOrFail()->id
            ]
        );
    }
}
