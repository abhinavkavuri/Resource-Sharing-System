<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Books</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
                <img src="assets/img/brand.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" >                  
            
            <?php
                    
                    if(isset ($_GET["msg"]))
                    {
                    $s=$_GET["msg"];
                    
                   if($s=="1")
                        echo 'Registered successfully';
                   else
                       if($s=="2")
                           echo "Registrion failed";
                    } 
                    ?>

                    <div class="panel-heading">
                        <h3 class="panel-title"> Sign Up</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="registerSave.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Name" name="name" type="text" required  autofocus>
                                </div>
                                   <div class="form-group">
                                    <input class="form-control" placeholder="Phone Number" name="number"  required type="text" >
                                </div>
                                   <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" required>
                                </div>
                           <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input class="btn btn-lg btn-success btn-block"  type="submit" value="Register">
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                              Have Account!      <a href="login.php" class="fa  fa-fw">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>
