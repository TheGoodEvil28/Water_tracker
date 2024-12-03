<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function test_post_can_be_created(): void
    {
        // Simulate a logged-in user
        $user = User::factory()->create();

        // Make a POST request to create a post
        $response = $this->actingAs($user)->post('/posts', [
            'user_id' => $user->id,
            'title' => 'Test Post',
            'slug' => 'test-post',
            'body' => 'This is the body of the test post.',
            'published_at' => now(),
            'featured' => true,
        ]);

        // Assert the response
        $response->assertRedirect(); // Assuming the controller redirects after storing
        $response->assertSessionHasNoErrors();

        // Assert the database has the post
        $this->assertDatabaseHas('posts', [
            'user_id' => $user->id,
            'title' => 'Test Post',
            'slug' => 'test-post',
        ]);
    }


    public function test_single_post_can_be_viewed(): void
    {
        // Create a single post
        $post = Post::factory()->create();

        // Make a GET request to view the single post
        $response = $this->get('/posts/' . $post->id);

        // Assert the response status is 200
        $response->assertStatus(200);

        // Assert the response contains the post details
        $response->assertSee($post->title);
        $response->assertSee($post->body);
    }

    public function test_post_can_be_updated(): void
    {
        // Simulate a logged-in user
        $user = User::factory()->create();

        // Create a sample post
        $post = Post::factory()->create(['user_id' => $user->id]);

        // Make a PUT request to update the post
        $response = $this->actingAs($user)->put('/posts/' . $post->id, [
            'title' => 'Updated Title',
            'slug' => 'updated-title',
            'body' => 'Updated body content.',
            'published_at' => now(),
            'featured' => false,
        ]);

        // Assert the response
        $response->assertRedirect(); // Assuming redirection after update
        $response->assertSessionHasNoErrors();

        // Assert the database reflects the changes
        $this->assertDatabaseHas('posts', [
            'id' => $post->id,
            'title' => 'Updated Title',
            'slug' => 'updated-title',
            'body' => 'Updated body content.',
        ]);
    }

    public function test_post_can_be_deleted(): void
    {
        // Simulate a logged-in user
        $user = User::factory()->create();

        // Create a sample post
        $post = Post::factory()->create(['user_id' => $user->id]);

        // Make a DELETE request to delete the post
        $response = $this->actingAs($user)->delete('/posts/' . $post->id);

        // Assert the response
        $response->assertRedirect(); // Assuming redirection after deletion

        // Assert the post is soft-deleted
        $this->assertSoftDeleted('posts', [
            'id' => $post->id,
        ]);
    }
}
