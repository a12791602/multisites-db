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
            18 => 
            array (
                'id' => 19,
                'user_id' => 3,
                'user_name' => 'kiki',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '100.000',
                'company_order_num' => '2019080747087984906435605',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-07 15:58:28',
                'created_at' => '2019-08-07 15:58:28',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 21,
                'user_name' => 'jeff',
                'is_tester' => 1,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '5000.000',
                'company_order_num' => '2019080776003934544350821',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-07 16:46:40',
                'created_at' => '2019-08-07 16:46:40',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 3,
                'user_name' => 'kiki',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '100.000',
                'company_order_num' => '2019080783803793127673844',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-07 16:59:40',
                'created_at' => '2019-08-07 16:59:40',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 21,
                'user_name' => 'jeff',
                'is_tester' => 1,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '5000.000',
                'company_order_num' => '2019080785272292053355849',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-07 17:02:07',
                'created_at' => '2019-08-07 17:02:07',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 21,
                'user_name' => 'jeff',
                'is_tester' => 1,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '3000.000',
                'company_order_num' => '2019080785665777323248979',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-07 17:02:46',
                'created_at' => '2019-08-07 17:02:46',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 21,
                'user_name' => 'jeff',
                'is_tester' => 1,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '222.000',
                'company_order_num' => '2019080786086321066274269',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-07 17:03:28',
                'created_at' => '2019-08-07 17:03:28',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 21,
                'user_name' => 'jeff',
                'is_tester' => 1,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '2000.000',
                'company_order_num' => '2019080786395519322884662',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-07 17:03:59',
                'created_at' => '2019-08-07 17:03:59',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 21,
                'user_name' => 'jeff',
                'is_tester' => 1,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '20.000',
                'company_order_num' => '2019080787192600068828507',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-07 17:05:19',
                'created_at' => '2019-08-07 17:05:19',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 3,
                'user_name' => 'kiki',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '100.000',
                'company_order_num' => '2019080722653861141142008',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-07 18:04:25',
                'created_at' => '2019-08-07 18:04:25',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 3,
                'user_name' => 'kiki',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '100.000',
                'company_order_num' => '2019080849932701672199609',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-08 14:16:33',
                'created_at' => '2019-08-08 14:16:33',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 3,
                'user_name' => 'kiki',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '100.000',
                'company_order_num' => '2019080850335194814598606',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-08 14:17:13',
                'created_at' => '2019-08-08 14:17:13',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 1,
                'user_name' => 'harriszhongdai',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '100.000',
                'company_order_num' => '2019080850981587215691842',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-08 14:18:18',
                'created_at' => '2019-08-08 14:18:18',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 1,
                'user_name' => 'harriszhongdai',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '100.000',
                'company_order_num' => '2019080851256021779942090',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-08 14:18:45',
                'created_at' => '2019-08-08 14:18:45',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 1,
                'user_name' => 'harriszhongdai',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '100.000',
                'company_order_num' => '2019080851406147861351414',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-08 14:19:00',
                'created_at' => '2019-08-08 14:19:00',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 1,
                'user_name' => 'harriszhongdai',
                'is_tester' => 0,
                'top_agent' => 0,
                'channel' => NULL,
                'payment_id' => NULL,
                'amount' => '100.000',
                'company_order_num' => '2019080852066237696564723',
                'third_party_order_num' => NULL,
                'deposit_mode' => 1,
                'real_amount' => NULL,
                'fee' => NULL,
                'audit_flow_id' => NULL,
                'status' => 11,
                'updated_at' => '2019-08-08 14:20:06',
                'created_at' => '2019-08-08 14:20:06',
            ),
        ));
        
        
    }
}