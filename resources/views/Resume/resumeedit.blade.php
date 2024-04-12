@extends('layouts.layout')
@section('content')
<style>

select {
-webkit-appearance: listbox !important;
}
	</style>
<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Multi-steps-->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
					<div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center" style="background-image: url({{ URL::asset('assets/media/misc/inner-image.jpg')}})">
						<!--begin::Header-->
						<div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
							<!--begin::Logo-->
							<a href="#">
								<img alt="Logo" src="{{asset('RapidBrains-logo.svg')}}" class="h-50px" />
							</a>
							<!--end::Logo-->
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="d-flex flex-row-fluid justify-content-center p-10">
							<!--begin::Nav-->
							<div class="stepper-nav">
								<!--begin::Step 1-->
								<div class="stepper-item current" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon rounded-3">
											<i class="stepper-check fas fa-check"></i>
											<span class="stepper-number">1</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2" style="color:#343F52;">Profile & Skills</h3>
											<div class="stepper-desc fw-normal" style="color:#333E48;">Add your profile and skills</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon rounded-3">
											<i class="stepper-check fas fa-check"></i>
											<span class="stepper-number">2</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2" style="color:#343F52;">Experiences</h3>
											<div class="stepper-desc fw-normal" style="color:#333E48;">Add your experience here</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<div class="stepper-line h-40px"></div>
									<!--end::Line-->
								</div>
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="stepper-item" data-kt-stepper-element="nav">
									<!--begin::Wrapper-->
									<div class="stepper-wrapper">
										<!--begin::Icon-->
										<div class="stepper-icon">
											<i class="stepper-check fas fa-check"></i>
											<span class="stepper-number">3</span>
										</div>
										<!--end::Icon-->
										<!--begin::Label-->
										<div class="stepper-label">
											<h3 class="stepper-title fs-2" style="color:#343F52;">Projects & Education</h3>
											<div class="stepper-desc fw-normal" style="color:#333E48;">Provide your projects and education info</div>
										</div>
										<!--end::Label-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Line-->
									<!--end::Line-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								
								<!--end::Step 4-->
								<!--begin::Step 5-->
								
								<!--end::Step 5-->
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="d-flex flex-center flex-wrap px-5 py-10">
							<!--begin::Links-->
						
							<!--end::Links-->
						</div>
						<!--end::Footer-->
					</div>
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-650px w-xl-700px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form" enctype="multipart/form-data">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold d-flex align-items-center text-dark">Profile & Skills<!--end::Title-->
											<!--begin::Notice--><!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Row-->
											<div class="row">
											<input type="hidden"  name="hidden_talent_id" id="hidden_talent_id"/>
											<input type="hidden"  name="email" id="email" />
											<input type="hidden"  name="resumeid" id="resumeid" value="{{$resume_details->id}}" />
											<input type="hidden"  name="url" id="url" value="{{$resume_details->url}}" />

												<!--begin::Col-->
												<div class="col-lg-6">
												<label class="form-label">Select:</label>
												<select class="form-control mb-2 mb-md-0" name="logo" id="logo" onchange="logoChange()">
													<option value="rapidbrains">RapidBrains</option>
													@if($resume_details->logo_type=='hashroot')
													<option value="hashroot" selected>HashRoot</option>
													@else
													<option value="hashroot">HashRoot</option>

													@endif
													@if($resume_details->logo_type=='uploadlogo')
													<option value="uploadlogo"  selected>Upload Photo</option>
													@else
													<option value="uploadlogo">Upload Photo</option>

													@endif
													@if($resume_details->logo_type=='serveradminz')
													<option value="serveradminz"  selected>ServerAdminz</option>
													@else
													<option value="serveradminz">ServerAdminz</option>

													@endif
													
													@if($resume_details->logo_type=='nologo')
													<option value="nologo" selected>No logo</option>
													@else
													<option value="nologo" >No logo</option>

													@endif
												</select>
												</div>
												<div class="col-lg-6">
												<label class="form-label">Full Name:</label>
												<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter full name" name="fullname" value="{{$resume_details->fullname}}"/>
												</div>

@if($resume_details->logo_type=='uploadlogo')
												<div class="col-lg-12" id="myFile-logo1" style="display:block;" >
