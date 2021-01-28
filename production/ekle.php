<?php
	
	if(isset($_POST['submit'])){
		$eser=isset($_POST['eser_adi']) ? $_POST['eser_adi']: '';
		
		if(!$eser){
			echo '<br><br>';
			echo 'Eser Adı Girin';
		}else{
			$eserEkle=$db->prepare('insert into eserler set
				ad=?,
				yazar_id=?
			');
			$newEser=$eserEkle->execute([
				$eser,
				$_GET['id']
			]);
			if($newEser){
				echo '<br><br>';
				echo '<h3>Eser Başarıyla Eklendi</h3>';
			}else{
				echo '<br><br>';
				echo '<h3>Eser Ekleme İşlemi Başarısız</h3>';
			}
		}
	
	}


?>


<div class="row">
              <!-- form input mask -->
              <div class="col-md-6 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Yeni Eser Ekle</h2>
                    <ul class="nav navbar-right panel_toolbox">
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
                    <br />
                    <form class="form-horizontal form-label-left" action="" method="post">

                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Eser Adı</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'" name="eser_adi">
                          <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                        </div>
                      </div> 
					<div class="ln_solid"></div>

                      <div class="form-group row">
                        <div class="col-md-9 offset-md-3">
						<input type='hidden' name='cancel'>
						<a href="?sayfa=select" class="btn btn-primary">İptal</a>
						<input type='hidden' name='submit'>
                         <button type="submit" class="btn btn-success">Ekle</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
