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
                'title' => '12',
                'content' => '1',
                'pic_path' => '/uploaded_files/aa_1/homepage_banner_aa_1/dd6850b32e2d04c30c00dbec27f20a6b.jpg',
                'thumbnail_path' => '/uploaded_files/aa_1/homepage_banner_aa_1/sm_dd6850b32e2d04c30c00dbec27f20a6b.jpg',
                'type' => 1,
                'redirect_url' => '1',
                'activity_id' => NULL,
                'status' => 1,
                'start_time' => '2019-08-31 15:36:00',
                'end_time' => '2019-08-31 15:36:02',
                'sort' => 1,
                'created_at' => '2019-08-06 15:36:06',
                'updated_at' => '2019-08-06 15:41:39',
                'flag' => 1,
            ),
            1 => 
            array (
                'id' => 11,
                'title' => '2',
                'content' => '2',
                'pic_path' => '/uploaded_files/aa_1/homepage_banner_aa_1/5ad17581e53b7a83fd6a8bb922afda74.jpg',
                'thumbnail_path' => '/uploaded_files/aa_1/homepage_banner_aa_1/sm_5ad17581e53b7a83fd6a8bb922afda74.jpg',
                'type' => 1,
                'redirect_url' => '2',
                'activity_id' => NULL,
                'status' => 1,
                'start_time' => '2019-08-22 15:42:07',
                'end_time' => '2019-08-24 15:42:09',
                'sort' => 2,
                'created_at' => '2019-08-06 15:42:13',
                'updated_at' => '2019-08-06 21:13:34',
                'flag' => 2,
            ),
        ));
        
        
    }
}