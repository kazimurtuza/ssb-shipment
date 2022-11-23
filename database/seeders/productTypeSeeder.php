<?php

namespace Database\Seeders;

use App\Models\product_type;
use Illuminate\Database\Seeder;

class productTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product_type::create([
            'name'=>'Box (Standard sizes)',
            'size'=>'',
            'img'=>'',
            'status'=>1,
        ]);
        product_type::create([
            'name'=>'Box (Custom size)',
            'size'=>'',
            'img'=>'',
            'status'=>1,
        ]);
        product_type::create([
            'name'=>'Mattress',
            'size'=>'',
            'img'=>'',
            'status'=>1,
        ]);

        product_type::create([
            'name'=>'TV',
            'size'=>'',
            'img'=>'',
            'status'=>1,
        ]);

        product_type::create([
            'name'=>'Others',
            'size'=>'',
            'img'=>'',
            'status'=>1,
        ]);
    }
}
