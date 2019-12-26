<?php 
session_start();
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
if(isset($_POST['nameofproduct']))
{
    $nameofproduct = $_POST['nameofproduct'];
    $_SESSION['nameofproduct'] = $nameofproduct;
}
else
{
    $nameofproduct = $_SESSION['nameofproduct'];
}

$lab = "labs";
$table="product";
$con = new mysqli("localhost","root","root","csm");

if($con)
{
    $query1  = "SELECT * FROM $table INNER JOIN $lab WHERE $table.labno = $lab.id AND $table.name='$nameofproduct';";
    $result1 = mysqli_query($con,$query1);
    $datas   = array();
    $serial  = array();
    $name    = array();
    $brand   = array();
    $cost    = array();
    $dop     = array();
    $desc    = array();
    $labno   = array();
    $count=0;

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
                $datas[]=$row;
                $count++;
            }
        }
        else
        {
            $_SESSION['id']=1;
        }
        
        foreach ($datas as $data) 
        {
            $serial[] = $data['serial_no'];
            $name[]   = $data['name'];
            $brand[]  = $data['brand'];
            $cost[]   = $data['cost'];
            $dop[]    = $data['date_of_purchase'];
            $desc[]   = $data['description'];
            $labno[]  = $data['id'];

            if($data['status']==1)
            {
                $status[] = "Working";
            }
            else
            {
                $status[] = "Not Working";
            }
        }
    }
}
?>


    <!DOCTYPE html>
<html>
    <head>
        

        <title>Equipment</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Our Custom CSS -->
        

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
        <link rel="stylesheet" href="sidebar.css">
        <link rel="stylesheet" type="text/css" href="equipment.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            


            <div class="main">
                <div class="info" style="text-align: center;" >

