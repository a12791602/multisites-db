<?php

use Illuminate\Database\Seeder;

class BackendAdminAccessGroupsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('backend_admin_access_groups')->delete();
        
        \DB::table('backend_admin_access_groups')->insert(array (
            0 => 
            array (
                'id' => 1,
                'group_name' => '超级管理组',
                'role' => '*',
                'status' => 1,
                'created_at' => '2019-04-10 10:10:56',
                'updated_at' => '2019-04-10 10:10:51',
                'platform_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'group_name' => '彩票组',
                'role' => '[2,1,3,11,59,5,64,9,65,66,69,73,70,104,103,105,106,107,108,109,110,112,13,12,14,15,16,17,18,19,20,21,22,23,24,26,25,44,43,60,27]',
                'status' => 1,
                'created_at' => '2019-07-24 11:36:21',
                'updated_at' => '2019-07-24 11:36:21',
                'platform_id' => 1,
            ),
        ));
        
        
    }
}