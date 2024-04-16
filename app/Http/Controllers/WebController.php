<?php

namespace App\Http\Controllers;

use App\Helper\GlobalHelper;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class WebController extends Controller
{

    public function contactForm(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = Contact::create($request->all());

        $data = [
            'data' => $data,
        ];

//        GlobalHelper::sendEmail('info@visitharam.ca', "A new contact message has been recieved", 'emails.contact', $data);
        return redirect()->back()->with('success', 'Contact message submitted successfully');
    }


}
