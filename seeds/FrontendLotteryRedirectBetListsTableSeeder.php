<?php

use Illuminate\Database\Seeder;

class FrontendLotteryRedirectBetListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_lottery_redirect_bet_lists')->delete();
        
        \DB::table('frontend_lottery_redirect_bet_lists')->insert(array (
            0 => 
            array (
                'id' => 4,
                'lotteries_id' => 1,
                'lotteries_sign' => 'cqssc',
                'pic_path' => '/uploaded_files/aa_1/popular_lotteries_aa_1/4c5d980539863bdddd6176d05e579011.png',
                'sort' => 1,
                'created_at' => '2019-06-17 19:59:15',
                'updated_at' => '2019-07-27 16:50:40',
            ),
            1 => 
            array (
                'id' => 5,
                'lotteries_id' => 17,
                'lotteries_sign' => 'fc3d',
                'pic_path' => '/uploaded_files/aa_1/popular_lotteries_aa_1/46294accc7485c0c81e0b4d04116ffd1.png',
                'sort' => 4,
                'created_at' => '2019-06-17 20:01:06',
                'updated_at' => '2019-07-30 18:12:35',
            ),
            2 => 
            array (
                'id' => 6,
                'lotteries_id' => 10,
                'lotteries_sign' => 'jx115',
                'pic_path' => '/uploaded_files/aa_1/popular_lotteries_aa_1/df26d0d801e46e6e4cfd7cc1abb36ef3.png',
                'sort' => 2,
                'created_at' => '2019-06-17 20:01:31',
                'updated_at' => '2019-07-27 16:50:59',
            ),
            3 => 
            array (
                'id' => 7,
                'lotteries_id' => 21,
                'lotteries_sign' => 'bjpk10',
                'pic_path' => '/uploaded_files/aa_1/popular_lotteries_aa_1/05b2f77ff418a0029f341a7bf608c28b.png',
                'sort' => 3,
                'created_at' => '2019-06-17 20:01:51',
                'updated_at' => '2019-07-30 18:12:35',
            ),
            4 => 
            array (
                'id' => 13,
                'lotteries_id' => 2,
                'lotteries_sign' => 'xjssc',
                'pic_path' => '/uploaded_files/aa_1/popular_lotteries_aa_1/5a4a71893f00b1f7638f6baa2e41f03a.png',
                'sort' => 5,
                'created_at' => '2019-07-29 16:34:01',
                'updated_at' => '2019-07-29 16:34:01',
            ),
        ));
        
        
    }
}