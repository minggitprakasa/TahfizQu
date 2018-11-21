<!DOCTYPE html>
<html>
@include('layouts.admintemp.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('layouts.admintemp.header')
  @include('layouts.admintemp.sidebar')
  <!-- content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">TambahGUru</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">        
        <form>
          <div class="form-group">
            <label for="Inputusername">Username</label>
            <input type="name" class="form-control" id="Inputusername" aria-describedby="emailHelp" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="InputPassword1">Password</label>
            <input type="password" class="form-control" id="InputPassword1" placeholder="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
  </div>

  @include('layouts.admintemp.footer')
  @include('layouts.admintemp.setting')
</body>
</html>