@else
<div class="col-lg-12" id="myFile-logo1" style="display:none;" >


@endif

												<div style="height: 10px;"></div>
												<label class="form-label">Upload Photo:</label><br>
												
												<input type="file" id="myFile" name="filename">
												<a href="{{$resume_details->photo}}">{{$resume_details->photo}}</a>
											</div>

												<div style="height: 10px;"></div>
												<div class="col-lg-6" id="email1">
												<label class="form-label">Email:</label>
												<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter Email" name="email" value="{{$resume_details->email}}"/>
											   </div>


											   @if($resume_details->logo_type=='uploadlogo' || $resume_details->logo_type=='nologo')
												<div class="col-lg-6" id="mobile1" style="display:block;" >

@else
<div class="col-lg-6" id="mobile1" style="display:none;">


@endif
												<label class="form-label">Mobile Number:</label>
												<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter Mobile Number" name="company_phone"  value="{{$resume_details->company_number}}"/>
												</div>
												<div style="height: 10px;"></div>

												<div style="height: 10px;"></div>

												@if($resume_details->logo_type=='uploadlogo' || $resume_details->logo_type=='nologo')
												<div class="col-lg-12" id="address1" style="display:block;" >
@else

<div class="col-lg-12" id="address1"  style="display:none;">
@endif
											
												<label class="form-label">Address:</label>
												<textarea rows="6" class="form-control mb-2 mb-md-0 " placeholder="Enter Address" name="company_address" >{{$resume_details->company_address}}</textarea>
												</div>

												<!--end::Col-->
												<!--begin::Col-->
												<div style="height: 10px;"></div>
												<div class="col-lg-6">
											
													
												@if($resume_details->logo_type!='uploadlogo')			<label class="form-label" id="LabelID">		Talent ID:
													</label>	@else
													<label class="form-label" id="LabelID">	Linkedin Url:	</label>
											@endif
											
										
												<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter Talentid"  id="talentid" name="talentid" value="{{$resume_details->talentid}}" onblur="javascript:talentIdCheck(this);"/>
												<label id="email-error" class="email" for="email" style="display:none;">Talent ID already exist</label>
											   </div>
												<div class="col-lg-6">
												<label class="form-label">Position:</label>
												<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter Position" name="position" value="{{$resume_details->designation}}"/>
												</div>
												<div style="height: 10px;"></div>
											
												<div style="height: 10px;"></div>
												<div class="col-lg-12">
												<label class="form-label">Summary:</label>
												<textarea rows="4" class="form-control mb-2 mb-md-0" placeholder="Enter summary" name="summary" >{!!$resume_details->summary!!}</textarea>
												</div>
												<div style="height: 10px;"></div>
												<div class="col-lg-12">
												<label class="form-label">Skills:</label>
												<textarea rows="4" class="form-control mb-2 mb-md-0 " placeholder="Enter skills" name="skills" >{!!$resume_details->skillArray!!}</textarea>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 1-->
								<!--begin::Step 2-->
								
								<!--end::Step 2-->
								<!--begin::Step 3-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-12">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">Experience</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<!--end::Notice-->
										</div>
										@if($resume_details->experience_count)																	
<div id="kt_docs_repeater_basic" style="margin-top: -40px;margin-bottom: 30px;">
    <!--begin::Form group-->
	<div class="form-group">
        <div data-repeater-list="kt_docs_repeater_basic" >
	@foreach($resume_details->experienceArray as $exp)	
    
            <div data-repeater-item><br><br>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-label">Employer:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="employer" placeholder="Enter Employer name" value="{{$exp->employer}}" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Role or Job title:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="jobtitle" placeholder="Enter Role or Job title" value="{{$exp->jobtitle}}" />
                    </div>
                    
                </div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
					<div class="col-md-6">
                        <label class="form-label">From:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="from" placeholder="Enter from" value="{{$exp->from}}" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">To:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="to" placeholder="Enter to" value="{{$exp->to}}" />
                    </div>
				
				</div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
					<div class="col-md-4">
                        <label class="form-label">City:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="city" placeholder="Enter city name" value="{{$exp->city}}"/>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">State:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="state" placeholder="Enter state" value="{{$exp->state}}" />
                    </div>
					<div class="col-md-4">
                        <label class="form-label">Country:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="country" placeholder="Enter country" value="{{$exp->country}}" />
                    </div>
				</div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
				<div class="col-lg-12">
												<label class="form-label">Job description:</label>
												<textarea rows="4" class="form-control mb-2 mb-md-0 " placeholder="Enter job description" name="job_description" >{!!$exp->job_description!!}</textarea>
												</div>
				</div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
				<div class="col-lg-10">
												<label class="form-label">Projects:</label>
												<textarea rows="4" class="form-control mb-2 mb-md-0 " placeholder="Enter project details" name="job_projects" >{!!$exp->job_projects!!}</textarea>
												</div>
				</div>
				
				<div class="col-md-2">
                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                            <i class="la la-trash-o"></i>Delete
                        </a>
                    </div>
            </div>
        
	@endforeach
	</div>
    </div>
    <!--end::Form group-->

    <!--begin::Form group-->
   
    <!--end::Form group-->
