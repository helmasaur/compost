<?php

use Illuminate\Database\Seeder;
use App\Models\IdeaCategory;
use App\Models\User;

class IdeasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Idea::create(
            [
                'title' => 'Danse de Caramelldansen',
                'description' => 'Danser tous ensemble sur Caramelldansen.',
                'idea_category_id' => IdeaCategory::where('name', 'IRL')->firstOrFail()->id,
                'user_id' => User::where('name', 'Horsengel')->firstOrFail()->id
            ]
        );
    }
}
