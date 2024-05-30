<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUsMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\MailRequest;

class MailController extends Controller
{
    public function showMailForm(){
        return view('mailform');
    }
    public function sendMail(MailRequest $request){
        $mail=new ContactUsMail($request->email,$request->name,$request->description);
        Mail::to('admin@appticket.it')->send($mail);
        return redirect()->back()->with(['success'=>"L'assistenza ti ricontatterà il prima possibile!"]);
    }
}
