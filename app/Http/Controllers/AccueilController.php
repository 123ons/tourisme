<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;



class AccueilController extends Controller
{

   public function redirect()
   {
      if (Auth::id()) {
         if (Auth::user()->usertype == '0') 
         {
            $destination = destination::all();

            return view('user.accueil', compact('destination'));
          }
           else 
         {
            return view('admin.accueil');
         }
      }
      
         else 
         {
         return redirect()->back();
         }
   }


   public function index()
   {
      if (Auth::id())
      {
         return redirect('accueil');
      } 
      else 
      {

         $destination=destination::all();

         return view('user.accueil', compact('destination'));

      }
   }

   public function details_destination($id)
{
    $destination = Destination::find($id);
    
    return view('user.details_destination', compact('destination'));
}





}
