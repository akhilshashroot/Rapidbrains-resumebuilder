@extends('layouts.layout')
@section('content')
<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Multi-steps-->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column stepper-multistep" id="kt_create_account_stepper">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-lg-350px w-xl-500px">
					<div class="d-flex flex-column position-lg-fixed top-0 bottom-0 w-lg-350px w-xl-500px scroll-y bgi-size-cover bgi-position-center" style="background-image: url(assets/media/misc/auth-bg.png)">
						<!--begin::Header-->
						<div class="d-flex flex-center py-10 py-lg-20 mt-lg-20">
							<!--begin::Logo-->
							<a href="../../demo1/dist/index.html">
								<img alt="Logo" src="assets/media/logos/custom-1.png" class="h-70px" />
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
											<h3 class="stepper-title fs-2">Profile & Skills</h3>
											<div class="stepper-desc fw-normal">Add your profile and skills</div>
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
											<h3 class="stepper-title fs-2">Experiences</h3>
											<div class="stepper-desc fw-normal">Add your experience here</div>
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
											<h3 class="stepper-title fs-2">Projects & Education</h3>
											<div class="stepper-desc fw-normal">Provide your projects and education info</div>
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
							<form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form">
								<!--begin::Step 1-->
								<div class="current" data-kt-stepper-element="content">
									<!--begin::Wrapper-->
									<div class="w-100">
										<!--begin::Heading-->
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold d-flex align-items-center text-dark">Profile & Skills
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i></h2>
											<!--end::Title-->
											<!--begin::Notice-->
											<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
											<!--end::Notice-->
										</div>
										<!--end::Heading-->
										<!--begin::Input group-->
										<div class="fv-row">
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
												<div class="col-lg-6">
												<label class="form-label">Select Logo:</label>
												<select class="form-control mb-2 mb-md-0" name="logo">
													<option value="rapidbrains">Rapidbrains</option>
													<option value="hashroot">Hashroot</option>
													<option value="uploadlogo">Upload logo</option>
													<option value="nologo">No logo</option>
												</select>
												</div>
												<div class="col-lg-6">
												<label class="form-label">Full Name:</label>
												<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter full name" name="fullname"/>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-6">
												<label class="form-label">Talent ID:</label>
												<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter Talentid" name="talentid"/>
												</div>
												<div class="col-lg-6">
												<label class="form-label">Email:</label>
												<input type="email" class="form-control mb-2 mb-md-0" placeholder="Enter email" name="email"/>
												</div>
												<div class="col-lg-6">
												<label class="form-label">Phone number:</label>
												<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter Phone number" name="phone"/>
												</div>
												<div class="col-lg-12">
												<label class="form-label">Address:</label>
												<textarea class="form-control mb-2 mb-md-0" placeholder="Enter address" name="address" ></textarea>
												</div>
												<div class="col-lg-12">
												<label class="form-label">Summary:</label>
												<textarea class="form-control mb-2 mb-md-0" placeholder="Enter summary" name="summary" ></textarea>
												</div>
												<div class="col-lg-12">
												<label class="form-label">Skills:</label>
												<textarea class="form-control mb-2 mb-md-0" placeholder="Enter skills" name="skills" ></textarea>
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
											<div class="text-muted fw-semibold fs-6">If you need more info, please check out
											<a href="#" class="link-primary fw-bold">Help Page</a>.</div>
											<!--end::Notice-->
										</div>
										
