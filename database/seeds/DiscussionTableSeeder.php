<?php

use Illuminate\Database\Seeder;

class DiscussionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $d1 = [
            'user_id' => 2,
            'title'   => 'Laravel 5.7 new features',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis dignissimos natus a ipsam, qui expedita molestiae aliquid, voluptate iusto amet ad fugiat? Possimus ducimus harum autem cumque unde odit ipsa.',
            'channel_id' => 1,
       ];
        $d2 = [
            'user_id' => 2,
            'title'   => 'Vue js, Vuex,Vue-routing',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis dignissimos natus a ipsam, qui expedita molestiae aliquid, voluptate iusto amet ad fugiat? Possimus ducimus harum autem cumque unde odit ipsa.',
            'channel_id' => 1,
       ]; 
       $d3 = [
            'user_id' => 1,
            'title'   => 'ECMA Script 6',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis dignissimos natus a ipsam, qui expedita molestiae aliquid, voluptate iusto amet ad fugiat? Possimus ducimus harum autem cumque unde odit ipsa.',
            'channel_id' => 1,
       ]; 
       $d4 = [
            'user_id' => 2,
            'title'   => 'Laravel API,Passport,JWT Authentication',
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis dignissimos natus a ipsam, qui expedita molestiae aliquid, voluptate iusto amet ad fugiat? Possimus ducimus harum autem cumque unde odit ipsa.',
            'channel_id' => 2,
       ];

       App\Discussion::create($d1);
       App\Discussion::create($d2);
       App\Discussion::create($d3);
       App\Discussion::create($d4);

    }
}
