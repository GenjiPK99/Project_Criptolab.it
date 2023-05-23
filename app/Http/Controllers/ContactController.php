<?php

namespace App\Http\Controllers;

use App\Mail\CryptoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function contact(){
        return view('crypto.contact');
      }
    public function form(Request $request){
       $name = $request->name;
       $email= $request->email;
       $message = $request->message;

       Mail::to($email)->send(new CryptoMail());

       return redirect(route('home'))->with('successMessage' , "L'email è stata inviata correttamente!");
      }
}
