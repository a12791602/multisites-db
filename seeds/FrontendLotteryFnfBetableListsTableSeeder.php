<?php

use Illuminate\Database\Seeder;

class FrontendLotteryFnfBetableListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_lottery_fnf_betable_lists')->delete();
        
        \DB::table('frontend_lottery_fnf_betable_lists')->insert(array (
            0 => 
            array (
                'id' => 3,
                'lotteries_id' => 'cqssc',
                'method_id' => 93,
                'sort' => 2,
                'created_at' => '2019-06-04 15:01:43',
                'updated_at' => '2019-07-27 16:50:37',
            ),
            1 => 
            array (
                'id' => 4,
                'lotteries_id' => 'zx1fc',
                'method_id' => 399,
                'sort' => 1,
                'created_at' => '2019-06-04 15:02:27',
                'updated_at' => '2019-07-27 16:50:37',
            ),
            2 => 
            array (
                'id' => 5,
                'lotteries_id' => NULL,
                'method_id' => 187,
                'sort' => 3,
                'created_at' => '2019-06-04 15:48:28',
                'updated_at' => '2019-06-05 15:15:23',
            ),
            3 => 
            array (
                'id' => 6,
                'lotteries_id' => 'p3p5',
                'method_id' => 907,
                'sort' => 4,
                'created_at' => '2019-07-13 17:03:09',
                'updated_at' => '2019-07-13 17:03:09',
            ),
        ));
        
        
    }
}