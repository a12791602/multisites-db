<?php

use Illuminate\Database\Seeder;

class FrontendAppRoutesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frontend_app_routes')->delete();
        
        \DB::table('frontend_app_routes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'route_name' => 'mobile-api.login',
                'controller' => 'App\\Http\\Controllers\\MobileApi\\MobileAuthController',
                'method' => 'login',
                'frontend_model_id' => NULL,
                'title' => NULL,
                'description' => NULL,
                'is_open' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}