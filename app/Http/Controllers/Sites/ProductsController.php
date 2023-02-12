<?php

namespace App\Http\Controllers\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function index()
    {
        return view('sites.products.index');
    }

    function knitFabric()
    {
        return view('sites.products.knitFabric');
    }

    function wovenFabric()
    {
        return view('sites.products.wovenFabric');
    }

    function otherFabric()
    {
        return view('sites.products.otherFabric');
    }
}
