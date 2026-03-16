<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Exemplar extends Model
{
    protected $table = 'exemplar';
    protected $fillable = ['id_book', 'id_statut', 'comissioning'];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'id_book');
    }

    public function statut(): BelongsTo
    {
        return $this->belongsTo(Statut::class, 'id_statut');
    }
}
