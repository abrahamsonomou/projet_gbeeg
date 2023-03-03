<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function tableauBord()
    {
        return view('admin.pages.tableauBord');
    }
}
