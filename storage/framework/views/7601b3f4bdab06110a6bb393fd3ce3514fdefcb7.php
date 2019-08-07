<?php echo $__env->make('layout._includes.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('conteudo'); ?>

<?php echo $__env->make('layout._includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH /Users/lais-ep_4/Desktop/pho_laravel/resources/views/layout/site.blade.php ENDPATH**/ ?>