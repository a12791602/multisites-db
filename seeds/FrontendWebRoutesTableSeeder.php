<?php

use Illuminate\Database\Seeder;

class FrontendWebRoutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_web_routes')->delete();
        
        \DB::table('frontend_web_routes')->insert(array (
            0 => 
            array (
                'id' => 18,
                'route_name' => 'web-api.HomepageController.logo',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\Homepage\\HomepageController',
                'method' => 'logo',
                'frontend_model_id' => 10,
                'title' => '首页logo',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-06-04 15:39:26',
                'updated_at' => '2019-07-25 15:15:56',
            ),
            1 => 
            array (
                'id' => 19,
                'route_name' => 'web-api.HomepageController.ico',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\Homepage\\HomepageController',
                'method' => 'ico',
                'frontend_model_id' => 12,
                'title' => '网站头ico',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-06-04 15:40:13',
                'updated_at' => '2019-07-25 15:17:47',
            ),
            2 => 
            array (
                'id' => 20,
                'route_name' => 'web-api.HomepageController.banner',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\Homepage\\HomepageController',
                'method' => 'banner',
                'frontend_model_id' => 13,
                'title' => '首页轮播图',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-06-04 15:40:30',
                'updated_at' => '2019-06-05 20:43:20',
            ),
            3 => 
            array (
                'id' => 21,
                'route_name' => 'web-api.HomepageController.qrcode',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\Homepage\\HomepageController',
                'method' => 'qrCode',
                'frontend_model_id' => 16,
                'title' => '首页二维码',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-06-04 15:40:47',
                'updated_at' => '2019-06-05 20:43:24',
            ),
            4 => 
            array (
                'id' => 22,
                'route_name' => 'web-api.HomepageController.notice',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\Homepage\\HomepageController',
                'method' => 'notice',
                'frontend_model_id' => 17,
                'title' => '首页公告列表',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-06-04 15:41:08',
                'updated_at' => '2019-06-05 20:43:26',
            ),
            5 => 
            array (
                'id' => 24,
                'route_name' => 'web-api.HomepageController.activity',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\Homepage\\HomepageController',
                'method' => 'activity',
                'frontend_model_id' => 20,
                'title' => '首页热门活动',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-06-04 15:42:11',
                'updated_at' => '2019-07-30 17:08:08',
            ),
            6 => 
            array (
                'id' => 25,
                'route_name' => 'web-api.login',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\FrontendAuthController',
                'method' => 'login',
                'frontend_model_id' => 22,
                'title' => '登录',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-06-04 15:46:53',
                'updated_at' => '2019-06-05 20:43:34',
            ),
            7 => 
            array (
                'id' => 26,
                'route_name' => 'web-api.HomepageController.show-homepage-model',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\Homepage\\HomepageController',
                'method' => 'showHomepageModel',
                'frontend_model_id' => 8,
                'title' => '获取需要展示的前台模块',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-07-19 21:50:05',
                'updated_at' => '2019-07-25 15:15:41',
            ),
            8 => 
            array (
                'id' => 28,
                'route_name' => 'web-api.HomepageController.popular-methods',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\Homepage\\HomepageController',
                'method' => 'popularMethods',
                'frontend_model_id' => 19,
                'title' => '热门彩种2',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-07-19 21:53:14',
                'updated_at' => '2019-07-19 21:53:14',
            ),
            9 => 
            array (
                'id' => 29,
                'route_name' => 'web-api.HomepageController.ranking',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\Homepage\\HomepageController',
                'method' => 'ranking',
                'frontend_model_id' => 15,
                'title' => '中奖排行',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-07-19 21:54:32',
                'updated_at' => '2019-07-19 21:54:32',
            ),
            10 => 
            array (
                'id' => 30,
                'route_name' => 'web-api.UserHelpCenterController.menus',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\User\\Help\\UserHelpCenterControl',
                'method' => 'menus',
                'frontend_model_id' => 25,
                'title' => '帮助中心',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-07-19 21:57:19',
                'updated_at' => '2019-07-19 21:57:19',
            ),
            11 => 
            array (
                'id' => 31,
                'route_name' => 'web-api.HomepageController.lottery-notice-list',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\Homepage\\HomepageController',
                'method' => 'lotteryNoticeList',
                'frontend_model_id' => 26,
                'title' => '开奖公告',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-07-19 21:58:52',
                'updated_at' => '2019-07-19 21:58:52',
            ),
            12 => 
            array (
                'id' => 32,
                'route_name' => 'web-api.LotteriesController.lotteryList',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\Game\\Lottery\\LotteriesControlle',
                'method' => 'lotteryList',
                'frontend_model_id' => 27,
                'title' => '获取彩种接口',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-07-19 22:00:01',
                'updated_at' => '2019-07-19 22:00:01',
            ),
            13 => 
            array (
                'id' => 33,
                'route_name' => 'web-api.LotteriesController.lotteryInfo',
                'controller' => 'App\\Http\\Controllers\\FrontendApi\\Game\\Lottery\\LotteriesControlle',
                'method' => 'lotteryInfo',
                'frontend_model_id' => 27,
                'title' => '获取奖期历史',
                'description' => NULL,
                'is_open' => 1,
                'created_at' => '2019-07-19 22:00:30',
                'updated_at' => '2019-07-19 22:00:30',
            ),
        ));
        
        
    }
}