<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
        [
            'name'=>"Iphone 12",
            'price'=>'6000',
            "catigory"=>"mobile",
            "descr"=>"ram:6 storage:128",
            'gallery'=>"https://cdn.alzashop.com/Foto/f16/RI/RI035b1.jpg",
        ],);
    }
}