</div>
@endif
<div id="kt_docs_repeater_basic_exp" style="margin-top: -20px;">
    <!--begin::Form group-->
    <div class="form-group">
        <div data-repeater-list="kt_docs_repeater_basic_exp">
            <div data-repeater-item><br><br>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-label">Employer:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="employer" placeholder="Enter Employer name" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Role or Job title:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="jobtitle" placeholder="Enter Role or Job title" />
                    </div>
                    
                </div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
					<div class="col-md-6">
                        <label class="form-label">From:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="from" placeholder="From" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">To:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="to" placeholder="To" />
                    </div>
				
				</div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
					<div class="col-md-4">
                        <label class="form-label">City:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="city" placeholder="Enter city name" />
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">State:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="state" placeholder="Enter state" />
                    </div>
					<div class="col-md-4">
                        <label class="form-label">Country:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="country" placeholder="Enter country" />
                    </div>
				</div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
				<div class="col-lg-12">
												<label class="form-label">Job description:</label>
												<textarea rows="4" class="form-control mb-2 mb-md-0 " placeholder="Enter job description" name="job_description" ></textarea>
												</div>
				</div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
				<div class="col-lg-10">
												<label class="form-label">Projects:</label>
												<textarea rows="4" class="form-control mb-2 mb-md-0 " placeholder="Enter project details" name="job_projects" ></textarea>
												</div>
				</div>
				
				<div class="col-md-2">
                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                            <i class="la la-trash-o"></i>Delete
                        </a>
                    </div>
            </div>
        </div>
    </div>
    <!--end::Form group-->

    <!--begin::Form group-->
    <div class="form-group mt-5">
        <a href="javascript:;" data-repeater-create class="btn btn-light-primary" onclick="reinitialize();">
            <i class="la la-plus"></i>Add
        </a>
    </div>
    <!--end::Form group-->
</div>

<!--end::Repeater-->
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 3-->
								<!--begin::Step 4-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">Projects</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<!--end::Notice-->
										</div>
										@if($resume_details->project_count)
										<div id="kt_docs_repeater_basi" style="margin-top: -56px;margin-bottom: 30px;">
										<div class="form-group">
        <div data-repeater-list="kt_docs_repeater_basi">
										@foreach($resume_details->projectdetailsArray as $prj)
    <!--begin::Form group-->
    
            <div data-repeater-item><br><br>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-label">Project Name:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="project_name" placeholder="Enter full name" value="{{$prj->project_name}}"/>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Duration:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="project_duration" placeholder="Enter project duration" value="{{$prj->project_duration}}" />
                    </div>
                    
                </div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
				<div class="col-lg-10">
												<label class="form-label">Description:</label>
												<textarea  rows="4"class="form-control mb-2 mb-md-0 " placeholder="Enter project description" name="project_description" >{!!$prj->project_description!!}</textarea>
												</div>
				</div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
				<div class="col-lg-10">
												<label class="form-label">Roles & Responsibilities:</label>
												<textarea  rows="4"class="form-control mb-2 mb-md-0 " placeholder="Enter Roles & Responsibilities" name="roles_responsibility" >{!!@$prj->roles_responsibility!!}</textarea>
												</div>
												<div class="col-md-2">
                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                            <i class="la la-trash-o"></i>Delete
                        </a>
                    </div>
				</div>
            </div>
        
	@endforeach
	</div>
    </div>
    <!--end::Form group-->

    <!--begin::Form group-->
    
    <!--end::Form group-->
