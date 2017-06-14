<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12"> Portfolio Page </h1>
			
			<?php
				if($sent == "sent"){
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
									<th>title</th>
									<th>order</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($portfolio as $row): ?>
								<tr>
									<td class="center">
										<a href="<?php echo site_url(); ?>edit_port/<?php echo $row['id']; ?>" class="button small grey tooltip" data-gravity="s" title="edit"><i class="icon-pencil"></i></a>
										<a href="<?php echo site_url(); ?>delete_port/<?php echo $row['id'] ?>" class="button small grey tooltip" data-gravity="s" title="delete"><i class="icon-remove"></i></a>
									</td>
									<td class="center"><?php echo $row['name']; ?></td>
									<td class="center"><?php echo $row['arr']; ?></td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
							
					</div><!-- End of .content -->
					
				</div><!-- End of .box -->
			
				
			
		</section><!-- End of #content -->