@extends('layouts.admin_layout')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<style>
	.form-control-s{
		background-color: #dfdfdf;
	}
	.column {
float: left;
width: 33.33%;
padding: 10px;
box-sizing: border-box;
height: 83px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
content: "";
display: table;
clear: both;
box-sizing: border-box;
}
.ss{
	
  margin: auto;
  width: 50%;
  padding: 10px;

}
</style>
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Job view</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="/jobs" class="text-muted text-hover-primary">Job</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Job view</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Filter menu-->
										<div class="m-0">
											<!--begin::Menu toggle-->
										
											<!--end::Menu toggle-->
											<!--begin::Menu 1-->
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_62cfa39ac5b0c">
												<!--begin::Header-->
												<div class="px-7 py-5">
													<div class="fs-5 text-dark fw-bold">Filter Options</div>
												</div>
												<!--end::Header-->
												<!--begin::Menu separator-->
												<div class="separator border-gray-200"></div>
												<!--end::Menu separator-->
												<!--begin::Form-->
												<div class="px-7 py-5">
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Status:</label>
														<!--end::Label-->
														<!--begin::Input-->
														<div>
															<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_62cfa39ac5b0c" data-allow-clear="true">
																<option></option>
																<option value="1">Approved</option>
																<option value="2">Pending</option>
																<option value="2">In Process</option>
																<option value="2">Rejected</option>
															</select>
														</div>
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Member Type:</label>
														<!--end::Label-->
														<!--begin::Options-->
														<div class="d-flex">
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																<input class="form-check-input" type="checkbox" value="1" />
																<span class="form-check-label">Author</span>
															</label>
															<!--end::Options-->
															<!--begin::Options-->
															<label class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																<span class="form-check-label">Customer</span>
															</label>
															<!--end::Options-->
														</div>
														<!--end::Options-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="mb-10">
														<!--begin::Label-->
														<label class="form-label fw-semibold">Notifications:</label>
														<!--end::Label-->
														<!--begin::Switch-->
														<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
															<label class="form-check-label">Enabled</label>
														</div>
														<!--end::Switch-->
													</div>
													<!--end::Input group-->
													<!--begin::Actions-->
													<div class="d-flex justify-content-end">
														<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
														<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
													</div>
													<!--end::Actions-->
												</div>
												<!--end::Form-->
											</div>
											<!--end::Menu 1-->
										</div>
										<!--end::Filter menu-->
										<!--begin::Secondary button-->
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Careers - List-->
									<div class="card">
										<!--begin::Body-->
										<div class="card-body p-lg-17">
											<!--begin::Hero-->
											<div class="position-relative mb-17">
												<!--begin::Overlay-->
												<div class="overlay overlay-show">
													<!--begin::Image-->
													<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-250px" style="background-image:url({{ URL::asset('assets/img/recruiter/img-1.jpg')}})"></div>
													<!--end::Image-->
													<!--begin::layer-->
													<div class="overlay-layer rounded bg-black" style="opacity: 0.4"></div>
													<!--end::layer-->
												</div>
												<!--end::Overlay-->
												<!--begin::Heading-->
												<div class="position-absolute text-white mb-8 ms-10 bottom-0">
													<!--begin::Title-->
													<h3 class="text-white fs-2qx fw-bold mb-3 m">Careers at {{$jobs->company->name}}</h3>
													<!--end::Title-->
													<!--begin::Text-->
													<div class="fs-5 fw-semibold">You sit down. You stare at your screen. The cursor blinks.</div>
													<!--end::Text-->
												</div>
												<!--end::Heading-->
											</div>
											<!--end::-->
											<!--begin::Layout-->
											<div class="d-flex flex-column flex-lg-row mb-17">
												<!--begin::Content-->
												<div class="flex-lg-row-fluid me-0 me-lg-20">
													<!--begin::Job-->
													<div class="mb-17">
														<!--begin::Description-->
														<div class="m-0">
															<!--begin::Title-->
															<h4 class="fs-1 text-gray-800 w-bolder mb-6">{{$jobs->title}} ( {{$jobs->job_id}} )</h4>
															<!--end::Title-->
															<!--begin::Text-->
															<p class="fw-semibold fs-4 text-gray-600 mb-2">First, a disclaimer – the entire process of writing a blog post often takes more than a couple of hours, even if you can type eighty words as per minute and your writing skills are sharp.</p>
															<!--end::Text-->
														</div>
														<!--end::Description-->
														<!--begin::Accordion-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_1">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Skills</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_1_1" class="collapse show fs-6 ms-1">
																<!--begin::Item-->
																<div class="mb-4">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center ps-10 mb-n1">
																		<!--begin::Bullet-->
																		<span class="bullet me-3"></span>
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<div class="text-gray-600 fw-semibold fs-6">{{$jobs->skills}}</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Item-->
																</div>
																<!--end::Item-->
															
																<!--end::Item-->
																<!--begin::Item-->
													
																<!--end::Item-->
																<!--begin::Item-->
												
																<!--end::Item-->
																<!--begin::Item-->
												
																<!--end::Item-->
																<!--begin::Item-->

																<!--end::Item-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
														<div class="m-0">
															<!--begin::Heading-->
															<div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0" data-bs-toggle="collapse" data-bs-target="#kt_job_1_2">
																<!--begin::Icon-->
																<div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5">
																	<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																	<span class="svg-icon toggle-on svg-icon-primary svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																			<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																	<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																	<span class="svg-icon toggle-off svg-icon-1">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																			<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																			<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->
																</div>
																<!--end::Icon-->
																<!--begin::Title-->
																<h4 class="text-gray-700 fw-bold cursor-pointer mb-0">Job Description</h4>
																<!--end::Title-->
															</div>
															<!--end::Heading-->
															<!--begin::Body-->
															<div id="kt_job_1_2" class="collapse fs-6 ms-1">
																<!--begin::Item-->
																<div class="mb-4">
																	<!--begin::Item-->
																	<div class="d-flex align-items-center ps-10 mb-n1">
																		<!--begin::Bullet-->
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<div class="text-gray-600 fw-semibold fs-6">{{$jobs->description}}</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Item-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
															
																
																<!--end::Item-->
															</div>
															<!--end::Content-->
															<!--begin::Separator-->
															<div class="separator separator-dashed"></div>
															<!--end::Separator-->
														</div>
														<!--end::Section-->
														<!--begin::Section-->
													
														<!--end::Section-->
														<!--begin::Section-->
													
														<!--end::Section-->
														<!--end::Accordion-->
														<!--begin::Apply-->
														<!--end::Apply-->
													</div>
													<!--end::Job-->
													<!--begin::Job-->
											
													<!--end::Job-->
												</div>
												<!--end::Content-->
												<!--begin::Sidebar-->

												<div class="modal fade" id="kt_modal_add_talent" tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Form-->
                                                <form class="form"  method="post" id="kt_modal_add_talent_form" data-kt-redirect="{{route('jobs.list',['id'=>$jobs->id])}}">
                                                    @csrf
                                                <!--begin::Modal header-->
                                                    <div class="modal-header" id="kt_modal_add_talent_header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bold">Profile Upload</h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div id="kt_modal_add_talent_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>




													<div class="modal-body py-10 px-lg-17">
                                                        <!--begin::Scroll-->
                                                        <div class="scroll-y me-n7 pe-7" id="kt_modal_add_talent_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
                                                            <!--begin::Input group-->
                                                        
                    
                                <div class="row">
