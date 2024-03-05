<?php

namespace Database\Seeders;

use App\Models\User;
use App\Modules\Main\Enums\UserStatusEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(
            ['username' => 'admin'],
            [
                'password' => Hash::make('12345678'),
                'name' => 'Administrator',
                'email' => 'superadmin@example.com',
                'mobile' => '01821742285',
                'nid' => '12345678',
                'date_of_birth' => '1996-12-30',
                'status' => UserStatusEnum::Verified
            ]
        );
    }
}
