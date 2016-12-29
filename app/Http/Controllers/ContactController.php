<?php
namespace App\Http\Controllers;


use App\Contact;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use  Request;

class ContactController extends Controller
{
    public function index()
    {
        $veri = Contact::find(1);


        return view('contact.contact', compact('veri'));
    }

    public function sendMessage()
    {
        $formVerisi = Request::all();


        return redirect('contact');
    }

}
