<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent ">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="image/logo.png" width="40" height="40" class="d-inline-block align-top" alt="">
                    SISTA
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href=""></a>
                        <a class="nav-item nav-link active" href="<?php base_url() ?>index.php/login/login">Login</a>
                        <a class="nav-item nav-link active" href="<?php base_url() ?>index.php/login/register">Registrasi</a>
                    </div>
                </div>
            </div>  
    </nav>

    <div class="jumbotron">
      <div class="container">
          <h1 class="display-4 font-weight-bold">Sistem Informasi Seminar Tugas Akhir</h1>
          <hr class="my-4">
          <p class="lead justify">Panduan Pendaftaran Tugas Akhir adalah tahap pertama dari tiga tahap yang ada. 
              Pendaftaran Tugas Akhir dilakukan bagi mahasiswa yang mengontrak KRS dan belum mendaftarkan Judul Tugas Akhirnya ke Prodi.
              Pendaftaran ini wajib dilakukan karena jika belum dilakukan pendaftaran sidang, yudisium, dan wisuda tidak bisa dilaksanakan. 
              Secara umum prosedurnya adalah pendaftaran login via SISTA (http://sista.ac.id), datang ke Prodi untuk menyerahkan dokumen persyaratan, 
              dan pencetakan form bimbingan dengan login via SISTA. Dengan melaksanakan prosedur ini, 
              anda akan mendapatkan SK Pembimbing Tugas Akhir/Skripsi dan dapat diproses dalam pelaksanaan Sidang Sarjana/Diploma.
              Secara umum prosedur Pendaftaran Tugas Akhir ini ditempuh sebagai berikut: (1) Pendaftaran Tugas Akhir/Skripsi via SISTA, 
              (2) Penyerahan persyaratan pendaftaran TA ke Prodi, dan (3) Pencetakan form TA-02 (form bimbingan) via SISTA.</p>
          
      </div>  
    </div>

   <div class="card-footer" id="footer" style="background-color: royalblue;">
      <div class="container-fluid">
        <div class="row ml-5 mt-5">
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
              ILHAN PUTRA PERDANA <br>
              SUSAN SAFIRA <br>
            </p>
          </div>
        </div>
      </div>
</div>
</div>    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<style>
  body{
    background-color: #e2e8f0;
  }

  .jumbotron{
    background-image: url(image/seminar3.jpg);
    background-size: cover:
    max-height:770px;
    text-align: center;
    margin-top: -120px
  }

  .jumbotron .display-4{
    color: white;
    margin-top: 200px;
  }

  .jumbotron p{
    color: white;
    font-size: 20px;
    text-align: justify:
  }

  #footer[
    position: relative;
  
</style>