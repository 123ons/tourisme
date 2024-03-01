<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function ajouter_vue()
    {
        $this->middleware('auth');
        return view('admin.ajouter_destination');
    }   
    
    public function telecharger(Request $request)
    {


        $destination=new Destination;

        $picture=$request->file;

        $picturename=time().'.'.$picture->getClientoriginalExtension();

        $request->file->move('imagedestination',$picturename);

        $destination->name=$request->name;

        $destination->description=$request->description;

        $destination->type=$request->type;

        $destination->city=$request->city;

        $destination->service=$request->service;

        $destination->météo=$request->météo;

        $destination->geographic_coordinates=$request->geographic_coordinates;

        $destination->picture=$picturename;


        $destination->save();

        return redirect()->back()->with('message', 'Ajout réussi Destination ');
    }


    public function vue_destination()
    {  
        $destination = Destination::all();

        $this->middleware('auth');

        return view('admin.vue_destination',compact('destination'));
    }

    public function supprimer_destination($id)
    {
        $destination = Destination::find($id);

        $destination->supprimer();

        return redirect()->back();

    }
    public function miseàjour_destination($id)
    {
        $destination = Destination::find($id);
        
        return view('admin.mise à jour_destination',compact('destination'));

    }
    public function modifier_destination(Request $request , $id )
    {
        $destination = Destination::find($id);

        $destination->name=$request->name;

        $destination->description=$request->description;

        $destination->type=$request->type;

        $destination->city=$request->city;

        $destination->service=$request->service;

        $destination->météo=$request->météo;

        $destination->geographic_coordinates=$request->geographic_coordinates;
         
        $picture=$request->picture;
        if($picture)
        {
            $picturename=time().'.'.$picture->getClientOriginalExtension();
            $request->picture->move('destination',$picturename);
            $destination->picture=$picturename;
         }

        


        $destination->save();

        return redirect()->back();
    }


}
