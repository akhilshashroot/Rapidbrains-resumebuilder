@extends('layouts.layout')
@section('css')
@endsection

@section('content')
<style>
	.ss{
		cursor: pointer;
	}

	/* Create three equal columns that floats next to each other */
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
#kt_customers_table tfoot {
    display: table-header-group;
}
.search-dt{
		width: 116.953px !important;
		
}
.form-control12{
		display: block;
    width: 59% !important;
    padding: 0.775rem 1rem;
    font-size: 1.1rem;
    font-weight: 500;
    line-height: 1.5;
    color: #5e6278;
    background-color: #f5f8fa;
    background-clip: padding-box;
    border: 1px solid #e4e6ef;
    appearance: none;
    border-radius: 0.475rem;
	}
	.form-control12.form-control-solid {
	background-color: #5e6278;
    border-color: var(--kt-input-solid-bg);
    color: var(--kt-input-solid-color);
    transition: color .2s ease;
} 
</style>
</style>
<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Resume Listing</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="#" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<li class="breadcrumb-item text-muted">Resumes</li>
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
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_62cfa2e81cda2">
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
															<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_62cfa2e81cda2" data-allow-clear="true">
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
									<!--begin::Card-->
									<div class="card">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-6">
											<!--begin::Card title-->
											<div class="card-title">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-1 position-absolute ms-6">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search resumes" />
												</div>
												<!--end::Search-->
											</div>
											<!--begin::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Toolbar-->
												<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
													<!--begin::Filter-->
													<!--end::Filter-->
													<!--begin::Export-->
													
													<!--end::Export-->
													<!--begin::Add customer--><!--end::Add customer-->
												</div>
												<!--end::Toolbar-->
												<!--begin::Group actions-->
												<div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
													<div class="fw-bold me-5">
													<span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
													<button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
												</div>
												<!--end::Group actions-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
												<!--begin::Table head-->
												<thead>
													<!--begin::Table row-->
													<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
													<th class="min-w-40px">#</th>
														<th class="min-w-125px">Full Name</th>
														<th class="min-w-125px">Talent ID</th>
														<th class="min-w-125px">Position</th>
														<th class="min-w-125px">Email</th>


                                                        <th class="min-w-125px">Added By</th>
														<th class="min-w-125px">Actions</th>
													</tr>
													<!--end::Table row-->
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody >
                                                    @foreach($resumes as $list)
													<tr>
														<!--begin::Checkbox-->
														<td >{{ $loop->iteration }}</td>
														<!--end::Checkbox-->
														<!--begin::Name=-->
														<td>
															{{$list->fullname}}
														</td>
														<td>
															{{$list->talentid}}
														</td>
														<td>
															{{$list->designation}}
														</td>
														<td>
															{{$list->email}}
														</td>
                                                        <td>
															{{$list->added_by}}
														</td>
														<td>
														<a target="_blank" id="downloadlink" href="{{$list->resume}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Download Resume"><i class="fas fa-download"></i></a>&nbsp;&nbsp;

                                            <a class="" href="{{route('resume.edit',$list->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Resume"><i class="fa fa-edit" ></i></a>&nbsp;&nbsp;
                                                <a class="delete-color" data-id="{{$list->id}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"  href="javascript:void(0);" data-toggle="modal" data-target="#deleteModal" id="delete-user"><i class="fa fa-trash"></i></a>&nbsp;&nbsp;
                                         

														</td>
														
														<!--end::Date=-->
														<!--begin::Action=-->
														
														<!--end::Action=-->
													</tr>
                                                    @endforeach
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
									<!--begin::Modals-->
									<!--begin::Modal - Customers - Add-->
									<div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Form-->
												<form class="form"  method="post" id="kt_modal_add_customer_form" data-kt-redirect="{{route('users.index')}}">
													@csrf
                                                <!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_add_customer_header">
														<!--begin::Modal title-->
														<h2 class="fw-bold" id="modal-head">Add user</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
													<!--end::Modal header-->
													<!--begin::Modal body-->
													<div class="modal-body py-10 px-lg-17">
														<!--begin::Scroll-->
														<div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
															<!--begin::Input group-->
															<input type="hidden" name="mode" id="mode" value="add">
															<input type="hidden" name="listid" id="listid" value="">				
															
															<div class="row g-9 mb-8">
								<!--begin::Col-->
								<div class="col-md-6 fv-row fv-plugins-icon-container">
								<label class="required fs-6 fw-semibold mb-2">Full Name</label>
																<!--end::Label-->
																<!--begin::Input-->
								<input type="text" id="name" class="form-control form-control-solid" placeholder="Full Name" name="name" value="" >
									
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row fv-plugins-icon-container">
								<label class="required fs-6 fw-semibold mb-2">Email</label>
																<!--end::Label-->
																<!--begin::Input-->
								<input type="email" id="email" class="form-control form-control-solid" placeholder="Email" name="email" value="" >
															
									<!--end::Input-->
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
								<!--end::Col-->
							</div>

							<div class="row g-9 mb-8">
								<!--begin::Col-->
								<div class="col-md-6 fv-row fv-plugins-icon-container">
								<label class="fs-6 fw-semibold mb-2">Phone No</label>
																<!--end::Label-->
																<!--begin::Input-->
								<input type="text" id="phone" class="form-control form-control-solid" placeholder="Phone No" name="phone" value="" >
									
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row fv-plugins-icon-container">
								<label class="required fs-6 fw-semibold mb-2">Password</label>
																<!--end::Label-->
																<!--begin::Input-->
								<input type="text" name="password" id="password" class="form-control form-control-solid" placeholder="Password"  value="" >
															
									<!--end::Input-->
								<div class="fv-plugins-message-container invalid-feedback"></div></div>
								<!--end::Col-->
							</div>

							<div class="form-check form-check-custom form-check-solid">
    <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="is_admin"/>
    <label class="form-check-label" for="flexCheckDefault">
        Is Admin
    </label>
