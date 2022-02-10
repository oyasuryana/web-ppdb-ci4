<!-- memanggil file utama (beranda.php)-->
<?=$this->extend('beranda');?>
<?=$this->section('isi_web');?>

<div class="row">
<?php
if(isset($daftarFasilitas)){
    $html=null;
    $no=null;
    foreach($daftarFasilitas as $row){
        $no++;
        $html .='<div class="col-md-3">';
        $html .='   <div class="panel panel-success"  style="min-height:400px">';
        $html .='       <div class="panel-heading text-center">';
        $html .='       <h4>'.$row['nama_fasilitas'].'</h4>';
        $html .='       </div>';
        $html .='       <div class="panel-body">';
        $html .='           <p><img src="'.base_url('/uploads/'.$row['foto_fasilitas']).'" class="img-thumbnail" width="400px"></p>';
        $html .='           <p>'.$row['deskripsi_fasilitas'].'</p>';
        $html .='       </div>';
        $html .='   </div>';
        $html .='</div>';
    }
    echo $html; 
}
?>

</div>

<?=$this->endSection();?>