<!--Bayader AlHarbi-->
<!--Robot Base-->
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--embedded css-->
<style>
  body{
    background-image: url("robot.jpg");

  }
  button{
  border-radius:10px;
  width:150px;
  height:50px; 
  font-size:28px; 
  margin-right:40px;
  background-color: black;
  color: white;
}
.sto{
background-color: red;
margin-top: 10%;
margin-left: 15%;
}
.sta{
background-color: green;

}
.bac{
  margin-left: 10%;
}


</style>
<!--html-->
</head>
<body>
  <header style="    border: none;padding: 14px 28px; font-size: 20px; color:black;" >Robot Base</header>

<!--buttons---->
<form action="robotbase.php" method="post">
<button name="lef" id="lef">left</button>
<button name="rig" id="rig">right</button>
<p id="backfor">
<button name="back" class="bac" id="back">backward</button>
<button name="for" id="for">forward</button>
</p>
<p id="onoff">
<button name="stop" class="sto" id="stop">stop</button>
<button name="start"class="sta" id="start">start</button>
</p>
</form>

<!--php-->
<!--create connection with DB-->
  <?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password,"arminterface");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<!--connect the buttons-->
 <!--off-->
 <?php 

if (isset($_POST['stop'])) {
$sql =" UPDATE `base` SET `On/Off`='0'WHERE  `ID`='1'";
$result = $conn->query($sql);
 }
 ?>
<!--on-->
 <?php 

if (isset($_POST['start'])) {
$sql =" UPDATE `base` SET `On/Off`='1'WHERE  `ID`='1'";
$result = $conn->query($sql);
 }
 ?>
<!--directions-->
<!--left-->
  <?php 

if (isset($_POST['lef'])) {
$sql =" UPDATE `base` SET `direction`='left'WHERE  `ID`='1'";
$result = $conn->query($sql);
 }
 ?>
<!--right-->
  <?php 

if (isset($_POST['rig'])) {
$sql =" UPDATE `base` SET `direction`='right'WHERE  `ID`='1'";
$result = $conn->query($sql);
 }
 ?>
<!--backward-->
  <?php 

if (isset($_POST['back'])) {
$sql =" UPDATE `base` SET `direction`='backward'WHERE  `ID`='1'";
$result = $conn->query($sql);
 }
 ?>
<!--forward-->
  <?php 

if (isset($_POST['for'])) {
$sql =" UPDATE `base` SET `direction`='forward'WHERE  `ID`='1'";
$result = $conn->query($sql);
 }
 ?>

</body>
</html>