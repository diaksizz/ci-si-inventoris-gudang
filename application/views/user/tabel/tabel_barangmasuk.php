<br><br><br>
    <div class="container text-center" style="margin: 2em auto;">
    <a href="<?=base_url('admin/user_proses_databarang_masuk_insert')?>" style="margin-bottom:10px;float:left;" type="button" class="btn btn-primary" name="tambah_data"><i class="fa fa-plus-circle" aria-hidden="true"></i> Tambah Data </a>

    <h2 class="tex-center">Tabel Barang Inventaris Masuk</h2>
    <table class="table table-bordered table-striped" style="margin: 2em auto;" id="tabel_barangmasuk">
    <thead>
      <tr>
        <th>No</th>
        <th>ID_Transaksi</th>
        <th>Tanggal</th>
        <th>Nama Sekolah</th>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Jumlah</th>
        <th>Update</th>
        <th>Delete</th>
        <th>Keluarkan</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php if(is_array($list_data)){ ?>
        <?php $no = 1;?>
        <?php foreach($list_data as $dd): ?>
          <td><?=$no?></td>
          <td><?=$dd->id_transaksi?></td>
          <td><?=$dd->tanggal?></td>
          <td><?=$dd->lokasi?></td>
          <td><?=$dd->kode_barang?></td>
          <td><?=$dd->nama_barang?></td>
          <td><?=$dd->satuan?></td>
          <td><?=$dd->jumlah?></td>
          <td><a type="button" class="btn btn-info"  href="<?=base_url('admin/user_update_barang/'.$dd->id_transaksi)?>" name="btn_update" style="margin:auto;"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
          <td><a type="button" class="btn btn-danger btn-delete"  href="<?=base_url('admin/user_delete_barang/'.$dd->id_transaksi)?>" name="btn_delete" style="margin:auto;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
          <td><a type="button" class="btn btn-success btn-barangkeluar"  href="<?=base_url('admin/user_barang_keluar/'.$dd->id_transaksi)?>" name="btn_barangkeluar" style="margin:auto;"><i class="fa fa-sign-out" aria-hidden="true"></i></a></td>
      </tr>
    <?php $no++; ?>
    <?php endforeach;?>
    <?php }else { ?>
          <td colspan="7" align="center"><strong>Data Kosong</strong></td>
    <?php } ?>
    </tbody>
  </table>
  </div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#tabel_barangmasuk').DataTable({
      dom: 'Bfrtip',
      buttons: [
        'print', 'pdf', 'excel'
      ]
    });
  });
  jQuery(document).ready(function($){
      $('.btn-delete').on('click',function(){
          var getLink = $(this).attr('href');
          swal({
                  title: 'Delete Data',
                  text: 'Yakin Ingin Menghapus Data ?',
                  html: true,
                  confirmButtonColor: '#d9534f',
                  showCancelButton: true,
                  },function(){
                  window.location.href = getLink
              });
          return false;
      });
  });
</script>
