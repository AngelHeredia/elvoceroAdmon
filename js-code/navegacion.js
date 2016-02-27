app.config(function ($routeProvider) {
    $routeProvider
            .when('/', {
                templateUrl: 'Indexportada.html'
        
            })  .when('/noticiasAdmon', {
                templateUrl: 'noticiasAdmon.html'
            })
            .when('/newsUpdate/:id', {
                templateUrl: 'newsUpdatePublicacion.html',
                controller :'updateNoticiasCTRL'
                
            })
             
            .when('/elmina/:id', {
                templateUrl: 'elminaRegistro.html',
                controller :'deleteNoticiasCTRL'
                
                
            })
                
           
            .otherwise({
                redirectTo: '/'
            });
});

