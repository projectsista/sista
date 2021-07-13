<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Peserta Seminar</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

<?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>    

<?php echo form_open_multipart('seminar/save'); ?>
    <form role="form"  method="" action="">
    <div class="card-body">
    <fieldset class="border p-2" style="border: 1px solid black;">
        <legend  class="w-auto col-md-3">Form Pendaftaran Seminar</legend>	
        <div class="row">
        <div class="col-md-6">
            <div class="form-group ">
                <label for="">Semester</label>
                <input type="text" class="form-control" name="semester" placeholder="Semester" required>
            </div>
            
            <div class="form-group">
                <label for="">Tanggal</label>
                <input type="date" id="datepicker" class="form-control" name="tanggal" placeholder="Tanggal Seminar">
            </div>

            <div class="form-group">
                <label for="">Jam</label>
                <input type="time" class="form-control" name="jam">
            </div>
            
            <div class="form-group">
                <label for="">Kategori Seminar id</label>
                <select id="id_kosentrasi" class="form-control" name="kategori_seminar_id">
                    <option>1 - Seminar Proposal</option>
                    <option>2 - Seminar Hasil</option>
                    <option>3 - Seminar Skripsi</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">NIM</label>
                <input type="text" class="form-control" name="nim" placeholder="Masukan NIM Anda">
            </div>
            
            <div class="form-group">
                <label for="">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Masukan Nama Anda"> 
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Judul</label>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
                <label for="thn_selesai">Pembimbing</label>
                <select id="seminar" class="form-control" name="pembimbing_id">
                    <option>1 - 084020201</option>
                    <option>2 - 084040200</option>
                    <option>3 - 084151108</option>
                    <option>4 - 084201001</option>
                    <option>5 - 084310911</option>
                    <option>6 - 084290607</option>
                    <option>7 - 084230787</option>
                    <option>8 - 084260989</option>
                    <option>9 - 0860696</option>
                    <option>10 - 084010195</option>
                </select>
            </div><br>
            </div>

            <div class="col-md-6">
            <div class="form-group">
                <label for="Penguji1">Penguji 1</label>
                <input type="text" class="form-control" name="penguji1_id">
            </div>

            <div class="form-group">
                <label for="Penguji2">Penguji 2</label>
                <input type="text"class="form-control" name="Penguji2_id">
            </div>

            <div class="form-group">
                <label for="Penguji2">Nilai Pembimbing</label>
                <input type="text"class="form-control" name="nilai_pembimbing">
            </div>

            <div class="form-group">
                <label for="Penguji2">Nilai Penguji 1</label>
                <input type="text"class="form-control" name="nilai_Penguji1">
            </div>

            <div class="form-group">
                <label for="Penguji2">Nilai Penguji 2</label>
                <input type="text"class="form-control" name="nilai_Penguji2">
            </div>

            <div class="form-group">
                <label for="Penguji2">Lokasi</label>
                <input type="text"class="form-control" name="lokasi">
            </div>

            <div class="form-group">
                <label for="Penguji2">Nilai Akhir</label>
                <input type="text"class="form-control" name="nilai_akhir">
            </div>

            <div class="form-group">
                <label for="Penguji2">Foto</label>
                <input type="file"class="form-control" name="foto">
            </div>


            </div>
            <!-- /.card-body -->
            <div class="">
                <button type="submit" name="submit" class="btn btn-primary float-left">Daftar</button>
            </div>
          
    </fieldset>
    </form>
<?php echo form_close() ?>     
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/bootstrap.min.js"></script>

    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>

<style>
    body{
      background-color: #e2e8f0;
    }
  </style>