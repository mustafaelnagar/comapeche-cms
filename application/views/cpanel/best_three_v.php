<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12"> Best three prouducts </h1>
			
			<?php
				if($sent == "sent"){
#it's a static nunmber that is =   div < 3 + 1 >	
	//echo '<p class="boxes done_box" style="width:91%">تمت الإضافة بنجاح</p>';
				}elseif($sent == "error"){
					//echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ: لم يتم رفع الصورة!</p>';
				}
			?>
			
				<div class="grid_12">
				
					<div class="header"></div>
					
					<div class="content">
						
						<table id="example" class="dynamic styled" data-filter-Bar="always" data-table-tools='{"display":false}'>
							<thead>
								<tr>
									<th>Options </th>
									<th>Description</th>
									<th>Product img </th>
									<th>Head line</th>
									
									<th>order</th>
								</tr>
							</thead>
							<tbody>
							<?php 
							
							$counter=1;
							foreach($portfolio as $row): ?>
								<tr>
									<td class="center">
										<a href="<?php echo site_url(); ?>edit_best_three/<?php echo $row['id']; ?>" class="button small grey tooltip" data-gravity="s" title="edit"><i class="icon-pencil"></i></a>
										<!--
										<a href="<?php //echo site_url(); ?>delete_port/<?php // echo $row['id'] ?>" class="button small grey tooltip" data-gravity="s" title="delete"><i class="icon-remove"></i></a>
										-->
									</td>
									
									<td class="center"><?php echo $row['desc']; ?></td>
									<td class="center"><?php echo "<img src='".base_url().$row['img']."' width='50px' '/>"; ?></td>
									<td class="center"><?php echo $row['headline']; ?></td>
									
									<td class="center"><?php echo $counter; $counter++; ?></td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
							
					</div><!-- End of .content -->
					
				</div><!-- End of .box -->
			
				
			
		</section><!-- End of #content -->