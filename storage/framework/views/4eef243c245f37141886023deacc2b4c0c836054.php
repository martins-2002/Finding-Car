<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Land</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo e(asset('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('vendor/simple-line-icons/css/simple-line-icons.css')); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="<?php echo e(asset('css/landing-page.min.css')); ?>" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo e(asset('css/template/index.css')); ?>">

</head>

<body>

     <!-- Navigation -->
    <nav class="navbar navbar-light bg-light static-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img id="logo" src="img/LOGO FINAL.png"></a>
          <a class="btn btn-danger" href=" <?php echo e(route('login')); ?> ">Cadastre-se</a>
        </div>
    </nav>


    <?php echo $__env->yieldContent('conteudo'); ?>



    <!-- Bootstrap core JavaScript -->
   <script src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
   <script src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Finding-Car\resources\views/layouts/estruturaPaginaHomeCliente.blade.php ENDPATH**/ ?>