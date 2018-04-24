$(document).ready(function() {
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
	// $('#presenter #submit').click(function(event) {
	//     event.preventDefault();
	//     var postLink     = $('#presenterForm #postLink').val();
	//     var formData = $("#presenterForm").serialize();
	//     $.ajax({
	//         url: postLink,
	//         type: 'POST',
	// 		dataType: 'json',             
	//         data: formData,
	//         success: function(result)
	//         {
	//             if (result != 0 && result != 1) {
 //            		successNotiTR("Bạn đã đăng ký tham dự thành công!");
 //            	}
 //            	if (result == 1) {
 //            		errorNotiTR('Thông tin đăng ký đã tồn tại!');
 //            	}
 //            	if (result == 0) {
 //            		waringNotiTR('Đăng ký thất bại, vui lòng thử lại!')
 //            	}
	//         },
	//         error: function(data)
	//         {
	//             console.log(data);
	//         }
	//     });
	// });
	// $('#presenter #submit').click(function(event) {
	// 	$.ajax({
	// 		url: postLink,
	// 		type: 'POST',
	// 		dataType: 'json',
	// 		data: {
	// 			email  			: email,
	// 			name   			: name,
	// 			phone   		: phone,
	// 			address 		: address,
	// 			conference_id 	: conferenceId,
				
	// 			tieude  		: tieude,
	// 			title   		: title,
	// 			tukhoa   		: tukhoa,
	// 			keyword   		: keyword,
	// 			tomtat   		: tomtat,
	// 			abtract 		: abtract
	// 			file 			: file
 //            },
 //             beforeSend: function() {
 //              // $('#divloading').addClass('show');
 //            },
 //            success:function(result) {
 //            	if (result != 0 && result != 1) {
 //            		successNotiTR("Bạn đã đăng ký tham dự thành công!");
 //            	}
 //            	if (result == 1) {
 //            		errorNotiTR('Thông tin đăng ký đã tồn tại!');
 //            	}
 //            	if (result == 0) {
 //            		waringNotiTR('Đăng ký thất bại, vui lòng thử lại!')
 //            	}
 //            }
	// 	})		
	// });
})
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