<?php

use Illuminate\Database\Seeder;

class FrontendPageBannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_page_banners')->delete();
        
        \DB::table('frontend_page_banners')->insert(array (
            0 => 
            array (
                'id' => 9,
                'title' => '轮播图9网页端',
                'content' => 'contentcontentcontentcontent',
                'pic_path' => '/uploaded_files/aa_1/homepage_banner/81a787bb14f0ab737e0564d5cbf36446.PNG',
                'thumbnail_path' => '/uploaded_files/aa_1/homepage_banner/sm_81a787bb14f0ab737e0564d5cbf36446.PNG',
                'type' => 1,
                'redirect_url' => '/test/test',
                'activity_id' => NULL,
                'status' => 1,
                'start_time' => '2018-05-05 00:00:00',
                'end_time' => '2019-05-05 00:00:00',
                'sort' => 2,
                'created_at' => '2019-08-06 15:36:06',
                'updated_at' => '2019-08-10 15:25:14',
                'flag' => 1,
            ),
            1 => 
            array (
                'id' => 11,
                'title' => '轮播图11手机端',
                'content' => 'contentcontentcontentcontent',
                'pic_path' => '/uploaded_files/aa_1/homepage_banner/370dda0900e14cafccf1520976afdfef.jpg',
                'thumbnail_path' => '/uploaded_files/aa_1/homepage_banner/sm_370dda0900e14cafccf1520976afdfef.jpg',
                'type' => 1,
                'redirect_url' => '/test/test',
                'activity_id' => NULL,
                'status' => 1,
                'start_time' => '2018-05-05 00:00:00',
                'end_time' => '2019-05-05 00:00:00',
                'sort' => 1,
                'created_at' => '2019-08-06 15:42:13',
                'updated_at' => '2019-08-10 15:23:58',
                'flag' => 2,
            ),
            2 => 
            array (
                'id' => 12,
                'title' => '测试',
                'content' => '121313',
                'pic_path' => '/uploaded_files/aa_1/homepage_banner/779fb30599937555ea1e62ebc06fc2b4.jpg',
                'thumbnail_path' => '/uploaded_files/aa_1/homepage_banner/sm_779fb30599937555ea1e62ebc06fc2b4.jpg',
                'type' => 1,
                'redirect_url' => 'www.baidu.com',
                'activity_id' => NULL,
                'status' => 1,
                'start_time' => '2019-08-11 15:23:42',
                'end_time' => '2019-08-30 15:23:45',
                'sort' => 3,
                'created_at' => '2019-08-10 15:23:53',
                'updated_at' => '2019-08-10 15:28:58',
                'flag' => 1,
            ),
        ));
        
        
    }
}