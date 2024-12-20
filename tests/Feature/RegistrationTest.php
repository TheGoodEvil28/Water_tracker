<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Fortify\Features;
use Laravel\Jetstream\Jetstream;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    // public function test_registration_screen_can_be_rendered(): void
    // {
    //     if (! Features::enabled(Features::registration())) {
    //         $this->markTestSkipped('Registration support is not enabled.');

    //         return;
    //     }

    //     $response = $this->get('/register');

    //     $response->assertStatus(200);
    // }

    // public function test_registration_screen_cannot_be_rendered_if_support_is_disabled(): void
    // {
    //     if (Features::enabled(Features::registration())) {
    //         $this->markTestSkipped('Registration support is enabled.');

    //         return;
    //     }

    //     $response = $this->get('/register');

    //     $response->assertStatus(404);
    // }

    // public function test_new_users_can_register(): void
    // {
    //     if (! Features::enabled(Features::registration())) {
    //         $this->markTestSkipped('Registration support is not enabled.');

    //         return;
    //     }

    //     $response = $this->post('/register', [
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //         'password' => 'password',
    //         'password_confirmation' => 'password',
    //         'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature(),
    //     ]);

    //     $this->assertAuthenticated();
    //     $response->assertRedirect(RouteServiceProvider::HOME);
    // }
//     public function test_registration_fails_with_missing_fields(): void
// {
//     $response = $this->post('/register', [
//         'name' => '',
//         'email' => '',
//         'password' => '',
//         'password_confirmation' => '',
//     ]);

//     $response->assertSessionHasErrors(['name', 'email', 'password']);
//     $this->assertGuest();
// }
// public function test_registration_fails_with_invalid_email(): void
// {
//     $response = $this->post('/register', [
//         'name' => 'Test User',
//         'email' => 'invalid-email',
//         'password' => 'password',
//         'password_confirmation' => 'password',
//     ]);

//     $response->assertSessionHasErrors(['email']);
//     $this->assertGuest();
// }
public function test_registration_fails_with_duplicate_email(): void
{
    // Create an existing user
    \App\Models\User::factory()->create([
        'email' => 'test@example.com',
    ]);

    // Attempt to register with the same email
    $response = $this->post('/register', [
        'name' => 'New User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertSessionHasErrors(['email']);
    $this->assertGuest();
}

}
