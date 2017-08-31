<?php

namespace App\Http\Controllers\Admin;

use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class ContactController extends Controller
{
    //
//    protected $request;

    public function show(Request $request)
    {
        print_r($request->all());
        try{
            if($request->isMethod('post')){
                dump($request->all());
                $rules = [
                    'name'=>'between:2,1',
                ];
                $this->validate($request,$rules);
            }
        } catch (ValidationException $e){
            dd($e);
    }


        return view('default.contact',['title'=>'Contacts']);
    }
}
