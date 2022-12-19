<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class User1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('users1')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
             'address' => Str::random(10),
             'sdt' => '0123456789',
             'id_post' => '1'

        ]);
    }
}
