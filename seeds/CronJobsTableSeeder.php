<?php

use Illuminate\Database\Seeder;

class CronJobsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cron_jobs')->delete();
        
        \DB::table('cron_jobs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'command' => 'LotterySchedule',
                'param' => '{"lottery_sign":"zx115"}',
                'schedule' => '*/1 * * * *',
                'status' => 1,
                'remarks' => '中兴11选5->自动开奖任务',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 3,
                'command' => 'LotterySchedule',
                'param' => '{"lottery_sign":"zx1fc"}',
                'schedule' => '*/1 * * * *',
                'status' => 1,
                'remarks' => '中兴1分彩->自动开奖任务',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 4,
                'command' => 'DeleteCachePic',
                'param' => NULL,
                'schedule' => '0 3 * * *',
                'status' => 1,
                'remarks' => '每日3点 删除上传成功后缓存过期还没提交的图片',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 5,
                'command' => 'AllocationRechargeFund',
                'param' => NULL,
                'schedule' => '0 0 * * *',
                'status' => 1,
                'remarks' => '每日0点 发放管理员人工充值额度',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 6,
                'command' => 'GenerateIssue',
                'param' => NULL,
                'schedule' => '*/1 * * * *',
                'status' => 1,
                'remarks' => '每日生成奖期任务',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 7,
                'command' => 'UserProfits',
                'param' => NULL,
                'schedule' => '0 1 * * * ',
                'status' => 1,
                'remarks' => '团队盈亏处理脚本',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'command' => 'UserDaysalary',
                'param' => NULL,
                'schedule' => '0 2 * * *',
                'status' => 1,
                'remarks' => '每日2点 统计用户日工资',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'command' => 'SendDaysalary',
                'param' => NULL,
                'schedule' => '0 3 * * *',
                'status' => 1,
                'remarks' => '每日3点 发放用户日工资',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 11,
                'command' => 'UserBonus',
                'param' => NULL,
                'schedule' => '0 4 1,15 * *',
                'status' => 1,
                'remarks' => '每月1、15号4点计算分红',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'command' => 'LotterySchedule',
                'param' => '{"lottery_sign":"zxk3"}',
                'schedule' => '*/1 * * * *',
                'status' => 1,
                'remarks' => '中兴快3->自动开奖任务',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 14,
                'command' => 'LotterySchedule',
                'param' => '{"lottery_sign":"zx3d"}',
                'schedule' => '*/1 * * * *',
                'status' => 1,
                'remarks' => '中兴3D->自动开奖任务',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 17,
                'command' => 'LotterySchedule',
                'param' => '{"lottery_sign":"zxp3p5"}',
                'schedule' => '*/1 * * * *',
                'status' => 1,
                'remarks' => '中兴排列35->自动开奖任务',
                'created_at' => '2019-08-11 20:20:58',
                'updated_at' => '2019-08-11 20:31:11',
            ),
            12 => 
            array (
                'id' => 18,
                'command' => 'LotterySchedule',
                'param' => '{"lottery_sign":"zxssl"}',
                'schedule' => '*/1 * * * *',
                'status' => 1,
                'remarks' => '中兴时时乐->自动开奖任务',
                'created_at' => '2019-08-11 22:28:29',
                'updated_at' => '2019-08-11 22:29:06',
            ),
        ));
        
        
    }
}