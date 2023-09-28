<?php include'header.php'; ?>

<?php
if (isset($_POST['form1'])) {
   
    $email=$_POST['email'];
    $subject1='Obuna pochtasi';
    $message='Elektron pochtaga obuna bo\'ling : '.$email.'<br><br>Iltimos, kelgusi treninglar, veb-seminarlar va yangiliklar haqida ma\'lumotni ushbu elektron pochtaga yuboring.';
   


    $app_name = "RRG SOFT veb-saytiga obuna bo'ling";
    $from_mail = $_POST['email'];
    $reply_to = $_POST['email'];
        $to = "rrgsoft5@gmail.com";
    
    
    //send email
    $headers = "Kimdan: ".$app_name."<".$from_mail.">\n";
    $headers .= "Ga javob: ".$reply_to."\n";
    $headers .= "MIME-versiyasi: 1.0\n";
    $headers .= "Kontent turi: text/html; charset=ISO-8859-1\n";
        if(!mail($to,$subject1,$message,$headers)){
        
            echo "<script>alert('Xabaringiz muvaffaqiyatli yuborildi');</script>";
}

        else {
            
        
            
                echo "<script>alert('Xabaringiz muvaffaqiyatli yuborildi');</script>";
    
            
        }       

     }

?>


<!--======================================
        START COURSE AREA
======================================-->

<section class="course-area padding-top-60px" style="line-height: 12px;">
    <div class="course-wrapper">
        <div class="container" style="padding-bottom: 12px;">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="section__title">Onlayn test tizimi</h2>
                        <span class="section-divider"></span>
                    </div><!-- end section-heading -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tab">
                        <ul class="nav nav-tabs justify-content-center text-center" role="tablist" id="review">
                            <li role="presentation">
                                <a href="#tab1" role="tab" data-toggle="tab" class="theme-btn active" aria-selected="true">
                                   Informatika | Matematika | Fizika
                                </a>
                            </li>
                           <!--  <li role="presentation">
                                <a href="#tab2" role="tab" data-toggle="tab" class="theme-btn" aria-selected="false">
                                    TRB
                                </a>
                            </li> -->
                        </ul>
                    </div><!-- end section-tab -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end course-wrapper -->
    <div class="card-content-wrapper section-bg padding-top-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="tab1">
                            <div class="row">

                                     <?php
                                          date_default_timezone_set('Asia/Kolkata');
                                          $current_time= date('H:i');

                                           $sql = "SELECT * FROM tbl_examinations WHERE category = 'Informatika'";
                                           $result = $conn->query($sql);

                                           // if ($result->num_rows > 0 AND $current_time >='19:00') {
                                            if ($result->num_rows > 0 ) {

                                            while($row = $result->fetch_assoc()) { ?>

                                                 <div class="col-lg-4 column-td-half">
                                             <div class="card-item" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text"><?php echo $row['duration'];?> Minut 
                                                    <?php echo $todaydate;?></span>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="#"><?php echo $row['exam_name'];?></a>
                                            </h3>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                               <span class="star-rating-wrap">
                                                    <span class="star__rating"><?php echo $row['rating'];?></span>
                                                    <span class="star__count">(<?php echo $row['review'];?>)</span>
                                                </span>
                                            </div><!-- end rating-wrap -->
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Bepul</span>
                                                <a href="student/index.php" class="theme-btn" style="padding: 0px 13px 0 13px;">Testni boshlash</a>
                                            </div><!-- end card-price-wrap -->
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                       </div><!-- end col-lg-4 -->

                                       
                                        <?php }   } else { ?>

                                            <div class="col-lg-4 column-td-half">
                                             <div class="card-item" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-content">
                                            <h3 class="card__title">
                                                <a href="#">Tez kunlarda</a>
                                            </h3>
                                        </div><!-- end card-content -->
                                    </div><!-- end card-item -->
                                       </div><!-- end col-lg-4 -->
                                             
                                       <?php    }
                                           ?>
                            </div><!-- end course-block -->
                        </div><!-- end tab-pane -->


                        <!-- <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <div class="row">
                                 <?php
                                           $sql = "SELECT * FROM tbl_examinations WHERE category = 'CTRB'";
                                           $result = $conn->query($sql);

                                           if ($result->num_rows > 0) {

                                            while($row = $result->fetch_assoc()) { ?>

                                                 <div class="col-lg-4 column-td-half">
                                             <div class="card-item" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-content">
                                            <p class="card__label">
                                                <span class="card__label-text"><?php echo $row['duration'];?> Mins</span>
                                            </p>
                                            <h3 class="card__title">
                                                <a href="#"><?php echo $row['exam_name'];?></a>
                                            </h3>
                                            <div class="rating-wrap d-flex mt-2 mb-3">
                                                <ul class="review-stars">
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star"></span></li>
                                                    <li><span class="la la-star-o"></span></li>
                                                </ul>
                                                <span class="star-rating-wrap">
                                                    <span class="star__rating"><?php echo $row['rating'];?></span>
                                                    <span class="star__count">(<?php echo $row['review'];?>)</span>
                                                </span>
                                            </div>
                                            <div class="card-price-wrap d-flex justify-content-between align-items-center">
                                                <span class="card__price">Free Cost</span>
                                                <a href="student/index.php" class="theme-btn" style="padding: 0px 13px 0 13px;">Take Test</a>
                                            </div>
                                        </div>
                                    </div>
                                       </div>
                                        <?php }   } else { ?>

                                            <div class="col-lg-4 column-td-half">
                                             <div class="card-item" data-tooltip-content="#tooltip_content_1">
                                        <div class="card-content">
                                            <h3 class="card__title">
                                                <a href="#">Coming Soon</a>
                                            </h3>
                                        </div>
                                    </div>
                                       </div>
                                       <?php    }
                                           ?>                             
                            </div>
                        </div> -->

                       
                    </div><!-- end tab-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end card-content-wrapper -->
