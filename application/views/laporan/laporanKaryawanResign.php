<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title" align="center">LAPORAN KARYAWAN RESIGN</h5>
                <form class="formValidate" id="formValidate" method="POST" action="<?php echo base_url(); ?>laporan/cetakKaryawanResign" target="_blank">

                    <div class="mb-3">
                        <select class="form-control select2" required id="bulan" name="bulan">
                            <option value="">~~ Pilih Bulan ~~</option>
                            <?php for ($a = 1; $a <= 12; $a++) { ?>
                                <option value="<?php echo $a;  ?>"><?php echo $bulan[$a]; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <select class="form-control select2" required id="tahun" name="tahun">
                            <option value="">~~ Pilih Tahun ~~</option>
                            <?php for ($t = 2021; $t <= $tahun; $t++) { ?>
                                <option value="<?php echo $t;  ?>"><?php echo $t; ?></option>
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

    });
</script>