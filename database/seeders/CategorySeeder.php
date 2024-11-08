<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Truyện ngắn'],
            ['name' => 'Truyện dài'],
            ['name' => 'Trinh thám'],
            ['name' => 'Cổ tích'],
            ['name' => 'Văn học'],
        ]);
    }
}
