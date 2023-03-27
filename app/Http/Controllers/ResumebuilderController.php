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
      if(Auth::user()->role=='1'){
        $resumes= ResumeDetails::orderBy('id','desc')->get();
      }else{
        $resumes= ResumeDetails::orderBy('id','desc')->where('added_by',Auth::user()->id)->get();

      }  
     
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
        $resume->added_by = Auth::user()->id;
        $filename = $resume->fullname.now()->timestamp.'.pdf';
        $resume->resume = 'Resume'.$filename;
        $resume->designation = $request->position;
        $resume->certifications = json_encode($request->kt_docs_repeater_certification);
        $resume->education_details = json_encode($request->kt_docs_repeater_education);
        $res = $resume->save();
        $company_address = "999999999".'<br>'.
        nl2br("test@rapidbrains.org")."<br>".
        nl2br("Ground Floor, Athulya, Infopark")."<br>".
        nl2br("Kochi, Kerala, India")."<br>".
        nl2br("www.rapidbrains.com");

        $certifications_count= array_filter($request->kt_docs_repeater_certification[0]);
        $kt_docs_repeater_basi_count= array_filter($request->kt_docs_repeater_basi[0]);
        $kt_docs_repeater_basic_count= array_filter($request->kt_docs_repeater_basic[0]);
        $kt_docs_repeater_education_count= array_filter($request->kt_docs_repeater_education[0]);

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
            'education_details'=> $request->kt_docs_repeater_education,
            'certifications_count'=>$certifications_count,
            'kt_docs_repeater_basic_count'=>$kt_docs_repeater_basic_count,
            'kt_docs_repeater_basi_count'=>$kt_docs_repeater_basi_count,
            'kt_docs_repeater_education_count'=>$kt_docs_repeater_education_count
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
    public function show(Request $request, $id) {
        $resume_details = ResumeDetails::find($id);
        $resume_details->skillArray = json_decode($resume_details->skill);
        $resume_details->experienceArray = json_decode($resume_details->experience);
        $resume_details->projectdetailsArray = json_decode($resume_details->project_details);
        $resume_details->certificationsArray = json_decode($resume_details->certifications);
        $resume_details->educationArray = json_decode($resume_details->education_details);
        $resume_details->url = url('/');
        if($resume_details->experienceArray[0]->employer) {
            $resume_details->experience_count = 1;
        } else {
            $resume_details->experience_count = 0;
        }
        if($resume_details->projectdetailsArray[0]->project_name) {
            $resume_details->project_count = 1;
        } else {
            $resume_details->project_count = 0;
        }
        if($resume_details->certificationsArray[0]->certification) {
            $resume_details->certification_count = 1;
        } else {
            $resume_details->certification_count = 0;
        }
        if($resume_details->educationArray[0]->education_course) {
            $resume_details->education_count = 1;
        } else {
            $resume_details->education_count = 0;
        }
       /* $project_count= array_filter($resume_details->projectdetailsArray[0]);
        $certification_count= array_filter($resume_details->certificationsArray[0]);
        $education_count= array_filter($resume_details->educationArray[0]);*/
        //$bg_url = 
       // dd($resume_details->educationArray);
        return view('Resume.resumeedit',compact('resume_details'));
    }
    public function update(Request $request, $id) {
        $resume = ResumeDetails::find($id);
        $resume->fullname = $request->fullname;
        $resume->address = $request->address;
        $resume->summary = $request->summary;
        $resume->skill = json_encode($request->skills);
        if(is_array($request->kt_docs_repeater_basic) && is_array($request->kt_docs_repeater_basic_exp)) {
            $resume->experience = json_encode(array_merge($request->kt_docs_repeater_basic,$request->kt_docs_repeater_basic_exp));
            $data_exp = array_merge($request->kt_docs_repeater_basic,$request->kt_docs_repeater_basic_exp);
        } else {
            $resume->experience = json_encode($request->kt_docs_repeater_basic_exp);
            $data_exp = $request->kt_docs_repeater_basic_exp;
        }
        if(is_array($request->kt_docs_repeater_basi) && is_array($request->kt_docs_repeater_basi_prj)) {
            $resume->project_details = json_encode(array_merge($request->kt_docs_repeater_basi,$request->kt_docs_repeater_basi_prj));
            $data_prj = array_merge($request->kt_docs_repeater_basi,$request->kt_docs_repeater_basi_prj);
        } else {
            $resume->project_details = json_encode($request->kt_docs_repeater_basi_prj);
            $data_prj = $request->kt_docs_repeater_basi_prj;
        }
        
        $resume->course = $request->education_course;
        $resume->education_institute = $request->education_institute;
        $resume->education_duration = $request->education_duration;
        $resume->education_location = $request->education_location;
      
        $resume->designation = $request->position;
        if(is_array($request->kt_docs_repeater_certification) && is_array($request->kt_docs_repeater_cert)) {
            $resume->certifications = json_encode(array_merge($request->kt_docs_repeater_certification,$request->kt_docs_repeater_cert));
            $data_cert = array_merge($request->kt_docs_repeater_certification,$request->kt_docs_repeater_cert);
        } else {
            $resume->certifications = json_encode($request->kt_docs_repeater_cert);
            $data_cert = $request->kt_docs_repeater_cert;
        }
        if(is_array($request->kt_docs_repeater_education) && is_array($request->kt_docs_repeater_edu)) {
            $resume->education_details = json_encode(array_merge($request->kt_docs_repeater_education,$request->kt_docs_repeater_edu));
            $data_edu = array_merge($request->kt_docs_repeater_education,$request->kt_docs_repeater_edu);
        } else {
            $resume->education_details = json_encode($request->kt_docs_repeater_edu);
            $data_edu = $request->kt_docs_repeater_edu;
        }
        $res = $resume->save();
        if(is_array($request->kt_docs_repeater_certification)) {
            $certifications_count= array_filter($request->kt_docs_repeater_certification[0]);
        } else {
            $certifications_count= [];
        }
        if(is_array($request->kt_docs_repeater_basi)) {
            $kt_docs_repeater_basi_count= array_filter($request->kt_docs_repeater_basi[0]);
        } else {
            $kt_docs_repeater_basi_count= [];
        }
        if(is_array($request->kt_docs_repeater_basic)) {
            $kt_docs_repeater_basic_count= array_filter($request->kt_docs_repeater_basic[0]);
        } else {
            $kt_docs_repeater_basic_count= [];
        }
        if(is_array($request->kt_docs_repeater_education)) {
            $kt_docs_repeater_education_count= array_filter($request->kt_docs_repeater_education[0]);
        } else {
            $kt_docs_repeater_education_count= [];
        }
        
        $data = [
            'title' => 'Resume',
            'fullname' => $request->fullname,
            'talentid' => $resume->talentid,
            'position' => $resume->designation,
            'summary' => $resume->summary,
            'experience'=> $data_exp,
            'skills' => $request->skills,
            'projects' => $data_prj,
            'education' => $request->education_course,
            'education_institute' =>$request->education_institute,
            'education_duration' => $request->education_duration,
            'education_location' => $request->education_location,
            'phone' => $resume->phone,
            'email' => $resume->email,
            'certifications'=> $data_cert,
            'education_details'=> $data_edu,
            'certifications_count'=>$certifications_count,
            'kt_docs_repeater_basic_count'=>$kt_docs_repeater_basic_count,
            'kt_docs_repeater_basi_count'=>$kt_docs_repeater_basi_count,
            'kt_docs_repeater_education_count'=>$kt_docs_repeater_education_count
        ];
        $filename = $resume->resume;
        $pdf = PDF::loadView('pdfSample',compact('data'));
        $pdf->save(public_path($filename));
        if($res) {
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'file' => url($filename)
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Error'
              ], 200);
        }
    }


    public function destroy($id)
   {
       try{
        ResumeDetails::find($id)->delete();
        return redirect()->back()
        ->with('success', 'Deleted successfully!');
       } catch (\Exception $e){
           return response()->json('error', 200);
       }
       
   }
}
