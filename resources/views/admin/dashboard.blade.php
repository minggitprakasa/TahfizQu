<!DOCTYPE html>
<html>
  @include('layouts.admintemp.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('layouts.admintemp.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('layouts.admintemp.sidebar')
  <!-- Content Wrapper. Contains page content -->
  @include('layouts.admintemp.maincontent')
  @include('layouts.admintemp.footer')
  
  <!-- controlsidebar tadi dihapus -->
<!-- ./wrapper -->
  @include('layouts.admintemp.setting')
</body>
</html>
