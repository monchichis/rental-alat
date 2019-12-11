<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" type="text/css"/>
        <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>
        <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>

        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">
        <script src="<?php echo e(asset('js/myjs.js')); ?>"></script>
        
        <title><?php echo e(config('app.name')); ?></title>
        <link rel="icon" type="image/gif/png" href="assets/fishing-rod.png">
        
    </head>
    <body>
        <?php echo $__env->make('part.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('part.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH /home/kwrnya/UTS/resources/views/layouts/app.blade.php ENDPATH**/ ?>