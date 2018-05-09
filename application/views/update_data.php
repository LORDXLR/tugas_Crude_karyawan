
<form method="POST" action="<?php echo base_url();?>index.php/karyawan/simpan">
	<div class="form-group">
         <label>Kode Karyawan</label>
         <input class="form-control" type="text" style="width:300px" placeholder="" name="kode" readonly="" value="<?php echo $kode;?>" />
    </div>

    <div class="form-group">
         <label>Nama Karyawan</label>
         <input class="form-control" type="text" style="width:500px" placeholder="" name="nama" required="" value="<?php echo $nama;?> "/>
    </div>

    <div class="form-group">
         <label>Alamat</label>
         <input class="form-control" type="text" style="width:500px" placeholder="" name="alamat" required="" value="<?php echo $alamat;?>" />
    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label>
            <div class="radio">
                <label>
                    <input type="radio" name="jenis_kelamin" value="laki-laki" checked />Laki-laki
                </label>
                <label>
                    <input type="radio" name="jenis_kelamin" value="perempuan" />Perempuan
                </label>
            </div>
    </div>

    <div class="form-group">
         <label>Email</label>
         <input class="form-control" type="text" style="width:500px" placeholder="" name="email" required="" value="<?php echo $email;?>" />
    </div>

    <div class="form-group">
     <label>Upload Foto</label>
      <input type="file" name="foto" value="<?php echo $foto;?>"/>
     </div>
     <button type="submit" class="btn btn-default">Simpan</button>
     <a href="<?php echo base_url();?>index.php/dashboard" class="btn btn-primary">Kembali</a>
</form>
