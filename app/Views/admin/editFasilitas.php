<?=$this->extend('admin/dashboard');?>
<?=$this->section('isi_web');?>

<?=$judulHalaman;?>
<?=$intro;?>

<form method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Fasilitas</label>
        <input type="text" class="form-control" name="txtNamaFasilitas" value="<?=$detailFasilitas[0]['nama_fasilitas'];?>" placeholder="Masukan nama fasilitas" autofocus autocomplete="no"/>
    </div>

    <div class="form-group">
        <label>Deskripsi Fasilitas</label>
        <textarea class="form-control" name="txtDeskripsiFasilitas" placeholder="Masukan deskripsi fasilitas"><?=$detailFasilitas[0]['deskripsi_fasilitas'];?></textarea>
    </div>
    <div class="form-group">
        <label>Foto Fasilitas<br/>
        <img src="<?=base_url('uploads/'.$detailFasilitas[0]['foto_fasilitas']);?>" class="img-thumbnail">
        </label>
        <input type="file" class="form-control" name="txtFilenya"/>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Simpan Fasilitas</button>
    </div>

</form>
<?=$this->endSection();?>