</div>
@endif
<div id="kt_docs_repeater_basi_prj" style="margin-top: -30px;">
    <!--begin::Form group-->
    <div class="form-group">
        <div data-repeater-list="kt_docs_repeater_basi_prj">
            <div data-repeater-item><br><br>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-label">Project Name:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="project_name" placeholder="Enter full name" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Duration:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="project_duration" placeholder="Enter project duration" />
                    </div>
                    
                </div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
				<div class="col-lg-10">
												<label class="form-label">Description:</label>
												<textarea  rows="4"class="form-control mb-2 mb-md-0 " placeholder="Enter project description" name="project_description" ></textarea>
												</div>
				</div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
				<div class="col-lg-10">
												<label class="form-label">Roles & Responsibilities:</label>
												<textarea  rows="4"class="form-control mb-2 mb-md-0 " placeholder="Enter Roles & Responsibilities" name="roles_responsibility" ></textarea>
												</div>
												<div class="col-md-2">
                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                            <i class="la la-trash-o"></i>Delete
                        </a>
                    </div>
				</div>
            </div>
        </div>
    </div>
    <!--end::Form group-->

    <!--begin::Form group-->
    <div class="form-group mt-5">
        <a href="javascript:;" data-repeater-create class="btn btn-light-primary" onclick="reinitialize();">
            <i class="la la-plus"></i>Add
        </a>
    </div>
    <!--end::Form group-->
</div>
										
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark" style="padding-top: 41px;">Certifications</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<!--end::Notice-->
										</div>
										@if(isset($resume_details->certificationsArray[0]->certification))
										<div id="kt_docs_repeater_certification" style="margin-top: -70px;margin-bottom: 30px;">
    <!--begin::Form group-->
	<div class="form-group">
        <div data-repeater-list="kt_docs_repeater_certification">
	@foreach($resume_details->certificationsArray as $cert)
    
            <div data-repeater-item><br><br>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="form-label">certification:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="certification" placeholder="Enter certification" value="{{$cert->certification}}" />
                    </div>
                    
                </div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
				<div class="col-lg-10">
												<label class="form-label">Description:</label>
												<textarea  rows="4"class="form-control mb-2 mb-md-0 " placeholder="Enter certification description" name="certification_description" >{!!$cert->certification_description!!}</textarea>
												</div>
												<div class="col-md-2">
                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                            <i class="la la-trash-o"></i>Delete
                        </a>
                    </div>
				</div>
            </div>
        
	@endforeach
	</div>
    </div>
    <!--end::Form group-->

    <!--begin::Form group-->
   
    <!--end::Form group-->
</div>
@endif
										
									
										<div id="kt_docs_repeater_cert" style="margin-top: -30px;">
    <!--begin::Form group-->
    <div class="form-group">
        <div data-repeater-list="kt_docs_repeater_cert">
            <div data-repeater-item><br><br>
                <div class="form-group row">
                    <div class="col-md-12">
                        <label class="form-label">certification:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="certification" placeholder="Enter certification" />
                    </div>
                    
                </div>
				<div style="height: 10px;"></div>
				<div class="form-group row">
				<div class="col-lg-10">
												<label class="form-label">Description:</label>
												<textarea  rows="4"class="form-control mb-2 mb-md-0 " placeholder="Enter certification description" name="certification_description" ></textarea>
												</div>
												<div class="col-md-2">
                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                            <i class="la la-trash-o"></i>Delete
                        </a>
                    </div>
				</div>
            </div>
        </div>
    </div>
    <!--end::Form group-->

    <!--begin::Form group-->
    <div class="form-group mt-5">
        <a href="javascript:;" data-repeater-create class="btn btn-light-primary" onclick="reinitialize();">
            <i class="la la-plus"></i>Add
        </a>
    </div>
    <!--end::Form group-->
</div>

