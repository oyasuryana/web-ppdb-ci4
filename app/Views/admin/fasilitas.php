<?=$this->extend('admin/dashboard');?>
<?=$this->section('isi_web');?>

<?=$judulHalaman;?>
<?=$intro;?>
<?=$tombolTambah;?>


<?php
if(isset($daftarFasilitas)){
    $html=null;
    foreach($daftarFasilitas as $row){


    $html .= '<div class="media media-success">';    
    $html .= '   <div class="media-left">';
    $html .= '       <img src="'.base_url('uploads/'.$row['foto_fasilitas']).'" class="media-object" style="width:180px">';
    $html .= '   </div>';
    $html .= '   <div class="media-body">';
    $html .= '<p>'.$row['deskripsi_fasilitas'].'</p>';
    $html .= ' <a href="'.base_url('/edit-fasilitas/'.$row['id_fasilitas']).'"><span class="glyphicon glyphicon-pencil" title="Edit"></span></a>';
    $html .= ' <a href="'.base_url('/hapus-fasilitas/'.$row['id_fasilitas']).'"><span class="glyphicon glyphicon-trash" title="Hapus"></span></a>';
    $html .= '</div>';
    $html .= '</div>';    

    }
    echo $html;
}
?>


<?=$this->endSection();?>