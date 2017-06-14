<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">services List</h1>	 
				
			 
					
			 <div class="grid_12">
						
						<table id="example" class="dynamic styled" data-filter-Bar="always" data-table-tools='{"display":false}'>
							<thead>
								<tr>
									<th>options</th>
									<th>title</th>
									<th>order</th>
								</tr>
							</thead>
							<tbody>
							<?php 
							foreach($service as $row){
							
							?>
								<tr>
									<td class="center">
										<a href="<?php echo site_url(); ?>eservice/<?php echo $row['id']; ?>" class="button small grey tooltip" data-gravity="s" title="edit"><i class="icon-pencil"></i></a>
<!--
										<a href="<?php //echo site_url(); ?>dservice/<?php  ///echo $row['id'];?>" class="button small grey tooltip" data-gravity="s" title="delete"><i class="icon-remove"></i></a>
	--> 								</td>
									<td class="center"><?php echo $row['title']; ?></td>
									<td class="center"><?php echo $row['arr']; ?></td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
							
				 
					</div>
	 
			
		 
		</section><!-- End of #content -->