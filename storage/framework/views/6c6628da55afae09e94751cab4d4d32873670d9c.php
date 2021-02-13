<style>
    .pending {
        /* position: absolute; */
        float: right;
        /* left: 13px; */
        /* top: 9px; */
        background: #f84a3e;
        margin: 0;
        border-radius: 50%;
        width: 10px;
        height: 10px;
        line-height: 10px;
        padding-left: 5px;
        color: #ffffff;
        font-size: 12px;
        margin-top: -20px;
    }
</style>

<?php $__currentLoopData = $chatUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chatUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="chat_list <?php echo e($receiverId == $chatUser->id ? 'active_chat':''); ?>"
    onclick="changeChatUser('<?php echo e($chatUser->id); ?>')">
    <div class="chat_people">
        <div class="chat_img">
            <?php if($chatUser->profile_image): ?>
            <img src="<?php echo e(asset('uploads/' . $chatUser->profile_image)); ?>" alt="">
            <?php else: ?>
            <img src="<?php echo e(asset('uploads/tp3.png')); ?>" alt="">
            <?php endif; ?>

        </div>
        <div class="chat_ib">
            <h5><?php echo e($chatUser->first_name.' '.$chatUser->last_name); ?> <span class="chat_date"></span></h5>
            <p></p>
            <?php if($chatUser->unread && !$chatUser->is_read && $receiverId != $chatUser->id): ?>
            <span class="pending"></span>
            <?php endif; ?>
        </div>

    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>