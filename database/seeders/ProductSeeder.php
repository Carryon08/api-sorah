<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Iphone 13',
            'description' => 'Mobile phone',
            'amount' => 3300
        ]);
        DB::table('products')->insert([
            'name' => 'Ipad',
            'description' => 'Apple tablet',
            'amount' => 4500
        ]);
        DB::table('products')->insert([
            'name' => 'Xbox',
            'description' => 'Videoconsole',
            'amount' => 8300
        ]);
    }
}
