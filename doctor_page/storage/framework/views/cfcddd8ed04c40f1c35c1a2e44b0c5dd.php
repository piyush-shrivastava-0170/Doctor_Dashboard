<?php $__env->startSection('title','dashboard'); ?>


<?php $__env->startSection('content'); ?>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#">Appointment</a>
    
  </div>
  
  <!-- Use any element to open the sidenav -->
  <span onclick="openNav()">open</span>
  
  <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
  <div id="main">
    <table class="table">
        <tr>
            <th>S.no</th>
            <th>Namr</th>
            <th>Email</th>
            <th>Timing</th>
        </tr>
        <?php
        $appoint =DB::table('appointment')->get();
        $i = 0;
        ?>
        <?php $__currentLoopData = $appoint; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                        <td><?php echo e(++$i); ?></td>
                        <td><?php echo e(($apt->name)); ?></td>
                        <td><?php echo e(($apt->email)); ?></td>
                        <td><?php echo e(($apt->timing)); ?></td>
                        
            </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </table>
  </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('Doctor.Layout.doc.Header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\doctor_page\resources\views/Doctor/Layout/doc/dashboard.blade.php ENDPATH**/ ?>