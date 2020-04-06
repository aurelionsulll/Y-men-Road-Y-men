<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gallery;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
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
        $sliders = Gallery::all();
        return view('index')->with('sliders', $sliders);
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

        return  view('admin.gallerypage')->with('notif',$notif);
    }

    public  function show()
    {
        return Gallery::latest()->get();
        // return ['message' => 'gg wp'];
    }

    public  function upl(Request $request)
    {
        $slid = new Gallery();
        if ($request->image) {
            $name = date('y-m-d') . time() . '.' . explode('/', explode(':',substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('/images/') . $name);
            $slid->image = $name;
        }
        $slid->subtext = $request->subtext;
        $slid->save();
    }

    public function  deleteSlider($id)
    {
        $slider = Gallery::find($id);
        $file_path = 'images/' . $slider->image;
        File::delete($file_path);
        $slider->delete();
    }

    public function upd(Request $request, $id)
    {
        $slider = Gallery::find($id);
        if($request->image != $slider->image)
        {
            $slider->subtext = $request->subtext;
            File::delete('images/' .$slider->image);
            $name = date('y-m-d') . time() . '.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('/images/') . $name);
            $slider->image = $name;
            $slider->save();
        }
        else
        {
            $slider->subtext = $request->subtext;
            $slider->save();
        }
    }

    public  function uplc(Request $request)
    {
        $slid = new Category();
        $slid->categoryy = $request->categoryy;
        $slid->save();
    }

    public  function showc()
    {
        return Category::latest()->get();
    }

}
