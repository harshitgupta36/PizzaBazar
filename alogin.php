<?php 
session_start();




$email=$_POST['email'];
$password=$_POST['password']; 
echo $email;
echo "<br>";
echo $password;
$con=mysqli_connect("localhost","root","","useractivity");
$q="select * from asignin where email='$email' && password='$password'";
echo "<br>".$q."<br>";
$query=mysqli_query($con,$q);
$row=mysqli_fetch_array($query);
if($email==$row['email']&&$password==$row['password'])
{
	$_SESSION['email']=$row['email'];
	$_SESSION['password']=$row['password'];
	$_SESSION['name']=$row['name'];
	header("Location:adminhome.php");
	
}
else
{

?>
<script>
alert("username or password incorrect");
window.location="aloginform.html";
</script>
<?php
}
?>