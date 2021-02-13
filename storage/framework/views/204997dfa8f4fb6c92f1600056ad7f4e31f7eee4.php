<?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($message->sender === $sender): ?>
<div class="outgoing_msg">
    <div class="sent_msg">
        <p><?php echo e($message->message); ?></p>
        <span class="time_date"><?php echo e(date('h:i A | m/d/Y', strtotime($message->created_at))); ?></span>
    </div>
</div>
<?php else: ?>
<div class="incoming_msg">
    <div class="incoming_msg_img"> <img src="<?php echo e(asset('uploads/'.$receiverUser->profile_image)); ?>" alt=""> </div>
    <div class="received_msg">
        <div class="received_withd_msg">
            <p><?php echo e($message->message); ?></p>
            <span
                class="time_date"><?php echo e($receiverUser->first_name . ' ' . $receiverUser->last_name . ' ' . date('h:i A | m/d/Y', strtotime($message->created_at))); ?></span>
        </div>
    </div>
</div>
<?php endif; ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>