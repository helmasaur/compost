<?php

use Illuminate\Database\Seeder;
use App\Models\ModuleType;
use App\Models\User;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Module::create(
            [
                'name' => 'Texte',
                'content' => 'Nulla velit ad voluptate cupidatat veniam duis laboris labore eu laborum cillum mollit eu. Veniam sunt minim excepteur magna excepteur labore. Exercitation non esse non elit magna minim nulla officia. Nisi incididunt cillum do consectetur officia anim ad velit laboris cupidatat dolore culpa. Occaecat aute magna esse nostrud ad labore ut cupidatat amet reprehenderit est excepteur aute. Ex Lorem incididunt do velit sunt minim irure aute esse. Fugiat anim excepteur anim velit nisi id.',
                'module_type_id' => ModuleType::where('name', 'Texte')->firstOrFail()->id,
                'order' => 1,
                'user_id' => User::where('username', 'Horsengel')->firstOrFail()->id
            ]
        );
    }
}
