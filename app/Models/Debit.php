<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Debit extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id', 'amount', 'reference_number', 'recipient_user_id', 'transaction_remark', 'date'
    ];

    public function account(): BelongsTo{
        return $this->belongsTo(Account::class, 'account_id', 'id');
    }
}
