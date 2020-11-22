<?php
function hitungharga($nama){
    $jumlah = 0;

    for($i=0;$i<=strlen($nama);$i++){
        $jumlah++;
    }
    echo "nama = ".$nama;
        ?><br><?php
    echo "harga = Rp";

    if($jumlah>=1&&$jumlah<=10){
        echo $jumlah * 300;
    }elseif($jumlah>10&&$jumlah<21){
        echo $jumlah * 500;
    }else{
        echo $jumlah * 700;
    }
}
?>
<form method="post">
    <input type="input" id="nama" name="nama">
    <button type="submit">Cek</button>
</form>
<?php
    if($_POST){
        $nama = $_POST['nama'];
        hitungharga($nama);
    }
?>