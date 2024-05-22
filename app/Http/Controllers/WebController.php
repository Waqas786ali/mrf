<?php

namespace App\Http\Controllers;

use App\Helper\GlobalHelper;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Doctor;
use App\Models\Gallery;
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

    public function gallery(Request $request)
    {
        $galleries = Gallery::where('status', 1)->get();
        return view('gallery',compact('galleries'));
    }

    public function doctorSchedule()
    {
        $doctors = Doctor::where('status', 1)->latest()->paginate(22);
        return view('doctor-schedule', compact('doctors'));
    }

    public function blogs(Request $request)
    {
        $searchTerm = $request->input('search');

        $blogsQuery = Blog::query()->where('status', 1); // Add condition for status = 1

        if ($searchTerm) {
            $blogsQuery->where('title', 'like', "%$searchTerm%")
                ->orWhere('content', 'like', "%$searchTerm%");
        }

        $blogs = $blogsQuery->latest()->paginate(12);


        return view('blog', compact('blogs','searchTerm'));
    }


}
