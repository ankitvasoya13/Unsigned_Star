

<?php $__env->startSection('content'); ?>
<!--inner Title Start -->
<div class="indx_title_main_wrapper">
	<div class="title_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="indx_title_left_wrapper ms_cover">
					<h2><?php echo e($eventDetails->event_name); ?></h2>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?php echo e(url('/events')); ?>">Events</a></li>
						<li class="breadcrumb-item"><?php echo e($eventDetails->event_name); ?></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- inner Title End -->
<!-- prs es about wrapper Start -->
<div class="prs_es_about_main_section_wrapper ms_cover">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="event_single_text_wrapper">
					<h2>About the Event</h2>
					<?php if (!empty($eventDetails->venue)) { ?>
					<br/><b>Venue: <?php echo e($eventDetails->venue); ?></b><br/>
				<?php } ?>

						<b>Start Date: <?php echo e(date('m/d/Y H:i', strtotime($eventDetails->start_datetime))); ?></b><br/>
						<b>End Date: <?php echo e(date('m/d/Y H:i', strtotime($eventDetails->end_datetime))); ?></b><br/><br/>

					<?php echo html_entity_decode($eventDetails->description); ?>

					
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
				<div class="event_single_slider ">
					 <img src="<?php echo e(asset('/uploads/'.$eventDetails->featured_image)); ?>" alt="blog_img" class="img-responsive w-100">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- prs es about wrapper End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>