</div>
<br><br>
															


															<!--end::Input group-->
															<!--begin::Input group-->
															<!--end::Input group-->
															<!--begin::Input group-->
															<!--end::Input group-->
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
														<button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">Discard</button>
														<!--end::Button-->
														<!--begin::Button-->
														<button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
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
<!-- permisiion start -->
									<div class="modal fade" id="kt_modal_add_permission" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Form-->
												<form class="form"  method="post" id="kt_modal_add_permission_form" data-kt-redirect="{{route('users.index')}}">
													@csrf
                                                <!--begin::Modal header-->
													<div class="modal-header" id="kt_modal_add_permission_header">
														<!--begin::Modal title-->
														<h2 class="fw-bold" id="modal-head">Add Permission</h2>
														<!--end::Modal title-->
														<!--begin::Close-->
														<div id="kt_modal_add_permission_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
													<!--end::Modal header-->
													<!--begin::Modal body-->
													<div class="modal-body py-10 px-lg-17">
														<!--begin::Scroll-->
														<div class="scroll-y me-n7 pe-7" id="kt_modal_add_permission_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_permission_header" data-kt-scroll-wrappers="#kt_modal_add_permission_scroll" data-kt-scroll-offset="300px">
															<!--begin::Input group-->
															<input type="hidden" name="user_id" id="user_id" value="">				
															
														

								<!--end::Col-->
				

					
							<div class="d-flex">
                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input"  type="checkbox" value="1" id="flexCheckDefault1" name="hashroot_p">
                                                            <span class="form-check-label">
															HashRoot-P
                                                            </span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault2" name="hashroot_s">
                                                            <span class="form-check-label">
															HashRoot-S
                                                            </span>
                                                        </label>
                                                        <!--end::Checkbox-->

                                                        <!--begin::Checkbox-->
                                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault3" name="hashroot_ss">
                                                            <span class="form-check-label">
															HashRoot-SS
                                                            </span>
                                                        </label>
                                                        <!--end::Checkbox-->

													
                                                    </div>
