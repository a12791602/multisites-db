<?php

use Illuminate\Database\Seeder;

class FrontendUsersBankCardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_users_bank_cards')->delete();
        
        \DB::table('frontend_users_bank_cards')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 6,
                'parent_id' => 0,
                'top_id' => 0,
                'rid' => '6',
                'username' => 'sami',
                'bank_sign' => 'CMB',
                'bank_name' => '招商银行',
                'owner_name' => '王国',
                'card_number' => '7894561237894561',
                'province_id' => '2',
                'city_id' => '33',
                'branch' => '北京支行',
                'status' => 1,
                'created_at' => '2019-07-03 15:10:36',
                'updated_at' => '2019-07-03 15:10:36',
            ),
            1 => 
            array (
                'id' => 12,
                'user_id' => 3,
                'parent_id' => 0,
                'top_id' => 0,
                'rid' => '3',
                'username' => 'kiki',
                'bank_sign' => 'BOCOM',
                'bank_name' => '交通银行',
                'owner_name' => '金子',
                'card_number' => '1234567891234567',
                'province_id' => '5',
                'city_id' => '59',
                'branch' => '１撒的撒',
                'status' => 1,
                'created_at' => '2019-07-11 20:15:03',
                'updated_at' => '2019-07-11 20:15:03',
            ),
        ));
        
        
    }
}