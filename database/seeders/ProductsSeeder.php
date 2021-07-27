<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=200; $i++){
            DB::table('products')->insert([
                'name' =>  Str::random(6),
                'desc' => Str::random(10) . ' ' . Str::random(20),
            ]);
        }
    }
}
