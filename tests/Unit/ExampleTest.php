<?php
//
//namespace Tests\Unit;
//
//use Tests\TestCase;
//use Illuminate\Foundation\Testing\DatabaseMigrations;
//use Illuminate\Foundation\Testing\DatabaseTransactions;
//use App\Models\User;
//
//class ExampleTest extends TestCase {
//
//    /**
//     * Test availlable permissions
//     *
//     * @return void
//     */
//    public function testPermission() {
//
//
//
//        $this->get($this->path . '/role/available', $this->headers())
//                ->assertSuccessful()
//                ->assertJsonStructure(
//                        ['data' => ["*" =>['id', 'code']
//        ]]);
//    }
//
//
//
//    /**
//     * Test orders DEMO
//     */
//    public function testOrders() {
//       $this->get($this->path.'/orders', $this->headers())
//                ->assertSuccessful()
//                ->assertJsonStructure(['data'=>["*"=>['id']]]);
//    }
//
//    public function testAddOrders(){
//        $this->post($this->path.'/orders',
//                ['title'=>'New Test Orders',
//                 'sum'=>200
//                ], $this->headers())
//                ->assertSuccessful();
//    }
//
//    public function test404(){
//        $this->get($this->path)->assertStatus(404);
//    }
//
//}
