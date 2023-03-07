		@extends('layouts.recruiter_layout')
		@section('css')
		@endsection
		@section('content')

		<style>


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
		</style>
		<div class="d-flex flex-column flex-column-fluid">
									<!--begin::Toolbar-->
									<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
										<!--begin::Toolbar container-->
										<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
											<!--begin::Page title-->
											<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
												<!--begin::Title-->
												<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Talents Status</h1>
												<!--end::Title-->
												<!--begin::Breadcrumb-->
												<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
													<!--begin::Item-->
													<li class="breadcrumb-item text-muted">
														<a href="/recruiter/dashboard" class="text-muted text-hover-primary">Home</a>
													</li>
													<!--end::Item-->
													<!--begin::Item-->
													<li class="breadcrumb-item">
														<span class="bullet bg-gray-400 w-5px h-2px"></span>
													</li>
													<li class="breadcrumb-item text-muted">Talents Status</li>
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
													<!-- <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"> -->
													<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
													<!-- <span class="svg-icon svg-icon-6 svg-icon-muted me-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
														</svg>
													</span> -->
													<!--end::Svg Icon-->
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
											<!--begin::Card-->
											<div class="card">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-6">
													<!--begin::Card title-->
													<div class="card-title">
														<!--begin::Search-->
														<div class="d-flex align-items-center position-relative my-1">
															<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
															
															<!--end::Svg Icon-->
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
															<!-- <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_customers_export_modal">
														begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
															
															<!--end::Export-->
															<!--begin::Add customer-->
															<div class="w-150px me-3">
																<!--begin::Select2-->
																
																<!--end::Select2-->
															</div>
															<div class="w-150px me-3">
																<!--begin::Select2-->
																
																<!--end::Select2-->
															</div>
															<!--end::Add customer-->
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
																
																
															<th >#</th>
																<th >SHORTLISTED</th>
																<th >SELECTED</th>
																<th >JOINED</th>
																<th> SCHEDULED</th>
																<th> DIDN'T APPEAR</th>
																<th >REJECTED</th>
																<th>DECLINED</th>
																<th> DISCONTINUED</th>
															
															

														
															</tr>
														
															<!--end::Table row-->
														</thead>
														<!-- <tfoot>

													</tfoot> -->
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody class="fw-semibold text-gray-600">
													
															<!--end::Checkbox-->
																	
																<!--begin::Checkbox-->
														@for ($i =0; $i <$table ; $i++)
														<tr>
															<?php $k=0;?>
	@if( isset($talents_shortlisted[$i]) ||  isset($talents_selected[$i]) || isset($talents_scheduled[$i]) || isset($talents_noappear[$i]) || isset($talents_rejected[$i]) || isset($talents_declined[$i]) || isset($talents_discontinued[$i]) ||  isset($talents_joined[$i]) ) <td> {{$j++}}</td>@endif
														
																


		@if( isset($talents_shortlisted[$i])) 
		<td class="text-gray-800 text-hover-primary fs-5 fw-bold">
		<a  class="text-gray-800 text-hover-primary fs-5 fw-bold" href="{{route('talents.list', ['id'  =>  $talents_shortlisted[$i]['id']])}}"> {{$talents_shortlisted[$i]['talent_id'] }}</a>					

		</td>

		<?php $k++;?>	
		@else
		<td class="text-gray-800 text-hover-primary fs-5 fw-bold">

		</td>
		@endif														
		@if( isset($talents_selected[$i])) 
		<td class="text-gray-800 text-hover-primary fs-5 fw-bold">
		<a class="text-gray-800 text-hover-primary fs-5 fw-bold" href="{{route('talents.list', ['id'  =>  $talents_selected[$i]['id']])}}"> {{$talents_selected[$i]['talent_id'] }}</a>					
		</td>

		<?php $k++;?>
		@else
		<td>

		</td>
		@endif													
		@if( isset($talents_joined[$i])) 
		<td class="text-gray-800 text-hover-primary fs-5 fw-bold">
		<a class="text-gray-800 text-hover-primary fs-5 fw-bold" href="{{route('talents.list', ['id'  =>  $talents_joined[$i]['id']])}}"> {{$talents_joined[$i]['talent_id'] }}</a>					
		</td>

		<?php $k++;?>
		@else
		<td>

		</td>
		@endif		
		@if( isset($talents_scheduled[$i])) 
		<td class="text-gray-800 text-hover-primary fs-5 fw-bold">
		<a class="text-gray-800 text-hover-primary fs-5 fw-bold" href="{{route('talents.list', ['id'  =>  $talents_scheduled[$i]['id']])}}"> {{$talents_scheduled[$i]['talent_id'] }}</a>					
		</td>

		<?php $k++;?>
		@else
		<td>

		</td>
		@endif		
		@if( isset($talents_noappear[$i])) 
		<td class="text-gray-800 text-hover-primary fs-5 fw-bold">
		<a class="text-gray-800 text-hover-primary fs-5 fw-bold" href="{{route('talents.list', ['id'  =>  $talents_noappear[$i]['id']])}}"> {{$talents_noappear[$i]['talent_id'] }}</a>					
		</td>

		<?php $k++;?>	
		@else
		<td>

		</td>
		@endif		
		@if( isset($talents_rejected[$i])) 
		<td class="text-gray-800 text-hover-primary fs-5 fw-bold">
		<a class="text-gray-800 text-hover-primary fs-5 fw-bold" href="{{route('talents.list', ['id'  =>  $talents_rejected[$i]['id']])}}"> {{$talents_rejected[$i]['talent_id'] }}</a>					
		</td>

		<?php $k++;?>	
		@else
		<td>

		</td>
		@endif		

		@if( isset($talents_declined[$i])) 
		<td class="text-gray-800 text-hover-primary fs-5 fw-bold">
		<a class="text-gray-800 text-hover-primary fs-5 fw-bold" href="{{route('talents.list', ['id'  =>  $talents_declined[$i]['id']])}}"> {{$talents_declined[$i]['talent_id'] }}</a>					
		</td>

		<?php $k++;?>
		@else
		<td>

		</td>
		@endif	
		@if( isset($talents_discontinued[$i])) 
		<td class="text-gray-800 text-hover-primary fs-5 fw-bold">
		<a class="text-gray-800 text-hover-primary fs-5 fw-bold" href="{{route('talents.list', ['id'  =>  $talents_discontinued[$i]['id']])}}"> {{$talents_discontinued[$i]['talent_id'] }}</a>					
		</td>

		<?php $k++;?>	
		@else
		<td>

		</td>
		@endif		
														</tr>
														
														@endfor		
														
															
															
														
														
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
				<script src="{{asset('assets/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>

				<script src="{{asset('assets/js/custom/apps/master/category/add.js')}}"></script>
				<script src="{{asset('assets/js/custom/apps/ecommerce/customers/listing/export.js')}}"></script>
				<script src="{{asset('assets/js/widgets.bundle.js')}}"></script>
				<script src="{{asset('assets/js/custom/widgets.js')}}"></script>
				<script src="{{asset('assets/js/custom/apps/chat/chat.js')}}"></script>
				<script src="{{asset('assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
				<script src="{{asset('assets/js/custom/utilities/modals/create-app.js')}}"></script>
				<script src="{{asset('assets/js/custom/utilities/modals/users-search.js')}}"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
				<link href="{{asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css"/>
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
								data: $('#kt_modal_add_customer_form').serialize(),
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
									url: "/job/close/"+id,
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
								text: "Are you sure you want to delete selected jobs?",
								icon: "warning",
								showCancelButton: !0,
								buttonsStyling: !1,
								confirmButtonText: "Yes, delete!",
								cancelButtonText: "No, cancel",
								customClass: { confirmButton: "btn fw-bold btn-danger", cancelButton: "btn fw-bold btn-active-light-primary" },
							}).then(function (n) {
								n.value
									? Swal.fire({ text: "You have deleted all selected jobs!.", icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn fw-bold btn-primary" } }).then(
										function () {
											o.forEach((e) => {
												e.checked &&
													t
														.row($(e.closest("tbody tr")))
														.remove()
														.draw();
											});
											e.querySelectorAll('[type="checkbox"]')[0].checked = !1;
										}
									)
									: "cancel" === n.dismiss &&
									Swal.fire({ text: "Selected customers was not deleted.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn fw-bold btn-primary" } });
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
								o = moment(e[6].innerHTML, "DD MMM YYYY, LT").format();
							e[2].setAttribute("data-order", o);
						}),
						(t = $(e).DataTable({
							info: !1,
							order: [],
							columnDefs: [
			{ "searchable": false, "targets": [0,1,6,7] }
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
							const e = document.querySelector('[data-kt-job-order-filter="status"]');
							const k = document.querySelector('[data-kt-job-order-filter="category"]');
							$(k).on("change", (k) => {
								let o = k.target.value;
						
								"all" === o && (o = ""), t.column(4).search(o).draw();
							});
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




		</script>






				<!--end::Custom Javascript-->
		@endsection
