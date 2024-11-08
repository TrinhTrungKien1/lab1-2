<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0;$i<=100;$i++){
            DB::table('books')->insert([
                'title'=>fake()->word(5),
                'thumbnail'=>fake()->imageUrl(),
                'author'=>$faker->name,
                'publisher'=>$faker->domainName,
                'publication'=> Carbon::now(),
                'price'=> rand(1,100),
                'quantity'=> rand(1,50),
                'category_id'=> rand(1,5)
            ]);
        }
    }
}