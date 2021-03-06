<!DOCTYPE html>
<html ng-app="website">
<title>TCE HOSTEL</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card w3-opacity-min">
    <a href="#home" class="w3-bar-item w3-button"><b><img src="TCE.jpg" class="logo" alt="logo"> TCE <i>HOSTEL SERVICE</i></b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">


      <a href="http://localhost:8080/hostel/studentdashboard.php" class="w3-bar-item w3-button"><b><i>DASHBOARD</i></b></a>
      <a href="http://localhost:8080/hostel/about.php" class="w3-bar-item w3-button"><b><i>ABOUT</i></b></a>
      <a href="http://localhost:8080/hostel/contact.php" class="w3-bar-item w3-button"><i>CONTACT</i></a>
    </div>
  </div>
</div>
  <head>
    <link data-require="bootstrap-css@*" data-semver="3.3.1" rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.10.3/TweenMax.min.js"></script>
    <script data-require="angular.js@*" data-semver="1.4.0-beta.5" src="https://code.angularjs.org/1.4.0-beta.5/angular.js"></script>
    <script data-require="angular-animate@*" data-semver="1.4.0-beta.5" src="https://code.angularjs.org/1.4.0-beta.5/angular-animate.js"></script>
    
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
    
    <!-- CSS Transition Example
    <link rel="stylesheet" href="transitions.css" />
    --> 
    <!-- CSS Keyframe Animation Example
    <link rel="stylesheet" href="animations.css" />
    -->
    <!-- JS Animation Example -->
    <script src="animations.js"></script>
    

  </head>

  <body ng-controller="MainCtrl">
    <div class="slider">
      <div ng-repeat="slide in slides" ng-hide="!isCurrentSlideIndex($index)" class="slide slide-animation">
        <img class="nonDraggableImage" ng-src="{{slide.bg}}" />
        <img class="nonDraggableImage avatar" ng-src="{{slide.avatar}}" />
        <h1 class="title">
          <span>{{slide.title}}</span>
        </h1>
        <h3 class="subtitle">
          <span>{{slide.subtitle}}</span>
        </h3>
      </div>
    </div>
    <div class="nav">
      <div ng-repeat="slide in slides" ng-class="{'active':isCurrentSlideIndex($index)}" ng-click="setCurrentSlideIndex($index)">
        <h3>{{slide.title}}</h3>
      </div>
    </div>
  </body>
</html>
