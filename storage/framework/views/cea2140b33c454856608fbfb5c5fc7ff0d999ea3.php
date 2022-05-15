<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="s01">
    <form method="POST" action="search">
        <?php echo e(csrf_field()); ?>

        <fieldset style="padding-bottom:10rem;">
          <legend style="margin:auto;">Discover New Friend</legend>
          <a href="profile">
          <i class="fa fa-user fa-3x" style="margin-left:6rem; padding-top:2rem;" aria-hidden="true"></i>
          </a>
        </fieldset>
        <div class="inner-form">
          <div class="input-field first-wrap">
            <input id="search" type="text" name="search" placeholder="Search..." />
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit">Search</button>
          </div>
        </div>
        <div>
          <div class="card w-75">
      </form>
      <a href="logout" style="color:white;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item" href="#">
      <i class="fa fa-user fa-3x" style="margin-left:6rem; padding-top:2rem;" aria-hidden="true"></i>
    </a>
        <form id="logout-form" action="logout" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    </div>
  </body>
</html><?php /**PATH D:\Coding Needs\Laravel\musix\resources\views/welcome.blade.php ENDPATH**/ ?>