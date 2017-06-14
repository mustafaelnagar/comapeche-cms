<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">Portfolio-images</h1>
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">تمت الإضافة بنجاح</p>';
				}elseif($sent == "error"){
					echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ: لم يتم رفع الصورة!</p>';
				}
			?>
			<div class="grid_12">
				<div class="box">
				
					<div class="header"></div>
					
					<div class="content">
					
						<table id="example" class="dynamic styled" data-filter-Bar="always" data-table-tools='{"display":false}'> <!-- OPTIONAL: class=with-prev-next -->
							<thead>
								<tr>
									<th>Options</th>
									<th>image</th>
									<th>order</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; if($portofilio_record):foreach($portofilio_record as $row): ?>
								<tr>
									<td class="center">
										<a href="<?php echo site_url(); ?>edit_portofolio_profile/<?php echo $row->id; ?>/1" class="button small grey tooltip" data-gravity="s" title="edit"><i class="icon-pencil"></i></a>
										
									</td>
									<td class="center"><img src="<?php echo site_url().'images/portfolio/'; ?><?php echo $row->img; ?>" width="285" /></td>
									
									<td class="center"><?php echo $row->arr; ?></td>
								</tr>
								
								
									<tr>
									<td class="center">
										<a href="<?php echo site_url(); ?>edit_portofolio_profile/<?php echo $row->id; ?>/2" class="button small grey tooltip" data-gravity="s" title="edit"><i class="icon-pencil"></i></a>
										
									</td>
									<td class="center"><img src="<?php echo site_url().'images/portfolio/'; ?><?php echo $row->img2; ?>" width="285" /></td>
									
									<td class="center"><?php echo '2'; ?></td>
								</tr>
								
								
								
								
								
								
								
									<tr>
									<td class="center">
										<a href="<?php echo site_url(); ?>edit_portofolio_profile/<?php echo $row->id; ?>/3" class="button small grey tooltip" data-gravity="s" title="edit"><i class="icon-pencil"></i></a>
									 
									</td>
									<td class="center"><img src="<?php echo site_url().'images/portfolio/'; ?><?php echo $row->img3; ?>" width="285" /></td>
									
									<td class="center"><?php echo 3; ?></td>
								</tr>
								
								
								
								
								
								
								
								<?php ++$i; endforeach;else: ?>
								<tr>
									<td class="center" style="direction: rtl" colspan="4">
									No Data Found !
									</td>
								</tr>
								<?php endif; ?>
							</tbody>
						</table>
						
					</div><!-- End of .content -->
					
				</div><!-- End of .box -->
			</div><!-- End of .grid_6 -->
		 
		</section><!-- End of #content -->