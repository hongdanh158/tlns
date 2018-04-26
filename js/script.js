$(document).ready(function() {
	checkInput()
  new WOW().init();
  setHeight();
  $(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });
  //Click event to scroll to top
  $('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });
  	// Step
	if ($('.steps-container').length) {
		setWidth();
		var x = 0;
	    $('.steps .next').click(function(event) {
	    	x = x + $('.modal.presenter').width();
	    	transform(x);
	    	$('.steps-head').find('li').eq(0).removeClass('active');
	    	$('.steps-head').find('li').eq(1).addClass('active');
	    	$('.modal.presenter').css('overflow-y', 'auto');
	    });
	     $('.steps .prev').click(function(event) {
	    	x = x - $('.modal.presenter').width();
	    	transform(x);
	    	$('.steps-head').find('li').eq(0).addClass('active');
	    	$('.steps-head').find('li').eq(1).removeClass('active');
	    	$('.modal.presenter').css('overflow-y', 'hidden');
	    	$('.modal.presenter').animate({scrollTop : 0},400);
	    });
	};
	// End Step
	$(window).resize(function(){
        clearTimeout(window.resizeEvt);
        window.resizeEvt = setTimeout(function(){
        	setHeight();
        	setWidth();
        }, 250);
    });
	$(window).bind('resize', function(e){
	    window.resizeEvt;
	    $(window).resize(function(){
	        clearTimeout(window.resizeEvt);
	        window.resizeEvt = setTimeout(function(){
	        	setHeight();
	        	setWidth();
	        }, 100);
	    });
	});
	$('.input-field input, .input-field textarea').change(function(event) {
		if ($(this).val() != "") {
			$(this).closest('.input-field').find('label').eq(0).addClass('active');
		}
		else {
			$(this).closest('.input-field').find('label').eq(0).removeClass('active');
		}
	});
	$('#registration #submit').click(function(event) {
		var postLink     = $('#registration #postLink').val();
		var token     = $('#registration #token').val();
		var name         = $('#registration #name').val();
		var email        = $('#registration #email').val();
		var phone        = $('#registration #phone').val();
		var address      = $('#registration #address').val();
		var conferenceId = $('#registration #conferenceId').val();
		$.ajax({
			url: postLink,
			type: 'POST',
			dataType: 'json',
			data: {
				token			: token,
				email  			: email,
				name   			: name,
				phone   		: phone,
				address 		: address,
				conference_id 	: conferenceId,
            },
             beforeSend: function() {
              // $('#divloading').addClass('show');
            },
            success:function(result) {
            	if (result != 0 && result != 1) {
            		successNotiTR("Bạn đã đăng ký tham dự thành công!");
            	}
            	if (result == 1) {
            		errorNotiTR('Thông tin đăng ký đã tồn tại!');
            	}
            	if (result == 0) {
            		waringNotiTR('Đăng ký thất bại, vui lòng thử lại!')
            	}
            }
		})		
	});
	$('.search .btnSearch').click(function(event) {
		var postLink     = $('.search #postLink').val();
		var email        = $('.search #email').val();
		var articleId        = $('.search #articleId').val();
		$.ajax({
			url: postLink,
			type: 'POST',
			dataType: 'json',
			data: {
				email  			: email,
				article_id   	: articleId
            },
             beforeSend: function() {
              // $('#divloading').addClass('show');
            },
            success:function(result) {
            	if (result == 0) {
            		waringNotiTR('Không tìm thấy bài tham luận!');
            		$('.articleInfo').css('display', 'none');
            	}
            	else {
            		$('#updateForm #articleId').val(result[0].id);
            		$('#updateForm #tieude').val(result[0].tieude);
            		$('#updateForm #title').val(result[0].title);
            		$('#updateForm #tomtat').val(result[0].tomtat);
            		$('#updateForm #abtract').val(result[0].abtract);
            		$('#updateForm #tukhoa').val(result[0].tukhoa);
            		$('#updateForm #keyword').val(result[0].keyword);
            		if (result[0].file != null) {
            			$('#updateForm #oldFileLink').attr('href', 'http://localhost/cf/uploads/' + result[0].file);
            			$('#updateForm #oldFile').val(result[0].file);
            			$('#updateForm .oldFileLink').css('display', 'block');
            			//Set margin top modal
            			var num = 0 - ($(window).height() - $('#updateArticle').height() + 150)/2 
            			$('#updateArticle').css('margin-top', num);
            		}
            		checkInput();
            		$('.articleInfo').css('display', 'block');
            	}
            }
		})		
	});
});
function checkInput() {
	$('form input').each(function(index, el) {
		if ($(this).val() != "") {
			$(this).closest('.input-field').find('label').eq(0).addClass('active');
		}
		else {
			$(this).closest('.input-field').find('label').eq(0).removeClass('active');
		}
	});
	$('form textarea').each(function(index, el) {
		if ($(this).val() != "") {
			$(this).closest('.input-field').find('label').eq(0).addClass('active');
		}
		else {
			$(this).closest('.input-field').find('label').eq(0).removeClass('active');
		}
	});
}
function showModal(id) {
  	$(id).lightbox_me({
    	centered: true,
    	onLoad: function() { 
            $('body').css('overflow', 'hidden');
            setWidth();
        },
        onClose: function() { 
            $('body').removeAttr('style');
        },
    });
}
function transform(x) {
	$('.steps-container .steps-content').css({
		'transition-duration' : '0.5s',
		'transform' : 'translate3d(-' + x +'px, 0px, 0px)'
	});
}
function setHeight() {
	if ($(window).width() >= 1280) {
		$('.section-2 .left').height($('.section-2 .right').height() + 110);
		$('.section-3 .right').height($('.section-3 .left').height() + 110);
	}
	else {
		$('.section-2 .left').height($(window).width()/2);
		$('.section-3 .right').height($(window).width()/2);
	}
}
function setWidth() {
	var numSection = 2;
	var width = $('.modal.presenter').width();
	$('.steps-container .steps-content').css({width: numSection * width});
	 $('.modal.presenter').width(width);
}
// Thông báo popup
function successNotiTR(string) { 
    $.amaran({
        'theme'       : 'awesome ok',
        'content'     : {
          title       :'Thành công',
          message     : string,
          info        : '',
          icon        : 'fa fa-check'
        },
        'position'    : 'top right',
        'inEffect'    : 'slideRight',
        'delay'       : 10000,
        // 'sticky'      : true,
        'closeButton' : true
    });
}
function errorNotiTR(string) { 
    $.amaran({
        'theme'       : 'awesome error',
        'content'     : {
            title     : 'Thất bại',
            message   : string,
            info      : '',
            icon      : 'fa fa-times'
        },
        'position'    : 'top right',
        'inEffect'    : 'slideRight',
        'delay'       : 10000,
        // 'sticky'      : true,
        'closeButton' : true
    });
}
function waringNotiTR(string) { 
    $.amaran({
        'theme'       : 'awesome warning',
        'content'     : {
            title     : 'Chú ý',
            message   : string,
            info      : '',
            icon      : 'fa fa-exclamation'
        },
        'position'    : 'top right',
        'inEffect'    : 'slideRight',
        'delay'       : 10000,
        // 'sticky'      : true,
        'closeButton' : true
    });
}