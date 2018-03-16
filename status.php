<?php
session_start();
include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Books</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">
                    <img src="assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a style="background: #aa2dde"  href="logout.php">
                        Logout
                    </a>
                    <!-- dropdown user-->
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                                 <a href="changePic.php">
                                
                                    
                                <?php
                                
                                $sql = "SELECT * FROM user where email='".$_SESSION["uid"]."'";
if($result = mysql_query($sql))
{

                       if ($row = mysql_fetch_assoc($result)) {
    
        $name=$row["name"];
        $imgData=$row["image"];

                                           
                                if($imgData==null) {?>
                                
                                <img src="assets/img/user.jpg" alt="">
                                        <?php
                                }
                                else
                                {
                                    
                                    
                                        echo  "<img src='data:image/png;base64,".base64_encode($imgData)."' />";
                                }
                       }
}
                                        ?>
                                </a>
           </div>
                            <div class="user-info">
                                <div><strong>
                                 <?php
                                echo $name ?></strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn "></span>
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                        </div>
                        <!--end search section-->
                    </li>
                    <li >
                        <a href="home.php"><i class="fa fa-dashboard fa-fw"></i>Home</a>
                    </li>
                    <li>
                        <a href="editProfile.php"><i class="fa fa-edit fa-fw"></i>Edit Profile</a>
                    </li>
                    <li>
                        <a href="uploadBook.php"><i class="fa fa-flask fa-fw"></i>Lend</a>
                    </li>
                     <li class="selected">
                        <a href="status.php"><i class="fa fa-flask fa-fw"></i>Status</a>
                    </li>
                    <li>
                        <a href="mybooks.php"><i class="fa fa-table fa-fw"></i>My Books</a>
                    </li>
                      
                   
                   
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i>Mail<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="compose.php">Compose</a>
                            </li>
                            <li>
                                <a href="inbox.php">Inbox</a>
                            </li>
                            <li>
                                <a href="sent.php">sent Messages</a>
                            </li>
                            
                        </ul>
                        <!-- second-level-items -->
                    </li>
                   
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header"> Books  Status</h1>
                </div>
                <!--End Page Header -->
            </div>

            <div class="row">
                <!-- Welcome -->
                <div class="col-lg-12">
                    <div class="alert alert-info">
                         <a href="uploadBook.php">Lend Book</a>
                    </div>
                </div>
                <!--end  Welcome -->
            </div>

  <?php

  
  ?>
            
            <div class="row">
                <div class="col-lg-8">



                    <!--Simple table example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Books
                            
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Author</th>
                                                    <th>Amount</th>
                                                     <th>Status</th>
                                                     <th>Taken By</th>
                                                      <th>Date </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
<?php
 
 $sql = "SELECT * FROM books where owner='".$_SESSION["uid"]."'";
if($result = mysql_query($sql))
{

                        while ($row = mysql_fetch_assoc($result)) {
 
                          ?>
                                                
                                                <tr>
                                                    <td><?php echo $row["id"]; ?></td>
                                                    <td><?php echo $row["name"]; ?></td>
                                                    <td><?php echo $row["author"]; ?></td>
                                                    <td><?php echo $row["amount"]; ?></td>
                                                    <td><?php $status=$row["status"];
                                                    if($status==0) 
                                                    {
                                                        echo "Available</td><td></td><td></td>";
                                                    }
                                                    else
                                                            echo "Not Avaialable</td><td>".$row["takenby"]."</td><td>".$row["tdate"]."</td>";?>
                                                    
                                                </tr>
                                                    
                                                  <?php
                        }
}
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                            <!-- /.row -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!--End simple table example -->

                </div>

                
            </div>


         


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/dashboard-demo.js"></script>

</body>

</html>
