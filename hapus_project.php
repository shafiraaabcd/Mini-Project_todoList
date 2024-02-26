<?php 
    if($_GET['id']){
        include "koneksi.php";
        $qry_hapus=mysqli_query($conn,"delete from project_list where id='".$_GET['id']."'");
        if($qry_hapus){
            echo "<script>alert('Sukses hapus project');location.href='project_list.php';</script>";
        } else {
            echo "<script>alert('Gagal hapus project');location.href='project_list.php';</script>";
        }
    }
?>