<br>

													<div class="d-flex">
												
													<label class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault4" name="hashroot">
                                                            <span class="form-check-label">
															HashRoot
                                                            </span>
                                                        </label>
                                                        <!--end::Checkbox-->
                                                    </div>

















							
															<!--end::Input group-->
															<!--begin::Input group-->
															<!--end::Input group-->
															<!--begin::Input group-->
															<!--end::Input group-->
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
														<button type="reset" id="kt_modal_add_permission_cancel" class="btn btn-light me-3">Discard</button>
														<!--end::Button-->
														<!--begin::Button-->
														<button type="submit" id="kt_modal_add_permission_submit" class="btn btn-primary">
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
									<!--end::Modal - Customers - Add-->
									<!--begin::Modal - Adjust Balance-->
									<div class="modal fade" id="kt_customers_export_modal" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-650px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bold">Export Customers</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div id="kt_customers_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
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
												<!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
													<!--begin::Form-->
													<form id="kt_customers_export_form" class="form" action="#">
														<!--begin::Input group-->
														<div class="fv-row mb-10">
															<!--begin::Label-->
															<label class="fs-5 fw-semibold form-label mb-5">Select Export Format:</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select data-control="select2" data-placeholder="Select a format" data-hide-search="true" name="format" class="form-select form-select-solid">
																<option value="excell">Excel</option>
																<option value="pdf">PDF</option>
																<option value="cvs">CVS</option>
																<option value="zip">ZIP</option>
															</select>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-10">
															<!--begin::Label-->
															<label class="fs-5 fw-semibold form-label mb-5">Select Date Range:</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="Pick a date" name="date" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Row-->
														<div class="row fv-row mb-15">
															<!--begin::Label-->
															<label class="fs-5 fw-semibold form-label mb-5">Payment Type:</label>
															<!--end::Label-->
															<!--begin::Radio group-->
															<div class="d-flex flex-column">
																<!--begin::Radio button-->
																<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
																	<input class="form-check-input" type="checkbox" value="1" checked="checked" name="payment_type" />
																	<span class="form-check-label text-gray-600 fw-semibold">All</span>
																</label>
																<!--end::Radio button-->
																<!--begin::Radio button-->
																<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
																	<input class="form-check-input" type="checkbox" value="2" checked="checked" name="payment_type" />
																	<span class="form-check-label text-gray-600 fw-semibold">Visa</span>
																</label>
																<!--end::Radio button-->
																<!--begin::Radio button-->
																<label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
																	<input class="form-check-input" type="checkbox" value="3" name="payment_type" />
																	<span class="form-check-label text-gray-600 fw-semibold">Mastercard</span>
																</label>
																<!--end::Radio button-->
																<!--begin::Radio button-->
																<label class="form-check form-check-custom form-check-sm form-check-solid">
																	<input class="form-check-input" type="checkbox" value="4" name="payment_type" />
																	<span class="form-check-label text-gray-600 fw-semibold">American Express</span>
																</label>
																<!--end::Radio button-->
															</div>
															<!--end::Input group-->
														</div>
														<!--end::Row-->
														<!--begin::Actions-->
														<div class="text-center">
															<button type="reset" id="kt_customers_export_cancel" class="btn btn-light me-3">Discard</button>
															<button type="submit" id="kt_customers_export_submit" class="btn btn-primary">
																<span class="indicator-label">Submit</span>
																<span class="indicator-progress">Please wait...
																<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
															</button>
														</div>
														<!--end::Actions-->
													</form>
													<!--end::Form-->
												</div>
												<!--end::Modal body-->
											</div>
											<!--end::Modal content-->
										</div>
										<!--end::Modal dialog-->
									</div>
									<!--end::Modal - New Card-->
									<!--end::Modals-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
                        @endsection
                        @section('js')
                        <!--begin::Vendors Javascript(used by this page)-->
		<script src="{{asset('assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used by this page)-->
		
		<script src="{{asset('assets/js/custom/apps/master/category/add.js')}}"></script>
		<script src="{{asset('assets/js/custom/apps/ecommerce/customers/listing/export.js')}}"></script>
		<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
		<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

        <script>
             
