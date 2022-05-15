<head>
<link href="css/search.scss" rel="stylesheet" media="all">
<link href="css/home.css" rel="stylesheet" />
</head>
<form method="POST" action="search">
<?php echo e(csrf_field()); ?>

<div class="input-field first-wrap">
  <input id="search" type="text" name="search" placeholder="Search..." />
</div>
<div class="input-field third-wrap">
  <button class="btn-search" type="submit">Search</button>
</div>
</form>
<?php if($users): ?>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul class="card-wrapper">
<?php $__currentLoopData = $subuser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<li class="card">
    <img src='https://images.unsplash.com/photo-1611083360739-bdad6e0eb1fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwxNDU4OXwwfDF8cmFuZG9tfHx8fHx8fHw&ixlib=rb-1.2.1&q=80&w=400' alt=''>
    <h3 class="text"><a href=""><?php echo e($d['name']); ?></a></h3>
    <p style="margin-left:1rem;"><?php echo e($d['role']); ?></p>
  </li>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?><?php /**PATH D:\Coding Needs\Laravel\musix\resources\views/search.blade.php ENDPATH**/ ?>