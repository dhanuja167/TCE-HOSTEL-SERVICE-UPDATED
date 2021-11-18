
<!DOCTYPE html>
<html>
<title>TCE HOSTEL</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js"></script>
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
      <a href="http://localhost:8080/hostel/studentdashboard.php" class="w3-bar-item w3-button"><b><i>DASHBOARD</i></b></a>
      <a href="http://localhost:8080/hostel/about.php" class="w3-bar-item w3-button"><b><i>ABOUT</i></b></a>
      <a href="http://localhost:8080/hostel/contact.php" class="w3-bar-item w3-button"><i>CONTACT</i></a>
    </div>
  </div>
</div>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./style.css">
</head>
<br><br><br><br><br><br><br><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<body ng-app="">
<center><b><h1 style="color:grey; font-size:50px;"><i>SEARCH FOR FOOD!!! CHOOSE THE DAY</i></h1></b></center>
<center><select ng-model="myVar">
<option value="car">TODAY'S MENU
<option value="choclate">TOMMORROW'S MENU
<option value="language">THE DAY AFTER TOMMORROW'S MENU
</select></center>
<hr>
<div ng-switch="myVar">
<div ng-switch-when="car">
<center><b><h1><i>TODAY'S MENU</i></h1></b></center>
<center><b><h1><i>BREAK FAST: 
  <li>COFFEE,MILK</li>
  <li>PONGAL,VADAI,SAMBAR</li>
LUNCH:
  <li>VEGETABLE BRIYANI,KURUMA</li>DINNER<li>DOSA,CHUTNEY</li>
 </i></h1></b></center>
</div>
<div ng-switch-when="choclate">
<center><b><h1><i>TOMMORROW'S MENU</i></h1></b></center>
<center><b><h1><i>BREAK FAST: 
  <li>COFFEE,MILK</li>
  <li>DOSA,SAMBAR</li>
LUNCH:
  <li>MUSHROOM BRIYANI,ROSE MILK</li>DINNER<li>CHAPPATHI,CHANNA MASALA</li>
 </i></h1></b></center>
</div>
<div ng-switch-when="language">
<center><b><h1><i>THE DAY AFTER TOMMORROW'S MENU</i></h1></b></center>
<center><b><h1><i>BREAK FAST: 
  <li>COFFEE,MILK</li>
  <li>BREAD,BUTTER,JAM,UPMA,CHUTNEY</li>
LUNCH:
  <li>SAMBAR,LEMON RICE,LEMON JUICE</li>DINNER<li>PAROTTA,KURUMA</li>
 </i></h1></b></center>
</div>

<div ng-switch-default>
<center><b><h1 style="color:grey; font-size:50px;"><i>WELCOME TO TCE HOSTEL SERVICE</i></h1></b></center>
<center><b><h1 style="color:grey; font-size:50px;"><i>HAVE A GREAT AND SUMCEOUS FOOD DAILY</i></h1></b></center>
</div>
</div>
<hr>
<style>
body {
  background-image: url('https://image.shutterstock.com/image-photo/abstract-background-pattern-blurry-colored-260nw-265646876.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
</body>
</html>