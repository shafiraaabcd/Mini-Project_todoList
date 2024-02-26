<!DOCTYPE html>
<html>

<body>
<?php
 include "header.php"
 ?>
 <br>
 <br>
 <form class="d-flex">
      <input class="form-control col-sm-2 ml-5" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success col-sm-1" type="submit">Search</button>
    </form>
    <br>
    <table class="table table-secondary table-striped">
        <thead align="center">
            <tr>
                <th>Project</th>
                <th>Project Leader</th>
                <th>Priority</th>
                <th>Status</th>
                <th>Start</th>
                <th>Plan End</th>
                <th>Actual End</th>
                <th>Complete</th>
                <th></th>
            </tr>
        </thead>
        <tbody align="center">
            <?php 
            include "koneksi.php";
            $qry_project=mysqli_query($conn,"select * from project_list ");
            $no=0;
            while($data_project=mysqli_fetch_array($qry_project)){
            $no++;?>
            <tr>              
                <td><?=$data_project['project']?></td>
                <td><?=$data_project['pl']?></td>
                <td><?=$data_project['priority']?></td> 
                <td><?=$data_project['status']?></td>
                <td><?=$data_project['start']?></td>
                <td><?=$data_project['plan_end']?></td>
                <td><?=$data_project['actual_end']?></td>
                <td><?=$data_project['complete']?> %</td>
                   <td><a href="edit_project.php?id=<?=$data_project['id']?>" class="btn btn-success">Edit</a> |
                    <a href="hapus_project.php?id=<?=$data_project['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
 
            </tr>
            
            <?php 
            }   
            ?>
        </tbody>
        </table>
            <ul>
            <a href ="tambah_project.php" button class="btn btn-primary me-md-2" type="button">Tambah Project</button>
     
    </body>
    </html>
