<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Single page web app using Angularjs</title>
  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.3/angular.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.3/angular-route.min.js">   </script>    
<script src="script.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body ng-app="single-page-app">
  <div ng-controller="cfgController">
  <div>
 
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
         
</nav>
</div>
  <br/>
  <div ng-view>
 
  </div>
  </div>

<script src="https://code.angularjs.org/1.6.9/angular-route.js"></script>
<script src="https://code.angularjs.org/1.6.9/angular.min.js"></script>
<script src="https://code.angularjs.org/1.6.9/angular.js"></script>
<script src="lib/bootstrap.js"></script>
<script src="lib/bootstrap.css"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 30px;
  width:40%;
height:695px;
opacity:0.9;
}
body {
  background-image: url("https://assets.keap.com/image/upload/b_rgb:FFFFFF,c_limit,dpr_1,f_auto,h_395,q_95,w_569/v1/learn/images/Zz02ZTdiNjY2MDRjZjBjYjg2ZTQ0NzI3OGQ3M2QyMTE5Ng==.jpg");
  background-repeat: no-repeat;
background-size: cover;
}
</style>
<center><h1>HEY ADMIN POST INFORMATION FOR STUDENTS CONCERN!</h1></center>
<div ng-controller="AngularController">

    <form ng-submit="Display()">
        &nbsp;&nbsp;&nbsp;
        <center><h1> ENTER YOUR NAME</h1></center>
        <center><input type="text"  ng-app="sampleApp" ng-model="Topic"><br></center>
<center><h1>POST INFORMATION</h1></center>
<center><textarea id  rows="20" cols="80" ng-app="sampleApp" ng-model="post"><br></center></textarea>
        <h2><center><input type="submit" value="Submit"/></center></h2>

        <ul ng-repeat="topicname in AllTopic">
<h1>POSTED INFORMATION AS FOLLOWS</h1><br>
           <h2> {{topicname}}</h2>
        </ul>
    </form>
</div>

<script>
   var single-page-app = angular.module("single-page-app",[]);

    single-page-app.controller("AngularController",function($scope) {
        $scope.AllTopic=[];
        $scope.Display = function () {
            $scope.AllTopic.push($scope.Topic);
        }
    });
</script>
</body>
</html>