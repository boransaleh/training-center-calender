$(document).ready(function () {
    $('[data-toggle="offcanvas"]').click(function () {
        $('#side-menu').toggleClass('hidden-xs');
    });
});

$("#passwordclick").click(function(){

    $('#login_form').hide(1000);
    $('#forgetpass').show('slow');

});

$("#loginclick").click(function(){

    $('#forgetpass').hide(1000);
    $('#login_form').show('slow');

});

$('#erstellen').click(function (e) {

    $('#SelectGroupDialog').modal('show');

});

$('#dozentBerichten').click(function (e) {

    $('#SelectfilterDozentDialog').modal('show');

});
$('#GruppenBerichten').click(function (e) {

    $('#SelectGroupFormForReport').modal('show');

});
