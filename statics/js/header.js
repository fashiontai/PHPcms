(function(){
	$(document).ready(function(){
		//导航栏加class事件
		function request(key){
			var arr = (''+location.href).split('?');
			if(arr.length>1){
				var col= arr[1].split('&');
				for(var i=0;i<col.length;i++){
					var a = col[i].split('=');
					if(a[0]==key){
						return a[1];
					}
				}
				return '';
			}else{
				return '';
			}
		}
		var catid = request("catid");
		var oLi  = $('.header_right>li');
		$('.header_right>li').removeClass('active');
		$.each(oLi, function(i,ele) {
			if($(ele).attr('rel') == catid){
				$(this).addClass('active');
			}
		});
	})
})()
