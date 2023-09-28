
<?php include'header.php'; ?>

<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <div class="section-heading">
                        <h2 class="section__title">Tekshirib ko'rmoq</h2>
                    </div>
                </div><!-- end breadcrumb-content -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START CHECKOUT AREA
================================= -->
<section class="checkout-area padding-top-20px padding-bottom-70px">
    <div class="container">
        <div class="row">
           <div class="col-lg-6">
                    <div class="shopping-cart-detail-item">
                        <h3 class="widget-title font-size-20">Kupon kodi</h3>
                        <div class="shopping-cart-content pt-2">
                            <p class="line-height-26">
                            Hatto ko'lning ko'li ham, quruqlikda yumshoq,
                                 futbol mashinalari yo'q Bolalar uchun joy yo'q, hayotni targ'ib qilish muallifi.
                            </p>
                            <div class="contact-form-action pt-3">
                                <form method="post">
                                    <div class="form-group">
                                        <i class="la la-pencil input-icon"></i>
                                        <input class="form-control" type="text" name="text" placeholder="Kupon kodini kiriting">
                                    </div><!-- end form-group -->
                                    <button type="submit" class="theme-btn theme-btn-light">Kodni qo'llash</button>
                                </form>
                            </div><!-- end contact-form-action -->
                        </div><!-- end shopping-cart-content -->
                    </div><!-- end shopping-cart-detail-item -->
                </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <div class="card-box-shared">
                    <div class="card-box-shared-title">
                        <h3 class="widget-title font-size-18">Buyurtma xulosasi</h3>
                    </div>
                    <div class="card-box-shared-body">
                        <div class="shopping-cart-content">
                            <ul class="list-items">
                                <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                                    <span class="primary-color">Asl narxi:</span>
                                    <span class="primary-color-3">$199.99</span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between font-weight-semi-bold">
                                    <span class="primary-color">Kupon chegirmalari:</span>
                                    <span class="primary-color-3">-$181.99</span>
                                </li>
                                <li class="d-flex align-items-center justify-content-between font-size-18 font-weight-bold">
                                    <span class="primary-color">Jami:</span>
                                    <span class="primary-color-3">$18.99</span>
                                </li>
                            </ul>
                            <div class="btn-box mt-2">
                                <p class="font-size-14 line-height-22 mb-2">Xaridni yakunlash orqali siz ularga rozilik bildirasiz <a href="#" class="primary-color-2">Terms of Service.</a></p>
                                <a href="checkout.html" class="theme-btn d-block text-center">Davom eting</a>
                            </div>
                        </div>
                    </div><!-- end card-box-shared-body -->
                </div><!-- end card-box-shared -->
                <div class="card-box-shared">
                    <div class="card-box-shared-title">
                        <h3 class="widget-title font-size-18">To'lov usulini tanlang</h3>
                    </div>
                    <div class="card-box-shared-body p-0">
                        <div class="payment-method-wrap">
                            <div class="checkout-item-list">
                                <div class="accordion" id="paymentMethodExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <div class="checkout-item">
                                                <label for="radio-7" class="radio-trigger mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <input type="radio" id="radio-7" name="radio" checked>
                                                    <span class="checkmark"></span>
                                                    <span class="widget-title font-size-16">To'g'ridan-to'g'ri bank o'tkazmasi</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#paymentMethodExample">
                                            <div class="card-body">
                                                <p>To'lovni to'g'ridan-to'g'ri bank hisobimizga o'tkazing. Toʻlov maʼlumotnomasi sifatida Buyurtma identifikatoridan foydalaning. Bizning hisobimizdagi mablag'lar o'chirilmaguncha buyurtmangiz yuborilmaydi.</p>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <div class="checkout-item d-flex align-items-center justify-content-between">
                                                <label for="radio-8" class="radio-trigger collapsed mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <input type="radio" id="radio-8" name="radio">
                                                    <span class="checkmark"></span>
                                                    <span class="widget-title font-size-16">Kredit / Humo karta</span>
                                                </label>
                                                <span><img src="images/payment-img.png" alt=""></span>
                                            </div>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#paymentMethodExample">
                                            <div class="card-body">
                                                <div class="contact-form-action">
                                                    <div class="input-box">
                                                        <label class="label-text">Kartadagi nom <span class="primary-color-2 ml-1">*</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-pencil input-icon"></span>
                                                            <input class="form-control" placeholder="Karta nomi" type="text" name="text" required="">
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label class="label-text">Karta raqami<span class="primary-color-2 ml-1">*</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-pencil input-icon"></span>
                                                            <input class="form-control" name="text" placeholder="1234  5678  9876  5432" required="" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label class="label-text">Yaroqlilik oyi<span class="primary-color-2 ml-1">*</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-pencil input-icon"></span>
                                                            <input class="form-control" placeholder="MM" required="" name="text" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label class="label-text">Yaroqlilik yili<span class="primary-color-2 ml-1">*</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-pencil input-icon"></span>
                                                            <input class="form-control" placeholder="YY" required="" name="text" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label class="label-text">CVV<span class="primary-color-2 ml-1">*</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-pencil input-icon"></span>
                                                            <input class="form-control" placeholder="CVV" required="" name="text" type="text">
                                                        </div>
                                                    </div>
                                                     <div class="input-box">
                                                        <div class="form-group">
                                                            <div class="custom-checkbox">
                                                                <input type="checkbox" id="chb2">
                                                                <label for="chb2">Ushbu kartani eslab qoling</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <div class="checkout-item d-flex align-items-center justify-content-between">
                                                <label for="radio-9" class="radio-trigger collapsed mb-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <input type="radio" id="radio-9" name="radio">
                                                    <span class="checkmark"></span>
                                                    <span class="widget-title font-size-16">PayPal</span>
                                                </label>
                                                <span><img src="images/paypal.png" alt=""></span>
                                            </div>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#paymentMethodExample">
                                            <div class="card-body">
                                                <div class="contact-form-action">
                                                    <div class="input-box">
                                                        <label class="label-text">Ism<span class="primary-color-2 ml-1">*</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-user input-icon"></span>
                                                            <input class="form-control" placeholder="Ism" required="" name="text" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="input-box">
                                                        <label class="label-text">Familiya<span class="primary-color-2 ml-1">*</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-user input-icon"></span>
                                                            <input class="form-control" placeholder="Familiya" required="" name="text" type="text">
                                                        </div>
                                                    </div>
                                                     <div class="input-box">
                                                        <label class="label-text">E-pochta manzili<span class="primary-color-2 ml-1">*</span></label>
                                                        <div class="form-group">
                                                            <span class="la la-envelope input-icon"></span>
                                                            <input class="form-control" placeholder="E-pochta manzili" required="" name="email" type="email">
                                                            <p class="mt-2 d-block">Tranzaktsiyangizni yakunlash uchun sizni PayPal xavfsiz serverlariga o'tkazamiz.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="section-block"></div>
                                            <div class="btn-box mt-4">
                                                <button type="submit" class="theme-btn theme-btn-light mt-2">Yuborish</button>
                                            </div>
                                        </div>
                                    </div><!-- end card -->
                                </div><!-- end accordion -->
                            </div>
                        </div><!-- end payment-method-wrap -->
                    </div><!-- end card-box-shared-body -->
                </div><!-- end card-box-shared -->
            </div><!-- end col-lg-5 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end checkout-area -->
<!-- ================================
    END CHECKOUT AREA
================================= -->

<!-- ================================
         END FOOTER AREA
================================= -->
<?php include'footer.php'; ?>