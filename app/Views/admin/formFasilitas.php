<?=$this->extend('admin/dashboard');?>
<?=$this->section('isi_web');?>

<?=$judulHalaman;?>
<?=$intro;?>

<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Fasilitas</label>
        <input type="text" class="form-control" name="txtNamaFasilitas" placeholder="Masukan nama fasilitas" autofocus autocomplete="no"/>
    </div>

    <div class="form-group">
        <label>Deskripsi Fasilitas</label>
        <textarea class="form-control" name="txtDeskripsiFasilitas" placeholder="Masukan deskripsi fasilitas"></textarea>
    </div>
    <div class="form-group">
        <label>Foto Fasilitas</label>
        <input type="file" class="form-control" name="txtFilenya"/>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Simpan Fasilitas</button>
    </div>

</form>
<?=$this->endSection();?>