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
                'id' => 4,
                'title' => '001',
                'content' => '001',
                'pic_path' => '/uploaded_files/aa_1/Homepagec_Rotation_chart_aa_1/e68eccb0084f4b38dedd06634e357cb6.jpg',
                'thumbnail_path' => '/uploaded_files/aa_1/Homepagec_Rotation_chart_aa_1/sm_e68eccb0084f4b38dedd06634e357cb6.jpg',
                'type' => 1,
                'redirect_url' => 'index',
                'activity_id' => NULL,
                'status' => 1,
                'start_time' => '2019-06-18 20:10:54',
                'end_time' => '2020-06-18 20:11:03',
                'sort' => 2,
                'created_at' => '2019-06-18 20:11:39',
                'updated_at' => '2019-07-09 15:48:51',
            ),
            1 => 
            array (
                'id' => 5,
                'title' => '002',
                'content' => '002',
                'pic_path' => '/uploaded_files/aa_1/Homepagec_Rotation_chart_aa_1/53306692f453f89705a44f8d13f6ce5c.jpg',
                'thumbnail_path' => '/uploaded_files/aa_1/Homepagec_Rotation_chart_aa_1/sm_53306692f453f89705a44f8d13f6ce5c.jpg',
                'type' => 1,
                'redirect_url' => '002',
                'activity_id' => NULL,
                'status' => 1,
                'start_time' => '2019-06-18 20:12:51',
                'end_time' => '2020-06-18 20:12:56',
                'sort' => 1,
                'created_at' => '2019-06-18 20:13:07',
                'updated_at' => '2019-07-09 15:48:51',
            ),
            2 => 
            array (
                'id' => 6,
                'title' => '003',
                'content' => '003',
                'pic_path' => '/uploaded_files/aa_1/Homepagec_Rotation_chart_aa_1/043a623f99248b350ca6f50853e49481.jpg',
                'thumbnail_path' => '/uploaded_files/aa_1/Homepagec_Rotation_chart_aa_1/sm_043a623f99248b350ca6f50853e49481.jpg',
                'type' => 1,
                'redirect_url' => '003',
                'activity_id' => NULL,
                'status' => 1,
                'start_time' => '2019-06-18 20:13:29',
                'end_time' => '2020-06-18 20:13:32',
                'sort' => 3,
                'created_at' => '2019-06-18 20:13:39',
                'updated_at' => '2019-06-18 20:13:39',
            ),
            3 => 
            array (
                'id' => 7,
                'title' => '004',
                'content' => '004',
                'pic_path' => '/uploaded_files/aa_1/Homepagec_Rotation_chart_aa_1/30f9b9e4bd2ec513a7addc476b2dc930.jpg',
                'thumbnail_path' => '/uploaded_files/aa_1/Homepagec_Rotation_chart_aa_1/sm_30f9b9e4bd2ec513a7addc476b2dc930.jpg',
                'type' => 1,
                'redirect_url' => '004',
                'activity_id' => NULL,
                'status' => 1,
                'start_time' => '2019-06-18 20:13:50',
                'end_time' => '2020-06-18 20:13:53',
                'sort' => 4,
                'created_at' => '2019-06-18 20:13:59',
                'updated_at' => '2019-06-18 20:13:59',
            ),
        ));
        
        
    }
}