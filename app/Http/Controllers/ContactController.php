<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $veri = Contact::find(1)->toArray();

        $postaKodu = Contact::find(1);

        $postaKodu->update(['title' => '12345']);

        return view('contact.contact', compact('veri'));
    }

}
