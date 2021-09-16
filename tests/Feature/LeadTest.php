<?php

namespace Tests\Feature;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LeadTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

     public function setup() :void
    {

        parent::setUp();

        $user = User::factory()->make();

        Auth::login($user);

    }

    public function test_can_get_leads()
    {
        
        $leads = Lead::factory()->count(10)->make();

        $this->get(route('leads.index'))->assertStatus(200);
    }
    
}
