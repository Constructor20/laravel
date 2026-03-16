<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected $table = 'book';
    protected $fillable = ['title', 'id_author'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'id_author');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'books_categories', 'id_book', 'id_category');
    }

    public function exemplars(): HasMany
    {
        return $this->hasMany(Exemplar::class, 'id_book');
    }
}
