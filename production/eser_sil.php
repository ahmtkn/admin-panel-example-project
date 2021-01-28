<?php

	$eserSil=$db->prepare('delete from eserler where id=?');
	$eserDelete=$eserSil->execute([
		$_GET['id']
	]);
	
	
	
?>

	<?php if($eserDelete){ ?>
			<br><br>
			<h3><a href="?sayfa=select">Geri dön</a></h3>
		
		<?php } ?>