<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Daftar Jabatan</title>

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
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><?= anchor('pegawai', 'Pegawai'); ?></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="row">
			<div class="container">
				<h1>
					Daftar Jabatan
					<br>
					<strong><?= $pegawai[0]->namaPegawai ?></strong>
				</h1>
				<?php echo anchor('jabatan/create/'.$pegawai[0]->idPegawai, '
					<button type="button" class="btn btn-success">Tambah</button>
				'); ?>
				<?php $no=1; ?>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th class="text-center">No</th>
							<th class="text-center">Jabatan</th>
							<th class="text-center">Tanggal Mulai</th>
							<th class="text-center">Tanggal Selesai</th>
							<!-- <th class="text-center">Aksi</th> -->
						</tr>
					</thead>
					<tbody>
						<?php foreach ($listJabatan as $key): ?>
							<tr>
								<td class="text-center"><?php echo $no ?></td>
								<td><?php echo $key->jabatan ?></td>
								<td class="text-center"><?php echo date('d-m-Y', strtotime($key->tglMulai)) ?></td>
								<td class="text-center"><?php echo date('d-m-Y', strtotime($key->tglSelesai)) ?></td>
								<!-- <td class="text-center">
									<?php echo anchor('jabatan/create/'.$key->idPegawai, '
										<button type="button" class="btn btn-success">Tambah Jabatan</button>
									'); ?>
									<?php echo anchor('pegawai/update/'.$key->idPegawai, '
										<button type="button" class="btn btn-primary">Edit</button>
									'); ?>
									<?php echo anchor('pegawai/delete/'.$key->idPegawai, '
										<button type="button" class="btn btn-danger" onclick="return confirm(\'Anda yakin ingin menghapus data '.$key->jabatan.'?\');">Hapus</button>
									'); ?>
								</td> -->
							</tr>
							<?php $no++ ?>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- <script type="text/javascript">
			function ConfirmDelete()
			{
			  var x = confirm("Apa anda yakin ingin menghapus data ini?");
			  if (x)
			      return true;
			  else
			    return false;
			}

		</script> -->
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>