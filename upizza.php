<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
</head>
<body class="container" style="background-color:black;">
<!-- NAVEBAR START -->






<div class="container">
<div class="navbar " style="background-color:black">

<!-- header -->

<div class="navbar-header" stylesheet="background-color:black">
<!-- brand -->
<div class="navbar-brand" ><span>
<a  class="logo" href="index.html" style=><img src="photos/logo.png" class="img img-responsive" style="position:relative;bottom:10px;"></a></span>
</div>
<!-- End brand -->
<!-- collapse for responsive -->
<button class="navbar-toggle btnicon" data-toggle="collapse" data-target=".navbar-collapse">
<span class="icon-bar" style="background-color:white"></span>
<span class="icon-bar" style="background-color:white"></span>
<span class="icon-bar" style="background-color:white"></span>

</button>
<!-- collapse for responsive -->
</div>
<!-- end header -->
	
	
<!-- collapse menu -->

<div class="navbar-collapse collapse animated slideInLeft" style="font-size:23px;color:white" >

    <ul class="nav navbar-nav">
      <li><a href="index.html">Home</a></li>
      <li><a href="upizza.php">Pizza</a></li>
      <li><a href="umore.php">More</a></li>
    <!/ul>
	<!ul class="nav navbar-nav navbar-right">
	<li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Admin Login</a></li>
      <li><a href="signinform.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
	</div>
	<!-- clse Collapse -->
  </div>
</div>

  
<!-- NAVEBAR END -->
<?php
$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,'pizza');
$qfp="select * from constructer";
$rfp=mysqli_query($con,$qfp);
$TotalSet=mysqli_num_rows($rfp); 
for($j=1;$j<=$TotalSet;$j++){
  $disSetRow=mysqli_fetch_array($rfp);

 
?>


<div class="row"><!-- ROW FOR PRODUCT START -->
<!-- DiskSTANDARD START -->
<div class="row">
<div class=" col-sm-offset-4 col-xs-offset-2" style="align-items: center;
  justify-content: center"><h1 style="width:18%;height:2px;display:inline-block;background: linear-gradient(to right,#241F00, #EFDBB6, gold);">&nbsp;&nbsp;</h1>&nbsp;&nbsp;<span style="font-weight:bold;color:gold;position:relative;top:-20px;font-size:30px"> <?php /* contol by outer loop*/ echo $disSetRow['ProductName']; ?></span><h1 style="width:18%;height:2px;display:inline-block;background: linear-gradient(to right,gold, #EFDBB6,#241F00);">&nbsp;&nbsp;</h1></div>
</div>
<!-- DiskSTANDARD END -->




<?php

$q="select * from"." ".$disSetRow['ProductName'];
?>
  
<?php 
$result=mysqli_query($con,$q);
$TotalDish=mysqli_num_rows($result);
for($i=1;$i<=$TotalDish;$i++){
	$dish=mysqli_fetch_array($result);
?>
<div class="pannel col-sm-4 col-sm-offset-<?php 
$a=$TotalDish%3;
if($a==1&&$i==$TotalDish)
	echo 4;
else if($a==2&&$i==$TotalDish-1)
	echo 2;
else
	echo 0;

?>">
<div class="pannel-body">
<img src="<?php echo $dish['DishPath']; ?>" class="img img-responsive center-block">
</div>
<div class="pannel-body">
<p class="text-center" style="color:#926ABD"><?php /* contol by outer loop*/ echo $disSetRow['ProductName']; ?></p>
<p class="text-center" style="color:white;font-weight:bold;font-size:20px"><?php echo $dish['DishName']; ?></p>
<p class="text-center" style="color:white;height:40px;"><?php echo $dish['DishMetarial']; ?></p>
<p class="text-center" style="color:white"><b>Crust:</b>&nbsp;<span><?php echo $dish['Crust']; ?> &nbsp;|&nbsp;</span><b>Size:</b>&nbsp;<span><?php echo $dish['Size']; ?> &nbsp;|</span>&nbsp;<span style="color:white" class="fa fa-cog"></span>
<p>
<p class="text-center" style="color:white;font-size:20px;"><span class="fa fa-inr"style="position:relative;bottom:10px;"></span><span style="color:white;font-weight:bold;font-size:40px"><?php echo $dish['DishPrice']; ?></span></p>
<button class="btn btn-success center-block" style="width:80%">Order Now</button>
<br>
</div>
</div>
<?php } ?>
</div><!-- ROW FOR PRODUCT END -->
<?php } ?>





<?php
mysqli_close($con);
?>


















<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>