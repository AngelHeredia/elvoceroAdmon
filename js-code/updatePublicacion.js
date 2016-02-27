 app.controller('updateNoticiasCTRL', ['$scope', '$routeParams', '$http', function ($scope, $routeParams, $http) {
        
        
        
       
        var id = $routeParams.id;
        $scope.noticiasUpdate = {};

        $scope.creando = false;
        if (id == "alta") {

            $scope.creando = true;

        } else {

            $http.get('php/noticiasupdate.php?i=' + id).success(function (arrayUpdate) {
                $scope.noticiasUpdate = arrayUpdate[0];



            });

        }
        
        $scope.uploadFile = function (){
            
         var name = $scope.name;
         var file= $scope.file;
         console.log(name);
         console.log(file);
         
            alert('se guardo correctamente');
         
            
            
        }
 
      app.directive('uploaderModel',["$parse", function ($parse){
              
                return {
                    
                    restrict:'A',
                    link: function (scope,iElement, iAttrs)
                    {
                        
                      iElement.on("change", function (e){
                          
                       $parse(iAttrs.uploaderModel).assign(scope, iElement[0].files[0]);   
                           
                      });  
                    }
              
              };
              
              
              
              
      }]);
          app.service ('upload',['$http','$q', function($http,$q)
      
    {   this.uploadFile = function (name,file){
            
            
            var deferred=$q.defer();
            var formData = new formData();
            
            formData.append('name',name);
            formData.append('file',file);
                   return $http.post("php/server.php", formData, {
			headers: {
				"Content-type": undefined
			},
			transformRequest: formData
		})
		.success(function(res)
		{
			deferred.resolve(res);
		})
		.error(function(msg, code)
		{
			deferred.reject(msg);
		})
		return deferred.promise;
	}	
}]);
        

        $scope.actualizarCambios = function () {

            if ($scope.creando) {

                 
                $http.post('php/addPublicacion.php', $scope.noticiasUpdate).sucess(function (data) {

                    console.log(data);
                });


            } else {


                $http.post('php/updateModificar.php', $scope.noticiasUpdate).sucess(function (data) {

                    console.log(data);
                });
            }


        }




//        $scope.editando = {};
//        $scope.Editar = function () {
//                angular.copy($scope.noticiasUpdate, $scope.editando);
//            }

        $scope.mcipiosUpdate = {};
        $http.get('php/municipios.php').success(function (arrayUpdate2) {


            $scope.mcipiosUpdate = arrayUpdate2;
        });

        $scope.menuUpdate = {};
        $http.get('php/menumunicipios.php').success(function (arrayUpdate1) {


            $scope.menuUpdate = arrayUpdate1;
        });



    }]);