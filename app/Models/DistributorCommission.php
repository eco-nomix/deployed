<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DistributorCommission extends Model
{
    public $timestamps = false;

    public function transactionDetails()
    {
        return $this->belongsTo(SalesTransactionDetails::class, 'sales_transaction_detail_id');
    }
}
