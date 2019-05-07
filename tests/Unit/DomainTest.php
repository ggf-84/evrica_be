<?php

namespace Tests\Unit;

use \Tests\TestCase;
use App\Models\User;
use App\Models\Company;
use App\Models\DomainRecord;

class DomainTest extends TestCase
{
  public $header;
  public $user;
  public $company_id;

  public function setUp()
  {
      parent::setUp();

      $this->user = User::where('email', 'test@mail.com')->first();
      $this->header = $this->headers($this->user);
  }

  /**
   * @group domain
   * Test company creation with domain
   */
  public function testCreateCompanyWithDomain()
  {

      $title='JulietaRomeo';

      $response = $this->post($this->path . '/company',['title'=>$title], $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data' => ['title','id']])
          ->assertJsonFragment(['title' => $title]);

      $company = Company::where('title',$title)->first();

      $dataDELETE = [
          'name' => strtolower($title),
      ];

      //delete domain
      $response_delete = $this->delete($this->path . '/domain/records/company/'.$company->id,$dataDELETE, $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data']);


      // dd($response_delete);

      $company->delete();

      $this->updateUserCompany();

  }

  /**
   * @group domain
   * Test create domain
   */
  public function testCreateDomain()
  {
      $preload = [
              'title' => \Faker\Factory::create()->firstName(),
      ];

      $company = Company::create($preload);

      $domainName = $company->title;

      $dataPost = [
              'name' => strtolower($domainName),
      ];

      $response = $this->post($this->path . '/domain/records/company/'.$company->id, $dataPost , $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data'=>['id','name']]);

      $dataDELETE = [
              'name' => strtolower($domainName),
      ];

      $response = $this->delete($this->path . '/domain/records/company/'.$company->id, $dataDELETE , $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data']);

      $domainRecord = DomainRecord::where('name','LIKE','%'.$company->title.'%')->delete();
      $company->delete();

      $this->updateUserCompany();

      // dd($response);

  }


  /**
   * @group domain
   * Test update domain
   */
  public function testUpdateDomain()
  {
      $preload = [
              'title' => \Faker\Factory::create()->firstName(),
      ];

      $company = Company::create($preload);

      $domainName = $company->title;

      $dataPost = [
              'name' => strtolower($domainName),
      ];

      $response = $this->post($this->path . '/domain/records/company/'.$company->id, $dataPost , $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data'=>['id','name']]);

      $domainRecord = DomainRecord::where('name','LIKE','%'.$company->title.'%')->first();

      $newDomainName = strtolower(\Faker\Factory::create()->lastName);

      $dataPUT = [
            'oldName' => strtolower($domainName),
            'name' => strtolower($newDomainName),
      ];

      $response = $this->put($this->path . '/domain/records/company/'.$company->id, $dataPUT, $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data'=>['id','name']]);

      $dataDELETE = [
              'name' => strtolower($newDomainName),
      ];

      $response = $this->delete($this->path . '/domain/records/company/'.$company->id, $dataDELETE , $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data']);

      $domainRecord->delete();
      $company->delete();

      $this->updateUserCompany();

      // dd($response);
  }

  /**
   * @group domain
   * Test delete domain
   */
  public function testDeleteDomain()
  {

      $preload = [
              'title' => \Faker\Factory::create()->firstName(),
      ];

      $company = Company::create($preload);

      $domainName = $company->title;

      $dataPost = [
              'name' => strtolower($domainName),
      ];

      $response = $this->post($this->path . '/domain/records/company/'.$company->id, $dataPost , $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data'=>['id','name']]);


      $domainRecord = DomainRecord::where('name','LIKE','%'.$company->title.'%')->first();

      $dataDELETE = [
              'name' => strtolower($domainName),
      ];

      $response = $this->delete($this->path . '/domain/records/company/'.$company->id, $dataDELETE , $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data']);

      $company->delete();

      $this->updateUserCompany();

      // dd($response);
  }

  /**
   * @group domain
   */
  public function updateUserCompany()
  {
      $setCompanyID = User::where('email', 'test@mail.com')->first();
      $setCompanyID->company_id = 3;
      $setCompanyID->save();
  }

}
