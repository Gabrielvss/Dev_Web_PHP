<?php $__env->startSection('titulo','Cursos'); ?>

<?php $__env->startSection('conteudo'); ?>

<div class="container">
    <h3 class="center">Lista de cursos</h3>
    <div class="row">
        <table>
            <thead>
                <tr>
                 <th>rank</th>
                 <th>Musica</th>
                 <th>Artista/Banda</th>
                 <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $registros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $registro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                 <td><?php echo e($registro->rank); ?></td>
                 <td><?php echo e($registro->musica); ?></td>
                 <td><?php echo e($registro->artista); ?></td>
                 <td>
                    <a class="btn deep red" href="<?php echo e(route('admin.cursos.editar', $registro->rank)); ?>">Editar</a>
                    <a class="btn orange" href="<?php echo e(route('admin.cursos.deletar', $registro->rank)); ?>">Deletar</a>
                 </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <a class="btn blue" href="<?php echo e(route('admin.cursos.adicionar')); ?>">Adcionar</a>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/lais-ep_4/Desktop/pho_laravel/resources/views/Admin/cursos/index.blade.php ENDPATH**/ ?>