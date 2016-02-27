var app = angular.module('administracion',['ngRoute']);



app.controller('administracionCTRL', ['$scope', '$http', function ($scope, $http) {
         $scope.menuUP='encabezado.html'; 
//        $scope.menu='menu.html'; 
        $scope.titulo="Panel de Control. El Vocero."
        $scope.admNew = {};
        $scope.posicion=10;
        $http.get('php/noticiasAdmon.php').success(function (arrayAdmonNoticia) {
        $scope.admNew = arrayAdmonNoticia;
        });
       
       
       
        $scope.siguiente=function (){
            
         if($scope.admNew.length>$scope.posicion){
         $scope.posicion+=10;
     }  
        }
         $scope.anterior=function (){
            
         if($scope.admNew.length > 10){
         $scope.posicion-=10;
     }    
        }
        
}]);

