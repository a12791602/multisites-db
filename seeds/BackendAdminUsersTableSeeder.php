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
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjUxMDg5MzEsImV4cCI6MTU2NTE5NTMzMSwibmJmIjoxNTY1MTA4OTMxLCJqdGkiOiJYN29MaWowWFdBYTA1UkpYIiwic3ViIjoxLCJwcnYiOiI4NDE5NzI0ZWE3NGJjNTQzMTkyOTBmMDc0OTU0Y2Q3ZDk4MzBjOTI3In0.mCH2_prFA92wUtDrnPNfzK2Zb0FPrW01n5xhm5hs06k',
                'is_test' => 0,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-03-29 23:50:58',
                'updated_at' => '2019-08-07 00:28:51',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'york',
                'email' => 'york@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.otGn0zTx.OvtmmXQOu2neJEUcsm3li4Zt6pIBe1Tsw.qPSqk9.X6',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjUyNDgzMDksImV4cCI6MTU2NTMzNDcwOSwibmJmIjoxNTY1MjQ4MzA5LCJqdGkiOiJiRDhrYktJcjdEM1p3aGE1Iiwic3ViIjo0LCJwcnYiOiI4NDE5NzI0ZWE3NGJjNTQzMTkyOTBmMDc0OTU0Y2Q3ZDk4MzBjOTI3In0.Dbsh4Jz-Ajz8Py3p-DZ5EOIONLJkIgLAv7i736z1LoI',
                'is_test' => 0,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-04-04 12:49:23',
                'updated_at' => '2019-08-08 15:11:49',
            ),
            2 => 
            array (
                'id' => 23,
                'name' => 'Diana',
                'email' => 'Diana@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ZjWCe4a7dxvFqpKqCA7L7OUIFR3CUZO3x7kWmj4BrrW1cTuUfZ8Am',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjQ1NDE0MjIsImV4cCI6MTU2NDYyNzgyMiwibmJmIjoxNTY0NTQxNDIyLCJqdGkiOiJkaVRjWGJwbGU2T0YzUTdsIiwic3ViIjoyMywicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.yOGhJqdZTg6Nbqj-GonKiY3L6I7xlvxvjyvYk1Y-6mY',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-05-09 18:13:56',
                'updated_at' => '2019-07-31 10:50:22',
            ),
            3 => 
            array (
                'id' => 24,
                'name' => 'Ling',
                'email' => 'Ling@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$HgCC6p.x14GUT.jDMwGb3uTXurmpVeyjHNSbr6WZvNdHMGpItMtfm',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjUyNTY4MTMsImV4cCI6MTU2NTM0MzIxMywibmJmIjoxNTY1MjU2ODEzLCJqdGkiOiIzTTlTV1J3NGQxQXpkQUN1Iiwic3ViIjoyNCwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.3eXgMkuUj_NuYFyE3fMDrPbg6gG0keTlBf6N9vC3tlI',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-05-15 11:09:20',
                'updated_at' => '2019-08-08 17:33:33',
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
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjUwNzEzNjQsImV4cCI6MTU2NTE1Nzc2NCwibmJmIjoxNTY1MDcxMzY0LCJqdGkiOiIwYjJsUjNPM2U2dllzNXhOIiwic3ViIjoyOCwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.9itkbsWcPLLmbQyNxXRq4DxnGAmGlat8AeP37yVJgAM',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-07-08 12:40:21',
                'updated_at' => '2019-08-06 14:02:44',
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
            9 => 
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
            10 => 
            array (
                'id' => 43,
                'name' => 'max1111',
                'email' => 'max@qq.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Rgkfrp0fQRrbuN3PV45RsefmF0s8fXYkUBYt5YHYbdKS4pHeo1qd.',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjUyNTExNTYsImV4cCI6MTU2NTMzNzU1NiwibmJmIjoxNTY1MjUxMTU2LCJqdGkiOiJwZTFEQW41TVVQY2NJVnhGIiwic3ViIjo0MywicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.US3-fg6o-o55s3NBibsiMSlTJt8QcUmB9Bgw0TBPC-U',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-05 11:11:17',
                'updated_at' => '2019-08-08 15:59:16',
            ),
            11 => 
            array (
                'id' => 44,
                'name' => 'jeff',
                'email' => 'jeff8979@outlook.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Fo9Uri/h7HJtTKCkpDvguejx46kTNWKKqCDgnVMR/KnKZWITPLUXO',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjQ5ODcyMTAsImV4cCI6MTU2NTA3MzYxMCwibmJmIjoxNTY0OTg3MjEwLCJqdGkiOiJJQ09PWm5ueTFMV0NxdU5lIiwic3ViIjo0NCwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.IQhHYJGnVDwwmghZu46sum39hd3qZrUI5Rq7DJy-joc',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-05 14:22:47',
                'updated_at' => '2019-08-05 14:40:10',
            ),
        ));
        
        
    }
}