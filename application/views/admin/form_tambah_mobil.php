<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Form Input Data Mobil</h1>
    </div>

    <div class="card">
      <div class="card-body">
        <form class="" action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi') ?>" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Type Mobil</label>
                <select class="form-control" name="kode_type">
                  <option value="">--Pilih Type Mobil--</option>
                  <?php foreach($type as $tp) : ?>
                    <option value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type; ?></option>
                  <?php endforeach; ?>
                </select>
                <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>'); ?>
              </div>

              <div class="form-group">
                <label>Merk</label>
                <input type="text" name="merk" class="form-control">
                <?php echo form_error('merk','<div class="text-small text-danger">','</div>'); ?>
              </div>

              <div class="form-group">
                <label>No. Plat</label>
                <input type="text" name="no_plat" class="form-control">
                <?php echo form_error('no_plat','<div class="text-small text-danger">','</div>'); ?>
              </div>

              <div class="form-group">
                <label>Warna</label>
                <input type="text" name="warna" class="form-control">
                <?php echo form_error('warna','<div class="text-small text-danger">','</div>'); ?>
              </div>

              <div class="form-group">
                <label>AC</label>
                <select name="ac" class="form-control">
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                  <?php echo form_error('ac','<div class="text-small text-danger">','</div>'); ?>
                </select>
              </div>

              <div class="form-group">
                <label>Supir</label>
                <select name="supir" class="form-control">
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                  <?php echo form_error('supir','<div class="text-small text-danger">','</div>'); ?>
                </select>
              </div>

              <div class="form-group">
                <label>MP3 Player</label>
                <select name="mp3_player" class="form-control">
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                  <?php echo form_error('mp3_player','<div class="text-small text-danger">','</div>'); ?>
                </select>
              </div>

              <div class="form-group">
                <label>Central Lock</label>
                <select name="central_lock" class="form-control">
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                  <?php echo form_error('mp3_player','<div class="text-small text-danger">','</div>'); ?>
                </select>
              </div>

            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Harga Sewa</label>
                <input type="number" name="harga" class="form-control">
                <?php echo form_error('harga','<div class="text-small text-danger">','</div>'); ?>
              </div>

              <div class="form-group">
                <label>Denda</label>
                <input type="number" name="denda" class="form-control">
                <?php echo form_error('denda','<div class="text-small text-danger">','</div>'); ?>
              </div>

              <div class="form-group">
                <label>Tahun</label>
                <input type="text" name="tahun" class="form-control">
                <?php echo form_error('tahun','<div class="text-small text-danger">','</div>'); ?>
              </div>

              <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                  <option value="">--Pilih Status--</option>
                  <option value="1">Tersedia</option>
                  <option value="0">Tidak Tersedia</option>
                </select>
                <?php echo form_error('status','<div class="text-small text-danger">','</div>'); ?>
              </div>

              <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="gambar" class="form-control">
              </div>

              <button type="submit" class="btn btn-primary mt-4">Simpan</button>
              <button type="submit" class="btn btn-danger mt-4">Reset</button>

            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
