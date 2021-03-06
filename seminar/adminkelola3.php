<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Peserta Seminar (Admin)</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"   rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <div class="container">
            <a class="navbar-brand" href="landingpage3.html">
                <img src="img/PicsArt_01-27-04.37.07.png" width="40" height="40" class="d-inline-block align-top" alt="">
                SISTA
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link active" href="landingpage3.html">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="adminkelola.html">Jadwal</a>
                    <a class="nav-item nav-link" href="adminkelola2.html">Daftar Seminar</a>
                    <a class="nav-item nav-link" href="adminkelola3.html">Daftar Peserta Seminar</a>
                    <a class="nav-item nav-link" href="">About</a>
                    <a class="nav-item nav-link text-danger" href="landingpage.html">Logout</a>
                </div>
            </div>
        </div>  
</nav>
    <div class="row">
		<div class="col-md-12">
			<p class="mt-3 ml-2"><b>
			   Mahasiswa Seminar : Diego Armando (0102002) - Teknik Informatika <br>
			   Judul <span class="ml-2">:</span> Rancang Bangun Aplikasi Seminar Tugas Akhir Berbasis Web Menggunakan MVC Framework <br>
			   Waktu : Senin, 4 Januari 2021, 10.00
			</b></p>
		</div>
	</div>
    <div class="row">
        <div class="col-md-12"><br>
            <h4 style="text-align: center;">
                DAFTAR PESERTA SEMINAR
            </h4>
            <table class="table table-bordered border-dark table table-light table-striped">
            <thead>
              <tr>
                <th scope="col">Nomor</th>
                <th scope="col">NIM</th>
                <th scope="col">Mahasiswa/i</th>
                <th scope="col">Prodi</th>
                <th scope="col">Waktu</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>0102041</td>
                <td>Wati</td>
                <td>Sistem Informasi</td>
                <td>S1</td>
                <td>Diterima</td>
                <td>
                    <a href="">Edit | <span style="color: red;">Delete</span></a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>0102032</td>
                <td>Woman</td>
                <td>Teknik Informatika</td>
                <td>S1</td>
                <td>Diterima</td>
                <td>
                    <a href="">Edit | <span style="color: red;">Delete</span></a>
                </td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>0102031</td>
                <td>Ali</td>
                <td>Teknik Informatika</td>
                <td>S1</td>
                <td>Ditolak</td>
                <td>
                    <a href="">Edit | <span style="color: red;">Delete</span></a>
                </td>
              </tr>
              
            </tbody>
          </table>
        </div>
       </div>   
    
       <section class="fixed-bottom" id="footer" style="background-color: royalblue;">
        <div class="container-fluid">
          <div class="row ml-5 mt-3">
            <div class="col-md-6">
              <h3 class="text-light">
              SISTA
              </h3>
              <P class="text-light">
                SISTA dibuat oleh kelompok 1 - Sistem Informasi 01 untuk membantu dalam melihat informasi mengenai jadwal tugas akhir, dan juga sebagai tugas projek
              </P>
              <p class="text-light"> &copy;SISTA - SI01 2020 </p>
            </div>
            <div class="col-md-6">
              <h3 class="text-light">
              TIM
              </h3>
              <p class="text-light">
                AHMAD BAHARUDIN FATULLOH <br>
                ANDREAN BAGUS SAPUTRA <br>
                AUFA HELMI <br>
                ILHAM PUTRA PERDANA <br>
                SUSAN SAFIRA <br>
              </p>
            </div>
          </div>
        </div>
    </section>   

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