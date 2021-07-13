  
<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('include/head'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <?php $this->load->view('include/sidebar');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
              <?php $this->load->view('include/navbar');?>

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Seminar TA</h1>

                <div class="table-responsive">
                    <table class="table tabel-striped">
                        <thead class="thead-primary">
                            <tr>
                                <th>semester</th>
                                <th>tanggal</th>
                                <th>jam</th>
                                <th>kategori seminar id</th>
                                <th>nim</th>
                                <th>nama mahasiswa</th>
                                <th>judul<th>
                                <th>pembimbing id<th>
                                <th>penguji1 id<th>
                                <th>penguji2 id<th>
                                <th>nilai pembimbing<th>
                                <th>nilai penguji1<th>
                                <th>nilai penguji2<th>
                                <th>lokasi<th>
                                <th>nilai akhir<th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($seminar->result() as $seminar){ 
                                    echo '
                                    <tr>
                                        <td>'.$seminar->semester.'</td>
                                        <td>'.$seminar->tanggal.'</td>
                                        <td>'.$seminar->jam.'</td>
                                        <td>'.$seminar->kategori_seminar_id.'</td>
                                        <td>'.$seminar->nim.'</td>
                                        <td>'.$seminar->nama_mahasiswa.'</td>
                                        <td>'.$seminar->judul.'</td>
                                        <td>'.$seminar->pembimbing_id.'</td>
                                        <td>'.$seminar->penguji1_id.'</td>
                                        <td>'.$seminar->penguji2_id.'</td>
                                        <td>'.$seminar->nilai_pembimbing.'</td>
                                        <td>'.$seminar->nilai_penguji1.'</td>
                                        <td>'.$seminar->nilai_penguji2.'</td>
                                        <td>'.$seminar->lokasi.'</td>
                                        <td>'.$seminar->nilai_akhir.'</td>
                                        <td>'.$seminar->foto.'</td>
                                        <td>
                                        <a href="'.base_url().'index.php/seminar/view/'.$seminar->id.'"
                                        class="btn btn-info btn-xs" class="fa fa-view">View</a>
                                        <a href="'.base_url().'index.php/seminar/edit/'.$seminar->id.'"
                                        class="btn btn-secondary btn-xs" class="fa fa-edit">Edit</a>
                                        <a href="'.base_url().'index.php/seminar/delete/'.$seminar->id.'"
                                        class="btn btn-danger btn-xs" class="fa fa-trash-o">Delete</a>
                                        </td>
                                    </tr>';
                                }
                            ?>
                        </tbody>
                    </table>
                    <a href="<?= base_url()?>index.php/seminar/add" class="btn btn-primary">Tambah Seminar</a>
                </div>
                
                

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('include/script'); ?>

</body>

</html>