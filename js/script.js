(function ($) {

  $(document).ready(function () {

    $("body").fadeIn(3000);

    var hauteur     = $(window).height();
    var hauteurCss  = parseInt(hauteur) - parseInt(250);
    $("#slides, #me, .head").css('height', hauteurCss + 'px');

    $(window).resize(function() {
      console.log("resize");
      var hauteur = $(window).height();
      var hauteurCss  = parseInt(hauteur) - parseInt(250);

      $("#slides, #me, .head").css('height', hauteurCss + 'px');
    });

    //ACTIONS AU SCROLL
    $(window).scroll(function () {

      if($(this).scrollTop() > 500) {
        $('.menu').addClass('fixeMenu');
      } else {
        $('.menu').removeClass('fixeMenu')
      }

      if ($(window).scrollTop() < 250) {
          $('.fleche').stop().animate({'opacity':0},function(){
             $(this).hide();
           });
      } else {
          $('.fleche').stop().show().animate({'opacity':1});
      }

    });

    $('.fleche').click(function() {
      $('html,body').animate({scrollTop: 0}, 'slow');
    });


    $('a[href^="#"]').click(function(){
      var the_id = $(this).attr("href");

      $('html, body').animate({
        scrollTop:$(the_id).offset().top
      }, 'slow');
      return false;
    });

    var wall = new Freewall("#freewall");
    wall.reset({
      selector: '.article',
      animate: true,
      cellW: 300,
      cellH: 'auto',
      onResize: function() {
        wall.fitWidth();
      }
    });

    wall.container.find('.article img').load(function() {
      wall.fitWidth();
    });


  });

})(jQuery);
