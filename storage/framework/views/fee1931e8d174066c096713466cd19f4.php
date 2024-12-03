<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH E:\Laragon\laragon\www\laravel11\vendor\filament\forms\src\/../resources/views/components/group.blade.php ENDPATH**/ ?>