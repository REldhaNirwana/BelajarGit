<?php

require 'function.php';
if(isset($_GET['id_sewa'])) {
    $id_sewa =htmlspecialchars($_GET["id_sewa"]);
    $sql ="delete from review where id_sewa = '$id_sewa'";
    $hasil = mysqli_query($koneksi,$sql);

    if($hasil){
        echo "<script>
                alert('Data Laporan berhasil dihapus!');
                document.location.href ='admin_index.php?url=admin_ganti_rugi';
             </script>";
    }else{
        echo "<script>Laporan gagal ditambahkan!');
            </script>";
    }

}


