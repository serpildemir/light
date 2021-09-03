<?php
require_once "baglanti.php";
/*
$baslik = "bu bir anasayfadır.";
$aciklama ="bu bir aciklamadır";
$insert = $db->prepare("INSERT INTO `haberler`(`baslik`,`aciklama`) VALUES (:baslik,:aciklama)");
$insert->bindParam(":baslik",$baslik, PDO::PARAM_STR);
$insert->bindValue(":aciklama",$aciklama, PDO::PARAM_STR);
if($insert->execute()){
	echo"basarıyla eklendi.";
}else {
	echo "hata oluştu.";
}*/
?>


<?php
$select = $db->prepare("select * from `haberler`");
if($select->execute()){

?>

	<table border="1" cellpadding="20">
		<tr>
			<th>ID</th>
		    <th>Başlık</th>
			<th>Açıklama</th>
			<th>İşlemler</th>

		</tr>
		<?php
		while($row = $select->fetch(PDO::FETCH_ASSOC)){
		?>
<tr>
			<td><?=$row["id"]?></td>
			<td><?=$row["baslik"]?></td>
			<td><?=$row["aciklama"]?></td>
			<td>GUNCELLE|SİL</th>

		</tr>
		<?php
		}
?>

	</table>
	<?php

}else{
	echo "hata var";
}

	?>
<?php
$select = $db->prepare("SELECT *FROM `haberler`ORDER BY `id`ASC");
if($select->execute()){



	?>

		<?php 

		while($row = $select->fetch(PDO::FETCH_ASSOC)){

		?>	

		<?php
		}
?>

		
		
		


	</table>
	<?php

}else{
	echo "hata var";
}

	?>

<?php
//where kullanarak listeden çekme

//LİSTELEME
$insert =$db->prepare("select * from `haberler` where `id`=1");
if($select->execute()){

	?>

		<?php 

		while ($row=$select->fetch(PDO::FETCH_ASSOC)) {
		?>	
<tr><!--
			<td><?=$row["id"]?></td>
			<td><?=$row["baslik"]?></td>
			<td><?=$row["aciklama"]?></td>
			<td>GUNCELLE/SİL</td>
-->
		</tr>
		<?php
		}
?>

	</table>
	<?php

}else{
	echo "hata var";
}


?>


<?php
 /*
$sil=$db->prepare("DELETE FROM `haberler` WHERE  `id`= :id");
$sil->bindValue(":id",2,PDO::PARAM_INT);
 if($sil->execute()){
 	echo "başarıyla silindi";
 }else{
 	echo "hata oluştu";
 }*/
?>






