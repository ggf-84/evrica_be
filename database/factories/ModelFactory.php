<?php

/*
 * Get random keys for relation if exist
 * @param string model
 * @return int id (primary key)
 */

use App\Models\TaskComment;

function relation($model, $company_id = null)
{
    //get last 15 entries from db
    $q = $model->orderBy('id', 'ASC');

    if ($company_id) $q->where('company_id', $company_id);

    $items = $q->take(15)->get();

    //check number of entries
    if ($items->count() < 1) {
        if ($company_id) {
            return factory(get_class($model))->create(['company_id' => $company_id])->id;
        }
        //create new entry
        return factory(get_class($model))->create()->id;
    }

    //return random entry from related table
    $random = $items->random()->id;
    return $random;
}

function getLocale($languageId)
{
    $locales = [
        1 => 'en_US',
        2 => 'bg_BG',
        3 => 'ru_RU',
        4 => 'ro_RO',
        5 => 'de_DE',
    ];

    return isset($locales[$languageId]) ? $locales[$languageId] : 1;
}

function getRandCompanyId($params)
{
    if (isset($params['company_id'])) {
        return $params['company_id'];
    }
    return mt_rand(1,3);
}

function randomCreatedAt($faker)
{
    return $faker->dateTimeBetween($startDate = '-50 days', $endDate = '-10 days', $timezone = null);
}

function randomUpdatedAt($faker)
{
    return $faker->dateTimeBetween($startDate = '-10 days', $endDate = 'now', $timezone = null);
}

$factory->define(App\Models\Company::class, function (Faker\Generator $faker) {
    $state = \App\Models\State::all()->random();
    return [
        'title' => $faker->company,
        'street_address' => $faker->streetAddress,
        'postal_code' => $faker->postcode,
        'email' => $faker->email,
        'vatID' => null,
        'phone' => $faker->phoneNumber,
        'revenue' => null,
        'amount' => rand(1, 1000),
        'country_id' => $state->country_id,
        'state_id' => $state->id,
        'created_at' => randomCreatedAt($faker),
        'updated_at' => randomUpdatedAt($faker),
    ];
});

$factory->define(App\Models\Contact::class, function (Faker\Generator $faker, $params) {
    $state = \App\Models\State::take(200)->get()->random();
    $company_id = getRandCompanyId($params);
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'phone' => $faker->phoneNumber,
        'street_address' => $faker->address,
        'email' => $faker->email,
        'country_id' => $state->country_id,
        'state_id' => $state->id,
        'postal_code' => $faker->postcode,
        'company_id' => $company_id,
        'salutation_id' => null,
        'lead_id' => relation(new \App\Models\Lead(), $company_id),
        'position_id' => relation(new \App\Models\ContactPosition(), $company_id),
        'counterparty_id' => relation(new \App\Models\Counterparties(), $company_id),
        'created_at' => randomCreatedAt($faker),
        'updated_at' => randomUpdatedAt($faker),
    ];
});

$factory->define(App\Models\Admin::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt('test'),
        'status' => rand(0, 1),
    ];
});

$factory->define(App\Models\ContactPosition::class, function (Faker\Generator $faker, $params) {
    return [
        'company_id' => getRandCompanyId($params),
    ];
});

$factory->define(App\Models\IssueType::class, function (Faker\Generator $faker, $params) {
    return [
        'title' => $faker->unique()->randomElement(['Event', 'Task', 'Call', 'Meeting', 'EventTest', 'TaskTest', 'CallTest', 'MeetingTest']),
        'company_id' => getRandCompanyId($params),
    ];
});

$factory->define(App\Models\IssueStatus::class, function (Faker\Generator $faker, $params) {
    return [
        'title' => $faker->randomElement(['Draft', 'New', 'In Progress', 'Resolved', 'Feedback', 'Rejected', 'Done', 'Closed']),
        'company_id' => getRandCompanyId($params),
    ];
});

$factory->define(App\Models\Issue::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'title' => $faker->sentence,
        'description' => $faker->sentence,
        'start' => randomCreatedAt($faker),
        'end' => randomUpdatedAt($faker),
        'project_id' => relation(new \App\Models\Project(), $company_id),
    ];
});

