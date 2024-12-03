<div>
    <h3 class="mb-3 text-lg font-semibold text-gray-900">Recommended Topics</h3>
    <div class="flex flex-wrap justify-start gap-2 topics">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
</div>
<?php /**PATH E:\Laragon\laragon\www\laravel11\resources\views/posts/partials/categories-box.blade.php ENDPATH**/ ?>