jQuery(document).ready(function ($) {

$(document).on('click', '#aload', function(e){
    e.preventDefault();

    let paged = $(this).attr('data-paged');
    let max =  $(this).attr('data-max_page');
    let that = $(this);

    $.ajax({
        url: globals.url,
        data:{
            action:'load_more',
            paged:paged,
            max:max,
        },
        success:function(data){

            paged++;
            that.attr('data-paged', paged);
            if( paged == max ) {
                that.parent().remove();
            }

            $('.content-ajax').append(data);

        }
    });
});

});