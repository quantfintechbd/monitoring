<?php
 
namespace Database\Seeders;

use App\Modules\BoAccount\Models\BoBranch;
use Illuminate\Database\Seeder; 

class BoBranchSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $brances = [
            [
                'name' => "Khatungonj",
                'short_code' => "Khatungonj",
                'prefix' => "KH",
                'contact_person' => "Nurul",
                'contact_no' => "01675268878",
                'phone' => "01675268878",
                'email' => "uk@rcl.com",
                'address' => "UK Branch",
                'type' => 'Digital Booth',
            ],
            [
                'name' => "Motijheel",
                'short_code' => "MJL",
                'prefix' => "MJ",
                'contact_person' => "Nurul",
                'contact_no' => "01675268877",
                'phone' => "01675268877",
                'email' => "us@rcl.com",
                'address' => "USA Branch",
                'type' => 'Branch',
            ],
            [
                'name' => "Singapore Branch",
                'short_code' => "Singapore Branch",
                'prefix' => "SB",
                'contact_person' => "Nurul",
                'contact_no' => "01675268876",
                'phone' => "01675268876",
                'email' => "sb@rcl.com",
                'address' => "Singapore Branch",
                'type' => 'Extension',
            ],
        ];

        BoBranch::insert($brances);
    }
}
