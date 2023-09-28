
<!DOCTYPE html>
<?php include 'includes/check_reply.php'; ?>
<html>
    
<head>

        <title>Onlayn test</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Onlayn imtihon tizimi" />
        <meta name="keywords" content="Onlayn imtihon tizimi" />
        <meta name="author" content="RRG SOFT" />

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="assets/images/icon.png" rel="icon">
        <link href="assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
         <link href="assets/css/snack.css" rel="stylesheet" type="text/css"/>
        <script src="assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
    </head>

     <body <?php if ($ms == "1") { print 'onload="myFunction()"'; } ?>  class="page-login">
    
        <main class="page-content">

            <div class="page-inner">
            <center><img src="kashipara.png" alt="" height="125" width="250" style="margin-top: 20px;"></center>
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-4 center">
                            <div class="login-box">
                                <a href="./" class="logo-name text-lg text-center">Avval tizimga kiring va testdan o'ting!</a>
                                <p class="text-center m-t-md">Ro'yxatdan o'tmagan bo'lsangiz. Avval ro'yxatdan o'ting</p>
                                <form class="m-t-md" action="pages/authentication.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Sizning elektron pochtangiz yoki identifikatsion raqamingiz"  autocomplete="off" name="user" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Parolingiz" name="login" required>
                                    </div>
                                   <center> <button type="submit" class="btn btn-success">Kirish</button></center>
                                    <!-- <a href="forgot_pw.php" class="display-block text-center m-t-md text-sm">Forgot Password?</a> -->
                                </form><br>
                                <center><span><a href="sign-up.php"><button class="btn btn-info">Ro'yxatdan o'tish</button></a></span>
                                    <span><a href="index.php"><button class="btn btn-primary">Bosh sahifaga qaytish</button></a></span></center>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
			<?php if ($ms == "1") {
?> <div class="alert alert-success" id="snackbar"><?php echo "$description"; ?></div> <?php	
}else{
	
}
?>

        <script src="assets/plugins/jquery/jquery-2.1.4.min.js"></script>
        <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="assets/plugins/pace-master/pace.min.js"></script>
        <script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/js/modern.min.js"></script>
        		<script>
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
    </body>

</html>