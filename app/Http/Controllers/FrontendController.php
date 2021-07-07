<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\About;
use App\Models\Event;
use App\Models\Introduction;
use App\Models\Sermon;
use App\Models\Staff;
use App\Models\Contact;
use App\Models\Post;
use Mail; 


class FrontendController extends Controller
{
  public function home(){
    $introduction = Introduction::latest()->get();
    $sermons = Sermon::latest()->get();
    $posts = Post::latest()->get();
    $events = Event::latest()->get();
    return view('index', compact('introduction', 'sermons' ,'posts' ,'events'));
  }

  public function events(){
    $events=Event::latest()->get();
    return view('events', compact('events'));
  }
  public function sermons(){
    $sermons=Sermon::latest()->get();
    return view('sermons', compact('sermons'));
  }
      //
      public function contact(){
          return view('contact');
      }
      public function contactForm(Request $request){
        Contact::create($request->all());
        toastr()->success('message sent successfully');
        return back();        
        \Mail::send('contact_email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone_number' => $request->get('phone'),
            'user_message' => $request->get('message'),
        ), function($message) use ($request)
          {
             $message->from($request->email);
             $message->to('edwinombati99@gmail.com');
          });
      }

      public function about(){
        $abouts=About::latest()->get();
        $staffs=Staff::latest()->get();
        return view('about', compact('abouts','staffs'));
      }
     //post is under the news
      public function post($id)
      {
          $post = Post::find($id);
          return view('single-post', compact('post'));
      }
}
