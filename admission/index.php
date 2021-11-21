<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset = "UTF-8">
<title> TCE HOSTEL SERVICE</title>
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
<style>
body{
background-image:
url('https://cdn.wallpapersafari.com/40/17/6Gqkfu.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
header{
text-align: center;
height: 100px;
padding-top: 1px;
background-color: #008080;
color: #FFFFFF;
font-size: x-large;
}
h3{
margin-top: 2px;
text-align: center;
background-color: #FFB833;
}
form{
width: 45%;
display: inline-block;
margin: 20px;
}
footer{
margin-top: 3%;
text-align: center;
}
</style>

<br><br><br>
<center><h1>TCE HOSTEL SERVICE-ADMISSION</h1></center>

<form action="/add" method="POST">
<fieldset>
<h3>Add new Student Details</h3>
<label style="color:white;">Student ID</label>
<input type ="text" id = 'stuID' name="id" required>
<br><br>
<label style="color:white;">Student Name</label>
<input type="text" id = "name" name="name" required>
<br><br>
<button type ="reset">Reset</button>
<button type ="submit">Submit</button>
</fieldset>
</form>
<form action="/view" method="POST">
<fieldset>
<h3>Search for Student </h3>
<label>Student ID</label>
<input type="text" id="stuID" name="id" required>
<br><br>
<button type ="reset">Reset</button>
<button type ="submit">Submit</button>
<br><br><br>
</fieldset>
</form>
<form action="/update" method="POST">
<fieldset>
<h3>Update Student details</h3>
<label style="color:white;">Student ID</label>
<input type ="text" id = 'empID' name="id" required>
<br><br>
<label style="color:white;">New Name</label>
<input type="text" id = "name" name="name" required>
<label style="color:white;">New address</label>
<input type="text" id = "address" name="address" required>
<br><br>
<button type ="reset">Reset</button>
<button type ="submit">Submit</button>
</fieldset>
</form>
<form action="/delete" method="POST">
<fieldset>
<h3>Delete Student details</h3>
<label>Student ID</label>
<input type ="text" id = 'stuID' name="id" required>
<br><br>
<button type ="reset">Reset</button>
<button type ="submit">Submit</button>
<br><br><br>
</fieldset>
</form>
<footer>
<hr>
</footer>
</body>
</html>