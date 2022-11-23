<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class adminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        admin::create(
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('123456'),
                'status'=>1,
            ]
        );
    }
}
