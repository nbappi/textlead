<?php

namespace App\Http\Controllers\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    function index(){
        return view('sites.index');
    }
    
    function services()
    {
        return view('sites.services');
    }

    function propucts()
    {
        return view('sites.propucts');
    }
    
    function buyersBrands()
    {
        return view('sites.buyers-brands');
    }

    function certifications()
    {
        return view('sites.certifications');
    }

    function contact()
    {
        return view('sites.contact');
    }

}