<div id="kt_docs_repeater_basic">
    <!--begin::Form group-->
    <div class="form-group">
        <div data-repeater-list="kt_docs_repeater_basic">
            <div data-repeater-item>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-label">Employer:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="employer" placeholder="Enter full name" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Role or Job title:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="jobtitle" placeholder="Enter contact number" />
                    </div>
                    
                </div>
				<div class="form-group row">
					<div class="col-md-6">
                        <label class="form-label">From:</label>
                        <input type="date" class="form-control mb-2 mb-md-0" name="from" placeholder="Enter full name" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">To:</label>
                        <input type="date" class="form-control mb-2 mb-md-0" name="to" placeholder="Enter contact number" />
                    </div>
				
				</div>
				<div class="form-group row">
					<div class="col-md-4">
                        <label class="form-label">City:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="city" placeholder="Enter city name" />
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">State:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="state" placeholder="Enter state" />
                    </div>
					<div class="col-md-3">
                        <label class="form-label">Country:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="country" placeholder="Enter country" />
                    </div>
					<div class="col-md-2">
                        <a href="javascript:;" data-repeater-delete class="btn btn-sm btn-light-danger mt-3 mt-md-8">
                            <i class="la la-trash-o"></i>Delete
                        </a>
                    </div>
				</div>
				<div class="form-group row">
				<div class="col-lg-12">
												<label class="form-label">Job description:</label>
												<textarea class="form-control mb-2 mb-md-0" placeholder="Enter job description" name="job_description" ></textarea>
												</div>
				</div>
				<div class="form-group row">
				<div class="col-lg-12">
												<label class="form-label">Projects:</label>
												<textarea class="form-control mb-2 mb-md-0" placeholder="Enter project details" name="job_projects" ></textarea>
												</div>
				</div>
            </div>
        </div>
    </div>
    <!--end::Form group-->

    <!--begin::Form group-->
    <div class="form-group mt-5">
        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
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
										<div id="kt_docs_repeater_basi">
    <!--begin::Form group-->
    <div class="form-group">
        <div data-repeater-list="kt_docs_repeater_basi">
            <div data-repeater-item>
                <div class="form-group row">
                    <div class="col-md-6">
                        <label class="form-label">Project Name:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="project_name" placeholder="Enter full name" />
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Duration:</label>
                        <input type="text" class="form-control mb-2 mb-md-0" name="project_duration" placeholder="Enter contact number" />
                    </div>
                    
                </div>
				<div class="form-group row">
				<div class="col-lg-12">
												<label class="form-label">Description:</label>
												<textarea class="form-control mb-2 mb-md-0" placeholder="Enter project description" name="project_description" ></textarea>
												</div>
				</div>
            </div>
        </div>
    </div>
    <!--end::Form group-->

    <!--begin::Form group-->
    <div class="form-group mt-5">
        <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
            <i class="la la-plus"></i>Add
        </a>
    </div>
    <!--end::Form group-->
</div>
										
										<!--end::Heading-->
										<!--begin::Input group-->
										
										<div class="pb-10 pb-lg-15">
											<!--begin::Title-->
											<h2 class="fw-bold text-dark">Education Details</h2>
											<!--end::Title-->
											<!--begin::Notice-->
											
											<!--end::Notice-->
										</div>
										<div class="d-flex flex-column mb-7 fv-row">
										<div class="form-group row">
										<div class="col-lg-6">
										<label class="form-label">Highest Qualification:</label>
										<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter highest qualification" name="education_course" />
												</div>
												<div class="col-lg-6">
										<label class="form-label">Institute Name:</label>
										<input type="text" class="form-control mb-2 mb-md-0" placeholder="Enter university" name="education_institute" />
												</div>
											</div>
											<div class="form-group row">
											<div class="col-lg-6">
										<label class="form-label">Duration:</label>
										<input type="text" class="form-control mb-2 mb-md-0" placeholder="Duration" name="education_duration" />
												</div>
												<div class="col-lg-6">
										<label class="form-label">Location:</label>
										<input type="text" class="form-control mb-2 mb-md-0" placeholder="Location" name="education_location"/>
												</div>
										</div>
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
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
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
										<!--end::Svg Icon--></button>
										<a id="downloadlink" class="btn btn-lg btn-primary" style="display:none;" href="" download>Download</a>
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

						<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('assets/js/scripts.bundle.js')}}"></script>
        <script src="{{asset('assets/plugins/custom/formrepeater/formrepeater.bundle.js')}}"></script>

		<script src="{{asset('assets/js/custom/utilities/modals/create-account.js')}}"></script>
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
/*$( document ).ready(function() {
    $('#downloadlink').hide();
});*/

</script>
@endsection
