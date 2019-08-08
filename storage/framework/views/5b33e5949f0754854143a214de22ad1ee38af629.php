<?php echo $__env->make('layout._includes.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->yieldContent('conteudo'); ?>

<?php echo $__env->make('layout._includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php /**PATH C:\Users\gvini\Desktop\Dev_Web_PHP\resources\views/layout/site.blade.php ENDPATH**/ ?>