<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer as buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class BuyerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyers = buyer::has('transactions')->get();
        return response()->json(['data' => $buyers],200);
        return $this->showAll($buyers); //from traits ApiResponser
    }

    public function show($id)
    {
        $buyer = Buyer::has('transactions')->findOrFail($id);
        return $this->showOne($buyer);
    }

}
