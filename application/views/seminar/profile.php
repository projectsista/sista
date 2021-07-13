<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0-1/css/all.css">
</head>
<body>
    <div class="container">
        <div class="main-body">
        
              <!-- Breadcrumb -->
              <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="landingpage2.html">Home</a></li>
                  <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                </ol>
              </nav>
              <!-- /Breadcrumb -->
        
              <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <div class="d-flex flex-column align-items-center text-center">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png"  alt="Admin" class="rounded-circle" width="150">
                        <div class="mt-3">
                          <h4><?= $seminar->nama_mahasiswa?></h4>
                          <br>
                          <button  class="btn btn-primary" >Follow</button>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
                <div class="col-md-8">
                  <div class="card mb-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Semester</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->semester?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Tanggal</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->tanggal?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Jam</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->jam?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Kategori Seminar</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->kategori_seminar_id?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">NIM</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->jam?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">NIM</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->nim?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Nama Mahasiswa</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->nama_mahasiswa?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Judul</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->judul?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Pembimbing</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->pembimbing_id?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Penguji 1</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->penguji1_id?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Penguji 2</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->penguji2_id?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Nilai Pembimbing</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->nilai_pembimbing?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">NIlai Penguji 1</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->nilai_penguji1?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Nilai Penguji 2</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->nilai_penguji2?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Lokasi</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->lokasi?>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-sm-3">
                          <h6 class="mb-0">Nilai Akhir</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        <?= $seminar->nilai_akhir?>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <style>
            body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
        </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>