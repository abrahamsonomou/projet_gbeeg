<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    //

    public function index()
    {

        return view('client.pages.home');
    }

}
