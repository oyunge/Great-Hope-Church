<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Event;
use App\Models\Introduction;
use App\Models\Post;
use App\Models\Sermon;
use App\Models\Staff;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function home()
    {
        return view('admin.home');
    }

    public function uploadImage($image, $dir)
    {
        $image_name = $image->getClientOriginalName();
        $new_name = time() . $image_name;
        $image->move($dir, $new_name);
        return $new_name;
    }

    public function introduction_createForm()
    {
        $page = "Create About";
        return view('admin.create_introduction', compact('page'));
    }
    public function introduction_create(Request $request)
    {
        $image = null;
        if ($request->image) {
            $dir = storage_path("app/public/introduction/");
            $image =  $this->uploadImage($request->image, $dir);
        }
        $Introduction = new Introduction();
        // $Introduction->intro_title = $request->intro_title;
        // $Introduction->intro_message = $request->intro_message;
        $Introduction->image = $image;
        $Introduction->title = $request->title;
        $Introduction->message = $request->message;

        $Introduction->save();
        toastr()->success('Welcome Page updated successfully');

        return back();
    }

    public function sermon_createForm()
    {
        $page = "Create Sermon";
        return view('admin.create_sermon', compact('page'));
    }

    public function sermon_create(Request $request)
    {
        $image = null;
        $video = null;
        $audio = null;
        $doc = null;
        if ($request->image) {
            $dir = storage_path("app/public/sermons/");
            $image =  $this->uploadImage($request->image, $dir);
        }
        if ($request->video) {
            $dir = storage_path("app/public/video/");
            $video =  $this->uploadImage($request->video, $dir);
        }
        if ($request->audio) {
            $dir = storage_path("app/public/audio/");
            $audio =  $this->uploadImage($request->audio, $dir);
        }
        if ($request->doc) {
            $dir = storage_path("app/public/doc/");
            $doc =  $this->uploadImage($request->doc, $dir);
        }
        $Sermon = new Sermon();
        // $Sermon->latest_sermonsTitle = $request->latest_sermonsTitle;
        // $Sermon->latest_sermonsMessage = $request->latest_sermonsMessage;
        // $Sermon->message = $request->message;

        $Sermon->image = $image;
        $Sermon->video = $video;
        $Sermon->audio = $audio;
        $Sermon->doc = $doc;
        $Sermon->title = $request->title;
        $Sermon->sermon_from = $request->sermon_from;
        $Sermon->category = $request->category;

        $Sermon->save();
        toastr()->success('Sermons updated successfully');

        return back();
    }

    public function events_createForm()
    {
        $page = "Create Events";
        return view("admin.create_event", compact('page'));
    }
    public function events_create(Request $request)
    {
        $image = null;
        if ($request->image) {
            $dir = storage_path("app/public/events/");
            $image =  $this->uploadImage($request->image, $dir);
        }
        $event = new Event();
        $event->image = $image;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->time = $request->time;
        $event->location = $request->location;
        $event->message = $request->message;
        $event->save();
        toastr()->success('events updated successfully');
        return back();
    }

    public function staff_createForm(){
        $page = "Add Staffs";
        return view('admin.create_staff',compact('page'));
    }

    public function staff_create(Request $request){
        $image = null;
        if ($request->image) {
            $dir = storage_path("app/public/staffs/");
            $image =  $this->uploadImage($request->image, $dir);
        }

        $staff = new Staff();
        $staff->image=$image;
        $staff->name = $request->name;
        $staff->position = $request->position;
        $staff->save();
        toastr()->success('Staffs updated successfully');
        return back();
    }

    public function about_createForm(){
    $page = "About";
    return view('admin.create_about', compact('page'));
    }
    public function about_create(Request $request){
        $image = null;
        if ($request->image) {
            $dir = storage_path("app/public/about/");
            $image =  $this->uploadImage($request->image, $dir);
        }

        $about = new About();
        $about->image = $image;
        $about->title = $request->title;
        $about->message = $request->message;
        $about->save();
        toastr()->success('About Page updated successfully');
        return back();
    }

    public function post_createForm(){
        $page = "News";
        return view('admin.create_post', compact('page'));
        }

    public function post_create(Request $request){
        $image = null;
        if ($request->image) {
            $dir = storage_path("app/public/posts/");
            $image =  $this->uploadImage($request->image, $dir);
        }

        $post = new Post();
        $post->image = $image;
        $post->title = $request->title;
        $post->staff_reporter = $request->staff_reporter;
        $post->date = $request->date;

        $post->message = $request->message;
        $post->save();
        toastr()->success('News Page updated successfully');
        return back();
    }
}
