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
                'id' => 1,
                'operate_admin_id' => 24,
                'operate_admin_name' => 'Ling',
                'type' => 1,
                'title' => '测试公告',
                'content' => '测试公告内容测试公告内容测试公告内容测试公告内容',
                'start_time' => '2019-05-21 00:00:00',
                'end_time' => '2019-05-30 00:00:00',
                'pic_path' => NULL,
                'created_at' => '2019-07-22 19:53:55',
                'updated_at' => '2019-07-22 19:53:55',
            ),
            1 => 
            array (
                'id' => 2,
                'operate_admin_id' => 24,
                'operate_admin_name' => 'Ling',
                'type' => 2,
                'title' => '测试站内信',
                'content' => '测试站内信内容测试站内信内容测试站内信内容',
                'start_time' => '2019-05-21 00:00:00',
                'end_time' => '2019-05-30 00:00:00',
                'pic_path' => NULL,
                'created_at' => '2019-07-22 19:54:23',
                'updated_at' => '2019-07-22 19:54:23',
            ),
            2 => 
            array (
                'id' => 3,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '123',
                'content' => '<p>1232132<br/></p>',
                'start_time' => '2019-07-23 15:45:19',
                'end_time' => '2019-07-21 15:45:22',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 15:45:24',
                'updated_at' => '2019-07-26 16:45:37',
            ),
            3 => 
            array (
                'id' => 5,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '1',
                'content' => '<p>1</p>',
                'start_time' => '2019-07-26 16:45:46',
                'end_time' => '2019-07-28 16:45:49',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 16:45:51',
                'updated_at' => '2019-07-26 16:45:51',
            ),
            4 => 
            array (
                'id' => 6,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '2',
                'content' => '<p>2</p>',
                'start_time' => '2019-07-26 16:47:10',
                'end_time' => '2019-07-27 16:47:12',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 16:47:13',
                'updated_at' => '2019-07-26 16:47:13',
            ),
            5 => 
            array (
                'id' => 7,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '3',
                'content' => '<p>3</p>',
                'start_time' => '2019-07-26 16:47:19',
                'end_time' => '2019-07-26 16:47:21',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 16:47:22',
                'updated_at' => '2019-07-26 16:47:22',
            ),
            6 => 
            array (
                'id' => 8,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '4',
                'content' => '<p>4</p>',
                'start_time' => '2019-07-26 16:47:26',
                'end_time' => '2019-07-26 16:47:28',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 16:47:29',
                'updated_at' => '2019-07-26 16:47:29',
            ),
            7 => 
            array (
                'id' => 9,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '5',
                'content' => '<p>5</p>',
                'start_time' => '2019-07-26 16:47:35',
                'end_time' => '2019-07-26 16:47:36',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 16:47:38',
                'updated_at' => '2019-07-26 16:47:38',
            ),
            8 => 
            array (
                'id' => 10,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '6',
                'content' => '<p>6</p>',
                'start_time' => '2019-07-26 16:47:45',
                'end_time' => '2019-07-27 16:47:48',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 16:47:51',
                'updated_at' => '2019-07-26 16:47:51',
            ),
            9 => 
            array (
                'id' => 11,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '7',
                'content' => '<p>7</p>',
                'start_time' => '2019-07-26 16:47:59',
                'end_time' => '2019-07-26 16:48:00',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 16:48:03',
                'updated_at' => '2019-07-26 16:48:03',
            ),
            10 => 
            array (
                'id' => 12,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '10',
                'content' => '<p>1</p>',
                'start_time' => '2019-07-26 16:48:08',
                'end_time' => '2019-07-26 16:48:09',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 16:48:11',
                'updated_at' => '2019-07-26 16:48:11',
            ),
            11 => 
            array (
                'id' => 13,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '11',
                'content' => '<p>11</p>',
                'start_time' => '2019-07-26 16:48:19',
                'end_time' => '2019-07-26 16:48:20',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 16:48:21',
                'updated_at' => '2019-07-26 16:48:21',
            ),
            12 => 
            array (
                'id' => 14,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '12',
                'content' => '<p>12<br/></p>',
                'start_time' => '2019-07-26 17:11:48',
                'end_time' => '2019-07-26 17:11:50',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 17:11:53',
                'updated_at' => '2019-07-26 17:11:53',
            ),
            13 => 
            array (
                'id' => 15,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '13',
                'content' => '<p>13</p>',
                'start_time' => '2019-07-26 17:11:59',
                'end_time' => '2019-07-26 17:12:00',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 17:12:02',
                'updated_at' => '2019-07-26 17:12:02',
            ),
            14 => 
            array (
                'id' => 16,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '14',
                'content' => '<p>14</p>',
                'start_time' => '2019-07-26 17:12:06',
                'end_time' => '2019-07-26 17:12:07',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 17:12:09',
                'updated_at' => '2019-07-26 17:12:09',
            ),
            15 => 
            array (
                'id' => 17,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '15',
                'content' => '<p>15</p>',
                'start_time' => '2019-07-26 17:12:13',
                'end_time' => '2019-07-26 17:12:14',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 17:12:16',
                'updated_at' => '2019-07-26 17:12:16',
            ),
            16 => 
            array (
                'id' => 18,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '16',
                'content' => '<p>16</p>',
                'start_time' => '2019-07-26 17:12:20',
                'end_time' => '2019-07-26 17:12:20',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 17:12:22',
                'updated_at' => '2019-07-26 17:12:22',
            ),
            17 => 
            array (
                'id' => 19,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '17',
                'content' => '<p>17</p>',
                'start_time' => '2019-07-26 17:12:27',
                'end_time' => '2019-07-26 17:12:28',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 17:12:29',
                'updated_at' => '2019-07-26 17:12:29',
            ),
            18 => 
            array (
                'id' => 20,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '18',
                'content' => '<p>18</p>',
                'start_time' => '2019-07-26 17:12:37',
                'end_time' => '2019-07-26 17:12:38',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 17:12:39',
                'updated_at' => '2019-07-26 17:12:39',
            ),
            19 => 
            array (
                'id' => 21,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '19',
                'content' => '<p>19</p>',
                'start_time' => '2019-07-26 17:12:45',
                'end_time' => '2019-07-26 17:12:45',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 17:12:47',
                'updated_at' => '2019-07-26 17:12:47',
            ),
            20 => 
            array (
                'id' => 22,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '20',
                'content' => '<p>20&nbsp;&nbsp;&nbsp;&nbsp;</p>',
                'start_time' => '2019-07-26 17:12:52',
                'end_time' => '2019-07-26 17:12:53',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 17:12:54',
                'updated_at' => '2019-07-26 17:12:54',
            ),
            21 => 
            array (
                'id' => 23,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '21',
                'content' => '<p>21</p>',
                'start_time' => '2019-07-26 17:12:59',
                'end_time' => '2019-07-26 17:13:00',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 17:13:01',
                'updated_at' => '2019-07-26 17:13:01',
            ),
            22 => 
            array (
                'id' => 24,
                'operate_admin_id' => 4,
                'operate_admin_name' => 'york',
                'type' => 1,
                'title' => '22',
                'content' => '<p>22</p>',
                'start_time' => '2019-07-26 17:13:05',
                'end_time' => '2019-07-26 17:13:06',
                'pic_path' => NULL,
                'created_at' => '2019-07-26 17:13:08',
                'updated_at' => '2019-07-26 17:13:08',
            ),
            23 => 
            array (
                'id' => 25,
                'operate_admin_id' => 24,
                'operate_admin_name' => 'Ling',
                'type' => 1,
                'title' => '测试公告',
                'content' => '<p>测试公告</p>',
                'start_time' => '2019-07-27 10:30:35',
                'end_time' => '2019-07-28 10:30:39',
                'pic_path' => NULL,
                'created_at' => '2019-07-27 10:30:42',
                'updated_at' => '2019-07-27 10:30:42',
            ),
        ));
        
        
    }
}