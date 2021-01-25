<?php
 include "koneksi.php";
 $IdMhsw=$_GET['IdMhsw'];
 $query=mysqli_query($koneksi, "SELECT * FROM Mahasiswa WHERE IdMhsw='$IdMhsw'") or die(mysqli_error($koneksi));
 $result=mysqli_fetch_array($query);
?>
    <form method="POST" id="formEdit">
        <div class="form-group">
            <label>Nama</label>
            <input class="form-control" type="hidden" name="IdMhsw" id="IdMhsw" required="" value="<?php echo $result['IdMhsw']; ?>" />
            <input class="form-control" type="text" name="Nama" id="Nama" required="" value="<?php echo $result['Nama']; ?>" />
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>
            <div class="form-check form-check-inline">
                <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Laki-laki" required="" <?php if($result[ 'JenisKelamin']=="Laki-laki" ) echo "checked"; ?>/>
                <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
                <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Perempuan" required="" <?php if($result[ 'JenisKelamin']=="Perempuan" ) echo "checked"; ?>/>
                <label class="form-check-label" for="inlineRadio2">Perempuan</label>
            </div>            
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <textarea class="form-control" 
            name="Alamat" id="Alamat" required=""><?php echo $result['Alamat']; ?>
            </textarea>
        </div>

        <div class="form-group">
            <label>Agama</label>
            <select class="form-control" name="Agama" id="Agama" required="">
                <option disabled="" selected="">-Pilih-</option>
                <option value="Islam" <?php if($result[ 'Agama']=="Islam" ) echo "selected"; ?>>Islam</option>
                <option value="Kristen" <?php if($result[ 'Agama']=="Kristen" ) echo "selected"; ?>>Kristen</option>
                <option value="Katholik" <?php if($result[ 'Agama']=="Katholik" ) echo "selected"; ?>>Katholik</option>
                <option value="Budha" <?php if($result[ 'Agama']=="Budha" ) echo "selected"; ?>>Budha</option>
                <option value="Hindhu" <?php if($result[ 'Agama']=="Hindhu" ) echo "selected"; ?>>Hindhu</option>
                <option value="Konghucu" <?php if($result[ 'Agama']=="Konghucu" ) echo "selected"; ?>>Konghucu</option>
                <option value="Lain-lain" <?php if($result[ 'Agama']=="Lain-lain" ) echo "selected"; ?>>Lain-lain</option>
            </select> 
        </div>
        
        <div class="form-group">
            <label>No. Telp</label>
            <input class="form-control" type="text" name="NoHP" id="NoHP" required="" value="<?php echo $result['NoHp']; ?>" />
        </div>        

        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="email" name="Email" id="Email" required="" value="<?php echo $result['Email']; ?>" />
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" name="simpan" id="simpan" value="Simpan" />
            <button class="btn btn-danger" type="button" id="cancelButton">Batal</button>        
        </div>
    </form>