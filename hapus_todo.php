<?php 
    if($_GET['id']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from todo where id='".$_GET['id']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus TODO');location.href='todo.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus TODO');location.href='todo.php';</script>";
        }
    }
?>
