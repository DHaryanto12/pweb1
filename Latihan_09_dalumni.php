<?php
include 'Latihan_09_config.php';

if(isset($_GET['id'])){
    $id=$GET['id'];
    $sql="DELETE FROM alumni WHERE id=$id";

    if($coon->query($sql)===TRUE){
        echo "Data Berhasil Dihapus";
        header("Location: Latihan_09_index.php?menu=alumni");
    }else{
        echo "Eror Deleting Record:".$coon->eror;
    }
    $coon->close();
}
?>