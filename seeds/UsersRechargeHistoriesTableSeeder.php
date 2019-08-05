<?php

use Illuminate\Database\Seeder;

class UsersRechargeHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users_recharge_histories')->delete();
        
        \DB::table('users_recharge_histories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'user_name' => 'harriszhongdai',
                'is_tester' => 0,
                'top_agent' => NULL,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '10.000',
                'company_order_num' => '201905234541624478fd78a4d',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => 257,
                'status' => 12,
                'updated_at' => '2019-05-23 17:45:10',
                'created_at' => '2019-05-23 17:42:21',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'user_name' => 'harriszhongdai',
                'is_tester' => 0,
                'top_agent' => NULL,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '10.000',
                'company_order_num' => '20190525928480329084bf16c',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => 258,
                'status' => 11,
                'updated_at' => '2019-05-25 15:28:44',
                'created_at' => '2019-05-25 15:28:04',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'user_name' => 'harriszhongdai',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '1.000',
                'company_order_num' => '2019060644115278420b36186',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-06-06 17:46:51',
                'created_at' => '2019-06-06 17:46:51',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'user_name' => 'kiki',
                'is_tester' => 0,
                'top_agent' => NULL,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '10000.000',
                'company_order_num' => '2019070195114659779645474',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-01 19:11:51',
                'created_at' => '2019-07-01 19:11:51',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 4,
                'user_name' => 'york34',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '1000.000',
                'company_order_num' => '2019070371519156437795805',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-03 12:12:31',
                'created_at' => '2019-07-03 12:12:31',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 4,
                'user_name' => 'york34',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '10000.000',
                'company_order_num' => '2019070371739985886476133',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-03 12:12:53',
                'created_at' => '2019-07-03 12:12:53',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 4,
                'user_name' => 'york34',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '10000.000',
                'company_order_num' => '2019070583183221992417121',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-05 14:31:58',
                'created_at' => '2019-07-05 14:31:58',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 4,
                'user_name' => 'york34',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '80000.000',
                'company_order_num' => '2019070583399506437658592',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-05 14:32:19',
                'created_at' => '2019-07-05 14:32:19',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 8,
                'user_name' => 'young',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '90000.000',
                'company_order_num' => '2019070897794595024292027',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-08 15:09:39',
                'created_at' => '2019-07-08 15:09:39',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 8,
                'user_name' => 'young',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '90000.000',
                'company_order_num' => '2019070897898041828455279',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-08 15:09:49',
                'created_at' => '2019-07-08 15:09:49',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 8,
                'user_name' => 'young',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '90000.000',
                'company_order_num' => '2019070897991925714058599',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-08 15:09:59',
                'created_at' => '2019-07-08 15:09:59',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 8,
                'user_name' => 'young',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '90000.000',
                'company_order_num' => '2019070898125845943001489',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-08 15:10:12',
                'created_at' => '2019-07-08 15:10:12',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 14,
                'user_name' => 'diana111',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '1000.000',
                'company_order_num' => '2019071537592954624002910',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-15 14:55:59',
                'created_at' => '2019-07-15 14:55:59',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 1,
                'user_name' => 'harriszhongdai',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '10.000',
                'company_order_num' => '2019071551616327323080787',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-15 15:19:21',
                'created_at' => '2019-07-15 15:19:21',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 14,
                'user_name' => 'diana111',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '10.000',
                'company_order_num' => '2019071551916698764336501',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-15 15:19:51',
                'created_at' => '2019-07-15 15:19:51',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 1,
                'user_name' => 'harriszhongdai',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '110.000',
                'company_order_num' => '2019071986783871496792848',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-19 14:44:38',
                'created_at' => '2019-07-19 14:44:38',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 14,
                'user_name' => 'diana111',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '1000.000',
                'company_order_num' => '2019071987359702788968976',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-19 14:45:35',
                'created_at' => '2019-07-19 14:45:35',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 16,
                'user_name' => 'ling1',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '90000.000',
                'company_order_num' => '2019072968042926885896592',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-07-29 21:26:44',
                'created_at' => '2019-07-29 21:26:44',
            ),
        ));
        
        
    }
}