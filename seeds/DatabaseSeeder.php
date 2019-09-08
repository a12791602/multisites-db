<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActivityBetLogsTableSeeder::class);
        $this->call(BackendAdminAccessGroupsTableSeeder::class);
        $this->call(BackendAdminAuditFlowListsTableSeeder::class);
        $this->call(BackendAdminAuditPasswordsListsTableSeeder::class);
        $this->call(BackendAdminMessageArticlesTableSeeder::class);
        $this->call(BackendAdminRechargePermitGroupsTableSeeder::class);
        $this->call(BackendAdminRechargePocessAmountsTableSeeder::class);
        $this->call(BackendAdminRechargehumanLogsTableSeeder::class);
        $this->call(BackendAdminRoutesTableSeeder::class);
        $this->call(BackendAdminUsersTableSeeder::class);
        $this->call(BackendSystemInternalMessagesTableSeeder::class);
        $this->call(BackendSystemMenusTableSeeder::class);
        $this->call(BackendSystemNoticeListsTableSeeder::class);
        $this->call(CronJobsTableSeeder::class);
        $this->call(FrontendActivityContentsTableSeeder::class);
        $this->call(FrontendAllocatedModelsTableSeeder::class);
        $this->call(FrontendAppRoutesTableSeeder::class);
        $this->call(FrontendInfoCategoriesTableSeeder::class);
        $this->call(FrontendLinksRegisteredUsersTableSeeder::class);
        $this->call(FrontendLotteryFnfBetableListsTableSeeder::class);
        $this->call(FrontendLotteryFnfBetableMethodsTableSeeder::class);
        $this->call(FrontendLotteryNoticeListsTableSeeder::class);
        $this->call(FrontendLotteryRedirectBetListsTableSeeder::class);
        $this->call(FrontendMessageNoticesTableSeeder::class);
        $this->call(FrontendMessageNoticesContentsTableSeeder::class);
        $this->call(FrontendPageBannersTableSeeder::class);
        $this->call(FrontendSystemAdsTypesTableSeeder::class);
        $this->call(FrontendSystemBanksTableSeeder::class);
        $this->call(FrontendUserDividendConfigsTableSeeder::class);
        $this->call(FrontendUserDividendReportsTableSeeder::class);
        $this->call(FrontendUserInvitedRecordsTableSeeder::class);
        $this->call(FrontendUsersTableSeeder::class);
        $this->call(FrontendUsersAccountsTableSeeder::class);
        $this->call(FrontendUsersAccountsReportsTableSeeder::class);
        $this->call(FrontendUsersAccountsTypesTableSeeder::class);
        $this->call(FrontendUsersAccountsTypesParamsTableSeeder::class);
        $this->call(FrontendUsersBankCardsTableSeeder::class);
        $this->call(FrontendUsersHelpCentersTableSeeder::class);
        $this->call(FrontendUsersPrivacyFlowsTableSeeder::class);
        $this->call(FrontendUsersRegisterableLinksTableSeeder::class);
        $this->call(FrontendUsersSpecificInfosTableSeeder::class);
        $this->call(FrontendUsersTransferedRecordsTableSeeder::class);
        $this->call(FrontendWebRoutesTableSeeder::class);
        $this->call(LotteryBasicMethodsTableSeeder::class);
        $this->call(LotteryBasicWaysTableSeeder::class);
        $this->call(LotteryIssueRulesTableSeeder::class);
        $this->call(LotteryListsTableSeeder::class);
        $this->call(LotteryMethodsTableSeeder::class);
        $this->call(LotteryMethodsLayoutDisplaysTableSeeder::class);
        $this->call(LotteryMethodsLayoutsTableSeeder::class);
        $this->call(LotteryMethodsNumberButtonRulesTableSeeder::class);
        $this->call(LotteryMethodsStandardsTableSeeder::class);
        $this->call(LotteryMethodsValidationsTableSeeder::class);
    }
}