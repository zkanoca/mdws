<?php
namespace App\Http\Controllers;


use App\Contact;
use App\Http\Requests;
use App\Http\Requests\SendMessageRequest;
use Illuminate\HttpResponse;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $veri = Contact::find(1);

        return view('contact.contact', compact('veri'));
    }

    public function send_message($locale, SendMessageRequest $request)
    {

        /*
        //validation

//        $this->validate($request,
//            ['name' => 'required|min:3',
//                'email' => 'required|min:5',
//                'subject' => 'required|min:3',
//                'message' => 'required|min:15'
//            ]);
*/
        $formData = $request->all();
        $formData['ip'] = $request->ip();
        $formData['time'] = Carbon::now();

        Mail::send('contact.send', compact('formData'), function ($message) use ($formData) {
            $message
                ->from('sitedenmesajvar@mithatdurak.com', 'mithatdurak.com')
                ->bcc(['ozkanozlu@hotmail.com'])
                ->to('ozkan@ideabilisim.com.tr')
                ->subject($formData['subject']);
        });

        return redirect("$locale/contact");
    }

}
