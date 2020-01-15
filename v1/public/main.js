

const url = 'http://localhost/mvc/v1';

//HACE LA PETICION 
function httpRequest(method, url, callback){ 

	const http = new XMLHttpRequest();
	http.open(method, url);
	http.send();

	http.onreadystatechange = function(){

		if (this.readyState == 4 && this.status == 200) {
			callback.apply(http);
		}
	}
}



