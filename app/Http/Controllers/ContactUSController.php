<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ContactUS;

class ContactUSController extends Controller
{
     public function contactUS()
    {
        return view('contacto');
    }

    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
        		'name' => 'required',
        		'email' => 'required|email',
        		'message' => 'required'
        	]);

        ContactUS::create($request->all());

        return back()->with('success', '¡Gracias por contactarnos!');
    }


}
