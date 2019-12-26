<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        body {
            overflow-x:hidden;
        }
        .hidden
        {
            display:none;
        }

        .shown 
        {
            display:block;
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button,
        input[type=date]::-webkit-inner-spin-button, 
        input[type=date]::-webkit-outer-spin-button 
        { 
            -webkit-appearance: none; 
            margin: 0; 
        }
    </style>

	<link rel="stylesheet" type="text/css" href="collapse.css">

	<title>Collapse</title>
</head>
<body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>


<div class="container py-5">
  <!-- For Demo Purpose-->
  <header class="text-center">
    <h1 class="display-4">Master Lab</h1>
    <p class="text-muted font-italic mb-0">Using Bootstrap 4, build a collapse panel with up & down chevrons.</p>
  </header>

<br>
<div class="row">
    <div class="col-lg-6 mb-5">
        <form class="form-signin" action="equipment.php" method="POST">
        <button type="submit" value="L01" name="labnumber" data-toggle="collapse" href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1" class="btn btn-success btn-block py-2 shadow-sm with-chevron">
          <p class="d-flex align-items justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 1</strong></p>
        </button></form>
    </div>
    <div class="col-lg-6 mb-5">
        <form class="form-signin" action="equipment.php" method="POST">
        <button type="submit" value="L02" name="labnumber" data-toggle="collapse" href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1" class="btn btn-danger btn-block py-2 shadow-sm with-chevron">
          <p class="d-flex align-items justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 2</strong></p>
        </button>
    </div>
    <div class="col-lg-6 mb-5">
        <form class="form-signin" action="equipment.php" method="POST">
        <button type="submit" value="L03" name="labnumber"data-toggle="collapse" href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1" class="btn btn-warning btn-block py-2 shadow-sm with-chevron">
          <p class="d-flex align-items justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 3</strong></p>
        </button>
    </div>
    <div class="col-lg-6 mb-5">
        <form class="form-signin" action="equipment.php" method="POST">
        <button type="submit" value="L04" name="labnumber"data-toggle="collapse" href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1" class="btn btn-primary btn-block py-2 shadow-sm with-chevron">
          <p class="d-flex align-items justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 4</strong></p>
        </button>
    </div>
    <div class="col-lg-6 mb-5">
        <form class="form-signin" action="equipment.php" method="POST">
        <button type="submit" value="L05" name="labnumber" data-toggle="collapse" href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1" class="btn btn-success btn-block py-2 shadow-sm with-chevron">
          <p class="d-flex align-items justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 5</strong></p>
        </button>
    </div><div class="col-lg-6 mb-5">
        <form class="form-signin" action="equipment.php" method="POST">
        <button type="submit" value="L06" name="labnumber" data-toggle="collapse" href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1" class="btn btn-danger btn-block py-2 shadow-sm with-chevron">
          <p class="d-flex align-items justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 6</strong></p>
        </button>
    </div><div class="col-lg-6 mb-5">
        <form class="form-signin" action="equipment.php" method="POST">
        <button type="submit" value="L07" name="labnumber" data-toggle="collapse" href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1" class="btn btn-warning btn-block py-2 shadow-sm with-chevron">
          <p class="d-flex align-items justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 7</strong></p>
        </button>
    </div>

</div>

<script type="text/javascript">
function add1() 
{
    document.getElementById("addElement1").classList.toggle("shown");
}  

function add2() 
{
    document.getElementById("addElement2").classList.toggle("shown");
}   
function add3() 
{
    document.getElementById("addElement3").classList.toggle("shown");
}   
function add4() 
{
    document.getElementById("addElement4").classList.toggle("shown");
}   
function add5() 
{
    document.getElementById("addElement5").classList.toggle("shown");
}   

function add6() 
{
    document.getElementById("addElement6").classList.toggle("shown");
}   

function add7() 
{
    document.getElementById("addElement7").classList.toggle("shown");
}   

function shift(ele) 
{
    var id=ele.id;
    document.getElementById(id).classList.toggle("hidden");
    document.getElementById("shiftElement/"+id).classList.toggle("shown");
    document.getElementById("buttontobshown/"+id).classList.toggle("shown");
}   

function conf()
{
    var conf = confirm('Please Confirm for Deletion');
    return conf;
}
</script>

</body>
</html>