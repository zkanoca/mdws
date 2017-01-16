<?php
namespace App\Http\Controllers;


use App\Contact;
use App\Http\Requests\SendMessageRequest;
//use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Request;


class ContactController extends Controller
{
    public function index()
    {
        $veri = Contact::find(1);


        return view('contact.contact', compact('veri'));
    }

    /**
     * @param Requests\SendMessageRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function send_message($locale, SendMessageRequest $request)
    {

        //validation

//        $this->validate($request,
//            ['name' => 'required|min:3',
//                'email' => 'required|min:5',
//                'subject' => 'required|min:3',
//                'message' => 'required|min:15'
//            ]);

        $formData = $request->all();
        $formData['ip'] = Request::ip();

        Mail::send('contact.send', compact('formData'), function ($message) use ($formData) {
            $message
                ->from('sitedenmesajvar@mithatdurak.com', 'mithatdurak.com')
                ->bcc(['ozkanozlu@hotmail.com'])
                ->to('ozkan@ideabilisim.com.tr')
                ->subject($formData['subject']);
        });


        //return redirect("$locale/contact");
    }

}
