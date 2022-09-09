<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appoinment;
use Notification;
use App\Notifications\SendEmailNotification;
class AdminController extends Controller
{
    public function add_doctor_view(){
        return view('admin.add_doctor');
    }
    public function upload_doctor(Request $request){
       $doctor = new doctor;
       $image=$request->file;
       $imagename=time().'.'.$image->getClientoriginalExtension();
       $request->file->move('doctorimage',$imagename);
       $doctor->image=$imagename;
       $doctor->name=$request->name;
       $doctor->phone=$request->phone;
       $doctor->special=$request->spe;
       $doctor->room=$request->room;
       $doctor->save();
       return redirect()->back()->with('message','Doctor Added Successfully');
    }

    public function show_appointments(){
        $data=Appoinment::all();

        return view('admin.show_appointments',compact('data'));
    }

    public function approve($id){
    $data=Appoinment::find($id);
    $data->status='Approved';
    $data->save();
    return redirect()->back();
    }

    public function canceled($id){
        $data=Appoinment::find($id);
        $data->status='Canceled';
        $data->save();
        return redirect()->back();
        }

        public function showdoctor(){
            $data=Doctor::all();

            return view('admin.showdoctor',compact('data'));
        }

        public function deletedoctor($id){
         $data=Doctor::find($id);
         $data->delete();
         return redirect()->back();

        }

        public function updatedoctor($id){

            $data=Doctor::find($id);

            return view('admin.updatedoctor',compact('data'));
        }

        public function emailview($id){
            $data=Appoinment::find($id);
            return view('admin.emailview');
        }

        // public function sendmail(Request $request, $id){
        //      $data=Appoinment::find($id);
        //      $details=[
        //     'greeting' = $request->greeting,
        //     'body' = $request->body,
        //     'actiontxt' = $request->actiontxt,
        //     'url' = $request->url,
        //     'txt' = $request->txt

        //      ];
        //      Notification::send($data,new SendEmailNotification($details));
        //      return redirect()->back();
        // }
    
}