<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark" style="padding-top: 41px;">Education Details</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<!--end::Notice-->
										</div>
										@if($resume_details->education_count)
										<div id="kt_docs_repeater_education">
										<div class="form-group">
        <div data-repeater-list="kt_docs_repeater_education" style="margin-top: -56px;margin-bottom: 30px;">
										@foreach($resume_details->educationArray as $edu)
    <!--begin::Form group-->
    
            <div data-repeater-item><br><br>
			<div class="form-group row">
										<div class="col-lg-6">
										<label class="form-label">Course:</label>
										<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter  qualification" name="education_course" value="{{$edu->education_course}}" />
												</div>
												<div class="col-lg-6">
										<label class="form-label">Institute/University Name:</label>
										<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter institute/university" name="education_institute" value="{{$edu->education_institute}}" />
												</div>
											</div>
											<div style="height: 10px;"></div>
											<div class="form-group row">
											<div class="col-lg-6">
										<label class="form-label">Duration:</label>
										<input type="text" class="form-control mb-2 mb-md-0" placeholder="Duration" name="education_duration" value="{{$edu->education_duration}}" />
												</div>
												<div class="col-lg-4">
										<label class="form-label">Location:</label>
										<input type="text" class="form-control mb-2 mb-md-0" placeholder="Location" name="education_location" value="{{$edu->education_location}}"/>
												</div>
												<div class="col-md-2">
                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                            <i class="la la-trash-o"></i>Delete
                        </a>
                    </div>
										</div>
				
            </div>
        
	@endforeach
	</div>
    </div>
    <!--end::Form group-->

    <!--begin::Form group-->
   
    <!--end::Form group-->
</div>
@endif
<div id="kt_docs_repeater_edu">
    <!--begin::Form group-->
    <div class="form-group">
        <div data-repeater-list="kt_docs_repeater_edu" style="margin-top: -30px;">
            <div data-repeater-item><br><br>
			<div class="form-group row">
										<div class="col-lg-6">
										<label class="form-label">Course:</label>
										<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter  qualification" name="education_course" />
												</div>
												<div class="col-lg-6">
										<label class="form-label">Institute/University Name:</label>
										<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter institute/university" name="education_institute" />
												</div>
											</div>
											<div style="height: 10px;"></div>
											<div class="form-group row">
											<div class="col-lg-6">
										<label class="form-label">Duration:</label>
										<input type="text" class="form-control mb-2 mb-md-0" placeholder="Duration" name="education_duration" />
												</div>
												<div class="col-lg-4">
										<label class="form-label">Location:</label>
										<input type="text" class="form-control mb-2 mb-md-0" placeholder="Location" name="education_location"/>
												</div>
												<div class="col-md-2">
                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                            <i class="la la-trash-o"></i>Delete
                        </a>
                    </div>
										</div>
				
            </div>
        </div>
    </div>
    <!--end::Form group-->

    <!--begin::Form group-->
    <div class="form-group mt-5">
        <a href="javascript:;" data-repeater-create class="btn btn-light-primary" onclick="reinitialize();">
            <i class="la la-plus"></i>Add
        </a>
    </div>
    <!--end::Form group-->
</div>
										

										
										<!--end::Input group-->
										<!--begin::Input group-->
										
										<!--end::Input group-->
										<!--begin::Input group-->
										
										<!--end::Input group-->
										<!--begin::Input group-->
										
										<!--end::Input group-->
									</div>
									<!--end::Wrapper-->
								</div>
								
								<!--end::Step 4-->
								<!--begin::Step 5-->
								<div class="" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-8 pb-lg-10">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">Your Are Done!</h2>
											<!--end::Title-->
											<!--begin::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Body-->
										<div class="mb-0">
											<!--begin::Text-->
											<div class="fs-6 text-gray-600 mb-5">You are successfully entered the details. Please click on the submit button to generate resume</div>
											<!--end::Text-->
											<!--begin::Alert-->
											<!--begin::Notice-->
											
											<!--end::Notice-->
											<!--end::Alert-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Step 5-->
								<!--begin::Actions-->
								<div class="d-flex flex-stack pt-15">
									<div class="mr-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
										<span class="svg-icon svg-icon-4 me-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
												<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->Previous</button>
									</div>
									<div>
										<button type="button" class="btn btn-lg btn-primary" onclick="testsubmit();" data-kt-stepper-action="submit"  id="display-submit">
											<span class="indicator-label">Submit
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-4 ms-2">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
										<span class="svg-icon svg-icon-4 ms-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
												<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon--></button></br></br>
										<a id="downloadlink" class="btn btn-lg btn-primary" style="display:none;" href="" download>Download in PDF</a>
										<a id="downloadlinkdocx" class="btn btn-lg btn-primary" style="display:none;" href="" download>Download in DOCX</a>
									</div>
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
						@endsection
                        @section('js')
        <script src="{{asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>

		<script src="{{asset('assets/js/custom/utilities/modals/edit-account.js')}}"></script>
