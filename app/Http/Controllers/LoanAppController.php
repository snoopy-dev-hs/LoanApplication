<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanAppController extends Controller
{
    public function index ()
    {
        return view("backend.loan-app.index");
    }

    public function create ()
    {

        return view("backend.loan-app.create2");
    }

    public function store (Request $request)
    {
        dd($request->all());
    }
}
