<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Perpustakaan Sejarah UPI | <?php echo $__env->yieldContent('title'); ?></title>

        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets')); ?>/css/bootstrap.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <script type="text/javascript" src="<?php echo e(asset('assets')); ?>/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo e(asset('assets')); ?>/js/bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>

    <body>
        <div class="container" style="background:rgb(245, 201, 5)">
        <div class="alert alert-info text-center" style="background:#fdfcfc">
            <h4 style="margin-bottom: 0px"><b>Perpustakaan Sejarah UPI</b></h4>
        </div>
            <?php echo $__env->make('menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('konten', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </body>
</html>
<?php /**PATH D:\DZIKRI\SEMESTER 6 - (Feb-Jun 2023) = 20 SKS\(MSIB) Studi Independen - PT Arkatama Multi Solusindo\Tugas Akhir\Portofolio\Perpustakaan-Sejarah-UPI\resources\views/index.blade.php ENDPATH**/ ?>