<div class="pt-10 mt-10 border-t border-gray-100 comments-box">
    <h2 class="mb-5 text-2xl font-semibold text-gray-900">Discussions</h2>
    <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
        <textarea wire:model="comment"
            class="w-full p-4 text-sm text-gray-700 border-gray-200 rounded-lg bg-gray-50 focus:outline-none placeholder:text-gray-400"
            cols="30" rows="7"></textarea>
        <button wire:click="postComment"
            class="inline-flex items-center justify-center h-10 px-4 mt-3 font-medium tracking-wide text-white transition duration-200 bg-gray-900 rounded-lg hover:bg-gray-800 focus:shadow-outline focus:outline-none">
            Post Comment
        </button>
    <?php else: ?>
        <a wire:navigate class="py-1 text-yellow-500 underline" href="<?php echo e(route('login')); ?>"> Login to Post Comments</a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <div class="px-3 py-2 mt-5 user-comments">
        <!--[if BLOCK]><![endif]--><?php $__empty_1 = true; $__currentLoopData = $this->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="comment [&:not(:last-child)]:border-b border-gray-100 py-5">
                <div class="flex items-center mb-4 text-sm user-meta">
                    <?php if (isset($component)) { $__componentOriginal1508d5adb994731e02675338837a0ace = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1508d5adb994731e02675338837a0ace = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.posts.author','data' => ['author' => $comment->user,'size' => 'sm']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('posts.author'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($comment->user),'size' => 'sm']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1508d5adb994731e02675338837a0ace)): ?>
<?php $attributes = $__attributesOriginal1508d5adb994731e02675338837a0ace; ?>
<?php unset($__attributesOriginal1508d5adb994731e02675338837a0ace); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1508d5adb994731e02675338837a0ace)): ?>
<?php $component = $__componentOriginal1508d5adb994731e02675338837a0ace; ?>
<?php unset($__componentOriginal1508d5adb994731e02675338837a0ace); ?>
<?php endif; ?>
                    <span class="text-gray-500">. <?php echo e($comment->created_at->diffForHumans()); ?></span>
                </div>
                <div class="text-sm text-justify text-gray-700">
                    <?php echo e($comment->comment); ?>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="text-center text-gray-500">
                <span> No Comments Posted</span>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <div class="my-2">
        <?php echo e($this->comments->links()); ?>

    </div>
</div>
<?php /**PATH E:\Laragon\laragon\www\laravel11\resources\views/livewire/post-comments.blade.php ENDPATH**/ ?>