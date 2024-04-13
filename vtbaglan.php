<?php 
$baglanti=mysqli_connect('localhost','root','','randevu');
if(!$baglanti) {
echo "Veri tabanına bağlanılamadı ".mysqli_connect_error();

}

// mysqli_set_charset($baglanti,"uft");
?>