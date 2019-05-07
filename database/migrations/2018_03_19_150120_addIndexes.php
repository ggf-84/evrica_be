<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndexes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('chat_guests', function($table)
         {
             $table->index('visitor_id');
             $table->index('user_id');
             $table->index('name');
             $table->index('email');
         });

         Schema::table('chat_invitations', function($table)
         {
             $table->index('room_id');
             $table->index('guest_id');
             $table->index('user_id');
         });

         Schema::table('chat_rooms', function($table)
         {
             $table->index('title');
             $table->index('department_id');
             $table->index('user_id');
             $table->index('company_id');
         });


         Schema::table('chat_smileys', function($table)
         {
             $table->index('company_id');
             $table->index('user_id');
         });

         Schema::table('company', function($table)
         {
             $table->index('title');
             $table->index('country_id');
             $table->index('email');
             $table->index('phone');
         });

         Schema::table('company_currency', function($table)
         {
             $table->index('currency_id');
             $table->index('company_id');
         });

         Schema::table('company_filters', function($table)
         {
             $table->index('company_id');
             $table->index('filter_id');
         });

         Schema::table('company_language', function($table)
         {
             $table->index('company_id');
             $table->index('language_id');
         });

         Schema::table('company_rates', function($table)
         {
             $table->index('company_id');
             $table->index('rate_id');
         });

         Schema::table('company_settings', function($table)
         {
             $table->index('setting_id');
             $table->index('company_id');
         });

         Schema::table('company_shards', function($table)
         {
             $table->index('company_id');
             $table->index('shard_id');
         });

         Schema::table('contact', function($table)
         {
             $table->index('firstname');
             $table->index('lastname');
             $table->index('phone');
             $table->index('email');
             $table->index('street_address');
             $table->index('country_id');
             $table->index('state_id');
             $table->index('salutation_id');
             $table->index('position_id');
             $table->index('lead_id');
             $table->index('company_id');
             $table->index('counterparty_id');
         });

         Schema::table('contact_position', function($table)
         {
             $table->index('company_id');
         });

         Schema::table('contact_position_i18n', function($table)
         {
             $table->index('title');
             $table->index('language_id');
             $table->index('position_id');
         });

         Schema::table('contract', function($table)
         {
             $table->index('title');
             $table->index('company_id');
             $table->index('counterparty_id');
             $table->index('currency_id');
             $table->index('invoice_id');
             $table->index('order_id');
             $table->index('quote_id');
             $table->index('type_id');
             $table->index('user_id');
         });

         Schema::table('contract_types', function($table)
         {
             $table->index('company_id');
         });

         Schema::table('contract_types_i18n', function($table)
         {
             $table->index('title');
             $table->index('type_id');
             $table->index('language_id');
         });

         Schema::table('counterparty', function($table)
         {
             $table->index('firstname');
             $table->index('lastname');
             $table->index('email');
             $table->index('address');
             $table->index('phone');
             $table->index('country_id');
             $table->index('state_id');
             $table->index('company_id');
             $table->index('type_id');
             $table->index('group_id');
         });

         Schema::table('counterparty_balance', function($table)
         {
             $table->index('counterparty_id');
         });

         Schema::table('counterparty_groups', function($table)
         {
             $table->index('title');
             $table->index('company_id');
         });

         Schema::table('counterparty_types', function($table)
         {
             $table->index('department_id');
         });

         Schema::table('counterparty_types_i18n', function($table)
         {
             $table->index('title');
             $table->index('type_id');
             $table->index('language_id');
         });

         Schema::table('country', function($table)
         {
             $table->index('code');
         });

         Schema::table('country_i18n', function($table)
         {
             $table->index('title');
             $table->index('country_id');
             $table->index('language_id');
         });

         Schema::table('department', function($table)
         {
             $table->index('user_id');
             $table->index('company_id');
         });

         Schema::table('department_i18n', function($table)
         {
             $table->index('department_id');
             $table->index('title');
             $table->index('language_id');
         });

         Schema::table('department_roles', function($table)
         {
             $table->index('department_id');
             $table->index('role_id');
         });

         Schema::table('department_users', function($table)
         {
             $table->index('department_id');
             $table->index('user_id');
         });

         Schema::table('domain_records', function($table)
         {
             $table->index('domain_id');
             $table->index('name');
             $table->index('company_id');
         });

         Schema::table('domains', function($table)
         {
             $table->index('name');
         });

         Schema::table('error_i18n', function($table)
         {
             $table->index('title');
             $table->index('error_id');
             $table->index('language_id');
         });

         Schema::table('extra_accounts', function($table)
         {
             $table->index('user_id');
             $table->index('provider_id');
         });

         Schema::table('front_windows', function($table)
         {
             $table->index('group_id');
             $table->index('name');
         });

         Schema::table('invoice', function($table)
         {
             $table->index('title');
             $table->index('status_id');
             $table->index('user_id');
             $table->index('company_id');
             $table->index('counterparty_id');
         });

         Schema::table('invoice_products', function($table)
         {
             $table->index('product_id');
             $table->index('invoice_id');
         });

         Schema::table('invoice_status', function($table)
         {
             $table->index('company_id');
         });

         Schema::table('invoice_status_i18n', function($table)
         {
             $table->index('title');
             $table->index('status_id');
             $table->index('language_id');
         });

         Schema::table('language', function($table)
         {
             $table->index('title');
         });

         Schema::table('lead', function($table)
         {
             $table->index('name');
             $table->index('status_id');
             $table->index('user_id');
             $table->index('counterparty_id');
             $table->index('company_id');
         });

         Schema::table('lead_products', function($table)
         {
             $table->index('product_id');
             $table->index('lead_id');
         });

         Schema::table('lead_status', function($table)
         {
             $table->index('company_id');
         });

         Schema::table('lead_status_i18n', function($table)
         {
             $table->index('title');
             $table->index('status_id');
             $table->index('language_id');
         });

         Schema::table('measure_unit_i18n', function($table)
         {
             $table->index('title');
             $table->index('unit_id');
             $table->index('language_id');
         });

         Schema::table('module', function($table)
         {
             $table->index('title');
             $table->index('code');
         });

         Schema::table('order', function($table)
         {
             $table->index('title');
             $table->index('status_id');
             $table->index('company_id');
             $table->index('type_id');
             $table->index('counterparty_id');
         });

         Schema::table('order_products', function($table)
         {
             $table->index('order_id');
             $table->index('product_id');
         });

         Schema::table('order_status', function($table)
         {
             $table->index('company_id');
         });

         Schema::table('order_status_i18n', function($table)
         {
             $table->index('title');
             $table->index('status_id');
             $table->index('language_id');
         });

         Schema::table('order_types', function($table)
         {
             $table->index('company_id');
         });

         Schema::table('order_types_i18n', function($table)
         {
             $table->index('title');
             $table->index('type_id');
             $table->index('language_id');
         });

         Schema::table('payment_gateways', function($table)
         {
             $table->index('company_id');
         });

         Schema::table('payment_gateways_i18n', function($table)
         {
             $table->index('title');
             $table->index('gateway_id');
             $table->index('language_id');
         });

         Schema::table('permission', function($table)
         {
             $table->index('code');
         });

         Schema::table('permission_i18n', function($table)
         {
             $table->index('permission_id');
             $table->index('title');
             $table->index('language_id');
         });

         Schema::table('predefined_filters', function($table)
         {
             $table->index('company_id');
             $table->index('entity');
         });

         Schema::table('predefined_filters_i18n', function($table)
         {
             $table->index('title');
             $table->index('filter_id');
             $table->index('language_id');
         });

         Schema::table('product', function($table)
         {
             $table->index('unit_id');
             $table->index('status_id');
             $table->index('category_id');
             $table->index('company_id');
         });

         Schema::table('product_categories', function($table)
         {
             $table->index('company_id');
             $table->index('parent_id');
         });

         Schema::table('product_categories_i18n', function($table)
         {
             $table->index('title');
             $table->index('category_id');
             $table->index('language_id');
         });

         Schema::table('product_i18n', function($table)
         {
             $table->index('title');
             $table->index('product_id');
             $table->index('language_id');
         });

         Schema::table('product_status', function($table)
         {
             $table->index('company_id');
         });

         Schema::table('product_status_i18n', function($table)
         {
             $table->index('title');
             $table->index('status_id');
             $table->index('language_id');
         });

         Schema::table('quote', function($table)
         {
             $table->index('title');
             $table->index('counterparty_id');
             $table->index('status_id');
             $table->index('user_id');
             $table->index('company_id');
         });

         Schema::table('quote_products', function($table)
         {
             $table->index('quote_id');
             $table->index('product_id');
         });

         Schema::table('quote_status', function($table)
         {
             $table->index('company_id');
         });

         Schema::table('quote_status_i18n', function($table)
         {
             $table->index('title');
             $table->index('status_id');
             $table->index('language_id');
         });

         Schema::table('rate', function($table)
         {
             $table->index('main_currency_id');
             $table->index('second_currency_id');
         });

         Schema::table('rate_history', function($table)
         {
             $table->index('rate_id');
         });

         Schema::table('region', function($table)
         {
             $table->index('country_id');
         });

         Schema::table('region_i18n', function($table)
         {
             $table->index('title');
             $table->index('region_id');
             $table->index('language_id');
         });

         Schema::table('register_token', function($table)
         {
             $table->index('company');
             $table->index('department');
             $table->index('user_id');
         });

         Schema::table('right', function($table)
         {
             $table->index('title');
             $table->index('code');
             $table->index('module_id');
         });

         Schema::table('right_i18n', function($table)
         {
             $table->index('right_id');
             $table->index('title');
             $table->index('language_id');
         });

         Schema::table('role', function($table)
         {
             $table->index('code');
         });

         Schema::table('role_permission', function($table)
         {
             $table->index('role_id');
             $table->index('permission_id');
         });

         Schema::table('room_files', function($table)
         {
             $table->index('room_id');
             $table->index('company_id');
             $table->index('user_id');
         });

         Schema::table('room_guests', function($table)
         {
             $table->index('guest_id');
             $table->index('room_id');
         });

         Schema::table('room_messages', function($table)
         {
             $table->index('user_id');
             $table->index('guest_id');
             $table->index('room_id');
         });

         Schema::table('room_users', function($table)
         {
             $table->index('user_id');
             $table->index('room_id');
         });

         Schema::table('salutation_i18n', function($table)
         {
             $table->index('title');
             $table->index('salutation_id');
             $table->index('language_id');
         });

         Schema::table('settings', function($table)
         {
             $table->index('code');
         });

         Schema::table('social_accounts', function($table)
         {
             $table->index('user_id');
             $table->index('provider_id');
             $table->index('user_type');
         });

         Schema::table('state', function($table)
         {
             $table->index('country_id');
         });

         Schema::table('state_i18n', function($table)
         {
             $table->index('title');
             $table->index('state_id');
             $table->index('language_id');
         });

         Schema::table('system_settings', function($table)
         {
             $table->index('setting_id');
         });

         Schema::table('tax_rate', function($table)
         {
             $table->index('country_id');
             $table->index('state_id');
             $table->index('type_id');
         });

         Schema::table('tax_rate_type_i18n', function($table)
         {
             $table->index('title');
             $table->index('type_id');
             $table->index('language_id');
         });

         Schema::table('tax_rule', function($table)
         {
             $table->index('company_id');
             $table->index('category_id');
             $table->index('country_id');
         });

         Schema::table('tax_rule_i18n', function($table)
         {
             $table->index('title');
             $table->index('rule_id');
             $table->index('language_id');
         });

         Schema::table('transaction', function($table)
         {
             $table->index('type_id');
             $table->index('status_id');
             $table->index('counterparty_id');
         });

         Schema::table('transaction_status_i18n', function($table)
         {
             $table->index('title');
             $table->index('status_id');
             $table->index('language_id');
         });

         Schema::table('transaction_types_i18n', function($table)
         {
             $table->index('title');
             $table->index('type_id');
             $table->index('language_id');
         });

         Schema::table('translation', function($table)
         {
             $table->index('code');
         });

         Schema::table('translation_i18n', function($table)
         {
             $table->index('translation_id');
             $table->index('language_id');
         });

         Schema::table('unit', function($table)
         {
             $table->index('company_id');
             $table->index('user_id');
             $table->index('type_id');
         });

         Schema::table('unit_i18n', function($table)
         {
             $table->index('title');
             $table->index('unit_id');
             $table->index('language_id');
         });

         Schema::table('user_devices', function($table)
         {
             $table->index('user_id');
         });

         Schema::table('user_settings', function($table)
         {
             $table->index('setting_id');
             $table->index('user_id');
             $table->index('device_id');
         });

         Schema::table('users', function($table)
         {
             $table->index('firstname');
             $table->index('lastname');
             $table->index('email');
         });

         Schema::table('visitors', function($table)
         {
             $table->index('country_id');
             $table->index('user_id');
             $table->index('language_id');
         });

         Schema::table('visits', function($table)
         {
             $table->index('visitor_id');
             $table->index('domain_id');
         });

         Schema::table('ws_connections', function($table)
         {
             $table->index('user_id');
             $table->index('company_id');
         });

        // CAN'T RUN MIGRATIONS , BECAUSE OF DUPLICATE KEYS
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('chat_guests', function($table)
         {
             $table->dropIndex('chat_guests_visitor_id_index');
             $table->dropIndex('chat_guests_user_id_index');
             $table->dropIndex('chat_guests_name_index');
             $table->dropIndex('chat_guests_email_index');
         });

         Schema::table('chat_invitations', function($table)
         {
             $table->dropIndex('chat_invitations_room_id_index');
             $table->dropIndex('chat_invitations_guest_id_index');
             $table->dropIndex('chat_invitations_user_id_index');
         });

         Schema::table('chat_rooms', function($table)
         {
             $table->dropIndex('chat_rooms_title_index');
             $table->dropIndex('chat_rooms_department_id_index');
             $table->dropIndex('chat_rooms_user_id_index');
             $table->dropIndex('chat_rooms_company_id_index');
         });


         Schema::table('chat_smileys', function($table)
         {
             $table->dropIndex('chat_smileys_company_id_index');
             $table->dropIndex('chat_smileys_user_id_index');
         });

         Schema::table('company', function($table)
         {
             $table->dropIndex('company_title_index');
             $table->dropIndex('company_country_id_index');
             $table->dropIndex('company_email_index');
             $table->dropIndex('company_phone_index');
         });

         Schema::table('company_currency', function($table)
         {
             $table->dropIndex('company_currency_currency_id_index');
             $table->dropIndex('company_currency_company_id_index');
         });

         Schema::table('company_filters', function($table)
         {
             $table->dropIndex('company_filters_company_id_index');
             $table->dropIndex('company_filters_filter_id_index');
         });

         Schema::table('company_language', function($table)
         {
             $table->dropIndex('company_language_company_id_index');
             $table->dropIndex('company_language_language_id_index');
         });

         Schema::table('company_rates', function($table)
         {
             $table->dropIndex('company_rates_company_id_index');
             $table->dropIndex('company_rates_rate_id_index');
         });

         Schema::table('company_settings', function($table)
         {
             $table->dropIndex('company_settings_setting_id_index');
             $table->dropIndex('company_settings_company_id_index');
         });

         Schema::table('company_shards', function($table)
         {
             $table->dropIndex('company_shards_company_id_index');
             $table->dropIndex('company_shards_shard_id_index');
         });

         Schema::table('contact', function($table)
         {
             $table->dropIndex('contact_firstname_index');
             $table->dropIndex('contact_lastname_index');
             $table->dropIndex('contact_phone_index');
             $table->dropIndex('contact_email_index');
             $table->dropIndex('contact_street_address_index');
             $table->dropIndex('contact_country_id_index');
             $table->dropIndex('contact_state_id_index');
             $table->dropIndex('contact_salutation_id_index');
             $table->dropIndex('contact_position_id_index');
             $table->dropIndex('contact_lead_id_index');
             $table->dropIndex('contact_company_id_index');
             $table->dropIndex('contact_counterparty_id_index');
         });

         Schema::table('contact_position', function($table)
         {
             $table->dropIndex('contact_position_company_id_index');
         });

         Schema::table('contact_position_i18n', function($table)
         {
             $table->dropIndex('contact_position_i18n_title_index');
             $table->dropIndex('contact_position_i18n_language_id_index');
             $table->dropIndex('contact_position_i18n_position_id_index');
         });

         Schema::table('contract', function($table)
         {
             $table->dropIndex('contract_title_index');
             $table->dropIndex('contract_company_id_index');
             $table->dropIndex('contract_counterparty_id_index');
             $table->dropIndex('contract_currency_id_index');
             $table->dropIndex('contract_invoice_id_index');
             $table->dropIndex('contract_order_id_index');
             $table->dropIndex('contract_quote_id_index');
             $table->dropIndex('contract_type_id_index');
             $table->dropIndex('contract_user_id_index');
         });

         Schema::table('contract_types', function($table)
         {
             $table->dropIndex('contract_types_company_id_index');
         });

         Schema::table('contract_types_i18n', function($table)
         {
             $table->dropIndex('contract_types_i18n_title_index');
             $table->dropIndex('contract_types_i18n_type_id_index');
             $table->dropIndex('contract_types_i18n_language_id_index');
         });

         Schema::table('counterparty', function($table)
         {
             $table->dropIndex('counterparty_firstname_index');
             $table->dropIndex('counterparty_lastname_index');
             $table->dropIndex('counterparty_email_index');
             $table->dropIndex('counterparty_address_index');
             $table->dropIndex('counterparty_phone_index');
             $table->dropIndex('counterparty_country_id_index');
             $table->dropIndex('counterparty_state_id_index');
             $table->dropIndex('counterparty_company_id_index');
             $table->dropIndex('counterparty_type_id_index');
             $table->dropIndex('counterparty_group_id_index');
         });

         Schema::table('counterparty_balance', function($table)
         {
             $table->dropIndex('counterparty_balance_counterparty_id_index');
         });

         Schema::table('counterparty_groups', function($table)
         {
             $table->dropIndex('counterparty_groups_title_index');
             $table->dropIndex('counterparty_groups_company_id_index');
         });

         Schema::table('counterparty_types', function($table)
         {
             $table->dropIndex('counterparty_types_department_id_index');
         });

         Schema::table('counterparty_types_i18n', function($table)
         {
             $table->dropIndex('counterparty_types_i18n_title_index');
             $table->dropIndex('counterparty_types_i18n_type_id_index');
             $table->dropIndex('counterparty_types_i18n_language_id_index');
         });

         Schema::table('country', function($table)
         {
             $table->dropIndex('country_code_index');
         });

         Schema::table('country_i18n', function($table)
         {
             $table->dropIndex('country_i18n_title_index');
             $table->dropIndex('country_i18n_country_id_index');
             $table->dropIndex('country_i18n_language_id_index');
         });

         Schema::table('department', function($table)
         {
             $table->dropIndex('department_user_id_index');
             $table->dropIndex('department_company_id_index');
         });

         Schema::table('department_i18n', function($table)
         {
             $table->dropIndex('department_i18n_department_id_index');
             $table->dropIndex('department_i18n_title_index');
             $table->dropIndex('department_i18n_language_id_index');
         });

         Schema::table('department_roles', function($table)
         {
             $table->dropIndex('department_roles_department_id_index');
             $table->dropIndex('department_roles_role_id_index');
         });

         Schema::table('department_users', function($table)
         {
             $table->dropIndex('department_users_department_id_index');
             $table->dropIndex('department_users_user_id_index');
         });

         Schema::table('domain_records', function($table)
         {
             $table->dropIndex('domain_records_domain_id_index');
             $table->dropIndex('domain_records_name_index');
             $table->dropIndex('domain_records_company_id_index');
         });

         Schema::table('domains', function($table)
         {
             $table->dropIndex('domains_name_index');
         });

         Schema::table('error_i18n', function($table)
         {
             $table->dropIndex('error_i18n_title_index');
             $table->dropIndex('error_i18n_error_id_index');
             $table->dropIndex('error_i18n_language_id_index');
         });

         Schema::table('extra_accounts', function($table)
         {
             $table->dropIndex('extra_accounts_user_id_index');
             $table->dropIndex('extra_accounts_provider_id_index');
         });

         Schema::table('front_windows', function($table)
         {
             $table->dropIndex('front_windows_group_id_index');
             $table->dropIndex('front_windows_name_index');
         });

         Schema::table('invoice', function($table)
         {
             $table->dropIndex('invoice_title_index');
             $table->dropIndex('invoice_status_id_index');
             $table->dropIndex('invoice_user_id_index');
             $table->dropIndex('invoice_company_id_index');
             $table->dropIndex('invoice_counterparty_id_index');
         });

         Schema::table('invoice_products', function($table)
         {
             $table->dropIndex('invoice_products_product_id_index');
             $table->dropIndex('invoice_products_invoice_id_index');
         });

         Schema::table('invoice_status', function($table)
         {
             $table->dropIndex('invoice_status_company_id_index');
         });

         Schema::table('invoice_status_i18n', function($table)
         {
             $table->dropIndex('invoice_status_i18n_title_index');
             $table->dropIndex('invoice_status_i18n_status_id_index');
             $table->dropIndex('invoice_status_i18n_language_id_index');
         });

         Schema::table('language', function($table)
         {
             $table->dropIndex('language_title_index');
         });

         Schema::table('lead', function($table)
         {
             $table->dropIndex('lead_name_index');
             $table->dropIndex('lead_status_id_index');
             $table->dropIndex('lead_user_id_index');
             $table->dropIndex('lead_counterparty_id_index');
             $table->dropIndex('lead_company_id_index');
         });

         Schema::table('lead_products', function($table)
         {
             $table->dropIndex('lead_products_product_id_index');
             $table->dropIndex('lead_products_lead_id_index');
         });

         Schema::table('lead_status', function($table)
         {
             $table->dropIndex('lead_status_company_id_index');
         });

         Schema::table('lead_status_i18n', function($table)
         {
             $table->dropIndex('lead_status_i18n_title_index');
             $table->dropIndex('lead_status_i18n_status_id_index');
             $table->dropIndex('lead_status_i18n_language_id_index');
         });

         Schema::table('measure_unit_i18n', function($table)
         {
             $table->dropIndex('measure_unit_i18n_title_index');
             $table->dropIndex('measure_unit_i18n_unit_id_index');
             $table->dropIndex('measure_unit_i18n_language_id_index');
         });

         Schema::table('module', function($table)
         {
             $table->dropIndex('module_title_index');
             $table->dropIndex('module_code_index');
         });

         Schema::table('order', function($table)
         {
             $table->dropIndex('order_title_index');
             $table->dropIndex('order_status_id_index');
             $table->dropIndex('order_company_id_index');
             $table->dropIndex('order_type_id_index');
             $table->dropIndex('order_counterparty_id_index');
         });

         Schema::table('order_products', function($table)
         {
             $table->dropIndex('order_products_order_id_index');
             $table->dropIndex('order_products_product_id_index');
         });

         Schema::table('order_status', function($table)
         {
             $table->dropIndex('order_status_company_id_index');
         });

         Schema::table('order_status_i18n', function($table)
         {
             $table->dropIndex('order_status_i18n_title_index');
             $table->dropIndex('order_status_i18n_status_id_index');
             $table->dropIndex('order_status_i18n_language_id_index');
         });

         Schema::table('order_types', function($table)
         {
             $table->dropIndex('order_types_company_id_index');
         });

         Schema::table('order_types_i18n', function($table)
         {
             $table->dropIndex('order_types_i18n_title_index');
             $table->dropIndex('order_types_i18n_type_id_index');
             $table->dropIndex('order_types_i18n_language_id_index');
         });

         Schema::table('payment_gateways', function($table)
         {
             $table->dropIndex('payment_gateways_company_id_index');
         });

         Schema::table('payment_gateways_i18n', function($table)
         {
             $table->dropIndex('payment_gateways_i18n_title_index');
             $table->dropIndex('payment_gateways_i18n_gateway_id_index');
             $table->dropIndex('payment_gateways_i18n_language_id_index');
         });

         Schema::table('permission', function($table)
         {
             $table->dropIndex('permission_code_index');
         });

         Schema::table('permission_i18n', function($table)
         {
             $table->dropIndex('permission_i18n_permission_id_index');
             $table->dropIndex('permission_i18n_title_index');
             $table->dropIndex('permission_i18n_language_id_index');
         });

         Schema::table('predefined_filters', function($table)
         {
             $table->dropIndex('predefined_filters_company_id_index');
             $table->dropIndex('predefined_filters_entity_index');
         });

         Schema::table('predefined_filters_i18n', function($table)
         {
             $table->dropIndex('predefined_filters_i18n_title_index');
             $table->dropIndex('predefined_filters_i18n_filter_id_index');
             $table->dropIndex('predefined_filters_i18n_language_id_index');
         });

         Schema::table('product', function($table)
         {
             $table->dropIndex('product_unit_id_index');
             $table->dropIndex('product_status_id_index');
             $table->dropIndex('product_category_id_index');
             $table->dropIndex('product_company_id_index');
         });

         Schema::table('product_categories', function($table)
         {
             $table->dropIndex('product_categories_company_id_index');
             $table->dropIndex('product_categories_parent_id_index');
         });

         Schema::table('product_categories_i18n', function($table)
         {
             $table->dropIndex('product_categories_i18n_title_index');
             $table->dropIndex('product_categories_i18n_category_id_index');
             $table->dropIndex('product_categories_i18n_language_id_index');
         });

         Schema::table('product_i18n', function($table)
         {
             $table->dropIndex('product_i18n_title_index');
             $table->dropIndex('product_i18n_product_id_index');
             $table->dropIndex('product_i18n_language_id_index');
         });

         Schema::table('product_status', function($table)
         {
             $table->dropIndex('product_status_company_id_index');
         });

         Schema::table('product_status_i18n', function($table)
         {
             $table->dropIndex('product_status_i18n_title_index');
             $table->dropIndex('product_status_i18n_status_id_index');
             $table->dropIndex('product_status_i18n_language_id_index');
         });

         Schema::table('quote', function($table)
         {
             $table->dropIndex('quote_title_index');
             $table->dropIndex('quote_counterparty_id_index');
             $table->dropIndex('quote_status_id_index');
             $table->dropIndex('quote_user_id_index');
             $table->dropIndex('quote_company_id_index');
         });

         Schema::table('quote_products', function($table)
         {
             $table->dropIndex('quote_products_quote_id_index');
             $table->dropIndex('quote_products_product_id_index');
         });

         Schema::table('quote_status', function($table)
         {
             $table->dropIndex('quote_status_company_id_index');
         });

         Schema::table('quote_status_i18n', function($table)
         {
             $table->dropIndex('quote_status_i18n_title_index');
             $table->dropIndex('quote_status_i18n_status_id_index');
             $table->dropIndex('quote_status_i18n_language_id_index');
         });

         Schema::table('rate', function($table)
         {
             $table->dropIndex('rate_main_currency_id_index');
             $table->dropIndex('rate_second_currency_id_index');
         });

         Schema::table('rate_history', function($table)
         {
             $table->dropIndex('rate_history_rate_id_index');
         });

         Schema::table('region', function($table)
         {
             $table->dropIndex('region_country_id_index');
         });

         Schema::table('region_i18n', function($table)
         {
             $table->dropIndex('region_i18n_title_index');
             $table->dropIndex('region_i18n_region_id_index');
             $table->dropIndex('region_i18n_language_id_index');
         });

         Schema::table('register_token', function($table)
         {
             $table->dropIndex('register_token_company_index');
             $table->dropIndex('register_token_department_index');
             $table->dropIndex('register_token_user_id_index');
         });

         Schema::table('right', function($table)
         {
             $table->dropIndex('right_title_index');
             $table->dropIndex('right_code_index');
             $table->dropIndex('right_module_id_index');
         });

         Schema::table('right_i18n', function($table)
         {
             $table->dropIndex('right_i18n_right_id_index');
             $table->dropIndex('right_i18n_title_index');
             $table->dropIndex('right_i18n_language_id_index');
         });

         Schema::table('role', function($table)
         {
             $table->dropIndex('role_code_index');
         });

         Schema::table('role_permission', function($table)
         {
             $table->dropIndex('role_permission_role_id_index');
             $table->dropIndex('role_permission_permission_id_index');
         });

         Schema::table('room_files', function($table)
         {
             $table->dropIndex('room_files_room_id_index');
             $table->dropIndex('room_files_company_id_index');
             $table->dropIndex('room_files_user_id_index');
         });

         Schema::table('room_guests', function($table)
         {
             $table->dropIndex('room_guests_guest_id_index');
             $table->dropIndex('room_guests_room_id_index');
         });

         Schema::table('room_messages', function($table)
         {
             $table->dropIndex('room_messages_user_id_index');
             $table->dropIndex('room_messages_guest_id_index');
             $table->dropIndex('room_messages_room_id_index');
         });

         Schema::table('room_users', function($table)
         {
             $table->dropIndex('room_users_user_id_index');
             $table->dropIndex('room_users_room_id_index');
         });

         Schema::table('salutation_i18n', function($table)
         {
             $table->dropIndex('salutation_i18n_title_index');
             $table->dropIndex('salutation_i18n_salutation_id_index');
             $table->dropIndex('salutation_i18n_language_id_index');
         });

         Schema::table('settings', function($table)
         {
             $table->dropIndex('settings_code_index');
         });

         Schema::table('social_accounts', function($table)
         {
             $table->dropIndex('social_accounts_user_id_index');
             $table->dropIndex('social_accounts_provider_id_index');
             $table->dropIndex('social_accounts_user_type_index');
         });

         Schema::table('state', function($table)
         {
             $table->dropIndex('state_country_id_index');
         });

         Schema::table('state_i18n', function($table)
         {
             $table->dropIndex('state_i18n_title_index');
             $table->dropIndex('state_i18n_state_id_index');
             $table->dropIndex('state_i18n_language_id_index');
         });

         Schema::table('system_settings', function($table)
         {
             $table->dropIndex('system_settings_setting_id_index');
         });

         Schema::table('tax_rate', function($table)
         {
             $table->dropIndex('tax_rate_country_id_index');
             $table->dropIndex('tax_rate_state_id_index');
             $table->dropIndex('tax_rate_type_id_index');
         });

         Schema::table('tax_rate_type_i18n', function($table)
         {
             $table->dropIndex('tax_rate_type_i18n_title_index');
             $table->dropIndex('tax_rate_type_i18n_type_id_index');
             $table->dropIndex('tax_rate_type_i18n_language_id_index');
         });

         Schema::table('tax_rule', function($table)
         {
             $table->dropIndex('tax_rule_company_id_index');
             $table->dropIndex('tax_rule_category_id_index');
             $table->dropIndex('tax_rule_country_id_index');
         });

         Schema::table('tax_rule_i18n', function($table)
         {
             $table->dropIndex('tax_rule_i18n_title_index');
             $table->dropIndex('tax_rule_i18n_rule_id_index');
             $table->dropIndex('tax_rule_i18n_language_id_index');
         });

         Schema::table('transaction', function($table)
         {
             $table->dropIndex('transaction_type_id_index');
             $table->dropIndex('transaction_status_id_index');
             $table->dropIndex('transaction_counterparty_id_index');
         });

         Schema::table('transaction_status_i18n', function($table)
         {
             $table->dropIndex('transaction_status_i18n_title_index');
             $table->dropIndex('transaction_status_i18n_status_id_index');
             $table->dropIndex('transaction_status_i18n_language_id_index');
         });

         Schema::table('transaction_types_i18n', function($table)
         {
             $table->dropIndex('transaction_types_i18n_title_index');
             $table->dropIndex('transaction_types_i18n_type_id_index');
             $table->dropIndex('transaction_types_i18n_language_id_index');
         });

         Schema::table('translation', function($table)
         {
             $table->dropIndex('translation_code_index');
         });

         Schema::table('translation_i18n', function($table)
         {
             $table->dropIndex('translation_i18n_translation_id_index');
             $table->dropIndex('translation_i18n_language_id_index');
         });

         Schema::table('unit', function($table)
         {
             $table->dropIndex('unit_company_id_index');
             $table->dropIndex('unit_user_id_index');
             $table->dropIndex('unit_type_id_index');
         });

         Schema::table('unit_i18n', function($table)
         {
             $table->dropIndex('unit_i18n_title_index');
             $table->dropIndex('unit_i18n_unit_id_index');
             $table->dropIndex('unit_i18n_language_id_index');
         });

         Schema::table('user_devices', function($table)
         {
             $table->dropIndex('user_devices_user_id_index');
         });

         Schema::table('user_settings', function($table)
         {
             $table->dropIndex('user_settings_setting_id_index');
             $table->dropIndex('user_settings_user_id_index');
             $table->dropIndex('user_settings_device_id_index');
         });

         Schema::table('users', function($table)
         {
             $table->dropIndex('users_firstname_index');
             $table->dropIndex('users_lastname_index');
             $table->dropIndex('users_email_index');
         });

         Schema::table('visitors', function($table)
         {
             $table->dropIndex('visitors_country_id_index');
             $table->dropIndex('visitors_user_id_index');
             $table->dropIndex('visitors_language_id_index');
         });

         Schema::table('visits', function($table)
         {
             $table->dropIndex('visits_visitor_id_index');
             $table->dropIndex('visits_domain_id_index');
         });

         Schema::table('ws_connections', function($table)
         {
             $table->dropIndex('ws_connections_user_id_index');
             $table->dropIndex('ws_connections_company_id_index');
         });

        // CAN'T RUN MIGRATIONS , BECAUSE OF DUPLICATE KEYS
    }
}
