<?php
	$limit=9;
	$baslangic=isset($_GET['baslangic'])&& is_numeric($_GET['baslangic'])&& $_GET['baslangic'] > -1 ? $_GET['baslangic']: 0 ;
	$sorgu=$db->query('select * from yazarlar order by id asc limit ' . $baslangic . ',' . $limit)->fetchAll(PDO::FETCH_ASSOC);
	
	if(!$sorgu){
		header('Loaction:?sayfa=select&baslangic=' . ($baslangic-$limit) . '&son=1');
	}
	echo '<br><br>';
	if($baslangic > 0){
		echo '<a href="?sayfa=select&baslangic=' . ($baslangic-$limit) . '">Önceki Sayfa</a>'; 
	}
	echo ' ' ;
	
	if(!isset($_GET['son'])){
		echo '<a href="?sayfa=select&baslangic=' . ($baslangic+$limit) . '">Sonraki Sayfa</a>';
	}
	

?>	
	
	
	<div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Yazar Listesi </h2>
                    <ul class="nav navbar-right panel_toolbox">
					<li><a href="?sayfa=insert"><i class="fa fa-plus"></i></a></li>
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
                          <th>Yazar Adı</th>
                          <th>Seçenekler</th>   
                        </tr>
                      </thead>
                      <tbody>
					  <?php foreach($sorgu as $veri) { ?>
                        <tr>
                          <th scope="row"><?php echo $veri['id'];?></th>
                          <td><?php echo $veri['ad'];?></td>
                          <td>
						  <a href="?sayfa=eser&id=<?php echo $veri['id']; ?>"><i class="fa fa-chevron-circle-right"></i></a> &nbsp 
						  <a href="?sayfa=create&id=<?php echo $veri['id']; ?>"><i class="fa fa-plus"></i></a> &nbsp
						  <a href="?sayfa=delete&id=<?php echo $veri['id']; ?>"><i class="fa fa-user-times"></i></a> &nbsp
						  <a href="?sayfa=update&id=<?php echo $veri['id'] ;?>"><i class="fa fa-edit"></i></a>
						  </td>
                        </tr>
					  <?php }?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>








