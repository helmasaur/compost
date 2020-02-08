<?php

use Illuminate\Database\Seeder;

class ModuleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\ModuleType::create(
            [
                'name' => 'Texte',
                'description' => 'Module ne contenant que du texte (format Markdown).'
                
            ]
        );
    }
}
