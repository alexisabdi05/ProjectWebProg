<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\CourseStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'email' => 'tammyvisca08@gmail.com',
            'password'=>bcrypt('123456789'),
            'username'=>'walens_rebus',
            // 'valAdmin' => 0
        ]);
    }
}
