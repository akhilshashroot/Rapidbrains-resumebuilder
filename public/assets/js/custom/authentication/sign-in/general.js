
//  var KTSigninGeneral = function () { var e, t, i; return { init: function () 
//     { e = document.querySelector("#kt_sign_in_form"), t = document.querySelector("#kt_sign_in_submit"),
//      i = FormValidation.formValidation(e, 
//         { fields: { email: { validators: { regexp: { regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, 
//         message: "The value is not a valid email address" },
//          notEmpty: { message: "Email address is required" } } }, 
//          password: { validators: { notEmpty: { message: "The password is required" } } } }, 
//     plugins: { trigger: new FormValidation.plugins.Trigger, 
//         bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) } }), 
//     t.addEventListener("click", (function (n) { n.preventDefault(), i.validate().then((function (i)
//          {
//              "Valid" == i ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function () { t.removeAttribute("data-kt-indicator"), t.disabled = !1, Swal.fire({ text: "You have successfully logged in!", icon: "success", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } }).then((function (t) { 
//             if (t.isConfirmed) { e.querySelector('[name="email"]').value = "", e.querySelector('[name="password"]').value = ""; 
//          var i = e.getAttribute("data-kt-redirect-url"); i && (location.href = i) } })) }), 2e3)) :
//           Swal.fire({ text: "Sorry, looks like there are some errors detected, please try again.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } }) })) })) } } }(); 
//          KTUtil.onDOMContentLoaded((function () { KTSigninGeneral.init() }));


       
        //  $(function() {
        //  // handle submit event of form
        //    $(document).on("submit", "#handleAjax", function() {
        //  //   alert('');
        //      var e = this;
        //      // change login button text before ajax
        //      $(this).find("[type='submit']").html("LOGIN...");
     
        //      $.post($(this).attr('action'), $(this).serialize(), function(data) {
     
        //        $(e).find("[type='submit']").html("LOGIN");
        //        if (data.status) { // If success then redirect to login url
        //          window.location = data.redirect_location;
        //        }
        //      }).fail(function(response) {
        //          // handle error and show in html
        //        $(e).find("[type='submit']").html("LOGIN");
        //        $(".alert").remove();
        //        var erroJson = JSON.parse(response.responseText);
        //        for (var err in erroJson) {
        //          for (var errstr of erroJson[err])
        //          Swal.fire({ text: "Sorry, looks like there are some errors detected, please try again.", icon: "error", buttonsStyling: !1, confirmButtonText: "Ok, got it!", customClass: { confirmButton: "btn btn-primary" } }) ;                }
     
        //      });
        //      return false;
        //    });
        //  });
   