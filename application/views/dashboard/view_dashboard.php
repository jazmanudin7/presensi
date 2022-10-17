<?php
$jmlhkaryawan       = $this->db->query("SELECT * FROM karyawan")->num_rows();
$jmlhkaryawanlk     = $this->db->query("SELECT * FROM karyawan WHERE jk = 'Laki-Laki'")->num_rows();
$jmlhkaryawanpr     = $this->db->query("SELECT * FROM karyawan WHERE jk = 'Perempuan'")->num_rows();
$jmlhkaryawankw     = $this->db->query("SELECT * FROM karyawan WHERE status_kawin = 'MENIKAH'")->num_rows();
$jmlhkaryawanmp     = $this->db->query("SELECT * FROM karyawan WHERE perusahaan = 'MP'")->num_rows();
$jmlhkaryawanpcf    = $this->db->query("SELECT * FROM karyawan WHERE perusahaan = 'PCF'")->num_rows();
$pst                = $this->db->query("SELECT * FROM karyawan WHERE kantor = 'PUSAT'")->num_rows();
$tsm                = $this->db->query("SELECT * FROM karyawan WHERE kantor = 'TASIKMALAYA'")->num_rows();
$bdg                = $this->db->query("SELECT * FROM karyawan WHERE kantor = 'BANDUNG'")->num_rows();
$bgr                = $this->db->query("SELECT * FROM karyawan WHERE kantor = 'BOGOR'")->num_rows();
$skb                = $this->db->query("SELECT * FROM karyawan WHERE kantor = 'SUKABUMI'")->num_rows();
$pwt                = $this->db->query("SELECT * FROM karyawan WHERE kantor = 'PURWOKERTO'")->num_rows();
$smr                = $this->db->query("SELECT * FROM karyawan WHERE kantor = 'SEMARANG'")->num_rows();
$sby                = $this->db->query("SELECT * FROM karyawan WHERE kantor = 'SURABAYA'")->num_rows();
$klt                = $this->db->query("SELECT * FROM karyawan WHERE kantor = 'KLATEN'")->num_rows();
$tgl                = $this->db->query("SELECT * FROM karyawan WHERE kantor = 'TEGAL'")->num_rows();


