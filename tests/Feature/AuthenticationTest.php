<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the login screen can be rendered.
     */
    // public function test_login_screen_can_be_rendered(): void
    // {
    //     $response = $this->get('/login');

    //     $response->assertStatus(200);
    // }

    /**
     * Test that users can log in with valid credentials.
     */

    /**
     * Test that users cannot log in with an invalid password.
     */
    // public function test_users_can_not_authenticate_with_invalid_password(): void
    // {
    //     $user = User::factory()->create();

    //     $this->post('/login', [
    //         'email' => $user->email,
    //         'password' => 'wrong-password',
    //     ]);

    //     $this->assertGuest();
    // }

    // /**
    //  * Test that authenticated users can log out successfully.
    //  */
    // public function test_users_can_logout(): void
    // {
    //     $user = User::factory()->create();

    //     $this->actingAs($user);

    //     $response = $this->post('/logout');

    //     $this->assertGuest();
    //     $response->assertRedirect('/'); // Adjust based on where your app redirects after logout
    // }

    /**
     * Test that users cannot log in with an unregistered email.
     */
    // public function test_users_cannot_authenticate_with_unregistered_email(): void
    // {
    //     $this->post('/login', [
    //         'email' => 'nonexistent@example.com',
    //         'password' => 'password',
    //     ]);

    //     $this->assertGuest();
    // }

    // /**
    //  * Test that the login screen returns validation errors for invalid input.
    //  */
    public function test_login_requires_email_and_password(): void
    {
        $response = $this->post('/login', []);

        $response->assertSessionHasErrors(['email', 'password']);
        $this->assertGuest();
    }
}
