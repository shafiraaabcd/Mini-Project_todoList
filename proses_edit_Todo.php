
<?php
if($_POST){
    $id=$_POST['id'];
    $project_name=$_POST['project_name'];
    $task=$_POST['task'];
    $deadline=$_POST['deadline'];
    $reminder=$_POST['reminder'];
    $tanggal = date('Y-m-d H:i:s');

    if(empty($project_name)){
        echo "<script>alert('Project Name tidak boleh kosong');location.href='edit_todo.php';</script>";
    } else if(empty($task)){
        echo "<script>alert('Task tidak boleh kosong');location.href='edit_todo.php';</script>";
    } else if(empty($deadline)){
        echo "<script>alert('Deadline tidak boleh kosong');location.href='edit_todo.php';</script>";
    } 
    else {
        include "koneksi.php";
        // if(empty($task)){
        //     $update=mysqli_query($conn,"update todo set project_name='".$project_name."', task='".$task."', deadline='".$deadline."', reminder='".$reminder."', updated_at='".$tanggal."' where id = '".$id."'") or die(mysqli_error($conn));
        //     if($update){
        //         echo "<script>alert('Sukses update TO DO');location.href='todo.php';</script>";
        //     } else {
        //         echo "<script>alert('Gagal update TO DO');location.href='edit_todo.php?id=".$id."';</script>";
        //     }
        // } else {
            $update=mysqli_query($conn,"update todo set project_name='".$project_name."',task='".$task."', deadline='".$deadline."', reminder='".$reminder."', updated_at='".$tanggal."' where id = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update TO DO');location.href='todo.php';</script>";
            } else {
                echo "<script>alert('Gagal update TO DO');location.href='edit_todo.php?id=".$id."';</script>";
            }
        }
    }

?>
