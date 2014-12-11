$(function() {
    $('.telephone').formatter({
        'pattern': '({{999}}) {{999}}-{{9999}}',
        'persistent': true
    });

    var phoneReg = '/(\(\d{3}+\)+ \d{3}+\-\d{4}+)/';

    $('#profile_form').submit(function()
    {
        if($('.telephone').val().test(phoneReg))
        {
            $('.telephone').parent().addClass('has-error');
        }
        event.preventDefault();
    });

});