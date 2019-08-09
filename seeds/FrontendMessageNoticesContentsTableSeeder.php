<?php

use Illuminate\Database\Seeder;

class FrontendMessageNoticesContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_message_notices_contents')->delete();
        
        \DB::table('frontend_message_notices_contents')->insert(array (
            0 => 
            array (
                'id' => 2,
                'operate_admin_id' => 24,
                'operate_admin_name' => 'Ling',
                'type' => 2,
                'title' => '测试站内信',
                'content' => '<p>测试<br/></p>',
                'start_time' => '2019-05-21 00:00:00',
                'end_time' => '2019-05-30 00:00:00',
                'pic_path' => NULL,
                'created_at' => '2019-07-22 19:54:23',
                'updated_at' => '2019-08-01 15:28:49',
            ),
            1 => 
            array (
                'id' => 27,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '第五条公告',
                'content' => '<p>222<br/></p>',
                'start_time' => '2019-08-22 11:01:25',
                'end_time' => '2019-08-18 11:01:27',
                'pic_path' => NULL,
                'created_at' => '2019-08-01 11:01:30',
                'updated_at' => '2019-08-02 16:53:24',
            ),
            2 => 
            array (
                'id' => 28,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '第四条公告',
                'content' => '<p><img src="/uploaded_files/aa_1/notice_aa_1/5955cc03de02adb8e57de6d596957229.png"/><br/></p><p>2</p><p>2</p><p>2</p><p>2</p><p>2</p><p>2</p><p>2</p><p><br/></p><p>2</p><p><br/></p><p>2</p><p>2</p><p><br/></p><p>2</p><p>2</p><p>2</p><p>2</p><p>2</p><p>222</p><p><br/></p><p>2</p><p>2</p><p>2</p><p>2</p>',
                'start_time' => '2019-08-21 13:38:16',
                'end_time' => '2019-08-31 13:38:18',
                'pic_path' => '/uploaded_files/aa_1/notice_aa_1/5955cc03de02adb8e57de6d596957229.png',
                'created_at' => '2019-08-01 13:38:21',
                'updated_at' => '2019-08-03 10:49:36',
            ),
            3 => 
            array (
                'id' => 29,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '第三条公告',
                'content' => '<p><img src="/uploaded_files/aa_1/notice_aa_1/488232cba86cd2956eca5bbd5733e08a.png" width="100%"/></p>',
                'start_time' => '2019-08-28 14:26:23',
                'end_time' => '2019-08-31 14:26:25',
                'pic_path' => '/uploaded_files/aa_1/notice_aa_1/488232cba86cd2956eca5bbd5733e08a.png',
                'created_at' => '2019-08-01 14:26:28',
                'updated_at' => '2019-08-02 16:53:04',
            ),
            4 => 
            array (
                'id' => 30,
                'operate_admin_id' => 24,
                'operate_admin_name' => 'Ling',
                'type' => 1,
                'title' => '第二条公告第二条公告第二条公告第',
                'content' => '<p><img src="/uploaded_files/aa_1/notice_aa_1/3066bcc197a853753d2676be4b6db5a6.png" width="100%"/>123</p>',
                'start_time' => '2019-08-01 15:53:52',
                'end_time' => '2019-08-01 15:53:55',
                'pic_path' => '/uploaded_files/aa_1/notice_aa_1/3066bcc197a853753d2676be4b6db5a6.png',
                'created_at' => '2019-08-01 15:53:57',
                'updated_at' => '2019-08-03 11:06:54',
            ),
            5 => 
            array (
                'id' => 32,
                'operate_admin_id' => 24,
                'operate_admin_name' => 'Ling',
                'type' => 2,
                'title' => '测试测试测',
                'content' => '<p>测试测试测测试测试测测试测试测</p>',
                'start_time' => NULL,
                'end_time' => NULL,
                'pic_path' => NULL,
                'created_at' => '2019-08-08 19:56:07',
                'updated_at' => '2019-08-08 19:56:07',
            ),
        ));
        
        
    }
}