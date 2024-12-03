<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->title)]); ?>
    <article class="w-full col-span-4 py-5 mx-auto mt-10 md:col-span-3" style="max-width:700px">
        <img class="w-full my-2 rounded-lg" src="<?php echo e($post->getThumbnailUrl()); ?>" alt="thumbnail">
        <h1 class="text-4xl font-bold text-left text-gray-800">
            <?php echo e($post->title); ?>

        </h1>
        <div class="flex items-center justify-between mt-2">
            <div class="flex items-center py-5">
                <?php if (isset($component)) { $__componentOriginal1508d5adb994731e02675338837a0ace = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1508d5adb994731e02675338837a0ace = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.posts.author','data' => ['author' => $post->author,'size' => 'md']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('posts.author'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->author),'size' => 'md']); ?>
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
                <span class="text-sm text-gray-500">| <?php echo e($post->getReadingTime()); ?> min read</span>
            </div>
            <div class="flex items-center">
                <span class="mr-2 text-gray-500"><?php echo e($post->published_at->diffForHumans()); ?></span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3"
                    stroke="currentColor" class="w-5 h-5 text-gray-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

        <div
            class="flex items-center justify-between px-2 py-4 my-6 text-sm border-t border-b border-gray-100 article-actions-bar">
            <div class="flex items-center">
                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('like-button', ['post' => $post]);

$__html = app('livewire')->mount($__name, $__params, 'likebutton-' . $post->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            </div>
            <div>
                <div class="flex items-center">
                </div>
            </div>
        </div>

        <div class="py-3 text-lg prose text-justify text-gray-800 article-content">
            <?php echo $post->body; ?>

        </div>

        <div class="flex items-center mt-10 space-x-4">
            <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginal5571ae9030ac11cbd44686094e5e3cdc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5571ae9030ac11cbd44686094e5e3cdc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.posts.category-badge','data' => ['category' => $category]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('posts.category-badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['category' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($category)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5571ae9030ac11cbd44686094e5e3cdc)): ?>
<?php $attributes = $__attributesOriginal5571ae9030ac11cbd44686094e5e3cdc; ?>
<?php unset($__attributesOriginal5571ae9030ac11cbd44686094e5e3cdc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5571ae9030ac11cbd44686094e5e3cdc)): ?>
<?php $component = $__componentOriginal5571ae9030ac11cbd44686094e5e3cdc; ?>
<?php unset($__componentOriginal5571ae9030ac11cbd44686094e5e3cdc); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('post-comments', ['post' => $post]);

$__html = app('livewire')->mount($__name, $__params, 'comments' . $post->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </article>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH E:\Laragon\laragon\www\laravel11\resources\views/posts/show.blade.php ENDPATH**/ ?>