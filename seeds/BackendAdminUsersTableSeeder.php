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
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1Njc0MjYxMTIsImV4cCI6MTU2NzUxMjUxMiwibmJmIjoxNTY3NDI2MTEyLCJqdGkiOiJzOGRvanJBRmtrUTJLRnJUIiwic3ViIjoxLCJwcnYiOiI4NDE5NzI0ZWE3NGJjNTQzMTkyOTBmMDc0OTU0Y2Q3ZDk4MzBjOTI3In0.WmowC3iACsS2tocdVmr1RRdv4DlymmTg7SEcXo4QlOU',
                'is_test' => 0,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-03-29 23:50:58',
                'updated_at' => '2019-09-02 20:08:32',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'york',
                'email' => 'york@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$.otGn0zTx.OvtmmXQOu2neJEUcsm3li4Zt6pIBe1Tsw.qPSqk9.X6',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjcxNzg1MTksImV4cCI6MTU2NzI2NDkxOSwibmJmIjoxNTY3MTc4NTE5LCJqdGkiOiI3S1pKN3VXSVdBeG51NzlKIiwic3ViIjo0LCJwcnYiOiI4NDE5NzI0ZWE3NGJjNTQzMTkyOTBmMDc0OTU0Y2Q3ZDk4MzBjOTI3In0.LPetuEadDjKHw7R3830mrYXIobdWJSrotBRCQVNrLlI',
                'is_test' => 0,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-04-04 12:49:23',
                'updated_at' => '2019-08-30 23:21:59',
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
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbC5tdWx0aXNpdGVzLmNvbVwvYXBpXC9sb2dpbiIsImlhdCI6MTU2NzY4ODM0OSwiZXhwIjoxNTY3Nzc0NzQ5LCJuYmYiOjE1Njc2ODgzNDksImp0aSI6ImE1dk9JSGUxOUdqNnNpUVciLCJzdWIiOjI0LCJwcnYiOiI4NDE5NzI0ZWE3NGJjNTQzMTkyOTBmMDc0OTU0Y2Q3ZDk4MzBjOTI3In0.-aMfpATaWaKXqefmNmgjT3TaVlkevDGXIlPubZq-WeQ',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-05-15 11:09:20',
                'updated_at' => '2019-09-05 20:59:09',
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
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1Njc0MjA2OTgsImV4cCI6MTU2NzUwNzA5OCwibmJmIjoxNTY3NDIwNjk4LCJqdGkiOiJwUXcxdHVkb1Rkd0t3VjlKIiwic3ViIjoyOCwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.avzUMFH2dSa8AmPtGcMcUh2FwMwIRoT2xFSTflEilwg',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-07-08 12:40:21',
                'updated_at' => '2019-09-02 18:38:18',
            ),
            7 => 
            array (
                'id' => 29,
                'name' => 'young',
                'email' => 'young@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$IrK9/Fia2xbmYuCia45ca.HN7FW3jtmUIBcTZCghWhm5WNmqP3C96',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjcxMzQ4MDAsImV4cCI6MTU2NzIyMTIwMCwibmJmIjoxNTY3MTM0ODAwLCJqdGkiOiJvaG5adUZwbElKMnlyeU95Iiwic3ViIjoyOSwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.34oPy7uhDIcaXVdTOoOsLkae22PtjamWbKBOGgniuPs',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-07-08 12:41:02',
                'updated_at' => '2019-08-30 11:13:20',
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
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1Njc0MTM0NjMsImV4cCI6MTU2NzQ5OTg2MywibmJmIjoxNTY3NDEzNDYzLCJqdGkiOiJKQVhBbVRGa3g1bWtJd3VjIiwic3ViIjo0MywicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.2oicMtY17xtR-__ytuNi3dVuiFWvROiLaftbkTJMMzM',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-05 11:11:17',
                'updated_at' => '2019-09-02 16:37:43',
            ),
            11 => 
            array (
                'id' => 44,
                'name' => 'jeff',
                'email' => 'jeff8979@outlook.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Fo9Uri/h7HJtTKCkpDvguejx46kTNWKKqCDgnVMR/KnKZWITPLUXO',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjcyMzU5NjAsImV4cCI6MTU2NzMyMjM2MCwibmJmIjoxNTY3MjM1OTYwLCJqdGkiOiJuZ21QQ2NRNFBMQzc1MGZOIiwic3ViIjo0NCwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.SUM1qZ-kbcaAZz1XpzhM2v_piE2H0JDXSpiU5CJ-Uuk',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-05 14:22:47',
                'updated_at' => '2019-08-31 15:19:20',
            ),
            12 => 
            array (
                'id' => 45,
                'name' => 'three',
                'email' => 'jiangsan6688@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Pw7oGWPtGWrUdvz7f/N01e19S.XIbS0JaosGaWbc/HmRN2/tu./um',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjU4NTA5OTksImV4cCI6MTU2NTkzNzM5OSwibmJmIjoxNTY1ODUwOTk5LCJqdGkiOiJUeUdzbWtGQlJZUGRtWXNQIiwic3ViIjo0NSwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.LHEDhPhWQWWgi5WfRy_KXtcQyORTjB2WtUJDtH1SgA8',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-10 11:31:36',
                'updated_at' => '2019-08-15 14:36:39',
            ),
            13 => 
            array (
                'id' => 46,
                'name' => 'ling2',
                'email' => 'ling2@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$aeA6/ZmtAv0fcSGlBPnfYep5ajKxXpuk5rLeASIwIfM.gmk7mMV2.',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjU4NDk1ODMsImV4cCI6MTU2NTkzNTk4MywibmJmIjoxNTY1ODQ5NTgzLCJqdGkiOiI0cDZSWWJOOEp3WkowV2xPIiwic3ViIjo0NiwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.fUlPf_Mi293ESr53DBGXiat1hLN03d4aXM-WQ61OH4Q',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-15 14:12:43',
                'updated_at' => '2019-08-15 14:13:03',
            ),
            14 => 
            array (
                'id' => 47,
                'name' => 'Ida',
                'email' => 'Ida@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bt4ULjz2P/S0OluIjRqA3OfYdlnI63mjGQn50O8ZheGp17NjJs20S',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjYyNzA1MTksImV4cCI6MTU2NjM1NjkxOSwibmJmIjoxNTY2MjcwNTE5LCJqdGkiOiJkZjl4QkI2TTdVQmpXYndUIiwic3ViIjo0NywicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.jbS42CJ--alkrPQOEfzgEAKaTbTMi_vf48lI4NSxXCE',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-15 14:23:34',
                'updated_at' => '2019-08-20 11:08:39',
            ),
            15 => 
            array (
                'id' => 48,
                'name' => 'david',
                'email' => 'david@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$ppYm0iYOb9bgQyDk/nsVt.GYtuwMazYEZfaMsGOhQGBIUVVVRQeJ6',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjYyNjkwNTAsImV4cCI6MTU2NjM1NTQ1MCwibmJmIjoxNTY2MjY5MDUwLCJqdGkiOiJVOWwzR2pOdzFTTEFqNTFhIiwic3ViIjo0OCwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.lObA7FlSVrSuuEbBFMxivXVG4gEDw1pyFW9iL6fZ91k',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-15 14:23:46',
                'updated_at' => '2019-08-20 10:44:10',
            ),
            16 => 
            array (
                'id' => 49,
                'name' => 'jen',
                'email' => 'jen@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$j/bPDmBrO/iY2rTO7rcXu.Q6eRZAdzAt2VmSWuOoZPhwZ8IlU2F0m',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjYyNzc0OTcsImV4cCI6MTU2NjM2Mzg5NywibmJmIjoxNTY2Mjc3NDk3LCJqdGkiOiJvenFJb3J1Qm1zRkgxY1pUIiwic3ViIjo0OSwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.q27ur_GSNQwwAcpm0_jevfz-QOUQg_ugLA_EmtLLrqo',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-15 14:49:39',
                'updated_at' => '2019-08-20 13:04:57',
            ),
            17 => 
            array (
                'id' => 50,
                'name' => 'alan',
                'email' => 'alan@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$t960OHf7BLvkP.LmWYnpAuj3b8i4YUwVoo.Y22oQn6u5Oe4dMLQ1e',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjU4NzY1NjEsImV4cCI6MTU2NTk2Mjk2MSwibmJmIjoxNTY1ODc2NTYxLCJqdGkiOiIxSGdGeVJPWXJlMm1WNXJmIiwic3ViIjo1MCwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.U8nTVYze9Hy6LWefjwvctWkneZQhKYymvRUikmlYX4E',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-15 14:49:52',
                'updated_at' => '2019-08-15 21:42:41',
            ),
            18 => 
            array (
                'id' => 51,
                'name' => 'samuel',
                'email' => 'samuel@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$F6IabsdlfuvadbMO9ZqxFurpGjqZUR.VxfJBuAuHJ0538NSnDXQre',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjYwNjE4OTYsImV4cCI6MTU2NjE0ODI5NiwibmJmIjoxNTY2MDYxODk2LCJqdGkiOiJFS08yaFM5WXVTaDBqSE41Iiwic3ViIjo1MSwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.cVi9tam155cIYs4GGWqkdyBIj8o8tVd5JFZhzNPpKGw',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-15 14:50:03',
                'updated_at' => '2019-08-18 01:11:36',
            ),
            19 => 
            array (
                'id' => 52,
                'name' => 'jaxton',
                'email' => 'jaxton@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$qHK67HiOQO8Vo9yCHYS3NeUuQQRJRNRDw7zr7b1yWsaXX7tDfz6tW',
                'remember_token' => NULL,
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-15 14:50:20',
                'updated_at' => '2019-08-15 14:50:20',
            ),
            20 => 
            array (
                'id' => 53,
                'name' => 'demi',
                'email' => 'demi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/uWb2h6QE1B0lMXmd8tDAuVwyE2QdBIQqmMz.kiIzZKA4X2Y1wXnu',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjYwNjE4NDksImV4cCI6MTU2NjE0ODI0OSwibmJmIjoxNTY2MDYxODQ5LCJqdGkiOiJCOGJkNjJRZ1dHTDFObWFFIiwic3ViIjo1MywicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.Ndcp5NV4VEg3-zh0z_n5X-CN-WailjNKeT6_KNkb-Ds',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-15 14:50:37',
                'updated_at' => '2019-08-18 01:10:49',
            ),
            21 => 
            array (
                'id' => 54,
                'name' => 'tom88',
                'email' => 'tom88@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$JH.8ePTJeQ/Gt5xUqTjPDuMZ/yarV7Fx7tvjLjI9NrKeDIq0OIMdy',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1NjU4NjA5NzYsImV4cCI6MTU2NTk0NzM3NiwibmJmIjoxNTY1ODYwOTc2LCJqdGkiOiJBUGlGS0g5VG95NXJ6cFpYIiwic3ViIjo1NCwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.D4uG3HftYTwKKEepaTzmhKqycl2dHBorxF3VDkIoo50',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-15 17:20:01',
                'updated_at' => '2019-08-15 17:22:56',
            ),
            22 => 
            array (
                'id' => 55,
                'name' => 'bayern',
                'email' => '226361470@qq.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$t/6ECkLyQzfRDFgoEuvTCeDKmZiaLCScNLdbJ2AgNafw1jPkJEFBq',
                'remember_token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9hcGkuOTE3MHR0dC5jb21cL2FwaVwvbG9naW4iLCJpYXQiOjE1Njc0MDg5ODcsImV4cCI6MTU2NzQ5NTM4NywibmJmIjoxNTY3NDA4OTg3LCJqdGkiOiI0SVRqZHhnaXpTbnFhYXJtIiwic3ViIjo1NSwicHJ2IjoiODQxOTcyNGVhNzRiYzU0MzE5MjkwZjA3NDk1NGNkN2Q5ODMwYzkyNyJ9.692Vjg4N_dpgvPqKpCtKYAsmYaMcifIwGSkAzfMTM50',
                'is_test' => 1,
                'group_id' => 1,
                'status' => 1,
                'platform_id' => 1,
                'super_id' => NULL,
                'created_at' => '2019-08-31 10:28:38',
                'updated_at' => '2019-09-02 15:23:07',
            ),
        ));
        
        
    }
}