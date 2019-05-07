<?php

namespace Tests\Unit;

use App\Models\Counterparties;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Invoice;
use App\Models\InvoiceStatus;
use App\Models\Lead;
use App\Models\LeadStatus;
use App\Models\Orders;
use App\Models\OrdersStatus;
use App\Models\OrdersType;
use App\Models\PaymentGateway;
use App\Models\ProductCategory;
use App\Models\Products;
use App\Models\Quote;
use App\Models\QuoteStatus;
use App\Models\Rate;
use App\Models\TaxRule;
use App\Models\User;
use Tests\TestCase;

class ApiTest extends TestCase
{

    public $header;
    public $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = User::where('email', 'test@mail.com')->first();
        $this->company = $this->user->company_id;
        $this->header = $this->headers($this->user);
    }

    /**
     * @group querybuilder
     * Test insertion of model
     */
    public function testInsert()
    {

        $data = [
            'order_no' => \Faker\Factory::create()->monthName . ' Order' . time(),
            'title' => \Faker\Factory::create()->monthName . ' Order',
            'amount' => \Faker\Factory::create()->numberBetween(),
            'status' => ["id" => OrdersStatus::where('company_id', 3)->first()->id],
            'currency' => ["id" => Currency::first()->id],
            'quote' => ["id" => Quote::where('company_id', 3)->first()->id],
            'counterparty' => ["id" => Counterparties::where('company_id', 3)->first()->id],
            'type' => ["id" => OrdersType::where('company_id', 3)->first()->id],
        ];


        $response = $this->post($this->path . '/orders', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'amount']]);

        if (isset($response->getData()->id)) {
            Orders::destroy($response->getData()->id);
        }
    }

    /**
     * @group querybuilder
     * Test simple select of model records
     */
    public function testGet()
    {
        $response = $this->get($this->path . '/orders?_limit=2&_page=3', $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => ['id', 'title', 'amount']]]);
    }

    /**
     * @group querybuilder
     * Request with sort function
     */
    public function testGetWithSort()
    {
        $this->get($this->path . '/orders?_sort=amount', $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => ['id', 'title', 'amount']]]);
    }

    /**
     * @group querybuilder
     * Request with rellation
     */
    public function testGetWithRelation()
    {
        $this->get($this->path . '/orders?_with=products', $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => ['products']]]);
    }

    /**
     * @group querybuilder
     * Update records request
     */
    public function testUpdate()
    {
        $data = [
            'order_no' => \Faker\Factory::create()->monthName . ' Order' . time(),
            'title' => \Faker\Factory::create()->monthName . ' Order',
            'amount' => 33,
            'status' => ["id" => OrdersStatus::where('company_id', 3)->first()->id],
            'currency' => ["id" => Currency::first()->id],
            'quote' => ["id" => Quote::where('company_id', 3)->first()->id],
            'counterparty' => ["id" => Counterparties::where('company_id', 3)->first()->id],
            'type' => ["id" => OrdersType::where('company_id', 3)->first()->id],
        ];

        $response = $response = $this->post($this->path . '/orders', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonFragment(['amount' => 33]);

        $orderId = $response->getData()->id;

        $data = ['title' => 'Updated Order', 'amount' => 33];

        //check if returned data after update is equal with preload
        $response = $this->put($this->path . '/orders/' . $orderId, $data, $this->header)
            ->assertSuccessful()
            ->assertJsonFragment(['title' => 'Updated Order', 'amount' => "33.00"]);

        if (isset($orderId)) {
            Orders::destroy($orderId);
        }
    }

    /**
     * @group querybuilder
     *  Insert with rellation
     */
    public function testInsertRelation()
    {

        $preload = [
            'price' => 20,
            'catetegory_id' => 1,
            'company_id' => $this->user->company_id,
            'status_id' => 1,
        ];

        $product = Products::create($preload);

        $preload_order = [
            'order_no' => \Faker\Factory::create()->monthName . ' Order' . time(),
            'title' => 'Test Order',
            'amount' => 200,
            'status' => ["id" => OrdersStatus::where('company_id', 3)->first()->id],
            'currency' => ["id" => Currency::first()->id],
            'quote' => ["id" => Quote::where('company_id', 3)->first()->id],
            'counterparty' => ["id" => Counterparties::where('company_id', 3)->first()->id],
            'type' => ["id" => OrdersType::where('company_id', 3)->first()->id],
            "products" => [['id' => $product->id, 'price' => 20, 'quantity' => 40]],
        ];

        $response = $this->post($this->path . '/orders', $preload_order, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'amount']]);

        $order = $response->getData();

        //Check if inserted relation have inserted data

        $response = $this->get($this->path . '/orders?_with=products&_filters[]=id-eq=' . $order->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => ['id', 'title', 'products']]])
            ->assertJsonFragment(['price' => '20.00', 'quantity' => '40.00']);

        $order = Orders::find($order->id);
        //remove assigned products to order
        $order->products()->detach([$product->id]);
        //remove product
        $product->delete();
        //remove order
        $order->delete();
    }

    /**
     * @group querybuilder
     * Test update with relation
     */
    public function testUpdateRelation()
    {
        $order = Orders::where('company_id', $this->user->company_id)->first();
        $product_preload = [
            'price' => 20,
            'catetegory_id' => 1,
            'company_id' => $this->user->company_id,
            'status_id' => 1,
        ];

        //Add new product
        $product = Products::create($product_preload);
        $order->products()->attach($product->id, ['quantity' => 12, 'price' => 1, 'total' => 12]);

        $update_preload = [
            'title' => 'Updated Order',
            'amount' => 20,
            "products" => [['id' => $product->id, "price" => 2, 'quantity' => 10, 'total' => 20]],
        ];

        $this->put($this->path . '/orders/' . $order->id, $update_preload, $this->header)
            ->assertSuccessful();

        //Check if updated values exists
        $response = $this->get($this->path . '/orders?_with=products&_filters[]=id-eq=' . $order->id, $this->header)
            ->assertSuccessful()
            ->assertJsonFragment(['amount' => "20.00", 'quantity' => "10.00"]);

        //Remove products assigned to order
        $order->products()->sync([]);

        //Remove order
        $product->delete();
    }

    /**
     * @group querybuilder
     * Try to test simple validation
     */
    public function testError()
    {

        $order_preload = ['title' => 'New Order'];

        $this->post($this->path . '/orders', $order_preload, $this->header)
            ->assertStatus(422);
    }

    /**
     * @group querybuilder
     * Test sort & multiple filter & fields (selet)
     */
    public function testSort()
    {

        $orders_preload = [
            ['title' => 'New Order 1', 'amount' => 10, 'company_id' => $this->user->company_id],
            ['title' => 'New Order 2', 'amount' => 5, 'company_id' => $this->user->company_id],
        ];

        foreach ($orders_preload as $order) {
            $order = Orders::create($order);
            $orders[] = $order;
            $ids[] = $order->id;
        }

        $filter = implode(',', $ids);

        $response = $this->get($this->path . '/orders?_filters[]=id-in=' . $filter . '&_sort=amount&_fields=amount', $this->header)
            ->assertSuccessful()
            ->assertJson(['data' => [['amount' => 5], ['amount' => 10]]]);

        foreach ($orders_preload as $order) {
            Orders::where($order)->delete();
        }
    }

    /**
     * @group i18n
     * Test i18n title on products table with post
     */
    public function testi18nTitleProducts()
    {

        $title = 'Reebok';
        $description = 'River';

        $data = [
            'price' => 250,
            'unit_id' => 1,
            'company_id' => $this->user->company_id,
            "i18n" => [[
                'title' => $title,
                'description' => $description,
                'language_id' => 1,
            ]],
            'category' => ['id' => ProductCategory::where('company_id', $this->user->company_id)->first()->id],
        ];

        $postResponse = $this->post($this->path . '/products', $data, $this->header)
            ->assertSuccessful();

        $response = $this->get($this->path . '/products?_filters[]=title-lk=' . $title, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'price', 'i18n']]])
            ->assertJsonFragment(['title' => $title]);

        $response = $this->delete($this->path . '/products/'.$postResponse->getData()->id, $this->header)
            ->assertSuccessful();
    }

    /**
     * @group i18n
     * Test i18n description and title on products table
     */
    public function testi18nTitleDescriptionProducts()
    {

        $title = 'Reebok';
        $description = 'River';

        $data = [
            'price' => 250,
            'unit_id' => 1,
            'company_id' => $this->user->company_id,
            "i18n" => [[
                'title' => $title,
                'description' => $description,
                'language_id' => 1,
            ]],
            'category' => ['id' => ProductCategory::where('company_id', $this->user->company_id)->first()->id],
        ];

        $postResponse = $this->post($this->path . '/products', $data, $this->header)
            ->assertSuccessful();

        $response = $this->get($this->path . '/products?_filters[]=description-lk=' . $description . '&_filters[]=title-lk=' . $title, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => ['id', 'price', 'i18n']]])
            ->assertJsonFragment(['title' => $title, 'description' => $description]);

        $response = $this->delete($this->path . '/products/'.$postResponse->getData()->id, $this->header)
            ->assertSuccessful();
    }

    /**
     * @group i18n
     * Test i18n title with _with parameter and insert
     */
    public function testi18nTitleWithProducts()
    {

        $title = 'Coral';

        $data = [
            'price' => 3000,
            'unit_id' => 1,
            'company_id' => $this->user->company_id,
            "i18n" => [[
                'title' => $title,
                'language_id' => 1,
            ]],
            'category' => ['id' => ProductCategory::where('company_id', $this->user->company_id)->first()->id],
        ];

        $postResponse = $this->post($this->path . '/products', $data, $this->header)
            ->assertSuccessful();

        $response = $this->get($this->path . '/products?_filters[]=price-eq=3000&_filters[]=title-lk=' . $title . '&_with=unit', $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => ['id', 'price', 'i18n', 'unit']]])
            ->assertJsonFragment(['title' => $title, 'description' => null]);

        $response = $this->delete($this->path . '/products/'.$postResponse->getData()->id, $this->header)
            ->assertSuccessful();
    }

    /**
     * @group i18n
     * Test i18n title with _with parameter and other filters
     */
    public function testi18nTitleWithFiltersProducts()
    {
        $title = 'Coral';

        $data = [
            'price' => 3000,
            'unit_id' => 1,
            'company_id' => $this->user->company_id,
            "i18n" => [[
                'title' => $title,
                'language_id' => 1,
            ]],
            'status_id' => 1,
            'category' => ['id' => ProductCategory::where('company_id', $this->user->company_id)->first()->id],
        ];

        $postResponse = $this->post($this->path . '/products', $data, $this->header)
            ->assertSuccessful();

        $response = $this->get($this->path . '/products?_filters[]=price-gt=20&_filters[]=status_id-eq=1&_filters[]=title-lk=' . $title . '&_with=unit', $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => ['id', 'price', 'i18n', 'unit']]])
            ->assertJsonFragment(['title' => $title, 'description' => null]);

        $response = $this->delete($this->path . '/products/'.$postResponse->getData()->id, $this->header)
            ->assertSuccessful();
    }

    /**
     * @group i18n
     * Test i18n title complex title
     */
    public function testi18nTitleComplexProducts()
    {

        $title = 'c91c03ea6';

        $response = $this->get($this->path . '/products?_filters[]=title-lk=' . $title . '&_with=unit', $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => []]]);
    }

    /**
     * @group i18n
     * Test i18n title of state
     */
    public function testi18nTitleState()
    {
        $title = 'Cahul';

        $response = $this->get($this->path . '/states?_filters[]=title-lk=*' . $title . '*', $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => ['country_id', 'i18n']]])
            ->assertJsonFragment(['title' => 'Cahul']);
    }

    /**
     * @group i18n
     * Test i18n title of countries
     */
    public function testi18nTitleCountry()
    {
        $title = 'Afghanistan';

        $response = $this->get($this->path . '/countries?_filters[]=title-lk=' . $title, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => ['code', 'i18n']]])
            ->assertJsonFragment(['title' => 'Afghanistan']);
    }

    /**
     * @group i18n
     * Test i18n title of countries
     */
    public function testGetLanguages()
    {

        $response = $this->get($this->path . '/language', $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => ['code', 'title']]]);
    }

    /**
     * @group simple
     * Test get contacts
     */
    public function testGetContact()
    {

        $response = $this->get($this->path . '/contacts', $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => ['firstname', 'lastname']]]);
    }

    /**
     * @group simple
     * Test get extra accounts
     */
    public function testGetEAccounts()
    {

        $response = $this->get($this->path . '/extra_accounts', $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => ['provider_type', 'provider_id']]]);
    }

    /**
     * @group simple
     * Test get departments
     */
    public function testGetDepartment()
    {

        $response = $this->get($this->path . '/departments', $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ["*" => ['i18n']]]);
    }

    /**
     * @group i18n_taxrule
     * Test i18n title on tax rule table with post
     */
    public function testi18nTaxRule()
    {

        $tax_rate = 13.20;
        $title = 'Rate No.1';

        $data = [
            'company' => ['id' => $this->user->company_id],
            'country' => ['id' => Country::first()],
            'tax_rate' => $tax_rate,
            "i18n" => [[
                'title' => $title,
                'language_id' => 2,
            ]],
        ];

        $response = $this->post($this->path . '/tax/rules', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'tax_rate']]);

        $response = $this->get($this->path . '/tax/rules?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'tax_rate', 'i18n']]])
            ->assertJsonFragment(['title' => $title]);
    }

    /**
     * @group rate
     * Test rate
     */
    public function testRate()
    {

        $tax_rate = 13.20;
        $title = 'Rate No.1';

        $firstCurrency = Currency::first();
        $secondCurrency = Currency::skip(1)->first();

        $data = [
            'tax_rate' => $tax_rate,
            'amount' => 1,
            'main_currency' => ["id" => $firstCurrency->id],
            'second_currency' => ["id" => $secondCurrency->id],
        ];

        // post
        $responsePost = $this->post($this->path . '/rates', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['tax_rate', 'main_currency_id', 'second_currency_id']]);

        $dataPUT = [
            'tax_rate' => $tax_rate,
            'amount' => 22,
            'main_currency' => ["id" => $firstCurrency->id],
            'second_currency' => ["id" => $secondCurrency->id],
        ];
        // put
        $response = $this->put($this->path . '/rates/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'tax_rate']]);

        // get
        $response = $this->get($this->path . '/rates?_with=currency_one,currency_two', $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'tax_rate', 'amount', 'currency_one', 'currency_two']]]);

        $data = [
            'rate' => ["id" => 3],
            'company_id' => $this->user->company_id,
        ];

        // post
        $responsePostQP = $this->post($this->path . '/company/rates', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'rate_id', 'company_id', 'created_at', 'updated_at']]);

        // delete
        $response = $this->delete($this->path . '/rates/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);

        // get
        $response = $this->get($this->path . '/rates?_filters[]=id-eq=' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => []]]);

        // get
        $response = $this->get($this->path . '/company/rates?_filters[]=id-eq=' . $responsePostQP->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => []]]);

    }

    /**
     * @group taxrate
     * Test taxrate
     */
    public function testTaxRate()
    {

        $tax_rate = 13.20;

        $data = [
            'tax_rate' => $tax_rate,
            'country' => ['id' => 1],
            'type' => ['id' => 1],
        ];

        $dataPUT = [
            'tax_rate' => 22.00,
            'country' => ['id' => 1],
            'type' => ['id' => 1],
        ];

        // post
        $responsePost = $this->post($this->path . '/tax/rates/', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['tax_rate', 'id']]);

        // put
        $response = $this->put($this->path . '/tax/rates/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'tax_rate']]);

        // get
        $response = $this->get($this->path . '/tax/rates?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'tax_rate']]]);

        // dd($response);

        // delete
        $response = $this->delete($this->path . '/tax/rates/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);

        // dd($response);

    }

    /**
     * @group taxrule
     * Test taxrule
     */
    public function testTaxRule()
    {

        $tax_rate = 13.20;

        $data = [
            'tax_rate' => $tax_rate,
            'company' => ['id' => $this->user->company_id],
            'country' => ['id' => 1],
        ];

        $dataPUT = [
            'tax_rate' => 22.00,
            'company' => ['id' => $this->user->company_id],
            'country' => ['id' => 1],
        ];

        $firstTaxRule = TaxRule::orderBy('id', 'desc')->first();

        // put
        $response = $this->put($this->path . '/tax/rules/' . $firstTaxRule->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'tax_rate']]);

        // dd($response);

        // get
        $response = $this->get($this->path . '/tax/rules?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'tax_rate']]]);

        // dd($response);

        // delete
        $response = $this->delete($this->path . '/tax/rules/' . $firstTaxRule->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);

        // dd($response);

    }

    /**
     * @group currency
     * Test currency
     */
    public function testCurrency()
    {
        $data = [
            'prefix' => NULL,
            'sign' => \Faker\Factory::create()->firstname(),
            'suffix' => '$',
            'country' => ['id' => 1],
        ];

        // post
        $responsePost = $this->post($this->path . '/currency', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['sign', 'id']]);

        $dataPUT = [
            'prefix' => '$',
            'suffix' => NULL,
        ];
        // put
        $response = $this->put($this->path . '/currency/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'sign', 'prefix', 'suffix']]);

        // dd($response);

        // get
        $response = $this->get($this->path . '/currency', $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'sign', 'suffix', 'prefix']]]);

        // delete
        $response = $this->delete($this->path . '/currency/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);

        // dd($response);

    }

    /**
     * @group company_currency
     * Test company currency
     */
    public function testCompanyCurrency()
    {
        $firstCurrency = Currency::first();
        $secondCurrency = Currency::skip(1)->first();

        $userCompanyID = $this->user->company_id;

        $data = [
            'currency' => ['id' => $firstCurrency->id],
            'company' => ['id' => $userCompanyID],
        ];

        // post
        $responsePost = $this->post($this->path . '/company/currency', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['currency_id', 'id', 'company_id']]);

        $dataPUT = [
            'currency_id' => $secondCurrency,
        ];
        // put
        $response = $this->put($this->path . '/company/currency/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['currency_id', 'id', 'company_id']]);

        // dd($response);

        // get
        $response = $this->get($this->path . '/company/currency?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['currency_id', 'id', 'company_id']]]);

        // delete
        $response = $this->delete($this->path . '/company/currency/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);

        // dd($response);

    }

    /**
     * @group company_rate
     * Test company rate
     */
    public function testCompanyRate()
    {

        $firstCurrency = Currency::first();
        $secondCurrency = Currency::skip(1)->first();

        $preloadRate = [
            'tax_rate' => 133.22,
            'amount' => 1,
            'main_currency' => ['id' => $firstCurrency->id],
            'second_currency' => ['id' => $secondCurrency->id],
        ];

        $rate = Rate::create($preloadRate);

        $userCompanyID = $this->user->company_id;

        $data = [
            'rate' => ['id' => $rate->id],
            'company_id' => $userCompanyID,
        ];

        // post
        $responsePost = $this->post($this->path . '/company/rates', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['rate_id', 'id', 'company_id']]);

        $preloadRateSecond = [
            'tax_rate' => 22.22,
            'amount' => 1,
            'main_currency' => ['id' => $firstCurrency->id],
            'second_currency' => ['id' => $secondCurrency->id],
        ];

        $rateSecond = Rate::create($preloadRateSecond);

        $dataPUT = [
            'rate' => ['id' => $rateSecond->id],
        ];
        // put
        $response = $this->put($this->path . '/company/rates/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['rate_id', 'id', 'company_id']]);

        // dd($response);

        // get
        $response = $this->get($this->path . '/company/rates?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['rate_id', 'id', 'company_id']]]);

        // delete
        $response = $this->delete($this->path . '/company/rates/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);


        $rate->delete();
        $rateSecond->delete();

        // dd($response);

    }

    /**
     * @group rate_history
     * Test rate_history
     */
    public function testRateHistory()
    {

        $firstCurrency = Currency::first();
        $secondCurrency = Currency::skip(1)->first();

        $preloadRate = [
            'tax_rate' => 133.22,
            'amount' => 1,
            'main_currency' => $firstCurrency->id,
            'second_currency' => $secondCurrency->id,
        ];

        $rate = Rate::create($preloadRate);

        $userCompanyID = $this->user->company_id;

        $data = [
            'rate' => ['id' => $rate->id],
            'tax_rate' => 22.00,
            'amount' => 1,
        ];

        // post
        $responsePost = $this->post($this->path . '/rate/history', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['rate_id', 'id', 'tax_rate']]);

        $dataPUT = [
            'rate' => ['id' => $rate->id],
            'tax_rate' => 20.00,
            'amount' => 1,
        ];
        // put
        $response = $this->put($this->path . '/rate/history/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['rate_id', 'id', 'tax_rate']]);

        // dd($responsePUT);

        // dd($response);

        // get
        $response = $this->get($this->path . '/rate/history?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['rate_id', 'id', 'tax_rate']]]);

        // delete
        $response = $this->delete($this->path . '/rate/history/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);


        $rate->delete();

        // dd($response);

    }

    /**
     * @group countries1
     * Test countries
     */
    public function testCountry()
    {
        $data = [
            'code' => 'ABCD',
        ];

        // post
        $responsePost = $this->post($this->path . '/countries', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['code', 'id']]);

        $dataPUT = [
            'code' => 'ABCDqw',
        ];

        // put
        $response = $this->put($this->path . '/countries/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['code', 'id']]);

        // get
        $response = $this->get($this->path . '/countries?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['code', 'id', 'icon']]]);

        // delete
        $response = $this->delete($this->path . '/countries/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);

        // get
        $response = $this->get($this->path . '/countries?_filters[]=id-eq=' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => []]]);

        // get
        $response = $this->get($this->path . '/states?_filters[]=country_id-eq=' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => []]]);
    }

    /**
     * @group state
     * Test state
     */
    public function testState()
    {
        $data = [
            'code' => 'HR',
        ];

        // post
        $responsePost = $this->post($this->path . '/states', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['code', 'id']]);

        $dataPUT = [
            'code' => 'HR.R',
        ];

        // put
        $response = $this->put($this->path . '/states/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['code', 'id', 'icon']]);

        // get
        $response = $this->get($this->path . '/states?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['code', 'id', 'icon']]]);

        // delete
        $response = $this->delete($this->path . '/states/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);

    }

    /**
     * @group measure
     * Test measure
     */
    public function testMeasure()
    {
        $data = [
            "i18n" => [[
                'title' => 'kelvin',
                'language_id' => 1,
            ]],
        ];

        // post
        $responsePost = $this->post($this->path . '/measurements', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        $dataPUT = [
            "i18n" => [[
                'title' => 'kelvins',
                'language_id' => 1,
            ]],
        ];

        // put
        $response = $this->put($this->path . '/measurements/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/measurements?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'created_at', 'updated_at', 'i18n']]]);

        // delete
        $response = $this->delete($this->path . '/measurements/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group contract
     * Test contract
     */
    public function testContract()
    {
        $data = [
            "company_id" => $this->user->company_id,
            'title' => 'Contract #NO.2',
            'description' => 'This is a contract between client and company',
            'total_price' => 23131.41,
        ];

        // post
        $responsePost = $this->post($this->path . '/contracts', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'description', 'created_at', 'updated_at']]);

        $dataPUT = [
            'total_price' => 10000.23,
            'description' => 'Latest price',
        ];

        // put
        $response = $this->put($this->path . '/contracts/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'description', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/contracts?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'created_at', 'updated_at', 'title', 'description']]]);

        // delete
        $response = $this->delete($this->path . '/contracts/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group contract_type
     * Test contract_type
     */
    public function testContractType()
    {
        $data = [
            "i18n" => [[
                'title' => 'Cost-plus-incentive-fee (CPIF) ',
                'language_id' => 1,
            ]],
            "company_id" => $this->user->company_id,
        ];

        // post
        $responsePost = $this->post($this->path . '/contract/types', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        $dataPUT = [
            "i18n" => [[
                'title' => 'Cost-plus-award-fee (CPAF)',
                'language_id' => 1,
            ]],
            "company_id" => $this->user->company_id,
        ];

        // put
        $response = $this->put($this->path . '/contract/types/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at', 'i18n']]);

        // get
        $response = $this->get($this->path . '/contract/types?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'created_at', 'updated_at', 'i18n']]]);

        // delete
        $response = $this->delete($this->path . '/contract/types/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);

    }

    /**
     * @group counterparties
     * Test counterparties
     */
    public function testCounterparts()
    {
        $data = [
            "company_id" => $this->user->company_id,
            'email' => \Faker\Factory::create()->email,
            'firstname' => 'Counterparty',
        ];

        // post
        $responsePost = $this->post($this->path . '/counterparties', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'email', 'firstname', 'created_at', 'updated_at']]);

        $dataPUT = [
            'email' => \Faker\Factory::create()->email,
            'firstname' => 'modcounterpartfn',
        ];

        // put
        $response = $this->put($this->path . '/counterparties/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'firstname', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/counterparties?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'created_at', 'updated_at', 'email', 'firstname']]]);

        // delete
        $response = $this->delete($this->path . '/counterparties/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group counterpart_type
     * Test counterpart_type
     */
    public function testCounterpartType()
    {
        $data = [
            "i18n" => [[
                'title' => 'Reseller',
                'language_id' => 1,
            ]],
        ];

        // post
        $responsePost = $this->post($this->path . '/counterparties/type', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        $dataPUT = [
            "i18n" => [[
                'title' => 'Seller',
                'language_id' => 1,
            ]],
        ];

        // put
        $response = $this->put($this->path . '/counterparties/type/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at', 'i18n']]);

        // get
        $response = $this->get($this->path . '/counterparties/type?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'created_at', 'updated_at', 'i18n']]]);

        // delete
        $response = $this->delete($this->path . '/counterparties/type/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);

    }

    /**
     * @group counterpart_group
     * Test counterpart_group
     */
    public function testCounterpartGroup()
    {
        $data = [
            'title' => 'Group Payers',
            "company_id" => $this->user->company_id,
        ];

        // post
        $responsePost = $this->post($this->path . '/counterparty/groups', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'created_at', 'updated_at']]);

        $dataPUT = [
            'title' => 'Group Buyers',
            "company_id" => $this->user->company_id,
        ];

        // put
        $response = $this->put($this->path . '/counterparty/groups/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'company_id', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/counterparty/groups?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'created_at', 'updated_at', 'title', 'description']]]);

        // delete
        $response = $this->delete($this->path . '/counterparty/groups/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group contact
     * Test contact
     */
    public function testContact()
    {
        $data = [
            "company_id" => $this->user->company_id,
            'firstname' => 'SomeContact',
        ];

        // post
        $responsePost = $this->post($this->path . '/contacts', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'firstname', 'created_at', 'updated_at']]);

        $dataPUT = [
            'firstname' => 'ContactNo1',
        ];

        // put
        $response = $this->put($this->path . '/contacts/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'firstname', 'lastname', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/contacts?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'created_at', 'updated_at', 'firstname']]]);

        // delete
        $response = $this->delete($this->path . '/contacts/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group orders1
     * Test orders
     */
    public function testOrders()
    {
        $data = [
            "order_no" => 'testNo' . time(),
            "status" => ['id' => OrdersStatus::where('company_id', $this->user->company_id)->first()->id],
            "currency" => ['id' => Currency::first()->id],
            "quote" => ['id' => Quote::where('company_id', $this->user->company_id)->first()->id],
            "counterparty" => ['id' => Counterparties::where('company_id', $this->user->company_id)->first()->id],
            "type" => ['id' => OrdersType::where('company_id', $this->user->company_id)->first()->id],
            "company_id" => $this->user->company_id,
            'title' => 'Order 1',
            'amount' => 31.94,
        ];

        // post
        $responsePost = $this->post($this->path . '/orders', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'amount', 'created_at', 'updated_at']]);

        $dataPUT = [
            'title' => 'Upd Order 1',
            'amount' => 313.94,
        ];

        // put
        $response = $this->put($this->path . '/orders/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'amount', 'created_at', 'updated_at']]);

        $preloadProductOrder = [
            'title' => 'Order Product',
            'amount' => 322.33,
            'id' => $responsePost->getData()->id,
            'price' => 85.33,
            'quantity' => 32.33,
            "products" => [['id' => Products::where('company_id', $this->user->company_id)->first()->id, 'price' => 22.30, 'quantity' => 4.30]],
        ];

        // put with relation
        $response = $this->put($this->path . '/orders/' . $responsePost->getData()->id, $preloadProductOrder, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'amount', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/orders?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'created_at', 'updated_at', 'title', 'amount']]]);

        $data = [
            'product' => ['id' => Products::where('company_id', $this->user->company_id)->first()->id],
            'order' => ['id' => $responsePost->getData()->id],
            'quantity' => 312,
            'price' => 85.33,
        ];

        // post
        $responsePostQP = $this->post($this->path . '/order/products', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'product_id', 'order_id', 'quantity', 'created_at', 'updated_at']]);


        // delete
        $response = $this->delete($this->path . '/orders/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);

        // get
        $response = $this->get($this->path . '/orders?_filters[]=id-eq=' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => []]]);

        // get
        $response = $this->get($this->path . '/order/products?_filters[]=id-eq=' . $responsePostQP->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => []]]);

    }

    /**
     * @group order_status
     * Test order_status
     */
    public function testOrderStatus()
    {
        $data = [
            "i18n" => [[
                'title' => 'OS1',
                'language_id' => 1,
            ]],
            "company_id" => $this->user->company_id,
        ];

        // post
        $responsePost = $this->post($this->path . '/order/status', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        $dataPUT = [
            "i18n" => [[
                'title' => 'UP OS1',
                'language_id' => 1,
            ]],
            "company_id" => $this->user->company_id,
        ];

        // put
        $response = $this->put($this->path . '/order/status/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at', 'i18n']]);


        // get
        $response = $this->get($this->path . '/order/status?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'created_at', 'updated_at', 'i18n']]]);

        // delete
        $response = $this->delete($this->path . '/order/status/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group order_types
     * Test order_types
     */
    public function testOrderTypes()
    {
        $data = [
            "i18n" => [[
                'title' => 'OT1',
                'language_id' => 1,
            ]],
            "company_id" => $this->user->company_id,
        ];

        // post
        $responsePost = $this->post($this->path . '/order/types', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        $dataPUT = [
            "i18n" => [[
                'title' => 'UP OT1',
                'language_id' => 1,
            ]],
            "company_id" => $this->user->company_id,
        ];

        // put
        $response = $this->put($this->path . '/order/types/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at', 'i18n']]);

        // get
        $response = $this->get($this->path . '/order/types?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'created_at', 'updated_at', 'i18n']]]);

        // delete
        $response = $this->delete($this->path . '/order/types/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group product_status
     * Test product_status
     */
    public function testProductStatus()
    {
        $data = [
            "i18n" => [[
                'title' => 'PS1',
                'language_id' => 1,
            ]],
            'company_id' => $this->user->company_id,
        ];

        // post
        $responsePost = $this->post($this->path . '/product/status', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id']]);

        $dataPUT = [
            "i18n" => [[
                'title' => 'UP PS1',
                'language_id' => 1,
            ]],
            'company_id' => $this->user->company_id,
        ];

        // put
        $response = $this->put($this->path . '/product/status/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'i18n']]);

        // get
        $response = $this->get($this->path . '/product/status?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'i18n']]]);

        // delete
        $response = $this->delete($this->path . '/product/status/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group product_category
     * Test product_category
     */
    public function testProductCategory()
    {
        $data = [
            "i18n" => [[
                'title' => 'PC1',
                'language_id' => 1,
            ]],
            "company_id" => $this->user->company_id,
        ];

        // post
        $responsePost = $this->post($this->path . '/product/category', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id']]);

        $dataPUT = [
            "i18n" => [[
                'title' => 'UP PC1',
                'language_id' => 1,
            ]],
            "company_id" => $this->user->company_id,
        ];

        // put
        $response = $this->put($this->path . '/product/category/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'i18n']]);

        // get
        $response = $this->get($this->path . '/product/category?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'i18n']]]);

        // delete
        $response = $this->delete($this->path . '/product/category/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group products1
     * Test products
     */
    public function testProducts()
    {
        $data = [
            "category" => ['id' => ProductCategory::where('company_id', $this->user->company_id)->first()->id],
            'price' => 22,
            "i18n" => [[
                'title' => 'P1',
                'language_id' => 1,
            ]],
        ];

        // post
        $responsePost = $this->post($this->path . '/products', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id']]);

        $dataPUT = [
            "category" => ['id' => ProductCategory::where('company_id', $this->user->company_id)->first()->id],
            'price' => 33,
            "i18n" => [[
                'title' => 'UP P1',
                'language_id' => 1,
            ]],
        ];

        // put
        $response = $this->put($this->path . '/products/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'i18n']]);

        $preloadProductOrder = [
            'price' => 35.33,
            "orders" => [['id' => 12, 'price' => 22.30, 'quantity' => 4.30]],
        ];

        // put with relation
        $response = $this->put($this->path . '/products/' . $responsePost->getData()->id, $preloadProductOrder, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'price', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/products?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'i18n']]]);

        // delete
        $response = $this->delete($this->path . '/products/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group counterparties_group
     * Test counterparties_group
     */
    public function testCounterpartiesGroup()
    {
        $data = [
            'title' => 'Selling Group',
            "company_id" => $this->user->company_id,
        ];

        // post
        $responsePost = $this->post($this->path . '/counterparty/groups', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'created_at', 'updated_at']]);

        $dataPUT = [
            'title' => 'Distribution Group',
            "company_id" => $this->user->company_id,
        ];

        // put
        $response = $this->put($this->path . '/counterparty/groups/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/counterparty/groups?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'title', 'created_at', 'updated_at']]]);

        // delete
        $response = $this->delete($this->path . '/counterparty/groups/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group quote1
     * Test quote
     */
    public function testQuote()
    {
        $data = [
            "company_id" => $this->user->company_id,
            'title' => 'Quote One',
            'counterparty' => ['id' => $this->getRandIdFromCompany(new Counterparties())],
            'status' => ['id' => $this->getRandIdFromCompany(new QuoteStatus())],
            'currency' => ['id' => Currency::take(10)->get()->random()->id],
            'available_all' => 1,
            'amount' => 100,
            'products' => [
                [
                    'id' => $this->getRandIdFromCompany(new Products()),
                    'quantity' => 30,
                    'price' => 10,
                ],
            ],
        ];

        // post
        $responsePost = $this->post($this->path . '/quotes', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'created_at', 'updated_at']]);

        $dataPUT = [
            'title' => 'UPD Quote',
            'amount' => 213.03,
        ];

        // put
        $response = $this->put($this->path . '/quotes/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'created_at', 'updated_at']]);

        $preloadProductQuote = [
            'title' => 'Quote Product',
            'amount' => 3221.33,
            'currency_id' => 1,
            "products" => [['id' => $this->getRandIdFromCompany(new Products()), 'price' => 22.30, 'quantity' => 41.30]],
        ];

        // put with relation
        $response = $this->put($this->path . '/quotes/' . $responsePost->getData()->id, $preloadProductQuote, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'amount', 'created_at', 'updated_at']]);

        $data = [
            'product' => ['id' => $this->getRandIdFromCompany(new Products())],
            'quote' => ['id' => $responsePost->getData()->id],
            'quantity' => 312,
            'price' => '20',
        ];

        // post
        $responsePostQP = $this->post($this->path . '/quote/products', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'product_id', 'quote_id', 'quantity', 'created_at', 'updated_at']]);


        // delete
        $response = $this->delete($this->path . '/quotes/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);

        // get
        $response = $this->get($this->path . '/quotes?_filters[]=id-eq=' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => []]]);

        // get
        $response = $this->get($this->path . '/quote/products?_filters[]=id-eq=' . $responsePostQP->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => []]]);
    }

    /**
     * @group quote_status
     * Test quote_status
     */
    public function testQuoteStatus()
    {
        $data = [
            'company_id' => $this->user->company_id,
            "i18n" => [[
                'title' => 'QS1',
                'language_id' => 1,
            ]],

        ];

        // post
        $responsePost = $this->post($this->path . '/quote/status', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        $dataPUT = [
            'company_id' => $this->user->company_id,
            "i18n" => [[
                'title' => 'QS1 UP',
                'language_id' => 1,
            ]],
        ];

        // put
        $response = $this->put($this->path . '/quote/status/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/quote/status?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'created_at', 'updated_at']]]);

        // delete
        $response = $this->delete($this->path . '/quote/status/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group quote_products
     * Test quote_products
     */
    public function testQuoteProducts()
    {
        $data = [
            'product' => ['id' => $this->getRandIdFromCompany(new Products())],
            'quote' => ['id' => $this->getRandIdFromCompany(new Quote())],
            'quantity' => 312,
            'price' => 20,
        ];

        // post
        $responsePost = $this->post($this->path . '/quote/products', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'product_id', 'quote_id', 'quantity', 'created_at', 'updated_at']]);

        $dataPUT = [
            'product' => ['id' => $this->getRandIdFromCompany(new Products())],
            'quote' => ['id' => $this->getRandIdFromCompany(new Quote())],
            'quantity' => 300,
            'price' => 25,
        ];

        // put
        $response = $this->put($this->path . '/quote/products/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'product_id', 'quote_id', 'quantity', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/quote/products?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'product_id', 'quote_id', 'quantity', 'created_at', 'updated_at']]]);

        // delete
        $response = $this->delete($this->path . '/quote/products/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group transaction
     * Test transaction
     */
    public function testTransaction()
    {
        $data = [
            'gateway' => ['id' => $this->getRandIdFromCompany(new PaymentGateway())],
            'amount' => 31.33,
        ];

        // post
        $responsePost = $this->post($this->path . '/transactions', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'gateway_id', 'amount']]);

        $dataPUT = [
            'amount' => 332.31,
        ];

        // put
        $response = $this->put($this->path . '/transactions/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'gateway_id', 'amount']]);

        // get
        $response = $this->get($this->path . '/transactions?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'gateway_id', 'amount', 'created_at']]]);

        // delete
        $response = $this->delete($this->path . '/transactions/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group salutations
     * Test salutations
     */
    public function testSalutation()
    {
        $data = [
            "i18n" => [[
                'title' => 'Mrs',
                'language_id' => 1,
            ]],

        ];

        // post
        $responsePost = $this->post($this->path . '/salutations', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id']]);

        $dataPUT = [
            "i18n" => [[
                'title' => 'Mr',
                'language_id' => 1,
            ]],
        ];

        // put
        $response = $this->put($this->path . '/salutations/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id']]);

        // get
        $response = $this->get($this->path . '/salutations?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'i18n']]]);

        // delete
        $response = $this->delete($this->path . '/salutations/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group lead
     * Test lead
     */
    public function testLead()
    {
        $data = [
            "company_id" => $this->user->company_id,
            'name' => 'Lead 1',
            'status' => ['id' => $this->getRandIdFromCompany(new LeadStatus())],
        ];

        // post
        $responsePost = $this->post($this->path . '/leads', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'name', 'created_at', 'updated_at']]);

        $dataPUT = [
            'name' => "testName",
            'status' => ['id' => $this->getRandIdFromCompany(new LeadStatus())],
        ];

        // put
        $response = $this->put($this->path . '/leads/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'name', 'created_at', 'updated_at']]);

        $preloadProductLead = [
            'name' => 'Lead N.1',
            'amount' => 11.33,
            'status' => ['id', $this->getRandIdFromCompany(new LeadStatus())],
            'currency' => ['id' => Currency::take(10)->get()->random()->id],
            "products" => [['id' => $this->getRandIdFromCompany(new Products()), 'price' => 22.30, 'quantity' => 41.30]],
        ];

        // put with relation
        $response = $this->put($this->path . '/leads/' . $responsePost->getData()->id, $preloadProductLead, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'name', 'status_id', 'amount', 'created_at', 'updated_at']]);

        $data = [
            "lead" => ['id' => $this->getRandIdFromCompany(new Lead())],
            "price" => 50,
            "quantity" => 10,
            "product" => ['id' => $this->getRandIdFromCompany(new Products())],
        ];

        // post
        $responsePostLP = $this->post($this->path . '/lead/products', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'product_id', 'lead_id', 'quantity', 'created_at', 'updated_at']]);


        // delete
        $response = $this->delete($this->path . '/leads/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);

        // get
        $response = $this->get($this->path . '/leads?_filters[]=id-eq=' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => []]]);

        // get
        $response = $this->get($this->path . '/lead/products?_filters[]=id-eq=' . $responsePostLP->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => []]]);
    }

    /**
     * @group lead_products
     * Test lead_products
     */
    public function testLeadProducts()
    {
        $data = [
            'product' => ['id' => $this->getRandIdFromCompany(new Products())],
            'lead' => ['id' => $this->getRandIdFromCompany(new Lead())],
            'quantity' => 312,
            'price' => 50,
        ];

        // post
        $responsePost = $this->post($this->path . '/lead/products', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'product_id', 'lead_id', 'quantity', 'created_at', 'updated_at']]);

        $dataPUT = [
            'product' => ['id' => $this->getRandIdFromCompany(new Products())],
            'lead' => ['id' => $this->getRandIdFromCompany(new Lead())],
            'quantity' => 300,
            'price' => 45,
        ];

        // put
        $response = $this->put($this->path . '/lead/products/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'product_id', 'lead_id', 'quantity', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/lead/products?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'product_id', 'lead_id', 'quantity', 'created_at', 'updated_at']]]);

        // delete
        $response = $this->delete($this->path . '/lead/products/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group transaction_status
     * Test transaction_status
     */
    public function testTransactionStatus()
    {
        $data = [
            "i18n" => [[
                'title' => 'Reverted',
                'language_id' => 1,
            ]],

        ];

        // post
        $responsePost = $this->post($this->path . '/transaction/status', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        $dataPUT = [
            "i18n" => [[
                'title' => 'UPD Reverted',
                'language_id' => 1,
            ]],
        ];

        // put
        $response = $this->put($this->path . '/transaction/status/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/transaction/status?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'i18n', 'created_at', 'updated_at']]]);

        // delete
        $response = $this->delete($this->path . '/transaction/status/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group transaction_type
     * Test transaction_type
     */
    public function testTransactionType()
    {
        $data = [
            "i18n" => [[
                'title' => 'ATM',
                'language_id' => 1,
            ]],

        ];

        // post
        $responsePost = $this->post($this->path . '/transaction/types', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        $dataPUT = [
            "i18n" => [[
                'title' => 'UPD ATM',
                'language_id' => 1,
            ]],
        ];

        // put
        $response = $this->put($this->path . '/transaction/types/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/transaction/types?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'i18n', 'created_at', 'updated_at']]]);

        // delete
        $response = $this->delete($this->path . '/transaction/types/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group lead_status
     * Test lead_status
     */
    public function testLeadStatus()
    {
        $data = [
            "company_id" => $this->user->company_id,
            "i18n" => [[
                'title' => 'Lead',
                'language_id' => 1,
            ]],

        ];

        // post
        $responsePost = $this->post($this->path . '/lead/status', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        $dataPUT = [
            "company_id" => $this->user->company_id,
            "i18n" => [[
                'title' => 'UPD Lead',
                'language_id' => 1,
            ]],
        ];

        // put
        $response = $this->put($this->path . '/lead/status/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/lead/status?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'i18n', 'created_at', 'updated_at']]]);

        // delete
        $response = $this->delete($this->path . '/lead/status/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group contact_position
     * Test contact_position
     */
    public function testContactPosition()
    {
        $data = [
            "company_id" => $this->user->company_id,
            "i18n" => [[
                'title' => 'Contact P1',
                'language_id' => 1,
            ]],

        ];

        // post
        $responsePost = $this->post($this->path . '/contact/positions', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        $dataPUT = [
            "company_id" => $this->user->company_id,
            "i18n" => [[
                'title' => 'UPD Contact P1',
                'language_id' => 1,
            ]],
        ];

        // put
        $response = $this->put($this->path . '/contact/positions/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/contact/positions?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'i18n', 'created_at', 'updated_at']]]);

        // delete
        $response = $this->delete($this->path . '/contact/positions/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group payment_gateway
     * Test payment_gateway
     */
    public function testPaymentGateway()
    {
        $data = [
            "company_id" => $this->user->company_id,
        ];

        // post
        $responsePost = $this->post($this->path . '/payment/gateways', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        $dataPUT = [
            "company_id" => $this->user->company_id,
        ];

        // put
        $response = $this->put($this->path . '/payment/gateways/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/payment/gateways?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'i18n', 'created_at', 'updated_at']]]);

        // delete
        $response = $this->delete($this->path . '/payment/gateways/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group invoice
     * Test invoice
     */
    public function testInvoice()
    {
        $data = [
            'title' => 'Invoice1' . time(),
            'counterparty' => ['id' => $this->getRandIdFromCompany(new Counterparties())],
            'user' => ['id' => $this->getRandIdFromCompany(new User())],
            'status' => ['id' => $this->getRandIdFromCompany(new InvoiceStatus())],
            'quote' => ['id' => $this->getRandIdFromCompany(new Quote())],
            'currency' => ['id' => Currency::take(10)->get()->random()->id],
            'order' => ['id' => $this->getRandIdFromCompany(new Orders())],
            'invoice_no' => hash('ripemd160', mt_rand(10, 100)) . time(),
        ];

        // post
        $responsePost = $this->post($this->path . '/invoices', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'created_at', 'updated_at']]);

        $dataPUT = [
            'title' => 'Invoice #1 UP',
        ];

        // put
        $response = $this->put($this->path . '/invoices/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'created_at', 'updated_at']]);

        $preloadProductLead = [
            'title' => 'Invoice N.1',
            'status_id' => 2,
            'currency_id' => 1,
            'counterparty_id' => 1,
            'invoice_no' => '8bb93' . time(),
            "products" => [['id' => $this->getRandIdFromCompany(new Products()), 'price' => 22.30, 'quantity' => 41.30]],
        ];

        // put with relation
        $response = $this->put($this->path . '/invoices/' . $responsePost->getData()->id, $preloadProductLead, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'title', 'status_id', 'created_at', 'updated_at']]);

        $data = [
            'product' => ['id' => $this->getRandIdFromCompany(new Products())],
            'invoice' => ['id' => $responsePost->getData()->id],
            'quantity' => 312,
            'price' => 30,
        ];

        // post
        $responsePostQP = $this->post($this->path . '/invoice/products', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'product_id', 'invoice_id', 'quantity', 'created_at', 'updated_at']]);

        // delete
        $response = $this->delete($this->path . '/invoices/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);

        // get
        $response = $this->get($this->path . '/invoices?_filters[]=id-eq=' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => []]]);

        // get
        $response = $this->get($this->path . '/invoice/products?_filters[]=id-eq=' . $responsePostQP->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => []]]);
    }

    /**
     * @group invoice_products
     * Test invoice_products
     */
    public function testInvoiceProducts()
    {
        $data = [
            'product' => ['id' => $this->getRandIdFromCompany(new Products())],
            'invoice' => ['id' => $this->getRandIdFromCompany(new Invoice())],
            'price' => 32,
            'quantity' => 10,
        ];

        // post
        $responsePost = $this->post($this->path . '/invoice/products', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        // dd($responsePost);

        $dataPUT = [
            'product' => ['id' => $this->getRandIdFromCompany(new Products())],
            'invoice' => ['id' => $this->getRandIdFromCompany(new Invoice())],
            'quantity' => 21.31,
            'price' => 123.2,
            'unit_id' => 122.12,
            'total' => 131,
        ];

        // put
        $response = $this->put($this->path . '/invoice/products/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/invoice/products?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'created_at', 'updated_at']]]);

        // delete
        $response = $this->delete($this->path . '/invoice/products/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

    /**
     * @group invoice_status
     * Test invoice_status
     */
    public function testInvoiceStatus()
    {
        $data = [
            "company_id" => $this->user->company_id,
            "i18n" => [[
                'title' => 'Status 1',
                'language_id' => 1,
            ]],

        ];

        // post
        $responsePost = $this->post($this->path . '/invoice/status', $data, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        $dataPUT = [
            "company_id" => $this->user->company_id,
            "i18n" => [[
                'title' => 'UPD Status P1',
                'language_id' => 1,
            ]],
        ];

        // put
        $response = $this->put($this->path . '/invoice/status/' . $responsePost->getData()->id, $dataPUT, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['id', 'created_at', 'updated_at']]);

        // get
        $response = $this->get($this->path . '/invoice/status?_filters[]=id-eq=' . $response->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['*' => ['id', 'i18n', 'created_at', 'updated_at']]]);

        // delete
        $response = $this->delete($this->path . '/invoice/status/' . $responsePost->getData()->id, $this->header)
            ->assertSuccessful()
            ->assertJsonStructure(['data' => ['message']]);
    }

}
