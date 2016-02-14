<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sales_transactions;
use App\Models\sales_transaction_details;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Transactions
{
    public function loadProductInTransaction($newTrans, $userId, $role, $productId)
    {
        $product = Products::find($productId);
        if ($role ==1){
            $cost = $product->member;
        }
        else{
            $cost = $product->non_member;
        }

        $pay_bonus = $product->pay_bonus;
        $detail = new \SalesTransactionDetails;
        $detail->transaction_id = $newTrans->id;
        $detail->date = now();
        $detail->purchased_by = $userId;
        $detail->amount = $cost;
        $detail->product_id = $productId;
        $detail->pay_bonus = $pay_bonus;
        $detail->shipping = $product->shipping_handling;
        $detail->save();
        $this->updateTransaction($newTrans,$detail);
        return $newTrans;
    }

    public function updateTransaction($trans, $detail)
    {
            $trans->total_items += $detail->amount;
            $trans->total_shipping += $detail->shipping;
            $trans->total_order =  $trans->total_items + $trans->total_shipping;
            if ($detail->pay_bonus ==1){
                $trans->pay_bonus_on_amt += $detail->amount;
            }
            $trans->save();

    }

    public function NewTransaction($userId)
    {
        $sales_transaction = new \SalesTransactions;
        $sales_transaction->purchased_by = $userId;
        $sales_transaction->date = now();
        $sales_transaction->total_items = 0;
        $sales_transaction->shipping = 0;
        $sales_transaction->total_order = 0;
        $sales_transaction->pay_bonus_on_amt = 0;
        $sales_transaction->save();
        return $sales_transaction;

    }

}
