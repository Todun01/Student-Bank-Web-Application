<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Credit extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount', 'reference_number', 'transaction_remark', 'account_id','sender_user_id', 'date'
    ];

    public function accounts(): BelongsTo{
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }
}
