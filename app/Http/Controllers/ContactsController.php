<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;
use App\models\Message;


class ContactsController extends Controller
{
    //
    
    public function create(){
         return view('contacts.create');
    }
    public function store(ContactRequest $request){
        
      /*  $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();*/
       
        
       $message = Message::create($request->only('name','email','message'));
        
        $mailable = new ContactMessageCreated($message);
        
        Mail::to(config('laracarte.admin_support_email'))->send($mailable);
        
        Flashy::message('Nous vous repondrons dans les plus bréfs délais !');
        
        return redirect()->route('root_path');
    }
}