<script>
$('#kt_docs_repeater_basic').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});
$('#kt_docs_repeater_basi').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});
$('#kt_docs_repeater_certification').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});
$('#kt_docs_repeater_education').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});
$('#kt_docs_repeater_basic_exp').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});
$('#kt_docs_repeater_basi_prj').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});
$('#kt_docs_repeater_cert').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});
$('#kt_docs_repeater_edu').repeater({
    initEmpty: false,

    defaultValues: {
        'text-input': 'foo'
    },

    show: function () {
        $(this).slideDown();
    },

    hide: function (deleteElement) {
        $(this).slideUp(deleteElement);
    }
});
/*$( document ).ready(function() {
    $('#downloadlink').hide();
});*/
function mail_add(e){

	 
	var url = "{{ route('getEmployee.email') }}";

	$.ajax({
		
                            url: url,
                            type: 'POST',

    dataType: 'json',
    data:{
        '_token': '{{ csrf_token() }}',
		'name':e.value
    },
    success: function(result) {
        console.log(result.data);
		$('#email').val(result.data);
       
   
    },
    error: function(request,msg,error) {
        // handle failure
    }      
                        });

					
    
}

function talentIdCheck(e){

	 
var url = "{{ route('talentid.check') }}";
var resumeid = $('#resumeid').val();

$.ajax({
	
						url: url,
						type: 'POST',

dataType: 'json',
data:{
	'_token': '{{ csrf_token() }}',
	'talentid':e.value,
	'resumeid':resumeid,
	'mode':'edit'
},
success: function(result) {
	console.log(result);
if(result==1){
	
	$('#hidden_talent_id').val(1);

	document.getElementById('email-error').style.display    = 'block';

}else{
	document.getElementById('email-error').style.display    = 'none';

	$('#hidden_talent_id').val(0);
}

},
error: function(request,msg,error) {
	// handle failure
}      
					});

				

}
$(document).ready(function() {
   $('.summernote').summernote({
	height: 150
   });
});
function reinitialize() {
	$(document).ready(function() {
   $('.summernote').summernote({
	height: 150
   });
});
}
function testsubmit() {
	$.ajaxSetup({
                            headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var formData = new FormData(document.getElementById("kt_create_account_form"));
                                        console.log(formData);
                                        var id = $('#resumeid').val();
                                        var base_url = $('#url').val();
                                        var url = base_url+'/resume/update/'+id;
                                        console.log(url);
                                        $.ajax({
                                            type: 'post',
                                            url: url,
                                            data: formData,
                                            contentType:false,
                        cache: false,
                        processData: false,
                                            success: function (result) {
                                                console.log(result.status);
                                                if(result.status == true) {
                                                    $("#downloadlink").attr("href", result.file)
                                                        $('#downloadlink').show();
                                                }
                                            },
                                            error: function(result) {
            
                                            }
                                        });
}

function logoChange() {
  
   if($('#logo').val()=="uploadlogo" || $('#logo').val()=="nologo"){
	   $('#myFile-logo1').css('display','block');
	   $("#talentid").attr("placeholder", "Enter linkedin url");
	   if($('#logo').val()=="uploadlogo"){
				$('#myFile-logo1').css('display','block');
			}else{
				$('#myFile-logo1').css('display','none');
			}
			$("#LabelID").html("Linkedin Url:");
			$('#address1').css('display','block');
	$('#mobile1').css('display','block');

   }else{
	$('#address1').css('display','none');
	$('#mobile1').css('display','none');
	$('#myFile-logo1').css('display','none');
	$("#talentid").attr("placeholder", "Enter talentid");
	$("#LabelID").html("Talent ID:");
   }  
}
</script>
@endsection
