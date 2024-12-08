<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Application;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplicationTest extends TestCase
{
    use RefreshDatabase;

    public function test_CheckIfReceiveAllEntryOfApplicationInJsonFile()
    {
        $application = Application::factory(2)->create();

        $response = $this->get(route('apihome'));

        $response->assertStatus(200)
                 ->assertJsonCount(2);
    }

    public function test_CheckIfCanDeleteEntryInApplicationWithApi()
    {
        $application = Application::factory(2)->create();

        $response = $this->delete(route('apidestroy', 1));
        $this->assertDatabaseCount('applications', 1);

        $response = $this->get(route('apihome'));

        $response->assertJsonCount(1);
    }

    public function test_CheckIfCanCreateNewEntryInApplicationWithJsonFile()
    {
        $response = $this->post(route('apistore'), [
            'companyName' => 'Google',
            'details' => 'Hey! This is an example.',
            'finalised' => false,
        ]);

        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1);
    }

    public function test_CheckIfCanUpdateEntryInApplicationWithJsonFile()
    {
        $response = $this->post(route('apistore'), [
            'companyName' => 'Google',
            'details' => 'Hey! This is an example.',
            'finalised' => false,
        ]);

        $data = ['companyName' => 'Google'];
        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);

        $response = $this->put('/api/applications/1', [
            'companyName' => 'Facebook',
            'details' => 'Hey! This is an example.',
            'finalised' => false,
        ]);

        $data = ['companyName' => 'Facebook'];
        $response = $this->get(route('apihome'));
        $response->assertStatus(200)
                ->assertJsonCount(1)
                ->assertJsonFragment($data);
    }
    public function test_CheckIfFunctionShowWorks(){
        $response = $this->post(route('apistore'), [
            'companyName' => 'Arelance',
            'details' => 'CEO of the company.',
            'finalised' => true,
        ]);
        $data = ['companyName' => 'Arelance',
            'details' => 'CEO of the company.',
            'finalised' => true];
        $response = $this->get(route('apishow', 1));
        $response->assertStatus(200)
                ->assertJsonCount(6)
                ->assertJsonFragment($data);
    }
}
