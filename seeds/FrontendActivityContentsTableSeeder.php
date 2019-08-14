<?php

use Illuminate\Database\Seeder;

class FrontendActivityContentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_activity_contents')->delete();
        
        \DB::table('frontend_activity_contents')->insert(array (
            0 => 
            array (
                'id' => 9,
                'title' => '1',
                'content' => '1',
                'pic_path' => '/uploaded_files/aa_1/mobile_activity_aa_1/e292babac90afa5ea009c0b96c3c2c51.png',
                'preview_pic_path' => '/uploaded_files/aa_1/mobile_activity_aa_1/215399d1db0a232435b314ad16a784ea.jpg',
                'start_time' => NULL,
                'end_time' => NULL,
                'status' => 0,
                'admin_id' => 4,
                'admin_name' => 'york',
                'is_redirect' => 0,
                'redirect_url' => '11111',
                'is_time_interval' => 0,
                'sort' => 1,
                'created_at' => '2019-08-06 16:43:42',
                'updated_at' => '2019-08-06 16:52:37',
                'type' => 1,
            ),
            1 => 
            array (
                'id' => 10,
                'title' => '2',
                'content' => '2',
                'pic_path' => '/uploaded_files/aa_1/mobile_activity_aa_1/ff2ab04e8a0e1ef2c3940e8e573d0296.jpg',
                'preview_pic_path' => '/uploaded_files/aa_1/mobile_activity_aa_1/ff2ab04e8a0e1ef2c3940e8e573d0296.jpg',
                'start_time' => NULL,
                'end_time' => NULL,
                'status' => 0,
                'admin_id' => 4,
                'admin_name' => 'york',
                'is_redirect' => 1,
                'redirect_url' => 'undefined',
                'is_time_interval' => 0,
                'sort' => 2,
                'created_at' => '2019-08-06 16:45:52',
                'updated_at' => '2019-08-06 16:45:52',
                'type' => 1,
            ),
            2 => 
            array (
                'id' => 11,
                'title' => '3',
                'content' => '3',
                'pic_path' => '/uploaded_files/aa_1/mobile_activity_aa_1/caaff7a5a78c295acf9d4bbf428fce2e.png',
                'preview_pic_path' => '/uploaded_files/aa_1/mobile_activity_aa_1/148e524f107b9f3160429d66c4457d28.jpg',
                'start_time' => '2019-08-28 16:46:56',
                'end_time' => '2019-08-31 16:46:59',
                'status' => 1,
                'admin_id' => 4,
                'admin_name' => 'york',
                'is_redirect' => 0,
                'redirect_url' => 'undefined',
                'is_time_interval' => 1,
                'sort' => 3,
                'created_at' => '2019-08-06 16:47:08',
                'updated_at' => '2019-08-06 16:47:08',
                'type' => 1,
            ),
            3 => 
            array (
                'id' => 12,
                'title' => '4',
                'content' => '4',
                'pic_path' => '/uploaded_files/aa_1/mobile_activity_aa_1/20bc38e87c1615c1df3785494775cbba.png',
                'preview_pic_path' => '/uploaded_files/aa_1/mobile_activity_aa_1/b2c3095bee3120c3a95c8d540b010cff.jpg',
                'start_time' => '2019-08-22 16:50:25',
                'end_time' => '2019-08-31 16:50:27',
                'status' => 1,
                'admin_id' => 4,
                'admin_name' => 'york',
                'is_redirect' => 0,
                'redirect_url' => '2222222',
                'is_time_interval' => 1,
                'sort' => 4,
                'created_at' => '2019-08-06 16:50:32',
                'updated_at' => '2019-08-06 16:50:32',
                'type' => 1,
            ),
            4 => 
            array (
                'id' => 14,
                'title' => '6',
                'content' => '6',
                'pic_path' => '/uploaded_files/aa_1/mobile_activity_aa_1/3aaafe7423d84a6c69943c31518e94a9.jpg',
                'preview_pic_path' => '/uploaded_files/aa_1/mobile_activity_aa_1/ed0e87a217f1ba4059dcafc0bc01b947.png',
                'start_time' => NULL,
                'end_time' => NULL,
                'status' => 1,
                'admin_id' => 4,
                'admin_name' => 'york',
                'is_redirect' => 1,
                'redirect_url' => '12346666',
                'is_time_interval' => 0,
                'sort' => 5,
                'created_at' => '2019-08-06 16:59:00',
                'updated_at' => '2019-08-06 17:03:36',
                'type' => 1,
            ),
            5 => 
            array (
                'id' => 15,
                'title' => '11',
                'content' => '11',
                'pic_path' => '/uploaded_files/aa_1/mobile_activity_aa_1/9769c860805c026c759ca87c98c0547a.png',
                'preview_pic_path' => '/uploaded_files/aa_1/mobile_activity_aa_1/af8d63364a6522f47191e11e00a46edb.jpg',
                'start_time' => NULL,
                'end_time' => NULL,
                'status' => 0,
                'admin_id' => 4,
                'admin_name' => 'york',
                'is_redirect' => 0,
                'redirect_url' => 'undefined',
                'is_time_interval' => 0,
                'sort' => 6,
                'created_at' => '2019-08-06 17:03:20',
                'updated_at' => '2019-08-06 17:03:36',
                'type' => 2,
            ),
        ));
        
        
    }
}