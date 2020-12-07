<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyContactController extends Controller
{
    public function index(Request $request)
    {
        return view('company.contact');
    }

    public function create(Request $request)
    {
        return view('company.done');
    }
}
