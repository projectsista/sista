<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pendaftaran Seminar</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 style="text-align: center;">
				Sistem Informasi Seminar Tugas Akhir - SISTA
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 d-flex justify-content-end">
			<nav>
				<ol class="breadcrumb" style="background-color: transparent;">
					<li class="breadcrumb-item">
						<a href="landingpage2.html">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="detailjadwal.html">Jadwal</a>
					</li>
					<li class="breadcrumb-item">
                        <a href="pendaftaranseminar.html">Detail Jadwal</a>
					</li>
					<li class="breadcrumb-item active">
						Detail Peserta
					</li>
				</ol>
			</nav>
		</div>
	</div>
    <div class="row">
		<div class="col-md-12">
			<p><b>
			   Mahasiswa Seminar : Diego Armando (0102002) <br>
			   Judul <span class="ml-2">:</span> Rancang Bangun Aplikasi Seminar Tugas Akhir Berbasis Web Menggunakan MVC Framework <br>
			   Waktu : Senin, 4 Januari 2021, 10.00
			</b></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
            <fieldset class="border p-2" style="border: 1px solid black;">
				<legend  class="w-auto col-md-3">Form Peserta Seminar</legend>	
			  <form role="form">
				<div class="form-group"> 	
					<label for="nim">
						Nama
					</label> 	
					<input type="text" placeholder="Masukan nama anda" class="form-control" id="nama" />
					<label for="nama">
						Nim
					</label>
					<input type="text" placeholder="Masukan nim anda" class="form-control" id="nim" />
				</div>
				<div class="form-group">
                    <label for="exampleFormControlSelect1">Prodi</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Sistem Informasi</option>
                      <option>Teknik Informatika</option>
                    </select>
				</div>
				<div class="form-group">
					<label for="tanggal">Tanggal Seminar</label><br>
					<input type="date" id="tanggal">
				</div>
				<div class="form-inline">
					<label for="" class="mr-4">Program</label>
					<input type="radio" name="">
					<label for="" class="ml-2 mr-2">Reguler Pagi</label>
					<input type="radio" name="">
					<label for="" class="ml-2">Reguler Sore</label>
				</div><br>   
				<button type="submit" class="btn btn-primary">
				  Submit
				</button>
			  </form>
            </fieldset> 
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

<style>
    body{
      background-color: #e2e8f0;
    }
  </style>