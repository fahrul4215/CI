<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Data Pegawai</title>

		<!-- JSGrid -->
		<link rel="stylesheet" href="<?= base_url()?>assets/jsgrid/jsgrid.min.css">
		<link rel="stylesheet" href="<?= base_url()?>assets/jsgrid/jsgrid-theme.min.css">
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
					<a class="navbar-brand" href="<?php echo base_url().'index.php/pegawai/'; ?>">Pegawai</a>
				</div>
			</div>
		</nav>

		<div class="container">
			<h1>Daftar Pegawai</h1>
			<?php echo anchor('pegawai/create', '
				<button type="button" class="btn btn-success">Tambah</button>
			'); ?>
			<?php $no=1; ?>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">Nama</th>
						<th class="text-center">Alamat</th>
						<th class="text-center">Tanggal Lahir</th>
						<!-- <th class="text-center">Foto</th> -->
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($pegawai_list as $key): ?>
						<tr>
							<td class="text-center"><?php echo $no ?></td>
							<td><?php echo $key->namaPegawai ?></td>
							<td><?php echo $key->alamatPegawai ?></td>
							<!-- <td><img src="" alt=""></td> -->
							<td class="text-center"><?php echo date('d-m-Y', strtotime($key->tanggalLahir)) ?></td>
							<td class="text-center">
								<?php echo anchor('jabatan/index/'.$key->idPegawai, '
									<button type="button" class="btn btn-success">Liat Jabatan</button>
								'); ?>
								<?php echo anchor('pegawai/update/'.$key->idPegawai, '
									<button type="button" class="btn btn-primary">Edit</button>
								'); ?>
								<?php echo anchor('pegawai/delete/'.$key->idPegawai, '
									<button type="button" class="btn btn-danger" onclick="return confirm(\'Anda yakin ingin menghapus data '.$key->namaPegawai.'?\');">Hapus</button>
								'); ?>
							</td>
						</tr>
						<?php $no++ ?>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>

		<!-- <div id="jsGrid"></div> -->

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="<?= base_url() ?>assets/jsgrid/jsgrid.min.js"></script>
		<script src="<?= base_url() ?>assets/jsgrid/ciJsGrid.js"></script>

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>