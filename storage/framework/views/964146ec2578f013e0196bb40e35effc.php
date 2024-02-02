<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <div class="row gx-5">
        <div class="col-8 bg-light">
            <?php $__empty_1 = true; $__currentLoopData = $all_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="card mb-4">
                    <?php echo $__env->make('users.posts.contents.title', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php echo $__env->make('users.posts.contents.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                
                <div class="text-center">
                    <h2>Share Photos</h2>
                    <p class="text-muted">When you share photos, they'll appear in your profile.</p>
                    <a href="<?php echo e(route('post.create')); ?>" class="text-decoration-none">Share your first photo</a>
                </div>
            <?php endif; ?>
        </div>
        <div class="col-4 bg-secondary">
            OVERVIEW & Suggestions area
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/kylenurville/Downloads/insta-app-pm/resources/views/users/home.blade.php ENDPATH**/ ?>