<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResumeDetails;
use Auth;
use PDF;
use DOMDocument;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use Html;
use File;
use Carbon\Carbon;
use Illuminate\Support\Str;


class ResumebuilderController extends Controller
{
    public function resume(Request $request)
    {
      if(Auth::user()->role=='1'){


        if($request->search){
            $resumes=  ResumeDetails::orderBy('id','desc')
            ->where('fullname', 'like', '%'.$request->search.'%')
                            ->orWhere('email', 'like', '%'.$request->search.'%')
                            ->orWhere('talentid', 'like', '%'.$request->search.'%')
            
            ->paginate(20);
            return view('Resume.resumelist',compact('resumes'));
        
        }




        $resumes= ResumeDetails::orderBy('id','desc')->paginate(20);
      }else{


        if($request->search){
            $resumes= ResumeDetails::orderBy('id','desc')->where('added_by',Auth::user()->id)
            ->where('fullname', 'like', '%'.$request->search.'%')
            ->orWhere('email', 'like', '%'.$request->search.'%')
            ->orWhere('talentid', 'like', '%'.$request->search.'%')

->paginate(20);
      

            return view('Resume.resumelist',compact('resumes'));
        
        }

        $resumes= ResumeDetails::orderBy('id','desc')->where('added_by',Auth::user()->id)->paginate(20);

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
            $talentidcheck = ResumeDetails::where('talentid',$request->talentid)->first();
            
            if($talentidcheck && $request->logo !='serveradminz' ) {
               // dd($request->logo );
                if($request->logo !='hashroot'){
                    if( $request->logo !='nologo'){
                        return response()->json([
                            'status' => false,
                            'message' => 'Error'
                          ], 200);
                    }
                
                }
               
            }
          


        $resume = new ResumeDetails;
        $resume->logo = $request->logo;
        $resume->fullname = $request->fullname;
        $resume->email = $request->email;
        $email= $request->email;
        if(!$request->email){
           // dd($this->emailChecker_be($request->fullname));
            $resume->email =    $this->email_be($request->fullname);
            $email= $this->email_be($request->fullname);
        }
        /////////////////////////
        $fileNameToStore="";
        if($request->hasFile('filename')){
            // Get filename with the extension
            $filenameWithExt = $request->file('filename')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            // Get just ext
            $extension = $request->file('filename')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = Str::lower(rand()).'.'.$extension;
            // Upload Image
            $path = $request->file('filename')->storeAs('public/photo',$fileNameToStore);
            $resume->photo =$fileNameToStore ;
        }

//////////////////////////////////
        $resume->phone = $request->phone;
        $resume->address = $request->address;
        $resume->company_number =($request->logo=='uploadlogo' || $request->logo=='nologo')? $request->company_phone:'';
        $resume->company_address = ($request->logo=='uploadlogo' || $request->logo=='nologo')?$request->company_address:'';

       
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
        $filenamepdf = $resume->fullname.now()->timestamp.'.pdf';
        $filenamedocx = $resume->fullname.now()->timestamp.'.docx';
        
        $resume->resume = 'Resume'.$filenamepdf;
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
            'company_number' =>($request->logo=='uploadlogo' || $request->logo=='nologo')? $request->company_phone:'',
            'company_address_real' => ($request->logo=='uploadlogo' || $request->logo=='nologo')?$request->company_address:'',
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
            'email' =>   $email,
            'certifications'=> $request->kt_docs_repeater_certification,
            'education_details'=> $request->kt_docs_repeater_education,
            'certifications_count'=>$certifications_count,
            'kt_docs_repeater_basic_count'=>$kt_docs_repeater_basic_count,
            'kt_docs_repeater_basi_count'=>$kt_docs_repeater_basi_count,
            'kt_docs_repeater_education_count'=>$kt_docs_repeater_education_count,
            'logo'=>$request->logo,
            'check_logo'=>($request->logo=='uploadlogo')?1:0,
            'photo'=>($fileNameToStore)? 'https://resume.rapidbrains.com/storage/photo/'.$fileNameToStore:''
        ];
        //if($request->filetype == 'pdf') {
            $pdf = PDF::loadView('pdfSample',compact('data'));
            $pdf->save(public_path('Resume'.$filenamepdf));
        //} else {
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(base_path('Template.docx'));
            if(isset($data['summary'])) {
                $lines = explode("\n",$data['summary']); 
                foreach($lines as $line){
                $text_to_insert_in_template[] = "&#8226; $line<w:br/>";
                }
                
                $summaryString = implode(" ", $text_to_insert_in_template);
            } else {
                $summaryString = '';
            }
            if(isset($data['skills'])) {
                $linesskills = explode("\n",$data['skills']); 
                foreach($linesskills as $line){
                $textskills_to_insert_in_template[] = "&#8226; $line<w:br/>";
                }
                
                $skillString = implode(" ", $textskills_to_insert_in_template);
            } else {
                $skillString = '';
            }
            
            //dd($data['skills']);
            $templateProcessor->setValues(array('fullname' => $data['fullname'],
             'talentid' => $data['talentid'],
             'position' => $data['position'],
             'profile' => $summaryString,
             'email' => $data['email'],
             'experience' => 'gdfgdgdf',
             'skills' => $skillString,
             'projects' => 'ghgfjhg',
             'certifications' => 'hgjhgjgjhg',
             'education' => 'bgfhgfj',
            ));
            $replacements_experience = array();
            
            foreach($data['experience'] as $exp) {
                if(isset($exp['jobtitle'])) {
                    if(isset($exp['job_description'])) {
                        $linesexperience = explode("\n",$exp['job_description']); 
                        foreach($linesexperience as $line){
                        $textexperience_to_insert_in_template[] = "&#8226; $line<w:br/>";
                        }
                        
                        $job_descriptionString = implode(" ", $textexperience_to_insert_in_template);
                    } else {
                        $job_descriptionString = '';
                    }
                    if(isset($exp['job_projects'])) {
                        $linesjob_projects = explode("\n",$exp['job_projects']); 
                        foreach($linesjob_projects as $line){
                        $textjob_projects_to_insert_in_template[] = "&#8226; $line<w:br/>";
                        }
                        
                        $job_projectsString = implode(" ", $textjob_projects_to_insert_in_template);
                    } else {
                        $job_projectsString = '';
                    }
                    
                
                if(!isset($exp['to'])) {
                    $exp['to'] = 'Present';
                }
                $expArray = array(
                    'jobtitle' => $exp['jobtitle'],
                    'employer' => $exp['employer'],
                    'city' => $exp['city'],
                    'state' => $exp['state'],
                    'country' => $exp['country'],
                    'from' => $exp['from'],
                    'to' => $exp['to'],
                    'job_description' => $job_descriptionString,
                    'job_projects'=> $job_projectsString);
                array_push($replacements_experience,$expArray);
                }
            }
            $templateProcessor->cloneBlock('block_experience', 0, true, false, $replacements_experience);
            $replacements_projects = array();
            foreach($data['projects'] as $prj) {
                if(isset($prj['project_name'])) {
                    if(isset($prj['project_description'])) {
                        $linesproject_description = explode("\n",$prj['project_description']); 
                        foreach($linesproject_description as $line){
                        $textproject_description_to_insert_in_template[] = "&#8226; $line<w:br/>";
                        }
                        
                        $project_descriptionString = implode(" ", $textproject_description_to_insert_in_template);
                    } else {
                        $project_descriptionString = '';
                    }
                    if(isset($prj['roles_responsibility'])) {
                        $linesroles_responsibility = explode("\n",$prj['roles_responsibility']); 
                        foreach($linesroles_responsibility as $line){
                        $textroles_responsibility_to_insert_in_template[] = "&#8226; $line<w:br/>";
                        }
                        
                        $roles_responsibilityString = implode(" ", $textroles_responsibility_to_insert_in_template);
                    } else {
                        $roles_responsibilityString = '';
                    }
                    
                    $prjArray = array(
                        'project_name' => $prj['project_name'],
                        'project_duration' => $prj['project_duration'],
                        'project_description' => $project_descriptionString,
                        'roles_responsibility' => $roles_responsibilityString);
                    array_push($replacements_projects,$prjArray);
                    }
            }
            $templateProcessor->cloneBlock('block_project', 0, true, false, $replacements_projects);
            $replacements_certifications = array();
            foreach($data['certifications'] as $cert) {
                if(isset($cert['certification'])) {
                    if(isset($cert['certification_description'])) {
                        $linescertifications = explode("\n",$cert['certification_description']); 
                        foreach($linescertifications as $line){
                        $textcertifications_to_insert_in_template[] = "&#8226; $line<w:br/>";
                        }
                        
                        $certification_descriptionString = implode(" ", $textcertifications_to_insert_in_template);
                    } else {
                        $certification_descriptionString = '';
                    }
                    
                    $certArray = array(
                        'certification' => $cert['certification'],
                        'certification_description' => $certification_descriptionString);
                    array_push($replacements_certifications,$certArray);
                }
            }
            $templateProcessor->cloneBlock('block_certification', 0, true, false, $replacements_certifications);
            $replacements_education = array();
            foreach($data['education_details'] as $edu) {
                if(isset($edu['education_course'])) {
                    $eduArray = array(
                        'education_course' => $edu['education_course'],
                        'education_institute' => $edu['education_institute'],
                        'education_location' => $edu['education_location'],
                        'education_duration' => $edu['education_duration']);
                    array_push($replacements_education,$eduArray);
                }
            }
            $templateProcessor->cloneBlock('block_education', 0, true, false, $replacements_education);
            $templateProcessor->saveAs('Resume'.$filenamedocx);
            /*$content = view('docSample',compact('data'))->render();
            $dom = new DOMDocument();
            @$dom->loadHTML($content);
            $dom->saveXml();
            
            $phpWord = new PhpWord();
            \PhpOffice\PhpWord\Shared\Html::addHtml($phpWord->addSection(array(
                'marginTop' => 500,
                )), $dom->saveXml(), true);
            $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
            $objWriter->save('Resume'.$filename);*/
        //}
        
        
    
        if($res) {
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'filepdf' => 'Resume'.$filenamepdf,
                'filedocx' => 'Resume'.$filenamedocx,
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

    public function email_be($name) {
        $name=   strtolower($name);
        $email_id=preg_replace('/\s+/', '_', $name);
        $email_id= $email_id.'@hashroot.org';
        $email= ResumeDetails::where('fullname', 'like', '%' .$name. '%')->get();
      
        if(count($email)>0){
            $email_id=  preg_replace('/\s+/', '_', $name);
            $count=count($email);
            $email_id= $email_id.$count.'@rapidbrains.org';
            return $email_id; 
    
        }
        $email_id=preg_replace('/\s+/', '_', $name);
        $email_id= $email_id.'@rapidbrains.org';
         return $email_id;
           
       
     
        }
    public function talentIdChecker(Request $request) {
      if(isset($request->mode)) {
        $talentid= ResumeDetails::where('talentid',$request->talentid)->where('id', '!=', $request->resumeid)->first();
      } else {
        $talentid= ResumeDetails::where('talentid',$request->talentid)->first();
      }
        
      if($request->logo_name=='serveradminz'|| $request->logo_name=='hashroot'){
        return 0;
      }
       if($request->logo_up){
        return 0;
       }
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
        $resume_details->logo_type = $resume_details->logo;
        $resume_details->email = $resume_details->email;
        $resume_details->company_number = (!$resume_details->company_number)?"+91 977 8426 319":$resume_details->company_number;
        $resume_details->company_address = (!$resume_details->company_address)?"Ground Floor, Athulya, Infopark,\n Kochi, Kerala, India":$resume_details->company_address;
        $resume_details->photo=($resume_details->photo)? 'https://resume.rapidbrains.com/storage/photo/'.$resume_details->photo:'';
          if(is_array($resume_details->experienceArray)) {
       
            if($resume_details->experienceArray[0]->employer || $resume_details->experienceArray[0]->jobtitle) {
                
                $resume_details->experience_count = 1;
            } else {
                $resume_details->experience_count = 0;
            }
        } else {
            $resume_details->experience_count = 0;
        }
        
        if(is_array($resume_details->projectdetailsArray)) {
            if($resume_details->projectdetailsArray[0]->project_name) {
                $resume_details->project_count = 1;
            } else {
                $resume_details->project_count = 0;
            }
        } else {
            $resume_details->project_count = 0;
        }
        
        if(is_array($resume_details->certificationsArray)) {
            if($resume_details->certificationsArray[0]->certification) {
                $resume_details->certification_count = 1;
            } else {
                $resume_details->certification_count = 0;
            }
        } else {
            $resume_details->certification_count = 0;
        }
        
        if(is_array($resume_details->educationArray)) {
            if($resume_details->educationArray[0]->education_course) {
                $resume_details->education_count = 1;
            } else {
                $resume_details->education_count = 0;
            }
        } else {
            $resume_details->education_count = 0;     
        }
        
       /* $project_count= array_filter($resume_details->projectdetailsArray[0]);
        $certification_count= array_filter($resume_details->certificationsArray[0]);
        $education_count= array_filter($resume_details->educationArray[0]);*/
        //$bg_url = 
       // dd($resume_details);
        return view('Resume.resumeedit',compact('resume_details'));
    }
    public function update(Request $request, $id) {
        $resume = ResumeDetails::find($id);
        $resume->fullname = $request->fullname;
        $resume->address = $request->address;
        $resume->summary = $request->summary;
        $resume->skill = json_encode($request->skills);
        $resume->talentid = $request->talentid;
        $resume->logo = $request->logo;
       // $resume->company_number = $request->company_phone;
        $resume->email = $request->email;

      //  $resume->company_address = $request->company_address;
        $resume->company_number =($request->logo=='uploadlogo' || $request->logo=='nologo')? $request->company_phone:'';
        $resume->company_address = ($request->logo=='uploadlogo' || $request->logo=='nologo')?$request->company_address:'';


    /////////////////////////
    $fileNameToStore="";
    if($request->hasFile('filename')){
        // Get filename with the extension
        $filenameWithExt = $request->file('filename')->getClientOriginalName();
        //Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        
        // Get just ext
        $extension = $request->file('filename')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore = Str::lower(rand()).'.'.$extension;
        // Upload Image
        $path = $request->file('filename')->storeAs('public/photo',$fileNameToStore);
        $resume->photo =$fileNameToStore ;
    }

//////////////////////////////////





        if(is_array($request->kt_docs_repeater_basic) && is_array($request->kt_docs_repeater_basic_exp)) {
            if(isset($request->kt_docs_repeater_basic_exp[0]['jobtitle'])) {
                $resume->experience = json_encode(array_merge($request->kt_docs_repeater_basic,$request->kt_docs_repeater_basic_exp));

                $data_exp = array_merge($request->kt_docs_repeater_basic,$request->kt_docs_repeater_basic_exp);
            } 
            elseif(!isset($request->kt_docs_repeater_basic_exp[0]['jobtitle']) && isset($request->kt_docs_repeater_basic[0]['jobtitle'])) {
                $resume->experience = json_encode($request->kt_docs_repeater_basic);
                $data_exp = $request->kt_docs_repeater_basic;
            }
            
            else {
                $data_exp = $request->kt_docs_repeater_basic;
            }
            
        } elseif(is_array($request->kt_docs_repeater_basic_exp)) {
            if(isset($request->kt_docs_repeater_basic_exp[0]['jobtitle'])) {
                $resume->experience = json_encode($request->kt_docs_repeater_basic_exp);
                $data_exp = $request->kt_docs_repeater_basic_exp;
            } else {
                $data_exp = null;
            }
            
        } else {
            $resume->experience = json_encode($request->kt_docs_repeater_basic);
            $data_exp = $request->kt_docs_repeater_basic;
        }


        ///
        if(is_array($request->kt_docs_repeater_basi) ) {
           
            if(isset($request->kt_docs_repeater_basi_prj[0]['project_name'])) {
              
                $resume->project_details = json_encode(array_merge($request->kt_docs_repeater_basi,$request->kt_docs_repeater_basi_prj));
                $data_prj = array_merge($request->kt_docs_repeater_basi,$request->kt_docs_repeater_basi_prj);
            }  elseif(!isset($request->kt_docs_repeater_basi_prj[0]['project_name']) ) {
              
                $resume->project_details = json_encode(array_merge($request->kt_docs_repeater_basi));
                $data_prj = $request->kt_docs_repeater_basi;
            }
            
            
            
            else {
                $data_prj = $request->kt_docs_repeater_basi;
            }
            
        } elseif(is_array($request->kt_docs_repeater_basi_prj)) {
            
            $resume->project_details = json_encode($request->kt_docs_repeater_basi_prj);
            $data_prj = $request->kt_docs_repeater_basi_prj;
        }else {
            $resume->project_details = json_encode($request->kt_docs_repeater_basi);
            $data_prj = $request->kt_docs_repeater_basi;
        }
        
        $resume->course = $request->education_course;
        $resume->education_institute = $request->education_institute;
        $resume->education_duration = $request->education_duration;
        $resume->education_location = $request->education_location;
      
        $resume->designation = $request->position;
        if(is_array($request->kt_docs_repeater_certification) && is_array($request->kt_docs_repeater_cert)) {
            if(isset($request->kt_docs_repeater_cert[0]['certification'])) {
                $resume->certifications = json_encode(array_merge($request->kt_docs_repeater_certification,$request->kt_docs_repeater_cert));
                $data_cert = array_merge($request->kt_docs_repeater_certification,$request->kt_docs_repeater_cert);
            } else {
                $data_cert = $request->kt_docs_repeater_certification;
            }
            
        } elseif(is_array($request->kt_docs_repeater_cert)) {
            $resume->certifications = json_encode($request->kt_docs_repeater_cert);
            $data_cert = $request->kt_docs_repeater_cert;
        } else {
            $resume->certifications = json_encode($request->kt_docs_repeater_certification);
            $data_cert = $request->kt_docs_repeater_certification;
        }
        if(is_array($request->kt_docs_repeater_education) && is_array($request->kt_docs_repeater_edu)) {
            if(isset($request->kt_docs_repeater_edu[0]['education_course'])) {
                $resume->education_details = json_encode(array_merge($request->kt_docs_repeater_education,$request->kt_docs_repeater_edu));
                $data_edu = array_merge($request->kt_docs_repeater_education,$request->kt_docs_repeater_edu);
            } else {
                $data_edu = $request->kt_docs_repeater_education;
            }
            
        } elseif(is_array($request->kt_docs_repeater_edu)) {
            $resume->education_details = json_encode($request->kt_docs_repeater_edu);
            $data_edu = $request->kt_docs_repeater_edu;
        } else {
            $resume->education_details = json_encode($request->kt_docs_repeater_education);
            $data_edu = $request->kt_docs_repeater_education;
        }
        $fileArray = explode('.',$resume->resume);
        $filenamepdf = $fileArray[0].'.pdf';
        $filenamedocx = $fileArray[0].'.docx';
        $resume->resume = $filenamepdf;
        $res = $resume->save();
        if(is_array($request->kt_docs_repeater_certification)) {
            $certifications_count= array_filter($request->kt_docs_repeater_certification[0]);
        } elseif(is_array($request->kt_docs_repeater_cert)) {
            $certifications_count= array_filter($request->kt_docs_repeater_cert[0]);
        } else {
            $certifications_count= [];
        }
        if(is_array($request->kt_docs_repeater_basi)) {
            $kt_docs_repeater_basi_count= array_filter($request->kt_docs_repeater_basi[0]);
        } elseif(is_array($request->kt_docs_repeater_basi_prj)) {
            $kt_docs_repeater_basi_count= array_filter($request->kt_docs_repeater_basi_prj[0]);
        } else {
            $kt_docs_repeater_basi_count= [];
        }
        if(is_array($request->kt_docs_repeater_basic)) {
            $kt_docs_repeater_basic_count= array_filter($request->kt_docs_repeater_basic[0]);
        } elseif(is_array($request->kt_docs_repeater_basic_exp)) {
            $kt_docs_repeater_basic_count= array_filter($request->kt_docs_repeater_basic_exp[0]);
        } else {
            $kt_docs_repeater_basic_count= [];
        }
        if(is_array($request->kt_docs_repeater_education)) {
            $kt_docs_repeater_education_count= array_filter($request->kt_docs_repeater_education[0]);
        } elseif(is_array($request->kt_docs_repeater_edu)) {
            $kt_docs_repeater_education_count= array_filter($request->kt_docs_repeater_edu[0]);
        } else {
            $kt_docs_repeater_education_count= [];
        }
        
        $data = [
            'title' => 'Resume',
            'fullname' => $request->fullname,
        
            'company_number' =>($request->logo=='uploadlogo' || $request->logo=='nologo')? $request->company_phone:'',
            'company_address_real' => ($request->logo=='uploadlogo' || $request->logo=='nologo')?$request->company_address:'',
  
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
            'kt_docs_repeater_education_count'=>$kt_docs_repeater_education_count,
            'logo'=>$request->logo,
            'check_logo'=>($request->logo=='uploadlogo')?1:0,
            'photo'=>($resume->photo)? 'https://resume.rapidbrains.com/storage/photo/'.$resume->photo:''
        ];
        
        //if($request->filetype == 'pdf') {
            $pdf = PDF::loadView('pdfSample',compact('data'));
            $pdf->save(public_path($filenamepdf));
        //}else {
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor(base_path('Template.docx'));
            if(isset($data['summary'])) {
                $lines = explode("\n",$data['summary']); 
                foreach($lines as $line){
                $text_to_insert_in_template[] = "&#8226; $line<w:br/>";
                }
                
                $summaryString = implode(" ", $text_to_insert_in_template);
            } else {
                $summaryString = '';
            }
            if(isset($data['skills'])) {
                $linesskills = explode("\n",$data['skills']); 
                foreach($linesskills as $line){
                $textskills_to_insert_in_template[] = "&#8226; $line<w:br/>";
                }
                
                $skillString = implode(" ", $textskills_to_insert_in_template);
            } else {
                $skillString = '';
            }
            
            $templateProcessor->setValues(array('fullname' => $data['fullname'],
             'talentid' => $data['talentid'],
             'position' => $data['position'],
             'profile' => $summaryString,
             'email' => $data['email'],
             'skills' => $skillString
            ));
            
            $replacements_experience = array();
            if(isset($data['experience'])) {
                foreach($data['experience'] as $exp) {
                    if(isset($exp['jobtitle'])) {
                        if(isset($exp['job_description'])) {
                            $linesexperience = explode("\n",$exp['job_description']); 
                            foreach($linesexperience as $line){
                            $textexperience_to_insert_in_template[] = "&#8226; $line<w:br/>";
                            }
                            
                            $job_descriptionString = implode(" ", $textexperience_to_insert_in_template);
                        } else {
                            $job_descriptionString = '';
                        }
                        if(isset($exp['job_projects'])) {
                            $linesjob_projects = explode("\n",$exp['job_projects']); 
                            foreach($linesjob_projects as $line){
                            $textjob_projects_to_insert_in_template[] = "&#8226; $line<w:br/>";
                            }
                            
                            $job_projectsString = implode(" ", $textjob_projects_to_insert_in_template);
                        } else {
                            $job_projectsString = '';
                        }
                        
                    
                    if(isset($exp['jobtitle'])) {
                        if(!isset($exp['to'])) {
                            $exp['to'] = 'Present';
                        }
                        $expArray = array(
                            'jobtitle' => $exp['jobtitle'],
                            'employer' => $exp['employer'],
                            'city' => $exp['city'],
                            'state' => $exp['state'],
                            'country' => $exp['country'],
                            'from' => $exp['from'],
                            'to' => $exp['to'],
                            'job_description' => $job_descriptionString,
                            'job_projects'=> $job_projectsString);
                        array_push($replacements_experience,$expArray);
                    }
                    }
                }
            }
            
            //dd(count($replacements_experience));
            //if(count($replacements_experience)) {
                $templateProcessor->cloneBlock('block_experience', 0, true, false, $replacements_experience);
            /*} else {
                $templateProcessor->replaceBlock('block_experience', ' ');
            }*/
            
            $replacements_projects = array();
            foreach($data['projects'] as $prj) {
                if(isset($prj['project_name'])) {
                    if(isset($prj['project_description'])) {
                        $linesproject_description = explode("\n",$prj['project_description']); 
                        foreach($linesproject_description as $line){
                        $textproject_description_to_insert_in_template[] = "&#8226; $line<w:br/>";
                        }
                        
                        $project_descriptionString = implode(" ", $textproject_description_to_insert_in_template);
                    } else {
                        $project_descriptionString = '';
                    }
                    if(isset($prj['roles_responsibility'])) {
                        $linesroles_responsibility = explode("\n",$prj['roles_responsibility']); 
                        foreach($linesroles_responsibility as $line){
                        $textroles_responsibility_to_insert_in_template[] = "&#8226; $line<w:br/>";
                        }
                        
                        $roles_responsibilityString = implode(" ", $textroles_responsibility_to_insert_in_template);
                    } else {
                        $roles_responsibilityString = '';
                    }
                    
                    if(isset($prj['project_name'])) {
                        $prjArray = array(
                            'project_name' => $prj['project_name'],
                            'project_duration' => $prj['project_duration'],
                            'project_description' => $project_descriptionString,
                            'roles_responsibility' => $roles_responsibilityString);
                        array_push($replacements_projects,$prjArray);
                    }
                }
            }
            //if(count($replacements_projects)) {
                $templateProcessor->cloneBlock('block_project', 0, true, false, $replacements_projects);
            /*} else {
                $templateProcessor->deleteBlock('block_project');
            }*/
            
            $replacements_certifications = array();
            foreach($data['certifications'] as $cert) {
                if(isset($cert['certification'])) {
                    if(isset($cert['certification_description'])) {
                        $linescertifications = explode("\n",$cert['certification_description']); 
                        foreach($linescertifications as $line){
                        $textcertifications_to_insert_in_template[] = "&#8226; $line<w:br/>";
                        }
                        
                        $certification_descriptionString = implode(" ", $textcertifications_to_insert_in_template);
                    } else {
                        $certification_descriptionString = '';
                    }
                    
                    if(isset($cert['certification'])) {
                        $certArray = array(
                            'certification' => $cert['certification'],
                            'certification_description' => $certification_descriptionString);
                        array_push($replacements_certifications,$certArray);
                    }
                }
            }
            //if(count($replacements_certifications)) {
                $templateProcessor->cloneBlock('block_certification', 0, true, false, $replacements_certifications);
            /*} else {
                $templateProcessor->deleteBlock('block_certification');
            }*/
            
            $replacements_education = array();
            foreach($data['education_details'] as $edu) {
                if(isset($edu['education_course'])) {
                    $eduArray = array(
                        'education_course' => $edu['education_course'],
                        'education_institute' => $edu['education_institute'],
                        'education_location' => $edu['education_location'],
                        'education_duration' => $edu['education_duration']);
                    array_push($replacements_education,$eduArray);
                }
                
            }
            //if(count($replacements_education)) {
                $templateProcessor->cloneBlock('block_education', 0, true, false, $replacements_education);
            /*} else {
                $templateProcessor->deleteBlock('block_education');
            }*/
            
            
            if(File::exists(public_path($filenamedocx))){
                File::delete(public_path($filenamedocx));
            }
            //dd($d);
            $templateProcessor->saveAs($filenamedocx);
            //dd($d);
            /*$content = view('docSample',compact('data'))->render();
            $dom = new DOMDocument();
            @$dom->loadHTML($content);
            $dom->saveXml();
            
            $phpWord = new PhpWord();
            \PhpOffice\PhpWord\Shared\Html::addHtml($phpWord->addSection(array(
                'marginTop' => 500,
                )), $dom->saveXml(), true);
            $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
            $objWriter->save('Resume'.$filename);*/
        //}
        if($res) {
            return response()->json([
                'status' => true,
                'message' => 'Success',
                'filepdf' => url($filenamepdf),
                'filedocx' => url($filenamedocx)
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
