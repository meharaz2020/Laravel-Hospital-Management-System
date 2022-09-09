<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appoinment;
 class HomeController extends Controller
{
    public function redirects(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                $doctor= doctor::all();
                return view('user.home',compact('doctor'));
            }else{
                return view('admin.home');
            }
        }else{
          return redirect()->back();
    }
    } 


    public function index(){
       if(Auth::id()){
        return redirect('home');
       }else{
        $doctor= doctor::all();
        return view('user.home',compact('doctor'));
       }
    }

    public function appoinment(Request $request){
    $data= new appoinment;

    $data->name=$request->name;
    $data->email=$request->email;
    $data->phone=$request->number;
    $data->doctor=$request->doctor;
    $data->date=$request->date;
    $data->message=$request->message;
    $data->status='In process';
if(Auth::id()){
    $data->user_id=Auth::user()->id;

}
$data->save();
return redirect()->back()->with('message','Appoinment request successfully');
    }


    public function myappoinment(){
        if(Auth::id()){
            $userid=Auth::user()->id;
            $appoint=appoinment::where('user_id',$userid)->get();
            return view('user.my_appoinment',compact('appoint'));
        }else{
            return redirect()->back();
        }
    }

    public function cancel_appoint($id){
       $data=appoinment::find($id);
       $data->delete();
       return redirect()->back();        
    }
}
