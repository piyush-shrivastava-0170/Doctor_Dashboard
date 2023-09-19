<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Doctor's | <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('Doctor.Auth.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\doctor_page\resources\views/Doctor/Layout/Auth/Doctor.blade.php ENDPATH**/ ?>