?>
<div class="container-fluid">

    <div class="row" style="zoom:85%;">
        <div class="col">

            <div class="h-100">

                <div class="row">
                    <div class="col-xl-2 col-md-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Total Karyawan</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h5 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php echo $jmlhkaryawan; ?>"></span> Karyawan</h5>
                                        <a href="#" class="text-decoration-underline">View</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-success rounded fs-3">
                                            <i class="bx bx-user-circle text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Total Karyawan (MP)</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h5 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php echo $jmlhkaryawanmp; ?>"></span> Karyawan</h5>
                                        <a href="#" class="text-decoration-underline">View</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-info rounded fs-3">
                                            <i class="bx bx-user-circle text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Total Karyawan (PCF)</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h5 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php echo $jmlhkaryawanpcf; ?>"></span> Karyawan</h5>
                                        <a href="#" class="text-decoration-underline">View</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-warning rounded fs-3">
                                            <i class="bx bx-user-circle text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Total Karyawan (Laki-Laki)</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h5 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php echo $jmlhkaryawanlk; ?>"></span> Karyawan</h5>
                                        <a href="#" class="text-decoration-underline">View</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-success rounded fs-3">
                                            <i class="bx bx-user-circle text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Total Karyawan (Perempuan)</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h5 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php echo $jmlhkaryawanpr; ?>"></span> Karyawan</h5>
                                        <a href="#" class="text-decoration-underline">View</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-success rounded fs-3">
                                            <i class="bx bx-user-circle text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6">
                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-0">
                                            Total Karyawan (Menikah)</p>
                                    </div>
                                    <div class="flex-shrink-0">
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h5 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="<?php echo $jmlhkaryawankw; ?>"></span> Karyawan</h5>
                                        <a href="#" class="text-decoration-underline">View</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-soft-success rounded fs-3">
                                            <i class="bx bx-user-circle text-warning"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body p-0 pb-2">
                                <div class="w-100">
                                    <div id="customer_impression_charts" data-colors='["--vz-primary", "--vz-success", "--vz-danger"]' class="apex-charts" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-auto layout-rightside-col">
            <div class="overlay"></div>
            <div class="layout-rightside">
                <div class="card h-100 rounded-0">
                    <div class="card-body p-0">
                        <div class="p-3 mt-2">
                            <h6 class="text-muted mb-3 text-uppercase fw-semibold">KONTRAK AKAN HABIS (BULAN INI)
                            </h6>
                            <ol class="ps-3 text-muted">
                                <?php

                                $karyawan           = $this->db->query("SELECT * FROM karyawan INNER JOIN kontrak ON kontrak.nik = karyawan.nik GROUP BY kontrak.nik")->result();
                                foreach ($karyawan as $d) {
                                    $tglkontrak         = $this->db->query("SELECT * FROM kontrak WHERE nik = '$d->nik' ORDER BY kode_kontrak DESC")->row_array();
                                    if (isset($tglkontrak['akhir_kontrak'])) {
                                        $akhir_kontrak  = $tglkontrak['akhir_kontrak'];
                                        $dateKontrak    = new DateTime($akhir_kontrak);
                                        $now            = new DateTime();
                                        $sisakontrak    = $dateKontrak->diff($now)->format("%m");
                                        $kontraksisa    = $dateKontrak->diff($now)->format("%m Bulan %d Hari");
                                    } else {
                                        $sisakontrak        = "";
                                    }

                                    if ($sisakontrak < 1) {
                                ?>
                                        <li class="py-1">
                                            <a href="#" class="text-muted"><?php echo $d->nama_karyawan; ?> <span class="float-end"><?php echo $kontraksisa; ?></span></a>
                                            <a href="#" class="text-muted"><span class="float-end"><?php echo date("d M Y", strtotime($tglkontrak['awal_kontrak'])); ?> s/d <?php echo date("d M Y", strtotime($tglkontrak['akhir_kontrak'])); ?></span></a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<script src="<?php echo base_url(); ?>assets/libs/apexcharts/apexcharts.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        function getChartColorsArray(e) {
            if (null !== document.getElementById(e)) {
                var e = document.getElementById(e).getAttribute("data-colors");
                return (e = JSON.parse(e)).map(function(e) {
                    var t = e.replace(" ", "");
                    if (-1 === t.indexOf(",")) {
                        var o = getComputedStyle(document.documentElement).getPropertyValue(t);
                        return o || t
                    }
                    e = e.split(",");
                    return 2 != e.length ? t : "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(e[0]) + "," + e[1] + ")"
                })
            }
        }
        var linechartcustomerColors = getChartColorsArray("customer_impression_charts"),
            options = {
                series: [{
                    name: "Karyawan",
                    type: "bar",
                    data: [<?php echo $pst; ?>, <?php echo $tsm; ?>, <?php echo $bdg; ?>, <?php echo $bgr; ?>, <?php echo $skb; ?>, <?php echo $pwt; ?>, <?php echo $smr; ?>, <?php echo $tgl; ?>, <?php echo $klt; ?>, <?php echo $sby; ?>]
                }],
                chart: {
                    height: 370,
                    type: "line",
                    toolbar: {
                        show: !1
                    }
                },
                stroke: {
                    curve: "straight",
                    dashArray: [0, 0, 8],
                    width: [2, 0, 2.2]
                },
                fill: {
                    opacity: [.1, .9, 1]
                },
                markers: {
                    size: [0, 0, 0],
                    strokeWidth: 2,
                    hover: {
                        size: 4
                    }
                },
                xaxis: {
                    categories: ["PST", "TSM", "BDG", "BGR", "SKB", "PWT", "SMR", "TGL", "KLT", "SBY"],
                    axisTicks: {
                        show: !1
                    },
                    axisBorder: {
                        show: !1
                    }
                },
                grid: {
                    show: !0,
                    xaxis: {
                        lines: {
                            show: !0
                        }
                    },
                    yaxis: {
                        lines: {
                            show: !1
                        }
                    },
                    padding: {
                        top: 0,
                        right: -2,
                        bottom: 15,
                        left: 10
                    }
                },
                legend: {
                    show: !0,
                    horizontalAlign: "center",
                    offsetX: 0,
                    offsetY: -5,
                    markers: {
                        width: 9,
                        height: 9,
                        radius: 6
                    },
                    itemMargin: {
                        horizontal: 10,
                        vertical: 0
                    }
                },
                plotOptions: {
                    bar: {
                        columnWidth: "30%",
                        barHeight: "70%"
                    }
                },
                colors: linechartcustomerColors,
                tooltip: {
                    shared: !0,
                    y: [{
                        formatter: function(e) {
                            return void 0 !== e ? e.toFixed(0) : e
                        }
                    }, {
                        formatter: function(e) {
                            return void 0 !== e ? "$" + e.toFixed(2) + "k" : e
                        }
                    }, {
                        formatter: function(e) {
                            return void 0 !== e ? e.toFixed(0) + " Sales" : e
                        }
                    }]
                }
            },
            chart = new ApexCharts(document.querySelector("#customer_impression_charts"), options);
        chart.render();
    });
</script>