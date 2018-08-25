<?php

use Illuminate\Database\Seeder;

class ReplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
            'user_id' => 1,
            'discussion_id' => 1,
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis dignissimos natus a ipsam'
        ];
        $r2 = [
            'user_id' => 1,
            'discussion_id' => 2,
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis dignissimos natus a ipsam'
        ];
        $r3 = [
            'user_id' => 2,
            'discussion_id' => 3,
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis dignissimos natus a ipsam'
        ];
         $r4 = [
            'user_id' => 2,
            'discussion_id' => 4,
            'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Blanditiis dignissimos natus a ipsam'
        ];

        App\Reply::create($r1);
        App\Reply::create($r2);
        App\Reply::create($r3);
        App\Reply::create($r4);

    }
}
