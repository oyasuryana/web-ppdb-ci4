<!-- memanggil file utama (beranda.php)-->
<?=$this->extend('beranda');?>
<?=$this->section('isi_web');?>

<table class="table table-hover text-left">
    <thead class=" bg-success">
        <tr>
        <th>#</th>
        <th>Jurusan</th>
        <th>Deskripsi</th>
        <th>Foto</th>
        </tr>
    </thead>
<?php
if(isset($daftarJurusan)){
    $html=null;
    $no=null;
    foreach($daftarJurusan as $row){
        $no++;
        $html .='<tr>';
        $html .='<td>'.$no.'</td>';
        $html .='<td>'.$row['nama_jurusan'].'</td>';
        $html .='<td>'.$row['deskripsi_jurusan'].'</td>';
        $html .='<td>'.$row['foto_jurusan'].'</td>';
        $html .='</tr>';
    }
    echo $html; 
}
?>

</table>
<?=$this->endSection();?>