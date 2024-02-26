
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
        echo "<script>alert('Project Name tidak boleh kosong');location.href='edit_project.php';</script>";
    } else if(empty($pl)){
        echo "<script>alert('Project Leader tidak boleh kosong');location.href='edit_project.php';</script>";
    } else if(empty($priority)){
        echo "<script>alert('Priority tidak boleh kosong');location.href='edit_project.php';</script>";
    } else if(empty($status)){
        echo "<script>alert('Status tidak boleh kosong');location.href='edit_project.php';</script>";
    } else if(empty($start)){
        echo "<script>alert('Start tidak boleh kosong');location.href='edit_project.php';</script>";
    } else if(empty($plan)){
        echo "<script>alert('Plan End tidak boleh kosong');location.href='edit_project.php';</script>";
    } else if(empty($actual)){
        echo "<script>alert('Actual End tidak boleh kosong');location.href='edit_project.php';</script>";
    } else if(empty($complete)){
        echo "<script>alert('Completion Percentage tidak boleh kosong');location.href='edit_project.php';</script>";
    }
    else {
        include "koneksi.php";
        // if(empty($pl)){
        //     $update=mysqli_query($conn,"update project_list set project='".$project."',pl='".$pl."', priority='".$priority."', status='".$status."', start='".$start."', plan_end='".$plan."', actual_end='".$actual."', complete='".$complete."', updated_at='".$tanggal."' where id = '".$id."'") or die(mysqli_error($conn));
        //     if($update){
        //         echo "<script>alert('Sukses update project');location.href='project_list.php';</script>";
        //     } else {
        //         echo "<script>alert('Gagal update project');location.href='edit_project.php?id=".$id."';</script>";
        //     }
        // } else {
            $update=mysqli_query($conn,"update project_list set project='".$project."',pl='".$pl."', priority='".$priority."', status='".$status."', start='".$start."', plan_end='".$plan."', actual_end='".$actual."', complete='".$complete."', updated_at='".$tanggal."' where id = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update project');location.href='project_list.php';</script>";
            } else {
                echo "<script>alert('Gagal update project');location.href='edit_project.php?id=".$id."';</script>";
            }
        }
    }
?>
