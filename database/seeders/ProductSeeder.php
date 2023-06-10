<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([

            [
                'name'=>"Chicken MO:MO",
                'price'=>"25",
                'description'=>"Delicious with Nepali taste",
                'category'=>"Mo:Mo",
                'gallery'=>'https://static.toiimg.com/photo/60275824.cms'
            ],

            [
                'name'=>"Veg MO:MO",
                'price'=>"20",
                'description'=>"Delicious with Nepali taste",
                'category'=>"Mo:Mo",
                'gallery'=>'https://st3.depositphotos.com/1491432/16181/i/1600/depositphotos_161818062-stock-photo-traditional-dumpling-momos-and-tomato.jpg'
            ]

        ]);
    }
}
