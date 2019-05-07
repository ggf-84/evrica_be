<?php

use Illuminate\Database\Seeder;

class FrontWindowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('front_windows')->truncate();

        \DB::table('front_windows')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'group_id' => 0,
                    'identifier' => 'test_window_3_15',
                    'name' => 'test_window',
                    'min_width' => 3,
                    'max_width' => 15,
                    'min_height' => NULL,
                    'max_height' => NULL,
                    'metadata' => '{"root":{"data-source":"/query_builder/Contact", "preload":true}}',
                    'edited_metadata' => NULL,
                    'publish' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2017-11-15 11:05:36',
                    'updated_at' => '2017-11-15 16:30:05',
                ),
            1 =>
                array(
                    'id' => 2,
                    'group_id' => 0,
                    'identifier' => 'list_users_3_15',
                    'name' => 'list_users',
                    'min_width' => 3,
                    'max_width' => 15,
                    'min_height' => NULL,
                    'max_height' => NULL,
                    'metadata' => '{"root":{"data-source":"/query_builder/User", "preload":true}}',
                    'edited_metadata' => NULL,
                    'publish' => 0,
                    'deleted_at' => NULL,
                    'created_at' => '2017-11-15 11:05:36',
                    'updated_at' => '2017-11-15 16:30:05',
                ),
            2 =>
                array(
                    'id' => 3,
                    'group_id' => 1,
                    'identifier' => 'entityList_IOS.json-1_667_375',
                    'name' => 'listquotes_test',
                    'min_width' => 100,
                    'max_width' => 100,
                    'min_height' => 100,
                    'max_height' => 100,
                    'metadata' => '{
"listquotes": {
"title": "List Quotes",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new quote!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newquote"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"quotes"
]
},
"children": {
"quotes": {
"type": "entitylist",
"entity": "quotes",
"data-source": {
"quotes": "quotes?_with=currency,user,counterparty,status,products"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "Quote $title : $amount $currency.sign : $status.i18n.title",
"class": "header",
"icon":"Quotes_Icons",
"action": {
"type": "nav",
"linktype": "window",
"link": "editquote?id=$id"
}
},
"title",
"available_all",
"status",
{
"value": "$amount $currency.sign",
"description": "Amount"
},
"user",
"counterparty"
]
}
}
}
}
}
}',
                    'edited_metadata' => '{
