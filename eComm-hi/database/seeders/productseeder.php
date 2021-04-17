<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB ;
// use Illuminate\Support\Facades\Hash ;


class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Samsung Tv' ,
                'price'=> '145454' ,
                'description'=>'Smart Tv With  much more Features',
                'category'=>"tv" ,
                'gallery'=>"https://lh3.googleusercontent.com/proxy/DBigSAXyXx9Y7tGY8ANk2tnq02x03S9Lsylf6sLW2WfcP0Q6l2Q8GgdAMiYC6k0KGSbKA_2qoHQ34bCVBF7wQfz54uwUC3WHgINs-inIf32GxWFvYA"
            ] ,

            [
                'name'=>'Lg Smart Tv' ,
                'price'=> '199999' ,
                'description'=>'Smart Phone Smart work and  much more Features',
                'category'=>"tv" ,
                'gallery'=>"https://img.favpng.com/10/1/25/lg-led-backlit-lcd-1080p-high-definition-television-smart-tv-png-favpng-GMdbbGNmt2hy0hsJRuDP7sLpn.jpg"
            ] ,

            [
                'name'=>'Lg Fridge' ,
                'price'=> '99000' ,
                'description'=>'Smart Fridge  With Super Colling System and much more Features',
                'category'=>"fridge" ,
                'gallery'=>"https://sathya.in/Media/Default/Thumbs/0046/0046995-lg-glb191ksdx-188-ltr-3-star-single-door-refrigerator.png"
            ] 

            
        ]) ;
    }
}
