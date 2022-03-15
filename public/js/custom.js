$(function(){
   $('.work_slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll:1,
        arrows:true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1500,
        speed: 500,
        prevArrow:'<i class="fas fa-chevron-left prev"></i>',
        nextArrow:'<i class="fas fa-chevron-right next"></i>',
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '40px',
              slidesToShow: 1
            }
          }
        ]
        
      });

      $('.sliderr').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll:1,
        arrows:true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1500,
        speed: 500,
        prevArrow:'<i class="fas fa-chevron-left prev_award"></i>',
        nextArrow:'<i class="fas fa-chevron-right next_award"></i>',
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '0px',
              slidesToShow: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: '0px',
              slidesToShow: 1
            }
          }
        ]
        
      });

// back to To part Start
$(".back2top_main").click(function(){
  $("html, body").animate({
    scrollTop:0
  }, 1000)
  });
  $(window).scroll(function(){
    var scrolling = $(this).scrollTop();
    if(scrolling >200){
      $(".back2top_main").fadeIn(800);
    } else{
      $(".back2top_main").fadeOut(800);
    }
    // if (scrolling >0) {
    //   $(".navbar").addClass("menu_bg");
    // } else {
    //   $(".navbar").removeClass("menu_bg")
    // }

    });

    
    
    $('.seen').expander({
      expandText: 'আরো পড়ুন',
      expandPrefix: '&hellip; ',
      moreLinkClass: 'more-link',
      userCollapseText: 'ফিরেযান',
      userCollapsePrefix: ' ',
      lessLinkClass: 'less-link',
    });

});

 