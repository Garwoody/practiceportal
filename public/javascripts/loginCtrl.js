.controller('loginCtrl', function($scope, $loginService){
  $scope.login=function(user){
    loginService.login(user, $scope);
    refresh();
  }
  });