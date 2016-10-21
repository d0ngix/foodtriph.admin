<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FoodTri.PH | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <?= $this->Html->css('/vendor/AdminLTE-2.3.6/bootstrap/css/bootstrap.min')?>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <?= $this->Html->css('/vendor/AdminLTE-2.3.6/dist/css/AdminLTE.min.css')?>
  <!-- iCheck -->
  <?= $this->Html->css('/vendor/AdminLTE-2.3.6/plugins/iCheck/square/blue.css')?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="http://www.foodtri.ph" target="_blank"><b>FoodTri.</b>PH</a>
  </div>
  
  <?= $this->fetch('content') ?>

</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/jQuery/jquery-2.2.3.min.js') ?>
<!-- Bootstrap 3.3.6 -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/bootstrap/js/bootstrap.min.js') ?>
<!-- iCheck -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/iCheck/icheck.min') ?>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
