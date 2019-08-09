<?php

use Illuminate\Database\Seeder;

class LotteryListsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lottery_lists')->delete();
        
        \DB::table('lottery_lists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lottery_type' => 1,
                'cn_name' => '重庆时时彩',
                'en_name' => 'cqssc',
                'series_id' => 'ssc',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 59,
                'day_issue' => 59,
                'issue_format' => 'ymd|N3',
                'issue_type' => 'day',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/7d0786919b16a113482cc4d79289a916.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-06 13:56:49',
            ),
            1 => 
            array (
                'id' => 2,
                'lottery_type' => 1,
                'cn_name' => '新疆时时彩',
                'en_name' => 'xjssc',
                'series_id' => 'ssc',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 60,
                'day_issue' => 48,
                'issue_format' => 'ymd|N2',
                'issue_type' => 'day',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/6d8dd4991101cb0e92623850eb83fb09.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:04:13',
            ),
            2 => 
            array (
                'id' => 3,
                'lottery_type' => 1,
                'cn_name' => '黑龙江时时彩',
                'en_name' => 'hljssc',
                'series_id' => 'ssc',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 60,
                'day_issue' => 42,
                'issue_format' => 'C7',
                'issue_type' => 'increase',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/3f4b4a2a613e02d4d753852c1edecd90.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:26:33',
            ),
            3 => 
            array (
                'id' => 4,
                'lottery_type' => 1,
                'cn_name' => '中兴1分彩',
                'en_name' => 'zx1fc',
                'series_id' => 'ssc',
                'is_fast' => 1,
                'auto_open' => 1,
                'max_trace_number' => 60,
                'day_issue' => 1440,
                'issue_format' => 'ymd|N4',
                'issue_type' => 'day',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/bc5c9ff3bfb4e1abbf20f82ddc6b1759.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:27:18',
            ),
            4 => 
            array (
                'id' => 5,
                'lottery_type' => 1,
                'cn_name' => '腾讯分分彩',
                'en_name' => 'txffc',
                'series_id' => 'ssc',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 60,
                'day_issue' => 1440,
                'issue_format' => 'Ymd|N4',
                'issue_type' => 'day',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/1ed3039d5318e26c52cb6d5d4ece1b92.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:27:35',
            ),
            5 => 
            array (
                'id' => 6,
                'lottery_type' => 2,
                'cn_name' => '山东11选5',
                'en_name' => 'sd115',
                'series_id' => 'lotto',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 60,
                'day_issue' => 43,
                'issue_format' => 'ymd|N2',
                'issue_type' => 'day',
                'valid_code' => '01,02,03,04,05,06,07,08,09,10,11',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/8145f4b51765f550b6361465ce3107cc.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:29:36',
            ),
            6 => 
            array (
                'id' => 7,
                'lottery_type' => 2,
                'cn_name' => '广东11选5',
                'en_name' => 'gd115',
                'series_id' => 'lotto',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 60,
                'day_issue' => 42,
                'issue_format' => 'ymd|N2',
                'issue_type' => 'day',
                'valid_code' => '01,02,03,04,05,06,07,08,09,10,11',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/fe3e33006188a98fc3da0eb0790820f3.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:29:48',
            ),
            7 => 
            array (
                'id' => 8,
                'lottery_type' => 2,
                'cn_name' => '山西11选5',
                'en_name' => 'sx115',
                'series_id' => 'lotto',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 60,
                'day_issue' => 47,
                'issue_format' => 'ymd|N2',
                'issue_type' => 'day',
                'valid_code' => '01,02,03,04,05,06,07,08,09,10,11',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/3b39598f07be7b24feb4789057bb5ee2.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:30:01',
            ),
            8 => 
            array (
                'id' => 9,
                'lottery_type' => 2,
                'cn_name' => '上海11选5',
                'en_name' => 'sh115',
                'series_id' => 'lotto',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 60,
                'day_issue' => 45,
                'issue_format' => 'ymd|N3',
                'issue_type' => 'day',
                'valid_code' => '01,02,03,04,05,06,07,08,09,10,11',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/413e19ea5dc3322db2361ad80666ad67.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:30:15',
            ),
            9 => 
            array (
                'id' => 10,
                'lottery_type' => 2,
                'cn_name' => '江西11选5',
                'en_name' => 'jx115',
                'series_id' => 'lotto',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 50,
                'day_issue' => 42,
                'issue_format' => 'Ymd-|N2',
                'issue_type' => 'day',
                'valid_code' => '01,02,03,04,05,06,07,08,09,10,11',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/041b84daa8b0560e4a3f55cc2142a0be.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:30:28',
            ),
            10 => 
            array (
                'id' => 11,
                'lottery_type' => 2,
                'cn_name' => '中兴11选5',
                'en_name' => 'zx115',
                'series_id' => 'lotto',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 50,
                'day_issue' => 1440,
                'issue_format' => 'Ymd|N4',
                'issue_type' => 'day',
                'valid_code' => '01,02,03,04,05,06,07,08,09,10,11',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/c7f6b6cefda611e4796e662b3799d7f1.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:30:37',
            ),
            11 => 
            array (
                'id' => 12,
                'lottery_type' => 1,
                'cn_name' => '江苏快3',
                'en_name' => 'jsk3',
                'series_id' => 'k3',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 60,
                'day_issue' => 41,
                'issue_format' => 'Ymd|N3',
                'issue_type' => 'day',
                'valid_code' => '1,2,3,4,5,6',
                'code_length' => 3,
                'positions' => 'w,q,b',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/181f6cfc27d8ca2f37a983c108b96208.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:30:55',
            ),
            12 => 
            array (
                'id' => 13,
                'lottery_type' => 1,
                'cn_name' => '安徽快3',
                'en_name' => 'ahk3',
                'series_id' => 'k3',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 60,
                'day_issue' => 40,
                'issue_format' => 'Ymd|N3',
                'issue_type' => 'day',
                'valid_code' => '1,2,3,4,5,6',
                'code_length' => 3,
                'positions' => 'w,q,b',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/cc6f1879559062b9cb2f780dc1d1821b.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:31:10',
            ),
            13 => 
            array (
                'id' => 14,
                'lottery_type' => 1,
                'cn_name' => '甘肃快3',
                'en_name' => 'gsk3',
                'series_id' => 'k3',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 60,
                'day_issue' => 36,
                'issue_format' => 'Ymd|N3',
                'issue_type' => 'day',
                'valid_code' => '1,2,3,4,5,6',
                'code_length' => 3,
                'positions' => 'w,q,b',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/bd28ac0df5654bd44361ba7f9d19c085.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:31:22',
            ),
            14 => 
            array (
                'id' => 15,
                'lottery_type' => 1,
                'cn_name' => '河南快3',
                'en_name' => 'hnk3',
                'series_id' => 'k3',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 60,
                'day_issue' => 42,
                'issue_format' => 'Ymd|N3',
                'issue_type' => 'day',
                'valid_code' => '1,2,3,4,5,6',
                'code_length' => 3,
                'positions' => 'w,q,b',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/dc969d71edcb72a64df8bdf894335f73.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:31:32',
            ),
            15 => 
            array (
                'id' => 16,
                'lottery_type' => 1,
                'cn_name' => '中兴快3',
                'en_name' => 'zxk3',
                'series_id' => 'k3',
                'is_fast' => 1,
                'auto_open' => 1,
                'max_trace_number' => 60,
                'day_issue' => 1440,
                'issue_format' => 'Ymd|N4',
                'issue_type' => 'day',
                'valid_code' => '1,2,3,4,5,6',
                'code_length' => 3,
                'positions' => 'w,q,b',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/5cdbb84f076b7fd770ff555e6d0c11a0.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:31:45',
            ),
            16 => 
            array (
                'id' => 17,
                'lottery_type' => 1,
                'cn_name' => '福彩3D',
                'en_name' => 'fc3d',
                'series_id' => 'sd',
                'is_fast' => 0,
                'auto_open' => 0,
                'max_trace_number' => 20,
                'day_issue' => 1,
                'issue_format' => 'Y|T3',
                'issue_type' => 'increase',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 3,
                'positions' => 'w,q,b',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/e8fb8f43b6f6ba7bc1c6874cfb304714.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:32:54',
            ),
            17 => 
            array (
                'id' => 18,
                'lottery_type' => 1,
                'cn_name' => '中兴3D',
                'en_name' => 'zx3d',
                'series_id' => 'sd',
                'is_fast' => 1,
                'auto_open' => 1,
                'max_trace_number' => 20,
                'day_issue' => 1440,
                'issue_format' => 'Ymd|N4',
                'issue_type' => 'day',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 3,
                'positions' => 'w,q,b',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/c0672061dee24228669178e935d4c9e0.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:33:06',
            ),
            18 => 
            array (
                'id' => 19,
                'lottery_type' => 1,
                'cn_name' => '上海时时乐',
                'en_name' => 'shssl',
                'series_id' => 'ssl',
                'is_fast' => 1,
                'auto_open' => 1,
                'max_trace_number' => 20,
                'day_issue' => 23,
                'issue_format' => 'Ymd-|N2',
                'issue_type' => 'day',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 3,
                'positions' => 'b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'lottery_type' => 1,
                'cn_name' => '排列35',
                'en_name' => 'p3p5',
                'series_id' => 'p3p5',
                'is_fast' => 0,
                'auto_open' => 0,
                'max_trace_number' => 20,
                'day_issue' => 1,
                'issue_format' => 'Y|T3',
                'issue_type' => 'increase',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/e6c085eb0bae2dc58423946c690ec173.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:33:36',
            ),
            20 => 
            array (
                'id' => 21,
                'lottery_type' => 1,
                'cn_name' => '北京PK10',
                'en_name' => 'bjpk10',
                'series_id' => 'pk10',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 60,
                'day_issue' => 44,
                'issue_format' => 'C6',
                'issue_type' => 'increase',
                'valid_code' => '1,2,3,4,5,6,7,8,9,10',
                'code_length' => 10,
                'positions' => '0,1,2,3,4,5,6,7,8,9',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1930,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/bf4100346e2764908bb68bbb052bf588.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 11:34:01',
            ),
            21 => 
            array (
                'id' => 22,
                'lottery_type' => 1,
                'cn_name' => '急速飞艇',
                'en_name' => 'ftpk10',
                'series_id' => 'pk10',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 60,
                'day_issue' => 1440,
                'issue_format' => 'Ymd|N4',
                'issue_type' => 'day',
                'valid_code' => '1,2,3,4,5,6,7,8,9,10',
                'code_length' => 10,
                'positions' => '0,1,2,3,4,5,6,7,8,9',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1930,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'lottery_type' => 1,
                'cn_name' => '中兴PK10',
                'en_name' => 'zxpk10',
                'series_id' => 'pk10',
                'is_fast' => 1,
                'auto_open' => 1,
                'max_trace_number' => 60,
                'day_issue' => 1440,
                'issue_format' => 'Ymd|N4',
                'issue_type' => 'day',
                'valid_code' => '1,2,3,4,5,6,7,8,9,10',
                'code_length' => 10,
                'positions' => '0,1,2,3,4,5,6,7,8,9',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1930,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'lottery_type' => 1,
                'cn_name' => '香港六合彩',
                'en_name' => 'hklhc',
                'series_id' => 'lhc',
                'is_fast' => 0,
                'auto_open' => 0,
                'max_trace_number' => 1,
                'day_issue' => 1,
                'issue_format' => 'y|T3',
                'issue_type' => 'random',
                'valid_code' => '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49',
                'code_length' => 7,
                'positions' => '1,2,3,4,5,6,7',
                'min_prize_group' => 1700,
                'max_prize_group' => 1990,
                'min_times' => 1,
                'max_times' => 1960,
                'max_profit_bonus' => NULL,
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 55,
                'lottery_type' => 2,
                'cn_name' => '安徽11选5',
                'en_name' => 'ah115',
                'series_id' => 'lotto',
                'is_fast' => 0,
                'auto_open' => 0,
                'max_trace_number' => 40,
                'day_issue' => 40,
                'issue_format' => 'Ymd|N3',
                'issue_type' => 'day',
                'valid_code' => '01,02,03,04,05,06,07,08,09,10,11',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1980,
                'min_times' => 1,
                'max_times' => 2000,
                'max_profit_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/dc01ecd0eed6e2110208504ea6f703c5.png',
                'created_at' => '2019-08-06 23:13:09',
                'updated_at' => '2019-08-08 17:53:22',
            ),
            25 => 
            array (
                'id' => 57,
                'lottery_type' => 1,
                'cn_name' => '腾讯5分彩',
                'en_name' => 'tx05fc',
                'series_id' => 'ssc',
                'is_fast' => 0,
                'auto_open' => 0,
                'max_trace_number' => 50,
                'day_issue' => 288,
                'issue_format' => 'Ymd|N3',
                'issue_type' => 'day',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1980,
                'min_times' => 1,
                'max_times' => 2000,
                'max_profit_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/41948e664f081dfb00b16d0a217274f5.png',
                'created_at' => '2019-08-06 23:46:16',
                'updated_at' => '2019-08-08 17:37:29',
            ),
            26 => 
            array (
                'id' => 58,
                'lottery_type' => 1,
                'cn_name' => '腾讯10分彩',
                'en_name' => 'tx10fc',
                'series_id' => 'ssc',
                'is_fast' => 0,
                'auto_open' => 0,
                'max_trace_number' => 50,
                'day_issue' => 144,
                'issue_format' => 'Ymd|N3',
                'issue_type' => 'day',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1980,
                'min_times' => 1,
                'max_times' => 2000,
                'max_profit_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/17c71f1f0990f69f473ca9f99b6a4339.png',
                'created_at' => '2019-08-06 23:48:48',
                'updated_at' => '2019-08-08 17:38:25',
            ),
            27 => 
            array (
                'id' => 59,
                'lottery_type' => 1,
                'cn_name' => '奇趣腾讯分分彩',
                'en_name' => 'qiqtxffc',
                'series_id' => 'ssc',
                'is_fast' => 0,
                'auto_open' => 0,
                'max_trace_number' => 50,
                'day_issue' => 1440,
                'issue_format' => 'Ymd|N4',
                'issue_type' => 'day',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1980,
                'min_times' => 1,
                'max_times' => 2000,
                'max_profit_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/a2f7fe3596fd39bb9e9980936ca5c888.png',
                'created_at' => '2019-08-06 23:52:27',
                'updated_at' => '2019-08-08 17:38:11',
            ),
            28 => 
            array (
                'id' => 60,
                'lottery_type' => 1,
                'cn_name' => '多彩腾讯分分彩',
                'en_name' => 'duotxffc',
                'series_id' => 'ssc',
                'is_fast' => 0,
                'auto_open' => 0,
                'max_trace_number' => 50,
                'day_issue' => 1440,
                'issue_format' => 'Ymd|N4',
                'issue_type' => 'day',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1980,
                'min_times' => 1,
                'max_times' => 2000,
                'max_profit_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/823a29c335fa59f71da5217ca3e6912b.png',
                'created_at' => '2019-08-06 23:55:09',
                'updated_at' => '2019-08-08 17:38:43',
            ),
            29 => 
            array (
                'id' => 61,
                'lottery_type' => 1,
                'cn_name' => '微博5分彩',
                'en_name' => 'wb05fc',
                'series_id' => 'ssc',
                'is_fast' => 0,
                'auto_open' => 0,
                'max_trace_number' => 50,
                'day_issue' => 288,
                'issue_format' => 'Ymd|N3',
                'issue_type' => 'day',
                'valid_code' => '0,1,2,3,4,5,6,7,8,9',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1980,
                'min_times' => 1,
                'max_times' => 2000,
                'max_profit_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/4de3129123a09b810e4c27dc4047e7fa.png',
                'created_at' => '2019-08-06 23:57:40',
                'updated_at' => '2019-08-08 17:39:07',
            ),
            30 => 
            array (
                'id' => 62,
                'lottery_type' => 2,
                'cn_name' => '河北11选5',
                'en_name' => 'heb115',
                'series_id' => 'lotto',
                'is_fast' => 0,
                'auto_open' => 0,
                'max_trace_number' => 41,
                'day_issue' => 41,
                'issue_format' => 'Ymd-|N2',
                'issue_type' => 'day',
                'valid_code' => '01,02,03,04,05,06,07,08,09,10,11',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1980,
                'min_times' => 1,
                'max_times' => 2000,
                'max_profit_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/097786420249ee46212b8ac12fe899ea.png',
                'created_at' => '2019-08-07 00:01:58',
                'updated_at' => '2019-08-08 17:53:02',
            ),
            31 => 
            array (
                'id' => 63,
                'lottery_type' => 2,
                'cn_name' => '湖北11选5',
                'en_name' => 'hb115',
                'series_id' => 'lotto',
                'is_fast' => 0,
                'auto_open' => 0,
                'max_trace_number' => 40,
                'day_issue' => 40,
                'issue_format' => 'Ymd-|N2',
                'issue_type' => 'day',
                'valid_code' => '01,02,03,04,05,06,07,08,09,10,11',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1980,
                'min_times' => 1,
                'max_times' => 2000,
                'max_profit_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/bb8dfef8a01dc97954bdf04daaa0ee3c.png',
                'created_at' => '2019-08-07 00:11:36',
                'updated_at' => '2019-08-08 17:55:58',
            ),
            32 => 
            array (
                'id' => 64,
                'lottery_type' => 2,
                'cn_name' => '陕西11选5',
                'en_name' => 'shx115',
                'series_id' => 'lotto',
                'is_fast' => 0,
                'auto_open' => 0,
                'max_trace_number' => 44,
                'day_issue' => 44,
                'issue_format' => 'Ymd-|N2',
                'issue_type' => 'day',
                'valid_code' => '01,02,03,04,05,06,07,08,09,10,11',
                'code_length' => 5,
                'positions' => 'w,q,b,s,g',
                'min_prize_group' => 1700,
                'max_prize_group' => 1980,
                'min_times' => 1,
                'max_times' => 2000,
                'max_profit_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/917ae9024aa59ade99616581003700c0.png',
                'created_at' => '2019-08-07 00:14:18',
                'updated_at' => '2019-08-08 17:57:25',
            ),
            33 => 
            array (
                'id' => 65,
                'lottery_type' => 1,
                'cn_name' => '湖北快3',
                'en_name' => 'hbk3',
                'series_id' => 'k3',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 39,
                'day_issue' => 39,
                'issue_format' => 'Ymd|N3',
                'issue_type' => 'day',
                'valid_code' => '1,2,3,4,5,6',
                'code_length' => 3,
                'positions' => 'w,q,b',
                'min_prize_group' => 1700,
                'max_prize_group' => 1980,
                'min_times' => 1,
                'max_times' => 2000,
                'max_profit_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/251ab8303275e69ec0cae5d26178257f.png',
                'created_at' => '2019-08-07 00:23:33',
                'updated_at' => '2019-08-08 17:59:49',
            ),
            34 => 
            array (
                'id' => 66,
                'lottery_type' => 1,
                'cn_name' => '内蒙古快3',
                'en_name' => 'nmgk3',
                'series_id' => 'k3',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 36,
                'day_issue' => 36,
                'issue_format' => 'Ymd|N3',
                'issue_type' => 'day',
                'valid_code' => '1,2,3,4,5,6',
                'code_length' => 3,
                'positions' => 'w,q,b',
                'min_prize_group' => 1700,
                'max_prize_group' => 1980,
                'min_times' => 1,
                'max_times' => 2000,
                'max_profit_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/f45239e9f97c17b2e2c338398adb8102.png',
                'created_at' => '2019-08-07 00:27:14',
                'updated_at' => '2019-08-08 18:02:26',
            ),
            35 => 
            array (
                'id' => 67,
                'lottery_type' => 1,
                'cn_name' => '江西快3',
                'en_name' => 'jxk3',
                'series_id' => 'k3',
                'is_fast' => 1,
                'auto_open' => 0,
                'max_trace_number' => 42,
                'day_issue' => 42,
                'issue_format' => 'Ymd|N3',
                'issue_type' => 'day',
                'valid_code' => '1,2,3,4,5,6',
                'code_length' => 3,
                'positions' => 'w,b,q',
                'min_prize_group' => 1700,
                'max_prize_group' => 1980,
                'min_times' => 1,
                'max_times' => 2000,
                'max_profit_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 0,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/a1f14ff883fd18fbd420db3545ebe3d6.png',
                'created_at' => '2019-08-07 00:32:25',
                'updated_at' => '2019-08-08 18:03:14',
            ),
        ));
        
        
    }
}