<?php

namespace App\Http\Controllers\Seller;

use App\Seller as SellerModel;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class SellerController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = SellerModel::has('products')->get();
        return $this->showAll($sellers);
    }

    public function show($id)
    {
        $seller = SellerModel::has('products')->findOrFail($id);
        return $this->showOne($seller);
    }

}
