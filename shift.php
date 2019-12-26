<?php 
session_start();
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

$table=$_POST['table'];
$target=$_POST['target'];
$serial=$_POST['serial'];
$name=$_POST['name'];
$brand=$_POST['brand'];
$cost=$_POST['cost'];
$dop=$_POST['dop'];
$desc=$_POST['desc'];
$status=$_POST['status'];

if($serial && $name && $brand && $cost && $dop && $desc && $table && $target && $status)
{
if($status=="Working")
{
  $status=1;
}
else if($status=="Not Working")
{
  $status=0;
}

$con=new mysqli("localhost","root","root","csm");
if($con)
{
	$query2="UPDATE $table SET labno='$target' WHERE serial_no='$serial'";
  $set2=mysqli_query($con,$query2);
  if($set2)
  {
    $query1="UPDATE mt SET l_id='$target' WHERE p_serial='$serial'";
    $set1=mysqli_query($con,$query1);
    if($set1)
    {
      header("Location: equipment.php");
    }

  }
	
	
	// if($set2)
	// {
	//     echo "added Successfully";
	//     $query="DELETE FROM  $table WHERE serial_no=$serial";
	      
	//         $set=mysqli_query($con,$query);
	//         if($set)
	// 		{
	// 		  echo "deleted Successfully";
	// 		}
	// }
}
else
{
    die("connection insuccessful ,dying.");

    $error="Connection to Database insuccessful. Dying";
    $info=NULL;
    $value=0;
} 

}
else
{
  $error="Enter All Values";
    $info=NULL;
    $value=0;
}


 ?>

 <html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></head>
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
        	<a href="index.php"><button type="button" class=" btn btn-info	">Return</button></a>
   		<?php } ?>
        
	</div>
</div>
</body>
</html>