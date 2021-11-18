<?php
$search = $_POST['search'];
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "hostel";  
$con = mysqli_connect($host, $user, $password, $db_name); 
$sql = "SELECT email,reg_no,roll_no,department,year,name,contact,parent,p_contact,address from admission WHERE reg_no='$search'";

$rs = mysqli_query($con, $sql);

if(!$rs ) 
{
      die('Selection failure: ' . mysql_error());
} 
$row = mysqli_fetch_array($rs);
echo "<center><br><br><br><br><br><h1><b>STUDENT DETAILS</b></h1></center><br><br>";
echo '<body style="background-color:#FBF6D9">';
while($row){
echo "<center><b>EMAIL ID<p style='color:red;'> $row[0]</p> <br> REGISTER NUMBER<p style='color:red;'>  $row[1]  </p> <br>ROLL NUMBER<p style='color:red;'>  $row[2] </p> <br>DEPARTMENT<p style='color:red;'>  $row[3] </p> <br>YEAR<p style='color:red;'>  $row[4] </p> <br>NAME<p style='color:red;'>  $row[5] </p> <br>CONTACT<p style='color:red;'>  $row[6] </p> <br>PARENT NAME<p style='color:red;'>  $row[7] </p> <br>PARENT CONTACT<p style='color:red;'>  $row[8]</p> <br>ADDRESS<p style='color:red;'>  $row[9] </p></b></center></tr>";
$row = mysqli_fetch_array($rs);
}
echo "</table>";
?>