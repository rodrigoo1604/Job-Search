<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Application;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ApplicationTest extends TestCase
{
    use RefreshDatabase;

    public function test_ListOfEntryCanBeRead(){
        $this->withoutExceptionHandling();

        Application::all();

        $response = $this->get('/');

        $response->assertStatus(200)->assertViewIs('home');
    }
}
