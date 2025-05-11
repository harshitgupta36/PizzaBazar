<?php 
session_start();
if(!isset($_SESSION['email']))
	header("Location:uloginform.html");

$email=$_SESSION['email'];
$con=mysqli_connect("localhost","root","","useractivity");
$q="select * from sighnin where email='$email'";
$query=mysqli_query($con,$q);

$row=mysqli_fetch_array($query);



?>

<?php 
//change--------We Replace $_SESSION->$row


?>











<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="signinform.css">
<style>
.subtitle{
	font-size:30px;
	display:inline-block;
	width:170px;
	color:silver;
}
.subtitlevalue{
	font-size:30px;
	color:white;
}
</style>
</head>
<body style="background-color:black">
<div class="navbar-brand" ><span>
<a  class="logo"  style=><img src="photos/logo.png" class="img img-responsive" style="position:relative;bottom:10px;"></a></span>
</div>




<!-- Modal FOR SIGN START -->
<br><br>
<br><br>
<div class="row">
 <img class="img img-responsive center-block" src="photos/uprofile/<?php  echo $row['ProfileImage'];?>" >
<div>
<div class="row">
<div class="col-sm-offset-4">
<span class="row"><span class="subtitle">Name:</span><span class="subtitlevalue" style="color:white"><?php  echo $row['name'];?></span></span>
<span class="row"><span class="subtitle">Email:</span><span class="subtitlevalue"><?php  echo $row['email'];?></span></span>
<span class="row"><span class="subtitle">Contact No.:</span><span class="subtitlevalue"><?php  echo $row['mobile'];?></span></span>
<span class="row"><span class="subtitle">Address:</span><span class="subtitlevalue"><?php  echo $row['address'];?></span></span>

</div>
</div>
 

<!-- Modal FOR SIGN END -->







<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>