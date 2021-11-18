<!DOCTYPE html>
<html>
<meta chrset="UTF 8">
    <title>ACCEPT /DECLINE LEAVE REQUEST</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card w3-opacity-min">
    <a href="http://localhost:8080/hostel/BCL%20-%20Copy.php" class="w3-bar-item w3-button"><b><img src="TCE.jpg" class="logo" alt="logo"> TCE <i>HOSTEL SERVICE</i></b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">

      <a href="http://localhost:8080/hostel/addashboard.php" class="w3-bar-item w3-button"><b><i>DASHBOARD</i></b></a>
      <a href="http://localhost:8080/hostel/about.php" class="w3-bar-item w3-button"><b><i>ABOUT</i></b></a>
      <a href="http://localhost:8080/hostel/contact.php" class="w3-bar-item w3-button"><i>CONTACT</i></a>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<style>
body {
  background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPuFhx2CC1r5o5Lct_Nb7eKbUx4b8bHE2fww&usqp=CAU");
}
</style>
<br>
<br>
<br><br>
<br>
<script>
var app = angular.module("leavingRequest", []); 
app.controller("myCtrl", function($scope) {
    $scope.products = ["Manisha Leaving Date: 07/09/2021 Return Date: 09/09/2021", "Bindhu Leaving Date: 05/09/2021 Return Date: 07/09/2021", "Chitra Leaving Date: 07/09/2021 Return Date: 11/09/2021","Dhanuja Leaving Date: 07/12/2021 Return Date: 11/12/2021","Crashin Leaving Date: 12/12/2021 Return Date: 18/12/2021"  ];
    $scope.addItem = function () {
        $scope.errortext = "";
        if (!$scope.addMe) {return;}
        if ($scope.products.indexOf($scope.addMe) == -1) {
            $scope.products.push($scope.addMe);
        } else {
            $scope.errortext = "already accepted";
        }
    }
    $scope.removeItem = function (x) {
        $scope.errortext = "";    
        $scope.products.splice(x, 1);
    }
});
</script>

<center><div ng-app="leavingRequest" ng-cloak ng-controller="myCtrl" class="w3-card-2 w3-margin" style="max-width:400px;">
  <header class="w3-container w3-light-grey w3-padding-16">
    <h3>Leaving Request</h3>
  </header>
  <ul class="w3-ul">
    <li ng-repeat="x in products" class="w3-padding-16">{{x}}<span ng-click="removeItem($index)" style="cursor:pointer;" class="w3-right w3-margin-right">×</span></li>
  </ul>
  <div class="w3-container w3-light-grey w3-padding-16">
    <div class="w3-row w3-margin-top">
      <div class="w3-col s10">
        <input placeholder="view more" ng-model="addMe" class="w3-input w3-border w3-padding">
      </div>
      <div class="w3-col s2">
        <a href="http://localhost:8080/hostel/responseaccept.php"><button ng-click="addItem()" class="w3-btn w3-padding w3-green">Accept all</button><a>
      </div>
    </div>
    <p class="w3-text-red">{{errortext}}</p>
  </div>
</div>
</center>
</body>
</html>