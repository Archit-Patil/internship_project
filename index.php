
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="sidebar.css">
        <link rel="stylesheet" type="text/css" href="eqstyle.css">
        
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header" >
                      <img src="kj.png" style="width: 100px; height: 100px;">
                </div>

                <ul class="list-unstyled components" style="margin-top: 40px; text-align: center;">
                    
                    <li >
                        <a href="home.html">Home</a>
                    </li>
                    <li>
                        <a href="#">Master</a>
                    </li>
                    <li>
                        <a href="equipment.html" >Equipments</a>

                    </li>
                    <li >
                        <a href="add.html">Manage users</a>

                    </li>
                    <li style="color: red;">
                        <a href="#">Sign Out</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                        
                    </div>
                </nav>
                  </div>
       

<!------------------------------------------------------------------------------------------>



<div class="container" id="con" >
<link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Playfair+Display:400,700" rel="stylesheet">
  
<div class="grid" id="grid">

  <div class="  item-b item ">
     <div class="w-80 tc" >
      <form class="sign-in" action="equipment.php" method="POST">
                            <input style="display:none" value="Computer" name="nameofproduct">
                            <a>
                                <button style="background-color: transparent;" type="submit" class="btn"><img src="computer.svg"></button>
                            </a>
                        </form>
      
      <p >Total nos.</p>
      <p>100</p>
    </div>
  </div>
  <div class=" item item-c">
    <div class="w-80 tc pv4">
      
       <form class="sign-in" action="equipment.php" method="POST">
                            <input style="display:none" value="Projector" name="nameofproduct">
                            <a>
                                <button style="background-color: transparent;" type="submit" class="btn"><img src="projector.svg"></button>
                            </a>
                        </form>
      <p>Total nos.</p>
      <p >100</p>
      
    </div>
  </div>
  <div class=" item item-d" >
     <div class="w-80 tc">
      <form class="sign-in" action="equipment.php" method="POST">
                            <input style="display:none" value="Printer" name="nameofproduct">
                             <a>
                                 <button style="background-color: transparent;" type="submit" class="btn"><img src="printer.svg"></button>
                             </a>
                         </form>
       
      <p >Total nos.</p>
      <p >151</p>
    </div>

  </div>
  

  <div class=" item item-g">
     
      <div class="w-80 tc pv4">
     <form class="sign-in" action="equipment.php" method="POST">
                            <input style="display:none" value="Laptop" name="nameofproduct">
                            <a>
                                <button style="background-color: transparent;" type="submit" class="btn"><img src="laptop.svg"></button>
                            </a>
                            </form>
       
      <p>Total nos.</p>
      <p >100</p>
      
    </div>
  </div>

 
</div>
</div>
</div>








<!------------------------------------------------------------------------------------------------------------>







        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
