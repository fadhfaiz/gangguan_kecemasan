<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Registrasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Akun</a></li>
              <li class="breadcrumb-item active">Registrasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-7 mx-auto">
          	<div class="card">
          		<div class="card-body">
          			<form action="<?= base_url('app/register') ?>" method="post">
          				<div class="form-group">
          					<label>Nama Lengkap</label>
          					<input type="text" name="nama_lengkap" class="form-control" required>
          				</div>
          				<div class="form-group">
          					<label>Username</label>
          					<input type="text" name="username" class="form-control" required>
          				</div>
          				<div class="form-group">
          					<label>Password</label>
          					<input type="password" name="password" class="form-control" required>
          				</div>
          				<div class="form-group">
          					<button type="submit" class="btn btn-success btn-block">REGISTRASI</button>
          				</div>
          			</form>
          			<div class="text-center">
	          			<a href="<?= base_url('app/login') ?>">Sudah Punya Akun ?</a>
          			</div>
          		</div>
          	</div>
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->