$factory->define(App\Models\Currency::class, function (Faker\Generator $faker) {
    return [
    ];
});


$factory->define(App\Models\Counterparties::class, function (Faker\Generator $faker, $params) {
    $state = \App\Models\State::all()->random();
    $company_id = getRandCompanyId($params);

    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->email,
        'address' => $faker->address,
        'country_id' => $state->country_id,
        'state_id' => $state->id,
        'postal_code' => $faker->postcode,
        'phone' => $faker->phoneNumber,
        'company_id' => $company_id,
        'type_id' => rand(1, 3),
        'auth_id' => rand(0, 1) ? 3 : 0,
        'group_id' => relation(new \App\Models\CounterpartyGroup(), $company_id),
        'active_tax' => rand(0, 1),
        'created_at' => randomCreatedAt($faker),
        'updated_at' => randomUpdatedAt($faker),
    ];
});

$factory->define(App\Models\Department::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'user_id' => relation(new \App\Models\User, $company_id),
        'company_id' => $company_id,
    ];
});

$factory->define(App\Models\Invoice::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'title' => 'Invoice ' . $faker->uuid,
        'description' => $faker->sentence,
        'status_id' => relation(new App\Models\InvoiceStatus, $company_id),
        'user_id' => relation(new \App\Models\User, $company_id),
        'comment' => $faker->sentence,
        'order_id' => relation(new \App\Models\Orders(), $company_id),
        'quote_id' => relation(new \App\Models\Quote(), $company_id),
        'invoice_no' => 'Invoice' . $faker->uuid,
        'sent_at' => $faker->dateTime,
        'paid_at' => $faker->dateTime,
        'due_at' => $faker->dateTime,
        'currency_id' => relation(new \App\Models\Currency),
        'counterparty_id' => relation(new \App\Models\Counterparties(), $company_id),
        'company_id' => $company_id,
        'template_id' => relation(new \App\Models\EmailTemplate()),
    ];
});

$factory->define(App\Models\InvoiceProducts::class, function (Faker\Generator $faker) {
    $price = $faker->randomFloat();
    $quantity = $faker->randomNumber();
    return [
        'quantity' => $quantity,
        'price' => $price,
        'unit_id' => relation(new App\Models\MeasureUnit()),
        'total' => $price * $quantity,
    ];
});

$factory->define(App\Models\InvoiceStatus::class, function (Faker\Generator $faker, $params) {
    return [
        'company_id' => getRandCompanyId($params),
    ];
});

$factory->define(App\Models\Lead::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'status_id' => relation(new App\Models\LeadStatus, $company_id),
        'amount' => $faker->randomFloat(2, 0, 100000),
        'currency_id' => relation(new \App\Models\Currency),
        'user_id' => relation(new App\Models\User, $company_id),
        'company_id' => $company_id,
        'counterparty_id' => relation(new App\Models\Counterparties(), $company_id),
    ];
});

$factory->define(App\Models\LeadProducts::class, function (Faker\Generator $faker) {
    $price = $faker->randomFloat();
    $quantity = $faker->randomNumber();
    return [
        'quantity' => $quantity,
        'price' => $price,
        'unit_id' => relation(new App\Models\MeasureUnit()),
        'total' => $price * $quantity,
    ];
});

$factory->define(App\Models\LeadStatus::class, function (Faker\Generator $faker, $params) {
    return [
        'company_id' => getRandCompanyId($params),
    ];
});

$factory->define(App\Models\MeasureUnit::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Models\Orders::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'title' => 'Order ' . $faker->word,
        'description' => $faker->sentence,
        'order_no' => 'Order' . $faker->uuid,
        'amount' => $faker->randomNumber(),
        'status_id' => relation(new App\Models\OrdersStatus, $company_id),
        'currency_id' => relation(new \App\Models\Currency),
        'quote' => 0,
        'quote_id' => relation(new App\Models\Quote(), $company_id),
        'counterparty_id' => relation(new App\Models\Counterparties(), $company_id),
        'type_id' => relation(new App\Models\OrdersType(), $company_id),
        'company_id' => $company_id,
        'created_at' => randomCreatedAt($faker),
        'updated_at' => randomUpdatedAt($faker),
    ];
});

