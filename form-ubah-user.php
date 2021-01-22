 <!-- Aplikasi CRUD
 ************************************************
 * Developer    : Indra Styawantoro
 * Company      : Indra Studio
 * Release Date : 1 Maret 2016
 * Website      : http://www.indrasatya.com, http://www.kulikoding.net
 * E-mail       : indra.setyawantoro@gmail.com
 * Phone        : +62-856-6991-9769
 * BBM          : 7679B9D9
 -->
 
  <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-edit"></i> 
          Ubah data USer
        </h4>
      </div> <!-- /.page-header -->
      <?php
      $id = $_GET['id'];

      if (isset($id)) {
        // memanggil file siswa.php
        require_once 'user.php';
        
        // membuat objek siswa
        $user = new user();
        
        // mengambil data siswa
        $data = $user->get_user($id);
        $id             = $data['id'];
        $nama           = $data['nama'];
        $alamat         = $data['alamat'];
        $umur			      = $data['umur'];
        
    
      }
      ?>
      <div class="panel panel-default">
        <div class="panel-body">
          <form class="form-horizontal" method="POST" action="proses-ubah-user.php">
            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-2">
                <input type="text" name="id" value="<?php echo $id ?>">
                <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" >
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Alamat</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="alamat" autocomplete="off" value="<?php echo $alamat; ?>" required>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Umur</label>
              <div class="col-sm-3">
                <input type="text" class="form-control" name="umur" autocomplete="off" value="<?php echo $umur; ?>" required>
              </div>
            </div>

          

            
            <hr/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <input type="submit" class="btn btn-success btn-submit" name="simpan" value="Simpan">
               <a href="javascript:history.go(-1)" class="btn btn-default btn-submit">Batal</a>
              </div>
            </div>
          </form>
        </div> <!-- /.panel-body -->
      </div> <!-- /.panel -->
    </div> <!-- /.col -->
  </div> <!-- /.row -->