<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
            'name'=>'iphone',
            'price'=>'1000',
            'category'=>'mobile',
            'gallery'=>'https://images.app.goo.gl/Wo4EJ68t1WWkc8TP9',
            'description'=>'4gb ram and 64 rom'
        ],
        [
            'name'=>'oppo',
            'price'=>'1000',
            'category'=>'mobile',
            'gallery'=>'https://images.app.goo.gl/aZc2hG6EaK2ZrzmR6',
            'description'=>'4gb ram and 64 rom'


        ],
        [
            'name'=>'SAMUNG',
            'price'=>'1000',
            'category'=>'mobile',
            'gallery'=>'https://images.app.goo.gl/EB4FcQsSjmZxcQsL9',
            'description'=>'4gb ram and 64 rom'


        ],
        [
            'name'=>'GALAXY',
            'price'=>'1000',
            'category'=>'mobile',
            'gallery'=>'https://www.google.com/imgres?imgurl=https://img.freepik.com/premium-photo/smartphone-balancing-with-pink-background_23-2150271746.jpg?size%3D338%26ext%3Djpg%26ga%3DGA1.1.2008272138.1721001600%26semt%3Dsph&tbnid=w2TE6wNeV19SjM&vet=1&imgrefurl=https://www.freepik.com/photos/phone&docid=DpALy7rORqn4PM&w=338&h=338&source=sh/x/im/m1/1&kgs=ce503050d46a0ff6&shem=abme,trie',
            'description'=>'4gb ram and 64 rom'


        ],
        [
            'name'=>'VIVO',
            'price'=>'1000',
            'category'=>'mobile',
            'gallery'=>'https://www.google.com/imgres?imgurl=http://media.wired.com/photos/62d75d34ddaaa99a1df8e61d/master/pass/Phone-Camera-Webcam-Gear-GettyImages-1241495650.jpg&tbnid=mzprVOVIPe0pyM&vet=1&imgrefurl=https://www.wired.com/story/use-your-phone-as-webcam/&docid=fI_oEgL3mYIO6M&w=2400&h=1800&source=sh/x/im/m1/1&kgs=d7f055d834f2d994&shem=abme,trie',
            'description'=>'4gb ram and 64 rom'


        ],
    ]);
    }
    }


