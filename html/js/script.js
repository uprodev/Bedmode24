jQuery(document).ready(function ($) {

 // +/- cart
  $(".btn-count-plus").click(function () {
    var e = $(this).parent().find("input");
    return e.val(parseInt(e.val()) + 1), e.change(), !1
  }), $(".btn-count-minus").click(function () {
    var e = $(this).parent().find("input"), t = parseInt(e.val()) - 1;
    return t = t < 1 ? 1 : t, e.val(t), e.change(), !1
  });

  /* cart*/
  $(document).on('click', '.fancybox-cart', function (e){
    e.preventDefault();

    $.fancybox.open( $('#cart'), {
      touch:false,
      autoFocus:false,
    });
    setTimeout(function() {
      $('body').addClass('is-active');
      $('html').addClass('is-menu');
      $('header').addClass('is-active');
    }, 100);

  });

  /*close cart*/
  $(document).on('click', '.close-cart a', function (e){
    e.preventDefault();
    $('body').removeClass('is-active');
    $.fancybox.close();
    $('header').removeClass('is-active');
    $('html').removeClass('is-menu');
  });

  //delete item cart
  $(document).on('click', '.delete-cart-item a', function (e){
    e.preventDefault();
    $(this).closest('.item').slideUp();
  });

  //delete item cart - page cart
  $(document).on('click', '.del-item a', function (e){
    e.preventDefault();
    $(this).closest('.table-row').slideUp();
  });


  /*select*/
  $('.select-block select').niceSelect();

  /* mob-menu*/
  $(document).on('click', '.open-menu a', function (e){
    e.preventDefault();

    $.fancybox.open( $('#menu-responsive'), {
      touch:false,
      autoFocus:false,
    });
    setTimeout(function() {
      $('html').addClass('is-menu');
    }, 100);

  });

  /*close mob menu*/
  $(document).on('click', '.close-menu a', function (e){
    e.preventDefault();
    $.fancybox.close();
    $('html').removeClass('is-menu');
  });

  //fix header
  $(".scroll-line").sticky({
    topSpacing:0
  });

  //sub-menu open/close - mob-menu
  $(document).on('click', '.mob-menu .sub-item>a', function (e){
    e.preventDefault();
    let item = $(this).closest('li').find('.sub-menu');
    $(this).toggleClass('is-open');
    if($(this).hasClass('is-open')){
      item.slideDown();
    }else{
      item.slideUp();
    }
  });

  //sub-menu open/close - footer
  if(window.innerWidth < 992){
    $(document).on('click', 'footer .item h6', function (e){
      e.preventDefault();
      let item = $(this).siblings('.wrap-mob');
      $(this).toggleClass('is-open');
      if($(this).hasClass('is-open')){
        item.slideDown();
      }else{
        item.slideUp();
      }
    });
  }

  //slider
  var swiperProduct1 = new Swiper(".slider-product-1", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".product-pagination-1",
      clickable: true,
    },
    breakpoints: {
      480: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 15,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 15,
      },
    },
  });

  //slider
  var swiperProduct2 = new Swiper(".slider-product-2", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".product-pagination-2",
      clickable: true,
    },
    breakpoints: {
      480: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 15,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 15,
      },
    },
  });

  //slider
  var swiperBase = new Swiper(".base-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".base-pagination",
      clickable: true,
    },
    breakpoints: {
      480: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 15,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 15,
      },
    },
  });

  //slider
  var swiperImg = new Swiper(".img-slider", {
    spaceBetween: 20,
    navigation: {
      nextEl: ".img-next",
      prevEl: ".img-prev",
    },
    pagination: {
      el: ".img-pagination",
      clickable: true,
    },
  });


  //slider
  var swiperMini = new Swiper(".slider-mini", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
      768: {
        spaceBetween: 18,
      },
    },
  });
  //slider
  var swiperBig = new Swiper(".slider-big", {
    spaceBetween: 10,

    thumbs: {
      swiper: swiperMini,
    },
  });

  //TABS
  (function($){
    jQuery.fn.lightTabs = function(options){

      var createTabs = function(){
        tabs = this;
        i = 0;

        showPage = function(i){
          $(tabs).find(".tab-content").children("div").hide();
          $(tabs).find(".tab-content").children("div").eq(i).show();
          $(tabs).find(".tabs-menu").children("li").removeClass("is-active");
          $(tabs).find(".tabs-menu").children("li").eq(i).addClass("is-active");
        }

        showPage(0);

        $(tabs).find(".tabs-menu").children("li").each(function(index, element){
          $(element).attr("data-page", i);
          i++;
        });

        $(tabs).find(".tabs-menu").children("li").click(function(){
          showPage(parseInt($(this).attr("data-page")));
        });
      };
      return this.each(createTabs);
    };
  })(jQuery);
  $(".tabs").lightTabs();


});