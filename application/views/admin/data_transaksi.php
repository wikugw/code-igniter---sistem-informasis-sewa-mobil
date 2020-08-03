<div class="main-content">
  <div class="section">
    <div class="section-header">
      <h1>Data Transaski</h1>
    </div>

    <table class="table-responsive table table-bordered table-striped">
      <tr>
        <th>No.</th>
        <th>Customer</th>
        <th>Mobil</th>
        <th>Tgl. Rental</th>
        <th>Tgl. Kembali</th>
        <th>Harga/Hari</th>
        <th>Denda/Hari</th>
        <th>Tgl. Dikembalikan</th>
        <th>Status Pengembalian</th>
        <th>Status Rental</th>
        <th>Action</th>
      </tr>

      <?php $no=1; foreach ($transaksi as $tr): ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $tr->nama ?></td>
          <td><?php echo $tr->merk ?></td>
          <td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental))?></td>
          <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali))?></td>
          <td>Rp. <?php echo  number_format($tr->harga,0,',','.')?></td>
          <td>Rp. <?php echo  number_format($tr->denda,0,',','.')?></td>
          <td>
            <?php if ($tr->tanggal_pengembalian == "0000-00-00"){
              echo "-";
            } else {
              echo date('d/m/Y', strtotime($tr->tanggal_pengembalian));
            }?>
          </td>
          <td>
            <?php if ($tr->status == "0"){
              echo "Belum Kembali";
            } else {
              echo "Kembali";
            }?>
          </td>
          <td>
            <?php if ($tr->status == "0"){
              echo "Belum Kembali";
            } else {
              echo "Kembali";
            }?>
          </td>
          <td>
            <?php if ($tr->status == "1"){
              echo "-";
            } else { ?>
              <div class="row">
                <a href="<?php echo base_url('admin/data_transaksi/transaksi_selesai/').$tr->id_rental; ?>" class="btn btn-sm btn-success mr-2"><i class="fas fa-check"></i></a>
                <a href="<?php echo base_url('admin/data_transaksi/transaksi_batal/').$tr->id_rental; ?>" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
              </div>
            <?php } ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</div>
