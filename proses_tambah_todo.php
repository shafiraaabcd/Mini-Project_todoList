<?php
if($_POST){
    $id=$_POST['id'];
    $project_name=$_POST['project_name'];
    $task=$_POST['task'];
    $deadline=$_POST['deadline'];
    $reminder=$_POST['reminder'];
    $tanggal = date('Y-m-d H:i:s');

    if(empty($project_name)){
        echo "<script>alert('Project Name tidak boleh kosong');location.href='tambah_todo.php';</script>";
    } else if(empty($task)){
        echo "<script>alert('Task tidak boleh kosong');location.href='tambah_todo.php';</script>";
    } else if(empty($deadline)){
        echo "<script>alert('Deadline tidak boleh kosong');location.href='tambah_todo.php';</script>";
    }
    else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into todo (project_name, task, deadline, reminder, created_at) value ('".$project_name."','".$task."','".$deadline."','".$reminder."','".$tanggal."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan TODO');location.href='todo.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan TODO');location.href='todo.php';</script>";
        }
    }
}
?>
