<?php

namespace App\Http\Controllers\Sites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index()
    {
        return view('sites.about.index');
    }

    function companyProfile()
    {
        return view('sites.about.companyProfile');
    }

    function managingDirectorsMessage()
    {
        return view('sites.about.managingDirectorsMessage');
    }

    function companyValues()
    {
        return view('sites.about.companyValues');
    }

    function organogram()
    {
        return view('sites.about.organogram');
    }

    function corporateCulture()
    {
        return view('sites.about.corporateCulture');
    }
}