"listquotes": {
"title": "List Quotes",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new quote!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newquote"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"quotes"
]
},
"children": {
"quotes": {
"type": "entitylist",
"entity": "quotes",
"data-source": {
"quotes": "quotes?_with=currency,user,counterparty,status,products"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "Quote $title : $amount $currency.sign : $status.i18n.title",
"class": "header",
"icon":"Quotes_Icons",
"action": {
"type": "nav",
"linktype": "window",
"link": "editquote?id=$id"
}
},
"title",
"available_all",
"status",
{
"value": "$amount $currency.sign",
"description": "Amount"
},
"user",
"counterparty"
]
}
}
}
}
}
}',
                    'publish' => 0,
                    'deleted_at' => '2018-02-08 14:44:31',
                    'created_at' => '2017-11-15 11:05:36',
                    'updated_at' => '2017-11-15 16:30:05',
                ),
            3 =>
                array(
                    'id' => 4,
                    'group_id' => 2,
                    'identifier' => 'main-2_400_800',
                    'name' => 'main',
                    'min_width' => 400,
                    'max_width' => 800,
                    'min_height' => NULL,
                    'max_height' => NULL,
                    'metadata' => '{
"main": {
"title": "Main",
"menus": {
"m2": {
"type":"mainmenu",
"combine":"merge",
"items": [
{
"title":"{{Quotes}}",
"items":[
{"title":"New order", "action":{"type":"nav","linktype":"window","link":"neworder"}},
{"title":"List Quotes", "action":{"type":"nav","linktype":"window","link":"listorders"}}
]
},
{
"title":"{{Invoices}}",
"items":[
{"title":"New invoice", "action":{}},
{"title":"List invoices", "action":{}}
]
}
]
}
},
"elements": {
"root": {
"width":"100%",
"height":"auto",
"layout": {
"type":"VerticalList"
},
"children": {
"reportlabel": {
"type":"label",
"class":"h1",
"value":"Welcome to UI sandbox"
},
"reportlabel2": {
"type":"label",
"class":"h2",
"value":"Click Main->Quotes->List Quotes"
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2017-11-15 11:05:36',
                    'updated_at' => '2017-11-15 16:30:05',
                ),
            4 =>
                array(
                    'id' => 5,
                    'group_id' => 1,
                    'identifier' => 'main-1_375_667',
                    'name' => 'editquote_test_table',
                    'min_width' => 100,
                    'max_width' => 1000,
                    'min_height' => 100,
                    'max_height' => 1000,
                    'metadata' => '{
"editquote": {
"title": "{!!Edit quote!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"company_id_label",
"company_id",
"counterparty_id_label",
"counterparty_id",
"currency_id_label",
"currency_id",
"status_id_label",
"status_id",
"user_id_label",
"user_id",
"amount_label",
"amount",
"content_label",
"content",
"conditions_label",
"conditions",
"comment_label",
"comment",
"available_all_label",
"available_all",
"products_label",
"products",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"quotes": "quotes?_with=currency,user,counterparty,status,products,company&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "Title"
},
"title": {
"type": "input",
"field": "quotes.title",
"value": "$quotes.0.title"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "quotes.company",
"value": "$quotes.0.company.id"
},
"counterparty_id_label": {
"type": "label",
"value": "Counterparty ID"
},
"counterparty_id": {
"type": "input",
"field": "quotes.counterparty",
"value": "$quotes.0.counterparty.id"
},
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "quotes.currency",
"value": "$quotes.0.currency.id"
},
"status_id_label": {
"type": "label",
"value": "Status ID"
},
"status_id": {
"type": "input",
"field": "quotes.status",
"value": "$quotes.0.status.id"
},
"user_id_label": {
"type": "label",
"value": "User ID"
},
"user_id": {
"type": "input",
"field": "quotes.user",
"value": "$quotes.0.user.id"
},
"amount_label": {
"type": "label",
"value": "Amount"
},
"amount": {
"type": "input",
"field": "quotes.amount",
"value": "$quotes.0.amount"
},
"content_label": {
"type": "label",
"value": "Content"
},
"content": {
"type": "input",
"field": "quotes.content",
"value": "$quotes.0.content"
},
"conditions_label": {
"type": "label",
"value": "Conditions"
},
"conditions": {
"type": "input",
"field": "quotes.conditions",
"value": "$quotes.0.conditions"
},
"comment_label": {
"type": "label",
"value": "Comment"
},
"comment": {
"type": "input",
"field": "quotes.comment",
"value": "$quotes.0.comment"
},
"available_all_label": {
"type": "label",
"value": "Available to all ?"
},
"available_all": {
"type": "input",
"field": "quotes.available_all",
"value": "$quotes.0.available_all"
},
"products_label":{
"type": "label",
"value": "Products"
},
"products":{
"type":"EntityTable",
"entity":"quotes.products"
},

"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "quotes/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listquotes"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "quotes/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listquotes"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => '2018-02-08 14:44:31',
                    'created_at' => '2017-11-15 11:05:36',
                    'updated_at' => '2017-11-15 16:30:05',
                ),
            5 =>
                array(
                    'id' => 7,
                    'group_id' => 19,
                    'identifier' => 'listcurrencies_3_150_150',
                    'name' => 'listcurrencies',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listcurrencies": {
"title": "{!!List currencies!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new currency!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcurrency"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"currency"
]
},
"children": {
"currency": {
"type": "entitylist",
"entity": "currency",
"data-source": {
"currency": "currency?_with=country"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "($prefix) - $sign - $country.code ($country.i18n.title)",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcurrency?id=$id"
}
},
"country"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            6 =>
                array(
                    'id' => 8,
                    'group_id' => 19,
                    'identifier' => 'newcurrency_3_150_150',
                    'name' => 'newcurrency',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newcurrency": {
"title": "{{Create new currency}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"prefix_label",
"prefix",
"sign_label",
"sign",
"suffix_label",
"suffix",
"country_label",
"country_id",
"submit"
]
},
"children": {
"prefix_label": {
"type": "label",
"value": "Currency prefix"
},
"prefix": {
"type": "input",
"field": "currency.prefix"
},
"sign_label": {
"type": "label",
"value": "Currency sign"
},
"sign": {
"type": "input",
"field": "currency.sign"
},
"suffix_label": {
"type": "label",
"value": "Currency suffix"
},
"suffix": {
"type": "input",
"field": "currency.suffix"
},
"country_label": {
"type": "label",
"value": "Currency country"
},
"country_id": {
"type": "input",
"field": "currency.country"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "currency",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcurrency?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            7 =>
                array(
                    'id' => 9,
                    'group_id' => 19,
                    'identifier' => 'editcurrency_3_150_150',
                    'name' => 'editcurrency',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editcurrency": {
"title": "{!!Edit currency!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"prefix_label",
"prefix",
"sign_label",
"sign",
"suffix_label",
"suffix",
"country_label",
"country_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"currency": "currency?_with=country&_filters[]=id-eq=$id"
},
"children": {
"prefix_label": {
"type": "label",
"value": "Currency prefix"
},
"prefix": {
"type": "input",
"field": "currency.prefix",
"value": "$currency.0.prefix"
},
"sign_label": {
"type": "label",
"value": "Currency sign"
},
"sign": {
"type": "input",
"field": "currency.sign",
"value": "$currency.0.sign"
},
"suffix_label": {
"type": "label",
"value": "Currency suffix"
},
"suffix": {
"type": "input",
"field": "currency.suffix",
"value": "$currency.0.suffix"
},
"country_label": {
"type": "label",
"value": "Currency country"
},
"country_id": {
"type": "input",
"field": "currency.country",
"value": "$currency.0.country.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "currency/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcurrencies"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "currency/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcurrencies"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            8 =>
                array(
                    'id' => 10,
                    'group_id' => 19,
                    'identifier' => 'maincurrency_3_150_150',
                    'name' => 'maincurrency',
                    'min_width' => 150,
                    'max_width' => 150,
                    'min_height' => 150,
                    'max_height' => 150,
                    'metadata' => '{
"maincurrency": {
"title": "Main",
"menus": {
"m2": {
"type":"mainmenu",
"combine":"merge",
"items": [
{
"title":"{{Currencies}}",
"items":[
{"title":"New currency", "action":{"type":"nav","linktype":"window","link":"newcurrency"}},
{"title":"List currency", "action":{"type":"nav","linktype":"window","link":"listcurrencies"}}
]
}
]
}
},
"elements": {
"root": {
"width":"100%",
"height":"auto",
"layout": {
"type":"VerticalList"
},
"children": {
"reportlabel": {
"type":"label",
"class":"h1",
"value":"CRM Entity Currency"
},
"reportlabel2": {
"type":"label",
"class":"h2",
"value":"Click Main->Currencies->List Currency"
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            9 =>
                array(
                    'id' => 11,
                    'group_id' => 22,
                    'identifier' => 'listcompanycurrencies_7_150_150',
                    'name' => 'listcompanycurrencies',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listcompanycurrencies": {
"title": "{!!List company currencies!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new company currency!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcompanycurrency"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"companycurrency"
]
},
"children": {
"companycurrency": {
"type": "entitylist",
"entity": "companycurrency",
"data-source": {
"companycurrency": "company/currency?_with=currency,company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$id - $company.street_address - $currency.sign",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcompanycurrency?id=$id"
}
},
{
"value": "$company.title"
}
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            10 =>
                array(
                    'id' => 12,
                    'group_id' => 22,
                    'identifier' => 'newcompanycurrency_7_150_150',
                    'name' => 'newcompanycurrency',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newcompanycurrency": {
"title": "{{Create new company currency}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"currency_id_label",
"currency_id",
"company_id_label",
"company_id",
"submit",
"deletebut"
]
},
"children": {
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "companycurrency.company"
},
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "companycurrency.currency"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "company/currency",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcompanycurrency?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            11 =>
                array(
                    'id' => 13,
                    'group_id' => 22,
                    'identifier' => 'editcompanycurrency_7_150_150',
                    'name' => 'editcompanycurrency',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editcompanycurrency": {
"title": "{!!Edit company currency!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"currency_id_label",
"currency_id",
"company_id_label",
"company_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"currencies": "company/currency?_with=company,currency&_filters[]=id-eq=$id"
},
"children": {
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "companycurrency.currency",
"value": "$currencies.0.currency.id"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "companycurrency.company",
"value": "$currencies.0.company.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "company/currency/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcompanycurrencies"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "company/currency/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcompanycurrencies"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            12 =>
                array(
                    'id' => 14,
                    'group_id' => 22,
                    'identifier' => 'maincompanycurrency_7_150_150',
                    'name' => 'maincompanycurrency',
                    'min_width' => 150,
                    'max_width' => 150,
                    'min_height' => 150,
                    'max_height' => 150,
                    'metadata' => '{
"maincompanycurrency": {
"title": "Main",
"menus": {
"m2": {
"type":"mainmenu",
"combine":"merge",
"items": [
{
"title":"{{Company currencies}}",
"items":[
{"title":"New company currency", "action":{"type":"nav","linktype":"window","link":"newcompanycurrency"}},
{"title":"List company currency", "action":{"type":"nav","linktype":"window","link":"listcompanycurrencies"}}
]
}
]
}
},
"elements": {
"root": {
"width":"100%",
"height":"auto",
"layout": {
"type":"VerticalList"
},
"children": {
"reportlabel": {
"type":"label",
"class":"h1",
"value":"CRM Entity Company Currency"
},
"reportlabel2": {
"type":"label",
"class":"h2",
"value":"Click Main->Company Currencies->List company currency"
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            13 =>
                array(
                    'id' => 15,
                    'group_id' => 24,
                    'identifier' => 'listrates_8_150_150',
                    'name' => 'listrates',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listrates": {
"title": "{!!List rates!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new rate!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newrate"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"rates"
]
},
"children": {
"rates": {
"type": "entitylist",
"entity": "rates",
"data-source": {
"rates": "rates?_with=currencyOne,currencyTwo&_sort=-id"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$tax_rate - $currency_one.sign - $currency_two.sign",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editrate?id=$id"
}
}
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            14 =>
                array(
                    'id' => 16,
                    'group_id' => 24,
                    'identifier' => 'newrate_8_100_100',
                    'name' => 'newrate',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newrate": {
"title": "{{Create new rates}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"tax_rate_label",
"tax_rate",
"main_currency_label",
"main_currency",
"second_currency_label",
"second_currency",
"submit",
"deletebut"
]
},
"children": {
"tax_rate_label": {
"type": "label",
"value": "Tax Rate"
},
"tax_rate": {
"type": "input",
"field": "rates.tax_rate"
},
"main_currency_label": {
"type": "label",
"value": "Main Currency"
},
"main_currency": {
"type": "input",
"field": "rates.main_currency"
},
"second_currency_label": {
"type": "label",
"value": "Second Currency"
},
"second_currency": {
"type": "input",
"field": "rates.second_currency"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "rates",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editrate?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            15 =>
                array(
                    'id' => 17,
                    'group_id' => 24,
                    'identifier' => 'editrate_8_150_150',
                    'name' => 'editrate',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editrate": {
"title": "{!!Edit rate!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"tax_rate_label",
"tax_rate",
"main_currency_label",
"main_currency",
"second_currency_label",
"second_currency",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"rates": "rates?_with=currencyOne,currencyTwo&_filters[]=id-eq=$id"
},
"children": {
"tax_rate_label": {
"type": "label",
"value": "Tax Rate"
},
"tax_rate": {
"type": "input",
"field": "rates.tax_rate",
"value": "$rates.0.tax_rate"
},
"main_currency_label": {
"type": "label",
"value": "Main currency"
},
"main_currency": {
"type": "input",
"field": "rates.main_currency",
"value": "$rates.0.currency_one.id"
},
"second_currency_label": {
"type": "label",
"value": "Second currency"
},
"second_currency": {
"type": "input",
"field": "rates.second_currency",
"value": "$rates.0.currency_two.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "rates/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listrates"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "rates/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listrates"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            16 =>
                array(
                    'id' => 18,
                    'group_id' => 24,
                    'identifier' => 'mainrates_8_150_150',
                    'name' => 'mainrates',
                    'min_width' => 150,
                    'max_width' => 150,
                    'min_height' => 150,
                    'max_height' => 150,
                    'metadata' => '{
"mainrates": {
"title": "Main",
"menus": {
"m2": {
"type": "mainmenu",
"combine": "merge",
"items": [
{
"title": "{{Rates}}",
"items": [
{
"title": "New rate",
"action": {
"type": "nav",
"linktype": "window",
"link": "newrate"
}
},
{
"title": "List rates",
"action": {
"type": "nav",
"linktype": "window",
"link": "listrates"
}
}
]
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList"
},
"children": {
"reportlabel": {
"type": "label",
"class": "h1",
"value": "CRM Entity Rate"
},
"reportlabel2": {
"type": "label",
"class": "h2",
"value": "Click Main->Rates->List Rates"
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            17 =>
                array(
                    'id' => 19,
                    'group_id' => 21,
                    'identifier' => 'listcompanyrates_9_150_150',
                    'name' => 'listcompanyrates',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listcompanyrates": {
"title": "{!!List company rates!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new company rate!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcompanyrate"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"companyrate"
]
},
"children": {
"companyrate": {
"type": "entitylist",
"entity": "companyrate",
"data-source": {
"companyrate": "company/rates?_with=company,rate"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$id - $company.title - $rate.tax_rate",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcompanyrate?id=$id"
}
},
{
"value": "$rate.tax_rate"
},
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            18 =>
                array(
                    'id' => 20,
                    'group_id' => 21,
                    'identifier' => 'newcompanyrate_9_150_150',
                    'name' => 'newcompanyrate',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newcompanyrate": {
"title": "{{Create new company rate}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"rate_id_label",
"rate_id",
"company_id_label",
"company_id",
"submit",
"deletebut"
]
},
"children": {
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "companyrate.company"
},
"rate_id_label": {
"type": "label",
"value": "Rate ID"
},
"rate_id": {
"type": "input",
"field": "companyrate.rate"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "company/rates",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcompanyrate?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            19 =>
                array(
                    'id' => 21,
                    'group_id' => 21,
                    'identifier' => 'editcompanyrate_9_150_150',
                    'name' => 'editcompanyrate',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editcompanyrate": {
"title": "{{Edit company rate}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"rate_id_label",
"rate_id",
"company_id_label",
"company_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"rates": "company/rates?_with=company,rate&_filters[]=id-eq=$id"
},
"children": {
"rate_id_label": {
"type": "label",
"value": "Rate ID"
},
"rate_id": {
"type": "input",
"field": "companyrate.rate",
"value": "$rates.0.rate.id"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "companyrate.company",
"value": "$rates.0.company.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "company/rates/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcompanyrates"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "company/rates/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcompanyrates"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            20 =>
                array(
                    'id' => 22,
                    'group_id' => 21,
                    'identifier' => 'maincompanyrates_9_150_150',
                    'name' => 'maincompanyrates',
                    'min_width' => 150,
                    'max_width' => 150,
                    'min_height' => 150,
                    'max_height' => 150,
                    'metadata' => '{
"maincompanyrates": {
"title": "Main",
"menus": {
"m2": {
"type":"mainmenu",
"combine":"merge",
"items": [
{
"title":"{{Company rates}}",
"items":[
{"title":"New company rates", "action":{"type":"nav","linktype":"window","link":"newcompanyrate"}},
{"title":"List company rates", "action":{"type":"nav","linktype":"window","link":"listcompanyrates"}}
]
}
]
}
},
"elements": {
"root": {
"width":"100%",
"height":"auto",
"layout": {
"type":"VerticalList"
},
"children": {
"reportlabel": {
"type":"label",
"class":"h1",
"value":"CRM Entity Company rates"
},
"reportlabel2": {
"type":"label",
"class":"h2",
"value":"Click Main->Company rates->List company rates"
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            21 =>
                array(
                    'id' => 23,
                    'group_id' => 23,
                    'identifier' => 'listtaxrates_10_150_150',
                    'name' => 'listtaxrates',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listtaxrates": {
"title": "{!!List tax rates!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new tax rate!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newtaxrate"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"taxrates"
]
},
"children": {
"taxrates": {
"type": "entitylist",
"entity": "taxrates",
"data-source": {
"taxrates": "tax/rates?_with=type,country&_sort=-id"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "{{Rate}} $tax_rate {{in}} $country.i18n.title {{for}} $type.i18n.title ",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "edittaxrate?id=$id"
}
},
"country",
"type"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            22 =>
                array(
                    'id' => 25,
                    'group_id' => 23,
                    'identifier' => 'newtaxrate_10_150_150',
                    'name' => 'newtaxrate',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newtaxrate": {
"title": "{{Create new tax rate}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"tax_rate_label",
"tax_rate",
"country_id_label",
"country_id",
"type_id_label",
"type_id",
"submit",
"deletebut"
]
},
"children": {
"tax_rate_label": {
"type": "label",
"value": "Tax rate"
},
"tax_rate": {
"type": "input",
"field": "taxrates.tax_rate"
},
"country_id_label": {
"type": "label",
"value": "Country"
},
"country_id": {
"type": "input",
"field": "taxrates.country"
},
"type_id_label": {
"type": "label",
"value": "Type"
},
"type_id": {
"type": "input",
"field": "taxrates.type"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "tax/rates",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "edittaxrate?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            23 =>
                array(
                    'id' => 26,
                    'group_id' => 23,
                    'identifier' => 'edittaxrate_10_150_150',
                    'name' => 'edittaxrate',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"edittaxrate": {
"title": "{!!Edit tax rate!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"tax_rate_label",
"tax_rate",
"country_id_label",
"country_id",
"type_id_label",
"type_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"taxrate": "tax/rates?_with=type,country&_filters[]=id-eq=$id"
},
"children": {
"tax_rate_label": {
"type": "label",
"value": "Tax Rate"
},
"tax_rate": {
"type": "input",
"field": "taxrates.tax_rate",
"value": "$taxrate.0.tax_rate"
},
"country_id_label": {
"type": "label",
"value": "Country"
},
"country_id": {
"type": "input",
"field": "taxrates.country",
"value": "$taxrate.0.country.id"
},
"type_id_label": {
"type": "label",
"value": "Type"
},
"type_id": {
"type": "input",
"field": "taxrates.type",
"value": "$taxrate.0.type.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "tax/rates/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listtaxrates"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "tax/rates/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listtaxrates"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            24 =>
                array(
                    'id' => 27,
                    'group_id' => 23,
                    'identifier' => 'maintaxrate_10_150_150',
                    'name' => 'maintaxrate',
                    'min_width' => 150,
                    'max_width' => 150,
                    'min_height' => 150,
                    'max_height' => 150,
                    'metadata' => '{
"maintaxrate": {
"title": "Main",
"menus": {
"m2": {
"type":"mainmenu",
"combine":"merge",
"items": [
{
"title":"{{Tax Rates}}",
"items":[
{"title":"New tax rate", "action":{"type":"nav","linktype":"window","link":"newtaxrate"}},
{"title":"List tax rates", "action":{"type":"nav","linktype":"window","link":"listtaxrates"}}
]
}
]
}
},
"elements": {
"root": {
"width":"100%",
"height":"auto",
"layout": {
"type":"VerticalList"
},
"children": {
"reportlabel": {
"type":"label",
"class":"h1",
"value":"CRM Entity Tax Rate"
},
"reportlabel2": {
"type":"label",
"class":"h2",
"value":"Click Main->Tax Rates->List tax rates"
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            25 =>
                array(
                    'id' => 28,
                    'group_id' => 20,
                    'identifier' => 'listtaxrules_12_150_150',
                    'name' => 'listtaxrules',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listtaxrules": {
"title": "{!!List tax rules!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new tax rules!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newtaxrule"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"taxrules"
]
},
"children": {
"taxrules": {
"type": "entitylist",
"entity": "taxrules",
"data-source": {
"taxrules": "tax/rules?_with=country,company,category"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "{{Rate}} $tax_rate {{for}} $country.i18n.title {{for company}} $company.title {{at product category}} $category.i18n.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "edittaxrule?id=$id"
}
},
"country",
"company",
"category"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            26 =>
                array(
                    'id' => 29,
                    'group_id' => 20,
                    'identifier' => 'newtaxrule_12_150_150',
                    'name' => 'newtaxrule',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newtaxrule": {
"title": "{{Create new tax rule}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"tax_rate_label",
"tax_rate",
"company_id_label",
"company_id",
"country_id_label",
"country_id",
"product_category_id_label",
"product_category_id",
"submit",
"deletebut"
]
},
"children": {
"tax_rate_label": {
"type": "label",
"value": "Tax Rate"
},
"tax_rate": {
"type": "input",
"field": "taxrules.tax_rate"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "taxrules.company"
},
"country_id_label": {
"type": "label",
"value": "Country ID"
},
"country_id": {
"type": "input",
"field": "taxrules.country"
},
"product_category_id_label": {
"type": "label",
"value": "Category ID"
},
"product_category_id": {
"type": "input",
"field": "taxrules.category"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "tax/rules",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "edittaxrule?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            27 =>
                array(
                    'id' => 30,
                    'group_id' => 20,
                    'identifier' => 'edittaxrule_12_150_150',
                    'name' => 'edittaxrule',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"edittaxrule": {
"title": "{{Edit tax rule}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"tax_rate_label",
"tax_rate",
"company_id_label",
"company_id",
"country_id_label",
"country_id",
"product_category_id_label",
"product_category_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"taxrules": "tax/rules?_with=country,company,category&_filters[]=id-eq=$id"
},
"children": {
"tax_rate_label": {
"type": "label",
"value": "Tax Rate"
},
"tax_rate": {
"type": "input",
"field": "taxrules.tax_rate",
"value": "$taxrules.0.tax_rate"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "taxrules.company",
"value": "$taxrules.0.company.id"
},
"country_id_label": {
"type": "label",
"value": "CountryID"
},
"country_id": {
"type": "input",
"field": "taxrules.country",
"value": "$taxrules.0.country.id"
},
"product_category_id_label": {
"type": "label",
"value": "Category ID"
},
"product_category_id": {
"type": "input",
"field": "taxrules.category",
"value": "$taxrules.0.category.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "tax/rules/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listtaxrules"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "tax/rules/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listtaxrules"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            28 =>
                array(
                    'id' => 31,
                    'group_id' => 20,
                    'identifier' => 'maintaxrule_12_150_150',
                    'name' => 'maintaxrule',
                    'min_width' => 150,
                    'max_width' => 150,
                    'min_height' => 150,
                    'max_height' => 150,
                    'metadata' => '{
"maintaxrule": {
"title": "Main",
"menus": {
"m2": {
"type":"mainmenu",
"combine":"merge",
"items": [
{
"title":"{{Tax rules}}",
"items":[
{"title":"New tax rules", "action":{"type":"nav","linktype":"window","link":"newtaxrule"}},
{"title":"List tax rules", "action":{"type":"nav","linktype":"window","link":"listtaxrules"}}
]
}
]
}
},
"elements": {
"root": {
"width":"100%",
"height":"auto",
"layout": {
"type":"VerticalList"
},
"children": {
"reportlabel": {
"type":"label",
"class":"h1",
"value":"CRM Entity Tax Rule"
},
"reportlabel2": {
"type":"label",
"class":"h2",
"value":"Click Main->Tax rules->List tax rules"
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            29 =>
                array(
                    'id' => 32,
                    'group_id' => 18,
                    'identifier' => 'maincrm_18_150_150',
                    'name' => 'maincrm',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"maincrm": {
"title": "Main CRM",
"menus": {
"m2": {
"type": "mainmenu",
"combine": "merge",
"items": [
{
"title": "CRM",
"items": [
{
"title": "Tax rules",
"items": [
{
"title": "New tax rule",
"action": {
"type": "nav",
"linktype": "window",
"link": "newtaxrule"
}
},
{
"title": "List tax rules",
"action": {
"type": "nav",
"linktype": "window",
"link": "listtaxrules"
}
}
]
},
{
"title": "Company rate",
"items": [
{
"title": "New company rate",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcompanyrate"
}
},
{
"title": "List company rate",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcompanyrates"
}
}
]
},
{
"title": "Quote",
"items": [
{
"title": "New quote",
"action": {
"type": "nav",
"linktype": "window",
"link": "newquote"
}
},
{
"title": "List quotes",
"action": {
"type": "nav",
"linktype": "window",
"link": "listquotes"
}
}
]
},
{
"title": "Company currency",
"items": [
{
"title": "New company currency",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcompanycurrency"
}
},
{
"title": "List company currency",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcompanycurrencies"
}
}
]
},
{
"title": "Tax rate",
"items": [
{
"title": "New tax rate",
"action": {
"type": "nav",
"linktype": "window",
"link": "newtaxrate"
}
},
{
"title": "List tax rates",
"action": {
"type": "nav",
"linktype": "window",
"link": "listtaxrates"
}
}
]
},
{
"title": "Rates",
"items": [
{
"title": "New rate",
"action": {
"type": "nav",
"linktype": "window",
"link": "newrate"
}
},
{
"title": "List rates",
"action": {
"type": "nav",
"linktype": "window",
"link": "listrates"
}
}
]
},
{
"title": "Measure units",
"items": [
{
"title": "New measure unit",
"action": {
"type": "nav",
"linktype": "window",
"link": "newmeasureunit"
}
},
{
"title": "List measure units",
"action": {
"type": "nav",
"linktype": "window",
"link": "listmeasurements"
}
}
]
},
{
"title": "Country",
"items": [
{
"title": "New country",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcountry"
}
},
{
"title": "List countries",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcountries"
}
}
]
},
{
"title": "State",
"items": [
{
"title": "New state",
"action": {
"type": "nav",
"linktype": "window",
"link": "newstate"
}
},
{
"title": "List states",
"action": {
"type": "nav",
"linktype": "window",
"link": "liststates"
}
}
]
},
{
"title": "Contact",
"items": [
{
"title": "New contact",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcontact"
}
},
{
"title": "List contacts",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcontacts"
}
}
]
},
{
"title": "Contract",
"items": [
{
"title": "New contact",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcontract"
}
},
{
"title": "List contracts",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcontracts"
}
}
]
},
{
"title": "Couterparty",
"items": [
{
"title": "New counterparty",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcounterparty"
}
},
{
"title": "List counterparties",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcounterparties"
}
}
]
},
{
"title": "Couterparty groups",
"items": [
{
"title": "New counterparty groups",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcounterpartygroup"
}
},
{
"title": "List counterparty groups",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcounterpartygroups"
}
}
]
},
{
"title": "Products",
"items": [
{
"title": "New product",
"action": {
"type": "nav",
"linktype": "window",
"link": "newproduct"
}
},
{
"title": "List products",
"action": {
"type": "nav",
"linktype": "window",
"link": "listproducts"
}
}
]
},
{
"title": "Products category",
"items": [
{
"title": "New product category",
"action": {
"type": "nav",
"linktype": "window",
"link": "newproductcategory"
}
},
{
"title": "List products category",
"action": {
"type": "nav",
"linktype": "window",
"link": "listproductcategory"
}
}
]
},
{
"title": "Quote status",
"items": [
{
"title": "New quote status",
"action": {
"type": "nav",
"linktype": "window",
"link": "newquotestatus"
}
},
{
"title": "List quote status",
"action": {
"type": "nav",
"linktype": "window",
"link": "listquotestatus"
}
}
]
},
{
"title": "Invoice",
"items": [
{
"title": "New invoice",
"action": {
"type": "nav",
"linktype": "window",
"link": "newinvoice"
}
},
{
"title": "List invoices",
"action": {
"type": "nav",
"linktype": "window",
"link": "listinvoices"
}
}
]
},
{
"title": "Lead",
"items": [
{
"title": "New lead",
"action": {
"type": "nav",
"linktype": "window",
"link": "newlead"
}
},
{
"title": "List leads",
"action": {
"type": "nav",
"linktype": "window",
"link": "listleads"
}
}
]
},
{
"title": "Lead Status",
"items": [
{
"title": "New lead status",
"action": {
"type": "nav",
"linktype": "window",
"link": "newleadstatus"
}
},
{
"title": "List lead status",
"action": {
"type": "nav",
"linktype": "window",
"link": "listleadstatus"
}
}
]
},
{
"title": "Orders",
"items": [
{
"title": "New order",
"action": {
"type": "nav",
"linktype": "window",
"link": "neworder"
}
},
{
"title": "List orders",
"action": {
"type": "nav",
"linktype": "window",
"link": "listorders"
}
}
]
},
{
"title": "Orders status",
"items": [
{
"title": "New order status",
"action": {
"type": "nav",
"linktype": "window",
"link": "neworderstatus"
}
},
{
"title": "List orders status",
"action": {
"type": "nav",
"linktype": "window",
"link": "listorderstatus"
}
}
]
},
{
"title": "Transactions",
"items": [
{
"title": "New transaction",
"action": {
"type": "nav",
"linktype": "window",
"link": "newtransaction"
}
},
{
"title": "List transactions",
"action": {
"type": "nav",
"linktype": "window",
"link": "listtransactions"
}
}
]
},
{
"title": "Currency",
"items": [
{
"title": "New currency",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcurrency"
}
},
{
"title": "List currency",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcurrencies"
}
}
]
}
]
},
{
"title": "Other",
"items": [
{
"title": "Departments",
"items": [
{
"title": "New department",
"action": {
"type": "nav",
"linktype": "window",
"link": "newdepartment"
}
},
{
"title": "List departments",
"action": {
"type": "nav",
"linktype": "window",
"link": "listdepartments"
}
}
]
},
{
"title": "Language",
"items": [
{
"title": "New language",
"action": {
"type": "nav",
"linktype": "window",
"link": "newlanguage"
}
},
{
"title": "List languages",
"action": {
"type": "nav",
"linktype": "window",
"link": "listlanguages"
}
}
]
},
{
"title": "Units",
"items": [
{
"title": "New unit",
"action": {
"type": "nav",
"linktype": "window",
"link": "newunit"
}
},
{
"title": "List Units",
"action": {
"type": "nav",
"linktype": "window",
"link": "listunits"
}
}
]
},
{
"title": "Unit Type",
"items": [
{
"title": "New unit type",
"action": {
"type": "nav",
"linktype": "window",
"link": "newunittype"
}
},
{
"title": "List unit types",
"action": {
"type": "nav",
"linktype": "window",
"link": "listunittypes"
}
}
]
},
{
"title": "Counterparty Balance",
"items": [
{
"title": "New counterparty balance",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcounterpartybalance"
}
},
{
"title": "List counterparty balance",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcounterpartybalance"
}
}
]
},
{
"title": "Invoice Status",
"items": [
{
"title": "New invoice status",
"action": {
"type": "nav",
"linktype": "window",
"link": "newinvoicestatus"
}
},
{
"title": "List invoice status",
"action": {
"type": "nav",
"linktype": "window",
"link": "listinvoicestatus"
}
}
]
},
{
"title": "Contact position",
"items": [
{
"title": "New contact position",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcontactposition"
}
},
{
"title": "List contact position",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcontactposition"
}
}
]
},
{
"title": "Contract type",
"items": [
{
"title": "New contract type",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcontracttypes"
}
},
{
"title": "List contract type",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcontracttype"
}
}
]
},
{
"title": "Domain Records",
"items": [
{
"title": "New domain record",
"action": {
"type": "nav",
"linktype": "window",
"link": "newdomainrecord"
}
},
{
"title": "List domain records",
"action": {
"type": "nav",
"linktype": "window",
"link": "listdomainrecords"
}
}
]
},
{
"title": "Company",
"items": [
{
"title": "New company",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcompany"
}
},
{
"title": "List companies",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcompanies"
}
}
]
},
{
"title": "User",
"items": [
{
"title": "New user",
"action": {
"type": "nav",
"linktype": "window",
"link": "newuser"
}
},
{
"title": "List users",
"action": {
"type": "nav",
"linktype": "window",
"link": "listusers"
}
}
]
},
{
"title": "Counterparty type",
"items": [
{
"title": "New counterparty type",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcounterpartytype"
}
},
{
"title": "List counterparty type",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcounterpartytypes"
}
}
]
},
{
"title": "Company settings",
"items": [
{
"title": "New company settings",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcompanysetting"
}
},
{
"title": "List company settings",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcompanysettings"
}
}
]
},
{
"title": "Email Templates",
"items": [
{
"title": "New email template",
"action": {
"type": "nav",
"linktype": "window",
"link": "newemailtemplate"
}
},
{
"title": "List email templates",
"action": {
"type": "nav",
"linktype": "window",
"link": "listemailtemplates"
}
}
]
},
{
"title": "Error",
"items": [
{
"title": "New error",
"action": {
"type": "nav",
"linktype": "window",
"link": "newerror"
}
},
{
"title": "List errors",
"action": {
"type": "nav",
"linktype": "window",
"link": "listerrors"
}
}
]
},
{
"title": "Payment Gateways",
"items": [
{
"title": "New payment gateway",
"action": {
"type": "nav",
"linktype": "window",
"link": "newpaymentgateway"
}
},
{
"title": "List payment gateways",
"action": {
"type": "nav",
"linktype": "window",
"link": "listpaymentgateways"
}
}
]
}
]
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList"
},
"children": {
"reportlabel": {
"type": "label",
"class": "h3",
"value": "CRM Entities & Other Entities"
},
"reportlabel2": {
"type": "label",
"class": "h4",
"value": "Main > CRM - CRM Entities"
},
"reportlabel3": {
"type": "label",
"class": "h4",
"value": "Main > Other - Other Entities"
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            30 =>
                array(
                    'id' => 33,
                    'group_id' => 25,
                    'identifier' => 'listquotes_3_150_150',
                    'name' => 'listquotes',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listquotes": {
"title": "{!!List Quotes!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new quote!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newquote"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"quotes"
]
},
"children": {
"quotes": {
"type": "entitylist",
"entity": "quotes",
"data-source": {
"quotes": "quotes?_with=currency,user,counterparty,status,products"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "Quote $title : $amount $currency.sign : $status.i18n.title",
"class": "header",
"icon":"Quotes_Icons",
"action": {
"type": "nav",
"linktype": "window",
"link": "editquote?id=$id"
}
},
"title",
"available_all",
"status",
{
"value": "$amount $currency.sign",
"description": "Amount"
},
"user",
"counterparty"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            31 =>
                array(
                    'id' => 34,
                    'group_id' => 25,
                    'identifier' => 'editquote_3_150_150',
                    'name' => 'editquote',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editquote": {
"title": "{!!Edit quote!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"company_id_label",
"company_id",
"counterparty_id_label",
"counterparty_id",
"currency_id_label",
"currency_id",
"status_id_label",
"status_id",
"user_id_label",
"user_id",
"amount_label",
"amount",
"content_label",
"content",
"conditions_label",
"conditions",
"comment_label",
"comment",
"available_all_label",
"available_all",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"quotes": "quotes?_with=currency,user,counterparty,status,products,company&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "Title"
},
"title": {
"type": "input",
"field": "quotes.title",
"value": "$quotes.0.title"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "quotes.company",
"value": "$quotes.0.company.id"
},
"counterparty_id_label": {
"type": "label",
"value": "Counterparty ID"
},
"counterparty_id": {
"type": "input",
"field": "quotes.counterparty",
"value": "$quotes.0.counterparty.id"
},
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "quotes.currency",
"value": "$quotes.0.currency.id"
},
"status_id_label": {
"type": "label",
"value": "Status ID"
},
"status_id": {
"type": "input",
"field": "quotes.status",
"value": "$quotes.0.status.id"
},
"user_id_label": {
"type": "label",
"value": "User ID"
},
"user_id": {
"type": "input",
"field": "quotes.user",
"value": "$quotes.0.user.id"
},
"amount_label": {
"type": "label",
"value": "Amount"
},
"amount": {
"type": "input",
"field": "quotes.amount",
"value": "$quotes.0.amount"
},
"content_label": {
"type": "label",
"value": "Content"
},
"content": {
"type": "input",
"field": "quotes.content",
"value": "$quotes.0.content"
},
"conditions_label": {
"type": "label",
"value": "Conditions"
},
"conditions": {
"type": "input",
"field": "quotes.conditions",
"value": "$quotes.0.conditions"
},
"comment_label": {
"type": "label",
"value": "Comment"
},
"comment": {
"type": "input",
"field": "quotes.comment",
"value": "$quotes.0.comment"
},
"available_all_label": {
"type": "label",
"value": "Available to all ?"
},
"available_all": {
"type": "input",
"field": "quotes.available_all",
"value": "$quotes.0.available_all"
},
"products_label": { 
"type":"label",
"value":"Products"
}, 
"products": { 
"type":"input", 
"field":"quotes.products", 
"value":"$quotes.0.products"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "quotes/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listquotes"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "quotes/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listquotes"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            32 =>
                array(
                    'id' => 35,
                    'group_id' => 25,
                    'identifier' => 'newquote_25_150_150',
                    'name' => 'newquote',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newquote": {
"title": "{{Create new quote}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"company_id_label",
"company_id",
"counterparty_id_label",
"counterparty_id",
"currency_id_label",
"currency_id",
"status_id_label",
"status_id",
"user_id_label",
"user_id",
"amount_label",
"amount",
"content_label",
"content",
"conditions_label",
"conditions",
"comment_label",
"comment",
"available_all_label",
"available_all",
"submit",
"deletebut"
]
},
"children": {
"title_label": {
"type": "label",
"value": "Title"
},
"title": {
"type": "input",
"field": "quotes.title"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "quotes.company"
},
"counterparty_id_label": {
"type": "label",
"value": "Counterparty ID"
},
"counterparty_id": {
"type": "input",
"field": "quotes.counterparty"
},
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "quotes.currency"
},
"status_id_label": {
"type": "label",
"value": "Status ID"
},
"status_id": {
"type": "input",
"field": "quotes.status"
},
"user_id_label": {
"type": "label",
"value": "User ID"
},
"user_id": {
"type": "input",
"field": "quotes.user"
},
"amount_label": {
"type": "label",
"value": "Amount"
},
"amount": {
"type": "input",
"field": "quotes.amount"
},
"content_label": {
"type": "label",
"value": "Content"
},
"content": {
"type": "input",
"field": "quotes.content"
},
"conditions_label": {
"type": "label",
"value": "Conditions"
},
"conditions": {
"type": "input",
"field": "quotes.conditions"
},
"comment_label": {
"type": "label",
"value": "Comment"
},
"comment": {
"type": "input",
"field": "quotes.comment"
},
"available_all_label": {
"type": "label",
"value": "Available to all ?"
},
"available_all": {
"type": "input",
"field": "quotes.available_all"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "quotes",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editquote?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            33 =>
                array(
                    'id' => 36,
                    'group_id' => 27,
                    'identifier' => 'listcountries_3_150_150',
                    'name' => 'listcountries',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listcountries": {
"title": "{!!List countries!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new country!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcountry"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"country"
]
},
"children": {
"country": {
"type": "entitylist",
"entity": "country",
"data-source": {
"country": "countries"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$id - $code - $i18n.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcountry?id=$id"
}
}
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            34 =>
                array(
                    'id' => 37,
                    'group_id' => 27,
                    'identifier' => 'newcountry_27_150_150',
                    'name' => 'newcountry',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newcountry": {
"title": "{{Create new country}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"states_label",
"states",
"description_label",
"description",
"code_label",
"code",
"icon_label",
"icon",
"submit"
]
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "country.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "country.description"
},
"code_label": {
"type": "label",
"value": "code"
},
"code": {
"type": "input",
"field": "country.code"
},
"icon_label": {
"type": "label",
"value": "icon"
},
"icon": {
"type": "input",
"field": "country.icon"
},
"states_label": {
"type": "label",
"value": "states"
},
"states": {
"type": "input",
"field": "country.states"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "countries",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcountry?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            35 =>
                array(
                    'id' => 38,
                    'group_id' => 27,
                    'identifier' => 'editcountry_27_150_150',
                    'name' => 'editcountry',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editcountry": {
"title": "{!!Edit country!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"code_label",
"code",
"icon_label",
"icon",
"states_label",
"states",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"country": "countries?_with=states&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "country.title",
"value": "$country.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "country.description",
"value": "$country.0.i18n.description"
},
"code_label": {
"type": "label",
"value": "code"
},
"code": {
"type": "input",
"field": "country.code",
"value": "$country.0.code"
},
"icon_label": {
"type": "label",
"value": "icon"
},
"icon": {
"type": "input",
"field": "country.icon",
"value": "$country.0.icon"
},
"states_label": {
"type": "label",
"value": "states"
},
"states": {
"type": "input",
"field": "country.states",
"value": "$country.0.states"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "countries/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcountries"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "countries/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcountries"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            36 =>
                array(
                    'id' => 39,
                    'group_id' => 29,
                    'identifier' => 'listmeasurements_3_150_150',
                    'name' => 'listmeasurements',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"listmeasurements": {
"title": "{!!List measurements!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new measurement!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newmeasureunit"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"measureunit"
]
},
"children": {
"country": {
"type": "entitylist",
"entity": "measureunit",
"data-source": {
"measureunit": "measurements"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$id - $i18n.title - ($i18n.sign)",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editmeasureunit?id=$id"
}
}
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            37 =>
                array(
                    'id' => 40,
                    'group_id' => 29,
                    'identifier' => 'editmeasureunit_29_150_150',
                    'name' => 'editmeasureunit',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"editmeasureunit": {
"title": "{{Edit measure unit}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"sign_label",
"sign",
"title_label",
"title",
"description_label",
"description",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"measureunit": "measurements?&_filters[]=id-eq=$id"
},
"children": {
"sign_label": {
"type": "label",
"value": "sign"
},
"sign": {
"type": "input",
"field": "measureunit.sign",
"value": "$measureunit.0.i18n.sign"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "measureunit.title",
"value": "$measureunit.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "measureunit.description",
"value": "$measureunit.0.i18n.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "measurements/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listmeasurements"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "measurements/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listmeasurements"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            38 =>
                array(
                    'id' => 41,
                    'group_id' => 29,
                    'identifier' => 'newmeasureunit_29_150_150',
                    'name' => 'newmeasureunit',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"newmeasureunit": {
"title": "{!!Create new measureunit!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"sign_label",
"sign",
"title_label",
"title",
"description_label",
"description",
"submit",
"deletebut"
]
},
"children": {
"sign_label": {
"type": "label",
"value": "sign"
},
"sign": {
"type": "input",
"field": "measureunit.sign"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "measureunit.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "measureunit.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "measurements",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listmeasurements"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            39 =>
                array(
                    'id' => 42,
                    'group_id' => 28,
                    'identifier' => 'liststates_3_150_150',
                    'name' => 'liststates',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"liststates": {
"title": "{!!List states!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new state!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newstate"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"state"
]
},
"children": {
"country": {
"type": "entitylist",
"entity": "state",
"data-source": {
"state": "states?_with=country"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$id - $code - $i18n.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editstate?id=$id"
}
},
{
"value": "$country.i18n.title",
"description": "Country"
}
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            40 =>
                array(
                    'id' => 43,
                    'group_id' => 28,
                    'identifier' => 'editstate_28_150_150',
                    'name' => 'editstate',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editstate": {
"title": "{!!Edit state!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"code_label",
"code",
"title_label",
"title",
"description_label",
"description",
"icon_label",
"icon",
"country_id_label",
"country_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"state": "states?_with=country&_filters[]=id-eq=$id"
},
"children": {
"code_label": {
"type": "label",
"value": "code"
},
"code": {
"type": "input",
"field": "state.code",
"value": "$state.0.code"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "state.title",
"value": "$state.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "state.description",
"value": "$state.0.i18n.description"
},
"icon_label": {
"type": "label",
"value": "icon"
},
"icon": {
"type": "input",
"field": "state.icon",
"value": "$state.0.icon"
},
"country_id_label": {
"type": "label",
"value": "country id"
},
"country_id": {
"type": "input",
"field": "state.country",
"value": "$state.0.country.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "states/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "liststates"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "states/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "liststates"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            41 =>
                array(
                    'id' => 44,
                    'group_id' => 28,
                    'identifier' => 'newstate_28_150_150',
                    'name' => 'newstate',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"newstate": {
"title": "{!!Create new state!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"code_label",
"code",
"title_label",
"title",
"description_label",
"description",
"icon_label",
"icon",
"country_id_label",
"country_id",
"submit",
"deletebut"
]
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "state.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "state.description"
},
"code_label": {
"type": "label",
"value": "code"
},
"code": {
"type": "input",
"field": "state.code"
},
"icon_label": {
"type": "label",
"value": "icon"
},
"icon": {
"type": "input",
"field": "state.icon"
},
"country_id_label": {
"type": "label",
"value": "country id"
},
"country_id": {
"type": "input",
"field": "state.country"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "states",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editstate?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            42 =>
                array(
                    'id' => 45,
                    'group_id' => 30,
                    'identifier' => 'listcontacts_3_150_150',
                    'name' => 'listcontacts',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"listcontacts": {
"title": "{{List contacts}}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{{Create new contact}}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcontact"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"contact"
]
},
"children": {
"contact": {
"type": "entitylist",
"entity": "contact",

"data-source": {
"contact": "contacts?_with=company,country,state,counterparty,lead,position,salutation"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$firstname - $lastname - $email",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcontact?id=$id"
}
},
"company",
"country",
"state",
"counterparty",
"lead",
"position",
"salutation"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            43 =>
                array(
                    'id' => 46,
                    'group_id' => 30,
                    'identifier' => 'editcontact_30_150_150',
                    'name' => 'editcontact',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"editcontact": {
"title": "{!!Edit contact!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"firstname_label",
"firstname",
"lastname_label",
"lastname",
"phone_label",
"phone",
"email_label",
"email",
"street_address_label",
"street_address",
"country_label",
"country_id",
"lead_label",
"lead_id",
"state_label",
"state_id",
"counterparty_label",
"counterparty_id",
"position_label",
"position_id",
"salutation_label",
"salutation_id",
"company_label",
"company_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"contact": "contacts?_with=company,country,state,counterparty,lead,position,salutation&_filters[]=id-eq=$id"
},
"children": {
"firstname_label": {
"type": "label",
"value": "firstname"
},
"firstname": {
"type": "input",
"field": "contact.firstname",
"value": "$contact.0.firstname"
},
"lastname_label": {
"type": "label",
"value": "lastname"
},
"lastname": {
"type": "input",
"field": "contact.lastname",
"value": "$contact.0.lastname"
},
"phone_label": {
"type": "label",
"value": "phone"
},
"phone": {
"type": "input",
"field": "contact.phone",
"value": "$contact.0.phone"
},
"email_label": {
"type": "label",
"value": "email"
},
"email": {
"type": "input",
"field": "contact.email",
"value": "$contact.0.email"
},
"street_address_label": {
"type": "label",
"value": "street address"
},
"street_address": {
"type": "input",
"field": "contact.street_address",
"value": "$contact.0.street_address"
},
"country_label": {
"type": "label",
"value": "Country"
},
"country_id": {
"type": "input",
"field": "contact.country",
"value": "$contact.0.country.id"
},
"lead_label": {
"type": "label",
"value": "lead"
},
"lead_id": {
"type": "input",
"field": "contact.lead",
"value": "$contact.0.lead.id"
},
"state_label": {
"type": "label",
"value": "state"
},
"state_id": {
"type": "input",
"field": "contact.state",
"value": "$contact.0.state.id"
},
"counterparty_label": {
"type": "label",
"value": "counterparty"
},
"counterparty_id": {
"type": "input",
"field": "contact.counterparty",
"value": "$contact.0.counterparty.id"
},
"position_label": {
"type": "label",
"value": "position"
},
"position_id": {
"type": "input",
"field": "contact.position",
"value": "$contact.0.position.id"
},
"salutation_label": {
"type": "label",
"value": "salutation"
},
"salutation_id": {
"type": "input",
"field": "contact.salutation",
"value": "$contact.0.salutation.id"
},
"company_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "contact.company",
"value": "$contact.0.company.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "contacts/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcontacts"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "contacts/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcontacts"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            44 =>
                array(
                    'id' => 47,
                    'group_id' => 30,
                    'identifier' => 'newcontact_30_150_150',
                    'name' => 'newcontact',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"newcontact": {
"title": "{{Create new contact}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"firstname_label",
"firstname",
"lastname_label",
"lastname",
"phone_label",
"phone",
"email_label",
"email",
"street_address_label",
"street_address",
"country_label",
"country_id",
"lead_label",
"lead_id",
"state_label",
"state_id",
"counterparty_label",
"counterparty_id",
"position_label",
"position_id",
"salutation_label",
"salutation_id",
"company_label",
"company_id",
"submit",
"deletebut"
]
},
"children": {
"firstname_label": {
"type": "label",
"value": "firstname"
},
"firstname": {
"type": "input",
"field": "contact.firstname"
},
"lastname_label": {
"type": "label",
"value": "lastname"
},
"lastname": {
"type": "input",
"field": "contact.lastname"
},
"phone_label": {
"type": "label",
"value": "phone"
},
"phone": {
"type": "input",
"field": "contact.phone"
},
"email_label": {
"type": "label",
"value": "email"
},
"email": {
"type": "input",
"field": "contact.email"
},
"street_address_label": {
"type": "label",
"value": "street address"
},
"street_address": {
"type": "input",
"field": "contact.street_address"
},
"country_label": {
"type": "label",
"value": "Country"
},
"country_id": {
"type": "input",
"field": "contact.country"
},
"lead_label": {
"type": "label",
"value": "lead"
},
"lead_id": {
"type": "input",
"field": "contact.lead"
},
"state_label": {
"type": "label",
"value": "state"
},
"state_id": {
"type": "input",
"field": "contact.state"
},
"counterparty_label": {
"type": "label",
"value": "counterparty"
},
"counterparty_id": {
"type": "input",
"field": "contact.counterparty"
},
"position_label": {
"type": "label",
"value": "position"
},
"position_id": {
"type": "input",
"field": "contact.position"
},
"salutation_label": {
"type": "label",
"value": "salutation"
},
"salutation_id": {
"type": "input",
"field": "contact.salutation"
},
"company_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "contact.company"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "contacts",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcontact?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            45 =>
                array(
                    'id' => 48,
                    'group_id' => 32,
                    'identifier' => 'listcounterparties_3_150_150',
                    'name' => 'listcounterparties',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"listcounterparties": {
"title": "{!!List counterparties!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new counterparty!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcounterparty"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"counterparties"
]
},
"children": {
"counterparties": {
"type": "entitylist",
"entity": "counterparties",
"data-source": {
"counterparties": "counterparties?_with=type,country,state,group,contacts,contracts,company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$firstname - $lastname - $email",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcounterparty?id=$id"
}
},
"type",
"country",
"state",
"group",
"contacts",
"contracts",
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            46 =>
                array(
                    'id' => 49,
                    'group_id' => 32,
                    'identifier' => 'newcounterparty_32_150_150',
                    'name' => 'newcounterparty',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"newcounterparty": {
"title": "{!!Create new counterparty!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"firstname_label",
"firstname",
"lastname_label",
"lastname",
"postal_code_label",
"postal_code",
"phone_label",
"phone",
"email_label",
"email",
"address_label",
"address",
"country_label",
"country_id",
"group_label",
"group_id",
"state_label",
"state_id",
"company_label",
"company_id",
"type_label",
"type_id",
"contracts_label",
"contracts_id",
"contact_label",
"contacts_id",
"submit",
"deletebut"
]
},
"children": {
"firstname_label": {
"type": "label",
"value": "firstname"
},
"firstname": {
"type": "input",
"field": "counterparties.firstname"
},
"lastname_label": {
"type": "label",
"value": "lastname"
},
"lastname": {
"type": "input",
"field": "counterparties.lastname"
},
"postal_code_label": {
"type": "label",
"value": "postal code"
},
"postal_code": {
"type": "input",
"field": "counterparties.postal_code"
},
"phone_label": {
"type": "label",
"value": "phone"
},
"phone": {
"type": "input",
"field": "counterparties.phone"
},
"email_label": {
"type": "label",
"value": "email"
},
"email": {
"type": "input",
"field": "counterparties.email"
},
"address_label": {
"type": "label",
"value": "street address"
},
"address": {
"type": "input",
"field": "counterparties.address"
},
"country_label": {
"type": "label",
"value": "Country"
},
"country_id": {
"type": "input",
"field": "counterparties.country"
},
"group_label": {
"type": "label",
"value": "group"
},
"group_id": {
"type": "input",
"field": "counterparties.group"
},
"state_label": {
"type": "label",
"value": "state"
},
"state_id": {
"type": "input",
"field": "counterparties.state"
},
"company_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "counterparties.company"
},
"type_label": {
"type": "label",
"value": "type"
},
"type_id": {
"type": "input",
"field": "counterparties.type"
},
"contracts_label": {
"type": "label",
"value": "contracts"
},
"contracts_id": {
"type": "input",
"field": "counterparties.contracts"
},
"contact_label": {
"type": "label",
"value": "contacts"
},
"contacts_id": {
"type": "input",
"field": "counterparties.contacts"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "counterparties",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcounterparty?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            47 =>
                array(
                    'id' => 50,
                    'group_id' => 32,
                    'identifier' => 'editcounterparty_32_150_150',
                    'name' => 'editcounterparty',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"editcounterparty": {
"title": "{{Edit counterparty}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"firstname_label",
"firstname",
"lastname_label",
"lastname",
"postal_code_label",
"postal_code",
"phone_label",
"phone",
"email_label",
"email",
"address_label",
"address",
"country_label",
"country_id",
"group_label",
"group_id",
"state_label",
"state_id",
"company_label",
"company_id",
"type_label",
"type_id",
"contracts_label",
"contracts_id",
"contact_label",
"contacts_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"counterparty": "counterparties?_with=type,country,state,group,contacts,contracts,company&_filters[]=id-eq=$id"
},
"children": {
"firstname_label": {
"type": "label",
"value": "firstname"
},
"firstname": {
"type": "input",
"field": "counterparties.firstname",
"value": "$counterparty.0.firstname"
},
"lastname_label": {
"type": "label",
"value": "lastname"
},
"lastname": {
"type": "input",
"field": "counterparties.lastname",
"value": "$counterparty.0.lastname"
},
"postal_code_label": {
"type": "label",
"value": "postal code"
},
"postal_code": {
"type": "input",
"field": "counterparties.postal_code",
"value": "$counterparty.0.postal_code"
},
"phone_label": {
"type": "label",
"value": "phone"
},
"phone": {
"type": "input",
"field": "counterparties.phone",
"value": "$counterparty.0.phone"
},
"email_label": {
"type": "label",
"value": "email"
},
"email": {
"type": "input",
"field": "counterparties.email",
"value": "$counterparty.0.email"
},
"address_label": {
"type": "label",
"value": "street address"
},
"address": {
"type": "input",
"field": "counterparties.address",
"value": "$counterparty.0.address"
},
"country_label": {
"type": "label",
"value": "Country"
},
"country_id": {
"type": "input",
"field": "counterparties.country",
"value": "$counterparty.0.country.id"
},
"group_label": {
"type": "label",
"value": "group"
},
"group_id": {
"type": "input",
"field": "counterparties.group",
"value": "$counterparty.0.group.id"
},
"state_label": {
"type": "label",
"value": "state"
},
"state_id": {
"type": "input",
"field": "counterparties.state",
"value": "$counterparty.0.state.id"
},
"company_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "counterparties.company",
"value": "$counterparty.0.company.id"
},
"type_label": {
"type": "label",
"value": "type"
},
"type_id": {
"type": "input",
"field": "counterparties.type",
"value": "$counterparty.0.type.id"
},
"contracts_label": {
"type": "label",
"value": "contracts"
},
"contracts_id": {
"type": "input",
"field": "counterparties.contracts",
"value": "$counterparty.0.contracts"
},
"contact_label": {
"type": "label",
"value": "contacts"
},
"contacts_id": {
"type": "input",
"field": "counterparties.contacts",
"value": "$counterparty.0.contacts"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "counterparties/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcounterparties"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "counterparties/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcounterparties"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            48 =>
                array(
                    'id' => 51,
                    'group_id' => 31,
                    'identifier' => 'listcontracts_3_150_150',
                    'name' => 'listcontracts',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"listcontracts": {
"title": "{!!List contracts!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new contract!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcontract"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"contract"
]
},
"children": {
"contract": {
"type": "entitylist",
"entity": "contract",
"data-source": {
"contract": "contracts?_with=counterparty,company,order,invoice,quote,type,user,currency"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$title - $total_price $currency.sign",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcontract?id=$id"
}
},
"counterparty",
"company",
"order",
"invoice",
"quote",
"type",
"user",
"currency"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            49 =>
                array(
                    'id' => 52,
                    'group_id' => 31,
                    'identifier' => 'editcontract_31_150_150',
                    'name' => 'editcontract',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"editcontract": {
"title": "{{Edit contract}}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"total_price_label",
"total_price",
"start_date_label",
"start_date",
"end_date_label",
"end_date",
"active_label",
"active",
"company_id_label",
"company_id",
"counterparty_id_label",
"counterparty_id",
"currency_id_label",
"currency_id",
"invoice_id_label",
"invoice_id",
"order_id_label",
"order_id",
"quote_id_label",
"quote_id",
"type_id_label",
"type_id",
"user_id_label",
"user_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"contract": "contracts?_with=counterparty,company,order,invoice,quote,type,user,currency&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "contract.title",
"value": "$contract.0.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "contract.description",
"value": "$contract.0.description"
},
"total_price_label": {
"type": "label",
"value": "price"
},
"total_price": {
"type": "input",
"field": "contract.total_price",
"value": "$contract.0.total_price"
},
"start_date_label": {
"type": "label",
"value": "start date"
},
"start_date": {
"type": "input",
"field": "contract.start_date",
"value": "$contract.0.start_date"
},
"end_date_label": {
"type": "label",
"value": "end date"
},
"end_date": {
"type": "input",
"field": "contract.end_date",
"value": "$contract.0.end_date"
},
"active_label": {
"type": "label",
"value": "active ?"
},
"active": {
"type": "input",
"field": "contract.active",
"value": "$contract.0.active"
},
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "contract.company",
"value": "$contract.0.company.id"
},
"counterparty_id_label": {
"type": "label",
"value": "counterparty"
},
"counterparty_id": {
"type": "input",
"field": "contract.counterparty",
"value": "$contract.0.counterparty.id"
},
"currency_id_label": {
"type": "label",
"value": "currency"
},
"currency_id": {
"type": "input",
"field": "contract.currency",
"value": "$contract.0.currency.id"
},
"invoice_id_label": {
"type": "label",
"value": "invoice"
},
"invoice_id": {
"type": "input",
"field": "contract.invoice",
"value": "$contract.0.invoice.id"
},
"order_id_label": {
"type": "label",
"value": "order"
},
"order_id": {
"type": "input",
"field": "contract.order",
"value": "$contract.0.order.id"
},
"quote_id_label": {
"type": "label",
"value": "quote"
},
"quote_id": {
"type": "input",
"field": "contract.quote",
"value": "$contract.0.quote.id"
},
"type_id_label": {
"type": "label",
"value": "type"
},
"type_id": {
"type": "input",
"field": "contract.type",
"value": "$contract.0.type.id"
},
"user_id_label": {
"type": "label",
"value": "user"
},
"user_id": {
"type": "input",
"field": "contract.user",
"value": "$contract.0.user.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "contracts/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcontracts"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "contracts/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcontracts"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            50 =>
                array(
                    'id' => 53,
                    'group_id' => 31,
                    'identifier' => 'newcontract_31_150_150',
                    'name' => 'newcontract',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"newcontract": {
"title": "{!!Create new contract!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"total_price_label",
"total_price",
"start_date_label",
"start_date",
"end_date_label",
"end_date",
"active_label",
"active",
"company_id_label",
"company_id",
"counterparty_id_label",
"counterparty_id",
"currency_id_label",
"currency_id",
"invoice_id_label",
"invoice_id",
"order_id_label",
"order_id",
"quote_id_label",
"quote_id",
"type_id_label",
"type_id",
"user_id_label",
"user_id",
"submit",
"deletebut"
]
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "contract.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "contract.description"
},
"total_price_label": {
"type": "label",
"value": "price"
},
"total_price": {
"type": "input",
"field": "contract.total_price"
},
"start_date_label": {
"type": "label",
"value": "start date"
},
"start_date": {
"type": "input",
"field": "contract.start_date"
},
"end_date_label": {
"type": "label",
"value": "end date"
},
"end_date": {
"type": "input",
"field": "contract.end_date"
},
"active_label": {
"type": "label",
"value": "active ?"
},
"active": {
"type": "input",
"field": "contract.active"
},
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "contract.company"
},
"counterparty_id_label": {
"type": "label",
"value": "counterparty"
},
"counterparty_id": {
"type": "input",
"field": "contract.counterparty"
},
"currency_id_label": {
"type": "label",
"value": "currency"
},
"currency_id": {
"type": "input",
"field": "contract.currency"
},
"invoice_id_label": {
"type": "label",
"value": "invoice"
},
"invoice_id": {
"type": "input",
"field": "contract.invoice"
},
"order_id_label": {
"type": "label",
"value": "order"
},
"order_id": {
"type": "input",
"field": "contract.order"
},
"quote_id_label": {
"type": "label",
"value": "quote"
},
"quote_id": {
"type": "input",
"field": "contract.quote"
},
"type_id_label": {
"type": "label",
"value": "type"
},
"type_id": {
"type": "input",
"field": "contract.type"
},
"user_id_label": {
"type": "label",
"value": "user"
},
"user_id": {
"type": "input",
"field": "contract.user"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "contracts",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcontract?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            51 =>
                array(
                    'id' => 54,
                    'group_id' => 33,
                    'identifier' => 'listcounterpartygroups_3_150_150',
                    'name' => 'listcounterpartygroups',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"listcounterpartygroups": {
"title": "{!!List counterparty groups!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create counterparty group!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcounterpartygroup"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"counterpartygroup"
]
},
"children": {
"counterpartygroup": {
"type": "entitylist",
"entity": "counterpartygroup",
"data-source": {
"counterpartygroup": "counterparty/groups?_with=company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$title - $id",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcounterpartygroup?id=$id"
}
},
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            52 =>
                array(
                    'id' => 55,
                    'group_id' => 33,
                    'identifier' => 'editcounterpartygroup_33_150_150',
                    'name' => 'editcounterpartygroup',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"editcounterpartygroup": {
"title": "{!!Edit counterparty group!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company",
"active_tax_label",
"active_tax",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"counterpartygroup": "counterparty/groups?_with=company&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "counterpartygroup.title",
"value": "$counterpartygroup.0.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "counterpartygroup.description",
"value": "$counterpartygroup.0.description"
},
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "counterpartygroup.company",
"value": "$counterpartygroup.0.company.id"
},
"active_tax_label": {
"type": "label",
"value": "active tax"
},
"active_tax": {
"type": "input",
"field": "counterpartygroup.active_vat",
"value": "$counterpartygroup.0.active_vat"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "counterparty/groups/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcounterpartygroups"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "counterparty/groups/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcounterpartygroups"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            53 =>
                array(
                    'id' => 56,
                    'group_id' => 33,
                    'identifier' => 'newcounterpartygroup_33_150_150',
                    'name' => 'newcounterpartygroup',
                    'min_width' => 150,
                    'max_width' => 2000,
                    'min_height' => 150,
                    'max_height' => 2000,
                    'metadata' => '{
"newcounterpartygroup": {
"title": "{!!Create new counterparty group!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"active_tax_label",
"active_tax",
"submit",
"deletebut"
]
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "counterpartygroup.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "counterpartygroup.description"
},
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "counterpartygroup.company"
},
"active_tax_label": {
"type": "label",
"value": "active tax"
},
"active_tax": {
"type": "input",
"field": "counterpartygroup.active_vat"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "counterparty/groups",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcounterpartygroup?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            54 =>
                array(
                    'id' => 57,
                    'group_id' => 34,
                    'identifier' => 'listquotestatus_3_100_2000',
                    'name' => 'listquotestatus',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listquotestatus": {
"title": "{!!List quote status!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new quote status!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newquotestatus"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"quotestatus"
]
},
"children": {
"quotestatus": {
"type": "entitylist",
"entity": "quotestatus",
"data-source": {
"quotestatus": "quote/status?_with=company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$id - $company.title , $company.street_address - $i18n.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editquotestatus?id=$id"
}
},
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            55 =>
                array(
                    'id' => 58,
                    'group_id' => 34,
                    'identifier' => 'editquotestatus_34_100_2000',
                    'name' => 'editquotestatus',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editquotestatus": {
"title": "{!!Edit quote status!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"company_id_label",
"company_id",
"title_label",
"title",
"description_label",
"description",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"quotestatus": "quote/status?_with=company&_filters[]=id-eq=$id"
},
"children": {
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "quotestatus.company",
"value": "$quotestatus.0.company.id"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "quotestatus.title",
"value": "$quotestatus.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "quotestatus.description",
"value": "$quotestatus.0.i18n.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "quote/status/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listquotestatus"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "quote/status/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listquotestatus"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            56 =>
                array(
                    'id' => 59,
                    'group_id' => 34,
                    'identifier' => 'newquotestatus_34_100_2000',
                    'name' => 'newquotestatus',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newquotestatus": {
"title": "{!!Create new quote status!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"company_id_label",
"company_id",
"title_label",
"title",
"description_label",
"description",
"submit"
]
},
"children": {
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "quotestatus.company"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "quotestatus.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "quotestatus.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "quote/status",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editquotestatus?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            57 =>
                array(
                    'id' => 60,
                    'group_id' => 35,
                    'identifier' => 'listproducts_3_100_2000',
                    'name' => 'listproducts',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listproducts": {
"title": "{!!List products!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new product!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newproduct"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"product"
]
},
"children": {
"product": {
"type": "entitylist",
"entity": "product",
"data-source": {
"product": "products?_with=unit,category,leads,quotes,company,status"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$unit.i18n.title - $i18n.title $price  ",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editproduct?id=$id"
}
},
"unit",
"category",
"leads",
"quotes",
"company",
"status"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            58 =>
                array(
                    'id' => 61,
                    'group_id' => 35,
                    'identifier' => 'editproduct_35_100_2000',
                    'name' => 'editproduct',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editproduct": {
"title": "{!!Edit product!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"unit_id_label",
"unit_id",
"status_id_label",
"status_id",
"price_label",
"price",
"category_id_label",
"category_id",
"preview_image_label",
"preview_image",
"full_image_label",
"full_image",
"active_label",
"active",
"company_id_label",
"company_id",
"tax_included_label",
"tax_included",
"tax_rate_label",
"tax_rate",
"in_stock_label",
"in_stock",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"product": "products?_with=unit,category,company,leads,quotes,status&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "product.title",
"value": "$product.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "product.description",
"value": "$product.0.i18n.description"
},
"unit_id_label": {
"type": "label",
"value": "unit"
},
"unit_id": {
"type": "input",
"field": "product.unit",
"value": "$product.0.unit.id"
},
"status_id_label": {
"type": "label",
"value": "status"
},
"status_id": {
"type": "input",
"field": "product.status",
"value": "$product.0.status.id"
},
"price_label": {
"type": "label",
"value": "price"
},
"price": {
"type": "input",
"field": "product.price",
"value": "$product.0.price"
},
"category_id_label": {
"type": "label",
"value": "category"
},
"category_id": {
"type": "input",
"field": "product.category",
"value": "$product.0.category.id"
},
"preview_image_label": {
"type": "label",
"value": "preview image"
},
"preview_image": {
"type": "input",
"field": "product.preview_image",
"value": "$product.0.preview_image"
},
"full_image_label": {
"type": "label",
"value": "full image"
},
"full_image": {
"type": "input",
"field": "product.full_image",
"value": "$product.0.full_image"
},
"active_label": {
"type": "label",
"value": "full image"
},
"active": {
"type": "input",
"field": "product.active",
"value": "$product.0.active"
},
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "product.company",
"value": "$product.0.company.id"
},
"tax_included_label": {
"type": "label",
"value": "tax included"
},
"tax_included": {
"type": "input",
"field": "product.tax_included",
"value": "$product.0.tax_included"
},
"tax_rate_label": {
"type": "label",
"value": "tax rate"
},
"tax_rate": {
"type": "input",
"field": "product.tax_rate",
"value": "$product.0.tax_rate"
},
"in_stock_label": {
"type": "label",
"value": "in stock"
},
"in_stock": {
"type": "input",
"field": "product.in_stock",
"value": "$product.0.in_stock"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "products/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listproducts"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "products/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listproducts"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            59 =>
                array(
                    'id' => 62,
                    'group_id' => 35,
                    'identifier' => 'newproduct_35_100_2000',
                    'name' => 'newproduct',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newproduct": {
"title": "{!!Create new product!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"unit_id_label",
"unit_id",
"status_id_label",
"status_id",
"price_label",
"price",
"category_id_label",
"category_id",
"preview_image_label",
"preview_image",
"full_image_label",
"full_image",
"active_label",
"active",
"company_id_label",
"company_id",
"tax_included_label",
"tax_included",
"tax_rate_label",
"tax_rate",
"in_stock_label",
"in_stock",
"submit",
"deletebut"
]
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "product.title",
"value": "$product.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "product.description",
"value": "$product.0.i18n.description"
},
"unit_id_label": {
"type": "label",
"value": "unit"
},
"unit_id": {
"type": "input",
"field": "product.unit"
},
"status_id_label": {
"type": "label",
"value": "status"
},
"status_id": {
"type": "input",
"field": "product.status"
},
"price_label": {
"type": "label",
"value": "price"
},
"price": {
"type": "input",
"field": "product.price"
},
"category_id_label": {
"type": "label",
"value": "category"
},
"category_id": {
"type": "input",
"field": "product.category"
},
"preview_image_label": {
"type": "label",
"value": "preview image"
},
"preview_image": {
"type": "input",
"field": "product.preview_image"
},
"full_image_label": {
"type": "label",
"value": "full image"
},
"full_image": {
"type": "input",
"field": "product.full_image"
},
"active_label": {
"type": "label",
"value": "active"
},
"active": {
"type": "input",
"field": "product.active"
},
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "product.company"
},
"tax_included_label": {
"type": "label",
"value": "tax included"
},
"tax_included": {
"type": "input",
"field": "product.tax_included"
},
"tax_rate_label": {
"type": "label",
"value": "tax rate"
},
"tax_rate": {
"type": "input",
"field": "product.tax_rate"
},
"in_stock_label": {
"type": "label",
"value": "in stock"
},
"in_stock": {
"type": "input",
"field": "product.in_stock"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "products",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editproduct?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            60 =>
                array(
                    'id' => 63,
                    'group_id' => 36,
                    'identifier' => 'listproductcategory_3_100_2000',
                    'name' => 'listproductcategory',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listproductcategory": {
"title": "{!!List product categories!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new product category!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newproductcategory"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"productcategory"
]
},
"children": {
"productcategory": {
"type": "entitylist",
"entity": "productcategory",
"data-source": {
"productcategory": "product/category?_with=company,parent"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$tax_rate  $i18n.title  ",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editproductcategory?id=$id"
}
},
{
"value": "$parent.i18n.title "
},
"company"

]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            61 =>
                array(
                    'id' => 64,
                    'group_id' => 36,
                    'identifier' => 'editproductcategory_36_100_2000',
                    'name' => 'editproductcategory',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editproductcategory": {
"title": "{!!Edit product category!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"parent_id_label",
"parent_id",
"tax_rate_label",
"tax_rate",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"productcategory": "product/category?_with=company,parent&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "productcategory.title",
"value": "$productcategory.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "productcategory.description",
"value": "$productcategory.0.i18n.description"
},
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "productcategory.company",
"value": "$productcategory.0.company.id"
},
"parent_id_label": {
"type": "label",
"value": "parent category"
},
"parent_id": {
"type": "input",
"field": "productcategory.parent",
"value": "$productcategory.0.parent.id"
},
"tax_rate_label": {
"type": "label",
"value": "tax rate"
},
"tax_rate": {
"type": "input",
"field": "productcategory.tax_rate",
"value": "$productcategory.0.tax_rate"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "product/category/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listproductcategory"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "product/category/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listproductcategory"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            62 =>
                array(
                    'id' => 65,
                    'group_id' => 36,
                    'identifier' => 'newproductcategory_36_100_2000',
                    'name' => 'newproductcategory',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newproductcategory": {
"title": "{!!Create new product category!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"parent_id_label",
"parent_id",
"tax_rate_label",
"tax_rate",
"submit",
"deletebut"
]
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "productcategory.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "productcategory.description"
},
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "productcategory.company"
},
"parent_id_label": {
"type": "label",
"value": "parent category"
},
"parent_id": {
"type": "input",
"field": "productcategory.parent"
},
"tax_rate_label": {
"type": "label",
"value": "tax rate"
},
"tax_rate": {
"type": "input",
"field": "productcategory.tax_rate"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "product/category",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editproductcategory?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            63 =>
                array(
                    'id' => 66,
                    'group_id' => 37,
                    'identifier' => 'listinvoices_3_100_2000',
                    'name' => 'listinvoices',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listinvoices": {
"title": "{!!List invoices!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new invoice!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newinvoice"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"invoice"
]
},
"children": {
"invoice": {
"type": "entitylist",
"entity": "invoice",
"data-source": {
"invoice": "invoices?_with=status,user,quote,order,products,company,counterparty,currency"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$invoice_no - $title $currency.sign",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editinvoice?id=$id"
}
},
"status",
"user",
"quote",
"order",
"products",
"company",
"counterparty"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            64 =>
                array(
                    'id' => 67,
                    'group_id' => 37,
                    'identifier' => 'editinvoice_37_100_2000',
                    'name' => 'editinvoice',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editinvoice": {
"title": "{!!Edit invoice!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"status_id_label",
"status_id",
"comment_label",
"comment",
"user_id_label",
"user_id",
"order_id_label",
"order_id",
"quote_id_label",
"quote_id",
"invoice_no_label",
"invoice_no",
"sent_at_label",
"sent_at",
"paid_at_label",
"paid_at",
"currency_id_label",
"currency_id",
"due_at_label",
"due_at",
"counterparty_id_label",
"counterparty_id",
"company_id_label",
"company_id",
"products_label",
"products",
"template_id_label",
"template_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"invoice": "invoices?_with=status,user,quote,order,products,company,counterparty,currency,template&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "invoice.title",
"value": "$invoice.0.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "invoice.description",
"value": "$invoice.0.description"
},
"status_id_label": {
"type": "label",
"value": "Status ID"
},
"status_id": {
"type": "input",
"field": "invoice.status",
"value": "$invoice.0.status.id"
},
"comment_label": {
"type": "label",
"value": "Comment"
},
"comment": {
"type": "input",
"field": "invoice.comment",
"value": "$invoice.0.comment"
},
"user_id_label": {
"type": "label",
"value": "User ID"
},
"user_id": {
"type": "input",
"field": "invoice.user",
"value": "$invoice.0.user.id"
},
"order_id_label": {
"type": "label",
"value": "Order ID"
},
"order_id": {
"type": "input",
"field": "invoice.order",
"value": "$invoice.0.order.id"
},
"quote_id_label": {
"type": "label",
"value": "Quote ID"
},
"quote_id": {
"type": "input",
"field": "invoice.quote",
"value": "$invoice.0.quote.id"
},
"invoice_no_label": {
"type": "label",
"value": "Invoice No"
},
"invoice_no": {
"type": "input",
"field": "invoice.invoice_no",
"value": "$invoice.0.invoice_no"
},
"sent_at_label": {
"type": "label",
"value": "Sent at"
},
"sent_at": {
"type": "input",
"field": "invoice.sent_at",
"value": "$invoice.0.sent_at"
},
"paid_at_label": {
"type": "label",
"value": "Paid at"
},
"paid_at": {
"type": "input",
"field": "invoice.paid_at",
"value": "$invoice.0.paid_at"
},
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "invoice.currency",
"value": "$invoice.0.currency.id"
},
"due_at_label": {
"type": "label",
"value": "Due at"
},
"due_at": {
"type": "input",
"field": "invoice.due_at",
"value": "$invoice.0.due_at"
},
"counterparty_id_label": {
"type": "label",
"value": "CounterpartyID"
},
"counterparty_id": {
"type": "input",
"field": "invoice.counterparty",
"value": "$invoice.0.counterparty.id"
},
"company_id_label": {
"type": "label",
"value": "CompanyID"
},
"company_id": {
"type": "input",
"field": "invoice.company",
"value": "$invoice.0.company.id"
},
"products_label": {
"type": "label",
"value": "Products"
},
"products": {
"type": "input",
"field": "invoice.products",
"value": "$invoice.0.products.id"
},
"template_id_label": {
"type": "label",
"value": "TemplateID"
},
"template_id": {
"type": "input",
"field": "invoice.template",
"value": "$invoice.0.template.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "invoices/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listinvoices"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "invoices/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listinvoices"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            65 =>
                array(
                    'id' => 68,
                    'group_id' => 37,
                    'identifier' => 'newinvoice_37_100_2000',
                    'name' => 'newinvoice',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newinvoice": {
"title": "{!!Create new invoice!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"status_id_label",
"status_id",
"comment_label",
"comment",
"user_id_label",
"user_id",
"order_id_label",
"order_id",
"quote_id_label",
"quote_id",
"invoice_no_label",
"invoice_no",
"sent_at_label",
"sent_at",
"paid_at_label",
"paid_at",
"currency_id_label",
"currency_id",
"due_at_label",
"due_at",
"counterparty_id_label",
"counterparty_id",
"company_id_label",
"company_id",
"template_id_label",
"template_id",
"submit"
]
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "invoice.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "invoice.description"
},
"status_id_label": {
"type": "label",
"value": "Status ID"
},
"status_id": {
"type": "input",
"field": "invoice.status"
},
"comment_label": {
"type": "label",
"value": "Comment"
},
"comment": {
"type": "input",
"field": "invoice.comment"
},
"user_id_label": {
"type": "label",
"value": "User ID"
},
"user_id": {
"type": "input",
"field": "invoice.user"
},
"order_id_label": {
"type": "label",
"value": "Order ID"
},
"order_id": {
"type": "input",
"field": "invoice.order"
},
"quote_id_label": {
"type": "label",
"value": "Quote ID"
},
"quote_id": {
"type": "input",
"field": "invoice.quote"
},
"invoice_no_label": {
"type": "label",
"value": "Invoice No"
},
"invoice_no": {
"type": "input",
"field": "invoice.invoice_no"
},
"sent_at_label": {
"type": "label",
"value": "Sent at"
},
"sent_at": {
"type": "input",
"field": "invoice.sent_at"
},
"paid_at_label": {
"type": "label",
"value": "Paid at"
},
"paid_at": {
"type": "input",
"field": "invoice.paid_at"
},
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "invoice.currency"
},
"due_at_label": {
"type": "label",
"value": "Due at"
},
"due_at": {
"type": "input",
"field": "invoice.due_at"
},
"counterparty_id_label": {
"type": "label",
"value": "CounterpartyID"
},
"counterparty_id": {
"type": "input",
"field": "invoice.counterparty"
},
"company_id_label": {
"type": "label",
"value": "CompanyID"
},
"company_id": {
"type": "input",
"field": "invoice.company"
},
"template_id_label": {
"type": "label",
"value": "TemplateID"
},
"template_id": {
"type": "input",
"field": "invoice.template"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "invoices",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editinvoice?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            66 =>
                array(
                    'id' => 69,
                    'group_id' => 38,
                    'identifier' => 'listleads_38_100_2000',
                    'name' => 'listleads',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listleads": {
"title": "{!!List leads!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new lead!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newlead"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"lead"
]
},
"children": {
"lead": {
"type": "entitylist",
"entity": "lead",
"data-source": {
"lead": "leads?_with=products,status,currency,company,user,counterparty"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$name - $amount $currency.sign",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editlead?id=$id"
}
},
"products",
"status",
"currency",
"company",
"user",
"counterparty"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2018-01-26 23:00:00',
                    'updated_at' => '2018-01-26 23:00:00',
                ),
            67 =>
                array(
                    'id' => 70,
                    'group_id' => 38,
                    'identifier' => 'editlead_38_100_2000',
                    'name' => 'editlead',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editlead": {
"title": "{!!Edit lead!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"name_label",
"name",
"description_label",
"description",
"status_id_label",
"status_id",
"amount_label",
"amount",
"currency_id_label",
"currency_id",
"user_id_label",
"user_id",
"counterparty_id_label",
"counterparty_id",
"company_id_label",
"company_id",
"products_label",
"products",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"lead": "leads?_with=products,status,currency,company,user,counterparty&_filters[]=id-eq=$id"
},
"children": {
"name_label": {
"type": "label",
"value": "name"
},
"name": {
"type": "input",
"field": "lead.name",
"value": "$lead.0.name"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "lead.description",
"value": "$lead.0.description"
},
"amount_label": {
"type": "label",
"value": "Amount"
},
"amount": {
"type": "input",
"field": "lead.amount",
"value": "$lead.0.amount"
},
"status_id_label": {
"type": "label",
"value": "Status ID"
},
"status_id": {
"type": "input",
"field": "lead.status",
"value": "$lead.0.status.id"
},
"user_id_label": {
"type": "label",
"value": "User ID"
},
"user_id": {
"type": "input",
"field": "lead.user",
"value": "$lead.0.user.id"
},
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "lead.currency",
"value": "$lead.0.currency.id"
},
"counterparty_id_label": {
"type": "label",
"value": "Counterparty ID"
},
"counterparty_id": {
"type": "input",
"field": "lead.counterparty",
"value": "$lead.0.counterparty.id"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "lead.company",
"value": "$lead.0.company.id"
},
"products_label": {
"type": "label",
"value": "Products"
},
"products": {
"type": "input",
"field": "lead.products",
"value": "$lead.0.products.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "leads/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listleads"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "leads/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listleads"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            68 =>
                array(
                    'id' => 71,
                    'group_id' => 38,
                    'identifier' => 'newlead_38_100_2000',
                    'name' => 'newlead',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newlead": {
"title": "{!!Create new lead!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"name_label",
"name",
"description_label",
"description",
"status_id_label",
"status_id",
"amount_label",
"amount",
"currency_id_label",
"currency_id",
"user_id_label",
"user_id",
"counterparty_id_label",
"counterparty_id",
"company_id_label",
"company_id",
"submit"
]
},
"children": {
"name_label": {
"type": "label",
"value": "name"
},
"name": {
"type": "input",
"field": "lead.name"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "lead.description"
},
"amount_label": {
"type": "label",
"value": "Amount"
},
"amount": {
"type": "input",
"field": "lead.amount"
},
"status_id_label": {
"type": "label",
"value": "Status ID"
},
"status_id": {
"type": "input",
"field": "lead.status"
},
"user_id_label": {
"type": "label",
"value": "User ID"
},
"user_id": {
"type": "input",
"field": "lead.user"
},
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "lead.currency"
},
"counterparty_id_label": {
"type": "label",
"value": "Counterparty ID"
},
"counterparty_id": {
"type": "input",
"field": "lead.counterparty"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "lead.company"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "leads",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editlead?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            69 =>
                array(
                    'id' => 72,
                    'group_id' => 39,
                    'identifier' => 'listorders_3_100_2000',
                    'name' => 'listorders',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listorders": {
"title": "{!!List orders!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new order!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "neworder"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"order"
]
},
"children": {
"order": {
"type": "entitylist",
"entity": "order",
"data-source": {
"order": "orders?_with=counterparty,company,currency,status,type,products,quote"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$title - $amount $currency.sign",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editorder?id=$id"
}
},
"counterparty",
"company",
"currency",
"status",
"type",
"products",
"quote"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            70 =>
                array(
                    'id' => 73,
                    'group_id' => 39,
                    'identifier' => 'editorder_39_100_2000',
                    'name' => 'editorder',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editorder": {
"title": "{!!Edit order!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"order_no_label",
"order_no",
"amount_label",
"amount",
"status_id_label",
"status_id",
"currency_id_label",
"currency_id",
"quote_label",
"quote",
"quote_id_label",
"quote_id",
"counterparty_id_label",
"counterparty_id",
"company_id_label",
"company_id",
"type_id_label",
"type_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"order": "orders?_with=counterparty,company,currency,status,type,products,quote&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "order.title",
"value": "$order.0.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "order.description",
"value": "$order.0.description"
},
"order_no_label": {
"type": "label",
"value": "order no"
},
"order_no": {
"type": "input",
"field": "order.order_no",
"value": "$order.0.order_no"
},
"amount_label": {
"type": "label",
"value": "amount"
},
"amount": {
"type": "input",
"field": "order.amount",
"value": "$order.0.amount"
},
"status_id_label": {
"type": "label",
"value": "Status ID"
},
"status_id": {
"type": "input",
"field": "order.status",
"value": "$order.0.status.id"
},
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "order.currency",
"value": "$order.0.currency.id"
},
"quote_id_label": {
"type": "label",
"value": "Quote ID"
},
"quote_id": {
"type": "input",
"field": "order.quote",
"value": "$order.0.quote.id"
},
"counterparty_id_label": {
"type": "label",
"value": "Counterparty ID"
},
"counterparty_id": {
"type": "input",
"field": "order.counterparty",
"value": "$order.0.counterparty.id"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "order.company",
"value": "$order.0.company.id"
},
"type_id_label": {
"type": "label",
"value": "Type ID"
},
"type_id": {
"type": "input",
"field": "order.type",
"value": "$order.0.type.id"
},
"products_label": {
"type": "label",
"value": "Products"
},
"products": {
"type": "input",
"field": "order.products",
"value": "$order.0.products"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "orders/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listorders"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "orders/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listorders"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            71 =>
                array(
                    'id' => 74,
                    'group_id' => 39,
                    'identifier' => 'neworder_39_100_2000',
                    'name' => 'neworder',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"neworder": {
"title": "{!!Create new order!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"order_no_label",
"order_no",
"amount_label",
"amount",
"status_id_label",
"status_id",
"currency_id_label",
"currency_id",
"quote_label",
"quote",
"quote_id_label",
"quote_id",
"counterparty_id_label",
"counterparty_id",
"company_id_label",
"company_id",
"type_id_label",
"type_id",
"submit"
]
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "order.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "order.description"
},
"order_no_label": {
"type": "label",
"value": "order no"
},
"order_no": {
"type": "input",
"field": "order.order_no"
},
"amount_label": {
"type": "label",
"value": "amount"
},
"amount": {
"type": "input",
"field": "order.amount"
},
"status_id_label": {
"type": "label",
"value": "Status ID"
},
"status_id": {
"type": "input",
"field": "order.status"
},
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "order.currency"
},

"quote_id_label": {
"type": "label",
"value": "Quote ID"
},
"quote_id": {
"type": "input",
"field": "order.quote"
},
"counterparty_id_label": {
"type": "label",
"value": "Counterparty ID"
},
"counterparty_id": {
"type": "input",
"field": "order.counterparty"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "order.company"
},
"type_id_label": {
"type": "label",
"value": "Type ID"
},
"type_id": {
"type": "input",
"field": "order.type"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "orders",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editorder?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            72 =>
                array(
                    'id' => 75,
                    'group_id' => 40,
                    'identifier' => 'listorderstatus_3_100_2000',
                    'name' => 'listorderstatus',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listorderstatus": {
"title": "{!!List orders status!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new order status!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "neworderstatus"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"orderstatus"
]
},
"children": {
"orderstatus": {
"type": "entitylist",
"entity": "orderstatus",
"data-source": {
"orderstatus": "order/status?_with=company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$i18n.title - $company.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editorderstatus?id=$id"
}
},
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            73 =>
                array(
                    'id' => 76,
                    'group_id' => 40,
                    'identifier' => 'editorderstatus_40_100_2000',
                    'name' => 'editorderstatus',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editorderstatus": {
"title": "{!!Edit order status!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"orderstatus": "order/status?_with=company&_filters[]=id-eq=$id"
},
"children": {
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "orderstatus.company",
"value": "$orderstatus.0.company.id"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "orderstatus.title",
"value": "$orderstatus.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "orderstatus.description",
"value": "$orderstatus.0.i18n.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "order/status/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listorderstatus"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "order/status/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listorderstatus"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            74 =>
                array(
                    'id' => 77,
                    'group_id' => 40,
                    'identifier' => 'neworderstatus_40_100_2000',
                    'name' => 'neworderstatus',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"neworderstatus": {
"title": "{!!Create new order status!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"submit"
]
},
"children": {
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "orderstatus.company"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "orderstatus.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "orderstatus.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "order/status",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editorderstatus?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            75 =>
                array(
                    'id' => 78,
                    'group_id' => 41,
                    'identifier' => 'listtransactions_3_100_2000',
                    'name' => 'listtransactions',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listtransactions": {
"title": "{!!List transactions!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new transaction!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newtransaction"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"transaction"
]
},
"children": {
"transaction": {
"type": "entitylist",
"entity": "transaction",
"data-source": {
"transaction": "transactions?_with=currency,counterparty,gateway,type,status"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$gateway.i18n.title - $type.i18n.title $amount $currency.sign - $status.i18n.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "edittransaction?id=$id"
}
},
"currency",
"counterparty",
"gateway",
"type",
"status"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            76 =>
                array(
                    'id' => 79,
                    'group_id' => 41,
                    'identifier' => 'edittransaction_41_100_2000',
                    'name' => 'edittransaction',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"edittransaction": {
"title": "{!!Edit transaction!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"amount_label",
"amount",
"type_id_label",
"type_id",
"status_id_label",
"status_id",
"counterparty_id_label",
"counterparty_id",
"currency_id_label",
"currency_id",
"withdrawn_label",
"withdrawn",
"gateway_id_label",
"gateway_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"transaction": "transactions?_with=currency,counterparty,gateway,type,status&_filters[]=id-eq=$id"
},
"children": {
"amount_label": {
"type": "label",
"value": "amount"
},
"amount": {
"type": "input",
"field": "transaction.amount",
"value": "$transaction.0.amount"
},
"type_id_label": {
"type": "label",
"value": "Type ID"
},
"type_id": {
"type": "input",
"field": "transaction.type",
"value": "$transaction.0.type.id"
},
"status_id_label": {
"type": "label",
"value": "Status ID"
},
"status_id": {
"type": "input",
"field": "transaction.status",
"value": "$transaction.0.status.id"
},
"counterparty_id_label": {
"type": "label",
"value": "Counterparty ID"
},
"counterparty_id": {
"type": "input",
"field": "transaction.counterparty",
"value": "$transaction.0.counterparty.id"
},
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "transaction.currency",
"value": "$transaction.0.currency.id"
},
"gateway_id_label": {
"type": "label",
"value": "Gateway ID"
},
"gateway_id": {
"type": "input",
"field": "transaction.gateway",
"value": "$transaction.0.gateway.id"
},
"withdrawn_label": {
"type": "label",
"value": "Withdrawn"
},
"withdrawn": {
"type": "input",
"field": "transaction.withdrawn",
"value": "$transaction.0.withdrawn"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "transactions/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listtransactions"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "transactions/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listtransactions"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            77 =>
                array(
                    'id' => 80,
                    'group_id' => 41,
                    'identifier' => 'newtransaction_41_100_2000',
                    'name' => 'newtransaction',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newtransaction": {
"title": "{!!Create new transaction!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"amount_label",
"amount",
"type_id_label",
"type_id",
"status_id_label",
"status_id",
"counterparty_id_label",
"counterparty_id",
"currency_id_label",
"currency_id",
"withdrawn_label",
"withdrawn",
"gateway_id_label",
"gateway_id",
"submit"
]
},
"children": {
"amount_label": {
"type": "label",
"value": "amount"
},
"amount": {
"type": "input",
"field": "transaction.amount"
},
"type_id_label": {
"type": "label",
"value": "Type ID"
},
"type_id": {
"type": "input",
"field": "transaction.type"
},
"status_id_label": {
"type": "label",
"value": "Status ID"
},
"status_id": {
"type": "input",
"field": "transaction.status"
},
"counterparty_id_label": {
"type": "label",
"value": "Counterparty ID"
},
"counterparty_id": {
"type": "input",
"field": "transaction.counterparty"
},
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "transaction.currency"
},
"gateway_id_label": {
"type": "label",
"value": "Gateway ID"
},
"gateway_id": {
"type": "input",
"field": "transaction.gateway"
},
"withdrawn_label": {
"type": "label",
"value": "Withdrawn"
},
"withdrawn": {
"type": "input",
"field": "transaction.withdrawn"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "transactions",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "edittransaction?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            78 =>
                array(
                    'id' => 81,
                    'group_id' => 42,
                    'identifier' => 'listdepartments_3_100_2000',
                    'name' => 'listdepartments',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listdepartments": {
"title": "{!!List departments!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new department!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newdepartment"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"department"
]
},
"children": {
"department": {
"type": "entitylist",
"entity": "department",
"data-source": {
"department": "departments?_with=roles,users,company,user"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$i18n.title - $company.title , $user.firstname $user.lastname",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editdepartment?id=$id"
}
},
"roles",
"users",
"company",
"user"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            79 =>
                array(
                    'id' => 82,
                    'group_id' => 42,
                    'identifier' => 'editdepartment_42_100_2000',
                    'name' => 'editdepartment',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editdepartment": {
"title": "{!!Edit department!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"user_id_label",
"user_id",
"company_id_label",
"company_id",
"roles_label",
"roles",
"users_label",
"users",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"department": "departments?_with=roles,users,company,user&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "department.title",
"value": "$department.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "department.description",
"value": "$department.0.i18n.description"
},
"user_id_label": {
"type": "label",
"value": "user (owner)"
},
"user_id": {
"type": "input",
"field": "department.user",
"value": "$department.0.user.id"
},
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "department.company",
"value": "$department.0.company.id"
},
"roles_label": {
"type": "label",
"value": "roles"
},
"roles": {
"type": "input",
"field": "department.roles",
"value": "$department.0.roles"
},
"users_label": {
"type": "label",
"value": "users"
},
"users": {
"type": "input",
"field": "department.users",
"value": "$department.0.users"
},

"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "departments/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listdepartments"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "departments/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listdepartments"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            80 =>
                array(
                    'id' => 83,
                    'group_id' => 42,
                    'identifier' => 'newdepartment_42_100_2000',
                    'name' => 'newdepartment',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 200,
                    'metadata' => '{
"newdepartment": {
"title": "{!!Create new department!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"user_id_label",
"user_id",
"company_id_label",
"company_id",
"roles_label",
"roles",
"users_label",
"users",
"submit"
]
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "department.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "department.description"
},
"user_id_label": {
"type": "label",
"value": "user (owner)"
},
"user_id": {
"type": "input",
"field": "department.user"
},
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "department.company"
},
"roles_label": {
"type": "label",
"value": "roles"
},
"roles": {
"type": "input",
"field": "department.roles"
},
"users_label": {
"type": "label",
"value": "users"
},
"users": {
"type": "input",
"field": "department.users"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "departments",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editdepartment?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            81 =>
                array(
                    'id' => 84,
                    'group_id' => 45,
                    'identifier' => 'listinvoicestatus_3_100_2000',
                    'name' => 'listinvoicestatus',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listinvoicestatus": {
"title": "{!!List invoice status!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new invoice status!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newinvoicestatus"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"invoicestatus"
]
},
"children": {
"invoicestatus": {
"type": "entitylist",
"entity": "invoicestatus",
"data-source": {
"invoicestatus": "invoice/status?_with=company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$i18n.title - $company.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editinvoicestatus?id=$id"
}
},
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            82 =>
                array(
                    'id' => 85,
                    'group_id' => 45,
                    'identifier' => 'editinvoicestatus_45_100_2000',
                    'name' => 'editinvoicestatus',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editinvoicestatus": {
"title": "{!!Edit invoice status!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"invoicestatus": "invoice/status?_with=company&_filters[]=id-eq=$id"
},
"children": {
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "invoicestatus.company",
"value": "$invoicestatus.0.company.id"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "invoicestatus.title",
"value": "$invoicestatus.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "invoicestatus.description",
"value": "$invoicestatus.0.i18n.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "invoice/status/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listinvoicestatus"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "invoice/status/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listinvoicestatus"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            83 =>
                array(
                    'id' => 86,
                    'group_id' => 45,
                    'identifier' => 'newinvoicestatus_45_100_2000',
                    'name' => 'newinvoicestatus',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newinvoicestatus": {
"title": "{!!Create new invoice status!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"submit"
]
},
"children": {
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "invoicestatus.company"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "invoicestatus.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "invoicestatus.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "invoice/status",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editinvoicestatus?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            84 =>
                array(
                    'id' => 87,
                    'group_id' => 43,
                    'identifier' => 'listunits_3_100_2000',
                    'name' => 'listunits',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listunits": {
"title": "{!!List units!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new unit!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newunit"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"unit"
]
},
"children": {
"unit": {
"type": "entitylist",
"entity": "unit",
"data-source": {
"unit": "units?_with=type,user,users,company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$i18n.title - $type.i18n.title {!!at!!} $company.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editunit?id=$id"
}
},
"type",
"user",
"users",
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            85 =>
                array(
                    'id' => 89,
                    'group_id' => 43,
                    'identifier' => 'editunit_43_100_2000',
                    'name' => 'editunit',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editunit": {
"title": "{!!Edit unit!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"user_id_label",
"user_id",
"company_id_label",
"company_id",
"type_id_label",
"type_id",
"users_label",
"users",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"unit": "units?_with=type,user,users,company&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "Title"
},
"title": {
"type": "input",
"field": "unit.title",
"value": "$unit.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "Description"
},
"description": {
"type": "input",
"field": "unit.description",
"value": "$unit.0.i18n.description"
},
"user_id_label": {
"type": "label",
"value": "User ID"
},
"user_id": {
"type": "input",
"field": "unit.user",
"value": "$unit.0.user.id"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "unit.company",
"value": "$unit.0.company.id"
},
"type_id_label": {
"type": "label",
"value": "Type ID"
},
"type_id": {
"type": "input",
"field": "unit.type",
"value": "$unit.0.type.id"
},
"users_label": {
"type": "label",
"value": "Users"
},
"users": {
"type": "input",
"field": "unit.users",
"value": "$unit.0.users"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "units/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listunits"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "units/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listunits"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            86 =>
                array(
                    'id' => 90,
                    'group_id' => 43,
                    'identifier' => 'newunit_43_100_2000',
                    'name' => 'newunit',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newunit": {
"title": "{!!Create new unit!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"user_id_label",
"user_id",
"company_id_label",
"company_id",
"type_id_label",
"type_id",
"users_label",
"users",
"submit"
]
},
"children": {
"title_label": {
"type": "label",
"value": "Title"
},
"title": {
"type": "input",
"field": "unit.title"
},
"description_label": {
"type": "label",
"value": "Description"
},
"description": {
"type": "input",
"field": "unit.description"
},
"user_id_label": {
"type": "label",
"value": "User ID"
},
"user_id": {
"type": "input",
"field": "unit.user"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "unit.company"
},
"type_id_label": {
"type": "label",
"value": "Type ID"
},
"type_id": {
"type": "input",
"field": "unit.type"
},

"users_label": {
"type": "label",
"value": "Users"
},
"users": {
"type": "input",
"field": "unit.users"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "units",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editunit?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            87 =>
                array(
                    'id' => 91,
                    'group_id' => 44,
                    'identifier' => 'listunittypes_3_100_2000',
                    'name' => 'listunittypes',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listunittypes": {
"title": "{!!List unit types!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new unit type!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newunittype"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"unittype"
]
},
"children": {
"unittype": {
"type": "entitylist",
"entity": "unittype",
"data-source": {
"unittype": "unit/type?_with=units"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$i18n.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editunittype?id=$id"
}
},
"units"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            88 =>
                array(
                    'id' => 92,
                    'group_id' => 44,
                    'identifier' => 'editunittype_44_100_2000',
                    'name' => 'editunittype',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editunittype": {
"title": "{!!Edit unit type!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"unittype": "unit/type?_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "unittype.title",
"value": "$unittype.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "unittype.description",
"value": "$unittype.0.i18n.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "unit/type/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listunittypes"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "unit/type/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listunittypes"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            89 =>
                array(
                    'id' => 93,
                    'group_id' => 44,
                    'identifier' => 'newunittype_44_100_2000',
                    'name' => 'newunittype',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newunittype": {
"title": "{!!Create new unit type!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"submit"
]
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "unittype.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "unittype.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "unit/type",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editunittype?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            90 =>
                array(
                    'id' => 94,
                    'group_id' => 46,
                    'identifier' => 'listpaymentgateways_3_100_2000',
                    'name' => 'listpaymentgateways',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listpaymentgateways": {
"title": "{!!List payment gateways!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new payment gateway!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newpaymentgateway"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"paymentgateway"
]
},
"children": {
"paymentgateway": {
"type": "entitylist",
"entity": "paymentgateway",
"data-source": {
"paymentgateway": "payment/gateways?_with=company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$i18n.title - $company.title ($company.street_address)",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editpaymentgateway?id=$id"
}
},
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            91 =>
                array(
                    'id' => 95,
                    'group_id' => 46,
                    'identifier' => 'editpaymentgateway_46_100_2000',
                    'name' => 'editpaymentgateway',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editpaymentgateway": {
"title": "{!!Edit payment gateway!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description","company_id_label",
"company_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"paymentgateway": "payment/gateways?_with=company&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "paymentgateway.title",
"value": "$paymentgateway.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "paymentgateway.description",
"value": "$paymentgateway.0.i18n.description"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "paymentgateway.company",
"value": "$paymentgateway.0.company.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "payment/gateways/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listpaymentgateways"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "payment/gateways/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listpaymentgateways"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            92 =>
                array(
                    'id' => 96,
                    'group_id' => 46,
                    'identifier' => 'newpaymentgateway_46_100_2000',
                    'name' => 'newpaymentgateway',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newpaymentgateway": {
"title": "{!!Create new payment gateway!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"submit"
]
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "paymentgateway.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "paymentgateway.description"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "paymentgateway.company"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "payment/gateways",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editpaymentgateway?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            93 =>
                array(
                    'id' => 97,
                    'group_id' => 51,
                    'identifier' => 'listleadstatus_3_100_2000',
                    'name' => 'listleadstatus',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listleadstatus": {
"title": "{!!List lead status!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new lead status!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newleadstatus"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"leadstatus"
]
},
"children": {
"leadstatus": {
"type": "entitylist",
"entity": "leadstatus",
"data-source": {
"leadstatus": "lead/status?_with=company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$i18n.title - $company.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editleadstatus?id=$id"
}
},
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            94 =>
                array(
                    'id' => 98,
                    'group_id' => 51,
                    'identifier' => 'editleadstatus_51_100_2000',
                    'name' => 'editleadstatus',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editleadstatus": {
"title": "{!!Edit lead status!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"leadstatus": "lead/status?_with=company&_filters[]=id-eq=$id"
},
"children": {
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "leadstatus.company",
"value": "$leadstatus.0.company.id"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "leadstatus.title",
"value": "$leadstatus.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "leadstatus.description",
"value": "$leadstatus.0.i18n.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "lead/status/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listleadstatus"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "lead/status/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listleadstatus"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            95 =>
                array(
                    'id' => 99,
                    'group_id' => 51,
                    'identifier' => 'newleadstatus_51_100_2000',
                    'name' => 'newleadstatus',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newleadstatus": {
"title": "{!!Create new lead status!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"submit"
]
},
"children": {
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "leadstatus.company"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "leadstatus.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "leadstatus.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "lead/status",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editleadstatus?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            96 =>
                array(
                    'id' => 100,
                    'group_id' => 18,
                    'identifier' => 'maincrmold_18_100_2000',
                    'name' => 'maincrmold',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"maincrmold": {
"title": "Main CRM",
"menus": {
"m2": {
"type": "mainmenu",
"combine": "merge",
"items": [
{
"title": "Tax rules",
"items": [
{
"title": "New tax rule",
"action": {
"type": "nav",
"linktype": "window",
"link": "newtaxrule"
}
},
{
"title": "List tax rules",
"action": {
"type": "nav",
"linktype": "window",
"link": "listtaxrules"
}
}
]
},
{
"title": "Company rate",
"items": [
{
"title": "New company rate",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcompanyrate"
}
},
{
"title": "List company rate",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcompanyrates"
}
}
]
},
{
"title": "Quote",
"items": [
{
"title": "New quote",
"action": {
"type": "nav",
"linktype": "window",
"link": "newquote"
}
},
{
"title": "List quotes",
"action": {
"type": "nav",
"linktype": "window",
"link": "listquotes"
}
}
]
},
{
"title": "Company currency",
"items": [
{
"title": "New company currency",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcompanycurrency"
}
},
{
"title": "List company currency",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcompanycurrencies"
}
}
]
},
{
"title": "Tax rate",
"items": [
{
"title": "New tax rate",
"action": {
"type": "nav",
"linktype": "window",
"link": "newtaxrate"
}
},
{
"title": "List tax rates",
"action": {
"type": "nav",
"linktype": "window",
"link": "listtaxrates"
}
}
]
},
{
"title": "Rates",
"items": [
{
"title": "New rate",
"action": {
"type": "nav",
"linktype": "window",
"link": "newrate"
}
},
{
"title": "List rates",
"action": {
"type": "nav",
"linktype": "window",
"link": "listrates"
}
}
]
},
{
"title": "Measure units",
"items": [
{
"title": "New measure unit",
"action": {
"type": "nav",
"linktype": "window",
"link": "newmeasureunit"
}
},
{
"title": "List measure units",
"action": {
"type": "nav",
"linktype": "window",
"link": "listmeasurements"
}
}
]
},
{
"title": "Country",
"items": [
{
"title": "New country",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcountry"
}
},
{
"title": "List countries",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcountries"
}
}
]
},
{
"title": "State",
"items": [
{
"title": "New state",
"action": {
"type": "nav",
"linktype": "window",
"link": "newstate"
}
},
{
"title": "List states",
"action": {
"type": "nav",
"linktype": "window",
"link": "liststates"
}
}
]
},
{
"title": "Contact",
"items": [
{
"title": "New contact",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcontact"
}
},
{
"title": "List contacts",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcontacts"
}
}
]
},
{
"title": "Contract",
"items": [
{
"title": "New contact",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcontract"
}
},
{
"title": "List contracts",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcontracts"
}
}
]
},
{
"title": "Couterparty",
"items": [
{
"title": "New counterparty",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcounterparty"
}
},
{
"title": "List counterparties",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcounterparties"
}
}
]
},
{
"title": "Couterparty groups",
"items": [
{
"title": "New counterparty groups",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcounterpartygroup"
}
},
{
"title": "List counterparty groups",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcounterpartygroups"
}
}
]
},
{
"title": "Products",
"items": [
{
"title": "New product",
"action": {
"type": "nav",
"linktype": "window",
"link": "newproduct"
}
},
{
"title": "List products",
"action": {
"type": "nav",
"linktype": "window",
"link": "listproducts"
}
}
]
},
{
"title": "Products category",
"items": [
{
"title": "New product category",
"action": {
"type": "nav",
"linktype": "window",
"link": "newproductcategory"
}
},
{
"title": "List products category",
"action": {
"type": "nav",
"linktype": "window",
"link": "listproductcategory"
}
}
]
},
{
"title": "Quote status",
"items": [
{
"title": "New quote status",
"action": {
"type": "nav",
"linktype": "window",
"link": "newquotestatus"
}
},
{
"title": "List quote status",
"action": {
"type": "nav",
"linktype": "window",
"link": "listquotestatus"
}
}
]
},
{
"title": "Invoice",
"items": [
{
"title": "New invoice",
"action": {
"type": "nav",
"linktype": "window",
"link": "newinvoice"
}
},
{
"title": "List invoices",
"action": {
"type": "nav",
"linktype": "window",
"link": "listinvoices"
}
}
]
},
{
"title": "Lead",
"items": [
{
"title": "New lead",
"action": {
"type": "nav",
"linktype": "window",
"link": "newlead"
}
},
{
"title": "List leads",
"action": {
"type": "nav",
"linktype": "window",
"link": "listleads"
}
}
]
},
{
"title": "Orders",
"items": [
{
"title": "New order",
"action": {
"type": "nav",
"linktype": "window",
"link": "neworder"
}
},
{
"title": "List orders",
"action": {
"type": "nav",
"linktype": "window",
"link": "listorders"
}
}
]
},
{
"title": "Orders status",
"items": [
{
"title": "New order status",
"action": {
"type": "nav",
"linktype": "window",
"link": "neworderstatus"
}
},
{
"title": "List orders status",
"action": {
"type": "nav",
"linktype": "window",
"link": "listorderstatus"
}
}
]
},
{
"title": "Transactions",
"items": [
{
"title": "New transaction",
"action": {
"type": "nav",
"linktype": "window",
"link": "newtransaction"
}
},
{
"title": "List transactions",
"action": {
"type": "nav",
"linktype": "window",
"link": "listtransactions"
}
}
]
},
{
"title": "Departments",
"items": [
{
"title": "New department",
"action": {
"type": "nav",
"linktype": "window",
"link": "newdepartment"
}
},
{
"title": "List departments",
"action": {
"type": "nav",
"linktype": "window",
"link": "listdepartments"
}
}
]
},
{
"title": "Units",
"items": [
{
"title": "New unit",
"action": {
"type": "nav",
"linktype": "window",
"link": "newunit"
}
},
{
"title": "List Units",
"action": {
"type": "nav",
"linktype": "window",
"link": "listunits"
}
}
]
},
{
"title": "Unit Type",
"items": [
{
"title": "New unit type",
"action": {
"type": "nav",
"linktype": "window",
"link": "newunittype"
}
},
{
"title": "List unit types",
"action": {
"type": "nav",
"linktype": "window",
"link": "listunittypes"
}
}
]
},
{
"title": "Invoice Status",
"items": [
{
"title": "New invoice status",
"action": {
"type": "nav",
"linktype": "window",
"link": "newinvoicestatus"
}
},
{
"title": "List invoice status",
"action": {
"type": "nav",
"linktype": "window",
"link": "listinvoicestatus"
}
}
]
},
{
"title": "Payment Gateways",
"items": [
{
"title": "New payment gateway",
"action": {
"type": "nav",
"linktype": "window",
"link": "newpaymentgateway"
}
},
{
"title": "List payment gateways",
"action": {
"type": "nav",
"linktype": "window",
"link": "listpaymentgateways"
}
}
]
},
{
"title": "Currency",
"items": [
{
"title": "New currency",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcurrency"
}
},
{
"title": "List currency",
"action": {
"type": "nav",
"linktype": "window",
"link": "listcurrencies"
}
}
]
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList"
},
"children": {
"reportlabel": {
"type": "label",
"class": "h1",
"value": "CRM Entities"
},
"reportlabel2": {
"type": "label",
"class": "h2",
"value": "Click Main->{{Entity}}->{{Option}}"
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            97 =>
                array(
                    'id' => 101,
                    'group_id' => 52,
                    'identifier' => 'listlanguages_3_100_2000',
                    'name' => 'listlanguages',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listlanguages": {
"title": "{!!List languages!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new language!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newlanguage"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"language"
]
},
"children": {
"language": {
"type": "entitylist",
"entity": "language",
"data-source": {
"language": "language"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$title - $code",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editlanguage?id=$id"
}
}
]
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            98 =>
                array(
                    'id' => 102,
                    'group_id' => 52,
                    'identifier' => 'editlanguage_52_100_2000',
                    'name' => 'editlanguage',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editlanguage": {
"title": "{!!Edit language!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"code_label",
"code",
"icon_label",
"icon",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"language": "language?_filters[]=id-eq=$id"
},
"children": {
"code_label": {
"type": "label",
"value": "code"
},
"code": {
"type": "input",
"field": "language.code",
"value": "$language.0.code"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "language.title",
"value": "$language.0.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "language.description",
"value": "$language.0.description"
},
"icon_label": {
"type": "label",
"value": "icon"
},
"icon": {
"type": "input",
"field": "language.icon",
"value": "$language.0.icon"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "language/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listlanguages"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "language/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listlanguages"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            99 =>
                array(
                    'id' => 103,
                    'group_id' => 52,
                    'identifier' => 'newlanguage_52_100_2000',
                    'name' => 'newlanguage',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newlanguage": {
"title": "{!!Create new language!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"code_label",
"code",
"icon_label",
"icon",
"submit"
]
},
"children": {
"code_label": {
"type": "label",
"value": "code"
},
"code": {
"type": "input",
"field": "language.code"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "language.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "language.description"
},
"icon_label": {
"type": "label",
"value": "icon"
},
"icon": {
"type": "input",
"field": "language.icon"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "language",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editlanguage?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            100 =>
                array(
                    'id' => 104,
                    'group_id' => 47,
                    'identifier' => 'lisrcounterpartybalance_3_100_2000',
                    'name' => 'listcounterpartybalance',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listcounterpartybalance": {
"title": "{!!List counterparty balance!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new counterparty balance!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcounterpartybalance"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"counterpartybalance"
]
},
"children": {
"counterpartybalance": {
"type": "entitylist",
"entity": "counterpartybalance",
"data-source": {
"counterpartybalance": "counterparty/balance?_with=counterparty"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$counterparty.firstname $counterparty.lastname {!!has!!} $amount",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcounterpartybalance?id=$id"
}
},
"counterparty"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            101 =>
                array(
                    'id' => 105,
                    'group_id' => 47,
                    'identifier' => 'editcounterpartybalance_47_100_2000',
                    'name' => 'editcounterpartybalance',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editcounterpartybalance": {
"title": "{!!Edit counterparty balance!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"amount_label",
"amount",
"counterparty_id_label",
"counterparty_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"counterpartybalance": "counterparty/balance?_with=counterparty&_filters[]=id-eq=$id"
},
"children": {
"amount_label": {
"type": "label",
"value": "amount"
},
"amount": {
"type": "input",
"field": "counterpartybalance.amount",
"value": "$counterpartybalance.0.amount"
},
"counterparty_id_label": {
"type": "label",
"value": "Counterparty ID"
},
"counterparty_id": {
"type": "input",
"field": "counterpartybalance.counterparty",
"value": "$counterpartybalance.0.counterparty.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "counterparty/balance/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcounterpartybalance"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "counterparty/balance/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcounterpartybalance"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            102 =>
                array(
                    'id' => 106,
                    'group_id' => 47,
                    'identifier' => 'newcounterpartybalance_47_100_2000',
                    'name' => 'newcounterpartybalance',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newcounterpartybalance": {
"title": "{!!Create new counterparty balance!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"amount_label",
"amount",
"counterparty_id_label",
"counterparty_id",
"submit"
]
},
"children": {
"amount_label": {
"type": "label",
"value": "amount"
},
"amount": {
"type": "input",
"field": "counterpartybalance.amount"
},
"counterparty_id_label": {
"type": "label",
"value": "Counterparty ID"
},
"counterparty_id": {
"type": "input",
"field": "counterpartybalance.counterparty"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "counterparty/balance",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcounterpartybalance?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            103 =>
                array(
                    'id' => 107,
                    'group_id' => 48,
                    'identifier' => 'listcontactposition_3_100_2000',
                    'name' => 'listcontactposition',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listcontactposition": {
"title": "{!!List contact position!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new contact position!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcontactposition"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"contactposition"
]
},
"children": {
"contactposition": {
"type": "entitylist",
"entity": "contactposition",
"data-source": {
"contactposition": "contact/positions?_with=company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$i18n.title - $company.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcontactposition?id=$id"
}
},
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            104 =>
                array(
                    'id' => 108,
                    'group_id' => 48,
                    'identifier' => 'editcontactposition_48_100_2000',
                    'name' => 'editcontactposition',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editcontactposition": {
"title": "{!!Edit contact position!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"contactposition": "contact/positions?_with=company&_filters[]=id-eq=$id"
},
"children": {
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "contactposition.company",
"value": "$contactposition.0.company.id"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "contactposition.title",
"value": "$contactposition.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "contactposition.description",
"value": "$contactposition.0.i18n.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "contact/positions/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcontactposition"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "contact/positions/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcontactposition"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            105 =>
                array(
                    'id' => 109,
                    'group_id' => 48,
                    'identifier' => 'newcontactposition_48_100_2000',
                    'name' => 'newcontactposition',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newcontactposition": {
"title": "{!!Create new contact position!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"submit"
]
},
"children": {
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "contactposition.company"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "contactposition.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "contactposition.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "contact/positions",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcontactposition?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            106 =>
                array(
                    'id' => 110,
                    'group_id' => 49,
                    'identifier' => 'listcontracttypes_3_100_2000',
                    'name' => 'listcontracttypes',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listcontracttypes": {
"title": "{!!List contract types!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new contract types!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcontracttype"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"contracttype"
]
},
"children": {
"contracttype": {
"type": "entitylist",
"entity": "contracttype",
"data-source": {
"contracttype": "contract/types?_with=company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$i18n.title - $company.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcontracttype?id=$id"
}
},
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            107 =>
                array(
                    'id' => 112,
                    'group_id' => 49,
                    'identifier' => 'editcontracttype_49_100_2000',
                    'name' => 'editcontracttype',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editcontracttype": {
"title": "{!!Edit contract type!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"contracttype": "contract/types?_with=company&_filters[]=id-eq=$id"
},
"children": {
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "contracttype.company",
"value": "$contracttype.0.company.id"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "contracttype.title",
"value": "$contracttype.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "contracttype.description",
"value": "$contracttype.0.i18n.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "contract/types/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcontracttypes"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "contract/types/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcontracttypes"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            108 =>
                array(
                    'id' => 114,
                    'group_id' => 49,
                    'identifier' => 'newcontracttype_49_100_2000',
                    'name' => 'newcontracttype',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newcontracttype": {
"title": "{!!Create new contract type!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"company_id_label",
"company_id",
"submit"
]
},
"children": {
"company_id_label": {
"type": "label",
"value": "company"
},
"company_id": {
"type": "input",
"field": "contracttype.company"
},
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "contracttype.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "contracttype.description"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "contract/types",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcontracttype?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            109 =>
                array(
                    'id' => 115,
                    'group_id' => 53,
                    'identifier' => 'company_3_100_2000',
                    'name' => 'listcompanies',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listcompanies": {
"title": "{!!List companies!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new company!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcompany"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"company"
]
},
"children": {
"company": {
"type": "entitylist",
"entity": "company",
"data-source": {
"company": "company?_with=departments,units,user,users,country,state,currency,rate,taxRules,contacts,contracts,counterparties"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$title - $user.firstname $user.lastname",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcompany?id=$id"
}
},
{
"value": ""

},
"departments",
"units",
"user",
"users",
"country",
"state",
"currency",
"rate",
"taxRules",
"contacts"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            110 =>
                array(
                    'id' => 116,
                    'group_id' => 53,
                    'identifier' => 'editcompany_53_100_2000',
                    'name' => 'editcompany',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editcompany": {
"title": "{!!Edit company!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"street_address_label",
"street_address",
"postal_code_label",
"postal_code",
"email_label",
"email",
"vatID_label",
"vatID",
"phone_label",
"phone",
"revenue_label",
"revenue",
"amount_label",
"amount",
"country_id_label",
"country_id",
"state_id_label",
"state_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"company": "company?_with=country,state&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "Title"
},
"title": {
"type": "input",
"field": "company.title",
"value": "$company.0.title"
},
"street_address_label": {
"type": "label",
"value": "street address"
},
"street_address": {
"type": "input",
"field": "company.street_address",
"value": "$company.0.street_address"
},
"postal_code_label": {
"type": "label",
"value": "Postal Code"
},
"postal_code": {
"type": "input",
"field": "company.postal_code",
"value": "$company.0.postal_code"
},
"email_label": {
"type": "label",
"value": "Email"
},
"email": {
"type": "input",
"field": "company.email",
"value": "$company.0.email"
},
"vatID_label": {
"type": "label",
"value": "vatID"
},
"vatID": {
"type": "input",
"field": "company.vatID",
"value": "$company.0.vatID"
},
"phone_label": {
"type": "label",
"value": "phone"
},
"phone": {
"type": "input",
"field": "company.phone",
"value": "$company.0.phone"
},
"revenue_label": {
"type": "label",
"value": "revenue"
},
"revenue": {
"type": "input",
"field": "company.revenue",
"value": "$company.0.revenue"
},
"amount_label": {
"type": "label",
"value": "employees amount"
},
"amount": {
"type": "input",
"field": "company.amount",
"value": "$company.0.amount"
},
"state_id_label": {
"type": "label",
"value": "StateID"
},
"state_id": {
"type": "input",
"field": "company.state",
"value": "$company.0.state.id"
},
"country_id_label": {
"type": "label",
"value": "CountryID"
},
"country_id": {
"type": "input",
"field": "company.country",
"value": "$company.0.country.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "company/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcompanies"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "company/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcompanies"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            111 =>
                array(
                    'id' => 117,
                    'group_id' => 53,
                    'identifier' => 'newcompany_53_100_2000',
                    'name' => 'newcompany',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newcompany": {
"title": "{!!Create new company!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"street_address_label",
"street_address",
"postal_code_label",
"postal_code",
"email_label",
"email",
"vatID_label",
"vatID",
"phone_label",
"phone",
"revenue_label",
"revenue",
"amount_label",
"amount",
"country_id_label",
"country_id",
"state_id_label",
"state_id",
"submit"
]
},
"children": {
"title_label": {
"type": "label",
"value": "Title"
},
"title": {
"type": "input",
"field": "company.title"
},
"street_address_label": {
"type": "label",
"value": "street address"
},
"street_address": {
"type": "input",
"field": "company.street_address"
},
"postal_code_label": {
"type": "label",
"value": "Postal Code"
},
"postal_code": {
"type": "input",
"field": "company.postal_code"
},
"email_label": {
"type": "label",
"value": "Email"
},
"email": {
"type": "input",
"field": "company.email"
},
"vatID_label": {
"type": "label",
"value": "vatID"
},
"vatID": {
"type": "input",
"field": "company.vatID"
},
"phone_label": {
"type": "label",
"value": "phone"
},
"phone": {
"type": "input",
"field": "company.phone"
},
"revenue_label": {
"type": "label",
"value": "revenue"
},
"revenue": {
"type": "input",
"field": "company.revenue"
},
"amount_label": {
"type": "label",
"value": "employees amount"
},
"amount": {
"type": "input",
"field": "company.amount"
},
"state_id_label": {
"type": "label",
"value": "StateID"
},
"state_id": {
"type": "input",
"field": "company.state"
},
"country_id_label": {
"type": "label",
"value": "CountryID"
},
"country_id": {
"type": "input",
"field": "company.country"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "company",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcompany?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            112 =>
                array(
                    'id' => 118,
                    'group_id' => 50,
                    'identifier' => 'listdomainrecords_3_100_2000',
                    'name' => 'listdomainrecords',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listdomainrecords": {
"title": "{!!List domain records!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new domain record!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newdomainrecord"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"domainrecord"
]
},
"children": {
"domainrecord": {
"type": "entitylist",
"entity": "domainrecord",
"data-source": {
"domainrecord": "domain/records?_with=domain,company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$name , $company.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editdomainrecord?id=$id&company=$company.id"
}
},
"domain",
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            113 =>
                array(
                    'id' => 119,
                    'group_id' => 50,
                    'identifier' => 'editdomainrecord_50_100_2000',
                    'name' => 'editdomainrecord',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editdomainrecord": {
"title": "{!!Edit domain record!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"name_label",
"name",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"domainrecord": "domain/records?_with=domain,company&_filters[]=id-eq=$id"
},
"children": {
"name_label": {
"type": "label",
"value": "Name"
},
"name": {
"type": "input",
"field": "domainrecord.name",
"value": "$domainrecord.0.name"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "domain/records/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listdomainrecords"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "domain/records/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listdomainrecords"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            114 =>
                array(
                    'id' => 120,
                    'group_id' => 50,
                    'identifier' => 'newdomainrecord_50_100_2000',
                    'name' => 'newdomainrecord',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newdomainrecord": {
"title": "{!!Create new domain record!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"name_label",
"name",
"company_id_label",
"company_id",
"domain_id_label",
"domain_id",
"submit"
]
},
"children": {
"name_label": {
"type": "label",
"value": "Name"
},
"name": {
"type": "input",
"field": "domainrecord.name"
},

"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "domainrecord.company"
},


"domain_id_label": {
"type": "label",
"value": "Domain ID"
},
"domain_id": {
"type": "input",
"field": "domainrecord.domain"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "domain/records",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editdomainrecord?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            115 =>
                array(
                    'id' => 121,
                    'group_id' => 55,
                    'identifier' => 'listcounterpartytype_3_100_2000',
                    'name' => 'listcounterpartytype',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listcounterpartytype": {
"title": "{!!List counterparty type!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new counterparty type!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcounterpartytype"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"counterpartytype"
]
},
"children": {
"counterpartytype": {
"type": "entitylist",
"entity": "counterpartytype",
"data-source": {
"counterpartytype": "counterparties/type?_with=department"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$i18n.title , $department.i18n.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcounterpartytype?id=$id"
}
},
"department"
]
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            116 =>
                array(
                    'id' => 122,
                    'group_id' => 55,
                    'identifier' => 'editcounterpartytype_55_100_2000',
                    'name' => 'editcounterpartytype',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editcounterpartytype": {
"title": "{!!Edit counterparty type!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"department_label",
"department",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"counterpartytype": "counterparties/type?_with=department&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "counterpartytype.title",
"value": "$counterpartytype.0.i18n.title"
},

"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "counterpartytype.description",
"value": "$counterpartytype.0.i18n.description"
},

"department_label": {
"type": "label",
"value": "Department ID"
},
"department_id": {
"type": "input",
"field": "counterpartytype.department",
"value": "$counterpartytype.0.department.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "counterparties/type/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcounterpartytype"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "counterparties/type/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcounterpartytype"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            117 =>
                array(
                    'id' => 123,
                    'group_id' => 55,
                    'identifier' => 'newcounterpartytype_55_100_2000',
                    'name' => 'newcounterpartytype',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newcounterpartytype": {
"title": "{!!Create new counterparty type!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"department_label",
"department",
"submit"
]
},
"children": {
"title_label": {
"type": "label",
"value": "title"
},
"title": {
"type": "input",
"field": "counterpartytype.title"
},
"description_label": {
"type": "label",
"value": "description"
},
"description": {
"type": "input",
"field": "counterpartytype.description"
},
"department_label": {
"type": "label",
"value": "Department ID"
},
"department_id": {
"type": "input",
"field": "counterpartytype.department"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "counterparties/type",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcounterpartytype?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            118 =>
                array(
                    'id' => 124,
                    'group_id' => 54,
                    'identifier' => 'listusers_3_100_2000',
                    'name' => 'listusers',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listusers": {
"title": "{!!List users!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new user!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newuser"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"user"
]
},
"children": {
"user": {
"type": "entitylist",
"entity": "user",
"data-source": {
"users": "users?_with=company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$firstname $lastname",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "edituser?id=$id"
}
},
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            119 =>
                array(
                    'id' => 125,
                    'group_id' => 54,
                    'identifier' => 'edituser_54_100_2000',
                    'name' => 'edituser',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"edituser": {
"title": "{!!Edit user!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"firstname_label",
"firstname",
"lastname_label",
"lastname",
"email_label",
"email",
"company_id_label",
"company_id",
"department_id_label",
"department_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"user": "users?_with=company,department&_filters[]=id-eq=$id"
},
"children": {
"firstname_label": {
"type": "label",
"value": "Firstname"
},
"firstname": {
"type": "input",
"field": "user.firstname",
"value": "$user.0.firstname"
},
"lastname_label": {
"type": "label",
"value": "Lastname"
},
"lastname": {
"type": "input",
"field": "user.lastname",
"value": "$user.0.lastname"
},
"email_label": {
"type": "label",
"value": "Email"
},
"email": {
"type": "input",
"field": "user.email",
"value": "$user.0.email"
},
"company_id_label": {
"type": "label",
"value": "company id"
},
"company_id": {
"type": "input",
"field": "user.company",
"value": "$user.0.company.id"
},
"department_id_label": {
"type": "label",
"value": "department id"
},
"department_id": {
"type": "input",
"field": "user.department",
"value": "$user.0.department.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "users/$id?user[id]=$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listusers"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "users/$id?user[id]=$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listusers"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            120 =>
                array(
                    'id' => 126,
                    'group_id' => 54,
                    'identifier' => 'newuser_54_100_2000',
                    'name' => 'newuser',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newuser": {
"title": "{!!Create new user!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"firstname_label",
"firstname",
"lastname_label",
"lastname",
"email_label",
"email",
"company_id_label",
"company_id",
"department_id_label",
"department_id",
"submit",
"deletebut"
]
},
"children": {
"firstname_label": {
"type": "label",
"value": "Firstname"
},
"firstname": {
"type": "input",
"field": "user.firstname"
},
"lastname_label": {
"type": "label",
"value": "Lastname"
},
"lastname": {
"type": "input",
"field": "user.lastname"
},
"email_label": {
"type": "label",
"value": "Email"
},
"email": {
"type": "input",
"field": "user.email"
},
"password_label": {
"type": "label",
"value": "password"
},
"password": {
"type": "input",
"field": "user.password"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "users",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "edituser?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            121 =>
                array(
                    'id' => 127,
                    'group_id' => 56,
                    'identifier' => 'listcompanysettings_3_100_2000',
                    'name' => 'listcompanysettings',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listcompanysettings": {
"title": "{!!List company settings!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new company settings!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newcompanysetting"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"companysettings"
]
},
"children": {
"companysettings": {
"type": "entitylist",
"entity": "companysettings",
"data-source": {
"companysettings": "company/setting?_with=setting,company"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$setting.code - $value - $company.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editcompanysetting?id=$id"
}
},
"setting",
"company"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            122 =>
                array(
                    'id' => 128,
                    'group_id' => 56,
                    'identifier' => 'editcompanysetting_56_100_2000',
                    'name' => 'editcompanysetting',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editcompanysetting": {
"title": "{!!Edit company setting!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"setting_id_label",
"setting_id",
"value_label",
"value",
"company_id_label",
"company_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"companysettings": "company/setting?_with=setting,company&_filters[]=id-eq=$id"
},
"children": {
"setting_id_label": {
"type": "label",
"value": "Setting ID"
},
"setting_id": {
"type": "input",
"field": "companysettings.setting",
"value": "$companysettings.0.setting.id"
},
"value_label": {
"type": "label",
"value": "Value"
},
"value": {
"type": "input",
"field": "companysettings.value",
"value": "$companysettings.0.value"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "companysettings.company",
"value": "$companysettings.0.company.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "company/setting/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcompanysettings"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "company/setting/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listcompanysettings"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            123 =>
                array(
                    'id' => 130,
                    'group_id' => 56,
                    'identifier' => 'newcompanysetting_56_100_2000',
                    'name' => 'newcompanysetting',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newcompanysetting": {
"title": "{!!Create new company setting!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"setting_id_label",
"setting_id",
"value_label",
"value",
"company_id_label",
"company_id",
"submit"
]
},
"children": {
"setting_id_label": {
"type": "label",
"value": "Setting ID"
},
"setting_id": {
"type": "input",
"field": "companysettings.setting"
},
"value_label": {
"type": "label",
"value": "Value"
},
"value": {
"type": "input",
"field": "companysettings.value"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "companysettings.company"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "company/setting",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editcompanysetting?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            124 =>
                array(
                    'id' => 131,
                    'group_id' => 57,
                    'identifier' => 'listemailtemplates_3_100_2000',
                    'name' => 'listemailtemplates',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listemailtemplates": {
"title": "{!!List email templates!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new email template!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newemailtemplate"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"emailtemplate"
]
},
"children": {
"emailtemplate": {
"type": "entitylist",
"entity": "emailtemplate",
"data-source": {
"emailtepmlate": "email/templates"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$template - $i18n.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editemailtemplate?id=$id"
}
}
]
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            125 =>
                array(
                    'id' => 132,
                    'group_id' => 57,
                    'identifier' => 'editemailtemplate_57_100_2000',
                    'name' => 'editemailtemplate',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editemailtemplate": {
"title": "{!!Edit email template!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"template_label",
"template",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"emailtemplate": "email/templates?_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "Title"
},
"title": {
"type": "input",
"field": "emailtemplate.title",
"value": "$emailtemplate.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "Description"
},
"description": {
"type": "input",
"field": "emailtemplate.description",
"value": "$emailtemplate.0.i18n.description"
},
"template_label": {
"type": "label",
"value": "template"
},
"template": {
"type": "input",
"field": "emailtemplate.template",
"value": "$emailtemplate.0.template"
},

"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "email/templates/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listemailtemplates"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "email/templates/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listemailtemplates"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            126 =>
                array(
                    'id' => 133,
                    'group_id' => 57,
                    'identifier' => 'newemailtemplate_57_100_2000',
                    'name' => 'newemailtemplate',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newemailtemplate": {
"title": "{!!Create new email template!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"template_label",
"template",
"submit"
]
},
"children": {
"title_label": {
"type": "label",
"value": "Title"
},
"title": {
"type": "input",
"field": "emailtemplate.title"
},
"description_label": {
"type": "label",
"value": "Description"
},
"description": {
"type": "input",
"field": "emailtemplate.description"
},
"template_label": {
"type": "label",
"value": "template"
},
"template": {
"type": "input",
"field": "emailtemplate.template"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "email/templates",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editemailtemplate?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            127 =>
                array(
                    'id' => 134,
                    'group_id' => 58,
                    'identifier' => 'listerrors_3_100_2000',
                    'name' => 'listerrors',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"listerrors": {
"title": "{!!List errors!!}",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new error!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newerror"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"error"
]
},
"children": {
"error": {
"type": "entitylist",
"entity": "error",
"data-source": {
"error": "errors?_with=parent"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "$code {!!type!!} $type $i18n.title",
"class": "header",
"action": {
"type": "nav",
"linktype": "window",
"link": "editerror?id=$id"
}
},
"parent"
]
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            128 =>
                array(
                    'id' => 135,
                    'group_id' => 58,
                    'identifier' => 'editerror_58_100_2000',
                    'name' => 'editerror',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"editerror": {
"title": "{!!Edit error!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"code_label",
"code",
"type_label",
"type",
"parent_id_label",
"parent_id",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"error": "errors?_with=parent&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "Title"
},
"title": {
"type": "input",
"field": "error.title",
"value": "$error.0.i18n.title"
},
"description_label": {
"type": "label",
"value": "Description"
},
"description": {
"type": "input",
"field": "error.description",
"value": "$error.0.i18n.description"
},
"code_label": {
"type": "label",
"value": "code"
},
"code": {
"type": "input",
"field": "error.code",
"value": "$error.0.code"
},
"type_label": {
"type": "label",
"value": "type"
},
"type": {
"type": "input",
"field": "error.type",
"value": "$error.0.type"
},
"parent_id_label": {
"type": "label",
"value": "Parent ID"
},
"parent_id": {
"type": "input",
"field": "error.parent",
"value": "$error.0.parent.id"
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "errors/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listerrors"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "errors/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listerrors"
},
"onfailure": {
"type": "alert",
"value": "Error!$result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            129 =>
                array(
                    'id' => 136,
                    'group_id' => 58,
                    'identifier' => 'newerror_58_100_2000',
                    'name' => 'newerror',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"newerror": {
"title": "{!!Create new error!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"description_label",
"description",
"code_label",
"code",
"type_label",
"type",
"parent_id_label",
"parent_id",
"submit"
]
},
"children": {
"title_label": {
"type": "label",
"value": "Title"
},
"title": {
"type": "input",
"field": "error.title"
},
"description_label": {
"type": "label",
"value": "Description"
},
"description": {
"type": "input",
"field": "error.description"
},
"code_label": {
"type": "label",
"value": "code"
},
"code": {
"type": "input",
"field": "error.code"
},
"type_label": {
"type": "label",
"value": "type"
},
"type": {
"type": "input",
"field": "error.type"
},
"parent_id_label": {
"type": "label",
"value": "Parent ID"
},
"parent_id": {
"type": "input",
"field": "error.parent"
},
"submit": {
"type": "label",
"class": "button",
"value": "Create",
"action": {
"type": "submit",
"url": "errors",
"method": "POST",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "editerror?id=$result.id"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            130 =>
                array(
                    'id' => 137,
                    'group_id' => 59,
                    'identifier' => 'counterpartsDataTable_59_100_2000',
                    'name' => 'counterpartsDataTable',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => 100,
                    'max_height' => 2000,
                    'metadata' => '{
"counterpartsDataTable": {
"title":"Counterparts",
"elements": {
"root": {
"width":"100%",
"height":"auto",
"layout": {
"type":"VerticalList"
},
"children": {
"table_1":{
"entity":"counterparties",
"class":"info-table",
"data-source": "counterparties?_with=country",
"preload": 0,
"setting":{
"perPage": 5,
"paginate": true,
"selected":true,
"search": true,
"predefinedFilters": true,
"notSearchable": ["email"],
"notSearchBy": ["firstname", "email"],
"notSortable": [ ],
"hideCells":["company_id","country_id","type_id","group_id","updated_at","auth_id","postal_code"]

},
"cells": [
{
"label": "Phone", 
"field": "phone", 
"align": "center",
"width": "10%",
"sortable":true
},
{
"label": "Name", 
"field": "firstname", 
"align": "left",
"link":"editcounterparty?id=$id",
"searchable":true,
"icon": { 
"align":"left",
"source":"https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/png/cog-2x.png"
}
},

{ 
"label": "Money", 
"field": "state_id",
"class": "money_short"
},
{ 
"label": "Tax", 
"field": "active_tax",
"width":"7%"
},
{ 
"label": "Email2", 
"field": "email",
"align": "right",
"width": "10%"

},
{ 
"label": "Action", 
"field":"actions", 
"width": "10%",
"icon": { 
"align":"right",
"source":"https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/png/cog-2x.png"
},
"menus": [{
"submit":{
"class":"button",
"label":"Activate",
"addTo": {"field":"auth_id", "value":0},
"action":{
"type":"submit",
"url":"counterparties/activate?id=$id",
"method":"POST"
}
}
},
{
"delete":{
"class":"link",
"label":"Delete",
"addTo": "all",
"action":{
"type":"submit",
"url":"counterparties/delete?id=$id",
"method":"DELETE"
}
}  
}]    
}
],
"groupActions":{
"submit":{
"class":"button",
"label":"Activate",
"action":{
"type":"submit",
"url":"counterparties/activate?id=$id",
"method":"POST"
}
},
"delete":{
"class":"button",
"label":"Delete",
"action":{
"type":"submit",
"url":"counterparties/delete?id=$id",
"method":"DELETE"
}
}
}
},
"table_counterparty":{
"data-source": "quote/products?_with=product,product.category&_filters[]=quote_id-eq=1",
"preload": 0,
"cells":[
{ 
"label": "Prod Name", 
"field": "product.title",
"searchable":true,
"relation_path":"/products?_limit=15&_page=1&_sort=-id"
},
{ 
"label": "Price", 
"field": "product.price",
"class":"money_short"
},
{ 
"label": "Category", 
"field": "product.category.title"
}
]
},
"table_2":{
"entity":"counterparties",
"data-source": "counterparties?_with=country,company,group,type,state,contacts,contracts"
}
}
}
}
}
}',
                    'edited_metadata' => '',
                    'publish' => 1,
                    'deleted_at' => '2018-02-07 16:29:30',
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            131 =>
                array(
                    'id' => 138,
                    'group_id' => 32,
                    'identifier' => 'counterparts_32_100_2000',
                    'name' => 'counterparts',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => NULL,
                    'max_height' => NULL,
                    'metadata' => '{
"counterparts": {
"title":"Counterparts",
"elements": {
"root": {
"width":"100%",
"height":"auto",
"layout": {
"type":"VerticalList"
},
"children": {
"table_1":{
"type": "entitytable",
"entity":"counterparties",
"class":"info-table",
"data-source": "counterparties?_with=country",
"preload": 0,
"setting":{
"perPage": 15,
"paginate": true,
"selected":true,
"search": true,
"predefinedFilters": true,
"notSearchable": ["email"],
"notSearchBy": ["firstname", "email"],
"notSortable": [ ],
"hideCells":["id","password","company_id","country_id","type_id","group_id","updated_at","auth_id","postal_code"]

},
"cells": [
{
"field": "address",
"width": "10%"
},
{
"label": "Name", 
"field": "firstname", 
"align": "left",
"link":"editcounterparty?id=$id",
"searchable":true,
"icon": { 
"align":"left",
"source":"https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/png/cog-2x.png"
}
},

{ 
"label": "Money", 
"field": "state_id",
"class": "money_short",
"align":"center"
},
{ 
"label": "Tax", 
"field": "active_tax",
"width":"15%",
"align":"center"
},
{  
"field": "email",
"width": "10%"

},
{ 
"label": "Action", 
"field":"actions", 
"width": "10%",
"icon": { 
"align":"right",
"source":"https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/png/cog-2x.png"
},
"menus": [{
"submit":{
"class":"button",
"label":"Activate",
"addTo": {"field":"auth_id", "value":0},
"action":{
"type":"nav",
"linktype":"window",
"link":"activatecounterparty?id=$id"
}
}
},
{
"delete":{
"class":"link",
"label":"Delete",
"addTo": "all",
"action":{
"type":"submit",
"url":"counterparties/$id",
"method":"DELETE",
"onsuccess":{
"type":"nav",
"linktype":"window",
"link":"counterparts"
},
"onfailure": {
"type":"alert",
"value":"Error! $result.error"
}
}
}  
}]    
}
],
"groupActions":{
"delete":{
"class":"button",
"label":"Delete",
"action":{
"type":"submit",
"url":"counterparties/$id",
"method":"DELETE",
"onsuccess":{
"type":"nav",
"linktype":"window",
"link":"counterparts"
},
"onfailure": {
"type":"alert",
"value":"Error! $result.error"
}
}
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            132 =>
                array(
                    'id' => 139,
                    'group_id' => 60,
                    'identifier' => 'list_test_new_60_100_1000',
                    'name' => 'listtestnew',
                    'min_width' => 100,
                    'max_width' => 1000,
                    'min_height' => 100,
                    'max_height' => 1000,
                    'metadata' => '{
"listtestnew": {
"title": "list test new",
"menus": {
"m1": {
"type": "topmenu",
"combine": "replace",
"items": [
{
"title": "{!!Create new quote!!}",
"action": {
"type": "nav",
"linktype": "window",
"link": "newquote"
}
}
]
}
},
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"quotes"
]
},
"children": {
"quotes": {
"type": "entitylist",
"entity": "quotes",
"data-source": {
"quotes": "quotes?_with=currency,user,counterparty,status,products"
},
"preload": 0,
"autoload": 1,
"entitymenu": {

},
"cells": [
{
"value": "Quote $title : $amount $currency.sign : $status.i18n.title",
"class": "header",
"icon":"Quotes_Icons",
"action": {
"type": "nav",
"linktype": "window",
"link": "editTestTable?id=$id"
}
},
"title",
"available_all",
"status",
{
"value": "$amount $currency.sign",
"description": "Amount"
},
"user",
"counterparty"
]
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            133 =>
                array(
                    'id' => 140,
                    'group_id' => 60,
                    'identifier' => 'editTestTable_60_100_1000',
                    'name' => 'editTestTable',
                    'min_width' => 100,
                    'max_width' => 1000,
                    'min_height' => 100,
                    'max_height' => 1000,
                    'metadata' => '{
"editTestTable": {
"title": "{!!Edit quote!!}",
"elements": {
"root": {
"width": "100%",
"height": "auto",
"layout": {
"type": "VerticalList",
"list": [
"title_label",
"title",
"company_id_label",
"company_id",
"counterparty_id_label",
"counterparty_id",
"currency_id_label",
"currency_id",
"status_id_label",
"status_id",
"user_id_label",
"user_id",
"amount_label",
"amount",
"content_label",
"content",
"conditions_label",
"conditions",
"comment_label",
"comment",
"available_all_label",
"available_all",
"products_label",
"products",
"submit",
"deletebut"
]
},
"preload": 0,
"data-source": {
"quotes": "quotes?_with=currency,user,counterparty,status,products,company&_filters[]=id-eq=$id"
},
"children": {
"title_label": {
"type": "label",
"value": "Title"
},
"title": {
"type": "input",
"field": "quotes.title",
"value": "$quotes.0.title"
},
"company_id_label": {
"type": "label",
"value": "Company ID"
},
"company_id": {
"type": "input",
"field": "quotes.company",
"value": "$quotes.0.company.id"
},
"counterparty_id_label": {
"type": "label",
"value": "Counterparty ID"
},
"counterparty_id": {
"type": "input",
"field": "quotes.counterparty",
"value": "$quotes.0.counterparty.id"
},
"currency_id_label": {
"type": "label",
"value": "Currency ID"
},
"currency_id": {
"type": "input",
"field": "quotes.currency",
"value": "$quotes.0.currency.id"
},
"status_id_label": {
"type": "label",
"value": "Status ID"
},
"status_id": {
"type": "input",
"field": "quotes.status",
"value": "$quotes.0.status.id"
},
"user_id_label": {
"type": "label",
"value": "User ID"
},
"user_id": {
"type": "input",
"field": "quotes.user",
"value": "$quotes.0.user.id"
},
"amount_label": {
"type": "label",
"value": "Amount"
},
"amount": {
"type": "input",
"field": "quotes.amount",
"value": "$quotes.0.amount"
},
"content_label": {
"type": "label",
"value": "Content"
},
"content": {
"type": "input",
"field": "quotes.content",
"value": "$quotes.0.content"
},
"conditions_label": {
"type": "label",
"value": "Conditions"
},
"conditions": {
"type": "input",
"field": "quotes.conditions",
"value": "$quotes.0.conditions"
},
"comment_label": {
"type": "label",
"value": "Comment"
},
"comment": {
"type": "input",
"field": "quotes.comment",
"value": "$quotes.0.comment"
},
"available_all_label": {
"type": "label",
"value": "Available to all ?"
},
"available_all": {
"type": "input",
"field": "quotes.available_all",
"value": "$quotes.0.available_all"
},
"products_label": {
"type": "label",
"value": "Products"
},
"products": {
"type": "EntityTable",
"entity": "quotes.products" 
},
"submit": {
"type": "label",
"class": "button",
"value": "Save",
"action": {
"type": "submit",
"url": "quotes/$id",
"method": "PUT",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listquotes"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
},
"deletebut": {
"type": "label",
"class": "button",
"value": "Delete",
"action": {
"type": "request",
"url": "quotes/$id",
"method": "DELETE",
"onsuccess": {
"type": "nav",
"linktype": "window",
"link": "listquotes"
},
"onfailure": {
"type": "alert",
"value": "Error! $result.error"
}
}
}
}
}
}
}
}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
            134 =>
                array(
                    'group_id' => 18,
                    'identifier' => 'evrica_18_100_3000',
                    'name' => 'evrica',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => NULL,
                    'max_height' => NULL,
                    'metadata' => '{
   "evrica": {
     "header": {
       "width": "100%",
       "height": "63px",
       "class": "header-layout",
       "layout": {
         "type": "HorizontalList",
         "list": [
           "middleblock"
         ]
       },
       "children": {
         "middleblock": {
           "width": "100%",
           "height": "100%",
           "align": "center",
           "valign": "center",
           "class": "header-layout",
           "layout": {
             "type": "HorizontalList",
             "list": [
               "modalmenu",
               "leftPart",
               "mainUserMenu"
             ]
           },
           "children": {
             "leftPart": {
               "width": "80%",
               "height": "100%",
               "align": "left",
               "layout": {
                 "type": "HorizontalList",
                 "list": [
                   "modalmenu",
                   "logo",
                   "notifications",
                   "globSearch",
                   "onlineTime",
                   "notificateFlag"
                 ]
               },
               "children": {
                 "modalmenu": {
                       "type": "modal",
                       "fade": "up",
                       "class": "button",
                       "value": "",
                       "left-icon": "./src/assets/img/sandwich.png",
                       "root": {
                         "width": "100%",
                         "height": "100%",
                         "fade": "right",
                         "layout": {
                           "type": "VerticalList",
                           "list": [
                             "leftmenu"
                           ]
                         },
                         "children": {
                           "leftmenu": {
                             "type": "menu",
                             "height": "auto",
                             "updateonevent": [
                               "task.modify"
                             ],
                             "class": "vertical-menu",
                             "items": [
                               {
                                 "title": "My Workspace",
                                 "left-icon": "",
                                 "items": [
                                   {
                                     "title": "Activity Stream",
                                     "action": {
                                       "type": "nav",
                                       "linktype": "window",
                                       "link": "activitystream"
                                     }
                                   },
                                   {
                                     "title": "Tasks",
                                     "action": {
                                       "type": "nav",
                                       "linktype": "window",
                                       "link": "tasks"
                                     },
                                     "badge": {
                                       "type": "badge",
                                       "class": "menu",
                                       "value": "",
                                       "badge": "user/active-notifications",
                                       "event": "testEventB"
                                     }
                                   },
                                   {
                                     "title": "More",
                                     "items": [
                                       {
                                         "title": "Test components",
                                         "action": {
                                           "type": "nav",
                                           "linktype": "window",
                                           "link": "/page/testevents"
                                         }
                                       },
                                       {
                                         "title": "Counterparts entity-table",
                                         "action": {
                                           "type": "nav",
                                           "linktype": "window",
                                           "link": "/page/counterparts"
                                         }
                                       }
                                     ]
                                   }
                                 ]
                               },
                               {
                                 "title": "CRM",
                                 "left-icon": "",
                                 "items": [
                                   {
                                     "title": "Activity Stream",
                                     "action": {
                                       "type": "nav",
                                       "linktype": "window",
                                       "link": "activitystream"
                                     }
                                   },
                                   {
                                     "title": "Quotes",
                                     "action": {
                                       "type": "nav",
                                       "linktype": "window",
                                       "link": "quotes"
                                     }
                                   }
                                 ]
                               }
                             ]
                           }
                         }
                       }
                     },
                 "logo": {
                   "type": "button",
                   "value":"",
                   "class": "logo-button",
                   "left-icon": "./src/assets/img/logo.png",
                   "action": {
                     "type": "nav",
                     "target": "current",
                     "link": ""
                   }
                 },
                 "notifications": {
                   "type": "label",
                   "class": "button",
                   "left-icon": "./src/assets/img/edit.png",
                   "tooltip": {
                         "type": "modal",
                         "class": "button",
                         "value": "Ivite an user",
                         "root": {
                           "width": "auto",
                           "height": "auto",
                           "layout": {
                             "type": "VerticalList",
                             "list": [
                               "leftmenu"
                             ]
                           },
                           "children": {
                              "leftmenu": {
                                 "type": "menu",
                                 "height": "auto",
                                 "updateonevent": [
                                   "task.modify"
                                 ],
                                 "class": "vertical-menu",
                                 "items": [
                                   {
                                     "title": "My Workspace",
                                     "left-icon": "",
                                     "items": [
                                       {
                                         "title": "Activity Stream",
                                         "action": {
                                           "type": "nav",
                                           "linktype": "window",
                                           "link": "activitystream"
                                         }
                                       },
                                       {
                                         "title": "Tasks",
                                         "action": {
                                           "type": "nav",
                                           "linktype": "window",
                                           "link": "tasks"
                                         }
                                       }
                                     ]
                                   },
                                   {
                                     "title": "CRM",
                                     "left-icon": "",
                                     "items": [
                                       {
                                         "title": "Activity Stream",
                                         "action": {
                                           "type": "nav",
                                           "linktype": "window",
                                           "link": "activitystream"
                                         }
                                       },
                                       {
                                         "title": "Quotes",
                                         "action": {
                                           "type": "nav",
                                           "linktype": "window",
                                           "link": "quotes"
                                         }
                                       }
                                     ]
                                   }
                                 ]
                               }
                           }
                         }
                       },
                      "badge": {
                       "type": "badge",
                       "value": "",
                       "badge": "user/active-notifications",
                       "event": "testEventX"
                     }
                 },
                 "globSearch": {
                   "type": "search",
                   "class": "glob-search",
                   "placeholder": "placeholder text",
                   "searchBy": [
                     "users.firstname",
                     "order.title",
                     "users.lastname",
                     "counterparty.firstname",
                     "counterparty.email",
                     "lead.name"
                   ],
                   "resultAction": "/searchResult"
                 },
                 "onlineTime": {
                   "type": "clock",
                   "class": "header-whatch",
                   "format": "format-time",
                   "tooltip": {
                         "type": "modal",
                         "class": "button",
                         "value": "Ivite an user",
                         "root": {
                           "width": "100%",
                           "height": "auto",
                           "layout": {
                             "type": "VerticalList",
                             "list": [
                               "leftmenu"
                             ]
                           },
                           "children": {
                              "leftmenu": {
                         "type": "menu",
                         "height": "auto",
                         "updateonevent": [
                           "task.modify"
                         ],
                         "class": "vertical-menu",
                         "items": [
                           {
                             "title": "My Workspace",
                             "left-icon": "",
                             "items": [
                               {
                                 "title": "Activity Stream",
                                 "action": {
                                   "type": "nav",
                                   "linktype": "window",
                                   "link": "activitystream"
                                 }
                               },
                               {
                                 "title": "Tasks",
                                 "action": {
                                   "type": "nav",
                                   "linktype": "window",
                                   "link": "tasks"
                                 },
                                 "badge": {
                                   "type": "badge",
                                   "class": "menu",
                                   "value": "",
                                   "badge": "user/active-notifications",
                                   "event": "testEventB"
                                 }
                               },
                               {
                                 "title": "More",
                                 "items": [
                                   {
                                     "title": "Test components",
                                     "action": {
                                       "type": "nav",
                                       "linktype": "window",
                                       "link": "/page/testevents"
                                     }
                                   },
                                   {
                                     "title": "Counterparts entity-table",
                                     "action": {
                                       "type": "nav",
                                       "linktype": "window",
                                       "link": "/page/counterparts"
                                     }
                                   }
                                 ]
                               }
                             ]
                           },
                           {
                             "title": "CRM",
                             "left-icon": "",
                             "items": [
                               {
                                 "title": "Activity Stream",
                                 "action": {
                                   "type": "nav",
                                   "linktype": "window",
                                   "link": "activitystream"
                                 }
                               },
                               {
                                 "title": "Quotes",
                                 "action": {
                                   "type": "nav",
                                   "linktype": "window",
                                   "link": "quotes"
                                 }
                               }
                             ]
                           }
                         ]
                       }
                           }
                         }
                       }
                 }
               }
             },
             "mainUserMenu": {
               "width": "auto",
               "height": "100%",
               "align": "right",
               "layout": {
                 "type": "HorizontalList",
                 "list": [
                   "mainUserMenu",
                   "info"
                 ]
               },
               "children": {
                 "mainUserMenu": {
                   "type": "menu",
                   "class": "inline-menu",
                   "items": [
                     {
                       "title": "Hello TestUser",
                       "left-icon": "",
                       "items": [
                         {
                           "title": "User account",
                           "left-icon": "",
                           "action": {
                             "type": "nav",
                             "linktype": "window",
                             "link": "user-account/?id=$id"
                           }
                         },
                         {
                           "title": "",
                           "login": true
                         }
                       ]
                     }
                   ]
                 },
                 "info": {
                   "type": "notificationblock",
                   "left-icon": "./src/assets/img/notify.png",
                   "value": "",
                   "badge": "user/active-notifications"
                 }
               }
             }
           }
         }
       }
     },
     "leftblock": {
       "width": "20%",
       "height": "auto",
       "layout": {
         "type": "VerticalList",
         "list": [
           "leftmenu"
         ]
       },
       "children": {
         "leftmenu": {
           "type": "menu",
           "height": "auto",
           "updateonevent": [
             "task.modify"
           ],
           "class": "vertical-menu",
           "items": [
             {
               "title": "My Workspace",
               "left-icon": "",
               "items": [
                 {
                   "title": "Chat",
                   "action": {
                     "type": "nav",
                     "linktype": "window",
                     "link": "/chat"
                   }
                 },
                 {
                   "title": "Tasks",
                   "action": {
                     "type": "nav",
                     "linktype": "window",
                     "link": "/tasks"
                   },
                   "badge": {
                     "type": "badge",
                     "class": "menu",
                     "value": "",
                     "badge": "user/active-notifications",
                     "event": "testEventB"
                   }
                 },
                 {
                     "title": "More",
                     "items": [
                       {
                         "title": "Test components",
                         "action": {
                           "type": "nav",
                           "linktype": "window",
                           "link": "/page/testevents"
                         }
                       },
                       {
                         "title": "Counterparts entity-table",
                         "action": {
                           "type": "nav",
                           "linktype": "window",
                           "link": "/page/counterparts"
                         }
                       }
                     ]
                   }
               ]
             },
             {
               "title": "CRM",
               "left-icon": "",
               "items": [
                 {
                   "title": "Activity Stream",
                   "action": {
                     "type": "nav",
                     "linktype": "window",
                     "link": "/activitystream"
                   }
                 },
                 {
                   "title": "Quotes",
                   "action": {
                     "type": "nav",
                     "linktype": "window",
                     "link": "/quotes"
                   }
                 },
                 {
                   "title": "",
                   "modal": {
                     "type": "modal",
                     "class": "button",
                     "value": "Open madal",
                     "root": {
                       "width": "50%",
                       "height": "80%",
                       "layout": {
                         "type": "VerticalList",
                         "list": [
                           "leftmenu"
                         ]
                       },
                       "children": {
                         "tabs": {
                             "type":"label",
                             "value":"Testing modal window..."
                         }
                       }
                     }
                   }
                 }
               ]
             }
           ]
         }
       }
     },
     "dynamiccontent": {},
     "rightblock": {},
     "footer": {}
   }
 }',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2017-11-15 11:05:36',
                    'updated_at' => '2017-11-15 16:30:05',
                ),
            135 =>
                array(
                    'group_id' => 2,
                    'identifier' => 'testevents_2_20_2000',
                    'name' => 'testevents',
                    'min_width' => 100,
                    'max_width' => 2000,
                    'min_height' => NULL,
                    'max_height' => NULL,
                    'metadata' => '{"testwindow":{
     "title": "Test Window",
     "elements": {
         "root": {
             "width":"100%",
             "height":"auto",
             "layout": {
                 "type":"VerticalList",
                 "list":["body"]
             },
             "children": {
 				"body":{
 				    "width":"100%",
                     "height":"auto",
                     "align":"center",
                     "class": "body-layout",
                     "layout":{
                         "type": "VerticalList",
                         "list": ["firstblock","separator"]
                     },
                     "children": {
                         "labelevents":{
                             "type": "label",
                             "value": "Event",
                             "class": "h3"
                         },
 						"events": {
                             "width":"100%",
 							"height":"auto",
 							"layout":{
 								"type": "HorizontalList"
 							},
 							"children": {
                                 "createA": {
                             		"type": "button",
                                     "class": "",
                                     "value":"TestEventA",
                                     "left-icon":"https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/png/aperture-2x.png",
                                     "action": {"type": "nav","target":"modal","linktype": "window","link": "newquote"},
                                     "event": "testEventA"
                                 },
                                 "createC": {
                             		"type": "button",
                                     "class": "",
                                     "value":"TestEventC",
                                     "action": {"type": "nav","target":"modal","linktype": "window","link": "newquote"},
                                     "event": "testEventC"
                                 },
                                 "createX": {
                             		"type": "button",
                                     "class": "",
                                     "value":"TestEventX",
                                     "action": {"type": "nav","target":"modal","linktype": "window","link": "newquote"},
                                     "event": "testEventX"
                                 },
 							    "badgeA":{
                                     "type": "badge",
         							"value":"EventA",
         							"badge": "user/active-notifications",
         							"event": "testEventA"
                                 },
                                 "badgeC":{
                                     "type": "badge",
                                     "value":"EventC",
         							"badge": "user/active-notifications",
         							"event": "testEventC"
                                 },
                                 "badgeX":{
                                     "type": "badge",
                                     "value":"EventX",
         							"badge": "user/active-notifications",
         							"event": "testEventX"
                                 }
 							}
                         },
                         "separatorevents": {
                             "type": "separator",
                             "height": "1px",
                             "color": "#000"
                         },
                         "labelmodal":{
                             "type": "label",
                             "value": "Modal",
                             "class": "h3"
                         },
 						"modal": {
 						    "width":"100%",
 							"height":"auto",
 							"layout":{
 								"type": "HorizontalList"
 							},
 							"children": {
 							    "modalup":{
                                   "type": "modal",
                                   "fade": "up",
                                   "class": "modal",
                                   "value": "Modal up",
                                   "root": {
                                     "width": "100%",
                                     "height": "100%",
                                     "fade": "up",
                                     "layout": {
                                       "type": "VerticalList",
                                       "list": [
                                         "label"
                                       ]
                                     },
                                     "children": {
                                       "label": {
                                           "type": "label",
                                           "value": "Testing up modal width:100% height:100%"
                                       }
                                     }
                                   }
 							    },
 							    "modaldown":{
                                   "type": "modal",
                                   "fade": "down",
                                   "class": "modal",
                                   "value": "Modal down",
                                   "root": {
                                     "width": "80%",
                                     "height": "60%",
                                     "fade": "down",
                                     "layout": {
                                       "type": "VerticalList",
                                       "list": [
                                         "label"
                                       ]
                                     },
                                     "children": {
                                       "label": {
                                           "type": "label",
                                           "value": "Testing down modal width:80% height:60%"
                                       }
                                     }
                                   }
 							    },
 							    "modalright":{
                                   "type": "modal",
                                   "fade": "right",
                                   "class": "modal",
                                   "value": "Modal right",
                                   "root": {
                                     "width": "50%",
                                     "height": "50%",
                                     "fade": "right",
                                     "layout": {
                                       "type": "VerticalList",
                                       "list": [
                                         "label"
                                       ]
                                     },
                                     "children": {
                                       "label": {
                                           "type": "label",
                                           "value": "Testing right modal width:50% height:50%"
                                       }
                                     }
                                   }
 							    },
 							    "modalleft":{
                                   "type": "modal",
                                   "fade": "left",
                                   "class": "modal",
                                   "value": "Modal left",
                                   "root": {
                                     "width": "100%",
                                     "height": "50%",
                                     "fade": "left",
                                     "layout": {
                                       "type": "VerticalList",
                                       "list": [
                                         "label"
                                       ]
                                     },
                                     "children": {
                                       "label": {
                                           "type": "label",
                                           "value": "Testing left modal width:80% height:60%"
                                       }
                                     }
                                   }
 							    }
 							}
                         },
                         "separatormodal": {
                     		"type": "separator",
                             "height": "1px",
                             "color": "#cfcfcf"
                         },
                         "labeltooltip":{
                             "type": "label",
                             "value": "Tooltip",
                             "class": "h3"
                         },
 						"tooltip": {
 						    "width":"100%",
 							"height":"auto",
 							"layout":{
 								"type": "HorizontalList"
 							},
 							"children": {
 							    "tooltipdown":{
             						"type": "tooltip",
                                     "class": "",
                                     "value": "Tooltip down",
                                     "root": {
                                         "width": "100%",
                                         "height": "auto",
                                         "layout": {
                                             "type": "VerticalList"
                                         },
                                         "children": {
                                             "menu": {
                                                 "type": "menu",
                                                 "height": "auto",
                                                 "class": "vertical-menu",
                                                 "items": [
                                                   {
                                                     "title": "Menu",
                                                     "left-icon": "",
                                                     "items": [
                                                       {
                                                         "title": "Sub menu",
                                                         "action": {
                                                           "type": "nav",
                                                           "linktype": "window",
                                                           "link": "/link-page"
                                                         }
                                                       }
                                                     ]
                                                   }
                                                 ]
                                             }
                                         }
                                     }
 							    },
 							    "tooltipup":{
             						"type": "tooltip",
                                     "class": "link",
                                     "width": "150px",
                                     "align":"up",
                                     "bgcolor":"#000",
                                     "fcolor":"#fff",
                                     "value": "Tooltip up",
                                     "root": {
                                         "width": "100%",
                                         "height": "auto",
                                         "layout": {
                                             "type": "VerticalList"
                                         },
                                         "children": {
                                             "label": {
                                                 "type": "label",
                                                 "value":"Text in tooltip placed down ..."
                                             }
                                         }
                                     }
 							    }
 							}
                         },
                         "separatortooltip": {
                             "type": "separator",
                             "height": "1px",
                             "width":"",
                             "color": "#000",
                             "align": ""
                         },
                         "labeltab":{
                             "type": "label",
                             "value": "Tab",
                             "class": "h3"
                         },
 						"tab": {
                             "width": "100%",
                             "height": "auto",
                             "layout": {
                               "type": "tabs"
                             },
                             "children": {
                                 "tab1":{
                                     "type": "label",
                                     "value": "Tab 1"
                                 },
                                 "tab2": {
                                     "type": "label",
                                     "value": "Tab 2"
                                 },
                                 "tab3": {
                                     "type": "label",
                                     "value": "Tab 3"
                                 }
                                   
                             }
                         },
                         "separatortab": {
                             "type": "separator",
                             "height": "1px",
                             "width":"",
                             "color": "#cfcfcf",
                             "align": ""
                         },
                         "labelaccordeon":{
                             "type": "label",
                             "value": "Accordion oneexpand",
                             "class": "h3"
                         },
 						"accordeon":{
 							"width":"100%",
 							"height":"auto",
 							"layout":{
 								"type": "accordion",
 								"collapsible": true,
 								"multiexpand": false
 							},
 							"children":{
 								"accordion1":{
 									"expanded": false,
 									"left-icon":"",
 									"close":{
 										"width":"100%",
 										"height":"auto",
 										"layout":{
 											"type": "HorizontalList"
 										},
 										"children": {
 											"label1":{
 												"type": "label",
 												"value":"Element 1, "
 											},
 											"label2": {
 											    "type": "label",
                                                 "value": "Element 2,"
 											},
 											"label3": {
 											    "type": "label",
                                                 "value": "Element 3 (closed)"
 											}
 										}
 									},
 									"expand":{
 										"width":"100%",
 										"height":"auto",
 										"layout":{
 											"type": "VerticalList"
 										},
 										"children": {
 										    "label1":{
 												"type": "label",
 												"value":"Element 1,"
 											},
 											"label2": {
 											    "type": "label",
                                                 "value": "Element 2,"
 											},
 											"label3": {
 											    "type": "label",
                                                 "value": "Element 3 (expanded)"
 											}
 										}
 									}
 								},
 								"accordion2":{
 									"expanded": false,
 									"left-icon":"",
 									"close":{
 										"width":"100%",
 										"height":"auto",
 										"layout":{
 											"type": "HorizontalList"
 										},
 										"children": {
 											"label1":{
 												"type": "label",
 												"value":"Element 1, "
 											},
 											"label2": {
 											    "type": "label",
                                                 "value": "Element 2,"
 											},
 											"label3": {
 											    "type": "label",
                                                 "value": "Element 3 (closed)"
 											}
 										}
 									},
 									"expand":{
 										"width":"100%",
 										"height":"auto",
 										"layout":{
 											"type": "VerticalList"
 										},
 										"children": {
 										    "label1":{
 												"type": "label",
 												"value":"Element 1,"
 											},
 											"label2": {
 											    "type": "label",
                                                 "value": "Element 2,"
 											},
 											"label3": {
 											    "type": "label",
                                                 "value": "Element 3 (expanded)"
 											}
 										}
 									}
 								},
 								"accordion3":{
 									"expanded": false,
 									"left-icon":"",
 									"close":{
 										"width":"100%",
 										"height":"auto",
 										"layout":{
 											"type": "HorizontalList"
 										},
 										"children": {
 											"label1":{
 												"type": "label",
 												"value":"Element 1, "
 											},
 											"label2": {
 											    "type": "label",
                                                 "value": "Element 2,"
 											},
 											"label3": {
 											    "type": "label",
                                                 "value": "Element 3 (closed)"
 											}
 										}
 									},
 									"expand":{
 										"width":"100%",
 										"height":"auto",
 										"layout":{
 											"type": "VerticalList"
 										},
 										"children": {
 										    "label1":{
 												"type": "label",
 												"value":"Element 1,"
 											},
 											"label2": {
 											    "type": "label",
                                                 "value": "Element 2,"
 											},
 											"label3": {
 											    "type": "label",
                                                 "value": "Element 3 (expanded)"
 											}
 										}
 									}
 								}
 							}
 						},
 						"separatoraccordeonmultiexpand": {
                             "type": "separator",
                             "height": "1px",
                             "width":"",
                             "color": "#cfcfcf",
                             "align": ""
                         },
 						"labelaccordeonmultiexpand":{
                             "type": "label",
                             "value": "Accordion multiexpand",
                             "class": "h3"
                         },
 						"accordeonmultiexpand":{
 							"width":"100%",
 							"height":"auto",
 							"layout":{
 								"type": "accordion",
 								"collapsible": true,
 								"multiexpand": true
 							},
 							"children":{
 								"accordion1":{
 									"expanded": false,
 									"left-icon":"",
 									"close":{
 										"width":"100%",
 										"height":"auto",
 										"layout":{
 											"type": "HorizontalList"
 										},
 										"children": {
 											"label1":{
 												"type": "label",
 												"value":"Element 1, "
 											},
 											"label2": {
 											    "type": "label",
                                                 "value": "Element 2,"
 											},
 											"label3": {
 											    "type": "label",
                                                 "value": "Element 3 (closed)"
 											}
 										}
 									},
 									"expand":{
 										"width":"100%",
 										"height":"auto",
 										"layout":{
 											"type": "VerticalList"
 										},
 										"children": {
 										    "label1":{
 												"type": "label",
 												"value":"Element 1,"
 											},
 											"label2": {
 											    "type": "label",
                                                 "value": "Element 2,"
 											},
 											"label3": {
 											    "type": "label",
                                                 "value": "Element 3 (expanded)"
 											}
 										}
 									}
 								},
 								"accordion2":{
 									"expanded": false,
 									"left-icon":"",
 									"close":{
 										"width":"100%",
 										"height":"auto",
 										"layout":{
 											"type": "HorizontalList"
 										},
 										"children": {
 											"label1":{
 												"type": "label",
 												"value":"Element 1, "
 											},
 											"label2": {
 											    "type": "label",
                                                 "value": "Element 2,"
 											},
 											"label3": {
 											    "type": "label",
                                                 "value": "Element 3 (closed)"
 											}
 										}
 									},
 									"expand":{
 										"width":"100%",
 										"height":"auto",
 										"layout":{
 											"type": "VerticalList"
 										},
 										"children": {
 										    "label1":{
 												"type": "label",
 												"value":"Element 1,"
 											},
 											"label2": {
 											    "type": "label",
                                                 "value": "Element 2,"
 											},
 											"label3": {
 											    "type": "label",
                                                 "value": "Element 3 (expanded)"
 											}
 										}
 									}
 								},
 								"accordion3":{
 									"expanded": false,
 									"left-icon":"",
 									"close":{
 										"width":"100%",
 										"height":"auto",
 										"layout":{
 											"type": "HorizontalList"
 										},
 										"children": {
 											"label1":{
 												"type": "label",
 												"value":"Element 1, "
 											},
 											"label2": {
 											    "type": "label",
                                                 "value": "Element 2,"
 											},
 											"label3": {
 											    "type": "label",
                                                 "value": "Element 3 (closed)"
 											}
 										}
 									},
 									"expand":{
 										"width":"100%",
 										"height":"auto",
 										"layout":{
 											"type": "VerticalList"
 										},
 										"children": {
 										    "label1":{
 												"type": "label",
 												"value":"Element 1,"
 											},
 											"label2": {
 											    "type": "label",
                                                 "value": "Element 2,"
 											},
 											"label3": {
 											    "type": "label",
                                                 "value": "Element 3 (expanded)"
 											}
 										}
 									}
 								}
 							}
 						},
                         "separatoraccordeon": {
                             "type": "separator",
                             "height": "1px",
                             "width":"100%",
                             "color": "#000",
                             "align": "center"
                         },
                         "labelsearch":{
                             "type": "label",
                             "value": "Search",
                             "class": "h3"
                         },
 						"search": {
 						    "width":"100%",
 							"height":"auto",
 							"layout":{
 								"type": "HorizontalList",
 								"list": ["titlebar"]
 							},
 							"children": {
 							   "globSearch": {
                                   "type": "search",
                                   "class": "search",
                                   "placeholder": "placeholder text",
                                   "searchBy": [
                                     "users.firstname",
                                     "order.title",
                                     "users.lastname",
                                     "counterparty.firstname",
                                     "counterparty.email",
                                     "lead.name"
                                   ]
                                 }
 							}
                         },
                         "separatorsearch": {
                             "type": "separator",
                             "height": "1px",
                             "width":"100%",
                             "color": "#000",
                             "align": "center"
                         },
                         "labelmenu":{
                             "type": "label",
                             "value": "Menu",
                             "class": "h3"
                         },
 						"menu": {
 						    "width":"100%",
 							"height":"auto",
 							"layout":{
 								"type": "HorizontalList",
 								"list": ["titlebar"]
 							},
 							"children": {
 						        "verticalmenu":{
                                   "type": "menu",
                                   "height": "auto",
                                   "updateonevent": [
                                     "task.modify"
                                   ],
                                   "class": "vertical-menu",
                                   "items": [
                                     {
                                         "title": "Vertical Menu",
                                         "items": [
                                         {
                                           "title": "CRM",
                                           "items": [
                                             {
                                               "title": "Activity Stream",
                                               "action": {
                                                 "type": "nav",
                                                 "linktype": "window",
                                                 "link": "/activitystream"
                                               }
                                             },
                                             {
                                               "title": "Quotes",
                                               "action": {
                                                 "type": "nav",
                                                 "linktype": "window",
                                                 "link": "/quotes"
                                               }
                                             },
                                             {
                                               "title": "",
                                               "modal": {
                                                 "type": "modal",
                                                 "class": "button",
                                                 "value": "Modal window",
                                                 "root": {
                                                   "width": "50%",
                                                   "height": "80%",
                                                   "layout": {
                                                     "type": "VerticalList",
                                                     "list": [
                                                       "leftmenu"
                                                     ]
                                                   },
                                                   "children": {
                                                     "label": {
                                                         "type":"label",
                                                         "value":"Testing modal in menu"
                                                     }
                                                   }
                                                 }
                                               }
                                             }
                                           ]
                                         },
                                         {
                                           "title": "Categories",
                                           "items": [
                                             {
                                               "title": "Art",
                                               "items": [
                                                 {
                                                   "title": "Pictures",
                                                   "action": {
                                                     "type": "nav",
                                                     "linktype": "window",
                                                     "link": "/pictures"
                                                   }
                                                 },
                                                 {
                                                   "title": "Towers",
                                                   "action": {
                                                     "type": "nav",
                                                     "linktype": "window",
                                                     "link": "/towers"
                                                   }
                                                 }
                                               ]
                                             },
                                             {
                                               "title": "Space",
                                               "action": {
                                                 "type": "nav",
                                                 "linktype": "window",
                                                 "link": "/space"
                                               }
                                             }
                                           ]
                                         },
                                         {
                                           "title": "Chat",
                                           "action": {
                                             "type": "nav",
                                             "linktype": "window",
                                             "link": "/chat"
                                           }
                                         },
                                         {
                                           "title": "Tasks",
                                           "action": {
                                             "type": "nav",
                                             "linktype": "window",
                                             "link": "/tasks"
                                           },
                                           "badge": {
                                             "type": "badge",
                                             "class": "menu",
                                             "value": "",
                                             "badge": "user/active-notifications",
                                             "event": "testEventB"
                                           }
                                         }
                                       ]
                                     }
                                   ]
                                 },
                                 "horizontalmenu":{
 									"type": "menu",
 									"class": "inline-menu",
 									"items": [
 									{
 										"title": "Menu",
 										"left-icon":"",
 										"items":[
 											{
 												"title": "Sub Menu A",
 												"left-icon":"",
 												"action": {
 												  "type": "nav",
 												  "linktype": "window",
 												  "link": "/submenu-a"
 												}
 											},
 											{
 												"title": "Sub Meny B",
 												"left-icon":"",
 												"action": {
 												  "type": "nav",
 												  "linktype": "window",
 												  "link": "/submenu-b"
 												}
 											},
 											{
 												"title": "Sub Menu C",
 												"left-icon":"",
 												"action": {
 												  "type": "nav",
 												  "linktype": "window",
 												  "link": "/submenu-c"
 												}
 											}
 										]
 									},
 									{
 									    "title": "Articles",
 										"left-icon":"",
 										"items":[
 											{
 												"title": "Article I",
 												"left-icon":"",
 												"action": {
 												  "type": "nav",
 												  "linktype": "window",
 												  "link": "/article-1"
 												}
 											},
 											{
 												"title": "Article II",
 												"left-icon":"",
 												"action": {
 												  "type": "nav",
 												  "linktype": "window",
 												  "link": "/article-2"
 												}
 											}
 										]
 									},
 									{
 										"title": "Types",
 										"left-icon":"",
 										"action": {
 										  "type": "nav",
 										  "linktype": "window",
 										  "link": "/types"
 										}
 									},
 									{
 										"title": "Categories",
 										"left-icon":"",
 										"items":[
 											{
 												"title": "Art",
 												"left-icon":"",
 												"action": {
 												  "type": "nav",
 												  "linktype": "window",
 												  "link": "/Menu Level I A-a"
 												}
 											},
 											{
 												"title": "Animals",
 												"left-icon":"",
 												"items":[
         											{
         												"title": "Domestique Animals",
         												"left-icon":"",
         												"action": {
         												  "type": "nav",
         												  "linktype": "window",
         												  "link": "/domestique-animals"
         												}
         											},
         											{
         												"title": "Wild Animals",
         												"left-icon":"",
         												"action": {
         												  "type": "nav",
         												  "linktype": "window",
         												  "link": "/wild-animals"
         												}
         											}
         										]
 											},
 											{
 												"title": "Flowers",
 												"left-icon":"",
 												"action": {
 												  "type": "nav",
 												  "linktype": "window",
 												  "link": "/flowers"
 												}
 											}
 										]
 									}]
 								}
 							}
                         },
                         "separatormenu": {
                             "type": "separator",
                             "height": "1px",
                             "width":"100%",
                             "color": "#000",
                             "align": "center"
                         }
                     }
                 }
             }
         }
     }
 }}',
                    'edited_metadata' => NULL,
                    'publish' => 1,
                    'deleted_at' => NULL,
                    'created_at' => '2017-11-15 11:05:36',
                    'updated_at' => '2017-11-15 16:30:05',
                )

        ));


    }
}