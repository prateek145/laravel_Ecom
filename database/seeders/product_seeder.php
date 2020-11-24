<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class product_seeder extends Seeder
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
            'name'=>'Iphone',
            'price'=>'60000',
            'gallery'=>'https://cdn.cultofmac.com/wp-content/uploads/2017/12/iPhone-X.jpg',
            'category'=>'mobile',
            'description'=>'beaty with power phone'
        
        ]
    );
    }
}
