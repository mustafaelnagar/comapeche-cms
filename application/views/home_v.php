<!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->
	

<div id="wrapper">
	
	<section id="home" class="page">
		
		<section class="section padding-off">
			
			<div id="layerslider-container">
				
				<div id="layerslider">


	<!-------------------------------------video slide ----------------------->
				
					<!-------------------------------------//video slide ----------------------->
					
					
					<?php

//echo "  test what we have at the slidr $slider \n and what we have at record 0  $slider[0] $slider[1] $slider[2]&  \n the size".sizeof($slider)."<br/>";					
					?>
<?php foreach($slider as $slide){ ?>
					<div class="ls-layer" style="slidedirection: <?php echo $slide['dir'];?>; durationin: 1500; durationout: 1500; easingin: easeInOutQuint; timeshift: -500;">
						
						<img alt="" class="ls-bg" src="<?php echo base_url().$slide['img'];?>">
						
						<h1 class="ls-s2 align-center" style="top: 43%; left: 130px; slidedirection : <?php echo $slide['dir'];?>; slideoutdirection : fade; scaleout : 0.75; durationin : 2000; durationout : 1000; easingin : easeInOutQuint; easingout : easeInOutQuint;">
							<?php  echo $slide['txt'];?>
						</h1>
						 
						
					</div><!--/ .ls-layer-->
<?php } ?>
				</div><!--/ #layerslider-->

			</div><!--/ #layerslider-container-->	

			<ul class="keydown">
				<li class="up"></li>
				<li class="left"></li>
				<li class="down"></li>
				<li class="right"></li>
			</ul><!--/ .keydown-->	
			
		</section><!--/ .section-->
		
	</section><!--/ .page-->
	
	<section id="about" class="page">
		
		<section class="section">

			<div class="container">

				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="slogan align-center opacity">
							<h1><?php echo $about[0]['title']; ?></h1>
							<h2><?php echo $about[0]['details']; ?></h2>	
						</hgroup>	
					</div>

				</div><!--/ .row-->

				<div class="row">

					<div class="col-md-7 opacity">
						<p>
							<img src="<?php echo base_url().$about[0]['img']; ?>" alt="" />
						</p>
					</div><!--/ .col-md-6-->

					<div class="col-md-5">

						<p class="opacity">
						
						<?php echo $about[0]['list_intro']; ?>
							
					  </p>

						<ul class="list circle-list opacity">
                             <?php
                             #echo the  list of ervices we have 
                              foreach($listabout as $row){
							  echo "<li>$row[title]</li>";
							  }
							 ?>    
							
							 

						</ul><!--/ .list-->

					</div><!--/ .col-md-5-->

				</div><!--/ .row-->

			</div><!--/ .container-->	
			
		</section><!--/ .section-->
		
		<section class="section parallax parallax-bg-1 bg-turquoise-color">

			<div class="full-bg-image"></div>

			<div class="container">

				<div class="row">
					
					<div class="col-xs-12">
						
						<ul class="quotes opacity" data-timeout="6000">
	<!---
							<li class="align-center">
								<blockquote class="quote-text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut aliquet leo sapien bibendum Aenean sit amet tempor augue</p>
								</blockquote>
								<div class="quote-image"><img alt="Jack Black" src="http://placehold.it/70x70"></div>
								<div class="quote-author"><span>Jack Black, Web Designer</span></div>
							</li>

		-->				 
<?php 
		               foreach($testo as $row){
					   echo "
					   				<li class='align-center'>
								<blockquote class='quote-text'>
									<p> $row[qutoe]</p>
								</blockquote>
								<div class='quote-image'><img alt='Jack Black' src='".base_url()."$row[img]' ></div>
								<div class='quote-author'><span>$row[auther]</span></div>
							</li>

					   ";
					   }
