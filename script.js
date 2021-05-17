$(function(){
  $('.signup-show').click(function(){
    $('#signup-modal').fadeIn();
  });

  $('.login').click(function(){
    $('#login-modal').fadeIn();
  });

  $('.close-modal').click(function(){
    $('#signup-modal').fadeOut();
    $('#login-modal').fadeOut();
  });

  $('.lesson').hover(
    function(){
      $(this).find('.text-contents').addClass('text-active');
    },
    function(){
      $(this).find('.text-contents').removeClass('text-active');
  });

  // $('.lesson').hover(
  //   function(){
  //     $(this).find('.text-contents').css('color', '#b3aeb5');
  //   },
  //   function(){
  //     $(this).find('.text-contents').css('color', '#f7f7f7');
  // });
  
  $('.faq-list-item').click(function(){

    var $answer = $(this).find('.answer');

    if($answer.hasClass('open')){
      $answer.slideUp();
      $answer.removeClass('open');
      $(this).find('span').text('+');
    } else {
      $answer.slideDown();
      $answer.addClass('open');
      $(this).find('span').text('-');
    }
  });

  // //画面のどこかをクリックしたらモーダルを閉じる
  // $("#modal-bg,.modal").click(function(){
  //   $(".modal,#modal-bg").fadeOut("slow",function(){
  //  //挿入した<div id="modal-bg"></div>を削除
  //       $('#modal-bg').remove() ;
  //  });

  // });

  //画面の左上からmodal-mainの横幅・高さを引き、その値を2で割ると画面中央の位置が計算できる
  $(window).resize(modalResize);

  function modalResize(){

    var w = $(window).width();
    var h = $(window).height();

    var cw = $(".modal").outerWidth();
    var ch = $(".modal").outerHeight();

    //取得した値をcssに追加する
    $(".modal").css({
        "left": ((w - cw)/2) + "px",
        "top": ((h - ch)/2) + "px"
    });
  }

  /*--------------*/
	/*--Back to Top--*/
	/*-------------*/
	
	$('#back_to_top').hide();
	
	$(window).scroll(function() {
		if ($(this).scrollTop() > 60) {
			$('#back_to_top').fadeIn();
		} else {
			$('#back_to_top').fadeOut();
		}
	});
	
	$('#back_to_top').click(function() {
			$('body, html').animate({
				scrollTop:0
			}, 500);
			return false;
		});

	$('.startpoint').click(function(){
		var contactPadding = 40;
        var targetTop = $('#contactform').offset().top;
        $('html,body').animate({
            scrollTop: targetTop-contactPadding
        }, 500);
        return false;
    });

});