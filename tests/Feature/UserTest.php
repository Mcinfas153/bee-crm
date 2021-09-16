<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
     public function test_can_create_user()
     {
         $user = User::factory()->make();

         $userData = [
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password,
            'repassword' => $user->password,
            'agreed' => 1
         ];

         $this->post(route('user.create'), $userData)->assertStatus(200);
     }
}