</section><!-- end courses-area -->

<!--======================================
        END COURSE AREA
======================================-->


<!-- ================================
       START FUNFACT AREA
================================= -->

<section class="register-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
             <img src="images/img23.jpg">
            </div><!-- end col-lg-5 -->
            <div class="col-lg-7">
                <div class="register-heading">
                    <div class="section-heading">
                        <h2 class="section__title">Sayt haqida</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc mb-2">Hurmatli o'quvchilar siz bizning ushbu web-sayt orqali barcha fanlardan olgan bilimlaringizni sinab ko'rishingiz mumkin.</p>
                        <p class="section__desc">
                           Saytdan foydalanish:<br>
                                1) Ro'yxatdan o'tish<br>
                                2) Login parol olish<br>
                                3) Kerakli testni tanlab<br>
                                4) Bilimingizni sinab ko'ring.<br>
                        </p>
                    </div><!-- end section-heading -->
                </div><!-- end register-heading -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end register-area -->
<!--======================================
        END REGISTER AREA
======================================-->

<!-- ================================
       START BLOG AREA
================================= -->
<section class="blog-area padding-top-120px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="section__title text-white">Eng so'nggi yangiliklar va maqolalar</h2>
                    <span class="section-divider section-divider-light"></span>
                </div><!-- end section-heading -->
            </div><!-- end col-md-12 -->
        </div><!-- end row -->
        <div class="row margin-top-30px">
            <div class="col-lg-12">
                <div class="blog-post-carousel owl-dot-and-nav">
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="#" class="card__img"><img src="images/img9.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">04 sentabr
                                </span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="#">Informatika fani</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li><a href="#" class="blog-admin-name">Informatika fanidan dars jarayonidan foto lavhalar </a></li>
                                    <li><span class="blog__panel-comment">2023-2024</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="#" class="card__img"><img src="images/img10.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">11 sentabr</span>
                            </div>
                        </div><!-- end card-image -->
                       <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="#">Fizika fani</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li><a href="#" class="blog-admin-name">Fizika fanidan dars jarayonidan foto lavhalar</a></li>
                                    <li><span class="blog__panel-comment">2023-2024</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="#" class="card__img"><img src="images/img11.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">14 sentabr</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="#">Tarix fani</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li><a href="#" class="blog-admin-name">Tarix fanidan dars jarayonidan foto lavhalar</a></li>
                                    <li><span class="blog__panel-comment">2023-2024</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="#" class="card__img"><img src="images/img12.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">13 sentabr</span>
                            </div>
                        </div><!-- end card-image -->
                       <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="#">Musiqa fani</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li><a href="#" class="blog-admin-name">Musiqa fanidan dars jarayonidan foto lavhalar</a></li>
                                    <li><span class="blog__panel-comment">2023-2024</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                    <div class="card-item blog-card">
                        <div class="card-image">
                            <a href="#" class="card__img"><img src="images/img13.jpg" alt=""></a>
                            <div class="card-badge">
                                <span class="badge-label">12 sentabr</span>
                            </div>
                        </div><!-- end card-image -->
                        <div class="card-content">
                            <h3 class="card__title mt-0">
                                <a href="#">Jismoniy tarbiya fani</a>
                            </h3>
                            <div class="card-action">
                                <ul class="card-duration d-flex align-items-center">
                                    <li><a href="#" class="blog-admin-name">Jismoniy tarbiya fanidan dars jarayonidan foto lavhalar</a></li>
                                    <li><span class="blog__panel-comment">2023-2024</span></li>
                                </ul>
                            </div><!-- end card-action -->
                        </div><!-- end card-content -->
                </div><!-- end blog-post-carousel -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end blog-area -->
