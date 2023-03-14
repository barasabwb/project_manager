function handle_modal(modal_id){
    if($(modal_id).is(':checked')){
        $(modal_id).prop('checked', false);
    }else{
        $(modal_id).prop('checked', true);
    }
}

$(document).ready(function(){
    $('body').fadeIn('fast');
})
