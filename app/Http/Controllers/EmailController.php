<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailSurf;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
    // Validar los datos del formulario si es necesario
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'birthdate' => 'nullable|date',
        'place' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'company' => 'nullable|string|max:255',
        'message' => 'required|string',
    ]);
    dump($request->all());
    // Construir el correo electrónico
    $email = new EmailSurf($request->all());

    // Enviar el correo electrónico (STABLISHED RECIEVER EMAIL)
    Mail::to('fipizarro@hotmail.com')->send($email);
    
    // Redireccionar a una página de confirmación o mostrar un mensaje de éxito
    return response()->json(['success' => '¡Email succesfully send!']);
    }
}
