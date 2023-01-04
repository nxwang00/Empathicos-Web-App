<?php

namespace App\Http\Controllers\Web\Store\Contact;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Mail\Contacts\SendContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

/**
 * Contact
 *
 * @package    Contact Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class ContactController extends Controller
{

    public function index(Request $request)
    {
        return view('store.pages.contacts.index');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            // 'email'   => 'required|email|unique:Contacts,email',
            'message' => 'required|max:5000',
        ]);

        $contact          = new Contact();
        $contact->name    = $request->input('name');
        $contact->email   = $request->input('email');
        $contact->message = $request->input('message');
        if ($contact->save()) {
            Mail::to(get_setting_field('email'))->send(new SendContact($contact));
            flashWebResponse('message', 'Contact has been sent successfully.');
            return redirect()->route('contact');
        }
    }
}
