<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

use App\Notification;

class ContactController extends Controller
{

    public function indexu()
    {
        return view('contact');
    }

    public  function message (Request $request)
    {
        $message = new Contact();
        $message->name = $request->input('name');
        $message->mail = $request->input('mail');
        $message->phone = $request->input('phone');
        $message->subject = $request->input('subject');
        $message->autre = $request->input('autre');
        $message->save();
        return redirect('/contact')->with('success','Votre message a bien été envoyée');
    }

    public function indexa()
    {
        $notif = Notification::all();
        return view('admin.contactpage')->with('notif',$notif);
    }

    public  function showa()
    {
        return Contact::latest()->get();
    }

    public  function showcontacts()
    {
        return Contact::latest()->paginate(3);
    }

    public function  deleteSlidera($id)
    {
        $slider = Contact::find($id);
        $slider->delete();
    }

    public function uplapp(Request $request,$id)
    {
        $appointments = Contact::find($id);
        $appointments->readed = $request->readed;
        $appointments->save();
    }
}
