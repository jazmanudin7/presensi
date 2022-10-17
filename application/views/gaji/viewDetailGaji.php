<?php

$no = 1;
foreach ($karyawan->result() as $d) { ?>
  <tr>
    <td><?php echo $d->nik; ?></td>
    <td><?php echo $d->nama_karyawan; ?></td>
    <td><?php echo $d->group; ?> ( <?php echo $d->departemen; ?> )</td>
    <td><input class="form-control gaji_pokok" style="text-align:right" value="<?php if (isset($d->gaji_pokok)) {
                                                                                  echo number_format($d->gaji_pokok);
                                                                                } ?>" data-nik="<?php echo $d->nik; ?>" id="gaji_pokok" name="gaji_pokok" placeholder="Gaji Pokok"></td>
    <td><input class="form-control masa_kerja" style="text-align:right" value="<?php if (isset($d->masa_kerja)) {
                                                                                  echo number_format($d->masa_kerja);
                                                                                } ?>" data-nik="<?php echo $d->nik; ?>" id="masa_kerja" name="masa_kerja" placeholder="Masa Kerja"></td>
    <td><input class="form-control tunjangan_jabatan" style="text-align:right" value="<?php if (isset($d->jabatan)) {
                                                                                        echo number_format($d->jabatan);
                                                                                      } ?>" data-nik="<?php echo $d->nik; ?>" id="tunjangan_jabatan" name="tunjangan_jabatan" placeholder="Jabatan"></td>
    <td><input class="form-control tanggung_jawab" style="text-align:right" value="<?php if (isset($d->jabatan)) {
                                                                                      echo number_format($d->tanggung_jawab);
                                                                                    } ?>" data-nik="<?php echo $d->nik; ?>" id="tanggung_jawab" name="tanggung_jawab" placeholder="T Jawab"></td>
    <td><input class="form-control makan" style="text-align:right" value="<?php if (isset($d->makan)) {
                                                                            echo number_format($d->makan);
                                                                          } ?>" data-nik="<?php echo $d->nik; ?>" id="makan" name="makan" placeholder="Makan"></td>
    <td><input class="form-control istri" style="text-align:right" value="<?php if (isset($d->istri)) {
                                                                            echo number_format($d->istri);
                                                                          } ?>" data-nik="<?php echo $d->nik; ?>" id="istri" name="istri" placeholder="Istri/J/D"></td>
    <td><input class="form-control skill_khusus" style="text-align:right" value="<?php if (isset($d->istri)) {
                                                                                    echo number_format($d->skill_khusus);
                                                                                  } ?>" data-nik="<?php echo $d->nik; ?>" id="skill_khusus" name="skill_khusus" placeholder="Skill Khusus"></td>
  </tr>
<?php } ?>

<script type="text/javascript">
  $(document).ready(function() {

    function formatAngka(angka) {
      if (typeof(angka) != 'string') angka = angka.toString();
      var reg = new RegExp('([0-9]+)([0-9]{3})');
      while (reg.test(angka)) angka = angka.replace(reg, '$1,$2');
      return angka;
    }


    $('.gaji_pokok').on("input", function() {

      var gaji_pokok = $(this).val();
      var gaji_pokok = gaji_pokok.replace(/[^\d]/g, "");
      $(this).val(formatAngka(gaji_pokok * 1));

    });

    $('.masa_kerja').on("input", function() {

      var masa_kerja = $(this).val();
      var masa_kerja = masa_kerja.replace(/[^\d]/g, "");
      $(this).val(formatAngka(masa_kerja * 1));

    });

    $('.tunjangan_jabatan').on("input", function() {

      var tunjangan_jabatan = $(this).val();
      var tunjangan_jabatan = tunjangan_jabatan.replace(/[^\d]/g, "");
      $(this).val(formatAngka(tunjangan_jabatan * 1));

    });

    $('.tanggung_jawab').on("input", function() {

      var tanggung_jawab = $(this).val();
      var tanggung_jawab = tanggung_jawab.replace(/[^\d]/g, "");
      $(this).val(formatAngka(tanggung_jawab * 1));

    });

    $('.makan').on("input", function() {

      var makan = $(this).val();
      var makan = makan.replace(/[^\d]/g, "");
      $(this).val(formatAngka(makan * 1));

    });

    $('.istri').on("input", function() {

      var istri = $(this).val();
      var istri = istri.replace(/[^\d]/g, "");
      $(this).val(formatAngka(istri * 1));

    });

    $('.skill_khusus').on("input", function() {

      var skill_khusus = $(this).val();
      var skill_khusus = skill_khusus.replace(/[^\d]/g, "");
      $(this).val(formatAngka(skill_khusus * 1));

    });

    $(".gaji_pokok").on('change', function(e) {
      e.preventDefault();
      var nobukti = $("#nobukti").val();
      var nik = $(this).attr("data-nik");
      var gaji_pokok = $(this).val();;
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>gaji/simpanGajiPokok',
        data: {
          nobukti: nobukti,
          nik: nik,
          gaji_pokok: gaji_pokok,
        },
        cache: false,
        success: function(respond) {

        }
      });
    });

    $(".masa_kerja").on('change', function(e) {
      e.preventDefault();
      var nobukti = $("#nobukti").val();
      var nik = $(this).attr("data-nik");
      var masa_kerja = $(this).val();;
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>gaji/simpanMasaKerja',
        data: {
          nobukti: nobukti,
          nik: nik,
          masa_kerja: masa_kerja,
        },
        cache: false,
        success: function(respond) {

        }
      });
    });

    $(".tunjangan_jabatan").on('change', function(e) {
      e.preventDefault();
      var nobukti = $("#nobukti").val();
      var nik = $(this).attr("data-nik");
      var tunjangan_jabatan = $(this).val();;
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>gaji/simpanTunjanganJabatan',
        data: {
          nobukti: nobukti,
          nik: nik,
          tunjangan_jabatan: tunjangan_jabatan,
        },
        cache: false,
        success: function(respond) {

        }
      });
    });

    $(".tanggung_jawab").on('change', function(e) {
      e.preventDefault();
      var nobukti = $("#nobukti").val();
      var nik = $(this).attr("data-nik");
      var tanggung_jawab = $(this).val();;
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>gaji/simpanTanggungJawab',
        data: {
          nobukti: nobukti,
          nik: nik,
          tanggung_jawab: tanggung_jawab,
        },
        cache: false,
        success: function(respond) {

        }
      });
    });

    $(".istri").on('change', function(e) {
      e.preventDefault();
      var nobukti = $("#nobukti").val();
      var nik = $(this).attr("data-nik");
      var istri = $(this).val();;
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>gaji/simpanIstri',
        data: {
          nobukti: nobukti,
          nik: nik,
          istri: istri,
        },
        cache: false,
        success: function(respond) {

        }
      });
    });

    $(".skill_khusus").on('change', function(e) {
      e.preventDefault();
      var nobukti = $("#nobukti").val();
      var nik = $(this).attr("data-nik");
      var skill_khusus = $(this).val();;
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>gaji/simpanSkillKhusus',
        data: {
          nobukti: nobukti,
          nik: nik,
          skill_khusus: skill_khusus,
        },
        cache: false,
        success: function(respond) {

        }
      });
    });

    $(".makan").on('change', function(e) {
      e.preventDefault();
      var nobukti = $("#nobukti").val();
      var nik = $(this).attr("data-nik");
      var makan = $(this).val();;
      $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>gaji/simpanMakan',
        data: {
          nobukti: nobukti,
          nik: nik,
          makan: makan,
        },
        cache: false,
        success: function(respond) {

        }
      });
    });

  });
</script>