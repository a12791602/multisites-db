<?php

use Illuminate\Database\Seeder;

class FrontendLotteryNoticeListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_lottery_notice_lists')->delete();
        
        \DB::table('frontend_lottery_notice_lists')->insert(array (
            0 => 
            array (
                'id' => 2,
                'lotteries_id' => 'cqssc',
                'cn_name' => '重庆时时彩',
                'status' => 1,
                'sort' => 4,
                'created_at' => '2019-07-23 21:56:29',
                'updated_at' => '2019-07-30 18:01:15',
            ),
            1 => 
            array (
                'id' => 3,
                'lotteries_id' => 'zx1fc',
                'cn_name' => '中兴1分彩',
                'status' => 1,
                'sort' => 2,
                'created_at' => '2019-07-23 21:57:11',
                'updated_at' => '2019-07-27 19:27:03',
            ),
            2 => 
            array (
                'id' => 4,
                'lotteries_id' => 'sd115',
                'cn_name' => '山东11选5',
                'status' => 1,
                'sort' => 3,
                'created_at' => '2019-07-23 21:57:25',
                'updated_at' => '2019-07-30 18:01:14',
            ),
            3 => 
            array (
                'id' => 5,
                'lotteries_id' => 'zx115',
                'cn_name' => '中兴11选5',
                'status' => 1,
                'sort' => 1,
                'created_at' => '2019-07-27 18:37:28',
                'updated_at' => '2019-07-30 18:01:45',
            ),
        ));
        
        
    }
}