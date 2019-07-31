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
                'status' => 0,
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
                'schedule' => '*/5 * * * *',
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
        ));
        
        
    }
}