"use strict";
var KTCreateAccount = (function () {
    var e,
        t,
        i,
        o,
        r,
        s,
        n = [];
    return {
        init: function () {
            (e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e),
                (t = document.querySelector("#kt_create_account_stepper")) &&
                    ((i = t.querySelector("#kt_create_account_form")),
                    (o = t.querySelector('[data-kt-stepper-action="submit"]')),
                    (r = t.querySelector('[data-kt-stepper-action="next"]')),
                    (s = new KTStepper(t)).on("kt.stepper.changed", function (e) {
                        4 === s.getCurrentStepIndex()
                            ? (o.classList.remove("d-none"), o.classList.add("d-inline-block"), r.classList.add("d-none"))
                            : 5 === s.getCurrentStepIndex()
                            ? (o.classList.add("d-none"), r.classList.add("d-none"))
                            : (o.classList.remove("d-inline-block"), o.classList.remove("d-none"), r.classList.remove("d-none"));
                    }),
                    s.on("kt.stepper.next", function (e) {
                        console.log("stepper.next");
                        console.log($('#hidden_talent_id').val());

                        if($('#hidden_talent_id').val()=='1'){
                            Swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: { confirmButton: "btn btn-light" },
                            }).then(function () {
                                KTUtil.scrollTop();
                            });
                           return false;
                        }

                        var t = n[e.getCurrentStepIndex() - 1];
                        t
                            ? t.validate().then(function (t) {
                                  console.log("validated!"),
                                      "Valid" == t
                                          ? (e.goNext(), KTUtil.scrollTop())
                                          : Swal.fire({
                                                text: "Sorry, looks like there are some errors detected, please try again.",
                                                icon: "error",
                                                buttonsStyling: !1,
                                                confirmButtonText: "Ok, got it!",
                                                customClass: { confirmButton: "btn btn-light" },
                                            }).then(function () {
                                                KTUtil.scrollTop();
                                            });
                              })
                            : (e.goNext(), KTUtil.scrollTop());
                    }),
                    s.on("kt.stepper.previous", function (e) {
                        console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop();
                    }),
                    /*n.push(
                        FormValidation.formValidation(i, {
                            fields: { 
                                fullname: {
                                     validators: {
                                         notEmpty: {
                                             message: "Full name is required" 
                                            } 
                                        } 
                                    } ,
                                talentid: {
                                    validators: {
                                        notEmpty: {
                                            message: "Talentid is required" 
                                        } 
                                    } 
                                    },
                                    email: {
                                        validators: {
                                            notEmpty: {
                                                message: "email is required" 
                                            } 
                                        } 
                                        },
                                        phone: {
                                            validators: {
                                                notEmpty: {
                                                    message: "Phone number is required" 
                                                } 
                                            } 
                                            },
                                            address: {
                                                validators: {
                                                    notEmpty: {
                                                        message: "Address is required" 
                                                    } 
                                                } 
                                                },
                                },
                                
                            plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                        })
                    ),*/
                    n.push(
                        FormValidation.formValidation(i, {
                            fields: {
                                profile: { validators: { notEmpty: { message: "Profile details is required" } } },
                            },
                            plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                        })
                    ),
                    n.push(
                        FormValidation.formValidation(i, {
                            fields: {
                                employer: { validators: { notEmpty: { message: "Employer is required" } } },
                            },
                            plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                        })
                    ),
                    /*n.push(
                        FormValidation.formValidation(i, {
                            fields: {
                                business_name: { validators: { notEmpty: { message: "Busines name is required" } } },
                                business_descriptor: { validators: { notEmpty: { message: "Busines descriptor is required" } } },
                                business_type: { validators: { notEmpty: { message: "Busines type is required" } } },
                                business_description: { validators: { notEmpty: { message: "Busines description is required" } } },
                                business_email: { validators: { notEmpty: { message: "Busines email is required" }, emailAddress: { message: "The value is not a valid email address" } } },
                            },
                            plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                        })
                    ),
                    n.push(
                        FormValidation.formValidation(i, {
                            fields: {
                                card_name: { validators: { notEmpty: { message: "Name on card is required" } } },
                                card_number: { validators: { notEmpty: { message: "Card member is required" }, creditCard: { message: "Card number is not valid" } } },
                                card_expiry_month: { validators: { notEmpty: { message: "Month is required" } } },
                                card_expiry_year: { validators: { notEmpty: { message: "Year is required" } } },
                                card_cvv: { validators: { notEmpty: { message: "CVV is required" }, digits: { message: "CVV must contain only digits" }, stringLength: { min: 3, max: 4, message: "CVV must contain 3 to 4 digits only" } } },
                            },
                            plugins: { trigger: new FormValidation.plugins.Trigger(), bootstrap: new FormValidation.plugins.Bootstrap5({ rowSelector: ".fv-row", eleInvalidClass: "", eleValidClass: "" }) },
                        })
                    ),*/
                    o.addEventListener("click", function (e) {
                        $.ajaxSetup({
                            headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        var formData = new FormData(document.getElementById("kt_create_account_form"));
                                        console.log(formData);
                                        var id = $('#resumeid').val();
                                        var url = 'http://resumebuilder.test:8080/resume/update/'+id;
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
                        n[3].validate().then(function (t) {
                            console.log("validate"),
                                "Valid" == t
                                    ? (e.preventDefault(),
                                      (o.disabled = !0),
                                      o.setAttribute("data-kt-indicator", "on"),
                                      setTimeout(function () {
                                        
                                        o.removeAttribute("data-kt-indicator"),
                                              (o.disabled = !1),
                                              i.hasAttribute("data-kt-redirect-url")
                                                  ? Swal.fire({
                                                        text: "Your account has been successfully created.",
                                                        icon: "success",
                                                        buttonsStyling: !1,
                                                        confirmButtonText: "Ok, got it!",
                                                        customClass: { confirmButton: "btn btn-primary" },
                                                    }).then(function (e) {
                                                        e.isConfirmed && (location.href = i.getAttribute("data-kt-redirect-url"));
                                                    })
                                                  : s.goNext();
                                      }, 2e3))
                                    : Swal.fire({
                                          text: "Sorry, looks like there are some errors detected, please try again.",
                                          icon: "error",
                                          buttonsStyling: !1,
                                          confirmButtonText: "Ok, got it!",
                                          customClass: { confirmButton: "btn btn-light" },
                                      }).then(function () {
                                          KTUtil.scrollTop();
                                      });
                        });
                    }),
                    $(i.querySelector('[name="card_expiry_month"]')).on("change", function () {
                        n[3].revalidateField("card_expiry_month");
                    }),
                    $(i.querySelector('[name="card_expiry_year"]')).on("change", function () {
                        n[3].revalidateField("card_expiry_year");
                    }),
                    $(i.querySelector('[name="business_type"]')).on("change", function () {
                        n[2].revalidateField("business_type");
                    }));
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTCreateAccount.init();
});
