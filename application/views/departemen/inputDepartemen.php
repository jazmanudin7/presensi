<form id="form" method="POST" autocomplete="off" enctype="multipart/form-data" action="<?php echo base_url(); ?>Departemen/insertDepartemen">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-body">
        <div class="card-title">Input Data Departemen / Group</div>
        <hr>
        <div class="form-group">
          <label for="input-1">Departemen / Group</label>
          <input type="text" name="departemen" id="departemen" required class="form-control" placeholder="Departemen / Group">
        </div>
        <div class="form-group">
          <label for="input-1">Jenis Input</label>
          <select name="jenis_input" id="jenis_input" class="form-control select2">
            <option value="Departemen">Departemen</option>
            <option value="Group">Group</option>
          </select>
        </div>
        <label for="input-1"></label>
        <div class="form-group">
          <button type="submit" class="btn btn-success px-5 btn-block"> Simpan</button>
        </div>
      </div>
    </div>
  </div>
</form>
<script type="text/javascript">
  $(document).ready(function() {

  });
</script>