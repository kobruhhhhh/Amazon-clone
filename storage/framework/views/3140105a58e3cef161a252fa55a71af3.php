<html>

<body>
    <h1>Hi <?php echo e($user->first_name); ?>,</h1>
    <h3>Your order has been shipped and will arrive soon</h3>
    <p>Stripe confirmation id: <?php echo e($order->payment_intent); ?></p>

    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="display: flex; padding: 3px">
            <img width="100" src="<?php echo e($item->image); ?>" alt="">
            <div style="margin-left: 10px">
                <a href="http://127.0.0.1:8000/product/<?php echo e($item->id); ?>" style="padding: 5px"><?php echo e($item->title); ?></a>
                <div style="padding: 5px">$<?php echo e($item->price); ?></div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <p>Total price: <?php echo e($order->total_decimal); ?></p>

    <p>Thank you - Test Clone</p>
</body>

</html><?php /**PATH C:\Users\krlal\OneDrive\Documents\test\amazon-clone\resources\views/shipped.blade.php ENDPATH**/ ?>