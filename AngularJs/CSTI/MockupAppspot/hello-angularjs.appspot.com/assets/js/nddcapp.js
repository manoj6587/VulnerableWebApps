angular.module('HelloModule', [])
.directive( 'hello', function( helloservice) {
	return {
		restrict: "E",
		scope:{
			name: '@'
		},
		controller: function( $scope, helloservice ) {
			$scope.updateName = function() {
			  helloservice.setName( $scope.name );
			};
		},
		link: function( scope, element, attrs ) {
		  helloservice.setName( scope.name );
		},
		templateUrl: '/assets/templates/hello1.html'
	}
})
.directive( 'bye', function( helloservice ) {
	return {
		restrict: "E",
		scope:{			
		},
		controller: function( $scope, helloservice ) {
		  $scope.name = helloservice.getName();  
		},
		link: function( scope, element, attrs ) {
		  scope.$watch(function() {
				return helloservice.name;
			}, function() {
				scope.name = helloservice.name;
			});
		},
		templateUrl: '/assets/templates/bye.html'
	}
})
.factory('helloservice', function(){
	return new User();
});

function User() {
	this.name = '';

	this.setName = function( name ) {
		this.name = name;
	};

	this.getName = function() {
		return this.name;
	};
}