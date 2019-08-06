<?php

use Illuminate\Database\Seeder;

class UserDaysalariesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('user_daysalaries')->delete();
        
        \DB::table('user_daysalaries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'is_tester' => 0,
                'username' => 'harriszhongdai',
                'parent_id' => 0,
                'parent' => NULL,
                'forefathers' => NULL,
                'parent_str' => NULL,
                'date' => '2019-07-29',
                'daysalary' => '0.00',
                'status' => 0,
                'sent_time' => NULL,
                'created_at' => '2019-07-30 02:00:02',
                'updated_at' => '2019-07-30 02:00:03',
                'turnover' => '158.740000',
                'daysalary_percentage' => '0.0',
                'bet_commission' => '0.000000',
                'commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_commission' => '0.000000',
                'team_turnover' => '0.000000',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'is_tester' => 0,
                'username' => 'harriszhongdai',
                'parent_id' => 0,
                'parent' => NULL,
                'forefathers' => NULL,
                'parent_str' => NULL,
                'date' => '2019-07-30',
                'daysalary' => '0.00',
                'status' => 0,
                'sent_time' => NULL,
                'created_at' => '2019-07-31 02:00:02',
                'updated_at' => '2019-07-31 02:00:03',
                'turnover' => '221.980000',
                'daysalary_percentage' => '0.0',
                'bet_commission' => '0.000000',
                'commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_commission' => '0.000000',
                'team_turnover' => '0.000000',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'is_tester' => 0,
                'username' => 'harriszhongdai',
                'parent_id' => 0,
                'parent' => NULL,
                'forefathers' => NULL,
                'parent_str' => NULL,
                'date' => '2019-07-31',
                'daysalary' => '0.00',
                'status' => 0,
                'sent_time' => NULL,
                'created_at' => '2019-08-01 02:00:02',
                'updated_at' => '2019-08-01 02:00:03',
                'turnover' => '270.000000',
                'daysalary_percentage' => '0.0',
                'bet_commission' => '0.000000',
                'commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_commission' => '0.000000',
                'team_turnover' => '0.000000',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 4,
                'is_tester' => 0,
                'username' => 'york34',
                'parent_id' => 0,
                'parent' => NULL,
                'forefathers' => NULL,
                'parent_str' => NULL,
                'date' => '2019-08-01',
                'daysalary' => '0.00',
                'status' => 0,
                'sent_time' => NULL,
                'created_at' => '2019-08-02 02:00:02',
                'updated_at' => '2019-08-02 02:00:03',
                'turnover' => '315.720000',
                'daysalary_percentage' => '0.0',
                'bet_commission' => '0.000000',
                'commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_commission' => '0.000000',
                'team_turnover' => '0.000000',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 1,
                'is_tester' => 0,
                'username' => 'harriszhongdai',
                'parent_id' => 0,
                'parent' => NULL,
                'forefathers' => NULL,
                'parent_str' => NULL,
                'date' => '2019-08-03',
                'daysalary' => '0.00',
                'status' => 0,
                'sent_time' => NULL,
                'created_at' => '2019-08-04 02:00:02',
                'updated_at' => '2019-08-04 02:00:03',
                'turnover' => '54.000000',
                'daysalary_percentage' => '0.0',
                'bet_commission' => '0.000000',
                'commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_commission' => '0.000000',
                'team_turnover' => '0.000000',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'is_tester' => 0,
                'username' => 'kiki',
                'parent_id' => 0,
                'parent' => NULL,
                'forefathers' => NULL,
                'parent_str' => NULL,
                'date' => '2019-08-03',
                'daysalary' => '0.00',
                'status' => 0,
                'sent_time' => NULL,
                'created_at' => '2019-08-04 02:00:02',
                'updated_at' => '2019-08-04 02:00:03',
                'turnover' => '4.020000',
                'daysalary_percentage' => '0.0',
                'bet_commission' => '0.000000',
                'commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_commission' => '0.000000',
                'team_turnover' => '0.000000',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 3,
                'is_tester' => 0,
                'username' => 'kiki',
                'parent_id' => 0,
                'parent' => NULL,
                'forefathers' => NULL,
                'parent_str' => NULL,
                'date' => '2019-08-05',
                'daysalary' => '0.00',
                'status' => 0,
                'sent_time' => NULL,
                'created_at' => '2019-08-06 02:00:51',
                'updated_at' => '2019-08-06 02:00:51',
                'turnover' => '5933.010000',
                'daysalary_percentage' => '0.0',
                'bet_commission' => '0.000000',
                'commission' => '0.000000',
                'team_bet_commission' => '0.000000',
                'team_commission' => '0.000000',
                'team_turnover' => '0.000000',
            ),
        ));
        
        
    }
}