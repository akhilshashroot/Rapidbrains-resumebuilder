<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Redirect;
use App\Models\Recruiter;
use App\Models\StakefieldUser;
use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPasswordMail;
use Hash;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\PermanentJob;
use App\Models\JobApplicationPermanent;
use App\Models\Announcement;
use DB;

class DashBoardController extends Controller
{
   
public function index(Request $request)
{
    $code=Auth::user()->recruiter_id;
  
    ///total jobs
    $total_jobs_con= Job::where('status',1)->count();
    $total_jobs_per =PermanentJob::where('status',1)->count();

    $total_jobs=$total_jobs_con+$total_jobs_per;
    ///profiles submitted 
    $submitted_count1 = JobApplication::where('added_by',$code)->count();
    $submitted_count2 = JobApplicationPermanent::where('added_by',$code)->count();
    $submitted_count=$submitted_count1+$submitted_count2;

    //In-Progress
    $progress_count1 = JobApplication::where('added_by',$code)->whereIn('status',['Submitted'])->count();
    $progress_count2 = JobApplicationPermanent::where('added_by',$code)->whereIn('status',['Submitted'])->count();
    $progress_count=$progress_count1+$progress_count2;

    ///shortlisted
    $shortlisted_count1 = JobApplication::where('added_by',$code)->where('status','Shortlisted')->count();
    $shortlisted_count2 = JobApplicationPermanent::where('added_by',$code)->where('status','Shortlisted')->count();
    $shortlisted_count=$shortlisted_count1+$shortlisted_count2;

    ///talent_count
    $talent_coun1 = StakefieldUser::where('added_by',$code)->count();
    $talent_coun2 =  JobApplicationPermanent::where('added_by',$code)->count();
     $talent_count= $talent_coun1+ $talent_coun2;
///Interviewed

      $interviewed_count1 = JobApplication::where('added_by',$code)->where('status','Interviewed')->count();
      $interviewed_count2 = JobApplicationPermanent::where('added_by',$code)->where('status','Interviewed')->count();
          $interviewed_count=$interviewed_count1+$interviewed_count2;
    ///Selected
    
    $selected_count1 = JobApplication::where('added_by',$code)->where('status','Selected')->count();
    $selected_count2 = JobApplicationPermanent::where('added_by',$code)->where('status','Selected')->count();
    $selected_count=$selected_count1+$selected_count2;
    //Joined
    $joined_count1 = JobApplication::where('added_by',$code)->where('status','Joined')->count();
    $joined_count2 = JobApplicationPermanent::where('added_by',$code)->where('status','Joined')->count();
    $joined_count=$joined_count1+$joined_count2;
    
    //Rejected
    
    $rejected_count1 = JobApplication::where('added_by',$code)->where('status','Rejected')->count();
    $rejected_count2 = JobApplicationPermanent::where('added_by',$code)->where('status','Rejected')->count();
    $rejected_count=$rejected_count1+$rejected_count2;


    //notsuitable

    $notsuitable_count1 = JobApplication::where('added_by',$code)->where('status','Not Suitable')->count();
    $notsuitable_count2 = JobApplicationPermanent::where('added_by',$code)->where('status','Not Suitable')->count();
    $notsuitable_count=$notsuitable_count1+$notsuitable_count2;
    $announcements= Announcement::orderby('id','desc')->get();
  $letter=env('IMAGE2_URL').Auth::user()->offer_letter;

    return view('rapidbrains.dashboard',compact('notsuitable_count','letter','announcements','total_jobs','talent_count','submitted_count','progress_count','shortlisted_count','interviewed_count','selected_count','joined_count','rejected_count'));

}

public function myAccount(Request $request)
{
    $vendors=Recruiter::find(Auth::user()->id);
    return view('rapidbrains.myaccount',compact('vendors'));

}


public function updateAccount(Request $request)
{
    if(!isset($request->email)){

        return response()->json([ 
            'status'	=> 0,
            'statuscode'    => '403',
            'message' => 'please enter your email address.',

        ]);
   //     return redirect()->back()->with('error', 'please enter your email address.');

    }
    if(!isset($request->name)){
        return response()->json([ 
            'status'	=> 0,
            'statuscode'    => '403',
            'message' => 'please enter your full name.',

        ]);
  //      return redirect()->back()->with('error', 'please enter your full name.');

    }

    $vendors=Recruiter::find($request->vendor_id);
    if(isset($request->password)){
        $vendors->password= Hash::make($request->password);

    } 
    if(isset($request->name)){
    $vendors->name= $request->name;
    }
    if(isset($request->email)){

    $vendors->email= $request->email;
    }
    if(isset($request->phone)){

    $vendors->phone= $request->phone;
    }
    if(isset($request->address)){

    $vendors->company_address= $request->address;
    }
    if(isset($request->account_name)){

    $vendors->account_name= $request->account_name;
    }
    if(isset($request->account_no)){

    $vendors->account_no= $request->account_no;
    }
    if(isset($request->bank_name)){

    $vendors->bank_name= $request->bank_name;
    }
    if(isset($request->ifsc_code)){

    $vendors->ifsc_code= $request->ifsc_code;
    }
    if(isset($request->bank_name)){

    $vendors->bank_name= $request->bank_name;
    }

    if(isset($request->bank_address)){

    $vendors->bank_address= $request->bank_address;
    }
    if(isset($request->gst_no)){
    $vendors->gst_no= $request->gst_no;
    }
    $vendors->save();
    return response()->json([ 
        'status'	=> 1,
        'statuscode'    => '402',
        'message' => 'Profile has been updated.',

    ]);
   // return redirect()->back()->with('message', 'Profile has been updated.');


}
public function termsCondition(Request $request){
    return view('rapidbrains.termscondition');


}

}