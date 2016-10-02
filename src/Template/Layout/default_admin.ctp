<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FoodTri.PH | <?= $this->fetch('title') ?></title>
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
  
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <?= $this->Html->css('/vendor/AdminLTE-2.3.6/dist/css/skins/_all-skins.min.css')?>
  
  <!-- iCheck -->
  <?= $this->Html->css('/vendor/AdminLTE-2.3.6/plugins/iCheck/flat/blue.css')?>
  
  <!-- Morris chart -->
  <?//=$this->Html->css('/vendor/AdminLTE-2.3.6/plugins/morris/morris.css')?>  
  
  <!-- jvectormap -->
  <?= $this->Html->css('/vendor/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-1.2.2.css')?>  
  
  <!-- Date Picker -->
  <?= $this->Html->css('/vendor/AdminLTE-2.3.6/plugins/datepicker/datepicker3.css')?>  
  
  <!-- Daterange picker -->
  <?= $this->Html->css('/vendor/AdminLTE-2.3.6/plugins/daterangepicker/daterangepicker.css')?>
  
  <!-- bootstrap wysihtml5 - text editor -->
  <?= $this->Html->css('/vendor/AdminLTE-2.3.6/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
	<!-- jQuery 2.2.3 -->
	<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/jQuery/jquery-2.2.3.min.js') ?>
	
	<!-- jQuery UI 1.11.4 -->
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>  
  
</head>
<body class="hold-transition skin-blue sidebar-mini">



<div class="wrapper">

	<?= $this->element('menu_top')?>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <?= $this->element('menu_side')?>
      
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=$this->fetch('title') ?>
        <small><?=$this->fetch('sub_title') ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		<div>
        	<?= $this->fetch('content') ?>
		</div>   

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.6
    </div>
    <strong>Copyright &copy; <?=date('Y')?> <a target="_blank" href="http://foodtri.ph">FoodTri.PH</a>.</strong> All rights reserved.
    Powered by <a href="http://codeko.run" target="_blank"><strong>CodeKo.Run</strong></a>
  </footer>

  <!-- Control Sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- Bootstrap 3.3.6 -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/bootstrap/js/bootstrap.min.js') ?>

<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/morris/morris.min.js') ?>

<!-- Sparkline -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/sparkline/jquery.sparkline.min.js') ?>

<!-- jvectormap -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') ?>

<!-- jQuery Knob Chart -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/knob/jquery.knob.js') ?>

<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/daterangepicker/daterangepicker.js') ?>

<!-- datepicker -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/datepicker/bootstrap-datepicker.js') ?>

<!-- Bootstrap WYSIHTML5 -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>

<!-- Slimscroll -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/slimScroll/jquery.slimscroll.min.js') ?>

<!-- FastClick -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/fastclick/fastclick.js') ?>

<!-- AdminLTE App -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/dist/js/app.min.js') ?>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/dist/js/pages/dashboard.js') ?>

<!-- AdminLTE for demo purposes -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/dist/js/demo.js') ?>

<!-- Select2 -->
<?= $this->Html->script('/vendor/AdminLTE-2.3.6/plugins/select2/select2.full.min.js') ?>
<script type="text/javascript">
  $('select').select2();
</script>

<!-- FoodTriPH JS -->
<?= $this->Html->script('/js/foodtriph') ?>
</body>
</html>