?>		
		</ul><!--/ .quotes-->
						
					</div>
					
				</div><!--/ .row-->

			</div><!--/ .container-->

		</section><!--/ .section-->
		
	</section><!--/ .section-->
	
	<section id="team" class="page">
		
		<section class="section bg-gray-color">
			
			<div class="container">

				<div class="row">

					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>NOTRE MEILLEUR 3</h1>
							<h2>Nous avons la qualité Spécialement Ces 3 </h2>	
						</hgroup>			
					</div>
					
				</div><!--/ .row-->

			</div><!--/ .container-->	
			
			<section class="team-member">

				<div class="container">

					<div class="row">

						<div class="col-xs-12">
							
							<div class="team-contents clearfix">
							<?php 
                             foreach($best as $row){
                            echo "
															<article class='scale'>

									<div class='contents clearfix'>

										<div class='team-info'>

											<div class='team-image'>
												<a class='single-image team-plus-icon' href='#'><img src='".base_url().$row['img']."' alt='' /></a>
											</div>

											<hgroup class='team-group'>
												<h2 class='team-title'>".$row['headline']."</h2>
												<h5 class='team-position'>".$row['subheadline']."</h5>
											</hgroup>

										</div><!--/ .team-info-->

										<div class='team-content'>
											<div class='team-entry'>

												<p>
													
													".$row['desc']."
											  </p>	

												

											</div><!--/ .team-entry-->
										</div><!--/ .team-content-->				

									</div><!--/ .contents-->

								</article>

							
							";
							 }
							 ?>
							</div><!--/ .team-contents-->
							
						</div>

					</div><!--/ .row-->

				</div><!--/ .container-->

			</section><!--/ .team-member-->		
					
		</section><!--/ .section-->
		
		<section class="section parallax parallax-bg-2">

			<div class="full-bg-image"></div>
			<div class="parallax-overlay"></div>

			<div class="container">

				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h2><?php echo $numbers[0]['name']; #headline ?> </h2>
						</hgroup>		
					</div>
					
				</div><!--/ .row-->

				<div class="row">
					
					<div class="col-xs-12">
						
						<div class="counter-box">

							<div data-from="0" data-to="<?php echo $numbers[1]['nu']; # ?>" data-speed="1300" class="counter opacity">
								<span class="count"></span>
								<h4 class="details"><?php echo $numbers[1]['name']; #name ?></h4>
							</div><!--/ .counter-->	

							<div data-from="0" data-to="<?php echo $numbers[2]['nu']; # ?>" data-speed="1300" class="counter opacity">
								<span class="count"></span>
								<h4 class="details"><?php echo $numbers[2]['name']; #name ?></h4>
							</div><!--/ .counter-->	

							<div data-from="0" data-to="<?php echo $numbers[3]['nu']; # ?>" data-speed="1300" class="counter opacity">
								<span class="count"></span>
								<h4 class="details"><?php echo $numbers[3]['name']; #name ?></h4>
							</div><!--/ .counter-->	

						 		<div data-from="0" data-to="<?php echo $numbers[4]['nu']; # ?>" data-speed="1300" class="counter opacity">
								<span class="count"></span>
								<h4 class="details"><?php echo $numbers[4]['name']; #name ?></h4>
							</div><!--/ .counter-->	

						 	

						</div><!--/ .counter-box-->	
						
					</div>

				</div><!--/ .row-->

			</div><!--/ .container-->

		</section><!--/ .section-->
		
	</section><!--/ .page-->
	
	<section id="folio" class="page">
		
		<section class="section padding-bottom-off">
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>nos produits</h1>
						</hgroup>							
					</div>
					
				</div><!--/ .row-->
				
				<div class="row">
					
					<div class="col-xs-12">
						<ul id="portfolio-filter" class="portfolio-filter opacity">
						
						<!--------------------------filters----------------------------->
						<!---  the only section that we should append the foldr path --> 
							<li class="filter active" data-filter="all">All</li>
							
						 <?php
						         foreach($filters as $filter){
                                 
								    echo"<li class='filter' data-filter='$filter[the_class]'>$filter[the_class]</li>"; 		
                                     
									 }								
						 ?>
						<!-------------------------/filters----------------------------->
						</ul><!--/ #portfolio-filter -->		
					</div>
					
				</div><!--/ .row-->
					
			</div><!--/ .container-->

			<ul id="portfolio-items" class="portfolio-items">

			 
