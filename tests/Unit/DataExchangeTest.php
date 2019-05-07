<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\DataExchange\DEItemCache;
use App\Models\DataExchange\DEItemComment;
use App\Models\DataExchange\DEItemFavorite;
use App\Models\DataExchange\DEItemTrash;
use App\Models\DataExchange\DEItemType;
use App\Models\DataExchange\DEItemTypeContent;
use App\Models\DataExchange\DEMimeType;
use App\Models\DataExchange\DEMount;
use App\Models\DataExchange\DEShare;
use App\Models\DataExchange\DEShareType;
use App\Models\DataExchange\DEShareTypeContent;
use App\Models\DataExchange\DEStorage;

class DataExchangeTest extends TestCase
{

    public $header;
    public $user;
    public $company;

    public function setUp()
    {
        parent::setUp();

        $this->user = User::where('email', 'test@mail.com')->first();
        $this->company = $this->user->company_id;
        $this->header = $this->headers($this->user);
    }

    /**
     * @group DataExchange
     */
    public function testGetItemCache()
    {
      $response = $this->get($this->path . '/de/item/cache', $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data' => ["*" => ['id', 'title', 'mtime', 'size']]]);
    }

    /**
     * @group DataExchange
     */
    public function testGetItemComment()
    {
      $response = $this->get($this->path . '/de/item/comment', $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data' => ["*" => ['id', 'message', 'user_id', 'counterparty_id']]]);
    }

    /**
     * @group DataExchange
     */
    public function testGetItemFavorite()
    {
      $response = $this->get($this->path . '/de/item/comment', $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data' => ["*" => ['id', 'message', 'user_id', 'counterparty_id']]]);
    }

    /**
     * @group DataExchange
     */
    public function testGetItemTrash()
    {
      $response = $this->get($this->path . '/de/item/trash', $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data' => ["*" => ['id', 'user_id', 'counterparty_id', 'item_id']]]);
    }

    /**
     * @group DataExchange
     */
    public function testGetItemType()
    {
      $response = $this->get($this->path . '/de/item/type', $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data' => ["*" => ['id', 'i18n']]]);
    }

    /**
     * @group DataExchange
     */
    public function testGetMimeType()
    {
      $response = $this->get($this->path . '/de/mimetype', $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data' => ["*" => ['id', 'mimetype']]]);
    }

    /**
     * @group DataExchange
     */
    public function testGetShare()
    {
      $response = $this->get($this->path . '/de/share', $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data' => ["*" => ['id', 'title', 'description', 'department_id', 'is_available']]]);
    }

    /**
     * @group DataExchange
     */
    public function testGetShareType()
    {
      $response = $this->get($this->path . '/de/share/type', $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data' => ["*" => ['id', 'code', 'i18n']]]);
    }

    /**
     * @group DataExchange
     */
    public function testGetStorage()
    {
      $response = $this->get($this->path . '/de/storage', $this->header)
          ->assertSuccessful()
          ->assertJsonStructure(['data' => ["*" => ['id', 'base_path', 'company_id', 'last_checked']]]);
    }

}
