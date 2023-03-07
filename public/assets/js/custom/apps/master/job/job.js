$(document).ready(function() {
    $("#kt_modal_add_job_form").validate({
        rules: {
            name: "required",
        },
        messages: {
            name: "Category name is required",
        }
    });
});
