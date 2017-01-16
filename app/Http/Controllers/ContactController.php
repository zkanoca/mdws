<?php
namespace App\Http\Controllers;


use App\Contact;
use App\Http\Requests\SendMessageRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ContactController extends Controller
{
    public function index()
    {
        $veri = Contact::find(1);


        return view('contact', compact('veri'));
    }

    /**
     * @param Requests\SendMessageRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function sendMessage(SendMessageRequest $request)
    {

        //validation

//        $this->validate($request,
//            ['name' => 'required|min:3',
//                'email' => 'required|min:5',
//                'subject' => 'required|min:3',
//                'message' => 'required|min:15'
//            ]);

        $formVerisi = $request->all();


        return redirect('contact');
    }

}
