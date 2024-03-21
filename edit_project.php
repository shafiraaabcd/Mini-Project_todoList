<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body style="background-color:#F9EFE4">
    <?php
    include "koneksi.php";
    $qry_get_project=mysqli_query($conn,"select * from project_list where id = '".$_GET['id']."'");
    $dt_project=mysqli_fetch_array($qry_get_project);
    ?>
    <br>
    <h3 style="text-align:center">Edit Project</h3>
    <form action="proses_edit_project.php" method="post">
        <input type="hidden" name="id" value= "<?=$dt_project['id']?>">
        <br> 
        <ul>
      <div class="row mb-2">
        <label name="project" class="col-sm-3 col-form-label">Project Name</label>
        <div class="col-sm-6">
          <input type="text" name="project" value= "<?=$dt_project['project']?>" class="form-control">
        </div>
      </div>

      <div class="row mb-2">
        <label name="pl" class="col-sm-3 col-form-label">Project Leader</label>
        <div class="col-sm-6">
          <input type="text" name="pl" value= "<?=$dt_project['pl']?>" class="form-control">
        </div>
      </div>
      
      <fieldset class="row mb-2">
        <legend class="col-form-label col-sm-3">Priority</legend>
             <div class="col-sm-6">
                 <select name="priority" class="form-control">
                   <option value="High">High</option>
                   <option value="Medium">Medium</option>
                   <option value="Low">Low</option>
                  </select>
               </div>
      </fieldset>

<fieldset class="row mb-2">
    <legend class="col-form-label col-sm-3">Status</legend>
    <div class="col-sm-6">
        <select name="status" class="form-control">
            <option value="Done">Done</option>
            <option value="Working on it">Working on it</option>
            <option value="Stuck">Stuck</option>
        </select>
    </div>
</fieldset>


      <div class="row mb-2">
        <label name="start" class="col-sm-3 col-form-label">Start</label>
        <div class="col-sm-3">
          <input type="date" name="start" value= "<?=$dt_project['start']?>" class="form-control">
        </div>
      </div>

      <div class="row mb-2">
        <label name="plan_end" class="col-sm-3 col-form-label">Plan End</label>
        <div class="col-sm-3">
          <input type="date" name="plan_end" value= "<?=$dt_project['plan_end']?>" class="form-control">
        </div>
      </div>

      <div class="row mb-2">
        <label name="actual_end" class="col-sm-3 col-form-label">Actual End</label>
        <div class="col-sm-3">
          <input type="date" name="actual_end" value= "<?=$dt_project['actual_end']?>" class="form-control">
        </div>
      </div>

      <div class="row mb-2">
        <label name="complete" for="percentageInput" class="col-sm-3 col-form-label">Completion Percentage</label>
        <div class="col-sm-2">
          <div class="input-group">
            <input type="number" id="percentageInput" onchange="setPercentageTask(this, 50716)" value= "<?=$dt_project['complete']?>" class="form-control" fdprocessedid="0o96e5" name="complete">
            <span class="input-group-text">%</span>
          </div>
        </div>
      </div>

      <br>
      <input type="submit" name="simpan" value="Edit Project" class="btn btn-primary">
</ul>
    </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
