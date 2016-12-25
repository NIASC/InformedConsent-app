$(".slider").ready(function(){
  var interval=false;
  $('.playbtn').click(function(){
    if($(this).children().eq(0).is('.glyphicon-play')) {
      $(this).children().eq(0).removeClass('glyphicon-play');
      $(this).children().eq(0).addClass('glyphicon-pause');
      autoPlayInterval();
    }
    else {
      $(this).children().eq(0).addClass('glyphicon-play');
      $(this).children().eq(0).removeClass('glyphicon-pause');
      clearInterval(interval);
    }
  });

  // $(this).find('.play').trigger('click');

  $('.slider li').eq(0).addClass('active');

  var block=false;
  $(this).find(".btn.btn-link.btn-slider-next").click(function(e){
    e.preventDefault();
    nextSlide();
  });
  $(this).find(".btn.btn-link.btn-slider-prev").removeAttr('disabled');


  $(this).find(".btn.btn-link.btn-slider-prev").click(function(e){
    $this=$(this);
    prevSlide();
    console.log("ready");
  });
  $.fn.hasAttr = function(attr) { var attribVal = this.attr(attr); return (attribVal !== undefined) && (attribVal !== false); }

  $(window).resize(function(){
      $('.slider ul').attr('style', 'left:-'+$('.slider li.active').position().left+'px');

      console.log($('.slider li.active').position().left);
  });


function prevSlide() {
  if(!block){
    if(!$(".slider li").eq(0).is('.cloned') && $(".slider li.active").prev().length == 0) {
      $('.slider li').not('.cloned').last().clone().addClass('cloned').prependTo($('.slider li').parent());

      $('.slider ul').animate({
        left:'-'+$('.slider ').innerWidth()
      },0);
    }

    block=true;
    $('.slider ul').animate({
      'left' : '-' +   $('.slider li.active').prev().position().left
    },function(){
      block=false;
      $('.slider li.active').removeClass('active').prev().addClass('active');
      if( $('.slider li.active').prev().length == 0 ) {
        if(!$('.slider li.active').is('.cloned')){
          $('.slider li').not('.cloned').last().clone().addClass('cloned').prependTo($('.slider li').parent());
        } else {
          $('.slider ul').animate({
            left:'-'+$('.slider li').not('.cloned').last().position().left
          },0);
          $('.slider li.active').removeClass('active');
          $('.slider li').not('.cloned').last().addClass('active');
        }
      }
    });
  }
}

function autoPlayInterval(){
  if(interval == false){
    interval=setInterval(function(){
      if($('.slide-content').css('display') != 'none' && !isHidden($('.slide-content')[0]))
        nextSlide();
    },5000);

    console.log('k');
  }

  console.log(interval == false && $('.slide-content').css('display') != 'none');
};

function isHidden(el) {
    return (el.offsetParent === null)
}
function nextSlide($this){
  if(!block){
    block=true;
    if( $('.slider li.active').next().length == 0 &&  !$('.slider li').last().is('.cloned')) {

          $('.slider li').not('.cloned').eq(0).clone().addClass('cloned').appendTo('.slider ul');
      }
    $('.slider ul').animate({
      'left' : '-' +   $('.slider li.active').next().position().left
    },function(){
      block=false;
      $('.slider li.active').removeClass('active').next().addClass('active');
      if( $('.slider li.active').next().length == 0 ) {
        {
          if(!$('.slider li.active').is('.cloned')){
            $('.slider li').not('.cloned').eq(0).clone().addClass('cloned').appendTo('.slider ul')
          } else {
            $('.slider ul').animate({
              left:'-'+$('.slider li').not('.cloned').eq(0).position().left
            },0);
            $('.slider li.active').removeClass('active');
            $('.slider li').not('.cloned').eq(0).addClass('active');
          }
        }
      }
    });
  }
  console.log("ready");
}


// $(".slide-content").hover(function() {
//   clearInterval(interval);
//   interval=false;
// }, function() {
//   autoPlayInterval();
// });

$('.slider').on('swipeleft', function(){
  nextSlide();
});

$('.slider').on('swiperight', function(){
  prevSlide();
});

});
