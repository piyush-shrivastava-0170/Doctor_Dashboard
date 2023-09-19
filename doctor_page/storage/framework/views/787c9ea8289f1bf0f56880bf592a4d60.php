<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <link rel="stylesheet" href="<?php echo e(asset('side.css')); ?>">
    
    <title>Doctor's | <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('Doctor.Layout.doc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
</body>
</html><?php /**PATH C:\xampp\htdocs\doctor_page\resources\views/Doctor/Layout/doc/Header.blade.php ENDPATH**/ ?>