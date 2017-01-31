<?php

namespace App\Http\Controllers;
use AppHttpRequests;
use AppHttpControllersController;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about() {
        
        // 配列に値をセット
        $data = [];
        $data["first_name"] = "Luke";
        $data["last_name"] = "Skywalker";

        // view関数の第２引数に配列を渡す
        return view('pages.about', $data);  

        // return view('pages.about');
    }

    public function create()
    {
        //
    }
    public function store()
    {
        //
    }
    public function show($id)
    {
        //
    }
 
    public function edit($id)
    {
        //
    }
 
    public function update($id)
    {
        //
    }
 
    public function destroy($id)
    {
        //
    }
}
