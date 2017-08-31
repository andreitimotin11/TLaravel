<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use DB;

class AboutController extends Controller
{
    //
    public function show()
    {

        if (view()->exists('default.about')) {
            $view = view('default.about')->withTitle('Hello');
            $articles = DB::select('SELECT * FROM `articles`');
            dd($articles);
            return response()->view('default.about', ['title'=>'Lara']);
        }
       return redirect()->back();
    }
}
