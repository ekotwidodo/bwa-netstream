<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            [
                'name' => 'basic',
                'price' => 199000,
                'max_days' => 30,
                'max_users' => 1,
                'is_download' => 1,
                'is_4k' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'standard',
                'price' => 299000,
                'max_days' => 30,
                'max_users' => 3,
                'is_download' => 1,
                'is_4k' => 0,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'premium',
                'price' => 399000,
                'max_days' => 60,
                'max_users' => 5,
                'is_download' => 1,
                'is_4k' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'gold',
                'price' => 599000,
                'max_days' => 60,
                'max_users' => 7,
                'is_download' => 1,
                'is_4k' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
