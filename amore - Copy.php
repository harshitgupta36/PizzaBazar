<html>
<head>
<link rel="stylesheet" href="css\animate.css">
<link rel="stylesheet" href="css\bootstrap.css">
<link rel="stylesheet" href="css\font-awesome.css">
<link rel="stylesheet" href="mystyle.css">
</head>
<body class="container" style="background-color:Red;">
 <!--AddNEWPRODUCT-->
 <br>
 <div class="row">
 <a class="btn btn-success btn-lg col-xs-offset-3 col-xs-6 col-sm-offset-8 col-sm-4" data-toggle="modal" data-target="#formforaddproduct"> Add New Product </a>
 </div>
<?php ?>
<!--AddNEWPRODUCT-->
<?php
$DishPage="more";
$con=mysqli_connect('localhost','root');
if(!$con)
	echo"Connection Failed";
mysqli_select_db($con,$DishPage);
$qfp="select * from constructer";
$rfp=mysqli_query($con,$qfp);
$TotalSet=mysqli_num_rows($rfp); 
for($j=1;$j<=$TotalSet;$j++){
  $disSetRow=mysqli_fetch_array($rfp);

 
?>


<div class="row"><!-- ROW FOR PRODUCT START -->
<!-- DiskSTANDARD START -->
<div class="row">
<div class=" col-sm-offset-4 col-xs-offset-2"  ><h1 style="width:18%;height:2px;display:inline-block;background: linear-gradient(to right,red, #EFDBB6, gold);">&nbsp;&nbsp;</h1>&nbsp;&nbsp;<span style="font-weight:bold;color:gold;position:relative;top:-20px;font-size:30px"> <?php /* contol by outer loop*/ echo $disSetRow['DishStander']; ?></span><h1 style="width:18%;height:2px;display:inline-block;background: linear-gradient(to right,gold, #EFDBB6,red);">&nbsp;&nbsp;</h1></div>
</div>
<!-- DiskSTANDARD END -->

<!-- Add Item Toggle Start -->
<div class="row container">
<a class="btn btn-info btn-lg col-xs-offset-3 col-xs-6 col-sm-offset-8 col-sm-4" data-toggle="modal" data-target="#formforadditem<?php echo $j;?>"> Add Items in <?php /* contol by outer loop*/ echo $disSetRow['DishStander']; ?></a>
<br><br><br>
</div>

<!-- Add Item Toggle End -->


<?php

$q="select * from"." ".$disSetRow['DishStander'];
?>
  
<?php 
$result=mysqli_query($con,$q);
$TotalDish=mysqli_num_rows($result);
for($i=1;$i<=$TotalDish;$i++){
	$dish=mysqli_fetch_array($result);
?>
<div style="border:2px solid red;background-color:black;border-radius:6px"class="pannel col-sm-4 col-sm-offset-<?php 
$a=$TotalDish%3;
if($a==1&&$i==$TotalDish)
	echo 4;
else if($a==2&&$i==$TotalDish-1)
	echo 2;
else
	echo 0;

?>">
<div class="pannel-body" >
<img src="<?php echo $dish['DishPath']; ?>" class="img img-responsive center-block">
</div>
<div class="pannel-body">
<p class="hidden text-center" style="color:#926ABD"><?php echo $dish['DishStander']; ?></p>
<p class="text-center" style="color:white;font-weight:bold;font-size:20px"><?php echo $dish['DishName']; ?></p>
<p class="text-center" style="color:white;height:40px;"><?php echo $dish['DishMetarial']; ?></p>
<p class="hidden text-center" style="color:white"><b>Crust:</b>&nbsp;<span><?php echo $dish['Crust']; ?> &nbsp;|&nbsp;</span><b>Size:</b>&nbsp;<span><?php echo $dish['Size']; ?> &nbsp;|</span>&nbsp;<span style="color:white" class="fa fa-cog"></span>
<p>
<p class="text-center" style="color:white;font-size:20px;"><span class="fa fa-inr"style="position:relative;bottom:10px;"></span><span style="color:white;font-weight:bold;font-size:40px"><?php echo $dish['DishPrice']; ?></span></p>

<form method="post" action="delete.php" style="display:inline">
<input type="hidden" value="<?php echo $dish['DishId']; ?>" ID="DishId" name="DishId">
<input type="hidden" value="<?php echo $disSetRow['DishStander']; ?>" ID="DishSet" name="DishSet">
<input type="hidden" value="<?php echo $DishPage; ?>" ID="DishPage" name="DishPage">
<input type="submit" class="btn btn-danger col-xs-offset-8" style="width:30%;" value="Delete">
</form>
<br><br>
</div>
</div>
<?php } ?>
</div><!-- ROW FOR PRODUCT END -->

<!-- Modal FOR ADDITEM START -->

<div id="formforadditem<?php echo $j;?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
<br><br><br><br><br>
    <!-- Modal content-->
       <div class="modal-content" style="background-color:#E8E8E8;color:black;margin-top:-115px">
	   <div class="modal-header">
           <button class="btn btn-danger col-sm-offset-11 col-xs-offset-10" type="button" class="close" data-dismiss="modal" >&times;</button>
		   <br>
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">Insert Item In <?php /* contol by outer loop*/ echo $disSetRow['DishStander']; ?></h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                     <form action="insert.php" method="POST" enctype="multipart/form-data">
				   <input type="hidden" value="<?php /* control by outer loop*/ echo $DishPage; ?>" name="DishPage" id="DishPage">
					<input type="hidden" value="<?php /* control by outer loop*/ echo $disSetRow['DishStander']; ?>" name="DishSet">
                   <div class="form-group">
                    <label for="DN" >Enter Item Name:-</label>
                    <input type="text" class="form-control" placeholder="Enter Dish Name" required id="DN" name="DishName">
                    </div>
					<div class="form-group">
                    <label for="DM" >Enter Item Details(in very short):-</label>
                    <input type="text" class="form-control" placeholder="Enter Dish Material and seprete with comma" required id="DM" name="DishMaterial">
                    </div>
					<div class="form-group">
                    <label for="DP" >Enter Item Price:-</label>
                    <input type="tel" class="form-control" placeholder="Enter Dish Price" required id="DP" name="DishPrice">
                    </div>
					
					<div class="form-group">
                    <label for="DI" >Upload Image of Pizza:-</label>
                    <input type="file" class="form-control-file" placeholder="Enter Dish Price" required id="DI" name="DishImage">
                    </div>
					
					
					<div class="hidden form-group">
                    <label for="cr" >Crust(optional):-</label>
                    <input type="text" class="form-control" placeholder="By default Pan" id="cr" name="Crust">
                    </div>
					<div class="hidden form-group">
                    <label for="si" >Size(optional):-</label>
                    <input type="text" class="form-control" placeholder="By default Medium" id="si" name="Size">
                    </div>
                    <input type="submit" class="btn btn-info col-sm-offset-10 col-xs-offset-9">
                    </form>
<!-- FORM END -->
      </div>
      
       
      
    </div>

  </div>
</div>




<!-- Modal FOR ADDITEM END -->
<?php } ?>





