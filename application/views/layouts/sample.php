<!DOCTYPE html>
<html>

<head>
  <!-- head -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= isset($title) ? getenv('APP_NAME', 'Codeigniter') .  " - " .  $title : getenv('APP_NAME', 'Codeigniter')  ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= asset('bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= asset('bower_components/font-awesome/css/font-awesome.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= asset('bower_components/Ionicons/css/ionicons.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= asset('dist/css/AdminLTE.min.css'); ?>">
  <link rel="stylesheet" href="<?= asset('dist/css/skins/skin-blue.min.css'); ?>">
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
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue sidebar-mini fixed">
  <div class="wrapper">
    <!-- Main Header -->
    <?php require_once("sample/_header.php"); ?>
    <!-- End of Header -->

    <!-- Main Sidebar -->
    <?php require_once("sample/_sidebar.php"); ?>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <?php $this->load->view($contents); ?>
    <!-- End of Content -->

    <!-- Main Footer -->
    <?php require_once("sample/_footer.php"); ?>
    <!-- End of Footer -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="<?= asset('bower_components/jquery/dist/jquery.min.js'); ?>"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= asset('bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>
  <!-- SlimScroll -->
  <script src="<?= asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
  <!-- PACE -->
  <script src="<?= asset('bower_components/PACE/pace.min.js'); ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?= asset('dist/js/adminlte.min.js'); ?>"></script>
</body>

</html>