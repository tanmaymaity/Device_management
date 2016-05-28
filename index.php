<?php ?>
<!DOCTYPE html>
<html ng-app="deviceManagement">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://bootswatch.com/superhero/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script src="custom.js"></script>
    </head>
    <body ng-controller="login">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2><span class="glyphicon glyphicon-phone"></span> Device Management</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <input type="text" class="form-control" ng-model="name" />
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                        </tr>
                        <tr ng-repeat="user in filteredData = (data | filter: {firstName: name})">
                            <td>{{user.firstName}}</td>
                            <td>{{user.address}}</td>
                            <td>{{user.phone}}</td>
                            <td>{{user.email}}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12" ng-show="!filteredData.length">
                    No Result
                </div>
            </div>
        </div>
    </body>
</html>