var app = angular.module('deviceManagement', []);

app.controller('login', function($scope) {

    $scope.data = [
        {
            firstName  : 'Tanmay',
            lastName   : 'Maity',
            employeeId : 1234,
            phone      : 123456,
            address    : 'Address 1',
            email      : 'tanmayemail',
            password   : 'test',
            userType   : 'admin'
        },
        {
            firstName  : 'Bubai',
            lastName   : 'Maity',
            employeeId : 123456,
            phone      : 12345623,
            address    : 'Address 2',
            email      : 'bubaiemail',
            password   : 'test',
            userType   : 'user'
        },
        {
            firstName  : 'Bubun',
            lastName   : 'Maity',
            employeeId : 123423,
            phone      : 123456121,
            address    : 'Address 3',
            email      : 'bubunemail',
            password   : 'test',
            userType   : 'user'
        },
    ];

});