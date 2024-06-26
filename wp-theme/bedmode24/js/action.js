jQuery(document).ready(function ($) {



    $(document).on('ajaxComplete', function(){
        $('.select-block select').niceSelect();
    });

    /* scroll top*/

    $(document).on('click','.woocommerce-pagination a.page-numbers', function() {
        $('html, body').animate({ scrollTop: 0 }, 'slow');

        return false;
    });


    $('button[name="update_cart"]').removeAttr('disabled');

    $(document).on('click', '.btn-count-plus', function(){
        var e = $(this).parent().find("input.qty");
        return e.val(parseInt(e.val()) + 1), e.change(), !1
    });

    $(document).on('click', '.btn-count-minus', function(){
        var e = $(this).parent().find("input.qty"),
            t = parseInt(e.val()) - 1;
        return t = t < 1 ? 1 : t, e.val(t), e.change(), !1
    });

    $(document).on('change', '.qty', function(){

            let item_quantity = $(this).val();

            let key = $(this).attr('data-key');

            var currentVal = parseFloat(item_quantity);

            $.ajax({
                type: 'GET',
                url: wc_add_to_cart_params.ajax_url,
                data: {
                    action: 'qty_cart',
                    hash: key,
                    quantity: currentVal,
                },
                success: function (data) {
                    $(document.body).trigger('wc_update_cart');
                    $(document.body).trigger('update_checkout');
                    $( document.body ).trigger( 'wc_fragment_refresh' );
                },
            });

    })

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

                if(data.alert != 'no variation') {
                    $('.fancybox-cart').click();
                }
            }
        });
    })


    /* remove_from_cart_button */


    $(document).on('click', '.item-delete a', function( e ){
        e.preventDefault();
        var key = $(this).attr('data-cart_item_key');

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


    /* load merken*/

    $(document).on('click', '#mload', function(e){
        e.preventDefault();

        let paged = $(this).attr('data-paged');
        let max =  $(this).attr('data-max_page');
        let that = $(this);

        $.ajax({
            url: globals.url,
            data:{
                action:'load_merken',
                paged:paged,
                max:max,
            },
            success:function(data){

                paged++;
                that.attr('data-paged', paged);
                if( paged == max ) {
                    that.parent().remove();
                }

                $('.ajax-merken').append(data);

            }
        });
    });


    /* search */


    $(document).on('submit', '#search-form', function(e){
        e.preventDefault();

        let search = $('#search').val();
        let soort = $('#select-2').val();
        let categ = $('#select-1').val();

        $.ajax({
            url: globals.url,
            data:{
                action:'search_nieuws',
                search:search,
                soort:soort,
                categ:categ,
            },
            success:function(data){

                $('.content-ajax').html(data);

            }
        });
    });

    $('.variations_form').on('change', '.variations select', function() {
        let updatedUrl = new URL(window.location.href);
        let string = $(this).attr('name');
        let subString = 'attribute_pa_';
        let atr = string.replace(subString, '');
        updatedUrl.searchParams.set(atr, $(this).val());
        window.history.pushState({path: updatedUrl.href}, '', updatedUrl.href);
    });

    $(document).on('show_variation', '.single_variation', function (event, variation) {

        if(variation.price_html!=''){
            $('p.price').html(variation.price_html);
        }else{
            $('p.price').html('<del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">€</span> '+variation.display_regular_price+'</bdi></span></del><ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">€</span> '+variation.display_price+'</bdi></span></ins>');
        }

        $('p.ean span').text(variation.ean);

    });



});