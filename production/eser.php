
<?php
	
	$sorgu=$db->prepare('SELECT * FROM `eserler` where yazar_id=? ');
	$sorgu->execute([
		$_GET['id']
	]);
	$eserler=$sorgu->fetchAll(PDO::FETCH_ASSOC);
	
	$say=count($eserler);
	
	
	
	
?>
	<div class="col-md-6 col-sm-6  ">
			<?php if($say<=0){ ?>
				<h3> HİÇ BİR ESER BULUNAMDI</h3>

			<?php } ?>

				<div class="x_panel">
                  <div class="x_title">
                    <h2>Eser Listesi</h2>
                    <ul class="nav navbar-right panel_toolbox">
					<li><a class="collapse-link" href="?sayfa=select"><i class="fa fa-arrow-circle-left"></i></a>
                      </li>
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Eser Adı</th>
						  <th>Seçenekler</th>   
                        </tr>
                      </thead>
                      <tbody>
					  <?php foreach($eserler as $key=>$eser) {  ?>
                        <tr>
                          <td cope="row"><?php echo $key+1; ?> </td>
                          <td><?php echo $eser['ad'];?></td>
						  <td>
						  <a href="?sayfa=eser_sil&id=<?php  echo $eser['id']; ?>"><i class="fa fa-trash"></i></a> &nbsp
						  <a href="?sayfa=eser_guncelle&id=<?php echo $eser['id']; ?>"><i class="fa fa-edit"></i></a>
						  </td>
						  
                        </tr>
					
					  <?php  } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			


