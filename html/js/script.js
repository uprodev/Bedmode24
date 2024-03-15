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
  var swiperProduct = new Swiper(".slider-product", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
      el: ".product-pagination",
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


});