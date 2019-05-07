<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndexTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Uncomment if relations are needed

        // language

        // DB::statement('CREATE INDEX language_title ON language(title(3))');
        //
        // DB::statement('CREATE INDEX language_code ON language(code(2))');
        //
        // // company
        //
        // DB::statement('CREATE INDEX company_title ON company(title(3))');
        //
        // DB::statement('CREATE INDEX company_street_adress ON company(street_address(3))');
        //
        // DB::statement('CREATE INDEX company_vatid ON company(vatID(3))');
        //
        // // DB::statement('ALTER TABLE `company` ADD CONSTRAINT `fk_cp_contact_id` FOREIGN KEY (`contact_id`) REFERENCES `contact`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `company` ADD CONSTRAINT `fk_cp_country_id` FOREIGN KEY (`country_id`) REFERENCES `country`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `company` ADD CONSTRAINT `fk_cp_region_id` FOREIGN KEY (`region_id`) REFERENCES `region`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `company` ADD CONSTRAINT `fk_cp_amount_id` FOREIGN KEY (`employees_amount_id`) REFERENCES `employees_amount`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // DB::statement('ALTER TABLE `company` ADD CONSTRAINT `fk_cp_language_id` FOREIGN KEY (`language_id`) REFERENCES `language`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        // //
        // // DB::statement('ALTER TABLE `company` ADD CONSTRAINT `fk_cp_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `domain`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // department
        //
        // DB::statement('ALTER TABLE `department` ADD CONSTRAINT `fk_dp_company_id` FOREIGN KEY (`company_id`) REFERENCES `company`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // department_i18n
        //
        // DB::statement('CREATE INDEX department_title ON department_i18n(title(3))');
        //
        // DB::statement('CREATE INDEX department_description ON department_i18n(description(3))');
        //
        // DB::statement('ALTER TABLE `department_i18n` ADD CONSTRAINT `fk_di18n_department_id` FOREIGN KEY (`department_id`) REFERENCES `department`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `department_i18n` ADD CONSTRAINT `fk_di18n_language_id` FOREIGN KEY (`language_id`) REFERENCES `language`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // departments_roles
        //
        // DB::statement('ALTER TABLE `departments_roles` ADD CONSTRAINT `fk_dr_department_id` FOREIGN KEY (`department_id`) REFERENCES `department`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `departments_roles` ADD CONSTRAINT `fk_dr_role_id` FOREIGN KEY (`role_id`) REFERENCES `role`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // departments_users
        //
        // DB::statement('ALTER TABLE `departments_users` ADD CONSTRAINT `fk_du_department_id` FOREIGN KEY (`department_id`) REFERENCES `department`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `departments_users` ADD CONSTRAINT `fk_du_user_id` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // role_i18n
        //
        // DB::statement('CREATE INDEX role_title ON role_i18n(title(3))');
        //
        // DB::statement('CREATE INDEX role_description ON role_i18n(description(3))');
        //
        // DB::statement('ALTER TABLE `role_i18n` ADD CONSTRAINT `fk_ri18n_role_id` FOREIGN KEY (`role_id`) REFERENCES `role`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `role_i18n` ADD CONSTRAINT `fk_ri18n_language_id` FOREIGN KEY (`language_id`) REFERENCES `language`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // permission_i18n
        //
        // DB::statement('CREATE INDEX permission_title ON permission_i18n(title(3))');
        //
        // DB::statement('CREATE INDEX permission_description ON permission_i18n(description(3))');
        //
        // DB::statement('ALTER TABLE `permission_i18n` ADD CONSTRAINT `fk_pi18n_language_id` FOREIGN KEY (`language_id`) REFERENCES `language`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `permission_i18n` ADD CONSTRAINT `fk_pi18n_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `permission`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // role_permission
        //
        // DB::statement('ALTER TABLE `role_permission` ADD CONSTRAINT `fk_rp_role_id` FOREIGN KEY (`role_id`) REFERENCES `role`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `role_permission` ADD CONSTRAINT `fk_rp_permission_id` FOREIGN KEY (`permission_id`) REFERENCES `permission`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // user_settings
        //
        // DB::statement('ALTER TABLE `user_settings` ADD CONSTRAINT `fk_us_setting_id` FOREIGN KEY (`setting_id`) REFERENCES `settings`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `user_settings` ADD CONSTRAINT `fk_us_user_id` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `user_settings` ADD CONSTRAINT `fk_us_device_id` FOREIGN KEY (`device_id`) REFERENCES `user_devices`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // user_devices
        //
        // DB::statement('ALTER TABLE `user_devices` ADD CONSTRAINT `fk_ud_user_id` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // company_language
        //
        // DB::statement('ALTER TABLE `company_language` ADD CONSTRAINT `fk_cl_company_id` FOREIGN KEY (`company_id`) REFERENCES `company`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `company_language` ADD CONSTRAINT `fk_cl_language_id` FOREIGN KEY (`language_id`) REFERENCES `language`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // domain
        //
        // // DB::statement('ALTER TABLE `domain` ADD CONSTRAINT `fk_dn_company_id` FOREIGN KEY (`company_id`) REFERENCES `company`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // domain_records
        //
        // // DB::statement('ALTER TABLE `domain_records` ADD CONSTRAINT `fk_dr_domain_id` FOREIGN KEY (`domain_id`) REFERENCES `domain`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // contact
        //
        // DB::statement('CREATE INDEX contact_firstname ON contact(firstname(3))');
        //
        // DB::statement('CREATE INDEX contact_lastname ON contact(lastname(3))');
        //
        // DB::statement('CREATE INDEX contact_email ON contact(email(3))');
        //
        // DB::statement('CREATE INDEX contact_postalcode ON contact(postal_code(3))');
        //
        // DB::statement('ALTER TABLE `contact` ADD CONSTRAINT `fk_ct_country_id` FOREIGN KEY (`country_id`) REFERENCES `country`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `contact` ADD CONSTRAINT `fk_ct_region_id` FOREIGN KEY (`region_id`) REFERENCES `region`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `contact` ADD CONSTRAINT `fk_ct_company_id` FOREIGN KEY (`company_id`) REFERENCES `company`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // extra accounts
        //
        // DB::statement('ALTER TABLE `extra_accounts` ADD CONSTRAINT `fk_ea_user_id` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // company_settings
        //
        // DB::statement('ALTER TABLE `company_settings` ADD CONSTRAINT `fk_cs_setting_id` FOREIGN KEY (`setting_id`) REFERENCES `settings`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `company_settings` ADD CONSTRAINT `fk_cs_company_id` FOREIGN KEY (`company_id`) REFERENCES `company`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        //
        // // employees_amount_i18n
        //
        // DB::statement('ALTER TABLE `employees_amount_i18n` ADD CONSTRAINT `fk_eai18n_amount_id` FOREIGN KEY (`amount_id`) REFERENCES `employees_amount`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `employees_amount_i18n` ADD CONSTRAINT `fk_eai18n_language_id` FOREIGN KEY (`language_id`) REFERENCES `language`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('CREATE INDEX employees_amount_i18n_title ON employees_amount_i18n(title(3))');
        //
        // // region i18n
        //
        // DB::statement('ALTER TABLE `region_i18n` ADD CONSTRAINT `fk_rei18n_region_id` FOREIGN KEY (`region_id`) REFERENCES `region`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `region_i18n` ADD CONSTRAINT `fk_rei18n_language_id` FOREIGN KEY (`language_id`) REFERENCES `language`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('CREATE INDEX region_i18n_title ON region_i18n(title(3))');
        //
        // // country i18n
        //
        // DB::statement('ALTER TABLE `country_i18n` ADD CONSTRAINT `fk_cti18n_country_id` FOREIGN KEY (`country_id`) REFERENCES `country`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `country_i18n` ADD CONSTRAINT `fk_cti18n_language_id` FOREIGN KEY (`language_id`) REFERENCES `language`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('CREATE INDEX country_i18n_title ON country_i18n(title(3))');
        //
        // // region
        //
        // // DB::statement('ALTER TABLE `region` ADD CONSTRAINT `fk_reg_country_id` FOREIGN KEY (`country_id`) REFERENCES `country`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // // country
        //
        // DB::statement('CREATE INDEX country_code ON country(code(3))');
        //
        // // permission
        //
        // DB::statement('CREATE INDEX permission_code ON permission(code(3))');
        //
        // // role
        //
        // DB::statement('CREATE INDEX role_code ON role(code(3))');
        //
        // // settings
        //
        // DB::statement('CREATE INDEX settings_code ON settings(code(3))');
        //
        // // shards
        //
        // DB::statement('ALTER TABLE `shards` ADD CONSTRAINT `fk_shard_country_id` FOREIGN KEY (`country_id`) REFERENCES `country`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('ALTER TABLE `shards` ADD CONSTRAINT `fk_shard_region_id` FOREIGN KEY (`region_id`) REFERENCES `region`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('CREATE INDEX shards_name ON shards(name(3))');
        //
        // // shards_services
        //
        // DB::statement('ALTER TABLE `shards_services` ADD CONSTRAINT `fk_shardsv_shard_id` FOREIGN KEY (`shard_id`) REFERENCES `shards`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');
        //
        // DB::statement('CREATE INDEX shards_services_name ON shards(name(3))');
        //
        // // domains
        //
        // DB::statement('CREATE UNIQUE INDEX name_index ON domains(name)');
        //
        // // domain_records
        //
        // DB::statement('CREATE INDEX rec_name_index ON domain_records(name)');
        // DB::statement('CREATE INDEX nametype_index ON domain_records(name,type)');
        // DB::statement('CREATE INDEX domain_id ON domain_records(domain_id)');
        //
        // // users
        //
        // DB::statement('ALTER TABLE `users` ADD CONSTRAINT `fk_ur_company_id` FOREIGN KEY (`company_id`) REFERENCES `company`(`id`) ON DELETE SET NULL ON UPDATE SET NULL;');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
