$(document).ready(function(){
    $('#sliding-nav').waypoint('sticky',{
        offset: 30,
    });

  //Scroll to Section
    $('.home-btn, nav li a, a.revolution-btn').click(function (){
      var elementID = $(this).attr('href');
      console.log(elementID);
        $('html, body').animate({
            scrollTop: $(elementID).offset().top -100
        }, 3000);
      return false;
    });

$('a.scrolling').click(function (){alert('this working?')})   

  $('.home-btn').click(function (){
      var elementID = '#' + $(this).attr('class');
      console.log(elementID);
        $('html, body').animate({
            scrollTop: $(elementID).offset().top
        }, 3000);
  });

  $('input[type="text"],input[type="email"]').clearField({blurClass: 'blurred'});

  $('a.colorbox').colorbox({iframe:true, innerWidth:720, innerHeight:405});

  alert("Hello!");

});