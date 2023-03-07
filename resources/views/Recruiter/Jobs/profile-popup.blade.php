<div class="modal fade" id="kt_modal_add_talent" tabindex="-1" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Form-->
                                                <form class="form"  method="post" id="kt_modal_add_talent_form" data-kt-redirect="{{route('jobs.index')}}">
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