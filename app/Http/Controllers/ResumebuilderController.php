<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResumeDetails;
use Auth;
use PDF;

class ResumebuilderController extends Controller
{
    public function resume()
    {
        
      $resumes= ResumeDetails::orderBy('id','desc')->get();
      //  return view('Account.dashboard',compact('data'));
      return view('Resume.resumelist',compact('resumes'));
    }
    public function resumebuilder(Request $request) {
        $request->validate([
            'logo' => 'nullable',
            'fullname' => 'nullable',
            'talentid' => 'nullable',
            'position' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
            'address' => 'nullable',
            'summary' => 'nullable',
            'skills' => 'nullable',
            'employer' => 'nullable',
            'jobtitle' => 'nullable',
            'from' => 'nullable',
            'to' => 'nullable',
            'city' => 'nullable',
            'state' => 'nullable',
            'country' => 'nullable',
            'job_description' => 'nullable',
            'job_projects' => 'nullable',
            'project_name' => 'nullable',
            'project_duration' => 'nullable',
            'project_description' => 'nullable',
            'education_course' => 'nullable',
            'education_institute' => 'nullable',
            'education_duration' => 'nullable',
            'education_location' => 'nullable',
            'certification' => 'nullable',
            'certification_description' => 'nullable',
            ]);
        $resume = new ResumeDetails;
        $resume->logo = $request->logo;
        $resume->fullname = $request->fullname;
        $resume->email = $request->email;
        $resume->phone = $request->phone;
        $resume->address = $request->address;
        $resume->talentid = $request->talentid;
        $resume->summary = $request->summary;
        $resume->skill = json_encode($request->skills);
        $resume->experience = json_encode($request->kt_docs_repeater_basic);
        $resume->project_details = json_encode($request->kt_docs_repeater_basi);
        $resume->course = $request->education_course;
        $resume->education_institute = $request->education_institute;
        $resume->education_duration = $request->education_duration;
        $resume->education_location = $request->education_location;
        $resume->added_by = Auth::user()->username;
        $filename = $resume->fullname.now()->timestamp.'.pdf';
        $resume->resume = 'Resume'.$filename;
        $resume->designation = $request->position;
        $resume->certifications = json_encode($request->kt_docs_repeater_certification);
        $res = $resume->save();
        $company_address = "999999999".'<br>'.
        nl2br("test@rapidbrains.org")."<br>".
        nl2br("Ground Floor, Athulya, Infopark")."<br>".
        nl2br("Kochi, Kerala, India")."<br>".
        nl2br("www.rapidbrains.com");
        $data = [
            'title' => 'Resume',
            'fullname' => $request->fullname,
            'talentid' => $request->talentid,
            'position' => $request->position,
            'summary' => $request->summary,
            'experience'=> $request->kt_docs_repeater_basic,
            'skills' => $request->skills,
            'projects' => $request->kt_docs_repeater_basi,
            'education' => $request->education_course,
            'education_institute' =>$request->education_institute,
            'education_duration' => $request->education_duration,
            'education_location' => $request->education_location,
            'company_address' => $company_address,
            'phone' => $request->phone,
            'email' => $request->email,
            'certifications'=> $request->kt_docs_repeater_certification,
        ];
  
        
        $pdf = PDF::loadView('pdfSample',compact('data'));
        $pdf->save(public_path('Resume'.$filename));
        //return response()->download(public_path('Resume'.$filename));
        if($res) {
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'file' => 'Resume'.$filename
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Error'
              ], 200);
        }
        

    }

    public function emailChecker(Request $request) {
    $name=   strtolower($request->name);
    $email_id=preg_replace('/\s+/', '_', $name);
    $email_id= $email_id.'@hashroot.org';
    $email= ResumeDetails::where('fullname', 'like', '%' .$request->name. '%')->get();
  ;
    if(count($email)>0){
        $email_id=  preg_replace('/\s+/', '_', $name);
        $count=count($email);
        $email_id= $email_id.$count.'@rapidbrains.org';
        return response()->json([
            'data' => $email_id
          ]); 

    }
    $email_id=preg_replace('/\s+/', '_', $name);
    $email_id= $email_id.'@rapidbrains.org';
    return response()->json([
        'data' => $email_id
      ]);  
   
 
    }
    public function talentIdChecker(Request $request) {
      
        $talentid= ResumeDetails::where('talentid',$request->talentid)->first();
       
        if($talentid){
            return 1;
        }else{
            return 0;
        }
    }
}
