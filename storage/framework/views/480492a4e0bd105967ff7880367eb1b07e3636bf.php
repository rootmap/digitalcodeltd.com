<?php $__env->startSection('title','Home'); ?>
<?php $__env->startSection('content'); ?>	
<?php
$objSTD=new MenuPageController();
$SliderData=$objSTD->SliderData();
?>
 
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
                                <h3 class="center block-head"><span class="main-color"><?php echo e($WelcomeContent->title); ?></span></h3>
                                <div class="cell-12">
                                    <p class="margin-bottom-0">
                                        
                                        <?php
                                            echo html_entity_decode($WelcomeContent->description)
                                        ?>
                                    </p>
                                </div>
                                
                            </div>
                            <div class="cell-3">
                                <div class="material-card-content" style="border-top-color: rgb(246, 187, 66);">

                                    

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
                                    <h3>Herbs and Spices</h3>
                                    <img alt="" src="<?php echo e(url('front-theme/images/spices.jpg')); ?>">
                                    <a class="btn btn-md btn-3d btn-white fx animated fadeInUp" href="<?php echo e(url('static-object')); ?>" data-animate="fadeInUp" data-animation-delay="1700" style="animation-delay: 1700ms;">
                                        <span><i class="fa fa-chain selectedI"></i>read more...</span>
                                    </a>
                                </div>
                            </div>
                            <div class="cell-4 fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="grid3column uppercase cus_image">
                                    <h3>Executive Set Menu & Lunch</h3>
                                    <img alt="" src="<?php echo e(url('front-theme/images/offers.jpg')); ?>">
                                    <a class="btn btn-md btn-3d btn-white fx animated fadeInUp" href="#" data-animate="fadeInUp" data-animation-delay="1700" style="animation-delay: 1700ms;">
                                        <span><i class="fa fa-chain selectedI"></i>read more...</span>
                                    </a>
                                </div>
                            </div>
                            <div class="cell-4 fx animated fadeInUp" data-animate="fadeInUp" data-animation-delay="200" style="animation-delay: 200ms;">
                                <div class="grid3column uppercase cus_image">
                                    <h3>Table Booking</h3>
                                    <img alt="" src="<?php echo e(url('front-theme/images/table_booking.jpg')); ?>">
                                    <a class="btn btn-md btn-3d btn-white fx animated fadeInUp" href="<?php echo e(url('table-booking')); ?>" data-animate="fadeInUp" data-animation-delay="1700" style="animation-delay: 1700ms;">
                                        <span><i class="fa fa-chain selectedI"></i>read more...</span>
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