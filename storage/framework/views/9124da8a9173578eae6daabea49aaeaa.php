<nav class="flex items-center justify-between py-4 px-10 bg-blue-50 border-b border-blue-200 shadow-sm">
    <!-- Left Section: Logo and Navigation Links -->
    <div id="nav-left" class="flex items-center space-x-10">
        <!-- Logo -->
        <a href="<?php echo e(route('home')); ?>" class="flex items-center">
            <?php if (isset($component)) { $__componentOriginaldaff26d4e64b9d6b339909684d09d478 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldaff26d4e64b9d6b339909684d09d478 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.application-mark','data' => ['class' => 'h-10 w-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('application-mark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-10 w-auto']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldaff26d4e64b9d6b339909684d09d478)): ?>
<?php $attributes = $__attributesOriginaldaff26d4e64b9d6b339909684d09d478; ?>
<?php unset($__attributesOriginaldaff26d4e64b9d6b339909684d09d478); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldaff26d4e64b9d6b339909684d09d478)): ?>
<?php $component = $__componentOriginaldaff26d4e64b9d6b339909684d09d478; ?>
<?php unset($__componentOriginaldaff26d4e64b9d6b339909684d09d478); ?>
<?php endif; ?>
        </a>
        <!-- Navigation Links -->
        <div class="top-menu hidden md:flex space-x-8">
            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => ''.e(route('home')).'','active' => request()->routeIs('home'),'class' => 'text-blue-700 hover:text-blue-500 transition-colors duration-200 font-semibold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('home')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('home')),'class' => 'text-blue-700 hover:text-blue-500 transition-colors duration-200 font-semibold']); ?>
                <?php echo e(__('Home')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalc295f12dca9d42f28a259237a5724830 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc295f12dca9d42f28a259237a5724830 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav-link','data' => ['href' => ''.e(route('posts.index')).'','active' => request()->routeIs('posts.index'),'class' => 'text-blue-700 hover:text-blue-500 transition-colors duration-200 font-semibold']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('posts.index')).'','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->routeIs('posts.index')),'class' => 'text-blue-700 hover:text-blue-500 transition-colors duration-200 font-semibold']); ?>
                <?php echo e(__('Blog')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $attributes = $__attributesOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__attributesOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc295f12dca9d42f28a259237a5724830)): ?>
<?php $component = $__componentOriginalc295f12dca9d42f28a259237a5724830; ?>
<?php unset($__componentOriginalc295f12dca9d42f28a259237a5724830); ?>
<?php endif; ?>
        </div>
    </div>

    <!-- Right Section: User Authentication Links -->
    <div id="nav-right" class="flex items-center space-x-6">
        <!--[if BLOCK]><![endif]--><?php if(auth()->guard()->check()): ?>
            <?php echo $__env->make('layouts.partials.header-right-auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="text-blue-700 hover:text-blue-500 transition-colors duration-200 font-semibold">Login</a>
            <a href="<?php echo e(route('register')); ?>" class="text-blue-700 hover:text-blue-500 transition-colors duration-200 font-semibold">Register</a>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    </div>
</nav>
<?php /**PATH E:\Laragon\laragon\www\laravel11\resources\views/navigation-menu.blade.php ENDPATH**/ ?>