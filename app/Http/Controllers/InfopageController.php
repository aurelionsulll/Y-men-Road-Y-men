<?php

namespace App\Http\Controllers;

use App\Infopage;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InfopageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('indexu','more');
    }

    public function indexu( )
    {
        $sliders = Infopage::all();
        return view('info')->with('sliders',$sliders);
    }

    public function index()
    {
        $notif = Notification::all();
        return  view('admin.infopage')->with('notif',$notif);
    }

    public  function shows()
    {
        return Infopage::latest()->get();
    }

    public  function upls(Request $request)
    {
        $request->validate([
            'name' => 'max:255',
            'image' => 'required',
        ]);
        $slid = new Infopage();
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
        $slider = Infopage::find($id);
        $file_path = 'images/' . $slider->image;
        File::delete($file_path);
        $slider->delete();
    }

    public function upds(Request $request, $id)
    {
        $slider = Infopage::find($id);
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
