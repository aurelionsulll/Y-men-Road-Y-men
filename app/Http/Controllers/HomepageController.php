<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;

use App\Homepage;

use App\Appointment;

use App\Gallery;

use DB;

use Illuminate\Support\Facades\File;

class HomepageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('indexu');
    }

    //User
    //
    //
    //
    //
    //
    //
    //

    public function indexu()
    {
        $sliders = Homepage::all();
        $x = DB::select('select distinct subtext from galleries');
        $gallerys = DB::select('select distinct subtext,image from galleries');
        return view('index',[
            'gallerys'=>$gallerys,
            'x' => $x ])
            ->with('sliders', $sliders);
    }

    //Admin
    //
    //
    //
    //
    //
    //
    //

    public function index()
    {
        $notif = Notification::all();
        return  view('admin.homepage')->with('notif',$notif);
    }

    public  function show()
    {
        return Homepage::latest()->get();
    }

    public  function upl(Request $request)
    {
        $request->validate([
            'name' => 'max:255',
            'image' => 'required',
        ]);
        $slid = new Homepage();
        if ($request->image) {
            $name = date('y-m-d') . time() . '.' . explode('/', explode(':',substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('/images/') . $name);
            $slid->image = $name;
        }
        $slid->text = $request->text;
        $slid->subtext = $request->subtext;
        $slid->save();
    }

    public function  deleteSlider($id)
    {
        $slider = Homepage::find($id);
        $file_path = 'images/' . $slider->image;
        File::delete($file_path);
        $slider->delete();
    }

    public function upd(Request $request, $id)
    {
        $slider = Homepage::find($id);
        if($request->image != $slider->image)
        {
            $slider->text = $request->text;
            $slider->subtext = $request->subtext;
            File::delete('images/' .$slider->image);
            $name = date('y-m-d') . time() . '.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('/images/') . $name);
            $slider->image = $name;
            $slider->save();
        }
        else
        {
            $slider->text = $request->text;
            $slider->subtext = $request->subtext;
            $slider->save();
        }
    }

    //Appointment
    //
    //
    //
    //
    //
    //
    //

    public function indexa()
    {
        $notif = Notification::all();
        return view('admin.appointmentpage')->with('notif',$notif);
    }

    public  function makeAppointment (Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required'
        ]);
        $appointments = new Appointment();
        $appointments->name = $request->input('name');
        $appointments->email = $request->input('email');
        $appointments->phone = '0'.$request->input('phone');
        $appointments->date = $request->input('date');
        $appointments->save();
        return redirect('/')->with('success','Votre réservation a bien été envoyée');
    }

    public  function showa()
    {
        return Appointment::latest()->get();
    }

    public  function showDahboardApp()
    {
        return Appointment::latest()->paginate(4);
    }

    public function  deleteSlidera($id)
    {
        $slider = Appointment::find($id);
        $slider->delete();
    }

    public function uplapp(Request $request,$id)
    {
        $appointments = Appointment::find($id);
        $appointments->readed = $request->readed;
        $appointments->save();
    }


    public function cpadmin()
    {
        $notif = Notification::all();
        return view('admin.index')->with('notif',$notif);
    }
}
