<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" size="50px">Traveller</div>
                  <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                      <form class="" action="<?php echo e(route('student')); ?>" method="post" >
                          <?php echo e(csrf_field()); ?>

                          <div class="content">
               

                <div class="links">
                <table aligned=""><tr>
                <td><a href="" ><img src="<?php echo e(asset('/image/logo.jpeg')); ?>" alt="Places"  width=300px><p>Places</p></a></td>
                <td ><a href=""><img src="<?php echo e(asset('/image/l1.png')); ?>" alt="Places" width=300px ><p>Destination</p></a></td>
                <td><a href=""><img src="<?php echo e(asset('/image/l2.png')); ?>" alt="Places" width=300px>Food</a></td>
                <td><a href=""><img src="<?php echo e(asset('/image/l3.png')); ?>" alt="Places"  width=300x>Blog</a></td>
                <td><a href="">Contact Us</a></td>
                <td></td>
                </tr></table>
                </div>
            </div>
                  
                  
                   
                   </form>                  
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\Assignment\Assignment\blog\resources\views/home.blade.php ENDPATH**/ ?>