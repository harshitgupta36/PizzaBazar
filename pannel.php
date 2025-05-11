<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
</head>
<body class="container" style="background-color:black;">



<div class="row"><!-- ROW FOR PRODUCT START -->
<!-- DiskSTANDARD START -->
<div class="row">
<div class=" col-sm-offset-4 col-xs-offset-2" style="align-items: center;
  justify-content: center"><h1 style="width:18%;height:2px;display:inline-block;background: linear-gradient(to right,#241F00, #EFDBB6, gold);">&nbsp;&nbsp;</h1>&nbsp;&nbsp;<span style="font-weight:bold;color:gold;position:relative;top:-20px;font-size:30px">Supreme</span><h1 style="width:18%;height:2px;display:inline-block;background: linear-gradient(to right,gold, #EFDBB6,#241F00);">&nbsp;&nbsp;</h1></div>
</div>
<!-- DiskSTANDARD END -->




<?php
$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,'pizza');
$q="select * from supreme";
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
<p class="text-center" style="color:#926ABD"><?php echo $dish['DishStander']; ?></p>
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

/* rubhish */



<div class="row"><!-- ROW FOR PRODUCT START -->
<!-- DiskSTANDARD START -->
<div class="row">
<div class=" col-sm-offset-4 col-xs-offset-2" style="align-items: center;
  justify-content: center"><h1 style="width:18%;height:2px;display:inline-block;background: linear-gradient(to right,#241F00, #EFDBB6, gold);">&nbsp;&nbsp;</h1>&nbsp;&nbsp;<span style="font-weight:bold;color:gold;position:relative;top:-20px;font-size:30px">Supreme</span><h1 style="width:18%;height:2px;display:inline-block;background: linear-gradient(to right,gold, #EFDBB6,#241F00);">&nbsp;&nbsp;</h1></div>
</div>
<!-- DiskSTANDARD END -->




<?php
$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,'pizza');
$q="select * from supreme";
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
<p class="text-center" style="color:#926ABD"><?php echo $dish['DishStander']; ?></p>
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











/* rubhish */























<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>