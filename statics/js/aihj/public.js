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

