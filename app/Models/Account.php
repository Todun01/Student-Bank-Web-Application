<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_number', 'amount', 'user_id'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function credits(): HasMany{
        return $this->hasMany(Credit::class);
    }
    public function debits(): HasMany{
        return $this->hasMany(Debit::class);
    }

}
