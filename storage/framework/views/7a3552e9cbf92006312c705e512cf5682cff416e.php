<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>
Client Login: Zoff Sites
</title>

<!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo e(asset('bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(url('bower_components/font-awesome/css/font-awesome.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo e(url('bower_components/Ionicons/css/ionicons.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(url('adminlte/css/AdminLTE.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(url('adminlte/plugins/iCheck/square/blue.css')); ?>">
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Zoff</b> Sites</a>
    <!-- <img src="<?php echo e(url('img/astu-logo.jpeg')); ?>" class="img-responsive"> -->
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    
    <p class="login-box-msg">Sign in to start your session</p>


    <form method="POST" action="<?php echo e(route('admin.login.submit')); ?>">
         <?php echo csrf_field(); ?>
      <div class="form-group has-feedback">
        <input type="text" name="email" class="form-control form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Username" value="<?php echo e(old('email')); ?>" required autofocus>
        <?php if($errors->has('email')): ?>
            <span class="invalid-feedback">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="Password" required>
        <?php if($errors->has('password')): ?>
            <span class="invalid-feedback">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        <?php endif; ?>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="<?php echo e(url('bower_components/jquery/dist/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo e(url('adminlte/plugins/iCheck/icheck.min.js')); ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>