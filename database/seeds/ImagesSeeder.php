<?php

use App\Image;
use Illuminate\Database\Seeder;
class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Image::create([
            'href'=>'helo',
            'text'=>'mobile',
            'hash'=>'hash',
        ]);
    }
}
