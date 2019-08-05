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
                'max_bonus' => '300000.0000',
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => '/uploaded_files/aa_1/lottery_aa_1/7d0786919b16a113482cc4d79289a916.png',
                'created_at' => NULL,
                'updated_at' => '2019-08-02 10:56:29',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
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
                'max_bonus' => '350000.0000',
                'valid_modes' => '1,2,3',
                'status' => 1,
                'icon_path' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}