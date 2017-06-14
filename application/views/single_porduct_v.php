<!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->
	

<div id="wrapper">
	
	<section id="project-single" class="page">
	
		<div id="content">

			<section class="section">

				<div class="container">

					<div class="row">
						
						<div class="col-xs-12">
							
							<div class="project-single-entry">

								<div class="project-page-header">
									
									<h1 class="project-title"><?php echo $signle[0]['name'];?></h1>
									
									<ul class="project-nav clearfix">
										
										<li><a class="all-projects" href="<?php echo base_url();?>#folio">All Projects</a></li>
										
									</ul><!--/ .project-nav-->
									
								</div><!--/ .folio-page-header-->

								<div class="image-slider">
									
									<ul data-timeout="5000">
										<li><img src="<?php echo base_url()."images/portfolio/".$signle[0]['img'];?>" alt="" /></li>
										<li><img src="<?php echo base_url()."images/portfolio/".$signle[0]['img2'];?>" alt="" /></li>
										<li><img src="<?php echo base_url()."images/portfolio/".$signle[0]['img3'];?>" alt="" /></li>
									</ul>
									
								</div><!--/ .image-slider-->								

							</div><!--/ .folio-single-entry-->	
							
						</div>
						
					</div><!--/ .row-->
					
					<div class="row">
						
						<div class="col-sm-3">
							
							<ul class="project-meta">
								
								<li>
									<span class="project-meta-title">Fish Type : </span>
									<div class="project-meta-date"><?php echo $signle[0]['class'];?> </div>
								</li>
								<!--
								<li>
									<span class="project-meta-title">Client</span>
									<div class="project-meta-date">Vivamus mattis</div>
								</li>
								-->
								
								
							</ul><!--/ .project-meta-->
							
							
							
						</div>	
						
						<div class="col-sm-9">
							
							<h2 class="content-title">About this Fish</h2>
							
							<p>
                                <?php echo $signle[0]['desc'];?>
							</p>	
							<!-- 
							<div class="quotes align-center">
								<blockquote class="type-1">
									<p>it's the best product i have get from comapeche S.A. Company and realy it's great .</p>
								</blockquote>
								<p class="quote-author"><span>Jack Black</span></p>
							</div>
							-->
							
							
						</div>
						
					</div><!--/ .row-->
					
					<div class="row">
						<div class="col-xs-12">
							<div class="divider"></div>
						</div>	
					</div><!--/ .row-->
					
					<div class="row">
						
						<div class="col-xs-12">
							
							<h2 class="content-title">Related Products</h2>
							
							<div class="project-similar">
								<ul>
								 
									 <?php  foreach($related_products as $row) {?>
									<li>
										<div class="work-item">
											<img src='<?php echo base_url()."images/portfolio/".$row['img']; ?>' alt="" />
											<div class="image-extra">
												<div class="extra-content">
													<div class="inner-extra">
														<a class="single-image link-icon" href="<?php echo base_url('single_product')."/".$row['id'];?>"></a>
														<a class="single-image plus-icon" data-fancybox-group="related" href="<?php echo base_url()."images/portfolio/".$row['img']; ?>"></a>	
													</div><!--/ .inner-extra-->	
												</div><!--/ .extra-content-->
											</div><!--/ .image-extra-->	
										</div><!--/ .work-item-->
									</li>
									<?php } ?>
								</ul>
							</div><!--/ .project-similar-->
							
						</div>
						
					</div><!--/ .row-->

				</div><!--/ .container-->
				
			</section><!--/ .section-->
		
		</div><!--/ #content-->
		
	</section><!--/ .section-->
	
	
	<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
	
	
	<footer id="footer">

		<div class="bottom-footer clearfix">

			<div class="container">
				
				<div class="row">
					
					<div class="col-sm-6">
						
						<div class="copyright">
							Copyright © 2013. <a target="_blank" href="#">Comapeche S.A.</a>. All rights reserved
						</div><!--/ .cppyright-->
						
					</div>
					
					<div class="col-sm-3 col-sm-offset-3">
						
						<div class="developed">
							Developed by <a target="_blank" href="http://www.idev-inc.com/">iDev inc</a>
						</div><!--/ .developed-->
						
					</div>
					
				</div><!--/ .row-->
				
			</div><!--/ .container-->

		</div><!--/ .bottom-footer-->	
		
	</footer><!--/ #footer-->

	
	<!-- - - - - - - - - - - - - end Footer - - - - - - - - - - - - - - - -->
	
	
</div><!--/ #wrapper-->


<!-- - - - - - - - - - - - - end Wrapper - - - - - - - - - - - - - - - -->
