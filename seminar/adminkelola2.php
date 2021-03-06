<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Seminar (Admin)</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
                    </div>
                </div>
            </div>  
    </nav>
    <form role="form"  method="post" action="tambah_alumni.php">
    <div class="card-body">
        <div class="">
            <button type="submit" name="submit" class="btn btn-primary ">Tambah Seminar Baru</button>
        </div><br>
    <fieldset class="border p-2" style="border: 1px solid black;">
        <legend  class="w-auto col-md-3">Form Daftar Seminar</legend>	
        <div class="row">
        <div class="col-md-6">
            <div class="form-group ">
                <label for="exampleInputEmail1">NIM</label>
                <input type="text" class="form-control" name="npm" placeholder="NIM" required>
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama"required>
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">Prodi</label>
                <select id="id_kosentrasi" class="form-control" name="id_kosentrasi">
                    <option>Sistem Informasi</option>
                    <option>Teknik Informatika</option>
                </select>
            </div>
          
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Seminar</label>
                <input type="date" id="datepicker" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Jam Seminar</label>
                <input type="time" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Ruangan</label>
                <input type="text" class="form-control">
            </div><br>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputPassword1">Judul TA</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label for="thn_masuk">Seminar</label>
                <select id="seminar" class="form-control" name="seminar">
                    <option>Proposal</option>
                    <option>Berita</option>
                </select>
            </div>

            <div class="form-group">
                <label for="thn_selesai">Pembimbing</label>
                <select id="seminar" class="form-control" name="seminar">
                    <option>Sirojul Munir S.SI, M.KOM</option>
                    <option>Fachri Tanjung</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Penguji1">Penguji 1</label>
                <select id="Penguji" class="form-control" name="Penguji1">
                    <option>Ahmad Rio M.SI</option>
                    <option>Rusmanto</option>
                </select>
            </div>

            <div class="form-group">
                <label for="Penguji2">Penguji 2</label>
                <select id="Penguji" class="form-control" name="Penguji2">
                    <option>Amalia Rahma M.T</option>
                    <option>Ahmad Rio</option>
                </select>
            </div>

            </div>
            <!-- /.card-body -->
            <div class="">
                <button type="submit" name="submit" class="btn btn-primary float-left">Update</button>
                <button type="submit" name="submit" class="btn btn-danger float-left">Hapus</button>
            </div>
    </fieldset>
    </form>
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