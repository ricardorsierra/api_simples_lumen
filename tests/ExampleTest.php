<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->get('/');

        $this->assertEquals(
            $this->app->version(), $this->response->getContent()
        );
    }

    public function testCreate()
    {
        $response = $this->call('POST', '/category', ['name' => 'Category']);
        $this->assertEquals(200, $response->status());
    }

    public function testIndex()
    {
        $category = factory('App\Model\Category')->make();
    }
}
