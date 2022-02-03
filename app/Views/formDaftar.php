<?=$this->extend('beranda');?>
<?=$this->section('isi_web');?>
<?=session()->getFlashData('info') ?>

<form method="POST" action="/simpan-pendaftaran">

<div class="form-group">
    <label class="col-md-2">NISN</label>
    <div class="col-md-10">
        <input type="text" name="txtNISN" class="form-control" placeholder="Masukan NISN" autocomplete="off" autofocus/>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2">Nama Lengkap</label>
    <div class="col-md-10">
        <input type="text" name="txtNama" class="form-control" placeholder="Masukan Nama Lengkap" autocomplete="off"/>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2">Tempat Lahir</label>
    <div class="col-md-10">
        <input type="text" name="txtTempatLahir" class="form-control" placeholder="Masukan Kota Tempat Lahir" autocomplete="off"/>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2">Tanggal Lahir</label>
    <div class="col-md-10">
        <input type="date" name="txtTanggalLahir" class="form-control" autocomplete="off"/>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2">Jenis Kelamin</label>
    <div class="col-md-10">
        <select name="txtJenisKelamin" class="form-control">
            <option value="L">Laki-laki</option>        
            <option value="P">Perempuan</option>
        </select>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2">Email Aktif</label>
    <div class="col-md-10">
        <input type="email" name="txtEmail" class="form-control" placeholder="Masukan Alamat Email Aktif" autocomplete="off"/>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2">Nomor WA</label>
    <div class="col-md-10">
        <input type="text" name="txtNoWa" class="form-control" placeholder="Masukan Nomor WA Aktif" autocomplete="off"/>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2">Asal Sekolah</label>
    <div class="col-md-10">
        <input type="text" name="txtAsalSekolah" class="form-control" placeholder="Masukan Nama Sekolah Asal" autocomplete="off"/>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2">Alamat Lengkap</label>
    <div class="col-md-10">
        <textarea name="txtAlamat" class="form-control" placeholder="Masukan Alamat Lengkap"></textarea>
    </div>
</div>

<div class="form-group">
    <label class="col-md-2">Jurusan Pilihan</label>
    <div class="col-md-10">
        <select name="txtPilihanJurusan" class="form-control">
            <?php
            if(isset($dataJurusan)){
                foreach($dataJurusan as $row){
                    echo '<option value="'.$row['id_jurusan'].'">'.$row['nama_jurusan'].'</option>';
                }
            }
            ?>
        </select>
    </div>
</div>

<div class="form-group">
    <div class="col-md-2">
            <button type="submit" name="btnSubmit" class="btn btn-primary btn-block">Daftar</button>
    </div>
</div>

</form>
<?=$this->endSection();?>