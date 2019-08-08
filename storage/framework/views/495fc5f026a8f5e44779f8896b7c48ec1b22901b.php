<!DOCTYPE html>
<html>
<head>
    <title><?php echo $__env->yieldContent('titulo'); ?></title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">Lista de Musicas</a>
      <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/">Home</a></li>
        <li><a href="<?php echo e(route('admin.cursos')); ?>">Musicas</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile">
  <li><a href="/">Home</a></li>
  <li><a href="<?php echo e(route('admin.cursos')); ?>">Musicas</a></li>
  </ul>
          
</header>

<?php /**PATH C:\Users\gvini\Desktop\Dev_Web_PHP\resources\views/layout/_includes/top.blade.php ENDPATH**/ ?>