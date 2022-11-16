<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laserene Cottage</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <!-- Importing jQuery -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">MAIN MENU </a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
			
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="usersetting.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="settings.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
					
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="settings.php"><i class="fa fa-dashboard"></i>Rooms Status</a>
                    </li>
					<li>
                        <a  class="active-menu" href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    
                    <li>
                        <a  href="roomdel.php"><i class="fa fa-desktop"></i> Delete Room</a>
                    </li>

                    <li>
                        <a   href="meals.php"><i class="fa fa-plus-circle"></i>Add meals</a>
                    </li>

                    <li>
                        <a  href="mealsdel.php"><i class="fa fa-desktop"></i> Delete meals</a>
                    </li>
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           NEW ROOM <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ADD NEW ROOM
                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Type Of Room *</label>
                                            <select name="troom"  class="form-control"  required>
												<option value selected ></option>
                                                <option value="Superior Room">SUPERIOR ROOM</option>
                                                <option value="Deluxe Room">DELUXE ROOM</option>
												<option value="Guest House">GUEST HOUSE</option>
												<option value="Single Room">SINGLE ROOM</option>
                                            </select>
                              </div>
                              <div class="form-group">
                                            <label>Particulars</label>
                                            <select name="particulars"  class="form-control"id="room_type"  required>
												<option value selected ></option>
                                                <option  class="room_options" value="Single occupancy">Single occupancy</option>
                                                <option class="room_options" value="Double occupancy">Double occupancy</option>
												<option  class="room_options" value="Triple occupancy">Triple occupancy</option>
												<option  class="room_options" value="Quard occupancy">Quard occupancy</option>
                                            </select>
                              </div>

                              <div class="form-group">
                                            <label name> rooms</label>
                                           <br>
                                                <input name="nor" type="int" class="no_of_rooms"><br>
                                            
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Prices</label>
                                            <br>
                                            <input name = "price1" type="int" class="occupancy "name="Single_occupancy" placeholder="single occupancy"><br>
                                            <br>
                                            <input name="price2"   type="int"  class= "occupancy" id="Double_occupancy" placeholder="double occupancy"><br>
                                            <br>
                                            <input name="price3" type="int" class="occupancy "id="Triple_occupancy" placeholder="triple occupancy"><br>
                                            <br>
                                            <input  name="price4" type="int"  class= "occupancy" id="Quard_occupancy"placeholder="quard occupancy"><br>
                              </div>
								<div class="form-group">
                                            <label>Extra Bedding</label>
                                            <br>
                                            <input name="bed" type="int"  placeholder="Extra bed charges"><br>
                                            <br>
                                            
                               </div>
							 <input type="submit" name="add" value="Add New" class="btn btn-primary"> 
							</form>
							<?php
							 include('db.php');
							 if(isset($_POST['add']))
							 {
										$room = $_POST['troom'];
                                        $particulars = $_POST['particulars'];
                                        $ebed = $_POST['bed'];
                                        $price1 = $_POST['price1'];
                                        $price2 = $_POST['price2'];
                                        $price3 = $_POST['price3'];
                                        $price4 = $_POST['price4'];
                                        $no_of_rooms = $_POST['nor'];
										$place="Free";
										
										
										// $check="SELECT * FROM room WHERE type = '$room'";
										// $rs = mysqli_query($con,$check);
										// $data = mysqli_fetch_array($rs, MYSQLI_NUM);
										// if(isset($data[0])){
                                            // if($data[0] > 1) {
                                                // echo "<script type='text/javascript'> alert('Room Already in Exists')</script>";
                                            // for i in l    
                                            $sql ="INSERT INTO `room`( `type`,`particulars`,`extra bedding`,`single_price`,`double_price`,`triple_price`,`quard_price`,`place`) VALUES ('$room','$particulars','$ebed','$price1','$price2','$price3','$price4','$place')";
                                            $flag =0;
                                            for($i=0;$i<$no_of_rooms;$i++){
                                                $result = mysqli_query($con,$sql);
                                                $flag = 1;
                                            }
                            
                                          
                                            if($flag)
                                            {
                                            echo '<script>alert("New Room Added") </script>' ;
                                            }else {
                                                echo '<script>alert("Sorry ! Check The System") </script>' ;
                                            }
                                                
                                            // 
                                        // }
										// else
										// {
							 
										
										// $sql ="INSERT INTO `room`( `type`, `bedding`,`place`) VALUES ('$room','$bed','$place')" ;
										// if(mysqli_query($con,$sql))
										// {
										//  echo '<script>alert("New Room Added") </script>' ;
										// }else {
										// 	echo '<script>alert("Sorry ! Check The System") </script>' ;
										// }
							//  }
							}
							
							?>
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            ROOMS INFORMATION
                        </div>
                        <div class="panel-body">
								<!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <?php
						$sql = "select * from room limit 0,10";
						$re = mysqli_query($con,$sql)
						?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Room ID</th>
                                            <th>Room Type</th>
                                            <th>Particulars</th>
                    
                                            <th>Price 1</th>
                                            <th>Price 2</th>
                                            <th>Price 3</th>
                                            <th>Price 4</th>
											<th>Extra Bedding</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
										while($row= mysqli_fetch_array($re))
										{
												$id = $row['id'];
											if($id % 2 == 0) 
											{
												echo "<tr class=odd gradeX>
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
                                                    <td>".$row['particulars']."</td>
                                                 
												    <td>".$row['single_price']."</td>
                                                    <td>".$row['double_price']."</td>
                                                    <td>".$row['triple_price']."</td>
                                                    <td>".$row['quard_price']."</td>
                                                    <td>".$row['extra bedding']."</td>
												</tr>";
											}
											else
											{
												echo "<tr class=odd gradeX>
													<td>".$row['id']."</td>
													<td>".$row['type']."</td>
                                                    <td>".$row['particulars']."</td>
                                               
												    <td>".$row['single_price']."</td>
                                                    <td>".$row['double_price']."</td>
                                                    <td>".$row['triple_price']."</td>
                                                    <td>".$row['quard_price']."</td>
                                                    <td>".$row['extra bedding']."</td>
												</tr>";
											
											}
                                            
										}
									?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                    	   
                       </div>
                        
                    </div>
                </div>
                
               
            </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
     <script> 

var s = document.getElementById('room_type');
s.addEventListener("change", changeOrg);
function changeOrg(){
  var value = s.options[s.selectedIndex].value;
  switch(value)
  {
   case "Double occupancy" :
    $("#Double_occupancy").removeAttr("disabled");
    $("#Triple_occupancy").prop('disabled', true);
    $("#Quard_occupancy").prop('disabled', true);
    break;

    case "Triple occupancy" :
    $("#Triple_occupancy").removeAttr("disabled");
    $("#Double_occupancy").removeAttr("disabled");
    $("#Quard_occupancy").prop('disabled', true);
    break;

    case "Quard occupancy" :
    $("#Quard_occupancy").removeAttr("disabled");
    $("#Triple_occupancy").removeAttr("disabled");
    $("#Double_occupancy").removeAttr("disabled");
    break;
   default:
   $("#Double_occupancy").prop('disabled', true);
   $("#Triple_occupancy").prop('disabled', true);
   $("#Quard_occupancy").prop('disabled', true);
  }
}
//on page load
changeOrg();

      </script>
    <!-- JS Scripts-->

    <!-- jQuery Js -->  
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
