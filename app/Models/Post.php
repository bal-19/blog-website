<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}