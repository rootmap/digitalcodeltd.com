<?php
$objSTD=new MenuPageController();
$SliderData=$objSTD->SliderData();
$Seo=$objSTD->Seo();
?>

<?php $__env->startSection('title',''); ?>
<?php $__env->startSection('seo'); ?>
    <meta name="description" content="<?php echo e($Seo->description); ?>">
    <meta name="keywords" content="<?php echo e($Seo->meta); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>	

 
	<!-- Revolution slider start -->
                <?php echo $__env->make('frontend.extra.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- Revolution slider end -->
                <?php 
                    $objSTD=new MenuPageController();
                    $WelcomeContent = $objSTD->WelcomeContent();
                ?>
                <!-- Welcome Box start -->
                <div class="welcome">
                    <div class="container">
                        <div class="row">
                            <div class="cell-9">
                                <h3 class="center block-head">
                                    <span class="main-intro">
                                        <!-- <?php echo e($WelcomeContent->title); ?> -->
                                        Welcome to the Taj Indian Restaurant & Take-away
                                    </span>
                                    <span class="sub-intro">Serving Indian Cusine to the people of Guernsey since 1989</span>
                                </h3>
                                <div class="cell-12">
                                    <div class="cell-4 open-timing">
                                        <span>Open: 12 till 2pm</span>
                                    </div>
                                    <div class="cell-4 open-timing">
                                        <span>5.30pm till late</span>
                                    </div>
                                    <div class="cell-4 open-timing">
                                        <span>7 days-a-week</span>
                                    </div>
                                    <div class="cell-12 reserve-headline">
                                        <P>Reserve your table online for a memorable night out at the Taj</P>
                                    </div>
                                    <div class="cell-12 instruction">
                                        <P>Thank you for choosing a Taj take-away meal<br>If your order is not for a specific time or date, please allow 30 minutes<br> for your pick-up from our Restaurant.</P>
                                    </div>
                                    <div class="cell-12 instruction">
                                        <P>We aim to honour our 30 minute delivery of orders. An order for three or more people, or during our busy periods Friday & Saturday evenings 6 till 8 - allow 45 minutes for your food order pick-up</P>
                                        <P class="red-text">We're sorry that we no longer offer home delivery service</P>
                                    </div>
                                    <div class="cell-12 home-buttons hb-first-row">
                                        <a class="btn btn-md btn-3d btn-custom-one fx animated fadeInUp" href="#" data-animate="fadeInUp" data-animation-delay="1700" style="animation-delay: 1700ms;">
                                            <span class="line-one">TAKE-AWAY MENU</span>  
                                            <span class="line-two">PLACE YOUR ORDER</span>                                              
                                        </a>
                                        <a class="btn btn-md btn-3d btn-custom-two fx animated fadeInUp" href="#" data-animate="fadeInUp" data-animation-delay="1700" style="animation-delay: 1700ms;">
                                            <span class="line-one">BOOK YOUR TABLE</span>  
                                            <span class="line-two">AT THE TAJ</span> 
                                        </a>
                                    </div>
                                    <div class="cell-12 home-buttons">
                                        <a class="btn btn-md btn-3d btn-custom-three fx animated fadeInUp" href="#" data-animate="fadeInUp" data-animation-delay="1700" style="animation-delay: 1700ms;">
                                            <span class="line-one">VIEW + PRINT</span>  
                                            <span class="line-two">TAKE-AWAY MENU</span>
                                        </a>
                                        <a class="btn btn-md btn-3d btn-custom-three fx animated fadeInUp" href="#" data-animate="fadeInUp" data-animation-delay="1700" style="animation-delay: 1700ms;">
                                            <span class="line-one">VIEW + PRINT</span>  
                                            <span class="line-two">RESTAURANT MENU</span>
                                        </a>
                                    </div>
                                    <!-- <p class="margin-bottom-0">
                                        
                                        <?php
                                            //echo html_entity_decode($WelcomeContent->description)
                                        ?>
                                    </p> -->
                                </div>
                                
                            </div>
                            <div class="cell-3">
                                <div class="material-card-content del-info-card" style="border-top-color: rgb(246, 187, 66);">

                                    <h4 class="material-card-title">FREE HOME DELIVERY</h4>
                                    <p class="material-card-summary">Within 5 Miles Radius </p>
                                    <p class="material-card-summary">Minimum Order 15 pounds</p>
                                    <p class="material-card-summary">*Further distance can be arranged</p>
                                    <hr>                                    

                                    <p class="material-card-summary">Monday-Saturday</p>
                                    <p class="material-card-summary">LUNCH: 12.00PM - 02.00PM &amp;</p>
                                    <p class="material-card-summary">DINNER: 06.00PM - 11.30PM</p>
                                    <hr>
                                    <p class="material-card-summary">Sunday Buffet Lunch</p>
                                    <p class="material-card-summary">LUNCH: 12.00PM - 03.00PM &amp;</p>
                                    <p class="material-card-summary">DINNER: 06.00PM - 11.30PM</p>

                                    <?php 
                                        echo html_entity_decode($WelcomeContent->free_home_delivery)
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Welcome Box end -->


                <!-- Services boxes style 1 start -->
                <!-- FUN Staff start -->
                <div class="block-bg-1 sectionWrapper">
                    <div class="container">
                        <div class="row">
                            <div class="cell-4 fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="grid3column uppercase cus_image">
                                    <h3>PARTY MENUS</h3>
                                    <img alt="" src="<?php echo e(url('front-theme/images/spices.jpg')); ?>">
                                    <a class="btn btn-md btn-3d btn-custom-small fx animated fadeInUp" href="<?php echo e(url('static-object')); ?>" data-animate="fadeInUp" data-animation-delay="1700" style="animation-delay: 1700ms;">
                                        Find Out More
                                    </a>
                                </div>
                            </div>
                            <div class="cell-4 fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="grid3column uppercase cus_image">
                                    <h3>GREAT VALUE LUNCH</h3>
                                    <img alt="" src="<?php echo e(url('front-theme/images/offers.jpg')); ?>">
                                    <a class="btn btn-md btn-3d btn-custom-small fx animated fadeInUp" href="<?php echo e(url('order-item#pro21')); ?>" data-animate="fadeInUp" data-animation-delay="1700" style="animation-delay: 1700ms;">
                                        View Full Menu
                                    </a>
                                </div>
                            </div>
                            <div class="cell-4 fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="grid3column uppercase cus_image">
                                    <h3>Reserve A Table</h3>
                                    <img alt="" src="<?php echo e(url('front-theme/images/table_booking.jpg')); ?>">
                                    <a class="btn btn-md btn-3d btn-custom-small fx animated fadeInUp" href="<?php echo e(url('table-booking')); ?>" data-animate="fadeInUp" data-animation-delay="1700" style="animation-delay: 1700ms;">
                                        Book Your Table
                                    </a>
                                </div>
                            </div>
                        </div>    

                    </div><!-- .container end -->
                </div><!-- .funn-staff end -->
                <!-- FUN Staff end -->

                <!-- our clients block start -->
                
                <!-- our clients block end -->

                <!-- About us and Features container start -->
                
                <!-- About us and Features container end -->

                <!-- our clients block start -->
                
                <!-- our clients block end -->


<?php $__env->stopSection(); ?>	

<?php $__env->startSection('css'); ?>
    <!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
    <link rel="stylesheet" href="<?php echo e(url('front-theme/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('front-theme/rs-plugin/css/settings.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('front-theme/css/custom.css')); ?>">
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('slider-js'); ?>
	<!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
    <!-- SLIDER REVOLUTION SCRIPTS  -->
        <script type="text/javascript" src="<?php echo e(url('front-theme/rs-plugin/js/jquery.themepunch.tools.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(url('front-theme/rs-plugin/js/jquery.themepunch.revolution.min.js')); ?>"></script>

        <!-- slick slider carousel -->
        <script type="text/javascript" src="<?php echo e(url('front-theme/js/slick.min.js')); ?>"></script>
        <!-- Animate numbers increment -->
        <script type="text/javascript" src="<?php echo e(url('front-theme/js/jquery.animateNumber.min.js')); ?>"></script>
        
        <!-- Animate numbers increment -->
        <script type="text/javascript" src="<?php echo e(url('front-theme/js/jquery.easypiechart.min.js')); ?>"></script>


        <script type="text/javascript" src="<?php echo e(url('front-theme/js/jquery.animateNumber.min.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(url('front-theme/js/jquery.easypiechart.min.js')); ?>"></script>

        <script src="<?php echo e(url('front-theme/js/sweetalert.min.js')); ?>"></script>
        <?php echo $__env->make('frontend.extra.cart-js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>