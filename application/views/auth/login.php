<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= isset($title) ? getenv('APP_NAME', 'Codeigniter') .  " - " .  $title : getenv('APP_NAME', 'Codeigniter')  ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= asset('bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= asset('bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= asset('bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= asset('dist/css/AdminLTE.min.css'); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= asset('plugins/iCheck/square/blue.css'); ?>">
  <!-- Pace style -->
  <link rel="stylesheet" href="<?= asset('plugins/pace/pace.min.css'); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="<?= base_url() ?>"><b><?= getenv('APP_NAME'); ?></b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg"><?= lang('login_subheading'); ?></p>
      <?= form_open('auth/login'); ?>
      <?php if ($this->session->flashdata('message') !== null) : ?>
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <?= $this->session->flashdata('message'); ?>
        </div>
      <?php endif; ?>
      <div class="form-group has-feedback<?= form_error('identity') !== '' ? ' has-error' : '' ?>">
        <input type="text" class="form-control" name="identity" placeholder="<?= lang('login_identity_placeholder'); ?>" value="<?= set_value('identity'); ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?= form_error('identity', '<span class="help-block">', '</span>'); ?>
      </div>
      <div class="form-group has-feedback<?= form_error('password') !== '' ? ' has-error' : '' ?>">
        <input type="password" class="form-control" name="password" placeholder="<?= lang('login_password_placeholder'); ?>">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?= form_error('password', '<span class="help-block">', '</span>'); ?>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input name="remember" type="checkbox" value="1" id="remember"> <?= lang('login_remember_label') ?>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat"><?= lang('login_submit_btn'); ?></button>
        </div>
        <!-- /.col -->
      </div>
      <?= form_close(); ?>
      <a href="<?= base_url('forgot_password'); ?>"><?= lang('login_forgot_passowrd'); ?></a><br>

    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery 3 -->
  <script src="<?= asset('bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= asset('bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <!-- iCheck -->
  <script src="<?= asset('plugins/iCheck/icheck.min.js'); ?>"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' /* optional */
      });
    });
  </script>
</body>

</html>