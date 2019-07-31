<?php

use Illuminate\Database\Seeder;

class UserProfitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_profits')->delete();
        
        \DB::table('user_profits')->insert(array (
            0 => 
            array (
                'id' => 1,
                'date' => '2019-07-19',
                'user_id' => 14,
                'is_tester' => 0,
                'username' => 'diana111',
                'parent_id' => 0,
                'team_deposit' => '1000.0000',
                'team_withdrawal' => '0.0000',
                'team_turnover' => '0.0000',
                'team_prize' => '0.000000',
                'team_profit' => '0.000000',
                'team_commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_dividend' => '0.0000',
                'team_daily_salary' => '0.0000',
                'created_at' => '2019-07-19 18:30:02',
                'updated_at' => '2019-07-19 23:55:03',
            ),
            1 => 
            array (
                'id' => 2,
                'date' => '2019-07-19',
                'user_id' => 1,
                'is_tester' => 0,
                'username' => 'harriszhongdai',
                'parent_id' => 0,
                'team_deposit' => '110.0000',
                'team_withdrawal' => '0.0000',
                'team_turnover' => '34.0000',
                'team_prize' => '76.780000',
                'team_profit' => '42.780000',
                'team_commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_dividend' => '0.0000',
                'team_daily_salary' => '0.0000',
                'created_at' => '2019-07-19 18:30:02',
                'updated_at' => '2019-07-19 23:55:03',
            ),
            2 => 
            array (
                'id' => 3,
                'date' => '2019-07-22',
                'user_id' => 1,
                'is_tester' => 0,
                'username' => 'harriszhongdai',
                'parent_id' => 0,
                'team_deposit' => '0.0000',
                'team_withdrawal' => '0.0000',
                'team_turnover' => '82.0000',
                'team_prize' => '0.000000',
                'team_profit' => '-82.000000',
                'team_commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_dividend' => '0.0000',
                'team_daily_salary' => '0.0000',
                'created_at' => '2019-07-22 15:20:02',
                'updated_at' => '2019-07-22 23:55:02',
            ),
            3 => 
            array (
                'id' => 4,
                'date' => '2019-07-23',
                'user_id' => 1,
                'is_tester' => 0,
                'username' => 'harriszhongdai',
                'parent_id' => 0,
                'team_deposit' => '0.0000',
                'team_withdrawal' => '0.0000',
                'team_turnover' => '200052.2800',
                'team_prize' => '0.000000',
                'team_profit' => '-200052.280000',
                'team_commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_dividend' => '0.0000',
                'team_daily_salary' => '0.0000',
                'created_at' => '2019-07-23 12:10:01',
                'updated_at' => '2019-07-23 23:55:03',
            ),
            4 => 
            array (
                'id' => 5,
                'date' => '2019-07-24',
                'user_id' => 1,
                'is_tester' => 0,
                'username' => 'harriszhongdai',
                'parent_id' => 0,
                'team_deposit' => '0.0000',
                'team_withdrawal' => '0.0000',
                'team_turnover' => '8476.0400',
                'team_prize' => '168.520000',
                'team_profit' => '-8307.520000',
                'team_commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_dividend' => '0.0000',
                'team_daily_salary' => '0.0000',
                'created_at' => '2019-07-24 11:45:02',
                'updated_at' => '2019-07-24 23:55:03',
            ),
            5 => 
            array (
                'id' => 6,
                'date' => '2019-07-25',
                'user_id' => 1,
                'is_tester' => 0,
                'username' => 'harriszhongdai',
                'parent_id' => 0,
                'team_deposit' => '0.0000',
                'team_withdrawal' => '0.0000',
                'team_turnover' => '322.0000',
                'team_prize' => '21.780000',
                'team_profit' => '-300.220000',
                'team_commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_dividend' => '0.0000',
                'team_daily_salary' => '0.0000',
                'created_at' => '2019-07-25 16:45:02',
                'updated_at' => '2019-07-25 23:55:03',
            ),
            6 => 
            array (
                'id' => 7,
                'date' => '2019-07-26',
                'user_id' => 1,
                'is_tester' => 0,
                'username' => 'harriszhongdai',
                'parent_id' => 0,
                'team_deposit' => '0.0000',
                'team_withdrawal' => '0.0000',
                'team_turnover' => '2952.8800',
                'team_prize' => '0.000000',
                'team_profit' => '-2952.880000',
                'team_commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_dividend' => '0.0000',
                'team_daily_salary' => '0.0000',
                'created_at' => '2019-07-26 10:45:02',
                'updated_at' => '2019-07-26 23:55:03',
            ),
            7 => 
            array (
                'id' => 8,
                'date' => '2019-07-27',
                'user_id' => 1,
                'is_tester' => 0,
                'username' => 'harriszhongdai',
                'parent_id' => 0,
                'team_deposit' => '0.0000',
                'team_withdrawal' => '0.0000',
                'team_turnover' => '105.2400',
                'team_prize' => '0.000000',
                'team_profit' => '-105.240000',
                'team_commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_dividend' => '0.0000',
                'team_daily_salary' => '0.0000',
                'created_at' => '2019-07-27 15:00:02',
                'updated_at' => '2019-07-27 16:15:03',
            ),
            8 => 
            array (
                'id' => 9,
                'date' => '2019-07-30',
                'user_id' => 1,
                'is_tester' => 0,
                'username' => 'harriszhongdai',
                'parent_id' => 0,
                'team_deposit' => '0.0000',
                'team_withdrawal' => '0.0000',
                'team_turnover' => '375.0800',
                'team_prize' => '1960.200000',
                'team_profit' => '1585.120000',
                'team_commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_dividend' => '0.0000',
                'team_daily_salary' => '0.0000',
                'created_at' => '2019-07-30 23:10:29',
                'updated_at' => '2019-07-30 23:55:38',
            ),
        ));
        
        
    }
}