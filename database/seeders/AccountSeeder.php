<?php

namespace Database\Seeders;

use App\Models\Account;
use Carbon\Carbon;
use Database\Factories\AccountFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'role_id' => 2,
            'gender_id' => 1,
            'first_name' => "Louis",
            'last_name' => "Gustavo",
            'email' => "admin@mail.com",
            'display_picture_link' => "/storage/pictures/default.jpg",
            'password' => bcrypt("louis123"),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        
        Account::factory()->count(10)->create();
    }
}
