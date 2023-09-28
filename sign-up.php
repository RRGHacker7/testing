<?php
include 'database/config.php';

if (isset($_POST['register'])) {


$fname = ucwords(mysqli_real_escape_string($conn, $_POST['first_name']));
$category = ucwords(mysqli_real_escape_string($conn, $_POST['category']));
$department = ucwords(mysqli_real_escape_string($conn, $_POST['department']));
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$address = ucwords(mysqli_real_escape_string($conn, $_POST['address']));
$college = mysqli_real_escape_string($conn, $_POST['college']);
$position = mysqli_real_escape_string($conn, $_POST['position']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$password = mysqli_real_escape_string($conn, $_POST['pass']);

$sql = "SELECT * FROM tbl_users WHERE email = '$email' OR phone = '$phone'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    $sem = $row['email'];
    $sph = $row['phone'];
    if ($sph == $phone) {
     echo "<script>
alert('Sizning elektron pochtangiz allaqachon ro'yxatdan o'tgan');
</script>";    
    }else{
    
    
    }
    
    }
} else {

$sql1 = "INSERT INTO tbl_users ( first_name, last_name, gender, dob, college, position, address, email, phone,role,category,department,password,acc_stat)
VALUES ('$fname', '', '$gender', '1', '$college', '$position', '$address', '$email', '$phone', 'student','$category','$department','$password','1')";

if ($conn->query($sql1) === TRUE) {
   echo "<script>
alert('Muvaffaqiyatli ro'yxatdan o'ting');
window.location.href='login.php';
</script>";
}
 else {
  echo "<script>
alert('Ro'yxatdan o'tish amalga oshmadi');
window.location.href='sign-up.php';
</script>";
}


}

$conn->close();



 }

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Onlayn test</title>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-awesome.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/fancybox.css">
    <link rel="stylesheet" href="css/tooltipster.bundle.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- end inject -->
</head>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<header class="header-menu-area">
    <div class="header-menu-content" style="background-color: #d1f3ff;">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="index.php" class="logo"><img src="images/logo.png" alt="logo" style="width: 110px"></a>
                            <div class="menu-toggler">
                                <i class="la la-bars"></i>
                                <i class="la la-times"></i>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="index.php">Bosh sahifa</a>
                                    </li>
                                   <!--  <li>
                                        <a href="materials.php">Study Materials</a>
                                    </li> -->
                                   <!--  <li>
                                        <a href="course-grid.php">Test Syllabus</a>
                                    </li> -->
                                    <li>
                                        <a href="gallery.php">Galereya</a>
                                    </li>
                                     <li>
                                        <a href="login.php" style="color: #26b559;font-size: 16px;">Kirish</a>
                                    </li>
                                   
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->
</header><!-- end header-menu-area -->


<!-- ================================
       START SIGN UP AREA
