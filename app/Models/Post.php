<?php

namespace App\Models;

use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'image',
        'body',
        'published_at',
        'featured',
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [
        'published_at' => 'datetime',
        'featured' => 'boolean',
    ];

    /**
     * Relationships
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'post_like')->withTimestamps();
    }

    /**
     * Scopes
     */
    public function scopePublished($query)
    {
        // Ensure that the post has a non-null published_at date and is in the past
        return $query->whereNotNull('published_at')
                     ->where('published_at', '<=', Carbon::now());
    }

    public function scopeWithCategory($query, string $category)
    {
        return $query->whereHas('categories', function ($query) use ($category) {
            $query->where('slug', $category);
        });
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    /**
     * Helper Methods
     */
    public function getExcerpt()
    {
        return Str::limit(strip_tags($this->body), 150);
    }

    public function getReadingTime()
    {
        $words = str_word_count(strip_tags($this->body));
        $mins = ceil($words / 250);

        return max($mins, 1); // Ensure at least 1 minute
    }

    public function getThumbnailUrl()
    {
        if (empty($this->image)) {
            return asset('images/default-thumbnail.jpg'); // Fallback to default thumbnail
        }

        // Check if the image is an external URL or stored locally
        return Str::contains($this->image, 'http') 
            ? $this->image 
            : Storage::disk('public')->url($this->image);
    }
}
