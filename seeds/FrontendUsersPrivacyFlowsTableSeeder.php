<?php

use Illuminate\Database\Seeder;

class FrontendUsersPrivacyFlowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_users_privacy_flows')->delete();
        
        \DB::table('frontend_users_privacy_flows')->insert(array (
            0 => 
            array (
                'id' => 1,
                'admin_id' => 23,
                'admin_name' => 'Diana',
                'user_id' => 502,
                'username' => '啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊',
                'comment' => '[禁止登录] ==>此用户异常',
                'updated_at' => '2019-05-11 18:53:54',
                'created_at' => '2019-05-11 18:53:54',
            ),
            1 => 
            array (
                'id' => 2,
                'admin_id' => 23,
                'admin_name' => 'Diana',
                'user_id' => 14,
                'username' => 'diana111',
                'comment' => '[禁止提现] ==>此用户异常',
                'updated_at' => '2019-07-16 18:13:10',
                'created_at' => '2019-07-16 18:13:10',
            ),
            2 => 
            array (
                'id' => 3,
                'admin_id' => 23,
                'admin_name' => 'Diana',
                'user_id' => 14,
                'username' => 'diana111',
                'comment' => '[禁止登录] ==>此用户异常',
                'updated_at' => '2019-07-16 18:13:14',
                'created_at' => '2019-07-16 18:13:14',
            ),
            3 => 
            array (
                'id' => 4,
                'admin_id' => 23,
                'admin_name' => 'Diana',
                'user_id' => 14,
                'username' => 'diana111',
                'comment' => '[禁止登录] ==>123',
                'updated_at' => '2019-07-16 18:13:45',
                'created_at' => '2019-07-16 18:13:45',
            ),
            4 => 
            array (
                'id' => 5,
                'admin_id' => 4,
                'admin_name' => 'york',
                'user_id' => 18,
                'username' => 'mike111',
                'comment' => '[禁止登录] ==>此用户异常',
                'updated_at' => '2019-07-24 12:10:41',
                'created_at' => '2019-07-24 12:10:41',
            ),
            5 => 
            array (
                'id' => 6,
                'admin_id' => 4,
                'admin_name' => 'york',
                'user_id' => 18,
                'username' => 'mike111',
                'comment' => '[禁止投注] ==>此用户异常',
                'updated_at' => '2019-07-24 12:11:22',
                'created_at' => '2019-07-24 12:11:22',
            ),
            6 => 
            array (
                'id' => 7,
                'admin_id' => 4,
                'admin_name' => 'york',
                'user_id' => 18,
                'username' => 'mike111',
                'comment' => '[禁止登录] ==>此用户异常',
                'updated_at' => '2019-07-24 12:14:19',
                'created_at' => '2019-07-24 12:14:19',
            ),
            7 => 
            array (
                'id' => 8,
                'admin_id' => 4,
                'admin_name' => 'york',
                'user_id' => 18,
                'username' => 'mike111',
                'comment' => '[禁止投注] ==>此用户异常',
                'updated_at' => '2019-07-24 12:16:42',
                'created_at' => '2019-07-24 12:16:42',
            ),
        ));
        
        
    }
}