<div class="column" >

<small class="text-primary"><strong>JOB ID :</strong> </small><p id="talent_job_id"></p>
</div>
<div class="column" >
    
<small class="text-primary"><strong>COMPANY :</strong> </small><p id="talent_job_title"></p>
</div>
<div class="column">

<small class="text-primary"><strong>TITLE :</strong> </small><p id="talent_company_name"></p>
</div>
</div>

<input type="hidden" id="tal-job-id" name="job_tal_id" />
<input type="hidden" id="resume_name" name="resume" />


                         <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                <label class=" fs-6 fw-semibold mb-2 required">Talent ID </label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" class="form-control form-control-solid" placeholder="Talent ID" name="talent_id" value="" />
                                                                <!--end::Input-->
                                                    <!--end::Input-->
                                </div>

                                <div class="col-md-4 fv-row">
                                <label class=" fs-6 fw-semibold mb-2 required">Name </label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" class="form-control form-control-solid" placeholder="Name" name="name" value="" />
                                                                <!--end::Input-->
                                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                <label class=" fs-6 fw-semibold mb-2 required">Phone Number </label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="number" class="form-control form-control-solid" placeholder="Phone Number" name="phone" value="" />
                                                                <!--end::Input-->
                                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                <label class=" fs-6 fw-semibold mb-2 required">Email ID </label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="email" class="form-control form-control-solid" placeholder="Email ID" name="email" value="" />
                                                                <!--end::Input-->
                                                    <!--end::Input-->
                                </div>

                                <div class="col-md-4 fv-row">
                                <label class=" fs-6 fw-semibold mb-2">Date of Birth </label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input class="form-control form-control-solid" placeholder="Date of Birth" name="dob" id="kt_datepicker_3"/>
                                                                <!--end::Input-->
                                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                <label class=" fs-6 fw-semibold mb-2">Expected CTC </label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" class="form-control form-control-solid" placeholder="Expected CTC" name="ectc" value="" />
                                                                <!--end::Input-->
                                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-4 fv-row">
                                <label class=" fs-6 fw-semibold mb-2">CTC </label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" class="form-control form-control-solid" placeholder="CTC" name="ctc" value="" />
                                                                <!--end::Input-->
                                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                <label class=" fs-6 fw-semibold mb-2">Max Notice Period </label>
                                                                <!--end::Label-->
                                                                <!--begin::Input-->
                                                                <input type="text" class="form-control form-control-solid" placeholder="Max Notice Period" name="notice" value="" />
                                                                <!--end::Input-->
                                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                            </div>


							<div class="row g-9 mb-8">
                                <!--begin::Col-->
                                
                                <label class=" fs-6 fw-semibold mb-2">Upload Resume </label>
                                                             
								<div class="fv-row">
        <!--begin::Dropzone-->
        <div class="dropzone" id="kt_dropzonejs_example_1">
            <!--begin::Message-->
            <div class="dz-message needsclick">
                <!--begin::Icon-->
                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                <!--end::Icon-->

                <!--begin::Info-->
                <div class="ms-4">
                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                    <span class="fs-7 fw-semibold text-gray-400">Upload up to 1 files</span>
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Dropzone-->
    </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                       
                                <!--end::Col-->
                            </div>
                    
                                <!--begin::Col-->
                            




                                                        
                                                        
                                                        

                                                        
                                                            <!--begin::Billing toggle-->
                                                            <!--end::Billing toggle-->
                                                            <!--begin::Billing form-->
                                                            <!--end::Billing form-->
                                                        </div>
                                                        <!--end::Scroll-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                    <!--begin::Modal footer-->
                                                    <div class="modal-footer flex-center">
                                                        <!--begin::Button-->
                                                        <button type="reset" id="kt_modal_add_talent_cancel" class="btn btn-light me-3">Discard</button>
                                                        <!--end::Button-->
                                                        <!--begin::Button-->
                                                        <button type="submit" id="kt_modal_add_talent_submit" class="btn btn-primary">
                                                            <span class="indicator-label">Submit</span>
                                                            <span class="indicator-progress">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                        <!--end::Button-->
                                                    </div>
                                                    <!--end::Modal footer-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                    </div>

												
												<div class="flex-lg-row-auto w-100 w-lg-275px w-xxl-350px">
													<!--begin::Careers about-->
													<div class="card bg-light">
														<!--begin::Body-->
														<div class="card-body">
															<!--begin::Top-->
															<div class="mb-7">
																<!--begin::Title-->
																<h4 class="text-gray-700 w-bolder mb-0">Company</h4>
																<!--end::Title-->
																<!--begin::Text-->
																<p class="fw-semibold fs-6 text-gray-600">{{$jobs->company->name}}</p>
																<!--end::Text-->
															</div>
															<!--end::Top-->
															<!--begin::Item-->
															<div class="mb-8">
																<!--begin::Title-->
																<h4 class="text-gray-700 w-bolder mb-0">Job Locations</h4>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="my-2">
																	<!--begin::Row-->
																	<div class="d-flex align-items-center mb-3">
																		<!--begin::Bullet-->
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		<div class="text-gray-600 fw-semibold fs-6">{{$jobs->location}}</div>
																		<!--end::Label-->
																	</div>
																	<!--end::Row-->
																
																	<!--end::Row-->
																</div>
																<!--end::Section-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="mb-8">
																<!--begin::Title-->
																<h4 class="text-gray-700 w-bolder mb-0">No. of positions</h4>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="my-2">
																	<!--begin::Row-->
																	<div class="d-flex align-items-center mb-3">
																		<!--begin::Bullet-->
																		
																		<!--end::Bullet-->
																		<!--begin::Label-->
																		@if(isset($jobs->position_opened))
                                                              	<div class="text-gray-600 fw-semibold fs-6">{{$jobs->position_opened}}</div>@else
                         
							                         			 <div class="text-gray-600 fw-semibold fs-6">0</div>
							                         			@endif
							                         											<!--end::Label-->
																	</div>
																	<!--end::Row-->
															
																<!--end::Section-->
															</div>
															<!--end::Item-->
															<!--begin::Link-->
															<!--end::Link-->
															<div class="mb-8">
																<!--begin::Title-->
																<h4 class="text-gray-700 w-bolder mb-0">Max Notice Period</h4>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="my-2">
																	<!--begin::Row-->
																	<div class="d-flex align-items-center mb-3">
																		<!--begin::Bullet-->
																		
																		<!--end::Bullet-->
																		<!--begin::Label-->
                                                              	<div class="text-gray-600 fw-semibold fs-6">{{$jobs->notice_period}}</div>
                         
							                         							<!--end::Label-->
																	</div>
																	<!--end::Row-->
															
																<!--end::Section-->
															</div>
															<div class="mb-8">
																<!--begin::Title-->
																<h4 class="text-gray-700 w-bolder mb-0">Category</h4>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="my-2">
																	<!--begin::Row-->
																	<div class="d-flex align-items-center mb-3">
																		<!--begin::Bullet-->
																		
																		<!--end::Bullet-->
																		<!--begin::Label-->
                                                              	<div class="text-gray-600 fw-semibold fs-6">{{$jobs->category->category}}</div>
                         
							                         							<!--end::Label-->
																	</div>
																	<!--end::Row-->
															
																<!--end::Section-->
															</div>

															<div class="mb-8">
																<!--begin::Title-->
																<h4 class="text-gray-700 w-bolder mb-0">Payout Cycle</h4>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="my-2">
																	<!--begin::Row-->
																	<div class="d-flex align-items-center mb-3">
																		<!--begin::Bullet-->
																		
																		<!--end::Bullet-->
																		<!--begin::Label-->
                                                              	<div class="text-gray-600 fw-semibold fs-6">{{$jobs->payout_cycle}}</div>
                         
							                         							<!--end::Label-->
																	</div>
																	<!--end::Row-->
															
																<!--end::Section-->
															</div>


															<div class="mb-8">
																<!--begin::Title-->
																<h4 class="text-gray-700 w-bolder mb-0">Payout %</h4>
																<!--end::Title-->
																<!--begin::Section-->
																<div class="my-2">
																	<!--begin::Row-->
																	<div class="d-flex align-items-center mb-3">
																		<!--begin::Bullet-->
																		
																		<!--end::Bullet-->
																		<!--begin::Label-->
                                                              	<div class="text-gray-600 fw-semibold fs-6">{{$jobs->payout_rate}}</div>
                         
							                         							<!--end::Label-->
																	</div>
																	<!--end::Row-->
															
																<!--end::Section-->
															</div>


														</div>
														<!--end::Body-->
													</div>
													<!--end::Careers about-->
												</div>
												<!--end::Sidebar-->
											</div>
											<!--end::Layout-->
											<!--begin::Section-->
										
											<!--end::Section-->
										
												<!--end::Body-->
											</div>
											<!--end::Card-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Careers - List-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
					



						<div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
											<!--begin::Messenger-->
											<div class="card" id="kt_chat_messenger">
												<!--begin::Card header-->
												<div class="card-header" id="kt_chat_messenger_header">
													<!--begin::Title-->
													<div class="card-title">
														<!--begin::Users-->
														<h2 class="text-gray-700 fw-bold cursor-pointer mb-0">Comments</h2>
														<!--end::Users-->
													</div>
													<!--end::Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<!--begin::Menu-->
														<div class="me-n3">
															
															<!--begin::Menu 3-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
																<!--begin::Heading-->
																<div class="menu-item px-3">
																	<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
																</div>
																<!--end::Heading-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add Contact</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Contacts 
																	<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" aria-label="Specify a contact email to send an invitation" data-kt-initialized="1"></i></a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<a href="#" class="menu-link px-3">
																		<span class="menu-title">Groups</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-kt-initialized="1">Create Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-kt-initialized="1">Invite Members</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-kt-initialized="1">Settings</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3 my-1">
																	<a href="#" class="menu-link px-3" data-bs-toggle="tooltip" data-kt-initialized="1">Settings</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 3-->
														</div>
														<!--end::Menu-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body" id="kt_chat_messenger_body">
													<!--begin::Messages-->
													<div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_header, #kt_toolbar, #kt_footer, #kt_chat_messenger_header, #kt_chat_messenger_footer" data-kt-scroll-wrappers="#kt_content, #kt_chat_messenger_body" data-kt-scroll-offset="5px" style="max-height: 118px;">
														<!--begin::Message(in)-->
                                                       
														@if(count($comments)==0)
														<p style="text-align:center;">No comments found</p>
														@endif
														
														@foreach($comments as $comment)
														@if((auth()->user()->role_id != $comment->role_id) || (auth()->user()->id !== $comment->auth_id) )
														<div class="d-flex justify-content-start mb-10">
															<!--begin::Wrapper-->
															<div class="d-flex flex-column align-items-start">
																<!--begin::User-->
																<div class="d-flex align-items-center mb-2">
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="{{asset('assets/media/avatars/300-25.jpg')}}">
																	</div>
																	<!--end::Avatar-->
																	<!--begin::Details-->
																	<div class="ms-3">
																		
																		<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">{{$comment->name}}</a>
																		<span class="text-muted fs-7 mb-1">{{$comment->created_at}}</span>
																		@if($comment->role_id==1)
																	<span class="badge badge-danger px-2 py-1 mr-1">Admin</span>
																	    @elseif($comment->role_id==2)
																	<span class="badge badge-success px-2 py-1 mr-1">Recruiter</span>
																	   @elseif($comment->role_id==3)
																	<span class="badge badge-warning px-2 py-1 mr-1">Company</span>
                                                                       @endif
																	</div>
																	<!--end::Details-->
																</div>
																<!--end::User-->
																<!--begin::Text-->
																<div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start" data-kt-element="message-text">{{$comment->comment}}</div>
																<!--end::Text-->
															</div>
															<!--end::Wrapper-->
														</div>@else
														<!--end::Message(in)-->
														<!--begin::Message(out)-->
														<div class="d-flex justify-content-end mb-10">
															<!--begin::Wrapper-->
															<div class="d-flex flex-column align-items-end">
																<!--begin::User-->
																<div class="d-flex align-items-center mb-2">
																	<!--begin::Details-->
																	<div class="me-3">
																		@if($comment->role_id==1)
																	<span class="badge badge-danger px-2 py-1 mr-1">Admin</span>
																	    @elseif($comment->role_id==2)
																	<span class="badge badge-success px-2 py-1 mr-1">Recruiter</span>
																	@elseif($comment->role_id==3)
																	<span class="badge badge-warning px-2 py-1 mr-1">Company</span>
                                                                       @endif
																		<span class="text-muted fs-7 mb-1">{{$comment->created_at}}</span>
																		<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
																	</div>
																	<!--end::Details-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="{{asset('assets/media/avatars/300-1.jpg')}}">
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::User-->
																<!--begin::Text-->
																<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text">{{$comment->comment}}</div>
																<!--end::Text-->
															</div>
															<!--end::Wrapper-->
														</div>
														@endif
														@endforeach
														<!--end::Message(out)-->
														<!--begin::Message(in)-->
														
														<!--end::Message(in)-->
														<!--begin::Message(out)-->
														
														<!--end::Message(out)-->
														<!--begin::Message(in)-->
														<div class="d-flex justify-content-start mb-10">
															<!--begin::Wrapper-->
														
															<!--end::Wrapper-->
														</div>
													
														</div>
														<!--end::Message(out)-->
														<!--begin::Message(in)-->
														
														<!--end::Message(in)-->
														<!--begin::Message(template for out)-->
														<div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
															<!--begin::Wrapper-->
															<div class="d-flex flex-column align-items-end">
																<!--begin::User-->
																<div class="d-flex align-items-center mb-2">
																	<!--begin::Details-->
																	<div class="me-3">
																		<span class="text-muted fs-7 mb-1">Just now</span>
																		<a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
																	</div>
																	<!--end::Details-->
																	<!--begin::Avatar-->
																	<div class="symbol symbol-35px symbol-circle">
																		<img alt="Pic" src="{{asset('assets/media/avatars/300-1.jpg')}}">
																	</div>
																	<!--end::Avatar-->
																</div>
																<!--end::User-->
																<!--begin::Text-->
																<div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end" data-kt-element="message-text"></div>
																<!--end::Text-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Message(template for out)-->
														<!--begin::Message(template for in)-->
													
																	<!--end::Details-->
																</div>
																<!--end::User-->
																<!--begin::Text-->
																<!--end::Text-->
															</div>
															<!--end::Wrapper-->
														</div>
														<!--end::Message(template for in)-->
													</div>
													<!--end::Messages-->
												</div>
												<!--end::Card body-->
												<!--begin::Card footer-->


												<!--end::Card footer-->
												</div>
											
											<!--end::Messenger-->
										</div>


					</div>
 
										@endsection
                        @section('js')


