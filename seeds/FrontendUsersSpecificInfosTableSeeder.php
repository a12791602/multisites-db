<?php

use Illuminate\Database\Seeder;

class FrontendUsersSpecificInfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_users_specific_infos')->delete();
        
        \DB::table('frontend_users_specific_infos')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nickname' => '1234',
                'realname' => '1233',
                'mobile' => '13880628809',
                'email' => '1823444@qq.com',
                'zip_code' => '233333',
                'address' => '反反大地的的的3333',
                'created_at' => NULL,
                'updated_at' => '2019-07-26 20:54:28',
            ),
            1 => 
            array (
                'id' => 2,
                'nickname' => NULL,
                'realname' => NULL,
                'mobile' => NULL,
                'email' => NULL,
                'zip_code' => NULL,
                'address' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nickname' => NULL,
                'realname' => NULL,
                'mobile' => NULL,
                'email' => NULL,
                'zip_code' => NULL,
                'address' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nickname' => NULL,
                'realname' => NULL,
                'mobile' => NULL,
                'email' => NULL,
                'zip_code' => NULL,
                'address' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nickname' => NULL,
                'realname' => NULL,
                'mobile' => NULL,
                'email' => NULL,
                'zip_code' => NULL,
                'address' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}