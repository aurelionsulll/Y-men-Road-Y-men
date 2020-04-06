<?php

namespace App\Http\Controllers;

use App\Gde;
use App\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GdeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('indexu');
    }

    public function index ()
    {
        $notif = Notification::all();

        return view ('admin.gdepage')->with('notif',$notif);
    }

    public function indexu()
    {
        $activitys = Gde::all();
        return  view('services')->with('activitys',$activitys);
    }


    /////////////////////gde


//    public  function more(Request $request , $id)
//    {
//        $mores = Gde::find($id);
//        return view('more')->with('mores',$mores);
//    }

    public  function show()
    {
        return Gde::latest()->paginate(2);
    }

    public  function upl(Request $request)
    {
        // $request->validate([
        //     'name' => 'max:255',
        //     'image' => 'required',
        // ]);
        $slid = new Gde();
        if ($request->image) {
            $name = date('y-m-d') . time() . '.' . explode('/', explode(':',substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('/images/') . $name);
            $slid->image = $name;
        }
        $slid->nom = $request->nom;
        $slid->description = $request->description;
        $slid->recommandations = $request->recommandations;
        $slid->prelevement = $request->prelevement;
        $slid->definition = $request->definition;
        $slid->technique = $request->technique;
        $slid->delais = $request->delais;
        $slid->save();
    }

    public function  deleteSlider($id)
    {
        $slider = Gde::find($id);
        $file_path = 'images/' . $slider->image;
        File::delete($file_path);
        $slider->delete();
    }

    public function upd(Request $request, $id)
    {
        $slider = Gde::find($id);
        if($request->image != $slider->image)
        {
            $slider->nom = $request->nom;
            $slider->description = $request->description;
            $slider->recommandations = $request->recommandations;
            $slider->prelevement = $request->prelevement;
            $slider->definition = $request->definition;
            $slider->technique = $request->technique;
            $slider->delais = $request->delais;
            File::delete('images/' .$slider->image);
            $name = date('y-m-d') . time() . '.' . explode('/', explode(':', substr($request->image, 0, strpos($request->image, ';')))[1])[1];
            \Image::make($request->image)->save(public_path('/images/') . $name);
            $slider->image = $name;
            $slider->save();
        }
        else
        {
            $slider->nom = $request->nom;
            $slider->description = $request->description;
            $slider->recommandations = $request->recommandations;
            $slider->prelevement = $request->prelevement;
            $slider->definition = $request->definition;
            $slider->technique = $request->technique;
            $slider->delais = $request->delais;
            $slider->save();
        }
    }

    public function gdesearch()
    {
        if($search = \Request::get('q'))
        {
            $vs = Gde::where(function($query)use($search){
                $query->where('nom','LIKE',"%$search%")
                    ->orWhere('Description','LIKE','%$search%');
            })->paginate(10);
        }
        else{
            $vs = Gde::latest()->paginate(2);
        }
        return $vs;
    }
}
