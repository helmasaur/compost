<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\User;

class SessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\Session::create(
            [
                'date' => Carbon::now(),
                'user_id' => User::where('username', 'Horsengel')->firstOrFail()->id
            ]
        );
    }
}
