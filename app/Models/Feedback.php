<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public function user()
    {
        return $this->belongsTo(Users::class);
    }

    public function transactionDetails()
    {
        return $this->belongsTo(SalesTransactionDetails::class, 'transaction_details_id', 'id');
    }

    public function replies()
    {
        return $this->hasMany(FeedbackReply::class)->orderBy('created_at', 'asc');
    }
}
