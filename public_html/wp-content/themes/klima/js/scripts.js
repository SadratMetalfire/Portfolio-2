$(document).ready(function() {
    $("#kn_contact-button").on("click", function() {
        $("#kn_contact-modal").show();
    });
    $(".kn_close").on("click", function() {
        $("#kn_contact-modal").hide();
    });
});