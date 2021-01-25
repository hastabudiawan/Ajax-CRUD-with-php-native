<form method="POST" id="formAdd">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" name="Nama" id="Nama" required="" />
    </div>

    <div class="form-group">
        <label>Jenis Kelamin</label>
        <div class="form-check form-check-inline">
            <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Laki-laki" required=""/>
            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" name="JenisKelamin" id="JenisKelamin" value="Perempuan" required=""/>
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
        </div>            
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" name="Alamat" id="Alamat" required=""></textarea>
    </div>

    <div class="form-group">
        <label>Agama</label>
        <select class="form-control" name="Agama" id="Agama" required="">
            <option disabled="" selected="">-Pilih-</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katholik">Katholik</option>
            <option value="Budha">Budha</option>
            <option value="Hindhu">Hindhu</option>
            <option value="Konghucu">Konghucu</option>
            <option value="Lain-lain">Lain-lain</option>
        </select>            
    </div>
    
    <div class="form-group">
        <label>No. Telp</label>
        <input class="form-control" type="text" name="NoHP" id="NoHP" required=""/>
    </div>        

    <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="email" name="Email" id="Email" required=""/>
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="simpan" id="simpan" value="Simpan"/>    
        <button class="btn btn-danger" id="cancelButton" type="button">Batal</button>
    </div>
</form>