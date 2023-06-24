<!DOCTYPE html>
<html lang="en">
	<head>	
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Data seluruh wilayah indonesia dari mulai provinsi, kabupaten, kecamatan dan desa. By : http://kang-cahya.com" />
		<meta name="author" content="Cahya Dyazin" />
		<title>Wilayah Indonesia</title>
		<link rel="icon" type="image/png" href="<?php echo $path; ?>/favicon.png">
		<script src="<?php echo $path; ?>/jquery.min.js"></script>
		<!-- css untuk select2 -->
	    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
	    <!-- jika menggunakan bootstrap4 gunakan css ini  -->
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
	    <!-- cdn bootstrap4 -->
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	</head>
<body>
	<div class="container">	
		<div class="col-md-8">
			<h1>Data Seluruh wilayah di indonesia</h1>
			<hr>
			<?php foreach($prov as $p);
			foreach($kab as $k);
			foreach($kec as $kc);
			foreach($des as $d);
			?>
			<table class="table table-striped">
				<thead>
					<th>No</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>Provinsi</th>
					<th>Kabupaten/Kota</th>
					<th>Kecamatan</th>
					<th>Desa</th>
					<th>Teks</th>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Mutawally</td>
						<td>Jl. Mangga 2</td>
						<td><?=$p->nama?></td>
						<td><?=$k->nama?></td>
						<td><?=$kc->nama?></td>
						<td><?=$d->nama?></td>
						<td><?=$teks?></td>
					</tr>
				</tbody>
			</table>
			<a href="<?=base_url()?>wilayah" class="btn btn-danger">Back</a>
			<hr>

			<footer><?=date('Y');?> | Codeigniter 3 | By, <a href="http://mutawally.com" rel="dofollow">Mutawally</a></footer>
		</div>
	</div>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		
</body>
</html>