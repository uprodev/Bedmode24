jQuery(document).ready(function ($) {

    /**
     * add_to_cart
     */


    $(document).on('click', '.single_add_to_cart_button', function (e) {

        e.preventDefault();

        var product_id = $('input[name="product_id"]').val();
        var variation_id = $('input[name="variation_id"]').val();
        var qty = $('.qty').val() ?? 1;

        var that = $(this);

        $.ajax({

            url: globals.url,
            data: {
                action: 'add_to_cart',
                product_id: product_id,
                variation_id: variation_id,
                qty: qty
            },
            success: function (data) {

                $( document.body ).trigger( 'wc_fragment_refresh' );
                $( document.body ).trigger('wc_update_cart');


                $('.fancybox-cart').click();
            }
        });
    })


    /* remove_from_cart_button */


    $(document).on('click', '.delete-cart-item a', function( e ){
        e.preventDefault();
        var key = $(this).attr('data-cart_item_key');

        if ( $( '.woocommerce-cart-form' ).length ||  $( '.woocommerce-checkout' ).length) {
            $(this).closest('.item').remove();
        }

        $(this).closest('.item').remove();

        $.ajax({
            type: 'get',
            url: wc_add_to_cart_params.ajax_url,
            data: {
                action: 'remove_from_cart',
                key: key
            },

            success: function (data) {

                $(document.body).trigger('wc_update_cart');
                $(document.body ).trigger( 'wc_fragment_refresh' );
                $(document.body).trigger('update_checkout');


            }
        })

    })


    /* mini cart update */

    function ajax_mini_cart_update() {

        $.ajax({
            url:globals.url,
            data:{

                action:'update_mini_cart',
            },
            success:function(data){

                $( document.body ).trigger( 'wc_fragment_refresh' );

            }
        })
    }

    /* load more*/

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