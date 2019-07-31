<?php

use Illuminate\Database\Seeder;

class FrontendUsersAccountsTypesParamsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_users_accounts_types_params')->delete();
        
        \DB::table('frontend_users_accounts_types_params')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label' => '字段1',
                'param' => 'amount',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'label' => '字段2',
                'param' => 'user_id',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'label' => '字段3',
                'param' => 'project_id',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'label' => '字段4',
                'param' => 'lottery_id',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'label' => '字段5',
                'param' => 'method_id',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'label' => '字段6',
                'param' => 'issue',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'label' => '字段7',
                'param' => 'from_id',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'label' => '字段8',
                'param' => 'from_admin_id',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'label' => '字段9',
                'param' => 'to_id',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}