

<?php $__env->startSection('title'); ?>
    <?php echo e($singleEvent->title); ?> | Tekblock
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>

    <section class="page__title__wrapper text-center default-height">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page__title__inner">
                        <!-- Start Enable Title -->
                        <h2 class="page-title">  Event Details</h2>
                        <!-- End Enable Title -->
                        <!-- Start Enable Sub Title -->
                        <div class="page-sub-title"></div>
                        <!-- End Enable Sub Title -->
                        <div class="breadcrumbs_wrap breadcrumb-bottom">
                            <nav class="learn-press-breadcrumb">	<ul>
                                    <li><a href="<?php echo e(URL::to('/')); ?>">Home</a></li><li><i class="zmdi zmdi-chevron-right"></i></li><li>Event</li>	</ul>
                            </nav>						</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div id="content" class="site-content">
        <div class="event-details-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="event-details-content">
                            <?php if(Session::has('success')): ?>
                            <h5 class="text-success text-center"><i class="fa fa-check"></i> Your Application Successfully Submit</h5>
                                <?php elseif(Session::has('evenExists')): ?>
                                <h5 class="text-warning text-center"><i class="fa fa-warning"></i> Your event application already submited </h5>
                            <?php endif; ?>
                            <h5 class="text-center"><a href="javascript:void(0)" class="btn btn-danger btn-md" data-toggle="modal" data-target="#eventModal"> Apply Now </a></h5>
                            <div class="single-event-item">
                                <div class="single-event-image">
                                    <a href="<?php echo e(URL::to('/event/'.$singleEvent->url)); ?>">
                                        <?php if(!empty($singleEvent->image)): ?>
                                            <img src="<?php echo e(asset($singleEvent->image)); ?>" class="img-responsive " alt="<?php echo e($singleEvent->title); ?>"
                                                 title="<?php echo e($singleEvent->title); ?>" />
                                        <?php else: ?>
                                            <img src="<?php echo e(asset('/images/default/photo.png')); ?>" class="img-responsive " alt="<?php echo e($singleEvent->title); ?>"
                                                 title="<?php echo e($singleEvent->title); ?>" />
                                        <?php endif; ?>
                                        <span>
                                            <span>
                                                <?php echo e(date('d',strtotime($singleEvent->start_date))); ?>

                                            </span>
                                            <?php echo e(date('M',strtotime($singleEvent->start_date))); ?>

                                        </span>
                                    </a>
                                </div>
                                <div class="single-event-text">
                                    <h3><?php echo e($singleEvent->title); ?></h3>

                                    <?php if($singleEvent->end_date!=''): ?>
                                        <div class="single-item-comment-view">
                                            <span><i class="fa fa-calendar  fa-3x" aria-hidden="true"></i> <?php echo e(date('d-M-Y',strtotime($singleEvent->start_date))); ?></span> To &nbsp; &nbsp;<span>  <?php echo e(date('d-M-Y',strtotime($singleEvent->end_date))); ?> </span>
                                        </div> <br>
                                    <?php endif; ?>

                                    <div class="single-item-comment-view">
                                        <span><i class="zmdi zmdi-time"></i> <?php echo e($singleEvent->event_time); ?></span>
                                        <span><i class="zmdi zmdi-pin"></i><?php echo e($singleEvent->address); ?></span>
                                    </div>

                                    <div class="event_description">
                                        <?php echo $singleEvent->overview?>
                                    </div>
                                    <hr>
                                    <div class="event_description">
                                        <?php echo $singleEvent->description?>
                                    </div>
                                </div>
                            </div>

                            
                                
                                    
                                        
                                            
                                                
                                                
                                                
                                                
                                                    
                                                
                                    
                                
                            
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div id="secondary" class="event-sidebar sidebar-widget">
                            <div id="tag_cloud-2" class="single-sidebar-widget widget_tag_cloud">
                                <h4 class="title">All Tags</h4>
                                <div class="tagcloud">
                                    <?php if(count($eventTags)>0): ?>
                                        <?php $__currentLoopData = $eventTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(URL::to('/event/'.$singleEvent->url)); ?>" class="" style="font-size: 8pt;">
                                                <?php echo e($tag); ?>

                                            </a>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!--Event Application Modal-->
    <div class="modal" id="eventModal" style="z-index: 9999999">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="modal-title text-center"> Event Application - <?php echo e($singleEvent->title); ?><br>
                        <span style="text-align: center;font-size: 20px;">Have a question? <span class="text-primary"> Please call us to ( <?php echo e($primaryInfo->mobile_no); ?> ) </span></span>
                    </h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <?php echo Form::open(['url'=>'event-application','method'=>'POST','class'=>'']); ?>

                <div class="modal-body" style="color: #ffffff;background-color: #085eac;">

                    <h6 class="text-warning">Personal Information</h6>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="first_name">First Name <span class="required text-danger">*</span></label>
                            <?php echo e(Form::text('first_name',$value=old('first_name'),['maxlength'=>45,'class'=>'form-control','required'=>true,'placeholder'=>'Your First name'])); ?>


                            <?php if($errors->has('first_name')): ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('first_name')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="last_name">Last Name <span class="required text-danger">*</span></label>
                            <?php echo e(Form::text('last_name',$value=old('last_name'),['maxlength'=>45,'class'=>'form-control','required'=>true,'placeholder'=>'Your last name'])); ?>


                            <?php if($errors->has('last_name')): ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('last_name')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="mobile">Mobile <span class="required text-danger">*</span></label>
                            <?php echo e(Form::text('mobile',$value=old('mobile'),['maxlength'=>30,'class'=>'form-control','required'=>true,'placeholder'=>'Your mobile'])); ?>


                            <?php if($errors->has('mobile')): ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('mobile')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email <span class="required text-danger">*</span></label>
                            <?php echo e(Form::email('email',$value=old('email'),['maxlength'=>80,'class'=>'form-control','required'=>true,'placeholder'=>'Your email address'])); ?>


                            <?php if($errors->has('email')): ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('email')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <h6 class="text-warning">Academic & Work Information</h6>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="academic_qualification">Academic Qualification <span class="required text-danger">*</span></label>
                            <?php echo e(Form::text('academic_qualification',$value=old('academic_qualification'),['maxlength'=>120,'class'=>'form-control','required'=>true,'placeholder'=>'Last Academy Qualification'])); ?>


                            <?php if($errors->has('academic_qualification')): ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('academic_qualification')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <label for="work_experience">Working Experience <span class="required text-danger">*</span></label>
                            <?php echo e(Form::number('work_experience',$value=old('work_experience'),['min'=>0,'max'=>30,'step'=>'any','class'=>'form-control','required'=>true,'placeholder'=>'Years of Work Experience'])); ?>


                            <?php if($errors->has('work_experience')): ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('work_experience')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="field_of_work">Field of Work </label>
                            <?php echo e(Form::text('field_of_work',$value=old('field_of_work'),['maxlength'=>120,'class'=>'form-control','required'=>false,'placeholder'=>'What\'s your working field'])); ?>


                            <?php if($errors->has('field_of_work')): ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('field_of_work')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-6">
                            <label for="country_of_work">Country of Work </label>
                            <?php echo e(Form::text('country_of_work',$value=old('work_experience'),['maxlength'=>50,'class'=>'form-control','required'=>false,'placeholder'=>'Current working country'])); ?>


                            <?php if($errors->has('country_of_work')): ?>
                                <span class="help-block">
                                    <strong class="text-danger"><?php echo e($errors->first('country_of_work')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>


                </div>

            <!-- Modal footer -->
                <div class="modal-footer" style="display: flow-root">
                    <a href="javascript:void(0)" class="btn btn-danger pull-left" data-dismiss="modal">Close</a>
                    <input type="hidden" name="event_id" value="<?php echo e($singleEvent->id); ?>">
                    <button class="btn btn-success pull-right" type="submit">Submit</button>
                </div>
                <?php echo Form::close(); ?>


            </div>
        </div>
    </div>
    <!-- The Modal -->

<?php $__env->stopSection(); ?>
<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<?php $__env->startSection('script'); ?>
<?php if(count($errors)>0): ?>
    <script>
        $(window).load(function () {
            $('#eventModal').attr('style', 'display:block','z-index:9999992');
            $('#eventModal').addClass('modal show');
        })
    </script>
<?php endif; ?>
    <?php $__env->stopSection(); ?>


<?php echo $__env->make('website.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home3/ustutor1/public_html/northtech/resources/views/website/event/eventsDetails.blade.php ENDPATH**/ ?>