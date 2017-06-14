


<?php if($single_product!="true") {?>

<section id="content">
				<section class="pt30 pb30"> 
					<div class="container clearfix">
						<div class="row">
							<nav id="filter" class="span12 text-center">
								<ul>
								<!-- classes -->
									<li><a href="#" class="current btn btn-sm" data-filter="*">ALL</a></li>
									<!--- 
									<li><a href="#"  class="btn btn-sm" data-filter=".graphics" >Graphics</a></li>
									-->
									<?php 
									foreach($classes as $filter){
									
									
									echo "<li><a href='#'  class='btn btn-sm' data-filter='.".$filter['the_class']." '>".$filter['the_class']."</a></li>";
									
									}
									?>
								</ul>
							</nav>
							
							<!-- Portfolio record -->
							<div class="portfolio-items  isotopeWrapper clearfix imgHover" id="3">
								
								
						 
								
								<!--dynamic portfolio item --> 
						<div class="row">
						<!--new table-->
						<table style="width:100%"> <!--=-->
						
								<?php
								
                                 $count=1;
						#start the first row
                                 echo "<tr>";
								 foreach($data as $row){  
				
						           #every  row is  a new cell=td
								 	echo "<td>";
								
								//echo "count = ".$count."</span>"; 
								################################## echo new portfolio item #####################################
								
		                        ?>
								<article class="col-sm-4 isotopeItem <?php echo $row['class']; ?>">
									<section class="imgWrapper">
										<img alt="" src="<?php echo site_url().'images/portfolio/'.$row['img']; ?>" class="img-responsive imgBorder">
								 
									</section>
									<div class="mediaHover">
										<div class="mask"></div>
										<div class="iconLinks"> 
											
											<a href="<?php echo 'single_product'.'/'.$row['id']; ?>" title="link">
												<i class="icon-link iconRounded iconMedium"></i>
												<span>link</span>
											</a> 
										 
										</div>
									</div>
									<section class="boxContent">
										<h3><?php echo $row['name']; ?></h3>
										<p> 
										<?php echo "simple text would be updated simple text would be updated \n";//echo $row['desc']; ?>
										
											<a href="<?php echo 'single_product'.'/'.$row['id']; ?>" class="moreLink">&rarr; Read more</a>
										</p>
									</section>
								</article>

								 <?php								
								
								################################### end portfolio iTem #########################################
								$count=$count+1;                              
								#close each cell 
                              echo "</td>";

								if($count==4){
								//echo"					new Row :XXX "; #<!--end row-->
									echo "</tr>";//close the existing row
									echo "<tr>";//lets start another row that mean at all cases We have opened one 
                                $count=1;#re intializing 
                                   }#end of the count 
								
								}#//end the for each

								#end the row
								echo "</tr>";
								echo "</table>";
								  ?>
								<!-- end portfolio item -->
								
							</div>
						</section>
					
					</section>
				</section>
				<?php }else{
				//end the grid and start to view single product?>
			 
				
				<?php //echo "test"; ?>
					<!-- ======================================= content ======================================= -->

<?php		
		foreach($data as $data){
     $name= $data['name'];
	$desc= $data['desc'];
	 $img= $data['img'];
	 
	// echo "test path ".$img."<br>";
	 
	?>		

<!--------------------------------------------------------------------------------------------------------------------------------->




		<!--------------------------------------------------------------------------------------------------------------------------------->
	<section id="portfolio">
			<header class="page-header">
			
				<div class="container">
					<div class="row">

						<div class="col-xs-2 col-sm-2 col-md-1">
							<a href="javascript:history.go(-1)" class="btn btn-sm btn-inverse"><i class="icon-left-open-mini"></i>العودة</a>
						</div>  
						<div class="col-xs-10 col-sm-5 col-md-6 projectTitle">
							<h1>مشاهدة المشروع  <?php echo $name;?></h1>
							<p></p>
						</div>
						<!--
						<div class="col-sm-5 hidden-xs">
							<ul id="navTrail">
								<li><a href="index.html">Home</a></li>
								<li><a href="portfolio-masonery.html">Portfolio</a></li>
								<li><a href="portfolio-project-image.html">Single project fullwidth</a></li>
								<li id="navTrailLast">Full width image project</li>
							</ul>
						</div>
						-->
					</div>
				</div>
			</header>
			<section id="content" class="mt30">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<img src="<?php echo "../".$img;?>"  class="img-responsive mb30"/>
							<!--<img src="images/portfolio/img-fullwidth-2.jpg" alt="FAT CATZ premium website template" class="img-responsive mb30"/>-->
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<h2><?php echo $name;?> </h2>
							<p><?php echo $desc;?></p>
						</div>
						<!--
						
						
						-->
						<div class="col-md-4">

							<div id="shareme" data-url="http://little-neko.com" data-text="Check out FAT CATZ, a great Bootstrap 3 One page template"> </div>
							<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style addthis_32x32_style">

<a class="addthis_button_preferred_1"></a>
<a class="addthis_button_preferred_2"></a>
<a class="addthis_button_preferred_3"></a>
<a class="addthis_button_preferred_4"></a>
<a class="addthis_button_compact"></a>

<!--
<a class="addthis_button_tweet" tw:url="THE URL"></a>
-->
<a class="addthis_counter addthis_bubble_style"></a>
</div>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-534bb07b32766edd"></script>
<script type="text/javascript">
var addthis_share = {
    url: "test MustafaTHE URL"
};
</script>
<!-- AddThis Button END -->
						</div>
						
					</div>
				</div>

				

			</div>
		</section>
	
	 			<?php }//end foreach?>
				<?php }//end else?>