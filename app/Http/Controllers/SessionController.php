<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    

    public function accessSessionData(Request $request) {
        if($request->session()->has('my_name'))
           echo $request->session()->get('my_name');
        else
           echo 'No data in the session';
     }
     public function storeSessionData(Request $request) {
        $request->session()->put('class',$request->get('class'));
        return redirect('/admin')->with('success', 'Created a class');
     }

     public function storeSessionData2(Request $request) {
      $request->session()->put('class',$request->get('class'));
      return redirect('/home')->with('success', 'Joined a class');
   }
     public function deleteSessionData(Request $request) {
        $request->session()->forget('my_name');
        echo "Data has been removed from session.";
     }
}
