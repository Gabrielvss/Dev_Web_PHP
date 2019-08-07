<?php $__env->startSection('titulo','Cursos'); ?>

<?php $__env->startSection('conteudo'); ?>

<div class="container">
    <h3 class="center">Editando Musicas</h3>
    <br>
    <div class="row">
        <form action="<?php echo e(route('admin.cursos.atualizar',$registro->id)); ?>" method ="POST">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="_method" value="put">
            <?php echo $__env->make('Admin.cursos._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <button class="btn deep-red">Atualizar</button>
        </form>
        
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lais-ep_4/Desktop/pho_laravel/resources/views/admin/cursos/editar.blade.php ENDPATH**/ ?>