<!-- ================================
       START BLOG AREA
================================= -->

<!-- ================================
       START REGISTER AREA
================================= -->

<section class="register-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="register-form">
                    <div class="contact-form-action">
                        <h3 class="widget-title">Biz bilan bog'lanish</h3>
                        <form method="post">
                            <div class="input-box">
                                <label class="label-text">Ism<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="name" placeholder="Ismingiz">
                                    <span class="la la-user input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Elektron pochta<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="E-pochta manzili">
                                    <span class="la la-envelope input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Telefon raqami<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone" placeholder="Telefon raqami">
                                    <span class="la la-phone input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="input-box">
                                <label class="label-text">Xabar<span class="primary-color-2 ml-1">*</span></label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="subject" placeholder="Xabaringizni yozing">
                                    <span class="la la-book input-icon"></span>
                                </div>
                            </div><!-- end input-box -->
                            <div class="btn-box">
                                <button class="theme-btn" type="submit">Murojaatni yuborish</button>
                            </div><!-- end btn-box -->
                        </form>
                    </div><!-- end contact-form-action -->
                </div>
            </div><!-- end col-lg-5 -->
            <div class="col-lg-7">
                <div class="register-heading">
                    <div class="section-heading">
                        <h5 class="section__meta">ro'yxatdan o'tish</h5>
                        <h2 class="section__title">Ush bu sayt orqali bilimingizni mustahkamlab Oliy o'quv yurtiga kirish yo'llanmasini qo'lga kiriting.</h2>
                        <span class="section-divider"></span>
                        <p class="section__desc mb-2">Ta'lim - bu sizning jamiyatingizda odamlar ega bo'lishi kerak bo'lgan bilim va ko'nikmalar to'plamini egallash jarayoni. Ta'lim o'rganishdan tashqari, tanqidiy fikrlash jarayonini rivojlantiradi. Chop etish va terish istryrem Ipsum noma'lum printer Lorem ipsum dolor sit amet, consectetur adipisicing elit bo'lgan 1500-yillardan beri sanoatning standart qo'g'irchoq matni bo'lib kelgan. Me'morda, hayotning oson ko'rinadigan narsalarida xatolik bormi? Bundan boshqa ayblarni kattaroq qilish uchun, kim zavqda dono? Yo'q, zavq.<br>
                        </p>
                        <p class="section__desc">
                           
                        </p>
                    </div><!-- end section-heading -->
                    <div class="btn-box">
                        <a href="#" class="theme-btn">boshlash</a>
                    </div>
                </div><!-- end register-heading -->
            </div><!-- end col-lg-7 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end register-area -->
<!--======================================
        END REGISTER AREA
======================================-->

<!-- ================================
       START FUNFACT AREA
================================= -->
<section class="funfact-area text-center overflow-hidden padding-top-85px padding-bottom-85px">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 column-td-half">
                <div class="counter-item">
                    <span class="la la-bullhorn count__icon"></span>
                    <h4 class="count__title counter">18</h4>
                    <p class="count__meta">Oliy toifa</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 column-td-half">
                <div class="counter-item">
                    <span class="la la-users count__icon"></span>
                    <h4 class="count__title counter text-color-2">198</h4>
                    <p class="count__meta">Birinchi toifa</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-4 column-td-half">
                <div class="counter-item">
                    <span class="la la-certificate count__icon"></span>
                    <h4 class="count__title counter text-color-3">100</h4>
                    <p class="count__meta">Ikkinchi toifa</p>
                </div><!-- end counter-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end funfact-area -->



<!-- ================================
         END FOOTER AREA
================================= -->
<?php include'footer.php'; ?>