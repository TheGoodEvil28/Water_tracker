<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['post']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['post']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<article class="[&:not(:last-child)]:border-b border-gray-100 pb-10">
    <div class="grid items-start grid-cols-12 gap-3 mt-5 article-body">
        <div class="flex items-center col-span-4 article-thumbnail">
            <a wire:navigate href="<?php echo e(route('posts.show', $post->slug)); ?>">
                <img class="mx-auto mw-100 rounded-xl" src="<?php echo e($post->getThumbnailUrl()); ?>" alt="thumbnail">
            </a>
        </div>
        <div class="col-span-8">
            <div class="flex items-center py-1 text-sm article-meta">
                <?php if (isset($component)) { $__componentOriginal1508d5adb994731e02675338837a0ace = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1508d5adb994731e02675338837a0ace = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.posts.author','data' => ['author' => $post->author,'size' => 'xs']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('posts.author'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->author),'size' => 'xs']); ?>
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
                <span class="text-xs text-gray-500">. <?php echo e($post->published_at->diffForHumans()); ?></span>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a wire:navigate href="<?php echo e(route('posts.show', $post->slug)); ?>">
                    <?php echo e($post->title); ?>

                </a>
            </h2>

            <p class="mt-2 text-base font-light text-gray-700">
                <?php echo e($post->getExcerpt()); ?>

            </p>
            <div class="flex items-center justify-between mt-6 article-actions-bar">
                <div class="flex gap-x-2">
                    <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-500"><?php echo e($post->getReadingTime()); ?> min read</span>
                    </div>
                </div>
                <div>
                    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('like-button', ['post' => $post]);

$__html = app('livewire')->mount($__name, $__params, $post->id, $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                </div>
            </div>
        </div>
    </div>
</article>
<?php /**PATH E:\Laragon\laragon\www\laravel11\resources\views/components/posts/post-item.blade.php ENDPATH**/ ?>