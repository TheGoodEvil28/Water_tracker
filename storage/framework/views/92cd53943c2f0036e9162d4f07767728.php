<div class="px-3 py-6 lg:px-7">
    <div class="flex items-center justify-between border-b border-gray-100">
        <div class="text-gray-600">
            <!--[if BLOCK]><![endif]--><?php if($this->activeCategory || $search): ?>
                <button class="mr-3 text-xs gray-500" wire:click="clearFilters()">X</button>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <!--[if BLOCK]><![endif]--><?php if($this->activeCategory): ?>
                <?php if (isset($component)) { $__componentOriginal2ddbc40e602c342e508ac696e52f8719 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ddbc40e602c342e508ac696e52f8719 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.badge','data' => ['wire:navigate' => true,'href' => ''.e(route('posts.index', ['category' => $this->activeCategory->slug])).'','textColor' => $this->activeCategory->text_color,'bgColor' => $this->activeCategory->bg_color]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('badge'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:navigate' => true,'href' => ''.e(route('posts.index', ['category' => $this->activeCategory->slug])).'','textColor' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->activeCategory->text_color),'bgColor' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->activeCategory->bg_color)]); ?>
                    <?php echo e($this->activeCategory->title); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $attributes = $__attributesOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__attributesOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ddbc40e602c342e508ac696e52f8719)): ?>
<?php $component = $__componentOriginal2ddbc40e602c342e508ac696e52f8719; ?>
<?php unset($__componentOriginal2ddbc40e602c342e508ac696e52f8719); ?>
<?php endif; ?>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
            <!--[if BLOCK]><![endif]--><?php if($search): ?>
                <span class="ml-2">
                    containing : <strong><?php echo e($search); ?></strong>
                </span>
            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
        </div>
        <div class="flex items-center space-x-4 font-light ">
            <button class="<?php echo e($sort === 'desc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500'); ?> py-4"
                wire:click="setSort('desc')">Latest</button>
            <button class="<?php echo e($sort === 'asc' ? 'text-gray-900 border-b border-gray-700' : 'text-gray-500'); ?> py-4 "
                wire:click="setSort('asc')">Oldest</button>
        </div>
    </div>
    <div class="py-4">
        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $this->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginalfda5f611b536f0e8a2ac40b019493a4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfda5f611b536f0e8a2ac40b019493a4b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.posts.post-item','data' => ['post' => $post]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('posts.post-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['post' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfda5f611b536f0e8a2ac40b019493a4b)): ?>
<?php $attributes = $__attributesOriginalfda5f611b536f0e8a2ac40b019493a4b; ?>
<?php unset($__attributesOriginalfda5f611b536f0e8a2ac40b019493a4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfda5f611b536f0e8a2ac40b019493a4b)): ?>
<?php $component = $__componentOriginalfda5f611b536f0e8a2ac40b019493a4b; ?>
<?php unset($__componentOriginalfda5f611b536f0e8a2ac40b019493a4b); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
    </div>

    <div class="my-3">
        <?php echo e($this->posts->onEachSide(1)->links()); ?>

    </div>
</div>
<?php /**PATH E:\Laragon\laragon\www\laravel11\resources\views/livewire/post-list.blade.php ENDPATH**/ ?>