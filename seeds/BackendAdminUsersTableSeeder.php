<?php

use Illuminate\Database\Seeder;

class BackendAdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('backend_admin_users')->delete();
        
        \DB::table('backend_admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Harris',
                'email' => 'harrisdt15f@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Bz7/W8LEMgHnOkAtULbpbOjpjESkTihGyGJLJUsPGYquBJCP8bQfm',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjQ0NzEzMDAsImV4cCI6MTU2NDU1NzcwMCwibmJmIjoxNTY0NDcxMzAwLCJqdGkiOiJmQ1l4b2FiMExVUUxtSDFtIiwic3ViIjoxLCJwcnYiOiI4NDE5NzI0ZWE3NGJjNTQzMTkyOTBmMDc0OTU0Y2Q3ZDk4MzBjOTI3In0.lXH9uUfEnLxxJCxQIP6j6A283NAxYJiistDTGNGszVM',
                'is_test' => 0,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-03-29 23:50:58',
                'updated_at' => '2019-07-30 15:21:40',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'york',
                'email' => 'york@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.otGn0zTx.OvtmmXQOu2neJEUcsm3li4Zt6pIBe1Tsw.qPSqk9.X6',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjQ0Nzk0MTMsImV4cCI6MTU2NDU2NTgxMywibmJmIjoxNTY0NDc5NDEzLCJqdGkiOiJwZHhtU0xSWklYajRueFJuIiwic3ViIjo0LCJwcnYiOiI4NDE5NzI0ZWE3NGJjNTQzMTkyOTBmMDc0OTU0Y2Q3ZDk4MzBjOTI3In0.cKccu32WTtWF_O179l8XMFmbg6nDtZdGjkTTMKg-h20',
                'is_test' => 0,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-04-04 12:49:23',
                'updated_at' => '2019-07-30 17:36:53',
            ),
            2 => 
            array (
                'id' => 23,
                'name' => 'Diana',
                'email' => 'Diana@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZjWCe4a7dxvFqpKqCA7L7OUIFR3CUZO3x7kWmj4BrrW1cTuUfZ8Am',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjQ0NTM3MjMsImV4cCI6MTU2NDU0MDEyMywibmJmIjoxNTY0NDUzNzIzLCJqdGkiOiIzMllaOG4yb3gwRENIOWJMIiwic3ViIjoyMywicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.K4rKBbhQ7z87cqZ486Rsn3WTwu_jdQKe5XSlUb5IZYY',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-05-09 18:13:56',
                'updated_at' => '2019-07-30 10:28:43',
            ),
            3 => 
            array (
                'id' => 24,
                'name' => 'Ling',
                'email' => 'Ling@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HgCC6p.x14GUT.jDMwGb3uTXurmpVeyjHNSbr6WZvNdHMGpItMtfm',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjQ0OTYxMTEsImV4cCI6MTU2NDU4MjUxMSwibmJmIjoxNTY0NDk2MTExLCJqdGkiOiJPNzRjUkRXc01LWTlIY3kyIiwic3ViIjoyNCwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.IzzwRIk9JX2eh3RxbkU6HLReNGuWa2ifzSyUwrkK6t4',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-05-15 11:09:20',
                'updated_at' => '2019-07-30 22:15:11',
            ),
            4 => 
            array (
                'id' => 25,
                'name' => 'york222',
                'email' => 'yo@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4mTWO.IeazdAQMbxN8isqOO.xjxiUXXp9McHq1/L1n0tcNdyvooCu',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbC5tdWx0aXNpdGVzLmNvbVwvYXBpXC9sb2dpbiIsImlhdCI6MTU1ODc2OTIwOSwiZXhwIjoxNTU4ODU1NjA5LCJuYmYiOjE1NTg3NjkyMDksImp0aSI6ImUzUXZ5WFJGSG9uQUlmaVQiLCJzdWIiOjI1LCJwcnYiOiI1YTBkNjE2MmIwNmE5ZTJjNzM0NDdkNDZlZjQxMTM0OTEwMDA3NWZlIn0.H-jOwpWlyYW0mBMpY79Pu5KQzFoFrIWi34UGMEBBRXw',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-05-23 15:26:52',
                'updated_at' => '2019-07-25 15:04:03',
            ),
            5 => 
            array (
                'id' => 27,
                'name' => 'sami',
                'email' => 'sami@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$mBqt1/x1JyC0ol6fF14PN.F4YrgiCj36rQVwv5tqoAAV2UFcUflF.',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjM4ODg0NTIsImV4cCI6MTU2Mzk3NDg1MiwibmJmIjoxNTYzODg4NDUyLCJqdGkiOiJRWXZCSnJFMmhRNG1EOWVzIiwic3ViIjoyNywicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.wwa8iyNX_XiCJReO7u02IhAbiYuAl917BLwdTku6ch4',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-06-17 18:10:17',
                'updated_at' => '2019-07-23 21:27:32',
            ),
            6 => 
            array (
                'id' => 28,
                'name' => 'kitty',
                'email' => 'kitty@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$WdYlF.BY7b.1eU0e2cZS0.gab3424UA9C6UcnH53x95PZO0kQrXlG',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjI4MjczOTAsImV4cCI6MTU2MjkxMzc5MCwibmJmIjoxNTYyODI3MzkwLCJqdGkiOiJmeGtHOG0xWlF3SXVBTkRPIiwic3ViIjoyOCwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.VrtCO0L0PoIVOqHHaBrxZDBkxu3PTA79SE1eP0iBdio',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-07-08 12:40:21',
                'updated_at' => '2019-07-11 14:43:10',
            ),
            7 => 
            array (
                'id' => 29,
                'name' => 'young',
                'email' => 'young@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IrK9/Fia2xbmYuCia45ca.HN7FW3jtmUIBcTZCghWhm5WNmqP3C96',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjI4MjYyNDcsImV4cCI6MTU2MjkxMjY0NywibmJmIjoxNTYyODI2MjQ3LCJqdGkiOiJwakRaa1o2dFIxVDhxdnd1Iiwic3ViIjoyOSwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.T1CiXmQXjNJn0LZG5WS64nBK7IcY1V4rrQlWu1VJWCI',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-07-08 12:41:02',
                'updated_at' => '2019-07-11 14:24:07',
            ),
            8 => 
            array (
                'id' => 30,
                'name' => 'max',
                'email' => 'max@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$fByAEQBwyOTHLAh67FLuq.dx8MktkuO3LMWvMMyF89ADVa8GNH4nK',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjM0MjE0MzQsImV4cCI6MTU2MzUwNzgzNCwibmJmIjoxNTYzNDIxNDM0LCJqdGkiOiJvU3pRT3VobVFRVXhkNTZ4Iiwic3ViIjozMCwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.p3yAltsFK-XdcusN6yl1Unwbo_EzNjlkbVWgk036uu8',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-07-11 17:13:00',
                'updated_at' => '2019-07-18 11:43:54',
            ),
            9 => 
            array (
                'id' => 35,
                'name' => 'tom',
                'email' => 'tom@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$1QUtVnjqTnWC2T/up4HffujRCU3o7E.sYC1tSLKWIr4Mk/URwxYGW',
                'remember_token' => NULL,
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-07-11 20:50:48',
                'updated_at' => '2019-07-11 20:50:48',
            ),
            10 => 
            array (
                'id' => 42,
                'name' => 'diana111',
                'email' => 'Diana111@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$N.EBa7uS31HeAzI1UpBIG.l/wPCzokWUAKrU/3Iea1AMON2.3UqDm',
                'remember_token' => NULL,
                'is_test' => 1,
                'group_id' => 2,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-07-25 15:04:42',
                'updated_at' => '2019-07-25 15:06:28',
            ),
        ));
        
        
    }
}