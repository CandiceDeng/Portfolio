var contact = angular.module('contact-form',[]);
contact.controller('Ctrl', function($scope, $http){
	$scope.firstName = 'Human';
	$scope.lastName = 'Resource';
	$scope.place = 'a beautiful city';
	$scope.profession = 'recruiter';
	$scope.company = 'your dream company';
	$scope.message = 'Today I would like to inform you that your work is pretty impressive. Hope we could get contact to each other and furtherly talk about a precious working position in my company. This position is related to Software Development, which is a perfect fit to your professional background.';
	$scope.email = 'recruiter@yourdreamcompany.com'
	
	$http({
        url: "./Contact.php",
        method: "GET",
        data: {
            message: $scope.message,
        }
    }).success(function(data) {
    console.log(data);
	});
})