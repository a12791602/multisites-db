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
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbC5tdWx0aXNpdGVzLmNvbVwvYXBpXC9sb2dpbiIsImlhdCI6MTU2NTc2NDUwMCwiZXhwIjoxNTY1ODUwOTAwLCJuYmYiOjE1NjU3NjQ1MDAsImp0aSI6IjgwdlBpaUx1cTNKbTBYb2QiLCJzdWIiOjEsInBydiI6Ijg0MTk3MjRlYTc0YmM1NDMxOTI5MGYwNzQ5NTRjZDdkOTgzMGM5MjcifQ.UYCj8ZPaOWIxKs7mR0lcbAq15UQi6SeHYOZtsI03tnc',
                'is_test' => 0,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-03-29 23:50:58',
                'updated_at' => '2019-08-14 14:35:00',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'york',
                'email' => 'york@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.otGn0zTx.OvtmmXQOu2neJEUcsm3li4Zt6pIBe1Tsw.qPSqk9.X6',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjU3MDY4MDUsImV4cCI6MTU2NTc5MzIwNSwibmJmIjoxNTY1NzA2ODA1LCJqdGkiOiJwbXF2TENCclVDcjA0TWN3Iiwic3ViIjo0LCJwcnYiOiI4NDE5NzI0ZWE3NGJjNTQzMTkyOTBmMDc0OTU0Y2Q3ZDk4MzBjOTI3In0.uxYalYm3gu5jHBZTyolU97G_CX8ybFOFSHN4tINKLu4',
                'is_test' => 0,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-04-04 12:49:23',
                'updated_at' => '2019-08-13 22:33:25',
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
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjU2MTIwOTAsImV4cCI6MTU2NTY5ODQ5MCwibmJmIjoxNTY1NjEyMDkwLCJqdGkiOiJsQmZ6NWlJaEw4eVhWaHFYIiwic3ViIjoyNCwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.h_B4JOofbo5je0uJ65pr9qYdUz5nlVtGwyoavdwQ12Y',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-05-15 11:09:20',
                'updated_at' => '2019-08-12 20:14:50',
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
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjU2ODU0MDQsImV4cCI6MTU2NTc3MTgwNCwibmJmIjoxNTY1Njg1NDA0LCJqdGkiOiJBMExUWG5LOGt0Q0swZDdwIiwic3ViIjoyOSwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.dverI9Tnq_uOqlmkhTcSa4b1NrHBeA5aoZ-9spuc7bU',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-07-08 12:41:02',
                'updated_at' => '2019-08-13 16:36:44',
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
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjU2NzczNzMsImV4cCI6MTU2NTc2Mzc3MywibmJmIjoxNTY1Njc3MzczLCJqdGkiOiJTdDBOSWQwU0tJbjBPN2loIiwic3ViIjo0MywicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.lUNhCKv9EiIkU_XzSyWwSHNaDTPZG0-4mda-P-uCzQA',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-05 11:11:17',
                'updated_at' => '2019-08-13 14:22:53',
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
            12 => 
            array (
                'id' => 45,
                'name' => 'three',
                'email' => 'jiangsan6688@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Pw7oGWPtGWrUdvz7f/N01e19S.XIbS0JaosGaWbc/HmRN2/tu./um',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjU1OTMzNDYsImV4cCI6MTU2NTY3OTc0NiwibmJmIjoxNTY1NTkzMzQ2LCJqdGkiOiJwNEJVTUp6TFRMU1g4azNEIiwic3ViIjo0NSwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9._fN4AqjQrEnIJNX_5AjLu1QWLtKoW95dONd2t4azUTU',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-10 11:31:36',
                'updated_at' => '2019-08-12 15:02:26',
            ),
        ));
        
        
    }
}