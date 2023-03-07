@extends('layouts.recruiter_layout')
@section('content')
<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Recruiter Dashboard</h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">Dashboards</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">
										<!--begin::Secondary button-->
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
								<div id="kt_app_content_container" class="app-container container-fluid">
									<!--begin::Row-->
									<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
										<!--begin::Col-->
									
										<!--end::Col-->
										<!--begin::Col-->
									

										<div class="row gy-5 g-xl-10">
    <!--begin::Col-->
    <div class="col-sm-6 col-xl-2 mb-xl-10">
        <!--begin::Card widget 2-->
        <div class="card h-lg-100">
            <!--begin::Body-->
            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                <!--begin::Icon-->
                <div class="m-0">
                    <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                    <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor"></path>
                            <path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Icon-->
                <!--begin::Section-->
                <div class="d-flex flex-column my-7">
                    <!--begin::Number-->
                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{$data['job']}}</span>
                    <!--end::Number-->
                    <!--begin::Follower-->
                    <div class="m-0">
                        <span class="fw-semibold fs-6 text-gray-400">Total Jobs</span>
                    </div>
                    <!--end::Follower-->
                </div>
                <!--end::Section-->
                <!--begin::Badge-->
                <span class="badge badge-light-success fs-base">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                
                <!--end::Svg Icon--></span>
                <!--end::Badge-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card widget 2-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-sm-6 col-xl-2 mb-xl-10">
        <!--begin::Card widget 2-->
        <div class="card h-lg-100">
            <!--begin::Body-->
            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                <!--begin::Icon-->
                <div class="m-0">
                    <!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
                    <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="currentColor"></path>
                            <path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Icon-->
                <!--begin::Section-->
                <div class="d-flex flex-column my-7">
                    <!--begin::Number-->
                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{$data['profile']}}</span>
                    <!--end::Number-->
                    <!--begin::Follower-->
                    <div class="m-0">
                        <span class="fw-semibold fs-6 text-gray-400">Total Profiles</span>
                    </div>
                    <!--end::Follower-->
                </div>
                <!--end::Section-->
                <!--begin::Badge-->
                <span class="badge badge-light-success fs-base">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
               </span>
                <!--end::Badge-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card widget 2-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-sm-6 col-xl-2 mb-xl-10">
        <!--begin::Card widget 2-->
        <div class="card h-lg-100">
            <!--begin::Body-->
            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                <!--begin::Icon-->
                <div class="m-0">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs048.svg-->
                    <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                            <path d="M8.70001 6C8.10001 5.7 7.39999 5.40001 6.79999 5.10001C7.79999 4.00001 8.90001 3 10.1 2.2C10.7 2.1 11.4 2 12 2C12.7 2 13.3 2.1 13.9 2.2C12 3.2 10.2 4.5 8.70001 6ZM12 8.39999C13.9 6.59999 16.2 5.30001 18.7 4.60001C18.1 4.00001 17.4 3.6 16.7 3.2C14.4 4.1 12.2 5.40001 10.5 7.10001C11 7.50001 11.5 7.89999 12 8.39999ZM7 20C7 20.2 7 20.4 7 20.6C6.2 20.1 5.49999 19.6 4.89999 19C4.59999 18 4.00001 17.2 3.20001 16.6C2.80001 15.8 2.49999 15 2.29999 14.1C4.99999 14.7 7 17.1 7 20ZM10.6 9.89999C8.70001 8.09999 6.39999 6.9 3.79999 6.3C3.39999 6.9 2.99999 7.5 2.79999 8.2C5.39999 8.6 7.7 9.80001 9.5 11.6C9.8 10.9 10.2 10.4 10.6 9.89999ZM2.20001 10.1C2.10001 10.7 2 11.4 2 12C2 12 2 12 2 12.1C4.3 12.4 6.40001 13.7 7.60001 15.6C7.80001 14.8 8.09999 14.1 8.39999 13.4C6.89999 11.6 4.70001 10.4 2.20001 10.1ZM11 20C11 14 15.4 9.00001 21.2 8.10001C20.9 7.40001 20.6 6.8 20.2 6.2C13.8 7.5 9 13.1 9 19.9C9 20.4 9.00001 21 9.10001 21.5C9.80001 21.7 10.5 21.8 11.2 21.9C11.1 21.3 11 20.7 11 20ZM19.1 19C19.4 18 20 17.2 20.8 16.6C21.2 15.8 21.5 15 21.7 14.1C19 14.7 16.9 17.1 16.9 20C16.9 20.2 16.9 20.4 16.9 20.6C17.8 20.2 18.5 19.6 19.1 19ZM15 20C15 15.9 18.1 12.6 22 12.1C22 12.1 22 12.1 22 12C22 11.3 21.9 10.7 21.8 10.1C16.8 10.7 13 14.9 13 20C13 20.7 13.1 21.3 13.2 21.9C13.9 21.8 14.5 21.7 15.2 21.5C15.1 21 15 20.5 15 20Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Icon-->
                <!--begin::Section-->
                <div class="d-flex flex-column my-7">
                    <!--begin::Number-->
                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{$data['selected']}}</span>
                    <!--end::Number-->
                    <!--begin::Follower-->
                    <div class="m-0">
                        <span class="fw-semibold fs-6 text-gray-400">Selected Profiles</span>
                    </div>
                    <!--end::Follower-->
                </div>
                <!--end::Section-->
                <!--begin::Badge-->
                <span class="badge badge-light-danger fs-base">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                </span>
                <!--end::Badge-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card widget 2-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-sm-6 col-xl-2 mb-xl-10">
        <!--begin::Card widget 2-->
        <div class="card h-lg-100">
            <!--begin::Body-->
            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                <!--begin::Icon-->
                <div class="m-0">
                    <!--begin::Svg Icon | path: icons/duotune/maps/map002.svg-->
                    <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.7 4.19995L4 6.30005V18.8999L8.7 16.8V19L3.1 21.5C2.6 21.7 2 21.4 2 20.8V6C2 5.4 2.3 4.89995 2.9 4.69995L8.7 2.09998V4.19995Z" fill="currentColor"></path>
                            <path d="M15.3 19.8L20 17.6999V5.09992L15.3 7.19989V4.99994L20.9 2.49994C21.4 2.29994 22 2.59989 22 3.19989V17.9999C22 18.5999 21.7 19.1 21.1 19.3L15.3 21.8998V19.8Z" fill="currentColor"></path>
                            <path opacity="0.3" d="M15.3 7.19995L20 5.09998V17.7L15.3 19.8V7.19995Z" fill="currentColor"></path>
                            <path opacity="0.3" d="M8.70001 4.19995V2L15.4 5V7.19995L8.70001 4.19995ZM8.70001 16.8V19L15.4 22V19.8L8.70001 16.8Z" fill="currentColor"></path>
                            <path opacity="0.3" d="M8.7 16.8L4 18.8999V6.30005L8.7 4.19995V16.8Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Icon-->
                <!--begin::Section-->
                <div class="d-flex flex-column my-7">
                    <!--begin::Number-->
                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{$data['joined']}}</span>
                    <!--end::Number-->
                    <!--begin::Follower-->
                    <div class="m-0">
                        <span class="fw-semibold fs-6 text-gray-400">Joined Profiles</span>
                    </div>
                    <!--end::Follower-->
                </div>
                <!--end::Section-->
                <!--begin::Badge-->
                <span class="badge badge-light-success fs-base">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                
                <!--end::Badge-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card widget 2-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
        <!--begin::Card widget 2-->
        <div class="card h-lg-100">
            <!--begin::Body-->
            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                <!--begin::Icon-->
                <div class="m-0">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs037.svg-->
                    <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M2.10001 10C3.00001 5.6 6.69998 2.3 11.2 2L8.79999 4.39999L11.1 7C9.60001 7.3 8.30001 8.19999 7.60001 9.59999L4.5 12.4L2.10001 10ZM19.3 11.5L16.4 14C15.7 15.5 14.4 16.6 12.7 16.9L15 19.5L12.6 21.9C17.1 21.6 20.8 18.2 21.7 13.9L19.3 11.5Z" fill="currentColor"></path>
                            <path d="M13.8 2.09998C18.2 2.99998 21.5 6.69998 21.8 11.2L19.4 8.79997L16.8 11C16.5 9.39998 15.5 8.09998 14 7.39998L11.4 4.39998L13.8 2.09998ZM12.3 19.4L9.69998 16.4C8.29998 15.7 7.3 14.4 7 12.8L4.39999 15.1L2 12.7C2.3 17.2 5.7 20.9 10 21.8L12.3 19.4Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Icon-->
                <!--begin::Section-->
                <div class="d-flex flex-column my-7">
                    <!--begin::Number-->
                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{$data['scheduled']}}</span>
                    <!--end::Number-->
                    <!--begin::Follower-->
                    <div class="m-0">
                        <span class="fw-semibold fs-6 text-gray-400">Scheduled Interviews</span>
                    </div>
                    <!--end::Follower-->
                </div>
                <!--end::Section-->
                <!--begin::Badge-->
                <span class="badge badge-light-danger fs-base">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                
                <!--end::Badge-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card widget 2-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">
        <!--begin::Card widget 2-->
        <div class="card h-lg-100">
            <!--begin::Body-->
            <div class="card-body d-flex justify-content-between align-items-start flex-column">
                <!--begin::Icon-->
                <div class="m-0">
                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                    <span class="svg-icon svg-icon-2hx svg-icon-gray-600">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor"></path>
                            <path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Icon-->
                <!--begin::Section-->
                <div class="d-flex flex-column my-7">
                    <!--begin::Number-->
                    <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{$data['pending']}}</span>
                    <!--end::Number-->
                    <!--begin::Follower-->
                    <div class="m-0">
                        <span class="fw-semibold fs-6 text-gray-400">  Pending Interviews</span>
                    </div>
                    <!--end::Follower-->
                </div>
                <!--end::Section-->
                <!--begin::Badge-->
                <span class="badge badge-light-success fs-base">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                
                <!--end::Badge-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card widget 2-->
    </div>
    <!--end::Col-->
