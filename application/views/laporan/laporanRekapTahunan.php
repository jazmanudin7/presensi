<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" align="center">LAPORAN REKAP ABSENSI</h5>
                <form class="formValidate" id="formValidate" method="POST" action="<?php echo base_url(); ?>laporan/cetakAbsensiTahunan" target="_blank">


                    <div class="mb-3">
                        <select class="form-control select2" required id="tahun" name="tahun">
                            <option value="">~~ Pilih Tahun ~~</option>
                            <?php for ($t = 2021; $t <= $tahun; $t++) { ?>
                                <option value="<?php echo $t;  ?>"><?php echo $t; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <select class="form-control select2" id="kantor" name="kantor">
                            <option value="">~~ Semua Kantor ~~</option>
                            <?php foreach ($kantor->result() as $d) { ?>
                                <option value="<?php echo $d->kantor; ?>"><?php echo $d->kantor; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <select class="form-control select2" id="departemen" name="departemen">
                            <option value="">~~ Semua Departemen ~~</option>
                            <?php foreach ($departemen->result() as $d) { ?>
                                <option value="<?php echo $d->departemen; ?>"><?php echo $d->departemen; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <select class="form-control select2" id="group" name="group">
                            <option value="">~~ Semua Group ~~</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="submit" name="cetak" class="btn btn-primary btn-block">
                                    <i class="fa fa-print mr-2"></i>
                                    CETAK
                                </button>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" name="export" class="btn btn-success btn-block">
                                    <i class="fa fa-download mr-2"></i>
                                    <span>EXCEL</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("#departemen").change(function() {
            var departemen = $("#departemen").val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>laporan/getGroup',
                data: {
                    departemen: departemen
                },
                cache: false,
                success: function(respond) {
                    $("#group").html(respond);
                }
            });
        });

        $("#group").change(function() {
            var group = $("#group").val();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>laporan/getKantor',
                data: {
                    group: group
                },
                cache: false,
                success: function(respond) {
                    $("#kantor").html(respond);
                }
            });
        });

    });
</script>