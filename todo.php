<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="assets/css/todo.css" />
</head>
<body>
<?php
 include "header.php"
 ?>
 <br>
 <br>
 <div class="boddy">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <form class="d-flex" role="search">
            <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-info btn-sm" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg></button>
          </form>
  <div>
  <a href="tambah_todo.php" class="add-task-button" type="button">
    Add Task
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30">
      <path d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M21,16h-5v5 c0,0.553-0.448,1-1,1s-1-0.447-1-1v-5H9c-0.552,0-1-0.447-1-1s0.448-1,1-1h5V9c0-0.553,0.448-1,1-1s1,0.447,1,1v5h5 c0.552,0,1,0.447,1,1S21.552,16,21,16z"></path>
    </svg>
  </a>
</div>
        </div>
      </nav>
  </div>
  <div class="kotak">
    <br>
    <table  style=" border: 1px solid #EDEDED;" class="table table-light">
        <thead align="center">
            <tr style="background-color:#D9D9D9;">
                <th style="border: 1px solid #EDEDED;">Project Name</th>
                <th style="border: 1px solid #EDEDED;">Task</th>
                <th style="border: 1px solid #EDEDED;">Deadline</th>
                <th style="border: 1px solid #EDEDED;">Reminder</th>
                <th style="border: 1px solid #EDEDED;">Progress</th>
                <th style="border: 1px solid #EDEDED;"></th>
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
                <td style="width:50px; border: 1px solid #EDEDED;"><?=$data_project['project_name']?></td>
                <td style="width:100px; border: 1px solid #EDEDED;"><?=$data_project['task']?></td>
                <td style="width:50px; border: 1px solid #EDEDED;"><?=$data_project['deadline']?></td> 
                <td style="width:50px; border: 1px solid #EDEDED;"><?=$data_project['reminder']?></td>
                <td style="width:50px; border: 1px solid #EDEDED; ">
                    <select>
                        <option value="Done">Done</option>
                        <option value="On Progress">On Progress</option>
                        <option value="Hold">Hold</option>
                    </select>
                </td>
                
                   <td style="width:50px"><a href="edit_todo.php?id=<?=$data_project['id']?>" class="btn btn-success">
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                           <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                            </a> 
                    <a href="hapus_todo.php?id=<?=$data_project['id']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                         </svg></a></td>
 
            </tr>
            
            <?php 
            }   
            ?>
        </tbody>
        </table>

        <div class="dt-layout-row">
<div class="dt-layout-cell dt-start ">
<div class="dt-info" aria-live="polite" id="example_info" role="status">Showing 1 to 1 of 2 entries
</div>
</div>
          </div>
    
          <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

</div>

    </body>
    </html>
