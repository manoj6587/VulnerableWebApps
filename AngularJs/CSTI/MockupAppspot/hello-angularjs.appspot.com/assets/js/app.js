angular.module('HelloModule', [])
.directive( 'hello', function() {
	return {
		restrict: "E",
		scope:{
			name: '@'
		},
		templateUrl: 'assets/templates/hello.html'
	}
})