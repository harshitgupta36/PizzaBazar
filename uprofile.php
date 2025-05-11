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
<html>
<head>
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="css\animate.css">

</head>













<body>

<!-- main container begin -->
<div class="container-fluid" style="background-color:black;padding:20px; border:4px solid #6A5E46;border-radius:10px;box-shadow:5px 5px 10px black">

<!--First Row-->
<div class="row">

<!--First Col-->
<div class="col-sm-3" >
<img src="photos\uprofile\<?php echo $row['ProfileImage']; ?>" class="img img-responsive center-block img-circle" style="box-shadow:3px 3px  black;height:300px;width:300px">
<br>

<a href="uprofiledetail.php" target="RIGHT" class="btn btn-lg center-block btn-primary " style="border-radius:0px; margin-top:3px;"><span class="  fa fa-user"></span>&nbsp;&nbsp;Profile</a>

<a href="#" target="RIGHT" class="btn btn-lg center-block btn-primary " style="border-radius:0px; margin-top:3px;"><span class="  fa fa-shopping-cart"></span>&nbsp;&nbsp;Cart <b class="btn btn-sm btn-danger">count</b></a>



<a href="uchangepassword.php" target="RIGHT" class="btn btn-lg center-block btn-primary " style="border-radius:0px; margin-top:3px;">
<span style="margin-left:-8px" class="  fa fa-cog"></span>&nbsp;Change Password</a>
<a href="ueditprofile.php" target="RIGHT" class="btn btn-lg center-block btn-primary" style="border-radius:0px; margin-top:3px;"><span class="  fa fa-pencil"></span>&nbsp;&nbsp;Edit Profile</a>

<a href="ulogout.php"  class="btn btn-lg center-block  " style="border-radius:0px; margin-top:3px;background-color:brown;color:white"><span class="  fa fa-lock"></span>&nbsp;&nbsp;Logout</a>




</div>
<!--End First Col-->

<!--Second col-->
<div class="col-sm-9" style="height:600px;">
<IFRAME NAME="RIGHT" src="uprofiledetail.php" style="width:100%;height:100%">

</IFRAME>
</div>
<!-- end Second col-->



</div>
<!--End First row-->





</div>
<!-- End main container begin -->





</body>






</html>