$factory->define(App\Models\OrdersProducts::class, function (Faker\Generator $faker) {
    $price = $faker->randomFloat();
    $quantity = $faker->randomNumber();
    return [
        'quantity' => $quantity,
        'price' => $price,
        'unit_id' => relation(new App\Models\MeasureUnit()),
        'total' => $price * $quantity,
    ];
});

$factory->define(App\Models\OrdersStatus::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
    ];
});

$factory->define(App\Models\OrdersType::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
    ];
});

$factory->define(App\Models\ProductCategory::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
        'parent' => null,
        'tax_rate' => $faker->randomElement([20.00, 8.00, 22.00]),
    ];
});

$factory->define(App\Models\ProductCategory::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
        'parent' => null,
        'tax_rate' => $faker->randomElement([20.00, 8.00, 22.00]),
    ];
});

$factory->define(App\Models\Unit::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
        'user_id' => relation(new \App\Models\User(), $company_id),
        'type_id' => relation(new \App\Models\UnitType()),
    ];
});

$factory->define(App\Models\UnitType::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Models\Products::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'unit_id' => relation(new \App\Models\Unit(), $company_id),
        'status_id' => relation(new \App\Models\ProductStatus(), $company_id),
        'price' => $faker->randomFloat(),
        'category_id' => relation(new \App\Models\ProductCategory(), $company_id),
        'preview_image' => null,
        'full_image' => null,
        'active' => $faker->boolean,
        'company_id' => $company_id,
        'tax_included' => $faker->boolean,
        'tax_rate' => $faker->randomElement([20.00, 8.00, 22.00]),
        'in_stock' => $faker->boolean,
    ];
});

$factory->define(App\Models\Project::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'name' => 'Project ' . $faker->word,
        'description' => $faker->text,
        'start_time' => $faker->dateTimeBetween(),
        'deadline' => $faker->dateTimeBetween(),
        'estimation' => $faker->randomNumber(),
        'estimation_unit' => $faker->randomElement(['Minutes', 'Days', 'Weeks', 'Months', 'Years']),
        'is_important' => $faker->boolean,
        'is_finished' => $faker->boolean,
        'creator_id' => relation(new \App\Models\User(), $company_id),
        'project_manager_id' => relation(new \App\Models\User, $company_id),
        'company_id' => $company_id,
    ];
});

$factory->define(App\Models\RegisterTokens::class, function (Faker\Generator $faker) {
    return [
        'token' => $faker->word,
        'company' => relation(new App\Models\Company),
        'department' => relation(new \App\Models\Department),
    ];
});

$factory->define(App\Models\RoomGuest::class, function (Faker\Generator $faker) {
    return [
    ];
});

$factory->define(App\Models\Rooms::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'status' => 1,
        'administrator' => relation(new App\Models\User),
        'company_id' => relation(new App\Models\Company),
        'public' => 0,
    ];
});

$factory->define(App\Models\RoomSettings::class, function (Faker\Generator $faker) {
    return [
        'room_id' => relation(new App\Models\Rooms),
        'remove_message' => $faker->randomNumber(),
    ];
});

$factory->define(App\Models\RoomSmileys::class, function (Faker\Generator $faker) {
    return [
        'code' => $faker->word,
        'file' => $faker->word,
        'addBy' => relation(new App\Models\User),
        'company_id' => relation(new App\Models\Company),
        'is_default' => 0,
    ];
});

$factory->define(App\Models\TelegramBot::class, function (Faker\Generator $faker) {
    return [
        'code' => $faker->word,
        'file' => $faker->word,
        'add_by' => relation(new \App\Models\User),
        'company_id' => relation(new App\Models\Company),
        'default' => $faker->randomNumber(),
    ];
});

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->safeEmail,
        'password' => bcrypt($faker->password),
        'status' => $faker->randomNumber(),
        'company_id' => relation(new App\Models\Company),
        'is_admin' => 0,
        'locked' => $faker->boolean,
        'confirmed' => $faker->boolean,
    ];
});

