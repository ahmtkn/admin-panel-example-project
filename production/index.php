	 <?php include 'header.php'; ?>

	 <?php include 'sidebar.php'; ?>

	 <?php include 'topmenu.php';?>
				
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Admin Panel | <small>Panele Hoşgeldiniz</small></h3>
                            <hr>
						</div>

                        <div class="x_content">
                            <p>Sitenizin içeriğini yandaki menüler aracılığı ile yönetebilirsiniz</p>
                        </div>
									<!-- end form for validations -->
								</div>
							</div> 
<br><br>
							
							<p>						
								<?php
									
									require_once 'data.php';
									
									if(!isset($_GET['sayfa'])){
										$_GET['sayfa']='index';
									}
									
										
									switch($_GET['sayfa']){
										
										case 'select':
											require_once 'select.php';
										break;
										
										case 'eser':
											require_once 'eser.php';
										break;
										
										case 'insert':
											require_once 'insert.php';
										break;
										
										case 'create':
											require_once 'ekle.php';
										break;
										
										case 'delete':
											require_once 'delete.php';
										break;
										
										case 'update':
											require_once 'update.php';
										break;
										
										case 'eser_sil':
											require_once 'eser_sil.php';
										break;
										
										case 'eser_guncelle':
											require_once 'eser_guncelle.php';
										break;
										
										
									}
										
								?>	
							</p>						

			</div>






		
	<?php include 'footer.php'; ?>
			