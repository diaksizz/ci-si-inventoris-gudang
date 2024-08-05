

    <!-- Main content -->
    <section class="content" style="margin-top:5%">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <div class="container">
            <!-- general form elements -->
          <div class="box box-primary" style="width:94%;">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-archive" aria-hidden="true"></i> Update Data Barang Masuk</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container">
            <form action="<?=base_url('admin/user_proses_databarang_masuk_update')?>" role="form" method="post">

              <?php if(validation_errors()){ ?>
              <div class="alert alert-warning alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Warning!</strong><br> <?php echo validation_errors(); ?>
             </div>
            <?php } ?>

              <div class="box-body">
                <div class="form-group">
                  <?php foreach($data_barang_update as $d){ ?>
                  <label for="id_transaksi" style="margin-left:220px;display:inline;">ID Transaksi</label>
                  <input type="text" name="id_transaksi" style="margin-left:37px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->id_transaksi?>">
                </div>
                <div class="form-group">
                  <label for="tanggal" style="margin-left:220px;display:inline;">Tanggal</label>
                  <input type="text" name="tanggal" style="margin-left:66px;width:20%;display:inline;" class="form-control" readonly="readonly" value="<?=$d->tanggal?>">
                </div>
                <!-- <div class="form-group" style="margin-bottom:40px;">
                  <label for="nama_barang" style="margin-left:220px;display:inline;">Nama Sekolah</label>
                  <select class="form-control" name="lokasi" style="margin-left:75px;width:20%;display:inline;">
                    <option value="<?=$d->lokasi?>"><?=$d->lokasi?></option>
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
                  <input type="text" name="kode_barang" required style="width: 90%;margin-right: 67px;margin-left: 11px;" class="form-control" id="kode_barang" value="<?=$d->kode_barang?>">
                </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="nama_Barang" style="width:73%;">Nama Barang</label>
                  <input type="text" name="nama_barang" required style="width:90%;margin-right: 67px;" class="form-control" id="nama_Barang" value="<?=$d->nama_barang?>">
              </div>
                <div class="form-group" style="display:inline-block;">
                  <label for="satuan" style="width:73%;">Satuan</label>
                  <select class="form-control" name="satuan" style="width:110%;margin-right: 18px;">
                    <?php foreach($list_satuan as $s){?>
                      <?php if($d->satuan == $s->nama_satuan){?>
                    <option value="<?=$d->satuan?>" selected=""><?=$d->satuan?></option>
                    <?php }else{?>
                    <option value="<?=$s->kode_satuan?>"><?=$s->nama_satuan?></option>
                      <?php } ?>
                      <?php } ?>
                  </select>
              </div>
              <div class="form-group" style="display:inline-block;">
                <label for="jumlah" style="width:73%;margin-left:33px;">Jumlah</label>
                <input type="number" name="jumlah" style="width:41%;margin-left:34px;margin-right:18px;" class="form-control" id="jumlah" value="<?=$d->jumlah?>">
            </div>
            <?php } ?>
              <!-- /.box-body -->

              <div class="box-footer" style="width:93%;">
                <a type="button" class="btn btn-default" style="width:10%" onclick="history.back(-1)" name="btn_kembali"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</a>
                <button type="submit" style="width:20%;margin-left:689px;" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Submit</button>&nbsp;&nbsp;&nbsp;
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
    <!-- /.content -->
  