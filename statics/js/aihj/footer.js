(function(){
	$(document).ready(function(){
		$("#toTop").on('click',function(){
			$('body,html').animate({scrollTop:'0px'},1000);
		})
		$(window).scroll(function(){
			var winScrolltop = Math.floor($(this).scrollTop());
			if(winScrolltop > 0){
				$('#toTop').show();
			}else{
				$('#toTop').hide();
			}
		})
		//手机端footer点击样式
		$('.service_details p').on('click',function(){
			var _this = $(this);
			var dis = $(this).next('ul').css('display');
			$('.service_details').find('ul').not($(this).next('ul')).slideUp(function(){
					$('.small_sel').find('img').attr('src','http://localhost/statics/images/aihj/up.png')
				});
			$(this).next('ul').slideToggle(function(){
				if(dis == 'none'){
					_this.children('.small_sel').find('img').attr('src','http://localhost/statics/images/aihj/down.png')
				}else{
					_this.children('.small_sel').find('img').attr('src','http://localhost/statics/images/aihj/up.png')
				}
			});
		})
		$("#menuHeader").on('click',function(){
			$(".headerSlide").slideToggle();
		})
		
		$("#oVedio").on('click',function(){
			if($('#content').hasClass('content')){
				var conH = Math.floor($('#content').offset().top);
				console.log(conH);
				$('body,html').animate({scrollTop:conH+'px'},1000);
			}else{
				location.href = 'http://www.aihj.ren';
			}
		})
	})
})()