</div>


















										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
											<!--begin::Timeline widget 3-->
											<div class="card h-md-100">
												<!--begin::Header-->
												<div class="card-header border-0 pt-5">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-dark">What’s up Today</span>
													</h3>
													<!--begin::Toolbar-->
													<div class="card-toolbar">
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body pt-7 px-0">
													<!--begin::Nav-->
													<ul class="nav nav-stretch nav-pills nav-pills-custom nav-pills-active-custom d-flex justify-content-between mb-8 px-5" role="tablist">
														<!--begin::Nav item-->
														@foreach($date_array as $date_arra)
														<li class="nav-item p-0 ms-0" role="presentation">
															<!--begin::Date-->
															<a @if( $date_arra['tab_id']==1) class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger active" @else  class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px py-4 px-3 btn-active-danger" @endif data-bs-toggle="tab" href="{{$date_arra['tab_date']}}" aria-selected="false" tabindex="-1" role="tab">
																<span class="fs-7 fw-semibold">{{$date_arra['day']}}</span>
																<span class="fs-6 fw-bold">{{$date_arra['date']}}</span>
															</a>
															<!--end::Date-->
														</li>
														@endforeach
														<!--end::Nav item-->
														<!--begin::Nav item-->
														
														<!--end::Nav item-->
													</ul>
													<!--end::Nav-->
													<!--begin::Tab Content (ishlamayabdi)-->
													<div class="tab-content mb-2 px-9">
														<!--begin::Tap pane-->
													
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_1" role="tabpanel">
															<!--begin::Wrapper-->
															@foreach($data_array as $data_arra)
															@if($data_arra['tab']=='kt_timeline_widget_3_tab_content_1')
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">{{$data_arra['time']}}
																	<span class="text-gray-400 fw-semibold fs-7">{{$data_arra['am']}}</span>
																	</div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">{{$data_arra['position']}}</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Talent Name  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['name']}}</a>
																	</div>
																	<div class="text-gray-400 fw-semibold fs-7">Talent ID  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['talent_id']}}</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="btn btn-sm btn-light" >View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
														   @endif
														   @endforeach
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_2" role="tabpanel">
															<!--begin::Wrapper-->
															@foreach($data_array as $data_arra)
															@if($data_arra['tab']=='kt_timeline_widget_3_tab_content_2')
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">{{$data_arra['time']}}
																	<span class="text-gray-400 fw-semibold fs-7">{{$data_arra['am']}}</span>
																	</div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">{{$data_arra['position']}}</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Talent Name  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['name']}}</a>
																	</div>
																	<div class="text-gray-400 fw-semibold fs-7">Talent ID  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['talent_id']}}</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="btn btn-sm btn-light" >View</a>
																<!--end::Action-->
															</div>
															<!--end::Wrapper-->
														   @endif
														   @endforeach
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
														
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_3" role="tabpanel">
															<!--begin::Wrapper-->
															@foreach($data_array as $data_arra)
															@if($data_arra['tab']=="kt_timeline_widget_3_tab_content_3")
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">{{$data_arra['time']}}
																	<span class="text-gray-400 fw-semibold fs-7">{{$data_arra['am']}}</span>
																	</div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">{{$data_arra['position']}}</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Talent Name  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['name']}}</a>
																	</div>
																	<div class="text-gray-400 fw-semibold fs-7">Talent ID  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['talent_id']}}</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="btn btn-sm btn-light" >View</a>
																
															</div>
															<!--end::Wrapper-->
														   @endif
														   @endforeach
															<!--end::Wrapper-->
															<!--begin::Wrapper-->
														
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade show active" id="kt_timeline_widget_3_tab_content_4" role="tabpanel">
															<!--begin::Wrapper-->
															@foreach($data_array as $data_arra)
															@if($data_arra['tab']=='kt_timeline_widget_3_tab_content_4')
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">{{$data_arra['time']}}
																	<span class="text-gray-400 fw-semibold fs-7">{{$data_arra['am']}}</span>
																	</div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">{{$data_arra['position']}}</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Talent Name  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['name']}}</a>
																	</div>
																	<div class="text-gray-400 fw-semibold fs-7">Talent ID  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['talent_id']}}</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="btn btn-sm btn-light" >View</a>
																
															</div>
															<!--end::Wrapper-->
														   @endif
														   @endforeach
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_5" role="tabpanel">
															<!--begin::Wrapper-->
															@foreach($data_array as $data_arra)
															@if($data_arra['tab']=='kt_timeline_widget_3_tab_content_5')
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">{{$data_arra['time']}}
																	<span class="text-gray-400 fw-semibold fs-7">{{$data_arra['am']}}</span>
																	</div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">{{$data_arra['position']}}</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Talent Name  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['name']}}</a>
																	</div>
																	<div class="text-gray-400 fw-semibold fs-7">Talent ID  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['talent_id']}}</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="btn btn-sm btn-light" >View</a>
																
															</div>
															<!--end::Wrapper-->
														   @endif
														   @endforeach
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_6" role="tabpanel">
															<!--begin::Wrapper-->
															@foreach($data_array as $data_arra)
															@if($data_arra['tab']=='kt_timeline_widget_3_tab_content_6')
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">{{$data_arra['time']}}
																	<span class="text-gray-400 fw-semibold fs-7">{{$data_arra['am']}}</span>
																	</div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">{{$data_arra['position']}}</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Talent Name  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['name']}}</a>
																	</div>
																	<div class="text-gray-400 fw-semibold fs-7">Talent ID  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['talent_id']}}</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="btn btn-sm btn-light" >View</a>
																
															</div>
															<!--end::Wrapper-->
														   @endif
														   @endforeach
														
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_7" role="tabpanel">
															<!--begin::Wrapper-->
															@foreach($data_array as $data_arra)
															@if($data_arra['tab']=='kt_timeline_widget_3_tab_content_7')
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">{{$data_arra['time']}}
																	<span class="text-gray-400 fw-semibold fs-7">{{$data_arra['am']}}</span>
																	</div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">{{$data_arra['position']}}</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Talent Name  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['name']}}</a>
																	</div>
																	<div class="text-gray-400 fw-semibold fs-7">Talent ID  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['talent_id']}}</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="btn btn-sm btn-light" >View</a>
																
															</div>
															<!--end::Wrapper-->
														   @endif
														   @endforeach
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_8" role="tabpanel">
															<!--begin::Wrapper-->
															@foreach($data_array as $data_arra)
															@if($data_arra['tab']=='kt_timeline_widget_3_tab_content_8')
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">{{$data_arra['time']}}
																	<span class="text-gray-400 fw-semibold fs-7">{{$data_arra['am']}}</span>
																	</div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">{{$data_arra['position']}}</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Talent Name  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['name']}}</a>
																	</div>
																	<div class="text-gray-400 fw-semibold fs-7">Talent ID  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['talent_id']}}</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="btn btn-sm btn-light" >View</a>
																
															</div>
															<!--end::Wrapper-->
														   @endif
														
														   @endforeach
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_9" role="tabpanel">
															<!--begin::Wrapper-->
															@foreach($data_array as $data_arra)
																@if($data_arra['tab']=='kt_timeline_widget_3_tab_content_9')
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">{{$data_arra['time']}}
																	<span class="text-gray-400 fw-semibold fs-7">{{$data_arra['am']}}</span>
																	</div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">{{$data_arra['position']}}</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Talent Name  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['name']}}</a>
																	</div>
																	<div class="text-gray-400 fw-semibold fs-7">Talent ID  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['talent_id']}}</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="btn btn-sm btn-light" >View</a>
																
															</div>
															<!--end::Wrapper-->
														   @endif
														   @endforeach
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
														<!--begin::Tap pane-->
														<div class="tab-pane fade" id="kt_timeline_widget_3_tab_content_10" role="tabpanel">
															<!--begin::Wrapper-->
															@foreach($data_array as $data_arra)
															@if($data_arra['tab']=='kt_timeline_widget_3_tab_content_10')
															<div class="d-flex align-items-center mb-6">
																<!--begin::Bullet-->
																<span data-kt-element="bullet" class="bullet bullet-vertical d-flex align-items-center min-h-70px mh-100 me-4 bg-success"></span>
																<!--end::Bullet-->
																<!--begin::Info-->
																<div class="flex-grow-1 me-5">
																	<!--begin::Time-->
																	<div class="text-gray-800 fw-semibold fs-2">{{$data_arra['time']}}
																	<span class="text-gray-400 fw-semibold fs-7">{{$data_arra['am']}}</span>
																	</div>
																	<!--end::Time-->
																	<!--begin::Description-->
																	<div class="text-gray-700 fw-semibold fs-6">{{$data_arra['position']}}</div>
																	<!--end::Description-->
																	<!--begin::Link-->
																	<div class="text-gray-400 fw-semibold fs-7">Talent Name  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['name']}}</a>
																	</div>
																	<div class="text-gray-400 fw-semibold fs-7">Talent ID  
																	<!--begin::Name-->
																	<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="text-primary opacity-75-hover fw-semibold">{{$data_arra['talent_id']}}</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="{{route('talents.list', ['id' =>  $data_arra['id']])}}" target="_blank" class="btn btn-sm btn-light" >View</a>
																
															</div>
															<!--end::Wrapper-->
														   @endif
														   @endforeach
													
															<!--end::Wrapper-->
														</div>
														<!--end::Tap pane-->
													
													</div>
													<!--end::Tab Content-->
													<!--begin::Action-->
													<div class="float-end d-none">
														<a href="#" class="btn btn-sm btn-light me-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_project">Add Lesson</a>
														<a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Call Sick for Today</a>
													</div>
													<!--end::Action-->
												</div>
												<!--end: Card Body-->
											</div>
											<!--end::Timeline widget 3-->
											<!--begin::Timeline widget 3-->
											<div class="card card-flush d-none h-md-100">
												<!--begin::Card header-->
												<div class="card-header mt-6">
													<!--begin::Card title-->
													<div class="card-title flex-column">
														<h3 class="fw-bold mb-1">What's on the road?</h3>
														<div class="fs-6 text-gray-400">Total 482 participants</div>
													</div>
													<!--end::Card title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<!--begin::Select-->
														<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bold w-100px select2-hidden-accessible" data-select2-id="select2-data-7-fig4" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
															<option value="1" selected="selected" data-select2-id="select2-data-9-f55i">Options</option>
															<option value="2">Option 1</option>
															<option value="3">Option 2</option>
															<option value="4">Option 3</option>
														</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-8-pe6t" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid form-select-sm fw-bold w-100px" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-80-container" aria-controls="select2-status-80-container"><span class="select2-selection__rendered" id="select2-status-80-container" role="textbox" aria-readonly="true" title="Options">Options</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
														<!--end::Select-->
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end::Card header-->
												<!--begin::Card body-->
												<div class="card-body p-0">
													<!--begin::Dates-->
													<ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2 ms-4" role="tablist">
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_0" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Fr</span>
																<span class="fs-6 text-gray-800 fw-bold">20</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_1" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Sa</span>
																<span class="fs-6 text-gray-800 fw-bold">21</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_2" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Su</span>
																<span class="fs-6 text-gray-800 fw-bold">22</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger active" data-bs-toggle="tab" href="#kt_schedule_day_3" aria-selected="true" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Mo</span>
																<span class="fs-6 text-gray-800 fw-bold">23</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_4" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Tu</span>
																<span class="fs-6 text-gray-800 fw-bold">24</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_5" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">We</span>
																<span class="fs-6 text-gray-800 fw-bold">25</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_6" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Th</span>
																<span class="fs-6 text-gray-800 fw-bold">26</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_7" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Fr</span>
																<span class="fs-6 text-gray-800 fw-bold">27</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_8" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Sa</span>
																<span class="fs-6 text-gray-800 fw-bold">28</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_9" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Su</span>
																<span class="fs-6 text-gray-800 fw-bold">29</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_10" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Mo</span>
																<span class="fs-6 text-gray-800 fw-bold">30</span>
															</a>
														</li>
														<!--end::Date-->
														<!--begin::Date-->
														<li class="nav-item me-1" role="presentation">
															<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-color-active-white btn-active-danger" data-bs-toggle="tab" href="#kt_schedule_day_11" aria-selected="false" tabindex="-1" role="tab">
																<span class="text-gray-400 fs-7 fw-semibold">Tu</span>
																<span class="fs-6 text-gray-800 fw-bold">31</span>
															</a>
														</li>
														<!--end::Date-->
													</ul>
													<!--end::Dates-->
													<!--begin::Tab Content-->
													<div class="tab-content px-9">
														<!--begin::Day-->
														<div id="kt_schedule_day_0" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Yannis Gloverson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Michael Walters</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_1" class="tab-pane fade show active" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">David Stevenson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">16:30 - 17:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Walter White</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_2" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Terry Robins</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Caleb Donaldson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Terry Robins</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_3" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Kendell Trevor</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Naomi Hayabusa</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Terry Robins</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_4" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Naomi Hayabusa</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Caleb Donaldson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Yannis Gloverson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_5" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Mark Randall</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">David Stevenson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Walter White</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_6" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_7" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">12:00 - 13:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Peter Marcus</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Terry Robins</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_8" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Kendell Trevor</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Peter Marcus</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">16:30 - 17:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_9" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Yannis Gloverson</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">14:30 - 15:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Karina Clarke</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Kendell Trevor</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_10" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Terry Robins</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">9:00 - 10:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">13:00 - 14:00 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Walter White</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
														<!--begin::Day-->
														<div id="kt_schedule_day_11" class="tab-pane fade show" role="tabpanel">
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">10:00 - 11:00 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Sean Bean</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">16:30 - 17:30 
																	<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Bob Harris</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
															<!--begin::Time-->
															<div class="d-flex flex-stack position-relative mt-8">
																<!--begin::Bar-->
																<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
																<!--end::Bar-->
																<!--begin::Info-->
																<div class="fw-semibold ms-5 text-gray-600">
																	<!--begin::Time-->
																	<div class="fs-5">11:00 - 11:45 
																	<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
																	<!--end::Time-->
																	<!--begin::Title-->
																	<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
																	<!--end::Title-->
																	<!--begin::User-->
																	<div class="text-gray-400">Lead by 
																	<a href="#">Terry Robins</a></div>
																	<!--end::User-->
																</div>
																<!--end::Info-->
																<!--begin::Action-->
																<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
																<!--end::Action-->
															</div>
															<!--end::Time-->
														</div>
														<!--end::Day-->
													</div>
													<!--end::Tab Content-->
												</div>
												<!--end::Card body-->
											</div>
											<!--end::Timeline widget-3-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--bAR GRAPHS -->
								
									<div class="col-xxl-4">
											<!--begin::Slider Widget 3-->
											<div id="kt_sliders_widget_3_slider" class="card card-flush carousel slide h-xl-100" data-bs-ride="carousel" data-bs-interval="5000">
												<!--begin::Header-->
												<div class="card-header pt-5 mb-5">
													<!--begin::Title-->
													<h3 class="card-title align-items-start flex-column">
													
													</h3>
													<!--end::Title-->
													<!--begin::Toolbar-->
													<div class="card-toolbar">
														<div class="d-flex justify-content-end">
															<a href="#kt_sliders_widget_3_slider" class="carousel-control-prev position-relative me-5 active" role="button" data-bs-slide="prev">
																<!--begin::Svg Icon | path: icons/duotune/general/gen058.svg-->
																<span class="svg-icon svg-icon-2x svg-icon-gray-400">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																		<path d="M12.0657 12.5657L14.463 14.963C14.7733 15.2733 14.8151 15.7619 14.5621 16.1204C14.2384 16.5789 13.5789 16.6334 13.1844 16.2342L9.69464 12.7029C9.30968 12.3134 9.30968 11.6866 9.69464 11.2971L13.1844 7.76582C13.5789 7.3666 14.2384 7.42107 14.5621 7.87962C14.8151 8.23809 14.7733 8.72669 14.463 9.03696L12.0657 11.4343C11.7533 11.7467 11.7533 12.2533 12.0657 12.5657Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
															<a href="#kt_sliders_widget_3_slider" class="carousel-control-next position-relative me-1" role="button" data-bs-slide="next">
																<!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
																<span class="svg-icon svg-icon-2x svg-icon-gray-400">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																		<path d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</a>
														</div>
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="card-body p-0">
													<!--begin::Carousel-->
													<div class="carousel-inner">
														<!--begin::Item-->
														<div class="carousel-item active show">
															<!--begin::Title-->
															<span class="text-gray-800 fw-bold fs-4 mb-3 px-8">Shortlisted</span>
															<!--end::Title-->
															<!--begin::Statistics-->
													
															<!--end::Statistics-->
															<!--begin::Chart-->
															<canvas id="shortlisted" height="100px"></canvas>
														</div>
														<!--end::Item-->
														<!--begin::Item-->
														<div class="carousel-item">
															<!--begin::Title-->
															<span class="text-gray-800 fw-bold fs-4 mb-3 px-8">Rejected</span>
															<!--end::Title-->
															<!--begin::Statistics-->
														
															<!--end::Statistics-->
															<!--begin::Chart-->
															<canvas id="rejected" height="100px"></canvas>
															<!--end::Chart-->
														</div>
														<div class="carousel-item">
															<!--begin::Title-->
															<span class="text-gray-800 fw-bold fs-4 mb-3 px-8">Selected</span>
															<!--end::Title-->
															<!--begin::Statistics-->
														
															<!--end::Statistics-->
															<!--begin::Chart-->
															<canvas id="selected" height="100px"></canvas>
															<!--end::Chart-->
														</div>
														<div class="carousel-item">
															<!--begin::Title-->
															<span class="text-gray-800 fw-bold fs-4 mb-3 px-8">Joined</span>
															<!--end::Title-->
															<!--begin::Statistics-->
														
															<!--end::Statistics-->
															<!--begin::Chart-->
															<canvas id="joined" height="100px"></canvas>
															<!--end::Chart-->
														</div>
														<!--end::Item-->
													</div>
													<!--end::Carousel-->
												</div>
												<!--end::Body-->
											</div>
											<!--end::Slider Widget 3-->
										</div>
								
								
								
										<!--begin::Col-->
										
										<!--end::Col-->
										<!--begin::Col-->
									
										<!--end::Col-->
									</div>
								
								
									<!--end::Row-->
									
									<!--end::Row-->
								</div>


								<!--end::Content container-->
							</div>


							<div class="card card-flush h-xl-100">
												<!--begin::Heading-->
												
												<!--end::Heading-->
												<!--begin::Body-->
											
												<!--end::Body-->
											</div>
							<!--end::Content-->
						</div>
						@endsection
                        @section('js')

	
					
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
      var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($datas) }};
  
      var data = {
        labels: labels,
        datasets: [{
          label: 'Shortlisted',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: users,
        }]
      };
  
      var config = {
        type: 'line',
        data: data,
        options: {}
      };
  
      var myChart = new Chart(
        document.getElementById('shortlisted'),
        config
      );
  
      var labels2 =  {{ Js::from($rlabels) }};
      var interview2 =  {{ Js::from($rdatas) }};
  
      var data1 = {
        labels: labels2,
        datasets: [{
          label: 'Rejected',
          backgroundColor: 'rgb(163, 255, 99)',
          borderColor: 'rgb(163, 255, 99)',
          data: interview2,
        }]
      };
  
      var config = {
        type: 'line',
        data: data1,
        options: {}
      };
  
      var myChart = new Chart(
        document.getElementById('rejected'),
        config
      );
  

	  
	  var labels3 =  {{ Js::from($slabels) }};
      var interview3 =  {{ Js::from($sdatas) }};
  
      var data2 = {
        labels: labels3,
        datasets: [{
          label: 'Selected',
          backgroundColor: 'rgb(99, 178, 255 )',
          borderColor: 'rgb(99, 178, 255)',
          data: interview3,
        }]
      };
  
      var config = {
        type: 'line',
        data: data2,
        options: {}
      };
  
      var myChart = new Chart(
        document.getElementById('selected'),
        config
      );
  

	  var labels4 =  {{ Js::from($jlabels) }};
      var interview4 =  {{ Js::from($jdatas) }};
  
      var data2 = {
        labels: labels4,
        datasets: [{
          label: 'Joined',
          backgroundColor: 'rgb(255, 238, 99 )',
          borderColor: 'rgb(255, 238, 99 )',
          data: interview4,
        }]
      };
  
      var config = {
        type: 'line',
        data: data2,
        options: {}
      };
  
      var myChart = new Chart(
        document.getElementById('joined'),
        config
      );
  




$(document).ready(function() {
   
    $( "#kt_timeline_widget_3_tab_content_1" ).addClass( "show active" );

});


</script>
@endsection
