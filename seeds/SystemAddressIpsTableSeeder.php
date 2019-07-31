<?php

use Illuminate\Database\Seeder;

class SystemAddressIpsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('system_address_ips')->delete();
        
        \DB::table('system_address_ips')->insert(array (
            0 => 
            array (
                'id' => 1,
                'ip' => '116.50.231.34',
                'country' => '菲律宾',
                'region' => '黎刹省',
                'city' => NULL,
                'county' => NULL,
                'created_at' => '2019-07-04 13:35:17',
                'updated_at' => '2019-07-04 13:35:17',
            ),
            1 => 
            array (
                'id' => 2,
                'ip' => '103.42.94.10',
                'country' => '菲律宾',
                'region' => '马尼拉',
                'city' => '马尼拉',
                'county' => NULL,
                'created_at' => '2019-07-05 14:56:39',
                'updated_at' => '2019-07-05 14:56:39',
            ),
            2 => 
            array (
                'id' => 3,
                'ip' => '134.159.206.116',
                'country' => '中国',
                'region' => '香港',
                'city' => NULL,
                'county' => NULL,
                'created_at' => '2019-07-08 21:03:17',
                'updated_at' => '2019-07-08 21:03:17',
            ),
        ));
        
        
    }
}