
<?php 
    include 'database/config.php'; 
    ?>

 <?php


if(isset($_POST['forget'])) {
    
        $email=$_POST['cus_mail'];
    $subject1='Sizning yangi parolingiz';
    $message='Yangi parol :123456 ';
   


    $app_name = "RRG";
    $from_mail ="rrgsoft5@gmail.com";
    $reply_to = "rrgsoft5@gmail.com";
        $to = $email;
    
    
    //send email
    $headers = "Kimdan: ".$app_name."<".$from_mail.">\n";
    $headers .= "Ga javob: ".$reply_to."\n";
    $headers .= "MIME-versiyasi: 1.0\n";
    $headers .= "Tarkib turi: text/html; charset=ISO-8859-1\n";
        if(!mail($to,$subject1,$message,$headers)){
        
            echo "<script>alert('Sizning parolingiz :123456');
            window.location.href='login.php';
            </script>";
}

        else {
            
                echo "<script>alert('Iltimos, pochtani tekshiring');
                window.location.href='login.php';</script>";
    
            
        }       
   
    }

?>
<html>
    
<head>

        <title>RRG SOFT</title>
        
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
            <img src="kashipara.png" alt="" height="100" width="250">   
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-4 center">
                            <div class="login-box">
                                <a href="./" class="logo-name text-lg text-center">Parolni unutdingizmi</a>
                                <p class="text-center m-t-md">Iltimos, elektron pochtangizni kiriting.</p>
                                <form class="m-t-md" action="" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Elektron pochta"  autocomplete="off" name="cus_mail" required>
                                    </div>
                                    <center><button type="submit" class="btn btn-success" name="forget">Menga yangi parol yuboring</button></center>
                                    <a href="./" class="display-block text-center m-t-md text-sm">Hisobga qaytish</a>
                                </form>
                               
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