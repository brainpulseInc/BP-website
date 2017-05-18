$(document).ready(function(){
  //Main menu
  $('header .button-menu').on('click', function(){
    $('body').toggleClass('menu-active');
  });
  $('header .tcon-menu--xcross').on('click', function(){
    $(this).toggleClass('tcon-transform');
  });
  // Close menu click out
  $('body').click(function(){
    if($('#main-menu').css('right') < "0px"){
      $('main').click(function() {
        $('body').removeClass('menu-active');
        $('header .tcon-menu--xcross').removeClass('tcon-transform');
      });
    }
  });

  //Header sticky
  $(function(){
    var shrinkHeader = 100;
    $(window).scroll(function() {

      var scroll = getCurrentScroll();
      if ( scroll >= shrinkHeader ) {
        $('header').addClass('shrink');
      }
      else {
        $('header').removeClass('shrink');
      }
    });
    function getCurrentScroll() {
      return window.pageYOffset || document.documentElement.scrollTop;
    }
  });

});

