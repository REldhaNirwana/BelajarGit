<!-- Begin Page Content -->
<?php
// Memanggil atau membutuhkan file function.php
require 'function.php';

?>
			

<div class="container-fluid">
<div class="card">
    <div class="card-body">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h4 class="m-0 font-weight-bold text-primary">Daftar Laporan</h4>
			<h6 class="m-0 font-weight text">*Silahkan hubungi kami. Data berdasarkan pesanan anda</h6>
        </div>
        <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th>No</th>
                <th>ID Sewa</th>
                <th>Review</th>
                <th>Denda</th>
                </tr>
            </thead>
            <tbody>
			
			 <!-- WHERE dissesuaikan dengan username login -->
            <?php 
            $no = 1;
           
            $tampil = mysqli_query($koneksi, "SELECT * FROM review WHERE username='$_SESSION[username]' ORDER BY id_sewa DESC");

            while($hasil = $tampil->fetch_assoc()){
            ?>
                       
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $hasil['id_sewa']; ?></td>
                    <td><?= $hasil['reviewdata']; ?></td>
					<td>Rp <?= $hasil['denda']; ?></td>
					
					
                </tr>
            <?php } ?>
            </tbody>
        </table>
        </div>
		</div>
        </div>
        </div>
        </div>
        </div>


<!-- /.container-fluid -->