<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used by this page)-->
		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used by this page)-->
		<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
		<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
<script>




$(document).ready(function() {
   
    $('#myForm').on('click', function() {
      var comment = $('#comment').val();
	  var job_id = $('#job_id').val();
	

      if(comment!=""){
        /*  $("#butsave").attr("disabled", "disabled"); */
          $.ajax({
              url: "{{route('job.comment')}}",
              type: "POST",
              data: {
				_token: '{{csrf_token()}}',
                 job_id:job_id,
                  comment: comment,

              },
              cache: false,
              success: function(data){
		
				  window.location =window.location.href
                  
              }
          });
      }
      else{
       
      }
  });
});





var KTModalTalentAdd = function() {
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var t, e, o, n, r, i;
  
    return {
        init: function() {
            i = new bootstrap.Modal(document.querySelector("#kt_modal_add_talent")), r = document.querySelector("#kt_modal_add_talent_form"), 
            t = r.querySelector("#kt_modal_add_talent_submit"), e = r.querySelector("#kt_modal_add_talent_cancel"), 
            o = r.querySelector("#kt_modal_add_talent_close"), n = FormValidation.formValidation(r, {
                fields: {
                    talent_id: {
                        validators: {
                            notEmpty: {
                                message: "Talent ID is required"
                            }
                        }
                    },
                    name: {
                        validators: {
                            notEmpty: {
                                message: "Name is required"
                            }
                        }
                    },
                    phone: {
                        validators: {
                            notEmpty: {
                                message: "phone number is required"
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: "Email is required"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), $(r.querySelector('[name="country"]')).on("change", function() {
                n.revalidateField("country");
            }), t.addEventListener("click", function(e) {
                e.preventDefault(), n && n.validate().then(function(e) {
                    if(e=='Valid') {
                        var url = "{{ route('talent.store') }}";
                        
                    $.ajax({
                        type: 'post',
                        url: url,
                        data: $('#kt_modal_add_talent_form').serialize(),
                        success: function (result) {
                            Swal.fire({
                                text: "Form has been successfully submitted!",
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(function(e) {
                            e.isConfirmed && (i.hide(), t.disabled = !1, window.location = r.getAttribute("data-kt-redirect"));
                        });
                        },
                        error: function(result) {
                            alert('error');
                        }
                    });
                    } else {
                        Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                    }
                });
            }), e.addEventListener("click", function(t) {
                t.preventDefault(), Swal.fire({
                    text: "Are you sure you would like to cancel?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Yes, cancel it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then(function(t) {
                    t.value ? (r.reset(), i.hide()) : "cancel" === t.dismiss && Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                });
            }), o.addEventListener("click", function(t) {
                t.preventDefault(), Swal.fire({
                    text: "Are you sure you would like to cancel?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Yes, cancel it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then(function(t) {
                    t.value ? (r.reset(), i.hide()) : "cancel" === t.dismiss && Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                });
            });
        }
    };
}();

KTUtil.onDOMContentLoaded(function() {
    KTModalTalentAdd.init();
});

// var options = {selector: "#kt_docs_tinymce_basic", height : "280"};

// if ( KTThemeMode.getMode() === "dark" ) {
//     options["skin"] = "oxide-dark";
//     options["content_css"] = "dark";
// }

// tinymce.init(options);

// var options = {selector: "#kt_docs_tinymce_basic", height : "280"};

// if ( KTThemeMode.getMode() === "dark" ) {
//     options["skin"] = "oxide-dark";
//     options["content_css"] = "dark";
// }

// tinymce.init(options);



var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
    url: "http://stakefield-portal.localhost/upload", // Set the url for your upload script location
    paramName: "file", // The name that will be used to transfer the file
    maxFiles: 1,
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    init: function() {
        this.on("success", function(file, responseText) {
            console.log(responseText);
            
            document.getElementById("resume_name").value = responseText;

        });
    }
});



            </script>


<script>

$(document).ready(function () {
    $("body").on("click","#upload",function(e) {

    document.getElementById("talent_job_id").innerHTML = "";
        document.getElementById("talent_job_title").innerHTML = "";
        document.getElementById("talent_company_name").innerHTML = "";
    event.preventDefault();
    var id = $(this).data('id');
    $.get('view-job/'+id, function (data) {
        document.getElementById("tal-job-id").value = id;
        document.getElementById("talent_job_id").innerHTML = data.data.job_id;
        document.getElementById("talent_job_title").innerHTML = data.data.title;
        document.getElementById("talent_company_name").innerHTML = data.data.company_name;


        //$('#talent_job_id').val(data.data.job_id);
    //  $('#company_name').val(data.data.job_id);
    })
});

}); 


$("#kt_datepicker_3").flatpickr();




 

</script>


@endsection
