<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home(){
        return view('home');
    }

    public function serviceArea(){
        return view('service');
    }

    public function aboutUs(){
        return view('aboutUs');
    }
    public function prev(){
        return view('contact');
    }

    public function contactSend(Request $request){

        $tipoTrasporto = $request->input('tipoTrasporto');
        $cittaPartenza = $request->input('cittaPartenza');
        $regionePartenza = $request->input('regionePartenza');
        $cittaDestinazione = $request->input('cittaDestinazione');
        $regioneDestinazione = $request->input('regioneDestinazione');
        $dataConsegna = $request->input('dataConsegna');
        $descrizioneCarico = $request->input('descrizioneCarico');
        // $assicurazioneCarico = $request->input('assicurazioneCarico');
        // $merciInfiammabili = $request->input('merciInfiammabili');
        $email = $request->input('email');
        $telefono = $request->input('telefono');

        $content = compact('tipoTrasporto','cittaPartenza', 'regionePartenza', 'cittaDestinazione', 'regioneDestinazione', 'dataConsegna', 'descrizioneCarico', 'email', 'telefono');

        try {
            Mail::to('barbaronico93@gmail.com')->send(new ContactMail($content));
            Mail::to($email)->send(new ConfirmationMail($content));
        } catch (\Exception $e) {
            return redirect(route('home'))->with('errorMessage', 'Si stanno verificando degli errori, vi preghiamo di riprovare più tardi');
        }
        return redirect(route('home'))->with('message', 'Messaggio inviato correttamente, riceverai una mail di conferma');
    }
}