<!-- <?php! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! Edit() here  ! ! ! ! ! ! ! ! ! !  ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! !?> -->
<!-- <?php! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! Edit() here  ! ! ! ! ! ! ! ! ! !  ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! !?> -->
<!-- <?php! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! Edit() here  ! ! ! ! ! ! ! ! ! !  ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! !?> -->
<!-- <?php! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! Edit() here  ! ! ! ! ! ! ! ! ! !  ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! !?> -->
<!-- <?php! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! Edit() here  ! ! ! ! ! ! ! ! ! !  ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! !?> -->
<!-- <?php! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! Edit() here  ! ! ! ! ! ! ! ! ! !  ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! !?> -->
<!-- <?php! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! Edit() here  ! ! ! ! ! ! ! ! ! !  ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! ! !?> -->
                    <div class="row align-items-center" style="max-width: 1380px"><h1 class="col-11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $nameofproduct; ?></h1>  <a class="col-1" style="color:yellow" href="index.html"><h3 title="Return to main page">&#8920;&nbsp;</h3></a></div>
                    <p style="color:black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of elements:<?php echo $count ?> </p>     
                    <div class="row ">

                        <div class="container" style="max-width:1150px;">
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
                                    <?php for($i=0;$i<count($serial);$i++){ ?>
                                        <tr>
                                            <td><?php echo $labno[$i];  ?></td>
                                            <td><?php echo $serial[$i]; ?></td>
                                            <td><?php echo $name[$i];   ?></td>
                                            <td><?php echo $brand[$i];  ?></td>
                                            <td><?php echo $cost[$i];   ?></td>
                                            <td><?php echo $dop[$i];    ?></td>
                                            <td><textarea class="form-control" rows="1.5" readonly><?php echo $desc[$i];   ?></textarea></td>
                                            <td><?php echo $status[$i]; ?></td>
                                            <td>
                                                <input class="btn btn-info" id="<?php echo $serial[$i] ?>" style="width:60px;height:40px;" title="Shift to another lab" href="#comp" onclick="shift(this)" value="Shift" readonly>
                                                <form action="shift.php" method="POST">

                                                    <input id="labno"   name="labno"     style="display:none;"  value="<?php echo $lab         ?>">       
                                                    <input id="table"   name="table"   style="display:none;"  value="<?php echo $table       ?>">       
                                                    <input id="serial"  name="serial"  style="display:none;"  value="<?php echo $serial[$i]; ?>">
                                                    <input id="name"    name="name"    style="display:none;"  value="<?php echo $name[$i];   ?>">
                                                    <input id="cost"    name="cost"    style="display:none;"  value="<?php echo $cost[$i];   ?>">
                                                    <input id="brand"   name="brand"   style="display:none;"  value="<?php echo $brand[$i];  ?>">
                                                    <input id="dop"     name="dop"     style="display:none;"  value="<?php echo $dop[$i];    ?>">
                                                    <input id="desc"    name="desc"    style="display:none;"  value="<?php echo $desc[$i];   ?>">
                                                    <input id="status"  name="status"  style="display:none;"  value="<?php echo $status[$i]; ?>">

                                                    

                                                    <div id="shiftElement/<?php echo $serial[$i] ?>" class="hidden">
                                                        <div class="container-fluid text-center">
                                                            <div class="form-group text-center">
                                                                <label>Target Lab</label>
                                                                <select class="form-control" name="target" id="target">
                                                                    <option value="L01" > lab 1 </option>
                                                                    <option value="L02" > lab 2 </option>
                                                                </select> 
                                                            </div>
                                                            <div class="form-group text-center"><button type="submit" class="btn btn-info hidden" id="buttontobshown/<?php echo $serial[$i] ?>"  title="Shift to another lab" onclick="shift()">Shift</button> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="editElement.php" method="POST">

                                                    <input id="lab"     name="lab"     style="display:none;" value="<?php echo $lab          ?>">       
                                                    <input id="status"  name="status"  style="display:none"  value="<?php echo $status[$i];  ?>">
                                                    <input id="name"    name="name"    style="display:none"  value="<?php echo $name[$i];    ?>">
                                                    <input id="serial"  name="serial"  style="display:none"  value="<?php echo $serial[$i];  ?>">
                                                    <input id="table"   name="table"   style="display:none"  value="<?php echo $table;       ?>">

                                                    <a href="#comp"><button type="submit"  class="btn btn-warning" title="Edit Details and Status" style=";width:60px;height:40px;font-size: 10px">Change Status</button></a>

                                                </form>
                                            </td>
                                            <td>
                                                <form action="deleteElement.php" method="POST">

                                                    <input id="lab"     name="lab"      style="display:none;" value="<?php echo $lab          ?>">      
                                                    <input id="serial"  name="serial"   style="display:none"  value="<?php echo $serial[$i];  ?>">
                                                    <input id="name"    name="name"     style="display:none"  value="<?php echo $name[$i];    ?>">
                                                    <input id="table"   name="table"    style="display:none"  value="<?php echo $table        ?>">

                                                    <button type="submit" class="btn btn-danger" title="Delete item" onclick="return conf()">X</button>

                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>          
                                </tbody>
                            </table>

                            <a href="#comp" style="text-decoration: none;"><div class="card border-success mx-auto text-center  justify-content-center"  style="height:50px" onclick="add()">Add Element</div></a>  

                            <br />

                            <div id="addElement" class="hidden">
                                <div class="container-fluid">

                                    <h2 class="text-center">Add Element</h2>
                                    <input id="table" name="table" style="display:none" value="<?php echo $table ?>">
                                    <form class="form-signin" style="max-width:1000px" action="addelement.php" required method="POST">                                        

                                        <div class="row">

                                            <div class="col-6 form-group">
                                                <label>Lab No:</label>
                                                <select  type="int"      name="labno"    id="labno"  required  class="form-control">
                                                    <option value="L01">L01</option>
                                                    <option value="L02">L02</option>
                                                </select>
                                            </div>

                                            <input type="text" name="table" class="hidden" value="<?php echo $table; ?>">
                                            <input type="text" name="name" class="hidden" value="<?php echo $nameofproduct; ?>">
                                            <div class="col-6 form-group">
                                                <label>Serial No:</label>
                                                <input  type="int"      name="serial"    id="serial"  required  class="form-control">
                                            </div>
                                            <!-- <div class="col-6 form-group">
                                                <label>Name:</label>
                                                <select name="name"    id="name"    required  class="form-control">
                                                    <option value="Computer"  >Computer  </option>
                                                    <option value="Laptop"    >Laptop    </option>
                                                    <option value="Printer"   >Printer   </option>
                                                    <option value="Projector" >Projector </option>
                                                </select>
                                            </div> -->
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

                            <br /><br />

                        </div>
                    </div>
                </div>
            </div>
        </div>





    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script type="text/javascript">
function add() 
{
    document.getElementById("addElement").classList.toggle("shown");
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


         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $(this).toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
