<?php

use Illuminate\Database\Seeder;

class BackendSystemMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('backend_system_menus')->delete();
        
        \DB::table('backend_system_menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label' => '运营管理',
                'en_name' => 'operasyon',
                'route' => '/operasyon',
                'pid' => 0,
                'icon' => 'anticon anticon-appstore',
                'display' => 1,
                'level' => 1,
                'sort' => 1,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'label' => '域名管理',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 1,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 1,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'label' => '系统设置',
                'en_name' => 'operasyon.setting',
                'route' => '/operasyon/operasyon-setting',
                'pid' => 1,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 2,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'label' => '活动列表',
                'en_name' => 'activity.list',
                'route' => '/operasyon/activity-list',
                'pid' => 64,
                'icon' => NULL,
                'display' => 1,
                'level' => 3,
                'sort' => 1,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            4 => 
            array (
                'id' => 9,
                'label' => '消息管理',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 64,
                'icon' => NULL,
                'display' => 0,
                'level' => 3,
                'sort' => 2,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            5 => 
            array (
                'id' => 11,
                'label' => '管理员角色',
                'en_name' => 'manager.character',
                'route' => '/operasyon/manager-character',
                'pid' => 1,
                'icon' => 'null',
                'display' => 1,
                'level' => 2,
                'sort' => 3,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            6 => 
            array (
                'id' => 12,
                'label' => '游戏管理',
                'en_name' => 'game',
                'route' => '/game',
                'pid' => 0,
                'icon' => 'anticon anticon-rocket',
                'display' => 1,
                'level' => 1,
                'sort' => 2,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            7 => 
            array (
                'id' => 13,
                'label' => '彩种信息',
                'en_name' => 'game.type',
                'route' => '/game/game-type',
                'pid' => 12,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 1,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            8 => 
            array (
                'id' => 14,
                'label' => '系列玩法',
                'en_name' => 'game.play',
                'route' => '/game/game-play',
                'pid' => 12,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 2,
                'updated_at' => '2019-07-11 15:29:04',
                'created_at' => NULL,
            ),
            9 => 
            array (
                'id' => 15,
                'label' => '玩法组管理',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 12,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 3,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            10 => 
            array (
                'id' => 16,
                'label' => '投注方式与玩法关系',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 12,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 4,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            11 => 
            array (
                'id' => 17,
                'label' => '奖期',
                'en_name' => 'lottery.issue',
                'route' => '/game/lottery-issue',
                'pid' => 12,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 5,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            12 => 
            array (
                'id' => 18,
                'label' => '系列',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 12,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 6,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            13 => 
            array (
                'id' => 19,
                'label' => '注单',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 12,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 7,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            14 => 
            array (
                'id' => 20,
                'label' => '追号',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 12,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 8,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            15 => 
            array (
                'id' => 21,
                'label' => '开奖',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 12,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 9,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            16 => 
            array (
                'id' => 22,
                'label' => '抓取记录',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 12,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 10,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            17 => 
            array (
                'id' => 23,
                'label' => '推送记录',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 12,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 11,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            18 => 
            array (
                'id' => 24,
                'label' => '告警记录',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 12,
                'icon' => '',
                'display' => 0,
                'level' => 2,
                'sort' => 12,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            19 => 
            array (
                'id' => 25,
                'label' => '玩家管理',
                'en_name' => 'manage',
                'route' => '/manage',
                'pid' => 0,
                'icon' => 'anticon anticon-user',
                'display' => 1,
                'level' => 1,
                'sort' => 3,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            20 => 
            array (
                'id' => 26,
                'label' => '用户绑定动作',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 25,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 1,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            21 => 
            array (
                'id' => 27,
                'label' => '管理用户',
                'en_name' => 'manage.user',
                'route' => '/manage/manage-user',
                'pid' => 25,
                'icon' => 'null',
                'display' => 1,
                'level' => 2,
                'sort' => 2,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            22 => 
            array (
                'id' => 28,
                'label' => '创建总代',
                'en_name' => 'create.general.agent',
                'route' => '/manage/create-general-agent',
                'pid' => 25,
                'icon' => 'null',
                'display' => 1,
                'level' => 2,
                'sort' => 3,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            23 => 
            array (
                'id' => 29,
                'label' => '密码审核',
                'en_name' => 'passport.check',
                'route' => '/manage/passport-check',
                'pid' => 25,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 4,
                'updated_at' => '2019-07-29 20:03:04',
                'created_at' => NULL,
            ),
            24 => 
            array (
                'id' => 30,
                'label' => '资金密码审核',
                'en_name' => 'capital.passport.check',
                'route' => '/manage/capital-passport-check',
                'pid' => 25,
                'icon' => 'null',
                'display' => 1,
                'level' => 2,
                'sort' => 5,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            25 => 
            array (
                'id' => 32,
                'label' => '开户链接管理',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 25,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 6,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            26 => 
            array (
                'id' => 33,
                'label' => '代理奖金组管理',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 25,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 7,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            27 => 
            array (
                'id' => 34,
                'label' => '卡号反查',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 25,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 8,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            28 => 
            array (
                'id' => 35,
                'label' => '代理盈亏报表',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 25,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 9,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            29 => 
            array (
                'id' => 36,
                'label' => '绑定银行卡',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 25,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 10,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            30 => 
            array (
                'id' => 38,
                'label' => '转移下级用户列表',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 25,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 11,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            31 => 
            array (
                'id' => 40,
                'label' => '银行卡',
                'en_name' => 'bank.check',
                'route' => '/manage/manage-bank',
                'pid' => 25,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 12,
                'updated_at' => '2019-07-29 20:31:31',
                'created_at' => NULL,
            ),
            32 => 
            array (
                'id' => 41,
                'label' => '分红契约',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 25,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 13,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            33 => 
            array (
                'id' => 42,
                'label' => '工资契约',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 25,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 14,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            34 => 
            array (
                'id' => 43,
                'label' => '账户管理',
                'en_name' => 'account',
                'route' => '/account',
                'pid' => 0,
                'icon' => 'anticon anticon-profile',
                'display' => 1,
                'level' => 1,
                'sort' => 4,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            35 => 
            array (
                'id' => 44,
                'label' => '玩家账户',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 43,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 1,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            36 => 
            array (
                'id' => 45,
                'label' => '账变记录',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 43,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 2,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            37 => 
            array (
                'id' => 47,
                'label' => '报表管理',
                'en_name' => NULL,
                'route' => '#',
                'pid' => 0,
                'icon' => 'anticon anticon-profile',
                'display' => 1,
                'level' => 1,
                'sort' => 5,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            38 => 
            array (
                'id' => 48,
                'label' => '充值报表',
                'en_name' => 'recharge.report',
                'route' => '/report/recharge-report',
                'pid' => 47,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 1,
                'updated_at' => '2019-05-28 14:54:06',
                'created_at' => NULL,
            ),
            39 => 
            array (
                'id' => 49,
                'label' => '账变报表',
                'en_name' => 'account.report',
                'route' => '/report/account-report',
                'pid' => 47,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 2,
                'updated_at' => '2019-05-28 14:58:18',
                'created_at' => NULL,
            ),
            40 => 
            array (
                'id' => 59,
                'label' => '操作日志',
                'en_name' => 'operation.log',
                'route' => '/operasyon/operation-log',
                'pid' => 1,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 4,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            41 => 
            array (
                'id' => 60,
                'label' => '账号冻结设置',
                'en_name' => 'permission.setting',
                'route' => '/manage/permission-setting',
                'pid' => 27,
                'icon' => NULL,
                'display' => 0,
                'level' => 3,
                'sort' => 1,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            42 => 
            array (
                'id' => 61,
                'label' => '省市地区列表',
                'en_name' => 'city.list',
                'route' => '/manage/city-list',
                'pid' => 25,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 15,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            43 => 
            array (
                'id' => 64,
                'label' => '活动管理',
                'en_name' => 'activity',
                'route' => '/operasyon/activity',
                'pid' => 1,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 5,
                'updated_at' => '2019-06-06 11:40:00',
                'created_at' => NULL,
            ),
            44 => 
            array (
                'id' => 65,
                'label' => '分类管理',
                'en_name' => 'category.manage',
                'route' => '/operasyon/category-manage',
                'pid' => 64,
                'icon' => NULL,
                'display' => 1,
                'level' => 3,
                'sort' => 3,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            45 => 
            array (
                'id' => 66,
                'label' => '文章管理',
                'en_name' => 'article.manage',
                'route' => '/operasyon/article-manage',
                'pid' => 64,
                'icon' => NULL,
                'display' => 1,
                'level' => 3,
                'sort' => 4,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            46 => 
            array (
                'id' => 69,
                'label' => '银行管理',
                'en_name' => 'bank.manage',
                'route' => '/operasyon/bank-manage',
                'pid' => 73,
                'icon' => NULL,
                'display' => 1,
                'level' => 3,
                'sort' => 1,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            47 => 
            array (
                'id' => 70,
                'label' => '额度管理',
                'en_name' => 'quota.manage',
                'route' => '/operasyon/quota-manage',
                'pid' => 73,
                'icon' => NULL,
                'display' => 1,
                'level' => 3,
                'sort' => 2,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            48 => 
            array (
                'id' => 73,
                'label' => '资金操作',
                'en_name' => 'prize.operate',
                'route' => '/manage/prize-handle',
                'pid' => 1,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 6,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            49 => 
            array (
                'id' => 79,
                'label' => '资金管理',
                'en_name' => 'prize.manage',
                'route' => '/manage/prize-manage',
                'pid' => 25,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 16,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            50 => 
            array (
                'id' => 80,
                'label' => '人工充值',
                'en_name' => 'recharge',
                'route' => '/manage/recharge',
                'pid' => 79,
                'icon' => NULL,
                'display' => 0,
                'level' => 3,
                'sort' => 1,
                'updated_at' => '2019-05-30 10:24:33',
                'created_at' => NULL,
            ),
            51 => 
            array (
                'id' => 81,
                'label' => '开发管理',
                'en_name' => 'developer.handler',
                'route' => '#',
                'pid' => 0,
                'icon' => 'anticon anticon-link',
                'display' => 1,
                'level' => 1,
                'sort' => 6,
                'updated_at' => '2019-05-11 10:48:47',
                'created_at' => NULL,
            ),
            52 => 
            array (
                'id' => 82,
                'label' => '商户端菜单管理',
                'en_name' => 'developer.menu',
                'route' => '/developer/add-menu',
                'pid' => 81,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 1,
                'updated_at' => '2019-05-24 14:57:15',
                'created_at' => NULL,
            ),
            53 => 
            array (
                'id' => 97,
                'label' => '充值审核',
                'en_name' => 'recharge.check',
                'route' => '/manage/recharge-check',
                'pid' => 79,
                'icon' => NULL,
                'display' => 1,
                'level' => 3,
                'sort' => 2,
                'updated_at' => NULL,
                'created_at' => NULL,
            ),
            54 => 
            array (
                'id' => 98,
                'label' => '拖拽',
                'en_name' => 'drag',
                'route' => '/developer/drag',
                'pid' => 81,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 2,
                'updated_at' => '2019-05-30 10:26:23',
                'created_at' => '2019-05-08 15:58:54',
            ),
            55 => 
            array (
                'id' => 99,
                'label' => '账变类型',
                'en_name' => 'account.type',
                'route' => '/manage/account-type',
                'pid' => 79,
                'icon' => NULL,
                'display' => 1,
                'level' => 3,
                'sort' => 3,
                'updated_at' => '2019-05-09 17:38:35',
                'created_at' => '2019-05-09 17:38:35',
            ),
            56 => 
            array (
                'id' => 100,
                'label' => '路由管理',
                'en_name' => 'route.manage',
                'route' => '/developer/route-manage',
                'pid' => 81,
                'icon' => NULL,
                'display' => 0,
                'level' => 2,
                'sort' => 3,
                'updated_at' => '2019-07-11 18:23:52',
                'created_at' => '2019-05-09 17:48:16',
            ),
            57 => 
            array (
                'id' => 101,
                'label' => '广告',
                'en_name' => 'ad.manage',
                'route' => 'ad-manage',
                'pid' => 0,
                'icon' => 'anticon anticon-bulb',
                'display' => 1,
                'level' => 1,
                'sort' => 7,
                'updated_at' => '2019-05-16 21:55:16',
                'created_at' => '2019-05-16 21:55:16',
            ),
            58 => 
            array (
                'id' => 102,
                'label' => '广告类型',
                'en_name' => 'ad.type',
                'route' => '/ad-manage/ad-type',
                'pid' => 101,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 1,
                'updated_at' => '2019-05-16 22:02:27',
                'created_at' => '2019-05-16 22:02:27',
            ),
            59 => 
            array (
                'id' => 103,
                'label' => '主页管理',
                'en_name' => 'page.manage',
                'route' => '/operasyon/page-manage',
                'pid' => 1,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 7,
                'updated_at' => '2019-05-17 11:03:35',
                'created_at' => '2019-05-17 11:03:35',
            ),
            60 => 
            array (
                'id' => 104,
                'label' => '图标',
                'en_name' => 'logo',
                'route' => '/operasyon/app-logo',
                'pid' => 103,
                'icon' => NULL,
                'display' => 0,
                'level' => 3,
                'sort' => 1,
                'updated_at' => '2019-07-11 18:34:37',
                'created_at' => '2019-05-17 11:05:53',
            ),
            61 => 
            array (
                'id' => 105,
                'label' => '一级导航',
                'en_name' => 'nav.one',
                'route' => '/operasyon/nav-one',
                'pid' => 103,
                'icon' => NULL,
                'display' => 1,
                'level' => 3,
                'sort' => 2,
                'updated_at' => '2019-05-17 11:08:33',
                'created_at' => '2019-05-17 11:08:33',
            ),
            62 => 
            array (
                'id' => 106,
                'label' => '二级导航',
                'en_name' => 'nave.two',
                'route' => '/operasyon/nav-two',
                'pid' => 103,
                'icon' => NULL,
                'display' => 0,
                'level' => 3,
                'sort' => 2,
                'updated_at' => '2019-08-06 17:47:58',
                'created_at' => '2019-05-17 11:09:45',
            ),
            63 => 
            array (
                'id' => 107,
                'label' => '轮播图',
                'en_name' => 'bannar',
                'route' => '/operasyon/bannar',
                'pid' => 103,
                'icon' => NULL,
                'display' => 1,
                'level' => 3,
                'sort' => 4,
                'updated_at' => '2019-08-05 16:30:58',
                'created_at' => '2019-05-17 11:10:43',
            ),
            64 => 
            array (
                'id' => 108,
                'label' => '主题板块',
                'en_name' => 'page.model',
                'route' => '/operasyon/page-model',
                'pid' => 103,
                'icon' => NULL,
                'display' => 1,
                'level' => 3,
                'sort' => 5,
                'updated_at' => '2019-05-17 11:11:58',
                'created_at' => '2019-05-17 11:11:58',
            ),
            65 => 
            array (
                'id' => 109,
                'label' => '页脚一',
                'en_name' => 'foot.one',
                'route' => '/operasyon/foot-one',
                'pid' => 103,
                'icon' => NULL,
                'display' => 0,
                'level' => 3,
                'sort' => 6,
                'updated_at' => '2019-05-30 10:23:16',
                'created_at' => '2019-05-17 11:13:36',
            ),
            66 => 
            array (
                'id' => 110,
                'label' => '页脚2',
                'en_name' => 'foot.two',
                'route' => '/operasyon/foot-two',
                'pid' => 103,
                'icon' => NULL,
                'display' => 0,
                'level' => 3,
                'sort' => 6,
                'updated_at' => '2019-05-30 10:23:18',
                'created_at' => '2019-05-17 11:14:09',
            ),
            67 => 
            array (
                'id' => 111,
                'label' => '投注端菜单管理',
                'en_name' => 'betting.menu',
                'route' => '/developer/betting-menu',
                'pid' => 81,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 4,
                'updated_at' => '2019-05-24 14:58:21',
                'created_at' => '2019-05-24 14:56:44',
            ),
            68 => 
            array (
                'id' => 112,
                'label' => '公告管理',
                'en_name' => 'announcement.manage',
                'route' => '/operasyon/announcement-manage',
                'pid' => 1,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 8,
                'updated_at' => '2019-05-25 10:56:13',
                'created_at' => '2019-05-25 10:46:09',
            ),
            69 => 
            array (
                'id' => 113,
                'label' => '玩法等级管理',
                'en_name' => 'play.level',
                'route' => '/developer/play-level',
                'pid' => 81,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 5,
                'updated_at' => '2019-05-30 20:42:45',
                'created_at' => '2019-05-30 20:42:45',
            ),
            70 => 
            array (
                'id' => 114,
                'label' => '前台操作日志',
                'en_name' => 'frontend.data.list',
                'route' => '/operasyon/frontend-list',
                'pid' => 1,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 9,
                'updated_at' => '2019-06-06 11:32:57',
                'created_at' => '2019-06-06 11:32:57',
            ),
            71 => 
            array (
                'id' => 115,
                'label' => '注单报表',
                'en_name' => 'user.bets',
                'route' => '/report/user-bets',
                'pid' => 47,
                'icon' => NULL,
                'display' => 1,
                'level' => 2,
                'sort' => 3,
                'updated_at' => '2019-06-26 19:46:18',
                'created_at' => '2019-06-26 19:46:18',
            ),
            72 => 
            array (
                'id' => 117,
                'label' => '帮助中心',
                'en_name' => 'helper',
                'route' => '/operasyon/helper',
                'pid' => 103,
                'icon' => NULL,
                'display' => 1,
                'level' => 3,
                'sort' => 8,
                'updated_at' => '2019-07-05 20:59:31',
                'created_at' => '2019-07-05 20:59:31',
            ),
        ));
        
        
    }
}