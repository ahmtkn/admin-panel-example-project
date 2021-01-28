<?php

	$sil=$db->prepare('delete from yazarlar where id=?');
	$delete=$sil->execute([
		$_GET['id']
	]);
	
	if($delete){
		
		$eserSil=$db->prepare('delete from eserler where yazar_id=?');
		$slash=$eserSil->execute([
			$_GET['id']
		]);	
	}






?>