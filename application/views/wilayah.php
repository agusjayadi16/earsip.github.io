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
		<div class="col-md-4">
			<h1>Data Seluruh wilayah di indonesia</h1>
			<hr>
			<form action="<?=base_url()?>wilayah/coba" method="post">
				<label>Provinsi</label>
				<select name="prov" class="form-control mb-2" id="provinsi">
					<option value="">- Pilih Provinsi -</option>
					<?php foreach($provinsi as $prov){
					echo '<option value="'.$prov->id.'">'.$prov->nama.'</option>';
					} ?>
				</select>
		
				<label>Kabupaten</label>
				<select name="kab" class="form-control mb-2" id="kabupaten">
					<option value=''>- Pilih Kabupaten -</option>
				</select>
		
				<label>Kecamatan</label>
				<select name="kec" class="form-control mb-2" id="kecamatan">
					<option value="">- Pilih Kecamatan -</option>
				</select>
		
				<label>Desa</label>
				<select name="des" class="form-control mb-2" id="desa">
					<option value="">- Pilih Desa -</option>
				</select>
				<input type="submit" name="submit" value="Simpan" class="btn btn-primary mt-2">
				<a href="" class="btn btn-danger mt-2">Clear</a>
			</form>
			<hr>

			<footer><?=date('Y');?> | Codeigniter 3 | By, <a href="http://mutawally.com" rel="dofollow">Mutawally</a></footer>
		</div>
	</div>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
		<script>
        	$(document).ready(function(){
            	$("#provinsi").change(function (){
                	var url = "<?php echo site_url('wilayah/add_ajax_kab');?>/"+$(this).val();
                	$('#kabupaten').load(url);
                	return false;
            	})
			
				$("#kabupaten").change(function (){
                	var url = "<?php echo site_url('wilayah/add_ajax_kec');?>/"+$(this).val();
                	$('#kecamatan').load(url);
                	return false;
            	})
			
				$("#kecamatan").change(function (){
                	var url = "<?php echo site_url('wilayah/add_ajax_des');?>/"+$(this).val();
                	$('#desa').load(url);
                	return false;
            	})
        	});
    	</script>
        <script>
            $(document).ready(function () {
                $("#provinsi").select2({
                    theme: 'bootstrap4',
                    placeholder: "- Pilih Provinsi -"
                });
    
                $("#kabupaten").select2({
                    theme: 'bootstrap4',
                    placeholder: "- Pilih Kabupaten -"
                });
                $("#kecamatan").select2({
                    theme: 'bootstrap4',
                    placeholder: "- Pilih Kecamatan -"
                });
                $("#desa").select2({
                    theme: 'bootstrap4',
                    placeholder: "- Pilih Desa -"
                });
            });
        </script>
</body>
</html>