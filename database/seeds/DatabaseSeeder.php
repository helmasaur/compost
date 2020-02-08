<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->delete();
        DB::table('shows')->delete();
        DB::table('sessions')->delete();
        DB::table('session_playlists')->delete();
        DB::table('ideas')->delete();
        DB::table('idea_categories')->delete();
        DB::table('modules')->delete();
        DB::table('module_types')->delete();
        DB::table('users')->delete();

        $this->call([
            UsersTableSeeder::class,
            ShowsTableSeeder::class,
            EpisodesTableSeeder::class,
            SessionsTableSeeder::class,
            SessionPlaylistsTableSeeder::class,
            IdeaCategoriesTableSeeder::class,
            IdeasTableSeeder::class,
            ModuleTypesTableSeeder::class,
            ModulesTableSeeder::class
        ]);
    }
}
