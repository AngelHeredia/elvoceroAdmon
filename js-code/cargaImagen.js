app.controller('cargaimagenCTRL',['$scope','upload', function ($scope,$upload){
        
        


$scope.uploadFile = function (){
            
         var name = $scope.name;
         var file= $scope.file;
         console.log(name);
         console.log(file);
         
            
            
        }
 }]);
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