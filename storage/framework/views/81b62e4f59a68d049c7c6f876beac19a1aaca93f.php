<?php echo $__env->make('layouts.myheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="wrapper">
    <!--main content start-->
    <section>
      <?php echo $__env->yieldContent('content'); ?>
    </section>
    <!--main content end-->
  </div>
  </section>
  <!-- container section start -->
  <?php echo $__env->make('layouts.mfooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>