
$(document).on('click', '.sign_in_btn', function(){
    handle_modal('#my-modal-5');
});

$(document).on('click', '.sign_up_btn', function(){
    handle_modal('#my-modal-6');
});

$(document).on('click', '.page-theme', function(){
    if($('#theme_checkbox').is(':checked')){
        $('.html_body').attr('data-theme', 'dark');
    }else{
        $('.html_body').attr('data-theme', 'light');
    }
});
