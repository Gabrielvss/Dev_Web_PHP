<div class="input-filed">
    <input type="text" name="musica" value="<?php echo e(isset($registro->musica) ? $registro->musica : ''); ?>">
    <label>Musica</label>
</div>

<div class="input-filed">
    <input type="text" name="artista" value="<?php echo e(isset($registro->artista) ? $registro->artista : ''); ?>">
    <label>Artista/Banda</label>
</div>

<div class="input-filed">
    <input type="number" name="rank" value="<?php echo e(isset($registro->rank) ? $registro->rank : ''); ?>">
    <label>Rank</label>
</div>
<br><br>

<?php /**PATH C:\Users\gvini\Desktop\Dev_Web_PHP\resources\views/Admin/cursos/_form.blade.php ENDPATH**/ ?>