================================= -->
<section class="sign-up ">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto">
                <div class="card-box-shared">
                    <div class="card-box-shared-title text-center">
                        <h3 class="widget-title font-size-25" style="color: #47ad6b;">Hisob qaydnomangizni ro'yxatdan o'tkazing</h3>
                    </div>
                    <div class="card-box-shared-body">
                        <div class="contact-form-action">
                             <form action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Familya Ism<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Ismingizni kiriting" name="first_name" required autocomplete="off">
                                                <span class="la la-user input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
        
                                     <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">E-pochta manzili<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Elektron pochta manzilini kiriting" name="email" required autocomplete="off" pattern="[^ @]*@[^ @]*">
                                                <span class="la la-envelope input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                    
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Telefon raqami<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Misol: 8945851494" name="phone" required autocomplete="off" pattern="[7-9]{1}[0-9]{9}">
                                                <span class="la la-phone input-icon"></span>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->

                                    <div class="col-lg-6">
                                       <div class="input-box">
                                           <label class="label-text">Tug'ilgan kuningiz<span class="primary-color-2 ml-1">*</span></label>
                                           <div class="form-group">
                                               <input type="text" class="form-control" placeholder="Tug'ilgan kuningizni kiriting" name="college" required autocomplete="off">
                                               <span class="la la-map-marker input-icon"></span>
                                           </div>
                                       </div>
                                    </div><!-- end col-lg-6 -->

                                    
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Fanni tanlang<span class="primary-color-2 ml-1">*</span></label>
                                            <div class="form-group">
                                                <select class="form-control" name="department" required>
                                                   <option value="" selected disabled>Fanni tanlang</option>
                                                   <option value="Informatika" >Informatika</option>
                                                   <option value="Matematika" >Matematika</option>
                                                   <option value="Fizika" >Fizika</option>
                                                   <option value="Ona tili va adabiyot" >Ona tili va adabiyot</option>
                                                   <option value="Tarix" >Tarix</option>


                                               </select>
                                                <!-- <input  type="date" class="form-control date-picker" name="dob" required autocomplete="off" placeholder="Select date of birth">
                                                <span class="la la-user input-icon"></span> -->
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                     
                                     <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Sinfingizni tanlang<span class="primary-color-2 ml-1">*</span>
                                            </label>
                                            <div class="form-group">
                                            <select class="form-control" name="category" required>
                                            <option value="5-sinf" selected >5-a sinf</option>
                                            <option value="6-a sinf" selected >6-a sinf</option>
                                            <option value="6-b sinf" selected >6-b sinf</option>
                                            <option value="7-a sinf" selected >7-a-sinf</option>
                                            <option value="7-b sinf" selected >7-b-sinf</option>
                                            <option value="7-t sinf" selected >7-t-sinf</option>
                                            <option value="8-a sinf" selected >8-a sinf</option>
                                            <option value="9-a sinf" selected >9-a sinf</option>
                                            <option value="9-b sinf" selected >9-b sinf</option>
                                            <option value="10-a sinf" selected >10-a sinf</option>
                                            <option value="10-b sinf" selected >10-b sinf</option>
                                            <option value="11-a sinf" selected >11-a sinf</option>
                                           
                                           <!--  <?php
                                            include '../database/config.php';
                                            $sql = "SELECT * FROM tbl_categories WHERE status = 'Active' ORDER BY name";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
    
                                            while($row = $result->fetch_assoc()) {
                                            print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                                            }
                                           } else {
                          
                                            }
                                             $conn->close();
                                             ?> -->
                                            
                                            </select>
                                        </div>
                                        </div>
                                    </div><!-- end col-lg-6 -->
                                     
                                     
                                   
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label class="label-text">Jinsni tanlang<span class="primary-color-2 ml-1">*</span></label>
                                           <div class="form-group">
                                          <label for="exampleInputEmail1">Erkak</label>
                                            <input type="radio"  name="gender" value="Male" required>
                                            <label for="exampleInputEmail1">Ayol</label>
                                            <input type="radio" name="gender" value="Female" required>
                                        </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->

                                     <div class="col-lg-6">
                                       <div class="input-box">
                                           <label class="label-text">Sizning parolingiz<span class="primary-color-2 ml-1">*</span></label>
                                           <div class="form-group">
                                            <input type="text" class="form-control" name="pass" id="number" onkeypress="return isNumberKey(event)" placeholder="6 xonali raqamni kiriting" pattern="[0-9]{6}" required>
                                               <span class="fa fa-lock input-icon"></span>
                                           </div>
                                       </div>
                                    </div><!-- end col-lg-6 --> 

                                    <div class="col-lg-6">
                                        <div class="btn-box">
                                            <button class="theme-btn" type="submit" name="register">ro'yxatdan o'tish</button>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                     <div class="col-lg-6">

                                        <p>Hisobingiz bormi?<a href="login.php">Bu yerda kiring</a></p>
                                    </div>
                                </div><!-- end row -->
                            </form>
                        </div><!-- end contact-form -->
                    </div>
                </div>
            </div><!-- end col-md-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end sign-up -->
<!-- ================================
       START SIGN UP AREA
================================= -->

<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area section-bg-2 padding-top-40px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 column-td-half">
                <div class="footer-widget">
                     <h3 class="widget-title">Bizning manzilimiz</h3>
                    <span class="section-divider"></span>
                   <ul class="list-items">
                        <li><a href="#">Sirdaryo Viloyati</a></li>
                        <li><a href="#">Boyovut tumani</a></li>
                        <li><a href="#">2-maktab</a></li>
                        <li><a href="#">+99894-585-14-94</a></li>
                    </ul>
                   
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">Tezkor havolalar</h3>
                    <span class="section-divider"></span>
                    <ul class="list-items">
                        <li><a href="index.php">Bosh sahifa</a></li>
                        <li><a href="gallery.php">Galereya</a></li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 column-td-half">
                <div class="footer-widget">
                    <h3 class="widget-title">Tez kunlarda...</h3>
                    <span class="section-divider"></span>
                    <ul class="btn-box">
                        <li>
                            <a href="#" class="theme-btn">
                                <i class="la la-apple icon-element"></i>
                                <span class="app-titles">
                                    <span class="app__subtitle">Tez kunlarda</span>
                                    <span class="app__title">App Store</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="theme-btn">
                                <i class="la la-android icon-element"></i>
                                <span class="app-titles">
                                    <span class="app__subtitle">Tez kunlarda</span>
                                    <span class="app__title">Google Play</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div><!-- end footer-widget -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="copyright-content">
            <div class="row align-items-center">
                <div class="col-lg-10">
                <p class="copy__desc">&copy; 2022 yil RRG SOFT tomonidan ishlab chiqildi. Barcha huquqlar ximoyalangan. <a href="https:\t.me\rrgfcoder">RRG.</a></p>
                </div><!-- end col-lg-9 -->
                
            </div><!-- end row -->
        </div><!-- end copyright-content -->
    </div><!-- end container -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="fa fa-angle-up" title="Yuqoriga chiqing"></i>
</div>
<!-- end scroll top -->


<!-- template js files -->
<script>
    $(document).ready(function() {
  $('#number').bind("cut copy paste drag drop", function(e) {
      e.preventDefault();
  });     
});
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
</script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/waypoint.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/particlesRun.js"></script>
<script src="js/fancybox.js"></script>
<script src="js/wow.js"></script>
<script src="js/date-time-picker.js"></script>
<script src="js/jquery.filer.min.js"></script>
<script src="js/emojionearea.min.js"></script>
<script src="js/smooth-scrolling.js"></script>
<script src="js/tooltipster.bundle.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/aduca/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 19 Jul 2020 15:33:49 GMT -->
</html>