<?php 
session_start();
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

$serial = $_POST['serial'];
$name   = $_POST['name'];
$table  = $_POST['table'];
$lab    = $_POST['lab'];
echo $name.$serial.$table.$lab;
$con=mysqli_connect("localhost","root","root","csm");

if($con)
{
	echo "Connected";
	
	$query1 = "DELETE FROM  mt WHERE p_serial='$serial'";
	$set1 = mysqli_query($con,$query1);
	if($set1)
	{
		$query2 = "DELETE FROM  product WHERE serial_no='$serial' AND name='$name'";
		$set2 = mysqli_query($con,$query2);
	}
	
				
	if($set2)
	{
		header("Location: equipment.php");
	}
	else
	{
		$error="Couldn't Delete your Data";
		$info=NULL;
		$value=0;
	}
}
else
{
	die("connection insuccessful ,dying.");
	$error="Connection to Database insuccessful. Dying";
	$info=NULL;
	$value=0;
}

?>

<html>

	<head>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	</head>

	<body>

	<div class="row justify-content-center">
	  	<div class="container" style="padding-top: 120px;max-width: 600px;color: white">

	        <?php if(isset($error)){ ?>
	        <div class="alert alert-danger" role="alert"><?php echo $error ?> </div>
	        <?php } ?>

	        <?php if(isset($info)){ ?>
	        <div class="alert alert-info" role="alert"><?php echo $info ?></div>
	        <?php } ?> 

	        <?php if($value==1) {?> 
	        	<a href="equipment.php"><button type="button" class=" btn btn-success">Return</button></a>
	   		<?php } ?> 

	   		<?php if($value==0) {?> 
	        	<a href="equipment.php"><button type="button" class=" btn btn-info">Return</button></a>
	   		<?php } ?>
	        
		</div>
	</div>

	</body>
	
</html>