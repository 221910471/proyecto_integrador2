<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class CorreoController extends Controller
{
    public function correo(){
        return view("mail.formulario");
    }

    public function enviar1(){
            $data = array(
                'ejemplo' => '',
                'nombre' => 'Josue',
                'correo' => 'josuemanjarrezcareaga.2001@gmail.com',
                'asunto' => 'Ejemplo de Correo 01',
                'mensaje' => 'Contexto de ejemplo de correo 01....'
            );
            Mail::send('mail.mail', $data, function($message){
                $message->to('al221910471@gmail.com','Señor Josue')
                ->subject('Ejemplo de Correo 01 DSM-41');
                $message->from('josuemanjarrezcareaga.2001@gmail.com', 'Josue Manjarrez');
            });

            if(Mail::failures()){
                //return response()->Fail('Intetar más tarde');
                //return view("error");
                return "Error!!!";
            }
            else{
                //return response()->json('Se ha enviado el correo'):
                return view("mail.formulario");
            }
    }

    // public function enviar2(Request $request){
    //     $data = array(

    //         'ejemplo'=>'Ejemplo-02',
    //         'nombre' => $request->get('nombre'),
    //         'correo' => $request->get('correo'),
    //         'asunto' => $request->get('asunto'),
    //         'mensaje'=> $request->get('mensaje')

    //     );

    //         Mail::send('mail.mail', $data , function($message) use($data){
    //             $message->to($data['correo'], $data['nombre']);
    //             $message->subject($data['asunto']);
    //             $message->from('josuemanjarrezcareaga.2001@gmail.com', 'Josue Manjarrez');
    //         });

    //         if (Mail::failures()) {

    //             return "Error!";

    //         }else {

    //             return view('mail.formulario');

    //         }

        
    // }
}
