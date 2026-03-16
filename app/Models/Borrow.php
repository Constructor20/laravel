<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Borrow extends Model
{
    protected $table = 'borrow';
    protected $fillable = ['borrowed_date'];

    public function loans(): HasMany
    {
        return $this->hasMany(Loan::class, 'id_borrow');
    }
}
