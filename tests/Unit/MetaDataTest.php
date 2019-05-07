<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class MetaDataTest extends TestCase
{
    protected $user;
    protected $company;
    protected $headers;

    /**
     * Set Up test
     */
    public function setUp()
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        $this->user = User::find(123123);
        $this->headers = $this->headers($this->user);
    }

    /**
     * Test Get List Of Settings
     */
    public function testGetAllMetadata()
    {
        $response = $this->get($this->path . '/metadata', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * Test Get List Of Settings
     */
    public function testGetMetadataForEntity()
    {
        $response = $this->get($this->path . '/metadata/Orders', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * Test Get List Of Settings
     */
    public function testListOfEntity()
    {
        $response = $this->get($this->path . '/metadata/entities', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get company metadata
     */
    public function testGetMetadataForEntityCompany()
    {
        $response = $this->get($this->path . '/metadata/Company', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get department metadata
     */
    public function testGetMetadataForEntityDepartment()
    {
        $response = $this->get($this->path . '/metadata/Department', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get domain metadata
     */
    public function testGetMetadataForEntityDomain()
    {
        $response = $this->get($this->path . '/metadata/Domain', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get deomain rcord metadata
     */
    public function testGetMetadataForEntityDomainRecord()
    {
        $response = $this->get($this->path . '/metadata/DomainRecord', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get permission metadata
     */
    public function testGetMetadataForEntityPermission()
    {
        $response = $this->get($this->path . '/metadata/Permission', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get role metadata
     */
    public function testGetMetadataForEntityRole()
    {
        $response = $this->get($this->path . '/metadata/Role', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get user metadata
     */
    public function testGetMetadataForEntityUser()
    {
        $response = $this->get($this->path . '/metadata/User', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get user setttings metadata
     */
    public function testGetMetadataForEntityUserSettings()
    {
        $response = $this->get($this->path . '/metadata/UserSettings', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get permission content (i18n) metadata
     */
    public function testGetMetadataForEntityPermissionContent()
    {
        $response = $this->get($this->path . '/metadata/PermissionContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get department content (i18n) metadata
     */
    public function testGetMetadataForEntityDepartmentContent()
    {
        $response = $this->get($this->path . '/metadata/DepartmentContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get department roles metadata
     */
    public function testGetMetadataForEntityDepartmentRoles()
    {
        $response = $this->get($this->path . '/metadata/DepartmentRoles', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get department users metadata
     */
    public function testGetMetadataForEntityDepartmentUsers()
    {
        $response = $this->get($this->path . '/metadata/DepartmentUsers', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get role content (i18n) metadata
     */
    public function testGetMetadataForEntityRoleContent()
    {
        $response = $this->get($this->path . '/metadata/RoleContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get role permission metadata
     */
    public function testGetMetadataForEntityRolePermission()
    {
        $response = $this->get($this->path . '/metadata/RolePermission', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get company language metadata
     */
    public function testGetMetadataForEntityCompanyLanguage()
    {
        $response = $this->get($this->path . '/metadata/CompanyLanguage', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get company Country metadata
     */
    public function testGetMetadataForEntityCountry()
    {
        $response = $this->get($this->path . '/metadata/Country', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get company CountryContent metadata
     */
    public function testGetMetadataForEntityCountryContent()
    {
        $response = $this->get($this->path . '/metadata/CountryContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get company Region metadata
     */
    public function testGetMetadataForEntityRegion()
    {
        $response = $this->get($this->path . '/metadata/Region', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get company RegionContent metadata
     */
    public function testGetMetadataForEntityRegionContent()
    {
        $response = $this->get($this->path . '/metadata/RegionContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get company ExtraAccounts metadata
     */
    public function testGetMetadataForEntityExtraAccounts()
    {
        $response = $this->get($this->path . '/metadata/ExtraAccounts', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get company UserDevices metadata
     */
    public function testGetMetadataForEntityUserDevices()
    {
        $response = $this->get($this->path . '/metadata/UserDevice', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Language metadata
     */
    public function testGetMetadataForEntityLanguage()
    {
        $response = $this->get($this->path . '/metadata/Language', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Tax Rate metadata
     */
    public function testGetMetadataForEntityTaxRate()
    {
        $response = $this->get($this->path . '/metadata/TaxRate', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Tax Rule metadata
     */
    public function testGetMetadataForEntityTaxRule()
    {
        $response = $this->get($this->path . '/metadata/TaxRule', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Rate metadata
     */
    public function testGetMetadataForEntityRate()
    {
        $response = $this->get($this->path . '/metadata/Rate', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Currency metadata
     */
    public function testGetMetadataForEntityCurrency()
    {
        $response = $this->get($this->path . '/metadata/Currency', $this->headers);

        $response->assertSuccessful();
    }


    /**
     * @group metadata
     * Test Get RateHistory metadata
     */
    public function testGetMetadataForEntityRateHistory()
    {
        $response = $this->get($this->path . '/metadata/RateHistory', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Contract metadata
     */
    public function testGetMetadataForEntityContract()
    {
        $response = $this->get($this->path . '/metadata/Contract', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Contact metadata
     */
    public function testGetMetadataForEntityContact()
    {
        $response = $this->get($this->path . '/metadata/Contact', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get CounterpartTypes metadata
     */
    public function testGetMetadataForEntityCounterpartTypes()
    {
        $response = $this->get($this->path . '/metadata/CounterpartTypes', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get ContractType metadata
     */
    public function testGetMetadataForEntityContractType()
    {
        $response = $this->get($this->path . '/metadata/ContractType', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Counterparties metadata
     */
    public function testGetMetadataForEntityCounterparties()
    {
        $response = $this->get($this->path . '/metadata/Counterparties', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get State metadata
     */
    public function testGetMetadataForEntityState()
    {
        $response = $this->get($this->path . '/metadata/State', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get StateContent metadata
     */
    public function testGetMetadataForEntityStateContent()
    {
        $response = $this->get($this->path . '/metadata/StateContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get CounterpartGroup metadata
     */
    public function testGetMetadataForEntityCounterpartGroup()
    {
        $response = $this->get($this->path . '/metadata/CounterpartGroup', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Product metadata
     */
    public function testGetMetadataForEntityProduct()
    {
        $response = $this->get($this->path . '/metadata/Product', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get OrderStatus metadata
     */
    public function testGetMetadataForEntityOrderStatus()
    {
        $response = $this->get($this->path . '/metadata/OrderStatus', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get OrderStatusContent metadata
     */
    public function testGetMetadataForEntityOrderStatusContent()
    {
        $response = $this->get($this->path . '/metadata/OrderStatusContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get OrderTypes metadata
     */
    public function testGetMetadataForEntityOrderTypes()
    {
        $response = $this->get($this->path . '/metadata/OrderTypes', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get OrderTypesContent metadata
     */
    public function testGetMetadataForEntityOrderTypesContent()
    {
        $response = $this->get($this->path . '/metadata/OrderTypesContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get ProductCategory metadata
     */
    public function testGetMetadataForEntityProductCategory()
    {
        $response = $this->get($this->path . '/metadata/ProductCategory', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get ProductCategoryContent metadata
     */
    public function testGetMetadataForEntityProductCategoryContent()
    {
        $response = $this->get($this->path . '/metadata/ProductCategoryContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get ProductContent metadata
     */
    public function testGetMetadataForEntityProductContent()
    {
        $response = $this->get($this->path . '/metadata/ProductContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get ProductStatus metadata
     */
    public function testGetMetadataForEntityProductStatus()
    {
        $response = $this->get($this->path . '/metadata/ProductStatus', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get ProductStatusContent metadata
     */
    public function testGetMetadataForEntityProductStatusContent()
    {
        $response = $this->get($this->path . '/metadata/ProductStatusContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get OrderProducts metadata
     */
    public function testGetMetadataForEntityOrderProducts()
    {
        $response = $this->get($this->path . '/metadata/OrderProducts', $this->headers);

        $response->assertSuccessful();
    }


    /**
     * @group metadata
     * Test Get ContactPosition metadata
     */
    public function testGetMetadataForEntityContactPosition()
    {
        $response = $this->get($this->path . '/metadata/ContactPosition', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get ContactPositionContent metadata
     */
    public function testGetMetadataForEntityContactPositionContent()
    {
        $response = $this->get($this->path . '/metadata/ContactPositionContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Invoice metadata
     */
    public function testGetMetadataForEntityInvoice()
    {
        $response = $this->get($this->path . '/metadata/Invoice', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get InvoiceProducts metadata
     */
    public function testGetMetadataForEntityInvoiceProducts()
    {
        $response = $this->get($this->path . '/metadata/InvoiceProducts', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get InvoiceStatus metadata
     */
    public function testGetMetadataForEntityInvoiceStatus()
    {
        $response = $this->get($this->path . '/metadata/InvoiceStatus', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get InvoiceStatusContent metadata
     */
    public function testGetMetadataForEntityInvoiceStatusContent()
    {
        $response = $this->get($this->path . '/metadata/InvoiceStatusContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Lead metadata
     */
    public function testGetMetadataForEntityLead()
    {
        $response = $this->get($this->path . '/metadata/Lead', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get LeadProducts metadata
     */
    public function testGetMetadataForEntityLeadProducts()
    {
        $response = $this->get($this->path . '/metadata/LeadProducts', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get LeadStatus metadata
     */
    public function testGetMetadataForEntityLeadStatus()
    {
        $response = $this->get($this->path . '/metadata/LeadStatus', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get LeadStatusContent metadata
     */
    public function testGetMetadataForEntityLeadStatusContent()
    {
        $response = $this->get($this->path . '/metadata/LeadStatusContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get PaymentGateway metadata
     */
    public function testGetMetadataForEntityPaymentGateway()
    {
        $response = $this->get($this->path . '/metadata/PaymentGateway', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get PaymentGatewayContent metadata
     */
    public function testGetMetadataForEntityPaymentGatewayContent()
    {
        $response = $this->get($this->path . '/metadata/PaymentGatewayContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Quote metadata
     */
    public function testGetMetadataForEntityQuote()
    {
        $response = $this->get($this->path . '/metadata/Quote', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get QuoteProducts metadata
     */
    public function testGetMetadataForEntityQuoteProducts()
    {
        $response = $this->get($this->path . '/metadata/QuoteProducts', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get QuoteStatus metadata
     */
    public function testGetMetadataForEntityQuoteStatus()
    {
        $response = $this->get($this->path . '/metadata/QuoteStatus', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get QuoteStatusContent metadata
     */
    public function testGetMetadataForEntityQuoteStatusContent()
    {
        $response = $this->get($this->path . '/metadata/QuoteStatusContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Salutation metadata
     */
    public function testGetMetadataForEntitySalutation()
    {
        $response = $this->get($this->path . '/metadata/Salutation', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get SalutationContent metadata
     */
    public function testGetMetadataForEntitySalutationContent()
    {
        $response = $this->get($this->path . '/metadata/SalutationContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get Transaction metadata
     */
    public function testGetMetadataForEntityTransaction()
    {
        $response = $this->get($this->path . '/metadata/Transaction', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get TransactionStatus metadata
     */
    public function testGetMetadataForEntityTransactionStatus()
    {
        $response = $this->get($this->path . '/metadata/TransactionStatus', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get TransactionStatusContent metadata
     */
    public function testGetMetadataForEntityTransactionStatusContent()
    {
        $response = $this->get($this->path . '/metadata/TransactionStatusContent', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get TransactionTypes metadata
     */
    public function testGetMetadataForEntityTransactionTypes()
    {
        $response = $this->get($this->path . '/metadata/TransactionTypes', $this->headers);

        $response->assertSuccessful();
    }

    /**
     * @group metadata
     * Test Get TransactionTypesContent metadata
     */
    public function testGetMetadataForEntityTransactionTypesContent()
    {
        $response = $this->get($this->path . '/metadata/TransactionTypesContent', $this->headers);

        $response->assertSuccessful();
    }
}