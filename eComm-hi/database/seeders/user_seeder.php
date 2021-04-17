<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;
use Illuminate\Support\Facades\Hash ;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'carol' ,
            'email'=> 'carol@gmail.com' ,
            'Password'=>Hash::make('12345')
        ]) ;
    }
}
