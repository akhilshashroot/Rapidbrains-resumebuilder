<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>stakefield Portal</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Blazor, Django, Flask &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, Bootstrap, Bootstrap 5, Angular, VueJs, React, Asp.Net Core, Blazor, Django, Flask &amp; Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular, Asp.Net Core, Blazor, Django, Flask &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon"  href="{{asset('white.png')}}" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
        <link href="{{asset('assets/css/common.css')}}" rel="stylesheet" type="text/css" />

	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body data-kt-name="metronic" id="kt_body" class="app-blank app-blank">
		<!--begin::Theme mode setup on page load-->
		<script>if ( document.documentElement ) { const defaultThemeMode = "system"; const name = document.body.getAttribute("data-kt-name"); let themeMode = localStorage.getItem("kt_" + ( name !== null ? name + "_" : "" ) + "theme_mode_value"); if ( themeMode === null ) { if ( defaultThemeMode === "system" ) { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } else { themeMode = defaultThemeMode; } } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
					<!--begin::Form-->
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10">
							<!--begin::Form-->
                            <form method="POST"  id="kt_interview_form"  >
                  
                        @csrf
                            <!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Interview Time Confirmation</h1>
									<!--end::Title-->
									<!--begin::Subtitle-->
									<div class="text-gray-500 fw-semibold fs-6"></div>
									<!--end::Subtitle=-->
								</div>
								<!--begin::Heading-->
								<!--begin::Login options-->
								
								<!--end::Login options-->
								<!--begin::Separator-->
								<div class="separator separator-content my-14">
								</div>
								<!--end::Separator-->
								<!--begin::Input group=-->
								
								<!--end::Input group=-->
								<div class="fv-row mb-3">
									<!--begin::Password-->
                                    <label class=" fs-6 fw-semibold mb-2">Select Interview date</label>
								<!--end::Label-->
																	
								</div>
                                @if($interview->slot1)
                                <div class="fv-row mb-3">
								<label class="form-check-label" for="flexRadioDefault">

                                <input class="form-check-input" name="rad" type="radio" value="slot1" id="flexRadioDefault" checked="checked"/>
    {{$interview->slot1}}
    </label>
								</div>
                                @endif
                                @if($interview->slot2)
                                <div class="fv-row mb-3">
								<label class="form-check-label" for="flexRadioDefault2">
                                <input class="form-check-input" name="rad" type="radio" value="slot2" id="flexRadioDefault2"  @if(!$interview->slot1) checked="checked" @endif/>
 
    {{$interview->slot2}}
    </label>
								</div>
                                @endif
                                @if($interview->slot3)
                                <div class="fv-row mb-3">
								<label class="form-check-label" for="flexRadioDefault3">
                                <input class="form-check-input" name="rad" type="radio" value="slot3" id="flexRadioDefault3"  @if(!$interview->slot1 && !$interview->slot2) checked="checked" @endif/>

       {{$interview->slot3}}
    </label>
								</div>
                                @endif
                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<!--begin::Link-->
									<a href="../../demo1/dist/authentication/layouts/corporate/reset-password.html" class="link-primary"></a>
									<!--end::Link-->
								</div>
								<div class="d-grid mb-10">
									<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Confirm</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
                                
								<!--end::Submit button-->
								<!--begin::Sign up-->
								<div class="text-gray-500 text-center fw-semibold fs-6">
								<a href="../../demo1/dist/authentication/layouts/corporate/sign-up.html" class="link-primary"></a></div>
								<!--end::Sign up-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Form-->
					<!--begin::Footer-->
					<div class="d-flex flex-center flex-wrap px-5">
						<!--begin::Links-->
						<div class="d-flex fw-semibold text-primary fs-base">
                        <a href="https://www.stakefield.com/about-us" target="_blank" class="px-5">About</a>
                        <a href="https://www.stakefield.com/contact-us" target="_blank" class="px-5">Contact Us</a>

						</div>
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Body-->
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url(assets/media/misc/auth-bg.png)">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center py-15 px-5 px-md-15 w-100">
						<!--begin::Logo-->
						<a href="../../demo1/dist/index.html" class="mb-12">
							<img alt="Logo" src="assets/media/logos/custom-1.png" class="h-75px" />
						</a>
						<!--end::Logo-->
						<!--begin::Image-->
						<img class="mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="assets/media/misc/auth-screens.png" alt="" />
						<!--end::Image-->
						<!--begin::Title-->
						<h1 class="text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and Productive</h1>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="text-white fs-base text-center">In this kind of post,
						<a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces a person they’ve interviewed
						<br />and provides some background information about
						<a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and their
						<br />work following this is a transcript of the interview.</div>
						<!--end::Text-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Aside-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used by this page)-->
		// <script src="{{asset('assets/js/custom/authentication/sign-in/general.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script>

$('#kt_interview_form').on('submit',function(e){
        e.preventDefault();

        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);

		let interview_id =  urlParams.get('interview_id')


        let slot = $('input[name="rad"]:checked').val();

        Swal.fire({
            text: 'This action cannot be undone',

            icon: "warning",
							showCancelButton: !0,
							buttonsStyling: !1,
							confirmButtonText: "Yes, confirm!",
							cancelButtonText: "No, cancel",
							customClass: { confirmButton: "btn fw-bold btn-danger", cancelButton: "btn fw-bold btn-active-light-primary" },
	
								}).then(function(e) {
                                    $.ajax({
          url: "/interview/slot",
          type:"POST",
          data:{
            "_token": "{{ csrf_token() }}",
        
            interview_id:interview_id,
            slot:slot,
           
		
          },
          success:function(response){
            console.log(response);
            if (response.error=='402') {
				console.log(response);

				$('#slot-error').text(response.slot);

             
            }else{
				Swal.fire({
									text: response.success,
									icon: "success",
									buttonsStyling: !1,
									confirmButtonText: "Ok, got it!",
									customClass: {
										confirmButton: "btn btn-primary"
									}
								}).then(function(e) {
								 window.location = '/interview/submitted';
							});
				//$('#success-message').text(response.success); 
             
			}
          },
          error: function(response) {
            // $('#status-error').text(response.status);
            // $('#url-error').text(response.url);
            // $('#slot-error').text(response.slot);
            // $('#subject-error').text(response.error.subject);
            // $('#message-error').text(response.error.message);
           }
         });
							});

    

		

        });
</script>

	</body>
	<!--end::Body-->
</html>