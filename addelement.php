<?php 
session_start();
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

$table   = $_POST['table'];
$labno   = $_POST['labno'];
$serial  = $_POST['serial'];
$name    = $_POST['name'];
$brand   = $_POST['brand'];
$cost    = $_POST['cost'];
$dop     = $_POST['dop'];
$desc    = $_POST['desc'];

$con = new mysqli("localhost","root","root","csm");

switch ($labno) {
    case 'L01':
        $labname = "Sharad";
        break;
    case 'L02':
        $labname = "Vasant";
        break;
}
    
if($con)
{
    $query1 = "INSERT INTO product VALUES ('$serial','$name','$brand',$cost,'$dop','$desc',1,'$labno');";
    $set1 = mysqli_query($con,$query1);
    if($set1)
    {
        $query3 = "INSERT INTO mt VALUES ('$labno','$serial','$name');";
        $set3 = mysqli_query($con,$query3);
        if($set3)
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
            	<a href="collapse_master.php"><button type="button" class=" btn btn-success">Return</button></a>
       		<?php } ?> 

       		<?php if($value==0) {?> 
            	<a href="collapse_master.php"><button type="button" class=" btn btn-info">Return</button></a>
       		<?php } ?>
            
    	</div>
    </div>

    </body>

</html>