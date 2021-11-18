<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>TCE HOSTEL</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card w3-opacity-min">
    <a href="http://localhost:8080/hostel/BCL%20-%20Copy.php" class="w3-bar-item w3-button"><b><img src="TCE.jpg" class="logo" alt="logo"> TCE <i>HOSTEL SERVICE</i></b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="http://localhost:8080/hostel/about.php" class="w3-bar-item w3-button"><b><i>ABOUT</i></b></a>
      <a href="http://localhost:8080/hostel/contact.php" class="w3-bar-item w3-button"><i>CONTACT</i></a>
    </div>
  </div>
</div>
<br><br><br><br>
<div ng-app="myApp" ng-controller="myCtrl">
<b><h1><center>Mess Food:</center></h1></b>
<center>
<select ng-model="selectedAgent">
<option ng-repeat="x in Agent" value="{{x.model}}">{{x.model}}</option>
</select>
</center>
<center>
<h1 style="color:black">Food: {{selectedAgent}}</h1></center>
</div>
<center>
<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {
    $scope.Agent = [
        {model : "Today"},
        {model : "Tomorrow"},
        {model : "Day After Tomorrow"}
    ];
});
</script>
</center><br>
<b><i><h1 style="color:grey"><center>Todays Food:-</center></h1></i></b>
<i><h2 style="color:grey"><center>Breakfast : Idly,Sambar,Pongal</center></h2></i></b>
<i><h2 style="color:grey"><center>Lunch : Mushroom Biriyani,Kurma,Curd Rice</center></h2></i></b>
<i><h2 style="color:grey"><center>Dinner : Dosa,Sambar,Milk</center></h2></b>
<style>
body {
  background-image: url('https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v546batch3-mynt-34-badgewatercolor_1.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=89288ef4b47127f7f34a5998b50e4470');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
</body>
</html>