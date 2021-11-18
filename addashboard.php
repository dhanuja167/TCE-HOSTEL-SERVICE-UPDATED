<!DOCTYPE html>
<html>
<title>TCE HOSTEL</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<header class="w3-container w3-large w3-padding-24">
<!-- Navbar (sit on top) -->
<div class="w3-top">

<div class="w3-content" style="max-width:1500px">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card w3-opacity-min">
    <a href="http://localhost:8080/hostel/BCL%20-%20Copy.php" class="w3-bar-item w3-button"><b><img src="TCE.jpg" class="logo" alt="logo"> TCE <i>HOSTEL SERVICE</i></b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="http://localhost:8080/hostel/about.php" class="w3-bar-item w3-button"><b><i>ABOUT</i></b></a>
      <a href="http://localhost:8080/hostel/contact.php" class="w3-bar-item w3-button"><b><i>CONTACT</i></b></a>

      <a href="http://localhost:8080/hostel/admin.php" class="w3-bar-item w3-button"><b><i>LOG OUT</i></b></a>
    </div>
  </div>
</div>
</header>
<style>
body {font-family: "Raleway", Arial, sans-serif}
.w3-row img {margin-bottom: -8px}
.container .btn {
  position: absolute;
  top: 70%;
  left: 25%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: black;
  color: white;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
opacity:0.8;
}

.container .btn:hover {
  background-color: powderblue;
color: black;
}
.container1 .btn {
  position: absolute;
  top: 70%;
  left: 75%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:powderblue;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
opacity:0.8;
}
.container1 .btn:hover {
  background-color: black;
color: white;
}
.container2 .btn {
  position: absolute;
  top: 187%;
  left: 25%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:powderblue;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
opacity:0.8;
}
.container2 .btn:hover {
  background-color: black;
color: white;
}
.container3 .btn {
  position: absolute;
  top: 187%;
  left: 75%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:white;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
opacity:0.8;
}
.container4 .btn {
  position: absolute;
  top: 270%;
  left: 25%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color:white;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
opacity:0.8;
}
.container4 .btn:hover {
  background-color: powderblue;
color: black;
}
img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
</style>
<body>




  <!-- Photo Grid -->
  <div class="w3-row">
    <div class="w3-half">
    <div class="container">
      <a href="http://localhost:8080/hostel/admission.php"><img src="https://live.staticflickr.com/8277/8975521109_fa2261b8ac_b.jpg" style="width:100%"></a>
      <button class="btn"><b>ADMISSION</b></button>
</div>
      <div class="container2">
      <a href="http://localhost:8080/hostel/post.php"><img src="https://upload.wikimedia.org/wikipedia/commons/7/7c/Infinite-corridor-bboard.jpeg" style="width:100%"></a>
      <button class="btn"><b>POST ON NOTICE BOARD</b></button>
</div>
    </div>

    <div class="w3-half">
<div class="container1">
      <a href="http://localhost:8080/hostel/search.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQohg44Dcp8NtoCiZM6_n_-qRBy1GcczZbHjtop-xIV_oYFV1Eu7XtjVG1nBs-Ee8Eksp0&usqp=CAU" style="width:100%"></A>
      <button class="btn"><b>SEARCH STUDENT DETAILS</b></button>
</div>
<div class="container3">
      <a href="http://localhost:8080/hostel/accept.php"><img src="https://content.jdmagicbox.com/comp/kodaikanal/s4/9999p4542.4542.170823142347.p2s4/catalogue/tourist-guide-sakthivel-kodaikanal-ho-kodaikanal-car-rental-x8oashjyy1.jpg" style="width:100%"></A>
      <button class="btn"><b>ACCEPT/DECLINE LEAVE REQUEST</b></button>
    </div>
  </div>
  <div class="w3-half">
    <div class="container4">
      <a href="http://localhost:8080/hostel/attendence/"><img src="data:image/jpeg;base64,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" style="width:100%"></a>
      <button class="btn"><b>ATTENDENCE</b></button>
</div>
      <div class="container5">
      <a href=""><img src="" style="width:100%"></a>
      <button class="btn"><b></b></button>
</div>
    </div>


 
</body>
</html>