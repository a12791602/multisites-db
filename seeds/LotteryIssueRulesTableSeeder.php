<?php

use Illuminate\Database\Seeder;

class LotteryIssueRulesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lottery_issue_rules')->delete();
        
        \DB::table('lottery_issue_rules')->insert(array (
            0 => 
            array (
                'id' => 1,
                'lottery_id' => 'cqssc',
                'lottery_name' => '重庆时时彩',
                'begin_time' => '00:10:00',
                'end_time' => '03:10:00',
                'issue_seconds' => 1200,
                'first_time' => '00:30:00',
                'adjust_time' => 30,
                'encode_time' => 5,
                'issue_count' => 9,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:08',
                'updated_at' => '2019-08-06 13:55:11',
            ),
            1 => 
            array (
                'id' => 2,
                'lottery_id' => 'cqssc',
                'lottery_name' => '重庆时时彩',
                'begin_time' => '07:10:00',
                'end_time' => '23:50:00',
                'issue_seconds' => 1200,
                'first_time' => '07:30:00',
                'adjust_time' => 45,
                'encode_time' => 5,
                'issue_count' => 50,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:08',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'lottery_id' => 'hljssc',
                'lottery_name' => '黑龙江时时彩',
                'begin_time' => '08:40:00',
                'end_time' => '22:40:00',
                'issue_seconds' => 1200,
                'first_time' => '09:00:00',
                'adjust_time' => 120,
                'encode_time' => 10,
                'issue_count' => 42,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:08',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'lottery_id' => 'xjssc',
                'lottery_name' => '新疆时时彩',
                'begin_time' => '10:00:00',
                'end_time' => '02:00:00',
                'issue_seconds' => 1200,
                'first_time' => '10:20:00',
                'adjust_time' => 120,
                'encode_time' => 10,
                'issue_count' => 48,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:09',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'lottery_id' => 'zx1fc',
                'lottery_name' => '中兴1分彩',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 60,
                'first_time' => '00:01:00',
                'adjust_time' => 0,
                'encode_time' => 0,
                'issue_count' => 1440,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:09',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'lottery_id' => 'txffc',
                'lottery_name' => '腾讯分分彩',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 60,
                'first_time' => '00:01:00',
                'adjust_time' => 0,
                'encode_time' => 0,
                'issue_count' => 1440,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:09',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'lottery_id' => 'sd115',
                'lottery_name' => '山东11选5',
                'begin_time' => '08:41:00',
                'end_time' => '23:01:00',
                'issue_seconds' => 1200,
                'first_time' => '09:01:00',
                'adjust_time' => 90,
                'encode_time' => 60,
                'issue_count' => 43,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:10',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'lottery_id' => 'gd115',
                'lottery_name' => '广东11选5',
                'begin_time' => '09:10:00',
                'end_time' => '23:10:00',
                'issue_seconds' => 1200,
                'first_time' => '09:30:00',
                'adjust_time' => 60,
                'encode_time' => 60,
                'issue_count' => 42,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:10',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'lottery_id' => 'sx115',
                'lottery_name' => '山西11选5',
                'begin_time' => '08:26:00',
                'end_time' => '00:06:00',
                'issue_seconds' => 1200,
                'first_time' => '08:46:00',
                'adjust_time' => 120,
                'encode_time' => 60,
                'issue_count' => 47,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:10',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'lottery_id' => 'sh115',
                'lottery_name' => '上海11选5',
                'begin_time' => '09:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 1200,
                'first_time' => '09:20:00',
                'adjust_time' => 120,
                'encode_time' => 60,
                'issue_count' => 45,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:10',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'lottery_id' => 'jx115',
                'lottery_name' => '江西11选5',
                'begin_time' => '10:00:00',
                'end_time' => '02:00:00',
                'issue_seconds' => 1200,
                'first_time' => '10:20:00',
                'adjust_time' => 120,
                'encode_time' => 60,
                'issue_count' => 42,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:11',
                'updated_at' => '2019-08-02 11:30:28',
            ),
            11 => 
            array (
                'id' => 12,
                'lottery_id' => 'zx115',
                'lottery_name' => '中兴11选5',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 60,
                'first_time' => '00:01:00',
                'adjust_time' => 0,
                'encode_time' => 0,
                'issue_count' => 1440,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:11',
                'updated_at' => '2019-08-02 11:30:37',
            ),
            12 => 
            array (
                'id' => 13,
                'lottery_id' => 'jsk3',
                'lottery_name' => '江苏快3',
                'begin_time' => '08:30:00',
                'end_time' => '22:10:00',
                'issue_seconds' => 1200,
                'first_time' => '08:50:00',
                'adjust_time' => 180,
                'encode_time' => 5,
                'issue_count' => 41,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:11',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'lottery_id' => 'ahk3',
                'lottery_name' => '安徽快3',
                'begin_time' => '08:40:00',
                'end_time' => '22:00:00',
                'issue_seconds' => 1200,
                'first_time' => '09:00:00',
                'adjust_time' => 180,
                'encode_time' => 5,
                'issue_count' => 40,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:12',
                'updated_at' => '2019-08-02 11:31:10',
            ),
            14 => 
            array (
                'id' => 15,
                'lottery_id' => 'gsk3',
                'lottery_name' => '甘肃快3',
                'begin_time' => '09:59:00',
                'end_time' => '21:59:00',
                'issue_seconds' => 1200,
                'first_time' => '10:19:00',
                'adjust_time' => 120,
                'encode_time' => 60,
                'issue_count' => 36,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:12',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'lottery_id' => 'hnk3',
                'lottery_name' => '河南快3',
                'begin_time' => '08:34:00',
                'end_time' => '22:34:00',
                'issue_seconds' => 1200,
                'first_time' => '08:54:00',
                'adjust_time' => 120,
                'encode_time' => 60,
                'issue_count' => 42,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:12',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'lottery_id' => 'zxk3',
                'lottery_name' => '中兴快3',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 60,
                'first_time' => '00:01:00',
                'adjust_time' => 0,
                'encode_time' => 0,
                'issue_count' => 1440,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:12',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'lottery_id' => 'fc3d',
                'lottery_name' => '福彩3D',
                'begin_time' => '20:20:00',
                'end_time' => '20:20:00',
                'issue_seconds' => 87000,
                'first_time' => '20:30:00',
                'adjust_time' => 600,
                'encode_time' => 600,
                'issue_count' => 1,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:13',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'lottery_id' => 'zx3d',
                'lottery_name' => '中兴3D',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 60,
                'first_time' => '00:01:00',
                'adjust_time' => 0,
                'encode_time' => 0,
                'issue_count' => 1440,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:13',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'lottery_id' => 'p3p5',
                'lottery_name' => '排列35',
                'begin_time' => '20:20:00',
                'end_time' => '20:20:00',
                'issue_seconds' => 87000,
                'first_time' => '20:30:00',
                'adjust_time' => 1800,
                'encode_time' => 1800,
                'issue_count' => 1,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:13',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'lottery_id' => 'bjpk10',
                'lottery_name' => '北京PK10',
                'begin_time' => '09:10:00',
                'end_time' => '23:50:00',
                'issue_seconds' => 1200,
                'first_time' => '09:30:00',
                'adjust_time' => 60,
                'encode_time' => 0,
                'issue_count' => 44,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:13',
                'updated_at' => '2019-08-10 15:03:40',
            ),
            21 => 
            array (
                'id' => 22,
                'lottery_id' => 'ftpk10',
                'lottery_name' => '急速飞艇',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 60,
                'first_time' => '00:01:00',
                'adjust_time' => 0,
                'encode_time' => 0,
                'issue_count' => 1440,
                'status' => 1,
                'created_at' => '2019-04-29 15:22:14',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'lottery_id' => 'zxpk10',
                'lottery_name' => '中兴PK10',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 60,
                'first_time' => '00:01:00',
                'adjust_time' => 0,
                'encode_time' => 0,
                'issue_count' => 1440,
                'status' => 0,
                'created_at' => '2019-04-29 15:22:15',
                'updated_at' => '2019-08-12 18:52:27',
            ),
            23 => 
            array (
                'id' => 57,
                'lottery_id' => 'ah115',
                'lottery_name' => '安徽11选5',
                'begin_time' => '08:40:00',
                'end_time' => '22:00:00',
                'issue_seconds' => 1200,
                'first_time' => '09:00:00',
                'adjust_time' => 120,
                'encode_time' => 60,
                'issue_count' => 40,
                'status' => 0,
                'created_at' => '2019-08-06 23:13:10',
                'updated_at' => '2019-08-06 23:13:10',
            ),
            24 => 
            array (
                'id' => 59,
                'lottery_id' => 'tx05fc',
                'lottery_name' => '腾讯5分彩',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 300,
                'first_time' => '00:05:00',
                'adjust_time' => 0,
                'encode_time' => 0,
                'issue_count' => 288,
                'status' => 0,
                'created_at' => '2019-08-06 23:46:17',
                'updated_at' => '2019-08-06 23:46:17',
            ),
            25 => 
            array (
                'id' => 60,
                'lottery_id' => 'tx10fc',
                'lottery_name' => '腾讯10分彩',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 600,
                'first_time' => '00:10:00',
                'adjust_time' => 0,
                'encode_time' => 0,
                'issue_count' => 144,
                'status' => 1,
                'created_at' => '2019-08-06 23:48:49',
                'updated_at' => '2019-08-12 17:44:04',
            ),
            26 => 
            array (
                'id' => 61,
                'lottery_id' => 'qiqtxffc',
                'lottery_name' => '奇趣腾讯分分彩',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 60,
                'first_time' => '00:01:00',
                'adjust_time' => 0,
                'encode_time' => 0,
                'issue_count' => 1440,
                'status' => 0,
                'created_at' => '2019-08-06 23:52:28',
                'updated_at' => '2019-08-06 23:52:28',
            ),
            27 => 
            array (
                'id' => 62,
                'lottery_id' => 'duotxffc',
                'lottery_name' => '多彩腾讯分分彩',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 60,
                'first_time' => '00:01:00',
                'adjust_time' => 0,
                'encode_time' => 0,
                'issue_count' => 1440,
                'status' => 0,
                'created_at' => '2019-08-06 23:55:10',
                'updated_at' => '2019-08-06 23:55:10',
            ),
            28 => 
            array (
                'id' => 63,
                'lottery_id' => 'wb05fc',
                'lottery_name' => '微博5分彩',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 300,
                'first_time' => '00:05:00',
                'adjust_time' => 90,
                'encode_time' => 0,
                'issue_count' => 288,
                'status' => 0,
                'created_at' => '2019-08-06 23:57:41',
                'updated_at' => '2019-08-06 23:57:41',
            ),
            29 => 
            array (
                'id' => 64,
                'lottery_id' => 'heb115',
                'lottery_name' => '河北11选5',
                'begin_time' => '08:25:00',
                'end_time' => '22:05:00',
                'issue_seconds' => 1200,
                'first_time' => '08:45:00',
                'adjust_time' => 180,
                'encode_time' => 0,
                'issue_count' => 41,
                'status' => 0,
                'created_at' => '2019-08-07 00:01:58',
                'updated_at' => '2019-08-07 00:01:58',
            ),
            30 => 
            array (
                'id' => 65,
                'lottery_id' => 'hb115',
                'lottery_name' => '湖北11选5',
                'begin_time' => '08:35:00',
                'end_time' => '21:55:00',
                'issue_seconds' => 1200,
                'first_time' => '08:55:00',
                'adjust_time' => 180,
                'encode_time' => 0,
                'issue_count' => 40,
                'status' => 0,
                'created_at' => '2019-08-07 00:11:36',
                'updated_at' => '2019-08-07 00:11:36',
            ),
            31 => 
            array (
                'id' => 66,
                'lottery_id' => 'shx115',
                'lottery_name' => '陕西11选5',
                'begin_time' => '08:30:00',
                'end_time' => '21:10:00',
                'issue_seconds' => 1200,
                'first_time' => '08:50:00',
                'adjust_time' => 180,
                'encode_time' => 0,
                'issue_count' => 44,
                'status' => 0,
                'created_at' => '2019-08-07 00:14:18',
                'updated_at' => '2019-08-07 00:14:18',
            ),
            32 => 
            array (
                'id' => 67,
                'lottery_id' => 'hbk3',
                'lottery_name' => '湖北快3',
                'begin_time' => '09:00:00',
                'end_time' => '22:00:00',
                'issue_seconds' => 1200,
                'first_time' => '09:20:00',
                'adjust_time' => 120,
                'encode_time' => 60,
                'issue_count' => 39,
                'status' => 0,
                'created_at' => '2019-08-07 00:23:33',
                'updated_at' => '2019-08-08 17:59:49',
            ),
            33 => 
            array (
                'id' => 68,
                'lottery_id' => 'nmgk3',
                'lottery_name' => '内蒙古快3',
                'begin_time' => '09:40:00',
                'end_time' => '21:40:00',
                'issue_seconds' => 1200,
                'first_time' => '10:00:00',
                'adjust_time' => 120,
                'encode_time' => 60,
                'issue_count' => 36,
                'status' => 0,
                'created_at' => '2019-08-07 00:27:14',
                'updated_at' => '2019-08-08 18:02:26',
            ),
            34 => 
            array (
                'id' => 69,
                'lottery_id' => 'jxk3',
                'lottery_name' => '江西快3',
                'begin_time' => '08:15:00',
                'end_time' => '22:15:00',
                'issue_seconds' => 1200,
                'first_time' => '08:35:00',
                'adjust_time' => 180,
                'encode_time' => 0,
                'issue_count' => 42,
                'status' => 0,
                'created_at' => '2019-08-07 00:32:25',
                'updated_at' => '2019-08-07 00:32:25',
            ),
            35 => 
            array (
                'id' => 72,
                'lottery_id' => 'zxp3p5',
                'lottery_name' => '中兴排列35',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 60,
                'first_time' => '00:01:00',
                'adjust_time' => 0,
                'encode_time' => 0,
                'issue_count' => 1440,
                'status' => 1,
                'created_at' => '2019-08-11 20:20:58',
                'updated_at' => '2019-08-12 12:11:55',
            ),
            36 => 
            array (
                'id' => 73,
                'lottery_id' => 'shssl',
                'lottery_name' => '上海时时乐',
                'begin_time' => '10:10:00',
                'end_time' => '21:30:00',
                'issue_seconds' => 1800,
                'first_time' => '10:30:00',
                'adjust_time' => 180,
                'encode_time' => 60,
                'issue_count' => 23,
                'status' => 1,
                'created_at' => '2019-08-11 22:04:33',
                'updated_at' => '2019-08-11 22:05:42',
            ),
            37 => 
            array (
                'id' => 74,
                'lottery_id' => 'zxssl',
                'lottery_name' => '中兴时时乐',
                'begin_time' => '00:00:00',
                'end_time' => '00:00:00',
                'issue_seconds' => 60,
                'first_time' => '00:01:00',
                'adjust_time' => 0,
                'encode_time' => 0,
                'issue_count' => 1440,
                'status' => 1,
                'created_at' => '2019-08-11 22:28:29',
                'updated_at' => '2019-08-11 22:31:12',
            ),
        ));
        
        
    }
}