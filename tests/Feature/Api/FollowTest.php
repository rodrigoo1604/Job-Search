<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Follow;
use App\Models\Application;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FollowTest extends TestCase
{
    use RefreshDatabase;
    
    public function test_GetElements()
    {   
        Application::factory(10)->create();
        Follow::factory(1)->create([
            'application_id' => 1,
            'news' => 'hello',
        ]);

        $response = $this->get('/api/applications/1/news');

        $response->assertStatus(200)->assertJsonCount(1);
    }



    public function test_GetElementsById()
    {   
        Application::factory(10)->create();
        Follow::factory(1)->create([
            'application_id' => 1,
            'news' => 'hello',
        ]);

        $response = $this->get('/api/applications/1/news/1');

        $response->assertStatus(200)->assertJsonFragment(['application_id' => 1]);
    }


    public function test_DeleteElement()
    {   
        Application::factory(10)->create();
        Follow::factory(1)->create([
            'application_id' => 1,
            'news' => 'hello',
        ]);
        
        $response = $this->delete('/api/applications/1/news/1');
        $this->assertDatabaseCount('follows', 0);
    }

    public function test_CreateElement()
    { 
        Application::factory(1)->create();

        $response = $this->post('/api/applications/1/news', [

            'application_id' => 1,
            'news' => 'hello',
        ]);

        $response = $this->get('/api/applications/1/news/1');

        $response->assertStatus(200)->assertJsonFragment([

            'application_id' => 1,
            'news' => 'hello',
        ]);
    }

    public function test_UpdateElements()
    {   
        Application::factory(10)->create();
        Follow::factory(1)->create([
            'application_id' => 1,
            'news' => 'hello',
        ]);
        
        $response = $this->put('/api/applications/1/news/1', 
        [
            'application_id' => 1,
            'news' => 'hello',
        ]);

        $response = $this->get('/api/applications/1/news/1');

        $response->assertStatus(200)->assertJsonFragment([

            'application_id' => 1,
            'news' => 'hello',
        ]);
    }
}
