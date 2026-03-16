<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Loan extends Model
{
    protected $table = 'loans';
    
    protected $fillable = ['id_user', 'id_borrow'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function borrow(): BelongsTo
    {
        return $this->belongsTo(Borrow::class, 'id_borrow');
    }
}
