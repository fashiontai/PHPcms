(function(){
	//导航栏加class事件
	var catid = request("catid");
	var oLi  = $('.header_right>li');
	$('.header_right>li').removeClass('active');
	if(catid == ''){
		$('.header_right>li').eq(0).addClass('active');
	}else if(catid >=13 && catid<=15){
		$('.header_right>li').eq(1).addClass('active');
		changeColor(catid);
	}
	//else if(catid >=16 && catid<=17){
		//$('.header_right>li').eq(5).addClass('active');
		//changeColor(catid);
	//}
	$.each(oLi, function(i,ele) {
		if($(ele).attr('rel') == catid){
			$(this).addClass('active');
		}
	});
	function changeColor(obj){
		var n = Number(obj);
		switch(n){
	  		case 13:$('li[rel=13]').find('a').css('color','#F86262');
	    	break;
	 		case 14:$('li[rel=14]').find('a').css('color','#F86262');
	        break;
	  		case 15:$('li[rel=15]').find('a').css('color','#F86262');
	        break;
	        //case 16:$('li[rel=16]').find('a').css('color','#F86262');
	   	 	//break;
	  		//case 17:$('li[rel=17]').find('a').css('color','#F86262');
	  		//break;
 		}
	}
})()
