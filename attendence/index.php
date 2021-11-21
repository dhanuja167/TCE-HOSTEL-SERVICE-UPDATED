<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title> TCE HOSTEL SERVICE</title>
<link type="text/css" rel="stylesheet" href="style.css">
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

      <a href="http://localhost:8080/hostel/addashboard.php" class="w3-bar-item w3-button"><b><i>DASHBOARD</i></b></a>
      <a href="http://localhost:8080/hostel/about.php" class="w3-bar-item w3-button"><b><i>ABOUT</i></b></a>
      <a href="http://localhost:8080/hostel/contact.php" class="w3-bar-item w3-button"><i>CONTACT</i></a>
    </div>
  </div>
</div>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./style.css">

</head>
<body>
</head>
<br><br>
<center><h1 style="font-size:65px;"><i><b>TCE HOSTEL SERVICE attendence</b></i></h1></center>
<style>
body {
background-image:url("https://img.freepik.com/free-vector/abstract-geometric-polygon-background-wallpaper-header-cover-with-triangle-shape-low-polly-soft-pastel-color_206846-1179.jpg?size=626&ext=jpg");
background-repeat: no-repeat;
background-size: cover;
}
</style>
<table>
<tr>
<td>
<!--HTML form for crud operation-->
<form autocomplete="off" onsubmit="onFormSubmit()">
<div>
<label for="fullName"> Name</label>
<input type="text" name="Name" id="Name" placeholder="Name">
</div>
<div>
<label for="Last name">room number</label>
<input type="text" name="password" id="password" placeholder="room">
</div>
<div>
<label for="leave date">present</label>
<input type="text" name="emailid" id="emailid" placeholder="present">
</div>
<div>
<label for="dept">absent</label>
<input type="text" name="phonenumber" id="phonenumber" placeholder="absent">
</div>
<div class="form_action--button">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</div>
</form>
</td>
<td>
<table class="list" id="playerlist">
<thead>
<tr>
<th>Name</th>
<th>room number</th>
<th>present</th>
<th>absent</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
</td>
</tr>
</table>
<script type="text/javascript" src="./script.js"></script>
</body>
</html>