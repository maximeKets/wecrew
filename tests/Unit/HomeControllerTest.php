<?php

namespace Tests\Unit;

use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Models\User;
use Faker\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Tests\TestCase;

class HomeControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->controller = new HomeController();
    }

    public function testuserCanViewHomePage()
    {
        $request = new Request();
        $response = $this->controller->index($request);

        $this->assertEquals('home.home', $response->getName());
    }

    public function testuserCanViewSpecificUser()
    {
        $category = Category::factory()->create(['name' => 'testcategory']);
        $user = User::factory()->create(['username' => 'testusers', 'category_id' => $category->id]);
        $response = $this->controller->showUser('testusers');

        $this->assertEquals('user.show', $response->getName());
        $this->assertEquals($user->id, $response->getData()['user']->id);
    }

    public function testuserCanViewListOfUsers()
    {
        $category = Category::factory()->create();
        User::factory()->count(40)->create(function () use ($category) {
            $faker = Factory::create();

            return [
                'username' => $faker->firstName.' '.$faker->lastName,
                'category_id' => $category->id,
            ];
        });
        $response = $this->controller->listUsers();

        $this->assertEquals('user.list', $response->getName());
        $this->assertCount(32, $response->getData()['users']);
    }

    public function testuserCanLoadMoreUsers()
    {
        $category = Category::factory()->create();
        User::factory()->count(64)->create(function () use ($category) {
            $faker = Factory::create();

            return [
                'username' => $faker->firstName.' '.$faker->lastName,
                'category_id' => $category->id,
            ];
        });
        $request = new Request(['offset' => 32]);
        $response = $this->controller->loadMoreUsers($request);

        $this->assertCount(32, $response->getData());
    }

    public function testuserCanViewUsersByCategory()
    {
        $category = Category::factory()->create();
        User::factory()->count(40)->create(function () use ($category) {
            $faker = Factory::create();

            return [
                'username' => $faker->firstName.' '.$faker->lastName,
                'category_id' => $category->id,
            ];
        });
        $response = $this->controller->listUsersByCategory($category->id);

        $this->assertEquals('user.list', $response->getName());
        $this->assertCount(32, $response->getData()['users']);
    }
}
