<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    //
    public function show($id)
    {
        echo __METHOD__;
        echo $id;
    }
    public function getPages()
    {

    }
}
