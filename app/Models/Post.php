<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Membuat Model sekaligus database dan factories
// php artisan make:model Post -mf

// Menambahkan row di database menggunakan tinker
// php artisan tinker
// App\Models\Post::create(['title' => 'test', 'slug' => 'test', 'author' => 'Iqbal', 'content' => 'bjir']);

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'author',
        'content',
    ];

    protected $with = ['author', 'category'];


    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query): void
    {
        $query->where('title', 'like', '%' . request("search") . '%');
    }
}