<!---------------------------------------Portfolio -------------------------------------------------->
<?php foreach($products as $row){ ?>
				<li class="<?php echo $row['class']; ?> mix mix_all opacity2x">
					
					<div class="work-item">
						<img src="<?php echo base_url()."images/portfolio/".$row['img']; ?>" alt="" />
						<div class="image-extra">
							<div class="extra-content">
								<div class="inner-extra">
									<h2 class="extra-title"><?php echo $row['name']; ?></h2>
									<h6 class="extra-category"><?php echo $row['class']; ?></h6>
									<a class="single-image link-icon" href="<?php echo base_url('single_product')."/".$row['id'];?>"></a>
									<a class="single-image plus-icon" data-fancybox-group="folio" href="<?php echo base_url()."images/portfolio/".$row['img']; ?>"></a>
								</div><!--/ .inner-extra-->	
							</div><!--/ .extra-content-->
						</div><!--/ .image-extra-->
					</div><!--/ .work-item-->

				</li>					
<?php  } // end for each  ?>
<!---------------------------------------//Portfolio -------------------------------------------------->
				
			</ul><!--/ .portfolio-items-->
			
		</section><!--/ .section-->
		
	</section><!--/ .page-->
	
	<section id="services" class="page">
		
		<section class="section">
			
			<div class="container">

				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>Services</h1>
							<h2>We are more than happy to offer you</h2>	
						</hgroup>					
					</div>
					
				</div><!--/ .row-->
				
				<div class="row">
					
					<div class="col-xs-12">
						
						<div class="flexslider opacity">

							<ul class="slides">
           <!------------------------------------------------------1------------------------------------------------------------------------->			
			      <li data-icon="icon-group" data-title="<?php echo $services[0]['title']; ?>">
									<p>
                                        <?php echo $services[0]['details']; ?>	.
										</p>
								</li>
								
								
             <!---------------------------------------------------2---------------------------------------------------------------------------->
								<li data-icon="icon-foursquare" data-title="<?php echo $services[1]['title']; ?>">
									<p>
										
                                   <?php echo $services[1]['details']; ?> .

								  </p>					
								</li>
           <!------------------------------------------------------3------------------------------------------------------------------------->											
								<li data-icon="icon-globe" data-title="<?php echo $services[2]['title']; ?>">
									<p>
										<?php echo $services[2]['details']; ?> .
								  </p>		
								</li>
           <!------------------------------------------------------4------------------------------------------------------------------------->											
								<li data-icon="icon-thumbs-up-alt" data-title="<?php echo $services[3]['title']; ?>">
									<p>
										<?php echo $services[3]['details']; ?>.
								  </p>							
								</li>
           <!------------------------------------------------------5------------------------------------------------------------------------->											
								<li data-icon="icon-megaphone-3" data-title="<?php echo $services[4]['title']; ?>">
									<p>
								 
										<?php echo $services[4]['details']; ?>
										 
								  </p>							
								</li>
								
           <!-------------------------------------------------------6------------------------------------------------------------------------>											
								<li data-icon="icon-search" data-title="<?php echo $services[5]['title']; ?>">
									<p>
										<?php echo $services[5]['details']; ?>.
										
								  </p>							
								</li>
           <!--------------------------------------------------------7----------------------------------------------------------------------->											
								<li data-icon="icon-comment-6" data-title="<?php echo $services[6]['title']; ?>">
									<p>
										<?php echo $services[6]['details']; ?> .
								  </p>							
								</li>
           <!---------------------------------------------------------End services List---------------------------------------------------------------------->											
							</ul>

						</div><!--/ .flexslider-->	

					</div>

				</div><!--/ .row-->

			</div><!--/ .container-->
			
		</section><!--/ .section-->
		
		<section class="section parallax mobile-video-image">
			
			<div class="full-bg-image"></div>
			<div class="parallax-overlay"></div>
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-xs-12">
						
						<div class="video-full-entry align-center">

							<h1 class="video-title opacity">Comapeche S.A. Premium Products</h1>

													

					  </div><!--/ .video-full-entry-->

					</div>
					
				</div><!--/ .row-->
				
			</div><!--/ .container-->
			
		</section><!--/ .section-->
		
	</section><!--/ .page-->
	
	<section id="blog" class="page">
		
		<section class="section bg-gray-color">
			
			<div class="container">

				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>Latest From the Blog</h1>
							<h2>Keep on track of latest news and updates</h2>	
						</hgroup>						
					</div>
					
				</div><!--/ .row-->

				<div class="row">
					
					<div class="col-sm-6 col-lg-4 slideRight">

						<article class="entry">

							<div class="entry-image">
								<div class="work-item">
									<img src="images/blog/Thumbnails/1.jpg" alt="" />
									<div class="image-extra">
										<div class="extra-content">
											<div class="inner-extra">
												<a class="single-image link-icon" href="blog-single.html"></a>
												<a class="single-image plus-icon" data-fancybox-group="blog" href="images/blog/latest-blog-1.jpg"></a>	
											</div><!--/ .inner-extra-->	
										</div><!--/ .extra-content-->
									</div><!--/ .image-extra-->	
								</div><!--/ .work-item-->	
							</div><!--/ .entry-image-->

							<div class="entry-meta">
								<span class="date"><a href="#">15.11.2013</a></span>
								<span class="comments">0 Comments</span>
							</div><!--/ .entry-meta-->

							<h2 class="entry-title">
								<a href="blog-single.html">Post With Image</a>
							</h2><!--/ .entry-title-->

							<div class="entry-body">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. Ut posuere 
									neque in molestie gravida. Integer eu feugiat neque, elementum posuere purus.
								</p>
							</div><!--/ .entry-body-->

						</article><!--/ .entry-->

					</div>

					<div class="col-sm-6 col-lg-4 slideUp">

						<article class="entry">

							<div class="entry-image">
								<div class="work-item">
									<img src="images/blog/Thumbnails/2.jpg" alt="" />
									<div class="image-extra">
										<div class="extra-content">
											<div class="inner-extra">
												<a class="single-image link-icon" href="blog-single.html"></a>
												<a class="single-image plus-icon" data-fancybox-group="blog" href="images/blog/latest-blog-2.jpg"></a>	
											</div><!--/ .inner-extra-->	
										</div><!--/ .extra-content-->
									</div><!--/ .image-extra-->	
								</div><!--/ .work-item-->	
							</div><!--/ .entry-image-->

							<div class="entry-meta">
								<span class="date"><a href="#">15.11.2013</a></span>
								<span class="comments">0 Comments</span>
							</div><!--/ .entry-meta-->

							<h2 class="entry-title">
								<a href="blog-single.html">Gallery Post Format</a>
							</h2><!--/ .entry-title-->

							<div class="entry-body">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. Ut posuere 
									neque in molestie gravida. Integer eu feugiat neque, elementum posuere purus.
								</p>
							</div><!--/ .entry-body-->

						</article><!--/ .entry-->					

					</div>

					<div class="col-sm-6 col-lg-4 slideLeft">

						<article class="entry">

							<div class="entry-image">
								<div class="work-item">
									<img src="images/blog/Thumbnails/3.jpg" alt="" />
									<div class="image-extra">
										<div class="extra-content">
											<div class="inner-extra">
												<a class="single-image link-icon" href="blog-single.html"></a>
												<a class="single-image plus-icon" data-fancybox-group="blog" href="images/blog/latest-blog-3.jpg"></a>	
											</div><!--/ .inner-extra-->	
										</div><!--/ .extra-content-->
									</div><!--/ .image-extra-->	
								</div><!--/ .work-item-->	
							</div><!--/ .entry-image-->

							<div class="entry-meta">
								<span class="date"><a href="#">15.11.2013</a></span>
								<span class="comments">0 Comments</span>
							</div><!--/ .entry-meta-->

							<h2 class="entry-title">
								<a href="blog-single.html">Video Post Format</a>
							</h2><!--/ .entry-title-->

							<div class="entry-body">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ut lacus at velit consequat sodales. Ut posuere 
									neque in molestie gravida. Integer eu feugiat neque, elementum posuere purus.
								</p>
							</div><!--/ .entry-body-->

						</article><!--/ .entry-->

					</div>
					
				</div><!--/ .row-->
				
				<div class="col-xs-12">
					<div class="align-center opacity">
				
				
					</div>
				</div>
				
			</div><!--/ .container-->	
			
		</section><!--/ .section-->

		<section class="section parallax parallax-bg-3 bg-dark-color">

			<div class="full-bg-image"></div>
			<div class="parallax-overlay"></div>
			
			<div class="container">

				<div class="row">
					<div class="col-xs-12">
						<div class="tweet opacity" data-timeout="6000"></div>
					</div>
				</div><!--/ .row-->

			</div><!--/ .container-->

		</section><!--/ .section-->
		
		<section class="section border">

			<div class="container">

				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h2>Our Clients we cooperate with</h2>	
						</hgroup>			
					</div>
					
				</div><!--/ .row-->

				<div class="row">
					
					<div class="col-xs-12">
						<ul class="clients-items">
						
						
                      <?php 
					   foreach($logos as $log ){
					   echo "<li class='opacity2x'><a href='#'><img src='".base_url().$log->logo."' alt=''  width='140px'/></a></li>";
					   }
					   ?>						 
						</ul><!--/ .clients-items-->
					</div>

				</div><!--/ .row-->

			</div><!--/ .container-->

		</section><!--/ .section-->
		
	</section><!--/ .page-->
	
	
	
	<section id="contacts" class="page">
		
		<section class="section padding-bottom-off">
			
			<div class="container">

				<div class="row">
					
					<div class="col-xs-12">
						<hgroup class="section-title align-center opacity">
							<h1>Contact Us</h1>
							<h2>We are looking forward to hear from you</h2>	
						</hgroup>		
					</div>
					
				</div><!--/ .row-->

			</div><!--/ .container-->
			
		</section><!--/ .section-->
		
		<section class="section padding-off">
			<div style='width:100%'>
			<?php //echo $contact[0]['gmaps'];?>
			</div>
		</section><!--/ .section-->

	</section><!--/ .page-->
	
	
	<!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
	
	
	<footer id="footer">
		
		<section class="section parallax parallax-bg-4">

			<div class="full-bg-image"></div>

			<div class="container">

				<div class="row">

					<div class="col-md-6 opacity">

						<form class="contact-form" method="post" action="/">

							<p class="input-block">
								<input type="text" name="name" id="name" placeholder="Name *" />
							</p>

							<p class="input-block">
								<input type="email" name="email" id="email" placeholder="Email *" />
							</p>

							<p class="input-block">
								<input type="url" name="website" id="url" placeholder="Website" />
							</p>

							<p class="input-block">
								<textarea name="message" id="message" placeholder="Message *"></textarea>	
							</p>

							<p class="input-block">
								<button class="button turquoise submit" type="submit" id="submit"><i class="icon-paper-plane-2"></i></button>
							</p>

						</form><!--/ .contact-form-->	

					</div>

					<div class="col-md-6">
						
						<div class="widget widget_text opacity">
							
							<p>
							<?php echo $contact[0]['details'];?>
							</p>	
							
						</div><!--/ .widget-->
						
						<div class="widget widget_contacts opacity">
							
							<ul class="contact-details">
								<li><?php echo $contact[0]['title'];?></li>
								<li>Phone: <?php echo $contact[0]['phone'];?></li>
								<li>Email:<?php echo $meta[0]['sitemail'];?></li>
							</ul><!--/ .contact-details-->
							
						</div><!--/ .widget-->
						
						<div class="widget widget_social opacity">
							
							<ul class="social-icons">
								<li class="twitter"><a href="<?php echo $social[3]['url']; ?>"><i class="icon-twitter"></i>Twitter</a></li>
								<li class="facebook"><a href="<?php echo $social[0]['url']; ?>"><i class="icon-facebook"></i>Facebook</a></li>
								
								
								
								<li class="gplus"><a href="<?php echo $social[1]['url']; ?>"><i class="icon-gplus"></i>Gplus</a></li>
								<li class="youtube"><a href="<?php echo $social[4]['url']; ?>"><i class="icon-youtube"></i>Youtube</a></li>
								<!--
								<li class="pinterest"><a href="#"><i class="icon-pinterest-circled"></i>Pinterest</a></li>
								<li class="instagram"><a href="#"><i class="icon-instagramm"></i>Instagram</a></li>
								<li class="dribbble"><a href="#"><i class="icon-dribbble"></i>Dribbble</a></li>
								<li class="linkedin"><a href="#"><i class="icon-linkedin"></i>LinkedIn</a></li>
								<li class="rss"><a href="#"><i class="icon-rss"></i>Rss</a></li>
								-->
							</ul><!--/ .social-icons-->
							
						</div><!--/ .widget-->
						
					</div>

				</div><!--/ .row-->

			</div><!--/ .container-->

		</section><!--/ .section-->	
		
		<div class="logo-in-footer">
			
			<div class="container">
				
				<div class="row">
					<div class="col-xs-12">
						<h1><a href="<?php echo base_url();?>"><img src="images/Logo.png" width="420" height="122" ></a></h1>
					</div>
				</div><!--/ .row-->
				
			</div><!--/ .container-->
			
		</div><!--/ .logo-in-footer-->

		<div class="bottom-footer clearfix">

			<div class="container">
				
				<div class="row">
					
					<div class="col-sm-6">
						
						<div class="copyright">
							Copyright ©  
							
							<?php
							//echo the current year #nego
							$this->load->helper('date');
							$datestring = "%Y";
                            $time = time();
							echo mdate($datestring, $time);
							?>
							. 
							<a target="_blank" href="#">Comapeche S.A.</a>. All rights reserved
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

