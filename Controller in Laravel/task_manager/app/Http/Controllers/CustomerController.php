<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('index');
    }
    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        return view('show', compact('name', 'email','phone'));
    }
    public function show($id)
    {
        // return view('show');
    }

    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }

    public function delete($id)
    {
        //
    }
}
