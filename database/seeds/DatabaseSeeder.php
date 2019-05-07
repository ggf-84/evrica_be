<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // LANGUAGE SHOULD BE FIRST
        $this->call(LanguageTableSeeder::class);

        // DO NOT CHANGE I18n ORDER
        $this->call(CountryTableSeeder::class);
        $this->call(Countryi18nTableSeeder::class);
        //state
        $this->call(StateTableSeeder::class);
        $this->call(StateI18nTableSeeder::class);
        //measure unit
        $this->call(MeasureUnitTableSeeder::class);
        $this->call(MeasureUnitI18nTableSeeder::class);

        $this->call(CompanyTableSeeder::class);
        $this->call(ContactTableSeeder::class);

        $this->call(SettingsTableSeeder::class);
        $this->call(RoleTableSeeder::class);

        $this->call(CompanyLanguageTableSeeder::class);
        $this->call(CompanySettingsTableSeeder::class);

        $this->call(CurrencyTableSeeder::class);

        $this->call(DepartmentTableSeeder::class);
        $this->call(DepartmentI18nTableSeeder::class);
        $this->call(DepartmentsRolesTableSeeder::class);

        $this->call(ErrorI18nTableSeeder::class);
        $this->call(ErrorTableSeeder::class);

        $this->call(FrontWindowsTableSeeder::class);


        $this->call(IssueStatusTableSeeder::class);
        $this->call(IssueTypeTableSeeder::class);

        $this->call(LeadProductsTableSeeder::class);
        $this->call(LeadStatusTableSeeder::class);
        $this->call(LeadTableSeeder::class);

        $this->call(ModuleTableSeeder::class);
        $this->call(NotificationOnlineTableSeeder::class);

        $this->call(OffersLeadsTableSeeder::class);
        $this->call(OffersProductsTableSeeder::class);
        $this->call(OfferStatusTableSeeder::class);
        $this->call(OfferTableSeeder::class);

        $this->call(OrdersProductsTableSeeder::class);
        $this->call(OrderStatusTableSeeder::class);

        $this->call(OrderTableSeeder::class);
        $this->call(OrderTypeTableSeeder::class);

        $this->call(PermissionTableSeeder::class);
        $this->call(PermissionI18nTableSeeder::class);

        $this->call(ProductCategoryTableSeeder::class);
        $this->call(ProductI18nSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProjectTableSeeder::class);

        $this->call(RegisterTokenTableSeeder::class);

        $this->call(RightTableSeeder::class);
        $this->call(RightI18nTableSeeder::class);

        $this->call(RolePermissionTableSeeder::class);
        // $this->call(RoomsMessagesTableSeeder::class);

        $this->call(TranslationI18nTableSeeder::class);
        $this->call(TranslationTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->call(DepartmentsUsersTableSeeder::class);

        $this->call(UserDevicesTableSeeder::class);
        $this->call(UserSettingsTableSeeder::class);

        // $this->call(VisitorTableSeeder::class);
        $this->call(RoleI18nTableSeeder::class);
        $this->call(WindowGroupsTableSeeder::class);
        $this->call(SystemSettingsTableSeeder::class);

        $this->call(ExtraAccountsTableSeeder::class);

        $this->call(DomainTableSeeder::class);
        $this->call(DomainRecordsTableSeeder::class);

        $this->call(ShardTableSeeder::class);
        $this->call(ShardServicesTableSeeder::class);

        $this->call(ProductCategoryI18nTableSeeder::class);

        $this->call(TaxRuleTableSeeder::class);
        $this->call(TaxRuleI18nTableSeeder::class);
        $this->call(TaxRateTableSeeder::class);

        $this->call(TaxRateTypeTableSeeder::class);
        $this->call(TaxRateTypeContentTableSeeder::class);

        $this->call(CompanyRateTableSeeder::class);
        $this->call(CompanyCurrencyTableSeeder::class);

        $this->call(RateTableSeeder::class);
        $this->call(RateHistoryTableSeeder::class);


        $this->call(ContractTypeTableSeeder::class);
        $this->call(ContractTypeI18nTableSeeder::class);

        $this->call(CounterpartTableSeeder::class);
        $this->call(CounterPartiesTypeSeeder::class);
        $this->call(CounterpartTypeI18nTableSeeder::class);
        $this->call(CounterpartGroupTableSeeder::class);

        $this->call(AdminTableSeeder::class);

        //

        $this->call(OrderStatusI18nTableSeeder::class);

        $this->call(OrderTypesI18nTableSeeder::class);

        $this->call(ProductStatusI18nTableSeeder::class);
        $this->call(ProductStatusTableSeeder::class);

        $this->call(LeadProductsTableSeeder::class);
        $this->call(LeadStatusTableSeeder::class);
        $this->call(LeadStatusI18nTableSeeder::class);
        $this->call(LeadTableSeeder::class);

        $this->call(QuoteProductsTableSeeder::class);
        $this->call(QuoteStatusI18nTableSeeder::class);
        $this->call(QuoteStatusTableSeeder::class);
        $this->call(QuoteTableSeeder::class);

        $this->call(SalutationI18nTableSeeder::class);
        $this->call(SalutationTableSeeder::class);

        $this->call(TransactionStatusI18nTableSeeder::class);
        $this->call(TransactionStatusTableSeeder::class);
        $this->call(TransactionTableSeeder::class);
        $this->call(TransactionTypesTableSeeder::class);
        $this->call(TransactionTypesI18nTableSeeder::class);

        $this->call(PaymentGatewayI18nTableSeeder::class);
        $this->call(PaymentGatewayTableSeeder::class);


        $this->call(InvoiceProductsTableSeeder::class);
        $this->call(InvoiceStatusI18nTableSeeder::class);
        $this->call(InvoiceStatusTableSeeder::class);
        $this->call(InvoiceTableSeeder::class);

        $this->call(ContactPositionI18nTableSeeder::class);
        $this->call(ContactPositionTableSeeder::class);
        $this->call(CompanyFiltersTableSeeder::class);
        $this->call(PredefinedFiltersI18nTableSeeder::class);
        $this->call(PredefinedFiltersTableSeeder::class);

        $this->call(ContractTableSeeder::class);

        $this->call(ChatRoomsTableSeeder::class);
        $this->call(VisitorsTableSeeder::class);
        $this->call(ChatGuestsTableSeeder::class);
        $this->call(ChatInvitationsTableSeeder::class);
        $this->call(RoomMessagesTableSeeder::class);
        $this->call(RoomGuestsTableSeeder::class);
        $this->call(RoomUsersTableSeeder::class);
        $this->call(VisitsTableSeeder::class);
        $this->call(RoomFilesTableSeeder::class);
        $this->call(ChatSmileysTableSeeder::class);
        $this->call(ChatSettingsTableSeeder::class);
        $this->call(ChatSettingsGroupI18nTableSeeder::class);
        $this->call(ChatSettingsGroupTableSeeder::class);
        $this->call(ChatSettingsI18nTableSeeder::class);
        $this->call(ChatSoundsTableSeeder::class);
        $this->call(UserChatSettingsTableSeeder::class);

        //PM module seeds
        $this->call(ColorsTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(BoardsTableSeeder::class);
        $this->call(TaskTableSeeder::class);
        $this->call(TaskChecklistItemsTableSeeder::class);
        $this->call(DeMimeTypeTableSeeder::class);
        $this->call(DeItemCacheTableSeeder::class);
        $this->call(DeMountTableSeeder::class);
        $this->call(DeStorageTableSeeder::class);
        $this->call(DeItemTypeTableSeeder::class);
        $this->call(DeSharePermissionsTableSeeder::class);
        $this->call(DeItemLabelsTableSeeder::class);
        $this->call(DeLabelsTableSeeder::class);
    }
}
