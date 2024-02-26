<?php
if($_POST){
    $id=$_POST['id'];
    $project=$_POST['project'];
    $pl=$_POST['pl'];
    $priority=$_POST['priority'];
    $status=$_POST['status'];
    $start=$_POST['start'];
    $plan=$_POST['plan_end'];
    $actual=$_POST['actual_end'];
    $complete=$_POST['complete'];
    $tanggal = date('Y-m-d H:i:s');

    if(empty($project)){
        echo "<script>alert('Project Name tidak boleh kosong');location.href='tambah_project.php';</script>";
    } else if(empty($pl)){
        echo "<script>alert('Nama PL tidak boleh kosong');location.href='tambah_project.php';</script>";
    } else if(empty($priority)){
        echo "<script>alert('Priority tidak boleh kosong');location.href='tambah_project.php';</script>";
    } else if(empty($status)){
        echo "<script>alert('Status tidak boleh kosong');location.href='tambah_project.php';</script>";
    } else if(empty($start)){
        echo "<script>alert('Start tidak boleh kosong');location.href='tambah_project.php';</script>";
    } else if(empty($plan)){
        echo "<script>alert('Plan End tidak boleh kosong');location.href='tambah_project.php';</script>";
    } else if(empty($actual)){
        echo "<script>alert('Actual End tidak boleh kosong');location.href='tambah_project.php';</script>";
    } else if(empty($complete)){
        echo "<script>alert('Completion Percentage tidak boleh kosong');location.href='tambah_project.php';</script>";
    } 
    else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into project_list (project, pl, priority, status, start, plan_end, actual_end, complete, created_at) value ('".$project."','".$pl."','".$priority."','".$status."','".$start."','".$plan."','".$actual."','".$complete."','".$tanggal."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan Project');location.href='project_list.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan Project');location.href='project_list.php';</script>";
        }
    }
}
?>
