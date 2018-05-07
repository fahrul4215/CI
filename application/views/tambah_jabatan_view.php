<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Tambah Jabatan</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default navbar-inverse" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url().'jabatan/index/'.$pegawai[0]->idPegawai; ?>">Jabatan Pegawai</a>
				</div>
			</div>
		</nav>

		<div class="row">
			<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php echo form_open_multipart('jabatan/create/'.$this->uri->segment(3)); ?>
						<legend>Tambah Jabatan Pegawai</legend>
						<?php echo validation_errors(); ?>
						<div class="form-group">
							<label>Nama Jabatan</label>
							<input type="text" name="jabatan" class="form-control" id="jabatan" placeholder="Input Jabatan">
						</div>
						<div class="form-group">
							<label>Tanggal Mulai</label>
							<input type="text" name="tglMulai" id="tglMulai" class="form-control" placeholder="dd-mm-yyyy">
						</div>
						<div class="form-group">
							<label>Tanggal Selesai</label>
							<input type="text" name="tglSelesai" id="tglSelesai" class="form-control" placeholder="dd-mm-yyyy">
						</div>

						<button type="Submit" class="btn btn-primary">Submit</button>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>