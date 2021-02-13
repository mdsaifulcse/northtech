

<?php $__env->startSection('title'); ?>
    All Events | Tekblock
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>

    <style>
        .form-control{
            height: auto !important;
            padding: 10px !important;
            border-radius: 0px;
        }
    </style>


    <section class="page__title__wrapper text-center default-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page__title__inner">
                        <!-- Start Enable Title -->
                        <h2 class="page-title">  Events</h2>
                        <!-- End Enable Title -->
                        <!-- Start Enable Sub Title -->
                        <div class="page-sub-title"></div>
                        <!-- End Enable Sub Title -->
                        <div class="breadcrumbs_wrap breadcrumb-bottom">
                            <nav class="learn-press-breadcrumb">
                                <ul>
                                    <li><a href="<?php echo e(URL::to('/')); ?>">Home</a></li>
                                    <li><i class="zmdi zmdi-chevron-right"></i></li>
                                    <li>Events</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <div class="container" style="padding-top: 80px">
                <div class="row">
                    <div class="col-md-12">
                        <article id="post-0" class="post-0 post type-post status-publish format-standard hentry page type-page">
                            <div class="entry-content">
                                <div id="lp-archive-courses" class="lp-archive-courses">

                                    <div class="course-area section-padding course-page">

                                        <div class="learn-press-courses row">
                                            <?php if(count($events)>0): ?>
                                                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-md-4 col-lg-4 col-sm-6">
                                                        <div class="single-event-item">
                                                            <div class="single-event-image">
                                                                <a href="<?php echo e(URL::to('event/'.$event->url)); ?>">
                                                                    <?php if(!empty($event->image)): ?>
                                                                        <img src="<?php echo e(asset($event->image)); ?>" class="img-responsive " alt="<?php echo e($event->title); ?>"
                                                                             title="<?php echo e($event->title); ?>" />
                                                                    <?php else: ?>
                                                                        <img src="<?php echo e(asset('/images/default/photo.png')); ?>" class="img-responsive " alt="<?php echo e($event->title); ?>"
                                                                             title="<?php echo e($event->title); ?>" />
                                                                    <?php endif; ?>
                                                                    <span>
                                                            <span>
                                                                <?php echo e(date('d',strtotime($event->start_date))); ?>

                                                            </span>
                                                                        <?php echo e(date('M',strtotime($event->start_date))); ?>

                                                        </span>
                                                                </a>
                                                            </div>
                                                            <div class="single-event-text">
                                                                <h3><a href="<?php echo e(URL::to('event/'.$event->url)); ?>" title="<?php echo e($event->title); ?>"><?php echo e(substr($event->title,0,22)); ?></a></h3>
                                                                <div class="single-item-comment-view">
                                                                    <span><i class="zmdi zmdi-time"></i><?php echo e($event->event_time); ?></span><span><i class="zmdi zmdi-pin"></i><?php echo e($event->address); ?></span>
                                                                </div>
                                                                <p><?php echo e(substr($event->overview,0,125)); ?></p>
                                                                <a class="button-default" href="<?php echo e(URL::to('event/'.$event->url)); ?>">Learn Now</a>  </div>
                                                        </div>

                                                    </div> <!-- end col-md4-->
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>

                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div><!-- .entry-content -->
                        </article><!-- #post-## -->
                    </div>
                </div>
            </div><!-- #primary -->


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('/public/js/jquery.min.js')); ?>">  </script>
    <script>
        $('#categoryId').on('change',function () {
            var categoryId=$(this).val()
            if(categoryId.length>0){
                $('#loadSubCategory').load('<?php echo e(URL::to("/load-sub-category-data")); ?>'+'/'+categoryId)
            }else{
                $('#loadSubCategory').load('<?php echo e(URL::to("/load-sub-category-data")); ?>'+'/'+0)
            }
        })
    </script>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/ustutor1/public_html/northtech/resources/views/website/event/events.blade.php ENDPATH**/ ?>