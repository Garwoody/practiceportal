app.factory('loginService', function($http){
	return{
		login:function(user, scope){
			var $promise=$http.post('components/login-process.php',user);
			$promise.then(function(msg){
			if(msg.data=='success') scope.isLoggedIn = true;
		    });
		}
	}
  });