var KTModalCustomersAdd = function() {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    var t, e, o, n, r, i;
    return {
        init: function() {
            i = new bootstrap.Modal(document.querySelector("#kt_modal_add_customer")), r = document.querySelector("#kt_modal_add_customer_form"), 
            t = r.querySelector("#kt_modal_add_customer_submit"), e = r.querySelector("#kt_modal_add_customer_cancel"), 
            o = r.querySelector("#kt_modal_add_customer_close"), n = FormValidation.formValidation(r, {
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: "Email is required"
                            }
                        }
                    },
					name: {
                        validators: {
                            notEmpty: {
                                message: "Full Name is required"
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
						var id = document.getElementById("listid").value;

						if(document.getElementById("mode").value == 'add') {
						

							var urll = "{{ route('users.store') }}";
							var text = "Form has been successfully submitted!";
							var type = 'post';
						} else if(document.getElementById("mode").value == 'edit') {
							var urll = "{{ route('users.update', ":id") }}";
    						urll = urll.replace(':id', id);
							var text = "Form has been successfully updated!";
							var type = 'put';
						}
                    $.ajax({
                        type: type,
                        url: urll,
                        data: $('#kt_modal_add_customer_form').serialize(),
                        success: function (result) {
                            Swal.fire({
                                text: text,
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
                            if(result.responseJSON.errors.email) {
								var err = result.responseJSON.errors.email[0];
							} else {
								var err = result.responseJSON.message;
							}
                            Swal.fire({
                                      text: err,
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, got it!",
                                      customClass: { confirmButton: "btn btn-primary" },
                                  });
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
                t.preventDefault();
				console.log('fgh');
                $('#kt_modal_add_customer').modal('hide');
                //$("#kt_modal_add_customer_form").trigger("reset");
                document.getElementById("kt_modal_add_customer_form").reset();
            }), o.addEventListener("click", function(t) {
                t.preventDefault();
				console.log('fgh');
                $('#kt_modal_add_customer').modal('hide');
                //$("#kt_modal_add_customer_form").trigger("reset");
                document.getElementById("kt_modal_add_customer_form").reset();
            });
        }
    };
}();

KTUtil.onDOMContentLoaded(function() {
    KTModalCustomersAdd.init();
});

var KTCustomersList = (function () {
    i = new bootstrap.Modal(document.querySelector("#kt_modal_add_customer")), r = document.querySelector("#kt_modal_add_customer_form"), 
            t = r.querySelector("#kt_modal_add_customer_submit")
    var t,
        e,
        o = () => {
            e.querySelectorAll('[data-kt-customer-table-filter="delete_row"]').forEach((e) => {
                e.addEventListener("click", function (e) {
                    e.preventDefault();
                    var id = $(this).attr("data-id");
                    const o = e.target.closest("tr"),
                        n = o.querySelectorAll("td")[1].innerText;
						var url22 = "{{ route('users.delete', ":id") }}";
                       url22 = url.replace(':id', id);
                    Swal.fire({
                        text: "Are you sure you want to delete " + n + "?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: { confirmButton: "btn fw-bold btn-danger", cancelButton: "btn fw-bold btn-active-light-primary" },
                    }).then(function (e) {
                        if(e.value) {
                            $.ajax({
                            url: "users/"+id,
                            type: 'DELETE',
    dataType: 'json',
    data:{
        'id': id,
        '_token': '{{ csrf_token() }}',
    },
    success: function(result) {
        Swal.fire({
                                text: "Deleted successfully!",
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
    error: function(request,msg,error) {
        // handle failure
    }      
                        });
                        } else {
                            Swal.fire({ text: n + " was not deleted.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn fw-bold btn-primary" } });
                        }
                        
                    });
                });
            });
        },
        n = () => {
            const o = e.querySelectorAll('[type="checkbox"]'),
                n = document.querySelector('[data-kt-customer-table-select="delete_selected"]');
            o.forEach((t) => {
                t.addEventListener("click", function () {
                    setTimeout(function () {
                        c();
                    }, 50);
                });
            }),
                n.addEventListener("click", function () {
                    Swal.fire({
                        text: "Are you sure you want to delete selected users?",
                        icon: "warning",
                        showCancelButton: !0,
                        buttonsStyling: !1,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: { confirmButton: "btn fw-bold btn-danger", cancelButton: "btn fw-bold btn-active-light-primary" },
                    }).then(function (n) {
                        if(n.value) {
							var values = new Array();
$.each($("input[name='deleteArray[]']:checked"), function() {
  values.push($(this).val());
  // or you can do something to the actual checked checkboxes by working directly with  'this'
  // something like $(this).hide() (only something useful, probably) :P
});
                                      
                            $.ajax({
                            url: "{{route('users.massdelete')}}",
                            type: 'POST',
    dataType: 'json',
    data:{
        'ids': values,
        '_token': '{{ csrf_token() }}',
    },
    success: function(result) {
        Swal.fire({
                                text: "You have deleted all selected users!.",
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
    error: function(request,msg,error) {
        // handle failure
    }      
                        });
                        } else {
                            Swal.fire({ text: "Selected users was not deleted.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn fw-bold btn-primary" } });
                        }
                    });
                });
        };
    const c = () => {
        const t = document.querySelector('[data-kt-customer-table-toolbar="base"]'),
            o = document.querySelector('[data-kt-customer-table-toolbar="selected"]'),
            n = document.querySelector('[data-kt-customer-table-select="selected_count"]'),
            c = e.querySelectorAll('tbody [type="checkbox"]');
        let r = !1,
            l = 0;
        c.forEach((t) => {
            t.checked && ((r = !0), l++);
        }),
            r ? ((n.innerHTML = l), t.classList.add("d-none"), o.classList.remove("d-none")) : (t.classList.remove("d-none"), o.classList.add("d-none"));
    };
    return {
        init: function () {
            (e = document.querySelector("#kt_customers_table")) &&
                (e.querySelectorAll("tbody tr").forEach((t) => {
                    const e = t.querySelectorAll("td"),
                        o = moment(e[2].innerHTML, "DD MMM YYYY, LT").format();
                    e[2].setAttribute("data-order", o);
                }),
                (t = $(e).DataTable({
                    info: !1,
                    order: [],
                    columnDefs: [
                        { orderable: !1, targets: 0 },
                        { orderable: !1, targets: 4 },
                    ],
                })).on("draw", function () {
                    n(), o(), c();
                }),
                n(),
                document.querySelector('[data-kt-customer-table-filter="search"]').addEventListener("keyup", function (e) {
                    t.search(e.target.value).draw();
                }),
                o(),
                (() => {
                    const e = document.querySelector('[data-kt-ecommerce-order-filter="status"]');
                    $(e).on("change", (e) => {
                        let o = e.target.value;
                        "all" === o && (o = ""), t.column(3).search(o).draw();
                    });
                })());
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTCustomersList.init();
});
function editBox(id) {
	var url = "{{ route('users.edit', ":id") }}";
    url = url.replace(':id', id);
	$.ajax({
		
                            url: url,
                            type: 'GET',
    dataType: 'json',
    data:{
        '_token': '{{ csrf_token() }}',
    },
    success: function(result) {
        console.log(result.data);
		$('#kt_modal_add_customer_form').trigger("reset");

		$("#modal-head").text("Edit User");
		$("#phone").val(result.data.phone);
		$("#email").val(result.data.email);
		$("#name").val(result.data.username);
	// 	if(result.data.hashroot){
	// 	$('#flexCheckDefault41').prop('checked', true);

	// }
		
	// if(result.data.hashroot_p){
	// 	$('#flexCheckDefault11').prop('checked', true);

	// }
	// if(result.data.hashroot_s){
	// 	$('#flexCheckDefault21').prop('checked', true);

	// }
	// if(result.data.hashroot_ss){
	// 	$('#flexCheckDefault31').prop('checked', true);

	// }
	if(result.data.role){
		$('#flexCheckDefault').prop('checked', true);

	}
		
		$("#mode").val('edit');
		$("#listid").val(id);
    },
    error: function(request,msg,error) {
        // handle failure
    }      
                        });
	$("#kt_modal_add_customer").modal('show');
}

function resetFn(){
	$('#kt_modal_add_customer_form').trigger("reset");
	document.getElementById('kt_modal_add_customer_form').reset();
	$("#mode").val('add');
		$("#listid").val("");
	$("#modal-head").text("Add User");

}




	 $(document).on('click','#delete-user',function(){
      event.preventDefault();
	  var job_ids = $(this).data('id');
      const url = 'resume/delete/'+job_ids;
	  new swal({
                title: 'Are you sure?',
                text: "Are you sure you want to delete selected resume?",
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
                }).then(function(value) {
                if (value) {
                window.location.href = url;
                }
            });     
    
     });

	 function permissionBox(id) {

		$("#kt_modal_add_permission").modal('show');

		var url = "{{ route('users.edit', ":id") }}";
    url = url.replace(':id', id);
	$.ajax({
		
                            url: url,
                            type: 'GET',
    dataType: 'json',
    data:{
        '_token': '{{ csrf_token() }}',
    },
    success: function(result) {
        console.log(result.data);
		$('#user_id').val(id);
	if(result.data.hashroot){
		$('#flexCheckDefault4').prop('checked', true);

	}
		
	if(result.data.hashroot_p){
		$('#flexCheckDefault1').prop('checked', true);

	}
	if(result.data.hashroot_s){
		$('#flexCheckDefault2').prop('checked', true);

	}
	if(result.data.hashroot_ss){
		$('#flexCheckDefault3').prop('checked', true);

	}
    },
    error: function(request,msg,error) {
        // handle failure
    }      
                        });

	 }

	 var KTModalPermissionAdd = function() {
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    var t, e, o, n, r, i;
    return {
        init: function() {
            i = new bootstrap.Modal(document.querySelector("#kt_modal_add_permission")), r = document.querySelector("#kt_modal_add_permission_form"), 
            t = r.querySelector("#kt_modal_add_permission_submit"), e = r.querySelector("#kt_modal_add_permission_cancel"), 
            o = r.querySelector("#kt_modal_add_permission_close"), n = FormValidation.formValidation(r, {
              
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
						var id = document.getElementById("user_id").value;

					
						

							var urll = "{{ route('users.permission') }}";
							var text = "Form has been successfully submitted!";
							var type = 'post';
						
                    $.ajax({
                        type: type,
                        url: urll,
                        data: $('#kt_modal_add_permission_form').serialize(),
                        success: function (result) {
                            Swal.fire({
                                text: text,
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
                            if(result.responseJSON.errors.email) {
								var err = result.responseJSON.errors.email[0];
							} else {
								var err = result.responseJSON.message;
							}
                            Swal.fire({
                                      text: err,
                                      icon: "error",
                                      buttonsStyling: !1,
                                      confirmButtonText: "Ok, got it!",
                                      customClass: { confirmButton: "btn btn-primary" },
                                  });
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
                t.preventDefault();
				console.log('fgh');
                $('#kt_modal_add_permission').modal('hide');
                //$("#kt_modal_add_customer_form").trigger("reset");
                document.getElementById("kt_modal_add_permission_form").reset();
            }), o.addEventListener("click", function(t) {
                t.preventDefault();

				console.log('fgh');
                $('#kt_modal_add_permission').modal('hide');
                //$("#kt_modal_add_customer_form").trigger("reset");
                document.getElementById("kt_modal_add_permission_form").reset();
            });
        }
    };
}();

KTUtil.onDOMContentLoaded(function() {
    KTModalPermissionAdd.init();
});


            </script>
		<!--end::Custom Javascript-->
                        @endsection
