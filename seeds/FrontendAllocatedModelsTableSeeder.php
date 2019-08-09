<?php

use Illuminate\Database\Seeder;

class FrontendAllocatedModelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_allocated_models')->delete();
        
        \DB::table('frontend_allocated_models')->insert(array (
            0 => 
            array (
                'id' => 8,
                'label' => '首页',
                'en_name' => 'homepage',
                'pid' => 0,
                'type' => 1,
                'value' => NULL,
                'show_num' => NULL,
                'status' => 1,
                'level' => 1,
                'is_homepage_display' => NULL,
                'updated_at' => '2019-06-03 14:21:05',
                'created_at' => '2019-06-03 14:21:05',
            ),
            1 => 
            array (
                'id' => 9,
                'label' => '一导航',
                'en_name' => 'nav.one',
                'pid' => 8,
                'type' => 1,
                'value' => NULL,
                'show_num' => NULL,
                'status' => 1,
                'level' => 2,
                'is_homepage_display' => NULL,
                'updated_at' => '2019-06-07 15:36:25',
                'created_at' => '2019-06-03 14:23:16',
            ),
            2 => 
            array (
                'id' => 10,
                'label' => '图标',
                'en_name' => 'logo',
                'pid' => 9,
                'type' => 1,
                'value' => '/uploaded_files/aa_1/logo_aa_1/c23c989dd9744d6673e29ebe8223b414.png',
                'show_num' => NULL,
                'status' => 1,
                'level' => 3,
                'is_homepage_display' => 1,
                'updated_at' => '2019-08-03 17:13:49',
                'created_at' => '2019-06-03 14:24:11',
            ),
            3 => 
            array (
                'id' => 11,
                'label' => '联系客服',
                'en_name' => 'customer.service',
                'pid' => 9,
                'type' => 1,
                'value' => 'http://22ssadsd.com',
                'show_num' => NULL,
                'status' => 1,
                'level' => 3,
                'is_homepage_display' => 1,
                'updated_at' => '2019-06-03 14:24:39',
                'created_at' => '2019-06-03 14:24:39',
            ),
            4 => 
            array (
                'id' => 12,
                'label' => '网站头ico',
                'en_name' => 'frontend.ico',
                'pid' => 9,
                'type' => 1,
                'value' => '/uploaded_files/aa_1/frontend_aa_1/ico/6999fcf4abafe5299509ebe364c21f10.ico',
                'show_num' => NULL,
                'status' => 1,
                'level' => 3,
                'is_homepage_display' => 1,
                'updated_at' => '2019-08-03 11:49:21',
                'created_at' => '2019-06-03 14:25:00',
            ),
            5 => 
            array (
                'id' => 13,
                'label' => '轮播图',
                'en_name' => 'banner',
                'pid' => 8,
                'type' => 1,
                'value' => NULL,
                'show_num' => NULL,
                'status' => 1,
                'level' => 2,
                'is_homepage_display' => 1,
                'updated_at' => '2019-06-03 14:25:40',
                'created_at' => '2019-06-03 14:25:40',
            ),
            6 => 
            array (
                'id' => 14,
                'label' => '主题板块',
                'en_name' => 'page.model',
                'pid' => 8,
                'type' => 1,
                'value' => NULL,
                'show_num' => NULL,
                'status' => 1,
                'level' => 2,
                'is_homepage_display' => NULL,
                'updated_at' => '2019-06-03 14:26:08',
                'created_at' => '2019-06-03 14:26:08',
            ),
            7 => 
            array (
                'id' => 15,
                'label' => '中奖排行',
                'en_name' => 'winning.ranking',
                'pid' => 14,
                'type' => 1,
                'value' => NULL,
                'show_num' => 9,
                'status' => 1,
                'level' => 3,
                'is_homepage_display' => 1,
                'updated_at' => '2019-08-08 14:40:13',
                'created_at' => '2019-06-03 14:26:32',
            ),
            8 => 
            array (
                'id' => 16,
                'label' => '二维码',
                'en_name' => 'qr.code',
                'pid' => 14,
                'type' => 1,
                'value' => '/uploaded_files/aa_1/qr.code_aa_1/ade9900dea626c7e8c4e89bbb92ac21c.jpg',
                'show_num' => NULL,
                'status' => 1,
                'level' => 3,
                'is_homepage_display' => 1,
                'updated_at' => '2019-08-02 15:53:41',
                'created_at' => '2019-06-03 14:26:52',
            ),
            9 => 
            array (
                'id' => 17,
                'label' => '公告',
                'en_name' => 'notice',
                'pid' => 14,
                'type' => 1,
                'value' => NULL,
                'show_num' => 5,
                'status' => 1,
                'level' => 3,
                'is_homepage_display' => 1,
                'updated_at' => '2019-06-03 14:27:13',
                'created_at' => '2019-06-03 14:27:13',
            ),
            10 => 
            array (
                'id' => 19,
                'label' => '热门彩种二',
                'en_name' => 'popularLotteries.two',
                'pid' => 14,
                'type' => 1,
                'value' => NULL,
                'show_num' => 10,
                'status' => 1,
                'level' => 3,
                'is_homepage_display' => 1,
                'updated_at' => '2019-08-02 11:39:38',
                'created_at' => '2019-06-03 14:27:59',
            ),
            11 => 
            array (
                'id' => 20,
                'label' => '热门活动',
                'en_name' => 'activity',
                'pid' => 14,
                'type' => 1,
                'value' => NULL,
                'show_num' => 4,
                'status' => 1,
                'level' => 3,
                'is_homepage_display' => 1,
                'updated_at' => '2019-06-03 14:28:20',
                'created_at' => '2019-06-03 14:28:20',
            ),
            12 => 
            array (
                'id' => 21,
                'label' => '登录模块',
                'en_name' => 'login-model',
                'pid' => 0,
                'type' => 1,
                'value' => NULL,
                'show_num' => NULL,
                'status' => 1,
                'level' => 1,
                'is_homepage_display' => NULL,
                'updated_at' => '2019-06-04 15:44:16',
                'created_at' => '2019-06-04 15:44:16',
            ),
            13 => 
            array (
                'id' => 22,
                'label' => '登录',
                'en_name' => 'login',
                'pid' => 21,
                'type' => 1,
                'value' => NULL,
                'show_num' => NULL,
                'status' => 1,
                'level' => 2,
                'is_homepage_display' => NULL,
                'updated_at' => '2019-06-04 15:45:55',
                'created_at' => '2019-06-04 15:45:55',
            ),
            14 => 
            array (
                'id' => 23,
                'label' => '注册',
                'en_name' => 'register',
                'pid' => 21,
                'type' => 1,
                'value' => NULL,
                'show_num' => NULL,
                'status' => 1,
                'level' => 2,
                'is_homepage_display' => NULL,
                'updated_at' => '2019-06-04 15:46:18',
                'created_at' => '2019-06-04 15:46:18',
            ),
            15 => 
            array (
                'id' => 24,
                'label' => '开奖公告',
                'en_name' => 'lottery.notice',
                'pid' => 14,
                'type' => 1,
                'value' => NULL,
                'show_num' => 10,
                'status' => 1,
                'level' => 3,
                'is_homepage_display' => 1,
                'updated_at' => '2019-08-02 16:10:13',
                'created_at' => '2019-07-19 20:57:22',
            ),
            16 => 
            array (
                'id' => 25,
                'label' => 'app端热门彩种一',
                'en_name' => 'mobile.popular.lotteries.one',
                'pid' => 14,
                'type' => 1,
                'value' => NULL,
                'show_num' => 9,
                'status' => 1,
                'level' => 3,
                'is_homepage_display' => 1,
                'updated_at' => '2019-07-30 15:24:56',
                'created_at' => '2019-07-22 11:13:08',
            ),
            17 => 
            array (
                'id' => 26,
                'label' => '手机端开奖公告',
                'en_name' => 'mobile.lottery.notice',
                'pid' => 14,
                'type' => 1,
                'value' => NULL,
                'show_num' => 10,
                'status' => 1,
                'level' => 3,
                'is_homepage_display' => 1,
                'updated_at' => '2019-07-30 15:24:51',
                'created_at' => '2019-07-22 15:04:07',
            ),
            18 => 
            array (
                'id' => 27,
                'label' => 'web端热门彩种一',
                'en_name' => 'popular.lotteries.one',
                'pid' => 14,
                'type' => 1,
                'value' => NULL,
                'show_num' => 12,
                'status' => 1,
                'level' => 3,
                'is_homepage_display' => 1,
                'updated_at' => '2019-08-02 11:56:49',
                'created_at' => '2019-07-23 20:34:37',
            ),
            19 => 
            array (
                'id' => 28,
                'label' => '1',
                'en_name' => '1',
                'pid' => 0,
                'type' => 1,
                'value' => NULL,
                'show_num' => NULL,
                'status' => NULL,
                'level' => 1,
                'is_homepage_display' => NULL,
                'updated_at' => '2019-07-25 15:17:00',
                'created_at' => '2019-07-25 15:17:00',
            ),
            20 => 
            array (
                'id' => 29,
                'label' => '热门棋牌',
                'en_name' => 'popular.chess.cards',
                'pid' => 14,
                'type' => 1,
                'value' => NULL,
                'show_num' => NULL,
                'status' => NULL,
                'level' => 3,
                'is_homepage_display' => NULL,
                'updated_at' => '2019-08-01 15:23:03',
                'created_at' => '2019-08-01 15:23:03',
            ),
            21 => 
            array (
                'id' => 30,
                'label' => '热门电子',
                'en_name' => 'popular.e.game',
                'pid' => 14,
                'type' => 1,
                'value' => NULL,
                'show_num' => NULL,
                'status' => NULL,
                'level' => 3,
                'is_homepage_display' => NULL,
                'updated_at' => '2019-08-01 15:23:22',
                'created_at' => '2019-08-01 15:23:22',
            ),
        ));
        
        
    }
}