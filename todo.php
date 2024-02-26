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
                <th>Project Name</th>
                <th>Task</th>
                <th>Deadline</th>
                <th>Reminder</th>
                <th>Progress</th>
                <th></th>
            </tr>
        </thead>
        <tbody align="center">
            <?php 
            include "koneksi.php";
            $qry_project=mysqli_query($conn,"select * from todo");
            $no=0;
            while($data_project=mysqli_fetch_array($qry_project)){
            $no++;?>
            <tr>              
                <td style="width:100px"><?=$data_project['project_name']?></td>
                <td style="width:150px"><?=$data_project['task']?></td>
                <td style="width:50px"><?=$data_project['deadline']?></td> 
                <td style="width:50px"><?=$data_project['reminder']?></td>
                <td style="width:50px">
                    <select>
                        <option></option>
                        <option value="Done">Done</option>
                        <option value="On Progress">On Progress</option>
                        <option value="Hold">Hold</option>
                    </select>
            </td>
                   <td style="width:50px"><a href="edit_todo.php?id=<?=$data_project['id']?>" class="btn btn-success">Edit</a> |
                    <a href="hapus_todo.php?id=<?=$data_project['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>
 
            </tr>
            
            <?php 
            }   
            ?>
        </tbody>
        </table>
            <ul>
            <a href ="tambah_todo.php" button class="btn btn-primary me-md-2" type="button">Tambah TO DO</button>
     
    </body>
    </html>
