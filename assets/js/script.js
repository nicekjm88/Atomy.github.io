$(function () {

  // 인클루드
  // (function(global, $) {
  //   'use strict';

  //   var includes = $('[data-include]');

  //   $.each(includes, function (){
  //     var file ='_include/' + $(this).data('include') + '.html';
  //     $(this).load(file);
  //   });

  // })(window, window.jQuery);

  // 스크롤 애니메이션
  (function scrollInteraction(global, $) {
    'use strict';

    var $textAnimation = $('.text-animation').find('span');
    var $textAnimation2 = $('.text-animation2').find('li');
    var $articleTitles = $('.detail-description > article .title');
    var $animationDownUp = $('.animation-down-up').find('p');
    var $animationLeftRight = $('.animation-left-right').find('li');

    $('.img-bg, figure > img').attr('data-aos', 'fade');
    $articleTitles.attr('data-aos', 'fade');

    $textAnimation.each(function (index) {
      $(this)
        .attr('data-aos', 'fade')
        .attr('data-aos-delay', Number(50 * index));
    });

    $textAnimation2.each(function (index, item) {
      //console.log(index, item);
      $(this)
        .attr('data-aos', 'zoom-in')
        .attr('data-aos-delay', Number(50 * index));
    });

    $animationDownUp.each(function (index, item) {
      $(this)
        .attr('data-aos', 'fade-up')
        .attr('data-aos-delay', Number(50 * index));
    });

    $animationLeftRight.each(function (index, item) {
      $(this)
        .attr('data-aos', 'fade-right')
        .attr('data-aos-delay', Number(200 + (100 * index)));
    });

    AOS.init({
      offset: 200,
      delay: 0,
      duration: 750,
      easing: 'ease',
      once: false,
      mirror: false,
    });

  })(window, window.jQuery);

  // 아코디언 매뉴
  $('.product-details').accordion({
    collapsible: true,
    titleSelector: '.product-title',
    contSelector: '.product-content',
    onOpen: $.noop
  });

  // 상세 정보 더보기
  (function btnMore(global, $) {
    'use strict';
    
    var moreMessage = '상세정보 더보기';
    var btnMoreTemplate = '\
    <div id="demo2" class="box__detail-more">\
      <button type="button" class="button__detail-more">' + moreMessage + '</button>\
    </div>\
    ';
    var $articles = $('article');

    if ( $articles.length > 2 ) {
      $('.detail-description').append(btnMoreTemplate);        

      $articles.attr('hidden', '');
      $articles.eq(0).removeAttr('hidden');
    }

    var $btnMore = $('.box__detail-more');

    $btnMore.on('click', function () {
      $(this).remove();
      $articles.each(function () {
        $(this).removeAttr('hidden');
      });

      AOS.refresh();
    });


  })(window, window.jQuery);

  // 스무스 스크롤
  $("#side-nav a[href^='#']").on('click', function(e) {
      e.preventDefault();

      var target = $(this.hash),
          offset_top = target.offset().top;
      
      $('html, body').animate( {scrollTop: offset_top}, 500 );
  });   

});


