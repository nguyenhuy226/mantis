<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('categories')->insert([
                'name' => "{$i}",
                'description' => "{$i}",
                'slug' => "{$i}",
                'status' => 1,
                'keyword' => "name{$i}",
                'image' => "images",
            ]);
        }
    }
}
