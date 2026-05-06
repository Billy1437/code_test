<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
 
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        DB::table('products')->insert([
            [
                'img' => 'adidas_ultraboost.jpg',
                'brand' => 'Adidas',
                'title' => 'Ultraboost',
                'rating' => 4.5,
                'reviews' => 110,
                'sellPrice' => 7500.00,
                'orders' => '200',
                'mrp' => '11444',
                'discount' => 25,
                'category' => 'men',
                'created_at' => now(),
                'updated_at' => now()
            ],
             [
                'img' => 'nike_jordan.jpg',
                'brand' => 'Nike',
                'title' => 'Jordan 1',
                'rating' => 4.2,
                'reviews' => 110,
                'sellPrice' => 8300.00,
                'orders' => '200',
                'mrp' => '11555',
                'discount' => 25,
                'category' => 'women',
                'created_at' => now(),
                'updated_at' => now()
             ],

             ]);



       
        
    }
}


       





