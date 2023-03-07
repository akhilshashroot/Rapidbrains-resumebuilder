@extends('layouts.recruiter_layout')
@section('content')

<style>
    .btn1 {
        background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 11px 17px;
    cursor: pointer;
    font-size: 11px;
}
.form-control-s{
		background-color: #dfdfdf;
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
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Talent Profile</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										
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
											<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_62cfa2e9670f0">
												<!--begin::Header-->
												
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
															<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_62cfa2e9670f0" data-allow-clear="true">
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
									<!--begin::Layout-->
									<div class="d-flex flex-column flex-xl-row">
										<!--begin::Sidebar-->
										<div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
											<!--begin::Card-->
											<div class="card mb-5 mb-xl-8">
												<!--begin::Card body-->
												<div class="card-body pt-15">
													<!--begin::Summary-->
													<div class="d-flex flex-center flex-column mb-5">
														<!--begin::Avatar-->
														<div class="symbol symbol-150px symbol-circle mb-7">
															<img src="{{asset('assets/media/avatars/300-1.jpg')}}" alt="image" />
														</div>
														<!--end::Avatar-->
														<!--begin::Name-->
														<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">{{$talents['name']}}</a>
														<!--end::Name-->
														<!--begin::Email-->
														<a href="#" class="fs-5 fw-semibold text-muted text-hover-primary mb-6">{{$talents['email']}}</a>
														<!--end::Email-->
													</div>
													<!--end::Summary-->
													<!--begin::Details toggle-->
													<div class="d-flex flex-stack fs-4 py-3">
														<div class="fw-bold">Details</div>
														<!--begin::Badge-->
														<!--begin::Badge-->
													</div>
													<!--end::Details toggle-->
													<div class="separator separator-dashed my-3"></div>
													<!--begin::Details content-->
													<div class="pb-5 fs-6">
														<!--begin::Details item-->
														<div class="fw-bold mt-5">Profile ID</div>
														<div class="text-gray-600">{{$talents['talent_id']}}</div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bold mt-5">Phone</div>
														<div class="text-gray-600">
															<a href="#" class="text-gray-600 text-hover-primary">{{$talents['phone']}}</a>
														</div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bold mt-5">Date of Birth</div>
														<div class="text-gray-600">{{$talents['dob']}}</div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bold mt-5">CTC</div>
														<div class="text-gray-600">{{$talents['ctc']}}</div>

														<div class="fw-bold mt-5">Status</div>
														<div class="badge badge-light-warning">{{$talents['status']}}</div>
														<!--begin::Details item-->
														<!--begin::Details item-->
														<div class="fw-bold mt-5">
                                                      @if($talents['resume'])  <a href="{{$talents['resume']}}" target="_blank" class="btn1">Download</a>@endif
                                                        </div>
														<!--begin::Details item-->
													</div>
													<!--end::Details content-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Card-->
										</div>
										<!--end::Sidebar-->
										<!--begin::Content-->
										<div class="flex-lg-row-fluid ms-lg-15">
											<!--begin:::Tabs-->
											<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
												<!--begin:::Tab item-->
												<li class="nav-item">
													<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_customer_overview">Comments</a>
												</li>
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<!-- <li class="nav-item">
													<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_customer_general">General Settings</a>
												</li> -->
												<!--end:::Tab item-->
												<!--begin:::Tab item-->
												<!-- <li class="nav-item">
													<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_customer_advanced">Advanced Settings</a>
												</li> -->
												<!--end:::Tab item-->
											</ul>
											<!--end:::Tabs-->
											<!--begin:::Tab content-->
											<div class="tab-content" id="myTabContent">
												<!--begin:::Tab pane-->
												<div class="tab-pane fade show active" id="kt_ecommerce_customer_overview" role="tabpanel">
													<div class="row row-cols-1 row-cols-md-2 mb-6 mb-xl-9">
														
													
													</div>
													<!--begin::Card-->
													<div class="card pt-4 mb-6 mb-xl-9">
														<!--begin::Card header-->
														<div class="card-header border-0">
															<!--begin::Card title-->
															
															<!--end::Card title-->
														</div>
														<!--end::Card header-->
														<!--begin::Card body-->
														<div class="card-body pt-0 pb-5">
															<!--begin::Table-->
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
														<div class="card">
											<!--begin::Card header-->
											<div class="card-header">
												<!--begin::Card header-->
												<div class="fs-3 fw-bold ss">Add Comment</div>
												<!--end::Card header-->
											</div>
											<form id="myForm" name="myForm" class="form-horizontal" novalidate="">
                                            @csrf
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body">
												
												<div class="row mb-8">
													<!--begin::Col-->
													<div class="col-xl-3">
														<div class="fs-6 fw-semibold mt-2 mb-3"></div>
													</div>
													<input type="hidden" name="talent_id" id="talent_id" value="{{$talents['id']}}" >
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-xl-9">
														<textarea name="comment"  id="comment" class="form-control form-control-s " rows="5"></textarea>
													</div>
													<!--end::Col-->
												</div>
												
											</div>
											<!--end::Card body-->
											<!--begin::Card footer-->
											<div class="card-footer d-flex justify-content-end py-6">
												<button type="submit" id="btn-save"  class="btn btn-primary">Add </button>
											</div>
</form>
											<!--end::Card footer-->
										</div>
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
																		<img alt="Pic" src="/metronic8/demo1/assets/media/avatars/300-1.jpg">
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
															<!--end::Table-->
														</div>
														<!--end::Card body-->
													</div>
													<!--end::Card-->
												</div>
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
											
												<!--end:::Tab pane-->
												<!--begin:::Tab pane-->
											
												<!--end:::Tab pane-->
											</div>
											<!--end:::Tab content-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Layout-->
									<!--begin::Modals-->
									<!--begin::Modal - New Address-->
							
									<!--end::Modal - New Address-->
									<!--begin::Modal - Update password-->
									
									<!--end::Modal - Update password-->
									<!--begin::Modal - Update email-->
								
									<!--end::Modal - Update email-->
									<!--begin::Modal - New Address-->
									
									<!--end::Modal - New Address-->
									<!--begin::Modal - Add task-->
								
									<!--end::Modal - Add task-->
									<!--begin::Modal - Add task-->
									
									<!--end::Modal - Add task-->
									<!--end::Modals-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->
						<!--begin::Footer-->
					

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
	  var talent_id = $('#talent_id').val();
	

      if(comment!=""){
        /*  $("#butsave").attr("disabled", "disabled"); */
          $.ajax({
              url: "{{route('talent.comment')}}",
              type: "POST",
              data: {
				_token: '{{csrf_token()}}',
				talent_id:talent_id,
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


</script>
@endsection