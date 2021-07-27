<?php

namespace Tests\Feature;

use App\Http\Controllers\UserProductsController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function index_text()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function saveUserProducts()
    {
        $request = Request::create('/store', 'POST',[
            'user_id'       => 1,
            'product_id'    => 1,
        ]);

        $controller = new UserProductsController();
        $resp =  $controller->store($request);

        $resp->assert(true,$resp);
        
    }
}