$factory->define(App\Models\ProductStatus::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
    ];
});

$factory->define(App\Models\CounterpartyGroup::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
        'title' => $faker->word,
        'active_tax' => $faker->boolean,
    ];
});

$factory->define(App\Models\Visitor::class, function (Faker\Generator $faker) {
    return [
        'ip' => $faker->ipv4,
        'domain' => $faker->word,
        'first_page' => $faker->word,
        'visits' => $faker->randomNumber(),
        'country' => $faker->country,
        'city' => $faker->city,
        'region' => $faker->word,
        'language' => $faker->languageCode,
        'browser' => $faker->userAgent,
        'browser_version' => $faker->chrome,
        'os' => $faker->word,
        'os_version' => $faker->word,
        'mobile' => 0,
        'fingerprint' => $faker->word,
        'cookie_enabled' => 1,
    ];
});

$factory->define(App\Models\ChatRoom::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'title' => 'Chat Room ' . $faker->uuid,
        'user_id' => relation(new \App\Models\User(), $company_id),
        'department_id' => $faker->boolean ? relation(new \App\Models\Department(), $company_id) : null,
        'company_id' => $company_id,
        'is_public' => $faker->boolean,
        'is_encrypted' => $faker->boolean,
        'is_active' => $faker->boolean,
        'created_at' => randomUpdatedAt($faker),
        'updated_at' => randomCreatedAt($faker),
    ];
});

$factory->define(App\Models\CompanyCurrency::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
        'currency_id' => relation(new \App\Models\Currency()),
    ];
});

$factory->define(App\Models\CompanyLanguage::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
        'language_id' => relation(new \App\Models\Language()),
    ];
});

$factory->define(App\Models\CompanyRate::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
        'rate_id' => relation(new \App\Models\Rate()),
    ];
});

$factory->define(App\Models\Rate::class, function (Faker\Generator $faker, $params) {
    return [
        'tax_rate' => $faker->randomFloat(2, 0.2, 1000),
        'amount' => $faker->randomElement([1, 10, 100, 1000]),
        'main_currency_id' => relation(new \App\Models\Currency()),
        'second_currency_id' => relation(new \App\Models\Currency()),
    ];
});

$factory->define(App\Models\Contract::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
        'title' => 'Contract title ' . $faker->uuid,
        'total_price' => $faker->randomFloat(2, 100, 5000),
        'start_date' => randomCreatedAt($faker),
        'end_date' => randomUpdatedAt($faker),
        'active' => $faker->boolean,
        'counterparty_id' => relation(new \App\Models\Counterparties(), $company_id),
        'currency_id' => relation(new \App\Models\Currency()),
        'invoice_id' => relation(new \App\Models\Invoice(), $company_id),
        'order_id' => relation(new \App\Models\Orders(), $company_id),
        'quote_id' => relation(new \App\Models\Quote(), $company_id),
        'type_id' => relation(new \App\Models\ContractType(), $company_id),
        'user_id' => relation(new \App\Models\User(), $company_id),
    ];
});

$factory->define(App\Models\Quote::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
        'title' => 'Quote ' . $faker->uuid,
        'amount' => $faker->randomFloat(2, 100, 5000),
        'status_id' => relation(new \App\Models\QuoteStatus(), $company_id),
        'currency_id' => relation(new \App\Models\Currency()),
        'user_id' => relation(new \App\Models\User(), $company_id),
        'due_at' => $faker->dateTime,
        'available_all' => $faker->boolean,
        'counterparty_id' => relation(new \App\Models\Counterparties(), $company_id),
        'content' => $faker->sentence,
        'conditions' => $faker->sentence,
        'comment' => $faker->sentence,
    ];
});

$factory->define(App\Models\QuoteStatus::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
    ];
});

$factory->define(App\Models\EmailTemplate::class, function (Faker\Generator $faker, $params) {
    return [
        'template' => $faker->randomHtml(),
    ];
});

$factory->define(App\Models\ContractType::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
    ];
});

