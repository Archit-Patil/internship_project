<?php 
session_start();
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
// if(isset($_POST['nameofproduct']))
// {
//     $nameofproduct = $_POST['nameofproduct'];
//     $_SESSION['nameofproduct'] = $nameofproduct;
// }
// else
// {
//     $nameofproduct = $_SESSION['nameofproduct'];
// }

$lab = "labs";
$table="product";
$con = new mysqli("localhost","root","root","csm");

if($con)
{
    $query1  = "SELECT DISTINCT * FROM $table INNER JOIN $lab WHERE $table.labno = $lab.id AND $table.labno='L01';";
    $result1 = mysqli_query($con,$query1);
    $datas1   = array();
    $serial1  = array();
    $name1    = array();
    $brand1   = array();
    $cost1    = array();
    $dop1     = array();
    $desc1    = array();
    $labno1   = array();
    $count1=0;

    if(!$result1)
    {
        die("<br>No result found ! died<br>");
    }
    else
    {
        if(mysqli_num_rows($result1) > 0)
        {
            while($row = mysqli_fetch_assoc($result1))
            {
                $datas1[]=$row;
                $count1++;
            }
        }
        
        foreach ($datas1 as $data) 
        {
            $serial1[] = $data['serial_no'];
            $name1[]   = $data['name'];
            $brand1[]  = $data['brand'];
            $cost1[]   = $data['cost'];
            $dop1[]    = $data['date_of_purchase'];
            $desc1[]   = $data['description'];
            $labno1[]  = $data['id'];

            if($data['status']==1)
            {
                $status1[] = "Working";
            }
            else
            {
                $status1[] = "Not Working";
            }
        }
    }

    $query2  = "SELECT * FROM $table INNER JOIN $lab WHERE $table.labno = $lab.id AND $table.labno='L02';";
    $result2 = mysqli_query($con,$query2);
    $datas2   = array();
    $serial2  = array();
    $name2    = array();
    $brand2   = array();
    $cost2    = array();
    $dop2     = array();
    $desc2    = array();
    $labno2   = array();
    $count2=0;

    if(!$result2)
    {
        die("<br>No result found ! died<br>");
    }
    else
    {
        if(mysqli_num_rows($result2) > 0)
        {
            while($row = mysqli_fetch_assoc($result2))
            {
                $datas2[]=$row;
                $count2++;
            }
        }
        
        foreach ($datas2 as $data) 
        {
            $serial2[] = $data['serial_no'];
            $name2[]   = $data['name'];
            $brand2[]  = $data['brand'];
            $cost2[]   = $data['cost'];
            $dop2[]    = $data['date_of_purchase'];
            $desc2[]   = $data['description'];
            $labno2[]  = $data['id'];

            if($data['status']==1)
            {
                $status2[] = "Working";
            }
            else
            {
                $status2[] = "Not Working";
            }
        }
    }

    $query3  = "SELECT * FROM $table INNER JOIN $lab WHERE $table.labno = $lab.id AND $table.labno='L03';";
    $result3 = mysqli_query($con,$query3);
    $datas3   = array();
    $serial3  = array();
    $name3    = array();
    $brand3   = array();
    $cost3    = array();
    $dop3     = array();
    $desc3    = array();
    $labno3   = array();
    $count3=0;

    if(!$result3)
    {
        die("<br>No result found ! died<br>");
    }
    else
    {
        if(mysqli_num_rows($result3) > 0)
        {
            while($row = mysqli_fetch_assoc($result3))
            {
                $datas3[]=$row;
                $count3++;
            }
        }
        
        foreach ($datas3 as $data) 
        {
            $serial3[] = $data['serial_no'];
            $name3[]   = $data['name'];
            $brand3[]  = $data['brand'];
            $cost3[]   = $data['cost'];
            $dop3[]    = $data['date_of_purchase'];
            $desc3[]   = $data['description'];
            $labno3[]  = $data['id'];

            if($data['status']==1)
            {
                $status3[] = "Working";
            }
            else
            {
                $status3[] = "Not Working";
            }
        }
    }

        $query4  = "SELECT * FROM $table INNER JOIN $lab WHERE $table.labno = $lab.id AND $table.labno='L04';";
    $result4 = mysqli_query($con,$query4);
    $datas4   = array();
    $serial4  = array();
    $name4    = array();
    $brand4   = array();
    $cost4    = array();
    $dop4     = array();
    $desc4    = array();
    $labno4   = array();
    $count4=0;

    if(!$result4)
    {
        die("<br>No result found ! died<br>");
    }
    else
    {
        if(mysqli_num_rows($result4) > 0)
        {
            while($row = mysqli_fetch_assoc($result4))
            {
                $datas4[]=$row;
                $count4++;
            }
        }
        
        foreach ($datas4 as $data) 
        {
            $serial4[] = $data['serial_no'];
            $name4[]   = $data['name'];
            $brand4[]  = $data['brand'];
            $cost4[]   = $data['cost'];
            $dop4[]    = $data['date_of_purchase'];
            $desc4[]   = $data['description'];
            $labno4[]  = $data['id'];

            if($data['status']==1)
            {
                $status4[] = "Working";
            }
            else
            {
                $status4[] = "Not Working";
            }
        }
    }
    $query5  = "SELECT * FROM $table INNER JOIN $lab WHERE $table.labno = $lab.id AND $table.labno='L05';";
    $result5 = mysqli_query($con,$query5);
    $datas5   = array();
    $serial5  = array();
    $name5    = array();
    $brand5   = array();
    $cost5    = array();
    $dop5     = array();
    $desc5    = array();
    $labno5   = array();
    $count5=0;

    if(!$result5)
    {
        die("<br>No result found ! died<br>");
    }
    else
    {
        if(mysqli_num_rows($result5) > 0)
        {
            while($row = mysqli_fetch_assoc($result5))
            {
                $datas5[]=$row;
                $count5++;
            }
        }
        
        foreach ($datas5 as $data) 
        {
            $serial5[] = $data['serial_no'];
            $name5[]   = $data['name'];
            $brand5[]  = $data['brand'];
            $cost5[]   = $data['cost'];
            $dop5[]    = $data['date_of_purchase'];
            $desc5[]   = $data['description'];
            $labno5[]  = $data['id'];

            if($data['status']==1)
            {
                $status5[] = "Working";
            }
            else
            {
                $status5[] = "Not Working";
            }
        }
    }  
    $query6  = "SELECT * FROM $table INNER JOIN $lab WHERE $table.labno = $lab.id AND $table.labno='L06';";
    $result6 = mysqli_query($con,$query6);
    $datas6   = array();
    $serial6  = array();
    $name6    = array();
    $brand6   = array();
    $cost6    = array();
    $dop6     = array();
    $desc6    = array();
    $labno6   = array();
    $count6=0;

    if(!$result6)
    {
        die("<br>No result found ! died<br>");
    }
    else
    {
        if(mysqli_num_rows($result6) > 0)
        {
            while($row = mysqli_fetch_assoc($result6))
            {
                $datas6[]=$row;
                $count6++;
            }
        }
        
        foreach ($datas6 as $data) 
        {
            $serial6[] = $data['serial_no'];
            $name6[]   = $data['name'];
            $brand6[]  = $data['brand'];
            $cost6[]   = $data['cost'];
            $dop6[]    = $data['date_of_purchase'];
            $desc6[]   = $data['description'];
            $labno6[]  = $data['id'];

            if($data['status']==1)
            {
                $status6[] = "Working";
            }
            else
            {
                $status6[] = "Not Working";
            }
        }
    } 
    $query7  = "SELECT * FROM $table INNER JOIN $lab WHERE $table.labno = $lab.id AND $table.labno='L07';";
    $result7 = mysqli_query($con,$query7);
    $datas7   = array();
    $serial7  = array();
    $name7    = array();
    $brand7   = array();
    $cost7    = array();
    $dop7     = array();
    $desc7    = array();
    $labno7   = array();
    $count7=0;

    if(!$result7)
    {
        die("<br>No result found ! died<br>");
    }
    else
    {
        if(mysqli_num_rows($result7) > 0)
        {
            while($row = mysqli_fetch_assoc($result7))
            {
                $datas7[]=$row;
                $count7++;
            }
        }
        
        foreach ($datas7 as $data) 
        {
            $serial7[] = $data['serial_no'];
            $name7[]   = $data['name'];
            $brand7[]  = $data['brand'];
            $cost7[]   = $data['cost'];
            $dop7[]    = $data['date_of_purchase'];
            $desc7[]   = $data['description'];
            $labno7[]  = $data['id'];

            if($data['status']==1)
            {
                $status7[] = "Working";
            }
            else
            {
                $status7[] = "Not Working";
            }
        }
    }   
}
?>


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

  <div class="py-5">
    <div class="row">

      <div class="col-lg-12 mb-5">
        <!-- Collapse Panel 1-->
        <button type="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1" class="btn btn-primary btn-block py-2 shadow-sm with-chevron">
          <p class="d-flex align-items justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 1</strong><i class="fa fa-angle-down"></i></p></button>
        <div id="collapseExample1" class="collapse shadow-sm hide">
          <div class="card">
            <div class="card-body">

            	<!--Table -->
            	<div class="table-responsive">                             

                <table class="table table-striped text-center table-hover">
                                <thead class="thead-dark ">
                                    <tr>
                                        <th scope="col"             >  Labno            </th>
                                        <th scope="col"             >  Serial No.       </th>
                                        <th scope="col"             >  Name             </th>
                                        <th scope="col"             >  Brand            </th>
                                        <th scope="col"             >  Cost             </th>
                                        <th scope="col"             >  Date of Purchase </th>
                                        <th scope="col"             >  Description      </th>
                                        <th scope="col"             >  Status           </th>
                                        <th scope="col" colspan="5" >  Control          </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0;$i<count($serial1);$i++){ ?>
                                        <tr>
                                            <td><?php echo $labno1[$i];  ?></td>
                                            <td><?php echo $serial1[$i]; ?></td>
                                            <td><?php echo $name1[$i];   ?></td>
                                            <td><?php echo $brand1[$i];  ?></td>
                                            <td><?php echo $cost1[$i];   ?></td>
                                            <td><?php echo $dop1[$i];    ?></td>
                                            <td><textarea class="form-control" rows="1.5" readonly><?php echo $desc1[$i];   ?></textarea></td>
                                            <td><?php echo $status1[$i]; ?></td>
                                            <td>
                                                <input class="btn btn-info" id="<?php echo $serial1[$i] ?>" style="width:60px;height:40px;" title="Shift to another lab"  onclick="shift(this)" value="Shift" readonly>
                                                <form action="shift.php" method="POST">

                                                    <input id="labno"   name="labno"   style="display:none;"  value="<?php echo $lab         ?>">       
                                                    <input id="table"   name="table"   style="display:none;"  value="<?php echo $table       ?>">       
                                                    <input id="serial"  name="serial"  style="display:none;"  value="<?php echo $serial1[$i]; ?>">
                                                    <input id="name"    name="name"    style="display:none;"  value="<?php echo $name1[$i];   ?>">
                                                    <input id="cost"    name="cost"    style="display:none;"  value="<?php echo $cost1[$i];   ?>">
                                                    <input id="brand"   name="brand"   style="display:none;"  value="<?php echo $brand1[$i];  ?>">
                                                    <input id="dop"     name="dop"     style="display:none;"  value="<?php echo $dop1[$i];    ?>">
                                                    <input id="desc"    name="desc"    style="display:none;"  value="<?php echo $desc1[$i];   ?>">
                                                    <input id="status"  name="status"  style="display:none;"  value="<?php echo $status1[$i]; ?>">

                                                    

                                                    <div id="shiftElement/<?php echo $serial1[$i] ?>" class="hidden">
                                                        <div class="container-fluid text-center">
                                                            <div class="form-group text-center">
                                                                <label>Target Lab</label>
                                                                <select class="form-control" name="target" id="target">
                                                                    <option value="L01" > lab 1 </option>
                                                                    <option value="L02" > lab 2 </option>
                                                                    <option value="L03" > lab 3 </option>
                                                                    <option value="L04" > lab 4 </option>
                                                                    <option value="L05" > lab 5 </option> 
                                                                </select> 

                                                            </div>
                                                            <div class="form-group text-center"><button type="submit" class="btn btn-info hidden" id="buttontobshown/<?php echo $serial1[$i] ?>"  title="Shift to another lab" onclick="shift()">Shift</button> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="editElement.php" method="POST">

                                                    <input id="lab"     name="lab"     style="display:none;" value="<?php echo $lab          ?>">       
                                                    <input id="status"  name="status"  style="display:none"  value="<?php echo $status1[$i];  ?>">
                                                    <input id="name"    name="name"    style="display:none"  value="<?php echo $name1[$i];    ?>">
                                                    <input id="serial"  name="serial"  style="display:none"  value="<?php echo $serial1[$i];  ?>">
                                                    <input id="table"   name="table"   style="display:none"  value="<?php echo $table;       ?>">

                                                    <a ><button type="submit"  class="btn btn-warning" title="Edit Details and Status" style=";width:60px;height:40px;font-size: 10px">Change Status</button></a>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="deleteElement.php" method="POST">

                                                    <input id="lab"     name="lab"      style="display:none;" value="<?php echo $lab          ?>">      
                                                    <input id="serial"  name="serial"   style="display:none"  value="<?php echo $serial1[$i];  ?>">
                                                    <input id="name"    name="name"     style="display:none"  value="<?php echo $name1[$i];    ?>">
                                                    <input id="table"   name="table"    style="display:none"  value="<?php echo $table        ?>">

                                                    <button type="submit" class="btn btn-danger" title="Delete item" onclick="return conf()">X</button>

                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>          
                                </tbody>
                            </table>
                            <a  style="text-decoration: none;"><div class="card border-success mx-auto text-center  justify-content-center"  style="height:50px" onclick="add1()">Add Element</div></a>  

                            <br />

                            <div id="addElement1" class="hidden">
                                <div class="container-fluid">

                                    <h2 class="text-center">Add Element</h2>
                                    <input id="table" name="table" style="display:none" value="<?php echo $table ?>">
                                    <form class="form-signin" style="max-width:1000px" action="addelement.php" required method="POST">                                        

                                        
                                            <!-- <div class="form-group">
                                                <label>Lab No:</label>
                                                <select  type="int"      name="labno"    id="labno"  required  class="form-control">
                                                    <option value="L01">L01</option>
                                                    <option value="L02">L02</option>
                                                </select>
                                            </div> -->

                                            <input type="text" name="table" class="hidden" value="<?php echo $table; ?>">
                                            <input type="text" name="labno" class="hidden" value="L01">
                                           
                                            <div class="row">

                                            <div class="col-6 form-group">
                                                <label>Serial No:</label>
                                                <input  type="text"      name="serial"    id="serial"  required  class="form-control">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label>Name:</label>
                                                <select name="name"    id="name"    required  class="form-control">
                                                    <option value="Computer"  >Computer  </option>
                                                    <option value="Laptop"    >Laptop    </option>
                                                    <option value="Printer"   >Printer   </option>
                                                    <option value="Projector" >Projector </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Brand:</label>
                                                <input  type="varchar"  name="brand"   id="brand"   required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Cost:</label>
                                                <input  type="decimal"  name="cost"    id="cost"    required  class="form-control">
                                            </div>                      
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Date Of Purchase:</label>
                                                <input  type="date"     name="dop"     id="dop"     required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Description:</label>
                                                <input  type="text"     name="desc"    id="desc"    required  class="form-control">
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col form-group">
                                                <button class="btn btn-success" type="submit">SUBMIT</button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div> 

              </div>

              </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 mb-5">
        <!-- Collapse Panel 2-->
        <button data-toggle="collapse" data-target="#collapseExample2" type="button" aria-expanded="true" aria-controls="collapseExample2" class="btn btn-success btn-block py-2 shadow-sm with-chevron">
          <p class="d-flex align-items-center justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 2</strong><i class="fa fa-angle-down"></i></p>
        </button>
        <div id="collapseExample2" class="collapse shadow-sm hide">
          <div class="card">
            <div class="card-body">

            	<!--Table-->
            	<div class="table-responsive">                        

                <table class="table table-striped text-center table-hover">
                                <thead class="thead-dark ">
                                    <tr>
                                        <th scope="col"             >  Labno            </th>
                                        <th scope="col"             >  Serial No.       </th>
                                        <th scope="col"             >  Name             </th>
                                        <th scope="col"             >  Brand            </th>
                                        <th scope="col"             >  Cost             </th>
                                        <th scope="col"             >  Date of Purchase </th>
                                        <th scope="col"             >  Description      </th>
                                        <th scope="col"             >  Status           </th>
                                        <th scope="col" colspan="5" >  Control          </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0;$i<count($serial2);$i++){ ?>
                                        <tr>
                                            <td><?php echo $labno2[$i];  ?></td>
                                            <td><?php echo $serial2[$i]; ?></td>
                                            <td><?php echo $name2[$i];   ?></td>
                                            <td><?php echo $brand2[$i];  ?></td>
                                            <td><?php echo $cost2[$i];   ?></td>
                                            <td><?php echo $dop2[$i];    ?></td>
                                            <td><textarea class="form-control" rows="1.5" readonly><?php echo $desc2[$i];   ?></textarea></td>
                                            <td><?php echo $status2[$i]; ?></td>
                                            <td>
                                                <input class="btn btn-info" id="<?php echo $serial2[$i] ?>" style="width:60px;height:40px;" title="Shift to another lab" onclick="shift(this)" value="Shift" readonly>
                                                <form action="shift.php" method="POST">

                                                    <input id="labno"   name="labno"     style="display:none;"  value="<?php echo $lab         ?>">       
                                                    <input id="table"   name="table"   style="display:none;"  value="<?php echo $table       ?>">       
                                                    <input id="serial"  name="serial"  style="display:none;"  value="<?php echo $serial2[$i]; ?>">
                                                    <input id="name"    name="name"    style="display:none;"  value="<?php echo $name2[$i];   ?>">
                                                    <input id="cost"    name="cost"    style="display:none;"  value="<?php echo $cost2[$i];   ?>">
                                                    <input id="brand"   name="brand"   style="display:none;"  value="<?php echo $brand2[$i];  ?>">
                                                    <input id="dop"     name="dop"     style="display:none;"  value="<?php echo $dop2[$i];    ?>">
                                                    <input id="desc"    name="desc"    style="display:none;"  value="<?php echo $desc2[$i];   ?>">
                                                    <input id="status"  name="status"  style="display:none;"  value="<?php echo $status2[$i]; ?>">

                                                    

                                                    <div id="shiftElement/<?php echo $serial2[$i] ?>" class="hidden">
                                                        <div class="container-fluid text-center">
                                                            <div class="form-group text-center">
                                                                <label>Target Lab</label>
                                                                <select class="form-control" name="target" id="target">
                                                                    <option value="L01" > lab 1 </option>
                                                                    <option value="L02" > lab 2 </option>
                                                                    <option value="L03" > lab 3 </option>
                                                                    <option value="L04" > lab 4 </option>
                                                                    <option value="L05" > lab 5 </option>                                                                    
                                                                </select> 
                                                            </div>
                                                            <div class="form-group text-center"><button type="submit" class="btn btn-info hidden" id="buttontobshown/<?php echo $serial2[$i] ?>"  title="Shift to another lab" onclick="shift()">Shift</button> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="editElement.php" method="POST">

                                                    <input id="lab"     name="lab"     style="display:none;" value="<?php echo $lab          ?>">       
                                                    <input id="status"  name="status"  style="display:none"  value="<?php echo $status2[$i];  ?>">
                                                    <input id="name"    name="name"    style="display:none"  value="<?php echo $name2[$i];    ?>">
                                                    <input id="serial"  name="serial"  style="display:none"  value="<?php echo $serial2[$i];  ?>">
                                                    <input id="table"   name="table"   style="display:none"  value="<?php echo $table;       ?>">

                                                    <a ><button type="submit"  class="btn btn-warning" title="Edit Details and Status" style=";width:60px;height:40px;font-size: 10px">Change Status</button></a>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="deleteElement.php" method="POST">

                                                    <input id="lab"     name="lab"      style="display:none;" value="<?php echo $lab          ?>">      
                                                    <input id="serial"  name="serial"   style="display:none"  value="<?php echo $serial2[$i];  ?>">
                                                    <input id="name"    name="name"     style="display:none"  value="<?php echo $name2[$i];    ?>">
                                                    <input id="table"   name="table"    style="display:none"  value="<?php echo $table        ?>">

                                                    <button type="submit" class="btn btn-danger" title="Delete item" onclick="return conf()">X</button>

                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>          
                                </tbody>
                            </table>
                            <a  style="text-decoration: none;"><div class="card border-success mx-auto text-center  justify-content-center"  style="height:50px" onclick="add2()">Add Element</div></a>  

                            <br />

                            <div id="addElement2" class="hidden">
                                <div class="container-fluid">

                                    <h2 class="text-center">Add Element</h2>
                                    <input id="table" name="table" style="display:none" value="<?php echo $table ?>">
                                    <form class="form-signin" style="max-width:1000px" action="addelement.php" required method="POST">                                        

                                        
                                            <!-- <div class="form-group">
                                                <label>Lab No:</label>
                                                <select  type="int"      name="labno"    id="labno"  required  class="form-control">
                                                    <option value="L01">L01</option>
                                                    <option value="L02">L02</option>
                                                </select>
                                            </div> -->
                                            <input type="text" name="labno" class="hidden" value="L02">
                                            <input type="text" name="table" class="hidden" value="<?php echo $table; ?>">
                                           
                                            <div class="row">

                                            <div class="col-6 form-group">
                                                <label>Serial No:</label>
                                                <input  type="int"      name="serial"    id="serial"  required  class="form-control">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label>Name:</label>
                                                <select name="name"    id="name"    required  class="form-control">
                                                    <option value="Computer"  >Computer  </option>
                                                    <option value="Laptop"    >Laptop    </option>
                                                    <option value="Printer"   >Printer   </option>
                                                    <option value="Projector" >Projector </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Brand:</label>
                                                <input  type="varchar"  name="brand"   id="brand"   required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Cost:</label>
                                                <input  type="decimal"  name="cost"    id="cost"    required  class="form-control">
                                            </div>                      
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Date Of Purchase:</label>
                                                <input  type="date"     name="dop"     id="dop"     required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Description:</label>
                                                <input  type="text"     name="desc"    id="desc"    required  class="form-control">
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col form-group">
                                                <button class="btn btn-success" type="submit">SUBMIT</button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div> 
                
              </div>
            	
              
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 mb-5">
        <!-- Collapse Panel 3--><button data-toggle="collapse" href="#collapseExample3" type="button" aria-expanded="true" aria-controls="collapseExample3" class="btn btn-warning btn-block p2-3 shadow-sm with-chevron">
          <p class="d-flex align-items-center justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 3</strong><i class="fa fa-angle-down"></i></p>
        </button>
        <div id="collapseExample3" class="collapse shadow-sm hide">
          <div class="card">
            <div class="card-body">
             <!--Table-->
             <div class="table-responsive">
                    <table class="table table-striped text-center table-hover">
                                <thead class="thead-dark ">
                                    <tr>
                                        <th scope="col"             >  Labno            </th>
                                        <th scope="col"             >  Serial No.       </th>
                                        <th scope="col"             >  Name             </th>
                                        <th scope="col"             >  Brand            </th>
                                        <th scope="col"             >  Cost             </th>
                                        <th scope="col"             >  Date of Purchase </th>
                                        <th scope="col"             >  Description      </th>
                                        <th scope="col"             >  Status           </th>
                                        <th scope="col" colspan="5" >  Control          </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0;$i<count($serial3);$i++){ ?>
                                        <tr>
                                            <td><?php echo $labno3[$i];  ?></td>
                                            <td><?php echo $serial3[$i]; ?></td>
                                            <td><?php echo $name3[$i];   ?></td>
                                            <td><?php echo $brand3[$i];  ?></td>
                                            <td><?php echo $cost3[$i];   ?></td>
                                            <td><?php echo $dop3[$i];    ?></td>
                                            <td><textarea class="form-control" rows="1.5" readonly><?php echo $desc3[$i];   ?></textarea></td>
                                            <td><?php echo $status3[$i]; ?></td>
                                            <td>
                                                <input class="btn btn-info" id="<?php echo $serial3[$i] ?>" style="width:60px;height:40px;" title="Shift to another lab" onclick="shift(this)" value="Shift" readonly>
                                                <form action="shift.php" method="POST">

                                                    <input id="labno"   name="labno"     style="display:none;"  value="<?php echo $lab         ?>">       
                                                    <input id="table"   name="table"   style="display:none;"  value="<?php echo $table       ?>">       
                                                    <input id="serial"  name="serial"  style="display:none;"  value="<?php echo $serial3[$i]; ?>">
                                                    <input id="name"    name="name"    style="display:none;"  value="<?php echo $name3[$i];   ?>">
                                                    <input id="cost"    name="cost"    style="display:none;"  value="<?php echo $cost3[$i];   ?>">
                                                    <input id="brand"   name="brand"   style="display:none;"  value="<?php echo $brand3[$i];  ?>">
                                                    <input id="dop"     name="dop"     style="display:none;"  value="<?php echo $dop3[$i];    ?>">
                                                    <input id="desc"    name="desc"    style="display:none;"  value="<?php echo $desc3[$i];   ?>">
                                                    <input id="status"  name="status"  style="display:none;"  value="<?php echo $status3[$i]; ?>">

                                                    

                                                    <div id="shiftElement/<?php echo $serial3[$i] ?>" class="hidden">
                                                        <div class="container-fluid text-center">
                                                            <div class="form-group text-center">
                                                                <label>Target Lab</label>
                                                                <select class="form-control" name="target" id="target">
                                                                    <option value="L01" > lab 1 </option>
                                                                    <option value="L02" > lab 2 </option>
                                                                    <option value="L03" > lab 3 </option>
                                                                    <option value="L04" > lab 4 </option>
                                                                    <option value="L05" > lab 5 </option>
                                                                </select> 
                                                            </div>
                                                            <div class="form-group text-center"><button type="submit" class="btn btn-info hidden" id="buttontobshown/<?php echo $serial3[$i] ?>"  title="Shift to another lab" onclick="shift()">Shift</button> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="editElement.php" method="POST">

                                                    <input id="lab"     name="lab"     style="display:none;" value="<?php echo $lab          ?>">       
                                                    <input id="status"  name="status"  style="display:none"  value="<?php echo $status3[$i];  ?>">
                                                    <input id="name"    name="name"    style="display:none"  value="<?php echo $name3[$i];    ?>">
                                                    <input id="serial"  name="serial"  style="display:none"  value="<?php echo $serial3[$i];  ?>">
                                                    <input id="table"   name="table"   style="display:none"  value="<?php echo $table;       ?>">

                                                    <a ><button type="submit"  class="btn btn-warning" title="Edit Details and Status" style=";width:60px;height:40px;font-size: 10px">Change Status</button></a>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="deleteElement.php" method="POST">

                                                    <input id="lab"     name="lab"      style="display:none;" value="<?php echo $lab          ?>">      
                                                    <input id="serial"  name="serial"   style="display:none"  value="<?php echo $serial3[$i];  ?>">
                                                    <input id="name"    name="name"     style="display:none"  value="<?php echo $name3[$i];    ?>">
                                                    <input id="table"   name="table"    style="display:none"  value="<?php echo $table        ?>">

                                                    <button type="submit" class="btn btn-danger" title="Delete item" onclick="return conf()">X</button>

                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>          
                                </tbody>
                            </table>
                            <a  style="text-decoration: none;"><div class="card border-success mx-auto text-center  justify-content-center"  style="height:50px" onclick="add3()">Add Element</div></a>  

                            <br />

                            <div id="addElement3" class="hidden">
                                <div class="container-fluid">

                                    <h2 class="text-center">Add Element</h2>
                                    <input id="table" name="table" style="display:none" value="<?php echo $table ?>">
                                    <form class="form-signin" style="max-width:1000px" action="addelement.php" required method="POST">                                        

                                        
                                            <!-- <div class="form-group">
                                                <label>Lab No:</label>
                                                <select  type="int"      name="labno"    id="labno"  required  class="form-control">
                                                    <option value="L01">L01</option>
                                                    <option value="L02">L02</option>
                                                </select>
                                            </div> -->
                                            <input type="text" name="labno" class="hidden" value="L03">
                                            <input type="text" name="table" class="hidden" value="<?php echo $table; ?>">
                                           
                                            <div class="row">

                                            <div class="col-6 form-group">
                                                <label>Serial No:</label>
                                                <input  type="int"      name="serial"    id="serial"  required  class="form-control">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label>Name:</label>
                                                <select name="name"    id="name"    required  class="form-control">
                                                    <option value="Computer"  >Computer  </option>
                                                    <option value="Laptop"    >Laptop    </option>
                                                    <option value="Printer"   >Printer   </option>
                                                    <option value="Projector" >Projector </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Brand:</label>
                                                <input  type="varchar"  name="brand"   id="brand"   required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Cost:</label>
                                                <input  type="decimal"  name="cost"    id="cost"    required  class="form-control">
                                            </div>                      
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Date Of Purchase:</label>
                                                <input  type="date"     name="dop"     id="dop"     required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Description:</label>
                                                <input  type="text"     name="desc"    id="desc"    required  class="form-control">
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col form-group">
                                                <button class="btn btn-success" type="submit">SUBMIT</button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>              
                </div>
            	
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 mb-5">
        <!-- Collapse Panel 4--><button data-toggle="collapse" href="#collapseExample4" type="button" aria-expanded="true" aria-controls="collapseExample4" class="btn btn-danger btn-block p2-3 shadow-sm with-chevron">
          <p class="d-flex align-items-center justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 4</strong><i class="fa fa-angle-down"></i></p>
        </button>
        <div id="collapseExample4" class="collapse shadow-sm hide">
          <div class="card">
            <div class="card-body">
              <!--Table-->
                <div class="table-responsive">
                      <table class="table table-striped text-center table-hover">
                                <thead class="thead-dark ">
                                    <tr>
                                        <th scope="col"             >  Labno            </th>
                                        <th scope="col"             >  Serial No.       </th>
                                        <th scope="col"             >  Name             </th>
                                        <th scope="col"             >  Brand            </th>
                                        <th scope="col"             >  Cost             </th>
                                        <th scope="col"             >  Date of Purchase </th>
                                        <th scope="col"             >  Description      </th>
                                        <th scope="col"             >  Status           </th>
                                        <th scope="col" colspan="5" >  Control          </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0;$i<count($serial4);$i++){ ?>
                                        <tr>
                                            <td><?php echo $labno4[$i];  ?></td>
                                            <td><?php echo $serial4[$i]; ?></td>
                                            <td><?php echo $name4[$i];   ?></td>
                                            <td><?php echo $brand4[$i];  ?></td>
                                            <td><?php echo $cost4[$i];   ?></td>
                                            <td><?php echo $dop4[$i];    ?></td>
                                            <td><textarea class="form-control" rows="1.5" readonly><?php echo $desc4[$i];   ?></textarea></td>
                                            <td><?php echo $status4[$i]; ?></td>
                                            <td>
                                                <input class="btn btn-info" id="<?php echo $serial4[$i] ?>" style="width:60px;height:40px;" title="Shift to another lab" onclick="shift(this)" value="Shift" readonly>
                                                <form action="shift.php" method="POST">

                                                    <input id="labno"   name="labno"     style="display:none;"  value="<?php echo $lab         ?>">       
                                                    <input id="table"   name="table"   style="display:none;"  value="<?php echo $table       ?>">       
                                                    <input id="serial"  name="serial"  style="display:none;"  value="<?php echo $serial4[$i]; ?>">
                                                    <input id="name"    name="name"    style="display:none;"  value="<?php echo $name4[$i];   ?>">
                                                    <input id="cost"    name="cost"    style="display:none;"  value="<?php echo $cost4[$i];   ?>">
                                                    <input id="brand"   name="brand"   style="display:none;"  value="<?php echo $brand4[$i];  ?>">
                                                    <input id="dop"     name="dop"     style="display:none;"  value="<?php echo $dop4[$i];    ?>">
                                                    <input id="desc"    name="desc"    style="display:none;"  value="<?php echo $desc4[$i];   ?>">
                                                    <input id="status"  name="status"  style="display:none;"  value="<?php echo $status4[$i]; ?>">

                                                    

                                                    <div id="shiftElement/<?php echo $serial4[$i] ?>" class="hidden">
                                                        <div class="container-fluid text-center">
                                                            <div class="form-group text-center">
                                                                <label>Target Lab</label>
                                                                <select class="form-control" name="target" id="target">
                                                                    <option value="L01" > lab 1 </option>
                                                                    <option value="L02" > lab 2 </option>
                                                                    <option value="L03" > lab 3 </option>
                                                                    <option value="L04" > lab 4 </option>
                                                                    <option value="L05" > lab 5 </option>
                                                                </select> 
                                                            </div>
                                                            <div class="form-group text-center"><button type="submit" class="btn btn-info hidden" id="buttontobshown/<?php echo $serial4[$i] ?>"  title="Shift to another lab" onclick="shift()">Shift</button> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="editElement.php" method="POST">

                                                    <input id="lab"     name="lab"     style="display:none;" value="<?php echo $lab          ?>">       
                                                    <input id="status"  name="status"  style="display:none"  value="<?php echo $status4[$i];  ?>">
                                                    <input id="name"    name="name"    style="display:none"  value="<?php echo $name4[$i];    ?>">
                                                    <input id="serial"  name="serial"  style="display:none"  value="<?php echo $serial4[$i];  ?>">
                                                    <input id="table"   name="table"   style="display:none"  value="<?php echo $table;       ?>">

                                                    <a ><button type="submit"  class="btn btn-warning" title="Edit Details and Status" style=";width:60px;height:40px;font-size: 10px">Change Status</button></a>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="deleteElement.php" method="POST">

                                                    <input id="lab"     name="lab"      style="display:none;" value="<?php echo $lab          ?>">      
                                                    <input id="serial"  name="serial"   style="display:none"  value="<?php echo $serial4[$i];  ?>">
                                                    <input id="name"    name="name"     style="display:none"  value="<?php echo $name4[$i];    ?>">
                                                    <input id="table"   name="table"    style="display:none"  value="<?php echo $table        ?>">

                                                    <button type="submit" class="btn btn-danger" title="Delete item" onclick="return conf()">X</button>

                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>          
                                </tbody>
                            </table>
                            <a  style="text-decoration: none;"><div class="card border-success mx-auto text-center  justify-content-center"  style="height:50px" onclick="add4()">Add Element</div></a>  

                            <br />

                            <div id="addElement4" class="hidden">
                                <div class="container-fluid">

                                    <h2 class="text-center">Add Element</h2>
                                    <input id="table" name="table" style="display:none" value="<?php echo $table ?>">
                                    <form class="form-signin" style="max-width:1000px" action="addelement.php" required method="POST">                                        

                                        
                                            <!-- <div class="form-group">
                                                <label>Lab No:</label>
                                                <select  type="int"      name="labno"    id="labno"  required  class="form-control">
                                                    <option value="L01">L01</option>
                                                    <option value="L02">L02</option>
                                                </select>
                                            </div> -->
                                            <input type="text" name="labno" class="hidden" value="L04">
                                            <input type="text" name="table" class="hidden" value="<?php echo $table; ?>">
                                           
                                            <div class="row">

                                            <div class="col-6 form-group">
                                                <label>Serial No:</label>
                                                <input  type="int"      name="serial"    id="serial"  required  class="form-control">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label>Name:</label>
                                                <select name="name"    id="name"    required  class="form-control">
                                                    <option value="Computer"  >Computer  </option>
                                                    <option value="Laptop"    >Laptop    </option>
                                                    <option value="Printer"   >Printer   </option>
                                                    <option value="Projector" >Projector </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Brand:</label>
                                                <input  type="varchar"  name="brand"   id="brand"   required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Cost:</label>
                                                <input  type="decimal"  name="cost"    id="cost"    required  class="form-control">
                                            </div>                      
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Date Of Purchase:</label>
                                                <input  type="date"     name="dop"     id="dop"     required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Description:</label>
                                                <input  type="text"     name="desc"    id="desc"    required  class="form-control">
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col form-group">
                                                <button class="btn btn-success" type="submit">SUBMIT</button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>           
                </div>
            	
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 mb-5">
        <!-- Collapse Panel 5--><button data-toggle="collapse" href="#collapseExample5" type="button" aria-expanded="true" aria-controls="collapseExample5" class="btn btn-primary btn-block p2-3 shadow-sm with-chevron">
          <p class="d-flex align-items-center justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 5</strong><i class="fa fa-angle-down"></i></p>
        </button>
        <div id="collapseExample5" class="collapse shadow-sm hide">
          <div class="card">
            <div class="card-body">
              <!--Table-->
                <div class="table-responsive">
                    <table class="table table-striped text-center table-hover">
                                <thead class="thead-dark ">
                                    <tr>
                                        <th scope="col"             >  Labno            </th>
                                        <th scope="col"             >  Serial No.       </th>
                                        <th scope="col"             >  Name             </th>
                                        <th scope="col"             >  Brand            </th>
                                        <th scope="col"             >  Cost             </th>
                                        <th scope="col"             >  Date of Purchase </th>
                                        <th scope="col"             >  Description      </th>
                                        <th scope="col"             >  Status           </th>
                                        <th scope="col" colspan="5" >  Control          </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0;$i<count($serial5);$i++){ ?>
                                        <tr>
                                            <td><?php echo $labno5[$i];  ?></td>
                                            <td><?php echo $serial5[$i]; ?></td>
                                            <td><?php echo $name5[$i];   ?></td>
                                            <td><?php echo $brand5[$i];  ?></td>
                                            <td><?php echo $cost5[$i];   ?></td>
                                            <td><?php echo $dop5[$i];    ?></td>
                                            <td><textarea class="form-control" rows="1.5" readonly><?php echo $desc5[$i];   ?></textarea></td>
                                            <td><?php echo $status5[$i]; ?></td>
                                            <td>
                                                <input class="btn btn-info" id="<?php echo $serial5[$i] ?>" style="width:100px;height:40px;" title="Shift to another lab" onclick="shift(this)" value="Shift" readonly>
                                                <form action="shift.php" method="POST">

                                                    <input id="labno"   name="labno"     style="display:none;"  value="<?php echo $lab         ?>">       
                                                    <input id="table"   name="table"   style="display:none;"  value="<?php echo $table       ?>">       
                                                    <input id="serial"  name="serial"  style="display:none;"  value="<?php echo $serial5[$i]; ?>">
                                                    <input id="name"    name="name"    style="display:none;"  value="<?php echo $name5[$i];   ?>">
                                                    <input id="cost"    name="cost"    style="display:none;"  value="<?php echo $cost5[$i];   ?>">
                                                    <input id="brand"   name="brand"   style="display:none;"  value="<?php echo $brand5[$i];  ?>">
                                                    <input id="dop"     name="dop"     style="display:none;"  value="<?php echo $dop5[$i];    ?>">
                                                    <input id="desc"    name="desc"    style="display:none;"  value="<?php echo $desc5[$i];   ?>">
                                                    <input id="status"  name="status"  style="display:none;"  value="<?php echo $status5[$i]; ?>">

                                                    

                                                    <div id="shiftElement/<?php echo $serial5[$i] ?>" style="width:150px" class="hidden">
                                                        <div class="container-fluid text-center">
                                                            <div class="form-group text-center">
                                                                <label>Target Lab</label>
                                                                <select class="form-control" name="target" id="target">
                                                                    <option value="L01" > lab 1 </option>
                                                                    <option value="L02" > lab 2 </option>
                                                                    <option value="L03" > lab 3 </option>
                                                                    <option value="L04" > lab 4 </option>
                                                                    <option value="L05" > lab 5 </option>
                                                                </select> 
                                                            </div>
                                                            <div class="form-group text-center"><button type="submit" class="btn btn-info hidden" id="buttontobshown/<?php echo $serial5[$i] ?>"  title="Shift to another lab" onclick="shift()">Shift</button> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="editElement.php" method="POST">

                                                    <input id="lab"     name="lab"     style="display:none;" value="<?php echo $lab          ?>">       
                                                    <input id="status"  name="status"  style="display:none"  value="<?php echo $status5[$i];  ?>">
                                                    <input id="name"    name="name"    style="display:none"  value="<?php echo $name5[$i];    ?>">
                                                    <input id="serial"  name="serial"  style="display:none"  value="<?php echo $serial5[$i];  ?>">
                                                    <input id="table"   name="table"   style="display:none"  value="<?php echo $table;       ?>">

                                                    <a ><button type="submit"  class="btn btn-warning" title="Edit Details and Status" style=";width:60px;height:40px;font-size: 10px">Change Status</button></a>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="deleteElement.php" method="POST">

                                                    <input id="lab"     name="lab"      style="display:none;" value="<?php echo $lab          ?>">      
                                                    <input id="serial"  name="serial"   style="display:none"  value="<?php echo $serial5[$i];  ?>">
                                                    <input id="name"    name="name"     style="display:none"  value="<?php echo $name5[$i];    ?>">
                                                    <input id="table"   name="table"    style="display:none"  value="<?php echo $table        ?>">

                                                    <button type="submit" class="btn btn-danger" title="Delete item" onclick="return conf()">X</button>

                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>          
                                </tbody>
                            </table>
                            <a  style="text-decoration: none;"><div class="card border-success mx-auto text-center  justify-content-center"  style="height:50px" onclick="add5()">Add Element</div></a>  

                            <br />

                            <div id="addElement5" class="hidden">
                                <div class="container-fluid">

                                    <h2 class="text-center">Add Element</h2>
                                    <input id="table" name="table" style="display:none" value="<?php echo $table ?>">
                                    <form class="form-signin" style="max-width:1000px" action="addelement.php" required method="POST">                                        

                                        
                                            <!-- <div class="form-group">
                                                <label>Lab No:</label>
                                                <select  type="int"      name="labno"    id="labno"  required  class="form-control">
                                                    <option value="L01">L01</option>
                                                    <option value="L02">L02</option>
                                                </select>
                                            </div> -->
                                            <input type="text" name="labno" class="hidden" value="L05">
                                            <input type="text" name="table" class="hidden" value="<?php echo $table; ?>">
                                           
                                            <div class="row">

                                            <div class="col-6 form-group">
                                                <label>Serial No:</label>
                                                <input  type="int"      name="serial"    id="serial"  required  class="form-control">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label>Name:</label>
                                                <select name="name"    id="name"    required  class="form-control">
                                                    <option value="Computer"  >Computer  </option>
                                                    <option value="Laptop"    >Laptop    </option>
                                                    <option value="Printer"   >Printer   </option>
                                                    <option value="Projector" >Projector </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Brand:</label>
                                                <input  type="varchar"  name="brand"   id="brand"   required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Cost:</label>
                                                <input  type="decimal"  name="cost"    id="cost"    required  class="form-control">
                                            </div>                      
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Date Of Purchase:</label>
                                                <input  type="date"     name="dop"     id="dop"     required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Description:</label>
                                                <input  type="text"     name="desc"    id="desc"    required  class="form-control">
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col form-group">
                                                <button class="btn btn-success" type="submit">SUBMIT</button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>              
                </div>
            	
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 mb-5">
        <!-- Collapse Panel 6--><button data-toggle="collapse" href="#collapseExample6" type="button" aria-expanded="true" aria-controls="collapseExample6" class="btn btn-warning btn-block p2-3 shadow-sm with-chevron">
          <p class="d-flex align-items-center justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 6</strong><i class="fa fa-angle-down"></i></p>
        </button>
        <div id="collapseExample6" class="collapse shadow-sm hide">
          <div class="card">
            <div class="card-body">
              <!--Table-->
                <div class="table-responsive">
                            <table class="table table-striped text-center table-hover">
                                <thead class="thead-dark ">
                                    <tr>
                                        <th scope="col"             >  Labno            </th>
                                        <th scope="col"             >  Serial No.       </th>
                                        <th scope="col"             >  Name             </th>
                                        <th scope="col"             >  Brand            </th>
                                        <th scope="col"             >  Cost             </th>
                                        <th scope="col"             >  Date of Purchase </th>
                                        <th scope="col"             >  Description      </th>
                                        <th scope="col"             >  Status           </th>
                                        <th scope="col" colspan="5" >  Control          </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0;$i<count($serial6);$i++){ ?>
                                        <tr>
                                            <td><?php echo $labno6[$i];  ?></td>
                                            <td><?php echo $serial6[$i]; ?></td>
                                            <td><?php echo $name6[$i];   ?></td>
                                            <td><?php echo $brand6[$i];  ?></td>
                                            <td><?php echo $cost6[$i];   ?></td>
                                            <td><?php echo $dop6[$i];    ?></td>
                                            <td><textarea class="form-control" rows="1.5" readonly><?php echo $desc6[$i];   ?></textarea></td>
                                            <td><?php echo $status6[$i]; ?></td>
                                            <td>
                                                <input class="btn btn-info" id="<?php echo $serial6[$i] ?>" style="width:100px;height:40px;" title="Shift to another lab" onclick="shift(this)" value="Shift" readonly>
                                                <form action="shift.php" method="POST">

                                                    <input id="labno"   name="labno"     style="display:none;"  value="<?php echo $lab         ?>">       
                                                    <input id="table"   name="table"   style="display:none;"  value="<?php echo $table       ?>">       
                                                    <input id="serial"  name="serial"  style="display:none;"  value="<?php echo $serial6[$i]; ?>">
                                                    <input id="name"    name="name"    style="display:none;"  value="<?php echo $name6[$i];   ?>">
                                                    <input id="cost"    name="cost"    style="display:none;"  value="<?php echo $cost6[$i];   ?>">
                                                    <input id="brand"   name="brand"   style="display:none;"  value="<?php echo $brand6[$i];  ?>">
                                                    <input id="dop"     name="dop"     style="display:none;"  value="<?php echo $dop6[$i];    ?>">
                                                    <input id="desc"    name="desc"    style="display:none;"  value="<?php echo $desc6[$i];   ?>">
                                                    <input id="status"  name="status"  style="display:none;"  value="<?php echo $status6[$i]; ?>">

                                                    

                                                    <div id="shiftElement/<?php echo $serial6[$i] ?>" style="width:150px" class="hidden">
                                                        <div class="container-fluid text-center">
                                                            <div class="form-group text-center">
                                                                <label>Target Lab</label>
                                                                <select class="form-control" name="target" id="target">
                                                                    <option value="L01" > lab 1 </option>
                                                                    <option value="L02" > lab 2 </option>
                                                                    <option value="L03" > lab 3 </option>
                                                                    <option value="L04" > lab 4 </option>
                                                                    <option value="L05" > lab 5 </option>
                                                                </select> 
                                                            </div>
                                                            <div class="form-group text-center"><button type="submit" class="btn btn-info hidden" id="buttontobshown/<?php echo $serial6[$i] ?>"  title="Shift to another lab" onclick="shift()">Shift</button> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="editElement.php" method="POST">

                                                    <input id="lab"     name="lab"     style="display:none;" value="<?php echo $lab          ?>">       
                                                    <input id="status"  name="status"  style="display:none"  value="<?php echo $status6[$i];  ?>">
                                                    <input id="name"    name="name"    style="display:none"  value="<?php echo $name6[$i];    ?>">
                                                    <input id="serial"  name="serial"  style="display:none"  value="<?php echo $serial6[$i];  ?>">
                                                    <input id="table"   name="table"   style="display:none"  value="<?php echo $table;       ?>">

                                                    <a ><button type="submit"  class="btn btn-warning" title="Edit Details and Status" style=";width:60px;height:40px;font-size: 10px">Change Status</button></a>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="deleteElement.php" method="POST">

                                                    <input id="lab"     name="lab"      style="display:none;" value="<?php echo $lab          ?>">      
                                                    <input id="serial"  name="serial"   style="display:none"  value="<?php echo $serial6[$i];  ?>">
                                                    <input id="name"    name="name"     style="display:none"  value="<?php echo $name6[$i];    ?>">
                                                    <input id="table"   name="table"    style="display:none"  value="<?php echo $table        ?>">

                                                    <button type="submit" class="btn btn-danger" title="Delete item" onclick="return conf()">X</button>

                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>          
                                </tbody>
                            </table>
                            <a  style="text-decoration: none;"><div class="card border-success mx-auto text-center  justify-content-center"  style="height:50px" onclick="add6()">Add Element</div></a>  

                            <br />

                            <div id="addElement6" class="hidden">
                                <div class="container-fluid">

                                    <h2 class="text-center">Add Element</h2>
                                    <input id="table" name="table" style="display:none" value="<?php echo $table ?>">
                                    <form class="form-signin" style="max-width:1000px" action="addelement.php" required method="POST">                                        

                                        
                                            <!-- <div class="form-group">
                                                <label>Lab No:</label>
                                                <select  type="int"      name="labno"    id="labno"  required  class="form-control">
                                                    <option value="L01">L01</option>
                                                    <option value="L02">L02</option>
                                                </select>
                                            </div> -->
                                            <input type="text" name="labno" class="hidden" value="L06">
                                            <input type="text" name="table" class="hidden" value="<?php echo $table; ?>">
                                           
                                            <div class="row">

                                            <div class="col-6 form-group">
                                                <label>Serial No:</label>
                                                <input  type="int"      name="serial"    id="serial"  required  class="form-control">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label>Name:</label>
                                                <select name="name"    id="name"    required  class="form-control">
                                                    <option value="Computer"  >Computer  </option>
                                                    <option value="Laptop"    >Laptop    </option>
                                                    <option value="Printer"   >Printer   </option>
                                                    <option value="Projector" >Projector </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Brand:</label>
                                                <input  type="varchar"  name="brand"   id="brand"   required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Cost:</label>
                                                <input  type="decimal"  name="cost"    id="cost"    required  class="form-control">
                                            </div>                      
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Date Of Purchase:</label>
                                                <input  type="date"     name="dop"     id="dop"     required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Description:</label>
                                                <input  type="text"     name="desc"    id="desc"    required  class="form-control">
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col form-group">
                                                <button class="btn btn-success" type="submit">SUBMIT</button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>              
                </div>
            	
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12 mb-5">
        <!-- Collapse Panel 7--><button data-toggle="collapse" href="#collapseExample7" type="button" aria-expanded="true" aria-controls="collapseExample7" class="btn btn-success btn-block p2-3 shadow-sm with-chevron">
          <p class="d-flex align-items-center justify-content-between mb-0 px-3 py-2"><strong class="text-uppercase">Lab 7</strong><i class="fa fa-angle-down"></i></p>
        </button>
        <div id="collapseExample7" class="collapse shadow-sm hide">
          <div class="card">
            <div class="card-body">
              <!--Table-->
              <div class="table-responsive">
                             <table class="table table-striped text-center table-hover">
                                <thead class="thead-dark ">
                                    <tr>
                                        <th scope="col"             >  Labno            </th>
                                        <th scope="col"             >  Serial No.       </th>
                                        <th scope="col"             >  Name             </th>
                                        <th scope="col"             >  Brand            </th>
                                        <th scope="col"             >  Cost             </th>
                                        <th scope="col"             >  Date of Purchase </th>
                                        <th scope="col"             >  Description      </th>
                                        <th scope="col"             >  Status           </th>
                                        <th scope="col" colspan="5" >  Control          </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for($i=0;$i<count($serial7);$i++){ ?>
                                        <tr>
                                            <td><?php echo $labno7[$i];  ?></td>
                                            <td><?php echo $serial7[$i]; ?></td>
                                            <td><?php echo $name7[$i];   ?></td>
                                            <td><?php echo $brand7[$i];  ?></td>
                                            <td><?php echo $cost7[$i];   ?></td>
                                            <td><?php echo $dop7[$i];    ?></td>
                                            <td><textarea class="form-control" rows="1.5" readonly><?php echo $desc7[$i];   ?></textarea></td>
                                            <td><?php echo $status7[$i]; ?></td>
                                            <td>
                                                <input class="btn btn-info" id="<?php echo $serial7[$i] ?>" style="width:100px;height:40px;" title="Shift to another lab" onclick="shift(this)" value="Shift" readonly>
                                                <form action="shift.php" method="POST">

                                                    <input id="labno"   name="labno"     style="display:none;"  value="<?php echo $lab         ?>">       
                                                    <input id="table"   name="table"   style="display:none;"  value="<?php echo $table       ?>">       
                                                    <input id="serial"  name="serial"  style="display:none;"  value="<?php echo $serial7[$i]; ?>">
                                                    <input id="name"    name="name"    style="display:none;"  value="<?php echo $name7[$i];   ?>">
                                                    <input id="cost"    name="cost"    style="display:none;"  value="<?php echo $cost7[$i];   ?>">
                                                    <input id="brand"   name="brand"   style="display:none;"  value="<?php echo $brand7[$i];  ?>">
                                                    <input id="dop"     name="dop"     style="display:none;"  value="<?php echo $dop7[$i];    ?>">
                                                    <input id="desc"    name="desc"    style="display:none;"  value="<?php echo $desc7[$i];   ?>">
                                                    <input id="status"  name="status"  style="display:none;"  value="<?php echo $status7[$i]; ?>">

                                                    

                                                    <div id="shiftElement/<?php echo $serial7[$i] ?>" style="width:150px" class="hidden">
                                                        <div class="container-fluid text-center">
                                                            <div class="form-group text-center">
                                                                <label>Target Lab</label>
                                                                <select class="form-control" name="target" id="target">
                                                                    <option value="L01" > lab 1 </option>
                                                                    <option value="L02" > lab 2 </option>
                                                                    <option value="L03" > lab 3 </option>
                                                                    <option value="L04" > lab 4 </option>
                                                                    <option value="L05" > lab 5 </option>
                                                                </select> 
                                                            </div>
                                                            <div class="form-group text-center"><button type="submit" class="btn btn-info hidden" id="buttontobshown/<?php echo $serial7[$i] ?>"  title="Shift to another lab" onclick="shift()">Shift</button> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="editElement.php" method="POST">

                                                    <input id="lab"     name="lab"     style="display:none;" value="<?php echo $lab          ?>">       
                                                    <input id="status"  name="status"  style="display:none"  value="<?php echo $status7[$i];  ?>">
                                                    <input id="name"    name="name"    style="display:none"  value="<?php echo $name7[$i];    ?>">
                                                    <input id="serial"  name="serial"  style="display:none"  value="<?php echo $serial7[$i];  ?>">
                                                    <input id="table"   name="table"   style="display:none"  value="<?php echo $table;       ?>">

                                                    <a ><button type="submit"  class="btn btn-warning" title="Edit Details and Status" style=";width:60px;height:40px;font-size: 10px">Change Status</button></a>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="deleteElement.php" method="POST">

                                                    <input id="lab"     name="lab"      style="display:none;" value="<?php echo $lab          ?>">      
                                                    <input id="serial"  name="serial"   style="display:none"  value="<?php echo $serial7[$i];  ?>">
                                                    <input id="name"    name="name"     style="display:none"  value="<?php echo $name7[$i];    ?>">
                                                    <input id="table"   name="table"    style="display:none"  value="<?php echo $table        ?>">

                                                    <button type="submit" class="btn btn-danger" title="Delete item" onclick="return conf()">X</button>

                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>          
                                </tbody>
                            </table>
                            <a  style="text-decoration: none;"><div class="card border-success mx-auto text-center  justify-content-center"  style="height:50px" onclick="add7()">Add Element</div></a>  

                            <br />

                            <div id="addElement7" class="hidden">
                                <div class="container-fluid">

                                    <h2 class="text-center">Add Element</h2>
                                    <input id="table" name="table" style="display:none" value="<?php echo $table ?>">
                                    <form class="form-signin" style="max-width:1000px" action="addelement.php" required method="POST">                                        

                                        
                                            <!-- <div class="form-group">
                                                <label>Lab No:</label>
                                                <select  type="int"      name="labno"    id="labno"  required  class="form-control">
                                                    <option value="L01">L01</option>
                                                    <option value="L02">L02</option>
                                                </select>
                                            </div> -->
                                            <input type="text" name="labno" class="hidden" value="L07">
                                            <input type="text" name="table" class="hidden" value="<?php echo $table; ?>">
                                           
                                            <div class="row">

                                            <div class="col-6 form-group">
                                                <label>Serial No:</label>
                                                <input  type="int"      name="serial"    id="serial"  required  class="form-control">
                                            </div>
                                            <div class="col-6 form-group">
                                                <label>Name:</label>
                                                <select name="name"    id="name"    required  class="form-control">
                                                    <option value="Computer"  >Computer  </option>
                                                    <option value="Laptop"    >Laptop    </option>
                                                    <option value="Printer"   >Printer   </option>
                                                    <option value="Projector" >Projector </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Brand:</label>
                                                <input  type="varchar"  name="brand"   id="brand"   required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Cost:</label>
                                                <input  type="decimal"  name="cost"    id="cost"    required  class="form-control">
                                            </div>                      
                                        </div>
                                        <div class="row">
                                            <div class="col form-group">
                                                <label>Date Of Purchase:</label>
                                                <input  type="date"     name="dop"     id="dop"     required  class="form-control">
                                            </div>
                                            <div class="col form-group">
                                                <label>Description:</label>
                                                <input  type="text"     name="desc"    id="desc"    required  class="form-control">
                                            </div>
                                        </div>
                                        <div class="row text-center">
                                            <div class="col form-group">
                                                <button class="btn btn-success" type="submit">SUBMIT</button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>      
                    </div>
            	
            </div>
          </div>
        </div>
      </div>


    </div>
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