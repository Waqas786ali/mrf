<?php

namespace App\Http\Controllers;
use App\Helper\GlobalHelper;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Doctor;
use App\Models\Gallery;
use App\Models\GalleryItem;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\DataTables;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $doctors = Doctor::count();
        $blogs = Blog::count();
        $contacts = Contact::count();
        return view('admin-home',compact('doctors', 'blogs', 'contacts'));
    }



    public function doctorIndex(Request $request)
    {
        $data = Doctor::all();

        if ($request->ajax()) {
            return DataTables::of($data)
                ->addColumn('status', function ($data) {
                    //                    dd($riders);
                    $status = '<span class="badge badge-pill badge-soft-danger font-size-11">InActive</span>';
                    if ($data->status == 1) {
                        $status = '<span class="badge badge-pill badge-soft-success font-size-11">Active</span>';
                    }
                    return $status;
                })
                ->addColumn('actions', function ($data) {

                    $actions = '<div class="btn-group-sm" role="group" aria-label="Basic example">
                    <a href="' . route('edit.doctor', $data->id) . '" class="btn btn-outline-primary btn-sm">Edit</a>
                    <button class="btn btn-outline-danger btn-sm delete-doctor" data-id="' . $data->id . '">Delete</button>

                                            </div>';
                    return $actions;
                })
                ->rawColumns(['status', 'actions'])
                ->make(true);
        }
        return view('doctors.index');
    }

    public function addDoctor(Request $request)
    {
        return view('doctors.edit');
    }

    public function insertDoctor(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->has('status') && $request->status == 'on') {
            $request['status'] = 1;
        } else {
            $request['status'] = 0;
        }

        $doctor = new Doctor();
        $uploadedFiles = [];
        $image = '';
        $icon = '';

        if ($request->hasFile('image')) {
            $uploadedFiles['image'] = $request->file('image');
            $uploadedFiles = GlobalHelper::uploadAndSaveFile($uploadedFiles, 'doctor_images');

            $image = $uploadedFiles['image'] ?? null;
        } elseif (!empty($id)) {
            $image = $doctor->image;
        }

        if ($request->hasFile('icon')) {
            $uploadedFiles['icon'] = $request->file('icon');
            $uploadedFiles = GlobalHelper::uploadAndSaveFile($uploadedFiles, 'doctor_icon');

            $icon = $uploadedFiles['icon'] ?? null;
        } elseif (!empty($id)) {
            $icon = $doctor->icon;
        }
        $doctor->image = $image;
        $doctor->icon = $icon;
        $doctor->name = $request->name;
        $doctor->type = $request->type;
        $doctor->status = $request->status;
        $doctor->save();

        return redirect()->route('doctor.index')->with('success', 'Doctor Added Successfully');
    }

    public function editDoctor($id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.edit', compact('doctor'));
    }

    public function updateDoctor($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required'],

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->has('status') && $request->status == 'on') {
            $request['status'] = 1;
        } else {
            $request['status'] = 0;
        }

        $doctor = Doctor::find($id);
        $uploadedFiles = [];
        $image = '';
        $icon = '';

        if ($request->hasFile('image')) {
            $uploadedFiles['image'] = $request->file('image');
            $uploadedFiles = GlobalHelper::uploadAndSaveFile($uploadedFiles, 'doctor_images');

            $image = $uploadedFiles['image'] ?? null;
        } elseif (!empty($id)) {
            $image = $doctor->image;
        }

        if ($request->hasFile('icon')) {
            $uploadedFiles['icon'] = $request->file('icon');
            $uploadedFiles = GlobalHelper::uploadAndSaveFile($uploadedFiles, 'doctor_icon');

            $icon = $uploadedFiles['icon'] ?? null;
        } elseif (!empty($id)) {
            $icon = $doctor->icon;
        }
        $doctor->image = $image;
        $doctor->icon = $icon;
        $doctor->name = $request->name;
        $doctor->type = $request->type;
        $doctor->status = $request->status;
        $doctor->save();

        return redirect()->route('doctor.index')->with('success', 'Doctor Updated Successfully');
    }

    public function deleteDoctor($id)
    {
        Doctor::find($id)->delete();
        return back()->with('success', 'Doctor deleted Successfully');
    }


    public function schedule(Request $request)
    {
        $data = Schedule::all();

        if ($request->ajax()) {
            return DataTables::of($data)
                ->addColumn('status', function ($data) {
                    //                    dd($riders);
                    $status = '<span class="badge badge-pill badge-soft-danger font-size-11">InActive</span>';
                    if ($data->status == 1) {
                        $status = '<span class="badge badge-pill badge-soft-success font-size-11">Active</span>';
                    }
                    return $status;
                })
                ->addColumn('doctor', function ($data) {
                    $doctor = optional($data->doctor)->name ?? 'N/A';
                    return $doctor;
                })
                ->addColumn('actions', function ($data) {

                    $actions = '<div class="btn-group-sm" role="group" aria-label="Basic example">
                    <a href="' . route('edit.schedule', $data->id) . '" class="btn btn-outline-primary btn-sm">Edit</a>
                    <button class="btn btn-outline-danger btn-sm delete-schedule" data-id="' . $data->id . '">Delete</button>

                                            </div>';
                    return $actions;
                })
                ->rawColumns(['status', 'actions','hotel','category'])
                ->make(true);
        }
        return view('schedule.index');
    }

    public function addSchedule(Request $request)
    {
        $doctors = Doctor::where('status', 1)->get();
        return view('schedule.edit', compact('doctors'));
    }

    public function insertSchedule(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'day' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->has('status') && $request->status == 'on') {
            $request['status'] = 1;
        } else {
            $request['status'] = 0;
        }


        $schedule = new Schedule();
        $schedule->day = $request->day;
        $schedule->time = $request->time;
        $schedule->doctor_id = $request->doctor_id;
        $schedule->status = $request->status;
        $schedule->save();


        return redirect()->route('schedule.index')->with('success', 'Schedule Added Successfully');
    }

    public function editSchedule($id)
    {
        $schedule = Schedule::find($id);
        $doctors = Doctor::where('status', 1)->get();
        return view('schedule.edit', compact('schedule','doctors'));

    }

    public function updateSchedule($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'day' => ['required'],

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->has('status') && $request->status == 'on') {
            $request['status'] = 1;
        } else {
            $request['status'] = 0;
        }

        $schedule = Schedule::find($id);
        $schedule->day = $request->day;
        $schedule->time = $request->time;
        $schedule->doctor_id = $request->doctor_id;
        $schedule->status = $request->status;
        $schedule->save();

        return redirect()->route('schedule.index')->with('success', 'Schedule Updated Successfully');
    }

    public function deleteSchedule($id)
    {
        Schedule::find($id)->delete();
        return back()->with('success', 'Schedule deleted Successfully');
    }



    public function bannerIndex(Request $request)
    {
        $data = Banner::all();

        if ($request->ajax()) {
            return DataTables::of($data)
                ->addColumn('status', function ($data) {
                    $status = '<span class="badge badge-pill badge-soft-danger font-size-11">InActive</span>';
                    if ($data->status == 1) {
                        $status = '<span class="badge badge-pill badge-soft-success font-size-11">Active</span>';
                    }
                    return $status;
                })
                ->addColumn('actions', function ($data) {

                    $actions = '<div class="btn-group-sm" role="group" aria-label="Basic example">
                    <a href="' . route('edit.banner', $data->id) . '" class="btn btn-outline-primary btn-sm">Edit</a>
                    <button class="btn btn-outline-danger btn-sm delete-banner" data-id="' . $data->id . '">Delete</button>

                                            </div>';
                    return $actions;
                })
                ->rawColumns(['status', 'actions'])
                ->make(true);
        }
        return view('banners.index');
    }

    public function addBanner(Request $request)
    {
        return view('banners.edit');
    }

    public function insertBanner(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->has('status') && $request->status == 'on') {
            $request['status'] = 1;
        } else {
            $request['status'] = 0;
        }

        $banner = new Banner();
        $uploadedFiles = [];
        $image = '';

        if ($request->hasFile('image')) {
            $uploadedFiles['image'] = $request->file('image');
            $uploadedFiles = GlobalHelper::uploadAndSaveFile($uploadedFiles, 'banner_images');

            $image = $uploadedFiles['image'] ?? null;
        } elseif (!empty($id)) {
            $image = $banner->image;
        }


        $banner->image = $image;
        $banner->name = $request->name;
        $banner->status = $request->status;
        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner Added Successfully');
    }
    public function editBanner($id)
    {
        $banner = Banner::find($id);
        return view('banners.edit', compact('banner'));
    }

    public function updateBanner($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required'],

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->has('status') && $request->status == 'on') {
            $request['status'] = 1;
        } else {
            $request['status'] = 0;
        }

        $banner = Banner::find($id);
        $uploadedFiles = [];
        $image = '';


        if ($request->hasFile('image')) {
            $uploadedFiles['image'] = $request->file('image');
            $uploadedFiles = GlobalHelper::uploadAndSaveFile($uploadedFiles, 'banner_images');

            $image = $uploadedFiles['image'] ?? null;
        } elseif (!empty($id)) {
            $image = $banner->image;
        }

        $banner->image = $image;
        $banner->name = $request->name;
        $banner->status = $request->status;
        $banner->save();

        return redirect()->route('banner.index')->with('success', 'Banner Updated Successfully');
    }

    public function deleteBanner($id)
    {
        Banner::find($id)->delete();
        return back()->with('success', 'Banner deleted Successfully');
    }

    public function contactForms(Request $request)
    {
        $data = Contact::all();

        if ($request->ajax()) {
            return DataTables::of($data)

                ->addColumn('email', function ($data) {
                    $email = $data->email;
                    return $email;
                })


                ->rawColumns(['email'])
                ->make(true);
        }
        return view('contact.index');
    }


    public function blogIndex(Request $request)
    {
        $data = Blog::all();

        if ($request->ajax()) {
            return DataTables::of($data)
                ->addColumn('status', function ($data) {
                    $status = '<span class="badge badge-pill badge-soft-danger font-size-11">InActive</span>';
                    if ($data->status == 1) {
                        $status = '<span class="badge badge-pill badge-soft-success font-size-11">Active</span>';
                    }
                    return $status;
                })
                ->addColumn('actions', function ($data) {

                    $actions = '<div class="btn-group-sm" role="group" aria-label="Basic example">
                    <a href="' . route('edit.blog', $data->id) . '" class="btn btn-outline-primary btn-sm">Edit</a>
                    <button class="btn btn-outline-danger btn-sm delete-blog" data-id="' . $data->id . '">Delete</button>

                                            </div>';
                    return $actions;
                })
                ->rawColumns(['status', 'actions'])
                ->make(true);
        }
        return view('blogs.index');
    }

    public function addBlog(Request $request)
    {
        return view('blogs.edit');
    }

    public function insertBlog(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->has('status') && $request->status == 'on') {
            $request['status'] = 1;
        } else {
            $request['status'] = 0;
        }

        $blog = new Blog();
        $uploadedFiles = [];
        $image = '';

        if ($request->hasFile('image')) {
            $uploadedFiles['image'] = $request->file('image');
            $uploadedFiles = GlobalHelper::uploadAndSaveFile($uploadedFiles, 'blog_images');

            $image = $uploadedFiles['image'] ?? null;
        } elseif (!empty($id)) {
            $image = $blog->image;
        }


        $blog->image = $image;
        $blog->name = $request->name;
        $blog->content = $request->content;
        $blog->slug = $request->name;
        $blog->status = $request->status;
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog Added Successfully');
    }
    public function editBlog($id)
    {
        $blog = Blog::find($id);
        return view('blogs.edit', compact('blog'));
    }

    public function updateBlog($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required'],

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->has('status') && $request->status == 'on') {
            $request['status'] = 1;
        } else {
            $request['status'] = 0;
        }

        $blog = Blog::find($id);
        $uploadedFiles = [];
        $image = '';


        if ($request->hasFile('image')) {
            $uploadedFiles['image'] = $request->file('image');
            $uploadedFiles = GlobalHelper::uploadAndSaveFile($uploadedFiles, 'blog_images');

            $image = $uploadedFiles['image'] ?? null;
        } elseif (!empty($id)) {
            $image = $blog->image;
        }

        $blog->image = $image;
        $blog->name = $request->name;
        $blog->content = $request->content;
        $blog->slug = $request->name;
        $blog->status = $request->status;
        $blog->save();

        return redirect()->route('blog.index')->with('success', 'Blog Updated Successfully');
    }

    public function deleteBlog($id)
    {
        Blog::find($id)->delete();
        return back()->with('success', 'Blog deleted Successfully');
    }


    public function galleryIndex(Request $request)
    {
        $data = Gallery::all();

        if ($request->ajax()) {
            return DataTables::of($data)
                ->addColumn('status', function ($data) {
                    $status = '<span class="badge badge-pill badge-soft-danger font-size-11">InActive</span>';
                    if ($data->status == 1) {
                        $status = '<span class="badge badge-pill badge-soft-success font-size-11">Active</span>';
                    }
                    return $status;
                })
                ->addColumn('actions', function ($data) {

                    $actions = '<div class="btn-group-sm" role="group" aria-label="Basic example">
                    <a href="' . route('edit.gallery', $data->id) . '" class="btn btn-outline-primary btn-sm">Edit</a>
                    <button class="btn btn-outline-danger btn-sm delete-gallery" data-id="' . $data->id . '">Delete</button>

                                            </div>';
                    return $actions;
                })
                ->rawColumns(['status', 'actions'])
                ->make(true);
        }
        return view('gallery.index');
    }

    public function addGallery(Request $request)
    {
        return view('gallery.edit');
    }

    public function insertGallery(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->has('status') && $request->status == 'on') {
            $request['status'] = 1;
        } else {
            $request['status'] = 0;
        }

        $gallery = new Gallery();
        $uploadedFiles = [];
        $image = '';

        if ($request->hasFile('image')) {
            $uploadedFiles['image'] = $request->file('image');
            $uploadedFiles = GlobalHelper::uploadAndSaveFile($uploadedFiles, 'gallery_images');

            $image = $uploadedFiles['image'] ?? null;
        } elseif (!empty($id)) {
            $image = $gallery->image;
        }


        $gallery->image = $image;
        $gallery->name = $request->name;
        $gallery->status = $request->status;
        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery Added Successfully');
    }
    public function editGallery($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.edit', compact('gallery'));
    }

    public function updateGallery($id, Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => ['required'],

        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if ($request->has('status') && $request->status == 'on') {
            $request['status'] = 1;
        } else {
            $request['status'] = 0;
        }

        $gallery = Gallery::find($id);
        $uploadedFiles = [];
        $image = '';


        if ($request->hasFile('image')) {
            $uploadedFiles['image'] = $request->file('image');
            $uploadedFiles = GlobalHelper::uploadAndSaveFile($uploadedFiles, 'gallery_images');

            $image = $uploadedFiles['image'] ?? null;
        } elseif (!empty($id)) {
            $image = $gallery->image;
        }

        $gallery->image = $image;
        $gallery->name = $request->name;
        $gallery->status = $request->status;
        $gallery->save();

        return redirect()->route('gallery.index')->with('success', 'Gallery Updated Successfully');
    }

    public function deleteGallery($id)
    {
        Gallery::find($id)->delete();
        return back()->with('success', 'Gallery deleted Successfully');
    }



    public function galleryitemIndex(Request $request)
    {
        $data = GalleryItem::all();

        if ($request->ajax()) {
            return DataTables::of($data)
                ->addColumn('gallery', function ($data) {
                    $gallery = $data->gallery->name ?? '';
                    return $gallery;
                })
                ->addColumn('actions', function ($data) {

                    $actions = '<div class="btn-group-sm" role="group" aria-label="Basic example">
                    <a href="' . route('edit.galleryitem', $data->id) . '" class="btn btn-outline-primary btn-sm">Edit</a>
                    <button class="btn btn-outline-danger btn-sm delete-galleryitem" data-id="' . $data->id . '">Delete</button>

                                            </div>';
                    return $actions;
                })
                ->rawColumns(['status', 'actions'])
                ->make(true);
        }
        return view('galleryitem.index');
    }

    public function addGalleryItem(Request $request)
    {
        $galleries = Gallery::where('status', 1)->get();
        return view('galleryitem.edit',compact('galleries'));
    }

    public function insertGalleryItem(Request $request)
    {

        $galleryitem = new GalleryItem();
        $uploadedFiles = [];
        $image = '';

        if ($request->hasFile('url')) {
            $uploadedFiles['url'] = $request->file('url');
            $uploadedFiles = GlobalHelper::uploadAndSaveFile($uploadedFiles, 'galleryitem_images');

            $image = $uploadedFiles['url'] ?? null;
        } elseif (!empty($id)) {
            $image = $galleryitem->url;
        }


        $galleryitem->url = $image;
        $galleryitem->gallery_id = $request->gallery_id;
        $galleryitem->save();

        return redirect()->route('galleryitem.index')->with('success', 'Gallery Added Successfully');
    }
    public function editGalleryItem($id)
    {
        $galleryitem = GalleryItem::find($id);
        $galleries = Gallery::where('status', 1)->get();

        return view('galleryitem.edit', compact('galleryitem','galleries'));
    }

    public function updateGalleryItem($id, Request $request)
    {

        $galleryitem = GalleryItem::find($id);
        $uploadedFiles = [];
        $image = '';

        if ($request->hasFile('url')) {
            $uploadedFiles['url'] = $request->file('url');
            $uploadedFiles = GlobalHelper::uploadAndSaveFile($uploadedFiles, 'galleryitem_images');

            $image = $uploadedFiles['url'] ?? null;
        } elseif (!empty($id)) {
            $image = $galleryitem->image;
        }

        $galleryitem->url = $image;
        $galleryitem->gallery_id = $request->gallery_id;
        $galleryitem->save();

        return redirect()->route('galleryitem.index')->with('success', 'Gallery Item Updated Successfully');
    }

    public function deleteGalleryItem($id)
    {
        GalleryItem::find($id)->delete();
        return back()->with('success', 'Gallery Item deleted Successfully');
    }
}