$factory->define(App\Models\DepartmentContent::class, function (Faker\Generator $faker, $params) {
    $language_id = isset($params['language_id']) ? $params['language_id'] : 1;


    $faker = Faker\Factory::create(getLocale($language_id));

    return [
        'department_id' => relation(new \App\Models\Department()),
        'language_id' => $language_id,
        'title' => $faker->firstName.' Department',
    ];
});


$factory->define(App\Models\Board::class, function (Faker\Generator $faker, $params) {

    $company_id = getRandCompanyId($params);

    return [
        'company_id' => $company_id,
        'title' => $faker->firstName.' '.'Board',
        'team_id' => relation(new \App\Models\Team(), $company_id),//$faker->boolean ? relation(new \App\Models\Team(), $company_id) : null,
        'background' => 'red',
        'visibility_id' => 0,//realation(new Visibility()),
    ];
});

$factory->define(App\Models\Team::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'company_id' => $company_id,
        'title' => $faker->firstName.' '.'Team',
        'user_id' => relation(new \App\Models\User(), $company_id),
    ];
});

$factory->define(App\Models\TeamMembers::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'team_id' =>relation(new \App\Models\Team(), $company_id),
        'user_id' => relation(new \App\Models\User(), $company_id),
    ];
});

$factory->define(App\Models\BoardLabels::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'title' => $faker->randomElement(['Bug', 'Feature', 'Improvement', 'Story', 'Important', 'Blocking', 'Test 1', 'Test 2']).' Label',
        'color_id' => relation(new \App\Models\Color()),
        'board_id' => relation(new \App\Models\Board(), $company_id),
    ];
});

$factory->define(App\Models\Color::class, function (Faker\Generator $faker) {
    return [
        'color' => $faker->hexColor,
    ];
});

$factory->define(App\Models\PmList::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'board_id' => relation(new \App\Models\Board(), $company_id),
        'title' => $faker->unique()->randomElement(['Backlog', 'To Do', 'In Progress', 'In Testing', 'Done', 'test1 list', 'tes2 list']),
    ];
});

$factory->define(App\Models\Task::class, function (Faker\Generator $faker, $params) {
    $company_id = isset($params['company_id']) ? $params['company_id'] : $faker->randomElement([1,2,3]);
    $board_id = relation(new \App\Models\Board(), $company_id);

    return [
        'title' => 'Task '.implode(' ', $faker->words),
        'description' => $faker->sentence,
        'due_date' => $faker->dateTimeBetween('now', '+2 years'),
        'user_id' => relation(new \App\Models\User(), $company_id),
        'company_id' => $company_id,
        'background' => 'blue',
        'attachment_id' => null,
        'list_id' => \App\Models\PmList::where('board_id', $board_id)->pluck('id')->random(),
        'priority' => $faker->numberBetween(200, 10000),
    ];
});

$factory->define(App\Models\TaskComment::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'text' => $faker->sentence,
        'parent_id' => null,
        'task_id' => relation(new \App\Models\Task(), $company_id),
        'user_id' => relation(new \App\Models\User(), $company_id),
        'created_at' => randomCreatedAt($faker),
        'updated_at' => randomUpdatedAt($faker),
    ];
});

$factory->define(App\Models\TaskChecklist::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'title' => 'Checklist - '.$faker->word,
        'task_id' => isset($params['task_id']) ? $params['task_id'] : relation(new \App\Models\Task(), $company_id),
    ];
});

$factory->define(App\Models\TaskUser::class, function (Faker\Generator $faker, $params) {
    $company_id = getRandCompanyId($params);
    return [
        'user_id' => relation(new \App\Models\User(), $company_id),
        'task_id' => relation(new \App\Models\Task(), $company_id),
    ];
});

$factory->define(App\Models\ChecklistItem::class, function (Faker\Generator $faker) {
    return [
        'content' => 'To do - '. implode(' ',$faker->words(5)),
        'is_done' => $faker->boolean,
        'checklist_id' => relation(new \App\Models\TaskChecklist()),
        'priority' => $faker->numberBetween(100, 10000),
    ];
});


