<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <?php
    include "koneksi.php";
    $qry_get_todo=mysqli_query($conn,"select * from todo where id = '".$_GET['id']."'");
    $dt_todo=mysqli_fetch_array($qry_get_todo);
    ?>
    <br>
    <h3 style="text-align:center">Edit TO DO</h3>
    <form action="proses_edit_todo.php" method="post">
        <input type="hidden" name="id" value= "<?=$dt_todo['id']?>">
        <br> 
        <ul>
      <div class="row mb-2">
        <label name="project_name" class="col-sm-3 col-form-label">Project Name</label>
        <div class="col-sm-6">
          <input type="text" name="project_name" value= "<?=$dt_todo['project_name']?>" class="form-control">
        </div>
      </div>

      <div class="row mb-2">
        <label name="task" class="col-sm-3 col-form-label">Task</label>
        <div class="col-sm-6">
          <textarea name="task" cols="30" rows="5" value="" class="form-control" value= "<?=$dt_todo['task']?>"></textarea>
        </div>
      </div>
      
      <div class="row mb-2">
        <label name="deadline" class="col-sm-3 col-form-label">Deadline</label>
            <div class="col-sm-2">
            <input type="date" id="tanggal" name="deadline" class="form-control" value= "<?=$dt_todo['deadline']?>">
            </div>
            -
            <div class="col-sm-2">
            <input type="date" name="deadline" value= "<?=$dt_todo['deadline']?>" class="form-control" >
            </div>
        </div>

      </div>
      
      <div class="row mb-2"></div>
      <div class="col-sm-5">
      <input type="checkbox" id="reminder" onclick="addReminder()"> Reminder
        </div>
        </div>

      <div class="row mb-2 display-none" id="showReminder">
        <label name="reminder" class="col-sm-3 col-form-label">Reminder</label>
        <div class="col-sm-3">
          <input type="datetime-local" name="reminder" value= "<?=$dt_todo['reminder']?>" class="form-control">
        </div>
      </div>

      <br>
      <input type="submit" name="simpan" value="Edit TO DO" class="btn btn-primary">
</ul>
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <script>
        function addReminder(){
            var remind = document.getElementById('reminder');
            var showRemind = document.getElementById('showReminder');
            if(remind.checked == true){
                showRemind.classList.remove('display-none');
            } else {
                showRemind.classList.add('display-none');
            }
        }

        // Dapatkan elemen input tanggal
        var inputTanggal = document.getElementById('tanggal');

        // Buat objek tanggal sekarang
        var tanggalSekarang = new Date();

        // Format tanggal ke format YYYY-MM-DD
        var tahun = tanggalSekarang.getFullYear();
        var bulan = String(tanggalSekarang.getMonth() + 1).padStart(2, '0');
        var tanggal = String(tanggalSekarang.getDate()).padStart(2, '0');
        var tanggalFormat = tahun + '-' + bulan + '-' + tanggal;

        // Atur nilai input tanggal
        inputTanggal.value = tanggalFormat;
    </script>
</body>
</html>
