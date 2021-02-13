

<?php $__env->startSection('title'); ?>
    About Tekblock |
     <?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>

    <section class="page__title__wrapper text-center default-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page__title__inner">
                        <!-- Start Enable Title -->
                        <h2 class="page-title">  About Us</h2>
                        <!-- End Enable Title -->
                        <!-- Start Enable Sub Title -->
                        <div class="page-sub-title"></div>
                        <!-- End Enable Sub Title -->

                        <div class="breadcrumbs_wrap breadcrumb-bottom">

                            <nav class="learn-press-breadcrumb">	<ul>
                                    <li><a href="http://demo.wphash.com/educat">Home</a></li><li><i class="zmdi zmdi-chevron-right"></i></li><li>About Us</li>	</ul>
                            </nav>						</div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="kc-elm kc-css-619533 kc_row about-page-area section-padding">
        <div class="kc-row-container  kc-container"><div class="kc-wrap-columns">
                <div class="kc-elm kc-css-775298 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">
                        <div class="kc-elm kc-css-712675 ">
                            <div class="section-title-wrapper text-center">
                                <div class="section-title">
                                    <h3>Who we are</h3>
                                    <p><?php echo e($primaryInfo->company_name); ?></p>
                                </div>
                            </div>
                        </div>
                        <style>
                            .kc-elm.kc-css-712675 .section-title-wrapper::after {
                                background: rgba(0, 0, 0, 0) url("<?php echo e(asset('/public/website/')); ?>/wp-content/uploads/2018/05/cap-dark.jpg") no-repeat scroll 0 0;
                            }
                        </style>
                        <div class="kc-elm kc-css-881924 kc_row kc_row_inner">
                            <div class="kc-elm kc-css-503308 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                                <div class="kc_wrapper kc-col-inner-container">
                                    <div class="kc-elm kc-css-54416 kc_text_block about-text-container">
                                        <p><?php echo $primaryInfo->why_us?></p>
                                        <hr>
                                        <?php echo $primaryInfo->description?>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/ustutor1/public_html/northtech/resources/views/website/about-us/about-us.blade.php ENDPATH**/ ?>