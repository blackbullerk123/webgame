<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
        $this->call(AdminTableSeeder::class);
        $this->call(CardTableSeeder::class);
        $this->call(TransactionTableSeeder::class);
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

class CardTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('operating_system')->insert([
            [
                'id' => '3',
                'name' => 'Card',
            ],
        ]);
    }
}

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@webgame.com',
                'password' => Hash::make('admin@123456'),
            ],
        ]);
    }
}

class TransactionTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admin_transaction')->insert([
            [
                'transaction_type' => 'momo,bank',
            ],
        ]);
    }
}
