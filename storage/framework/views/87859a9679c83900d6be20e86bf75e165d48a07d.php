<?php $__env->startSection('titulo','Cursos'); ?>

<?php $__env->startSection('conteudo'); ?>

<div class="container">
    <h3 class="center">Adicionar Musicas</h3>
    <br>
    <div class="row">
        <form action="<?php echo e(route('admin.cursos.salvar')); ?>" method ="POST">
            <?php echo e(csrf_field()); ?>

            <?php echo $__env->make('Admin.cursos._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <button class="btn deep-red">Salvar</button>
        </form>
        
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gvini\Desktop\Dev_Web_PHP\resources\views/Admin/cursos/adicionar.blade.php ENDPATH**/ ?>