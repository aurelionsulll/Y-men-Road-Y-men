<?php

namespace App\Http\Controllers;

use App\Notification;
use Illuminate\Http\Request;

use Illuminate\Http\UploadedFile;

use App\Aboutpage;

use App\Aboutslider;

use DB;

use Illuminate\Support\Facades\File;

class AboutpageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('indexu','more');
    }

    public function indexu( )
    {
        $x = DB::select('select distinct subtext from galleries');
        $gallerys = DB::select('select distinct subtext,image from galleries');
        $activitys = Aboutslider::all();
        return view ('about',['gallerys'=>$gallerys,'x' => $x])->with('activitys',$activitys);
    }

    public function index()
    {
        $notif = Notification::all();
        return  view('admin.about')->with('notif',$notif);
    }


    /////////////////////Activity


    public  function more(Request $request , $id)
    {
        $mores = Aboutpage::find($id);
        return view('more')->with('mores',$mores);
    }

    public  function show()
    {
        return Aboutpage::latest()->get();
    }

    public  function upl(Request $request)
    {
        $slid = new Aboutpage();
        if ($request->image) {
            $name = date('y-m-d') . time() . '.' . explode('/', explode(':',substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('/images/') . $name);
            $slid->image = $name;
        }
        $slid->text = $request->text;
        $slid->subtext = $request->subtext;
        $slid->save();

        // return ['message' => 'jjjj'];
    }

    public function  deleteSlider($id)
    {
        $slider = Aboutpage::find($id);
        $file_path = 'images/' . $slider->image;
        File::delete($file_path);
        $slider->delete();
    }

    public function upd(Request $request, $id)
    {
        $slider = Aboutpage::find($id);
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


    /////////////////////Slider

    public  function shows()
    {
        return Aboutslider::latest()->get();
    }

    public  function upls(Request $request)
    {
        $request->validate([
            'name' => 'max:255',
            'image' => 'required',
        ]);
        $slid = new Aboutslider();
        if ($request->image) {
            $name = date('y-m-d') . time() . '.' . explode('/', explode(':',substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('/images/') . $name);
            $slid->image = $name;
        }
        $slid->text = $request->text;
        $slid->subtext = $request->subtext;
        $slid->save();

        // return ['message' => 'jjjj'];
    }

    public function  deleteSliders($id)
    {
        $slider = Aboutslider::find($id);
        $file_path = 'images/' . $slider->image;
        File::delete($file_path);
        $slider->delete();
    }

    public function upds(Request $request, $id)
    {
        $slider = Aboutslider::find($id);
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
}
