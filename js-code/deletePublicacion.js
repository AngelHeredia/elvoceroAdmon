app.controller('deleteNoticiasCTRL', [ '$routeParams', '$http', function ( $routeParams, $http) {

 var id = $routeParams.id;
$http.post('php/deleteNoticias.php?d='+ id).success(function(){});   
     
    }]);