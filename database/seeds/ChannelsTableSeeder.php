<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel = ['title'=> 'Laravel 5.6'];
        $channel2 = ['title'=> 'Lumen'];
        $channel3 = ['title'=> 'aaa'];
        $channel4 = ['title'=> 'PHP Testing'];
        $channel5 = ['title'=> 'Javascript'];
        $channel6 = ['title'=> 'Vue Js'];
        $channel7 = ['title'=> 'React js'];
        $channel8 = ['title'=> 'Angular js'];

        App\Channel::create($channel);
        App\Channel::create($channel2);
        App\Channel::create($channel3);
        App\Channel::create($channel4);
        App\Channel::create($channel5);
        App\Channel::create($channel6);
        App\Channel::create($channel7);
        App\Channel::create($channel8);
    }
}
