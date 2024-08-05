
    <!-- Main content -->
    <section class="content" style="margin-top:5%">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="container">
            <!-- general form elements -->
          <div class="box box-primary" style="width:94%;">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-archive" aria-hidden="true"></i> Tambah Data Barang Masuk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container">
            <form action="<?=base_url('admin/user_proses_databarang_masuk_insert')?>" role="form" method="post">

              <?php if($this->session->flashdata('msg_berhasil')){ ?>
                <div class="alert alert-success alert-dismissible" style="width:91%">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong><br> <?php echo $this->session->flashdata('msg_berhasil');?>
               </div>
              <?php } ?>

              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?php echo validation_errors(); ?>
             </div>
            <?php } ?>

              <div class="box-body">
                <div class="form-group">
                  <label for="id_transaksi" style="margin-left:220px;display:inline;">ID Transaksi</label>
                  <input type="text" name="id_transaksi" style="margin-left:37px;width:20%;display:inline;" class="form-control" readonly="readonly" value="WG-<?=date("Y");?><?=random_string('numeric', 8);?>">
                  </div>
                <!-- <input autocomplete="off" type="text" name="lokasi_staff" value="staff" class="form-control"> -->
                <div class="form-group">
                  <label for="tanggal" style="margin-left:220px;display:inline;">Tanggal</label>
                  <input autocomplete="off" type="text" name="tanggal" style="margin-left:66px;width:20%;display:inline;" class="form-control form_datetime" placeholder="Klik Disini">
                </div>
                <!-- <div class="form-group" style="margin-bottom:40px;">
                  <label for="nama_barang" style="margin-left:220px;display:inline;">Nama Sekolah</label>
                  <select class="form-control" name="lokasi" style="margin-left:75px;width:20%;display:inline;">
                      <option value="" disabled selected>-- Pilih --</option>
                      <option value="SDN Bareng 2">SDN Bareng 2</option>
                      <option value="SDN Bareng 3">SDN Bareng 3</option>
                      <option value="SDN Bareng 4">SDN Bareng 4</option>
                      <option value="SDN Bareng 5">SDN Bareng 5</option>
                      <option value="SDN Bareng 6">SDN Bareng 6</option>
                      <option value="SDN Tebel 1">SDN Tebel 1</option>
                      <option value="SDN Tebel 2">SDN Tebel 2</option>
                      <option value="SDN Pakel 1">SDN Pakel 1</option>
                      <option value="SDN Pakel 2">SDN Pakel 2</option>
                      <option value="SDN Pakel 3">SDN Pakel 3</option>
                      <option value="SDN Karangan 1">SDN Karangan 1</option>
                      <option value="SDN Karangan 2">SDN Karangan 2</option>
                      <option value="SDN Gelaran 1">SDN Gelaran 1</option>
                      <option value="SDN Gelaran 2">SDN Gelaran 2</option>
                      <option value="SDN Pulosari 1">SDN Pulosari 1</option>
                      <option value="SDN Pulosari 2">SDN Pulosari 2</option>
                      <option value="SDN Ngrimbi 1">SDN Ngrimbi 1</option>
                      <option value="SDN Ngrimbi 2">SDN Ngrimbi 2</option>
                      <option value="SDN Mojotengah 1">SDN Mojotengah 1</option>
                      <option value="SDN Mojotengah 2">SDN Mojotengah 2</option>
                      <option value="SDN Kebondalem 1">SDN Kebondalem 1</option>
                      <option value="SDN Kebondalem 2">SDN Kebondalem 2</option>
                      <option value="SDN Mundusewu 1">SDN Mundusewu 1</option>
                      <option value="SDN Mundusewu 2">SDN Mundusewu 2</option>
                      <option value="SDN Banjaragung 2">SDN Banjaragung 2</option>
                      <option value="SDN Banjaragung 3">SDN Banjaragung 3</option>
                      <option value="SDN Ngampungan">SDN Ngampungan</option>
                      <option value="SDN Nglebak">SDN Nglebak</option>
                  </select>

                </div> -->
                <div class="form-group" style="display:inline-block;">
                  <label for="kode_barang" style="width:87%;margin-left: 12px;">Kode Barang / Barcode</label>
                  <input type="text" name="kode_barang" style="width: 90%;margin-right: 67px;margin-left: 11px;" class="form-control" id="kode_barang" placeholder="Kode Barang">
                </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="nama_Barang" style="width:73%;">Nama Barang</label>
                  <input type="text" name="nama_barang" style="width:90%;margin-right: 67px;" class="form-control" id="nama_Barang" placeholder="Nama Barang">
              </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="satuan" style="width:73%;">Satuan</label>
                  <select class="form-control" name="satuan" style="width:110%;margin-right: 18px;">
                    <option value="" selected="">-- Pilih --</option>
                    <?php foreach($list_satuan as $s){ ?>
                    <option value="<?=$s->kode_satuan?>"><?=$s->nama_satuan?></option>
                    <?php } ?>
                  </select>
              </div>
              <div class="form-group" style="display:inline-block;">
                <label for="jumlah" style="width:73%;margin-left:33px;">Jumlah</label>
                <input type="number" name="jumlah" style="width:41%;margin-left:34px;margin-right:18px;" class="form-control" id="jumlah">
            </div>
            <div class="form-group" style="display:inline-block;">
              <button type="reset" class="btn btn-basic" name="btn_reset" style="width:95px;margin-left:-70px;"><i class="fa fa-eraser" aria-hidden="true"></i> Reset</button>
            </div>
              <!-- /.box-body -->
              <div class="box-footer" style="width:93%;">
                <a type="button" class="btn btn-default" style="width:10%;margin-right:26%" onclick="history.back(-1)" name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                <!-- <a type="button" class="btn btn-info" style="width:14%;margin-right:29%" href="<?=base_url('admin/tabel_barangmasuk')?>" name="btn_listbarang"><i class="fa fa-table" aria-hidden="true"></i> Lihat List Barang</a> -->
                <button type="submit" style="width:20%" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>
              </div>
            </form>
          </div>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->

          <!-- /.box -->


          <!-- /.box -->

          <!-- Input addon -->

          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <!-- <div class="col-md-6">
          <!-- Horizontal Form -->

          <!-- /.box -->
          <!-- general form elements disabled -->

          <!-- /.box -->

        </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <script type="text/javascript">
  $(document).ready(function(){

      $(".form_datetime").datetimepicker({
        format: 'dd/mm/yyyy',
        autoclose: true,
        todayBtn: true,
        pickTime: false,
        minView: 2,
        maxView: 4,
      });
  });

  </script>