<?php
mysqli_close($con);
?>




























<!-- Modal FOR ADDPRODUCT START -->

<div id="formforaddproduct" class="modal fade" role="dialog">
  <div class="modal-dialog">
<br><br><br><br><br>
    <!-- Modal content-->
       <div class="modal-content" style="background-color:#E8E8E8;color:black;margin-top:-115px">
	   <div class="modal-header">
           <button class="btn btn-danger col-sm-offset-11 col-xs-offset-10" type="button" class="close" data-dismiss="modal" >&times;</button>
		   <br>
           <h4 class="modal-title text-center" style="font-family:interstateregular;font-weight:bold;font-size:25px;">ADD New Product</h4>
        </div>
            <div class="modal-body">
	  
	  
	  <!-- FORM START -->
                     <form action="addproduct.php" method="POST" >
				   <input type="hidden" value="<?php echo $DishPage; ?>" name="ProductPage" id="ProductPage">
					
                   <div class="form-group">
                    <label for="ProN" >Enter Product Name:-</label>
                    <input type="text" class="form-control" placeholder="Enter Product Name" required id="ProN" name="ProductName">
                    </div>
                    <input type="submit" class="btn btn-info col-sm-offset-10 col-xs-offset-9">
                    </form>
<!-- FORM END -->
      </div>
      
       
      
    </div>

  </div>
</div>




<!-- Modal FOR ADDPRODUCT END -->













<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>