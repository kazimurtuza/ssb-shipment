<?php

namespace Database\Seeders;

use App\Models\stander_product_category;
use Illuminate\Database\Seeder;

class standerProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        stander_product_category::create([
            'name'=>'Small Box (standard) 17x11x11 inches',
            'price'=>50,
            'status'=>1,
            'length'=>17,
            'weidth'=>11,
            'height'=>11,
            'product_type'=>'stander',


        ]);
        stander_product_category::create([
            'name'=>' Medium Box (standard)21x15x16 inches',
            'price'=>60,
            'status'=>1,
            'length'=>21,
            'weidth'=>15,
            'height'=>16,
            'product_type'=>'stander',
        ]);
        stander_product_category::create([
            'name'=>'Large Box (standard) 27x15x16 inches',
            'price'=>80,
            'status'=>1,
            'length'=>27,
            'weidth'=>15,
            'height'=>16,
            'product_type'=>'stander',
        ]);
        stander_product_category::create([
            'name'=>'Extra Large Box (standard)24x20x21 inches',
            'price'=>100,
            'status'=>1,
            'length'=>24,
            'weidth'=>20,
            'height'=>21,
           'product_type'=>'stander',
        ]);

        stander_product_category::create([
            'name'=>'Twin and single',
            'price'=>150,
            'status'=>1,
            'product_type'=>'mattress ',
        ]);

        stander_product_category::create([
            'name'=>'Queen',
            'price'=>200,
            'status'=>1,
            'product_type'=>'mattress ',
        ]);

        stander_product_category::create([
            'name'=>'King and larger',
            'price'=>250,
            'status'=>1,
            'product_type'=>'mattress ',
        ]);
    }
}
