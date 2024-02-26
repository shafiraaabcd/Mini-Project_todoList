<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title></title>
</head>

<body>
  <br>
  <h3 style="text-align:center">Tambah Project</h3>
  <form action="proses_tambah_project.php" method="post">
    <br>
    <ul>
      <div class="row mb-2">
        <label name="project" class="col-sm-3 col-form-label">Project Name</label>
        <div class="col-sm-6">
          <input type="text" name="project" value="" class="form-control">
        </div>
      </div>

      <div class="row mb-2">
        <label name="pl" class="col-sm-3 col-form-label">Project Leader</label>
        <div class="col-sm-6">
          <input type="text" name="pl" value="" class="form-control">
        </div>
      </div>
      
      <fieldset class="row mb-2">
        <legend class="col-form-label col-sm-3">Priority</legend>
        <div class="col-sm-6">
          <select name="priority" class="form-control">
            <option></option>
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
            <option></option>
            <option value="Done">Done</option>
            <option value="Working on it">Working on it</option>
            <option value="Stuck">Stuck</option>
          </select>
        </div>
      </fieldset>

      <div class="row mb-2">
        <label name="start" class="col-sm-3 col-form-label">Start</label>
        <div class="col-sm-3">
          <input type="date" name="start" value="" class="form-control">
        </div>
      </div>

      <div class="row mb-2">
        <label name="plan_end" class="col-sm-3 col-form-label">Plan End</label>
        <div class="col-sm-3">
          <input type="date" name="plan_end" value="" class="form-control">
        </div>
      </div>

      <div class="row mb-2">
        <label name="actual_end" class="col-sm-3 col-form-label">Actual End</label>
        <div class="col-sm-3">
          <input type="date" name="actual_end" value="" class="form-control">
        </div>
      </div>

      <div class="row mb-2">
        <label name="complete" for="percentageInput" class="col-sm-3 col-form-label">Completion Percentage</label>
        <div class="col-sm-2">
          <div class="input-group">
            <input type="number" id="percentageInput" onchange="setPercentageTask(this, 50716)" value="" class="form-control" fdprocessedid="0o96e5" name="complete">
            <span class="input-group-text">%</span>
          </div>
        </div>
      </div>

      <br>
      <input type="submit" name="simpan" value="Tambah Project" class="btn btn-primary">
</ul>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
