<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$status  = $_POST['status'];
$name    = $_POST['name'];
$serial  = $_POST['serial'];
$table   = $_POST['table'];

$con=mysqli_connect("localhost","root","root","csm");

if($con)
{
	if($status=="Working")
	{
		$query="UPDATE $table SET status=0 WHERE serial_no='$serial' AND name='$name'";
		$set=mysqli_query($con,$query);
	}
	elseif($status=="Not Working")
	{
		$query="UPDATE $table SET status=1 WHERE serial_no='$serial' AND name='$name'";
		$set=mysqli_query($con,$query);
	}
	
	if($set)
	{
		header("Location: collapse_master.php");
	}
	else
	{
		$error="Couldn't store your Data";
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
            	<a href="index.php"><button type="button" class=" btn btn-success">Return</button></a>
       		<?php } ?> 

       		<?php if($value==0) {?> 
            	<a href="index.php"><button type="button" class=" btn btn-info">Return</button></a>
       		<?php } ?>
            
    	</div>
    </div>

    </body>

</html>