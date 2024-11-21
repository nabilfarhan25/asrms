<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'Manager', 'email' => 'manager@srms.com', 'password' => '$2y$12$05NJBt2DOUeUUFNtYnYnXOMWsh3jpOYECAODlqQ.fWKOpsQg01FEG','created_at' => now(), 'updated_at' => now(),'role'=>'manager'],
        ]);
    }
}