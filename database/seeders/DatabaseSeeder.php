<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(OSAndroidTableSeeder::class);
        $this->call(IOSOSTableSeeder::class);
    }
}

class OSAndroidTableSeeder extends Seeder
    {
        public function run()
        {
            DB::table('operating_system')->insert([
                [
                    'id' => '1',
                    'name' => 'Android',
                ],
            ]);
        }
    }
class IOSOSTableSeeder extends Seeder
    {
        public function run()
        {
            DB::table('operating_system')->insert([
                [
                    'id' => '2',
                    'name' => 'IOS',
                ],
            ]);
        }
    }
