<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ContactUS;
use Mail;

class ContactUSController extends Controller
{
    //public function contactUS()
    //{
        //return view('contacto');
    //}

    public function contactUS(Request $request)
    {
        $this->validate($request, [
        		'name' => 'required',
        		'email' => 'required|email',
        		'message' => 'required'
        	]);

        //ContactUS::create($request->all());


        $nombre =  urldecode($request->input('name'));
        $correo =  urldecode($request->input('email'));
        $mensajeCont =  urldecode($request->input('message'));

        $data = array('nombre'=>$nombre, 'correo'=>$correo, 'mensaje'=>$mensajeCont);

        $emails = array('contactoKW@kokai.com.mx',$correo);
        $emailsBCC = array('gaby@kokai.com.mx','anapaula@kokai.com.mx');

        $res = Mail::send('emails.contacto',$data, function ($message) use ($emails, $emailsBCC) {
			$message->from('contactoKW@kokai.com.mx','Página Kokai Web');
			$message->to($emails);
			$message->bcc($emailsBCC);
			$message->subject('[Contacto] Página Kokai Web');
 		});

 		//dump("ok");

        //return back()->with('success', '¡Gracias por contactarnos nos pondremos en contacto con usted tan pronto leamos su mensaje!');
        //return view('inicio')->with('success', '¡Gracias por contactarnos ,nos pondremos en contacto con usted tan pronto leamos su mensaje!');
        ///return view('inicio')->with(['tipoMensaje'=>'success','mensaje'=>'¡Gracias por contactarnos, nos pondremos en contacto con usted tan pronto leamos su mensaje!']);
        //return view('layouts.prueba');
        //return view('emails.contacto')->with($data);



        return back()->with('success', '¡Gracias por contactarnos!');
    }


}
