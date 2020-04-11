<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class BuyerTransactionController extends ApiController
{
    public function index(Buyer $buyer)
    {
        // access to product with transaction table
        $transactions = $buyer->transactions;
        return $this->showAll($transactions);
    }
}
