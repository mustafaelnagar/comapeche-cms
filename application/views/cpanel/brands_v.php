<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">
			
			Logos and Brans Slider
			</h1>
			 
			
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">Logo added successfully  </p>';
				}elseif($sent == "error"){
					// echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ: لم يتم رفع الصورة!</p>';
				}
			?>
			<div class="grid_6" style="width:48%;float:left">
 
				
					<div class="header"></div>
					
					<div class="content">
						
						<table id="example" class="dynamic styled" data-filter-Bar="always" data-table-tools='{"display":false}'>
							<thead>
								<tr>
									<th>Options </th>
 
	<th>Logo</th>
									<th>order</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($brands as $row): ?>
								<tr>
									<td class="center">
									
							 
										<a href="<?php echo site_url(); ?>dbrand/<?php echo $row->id; ?>" class="button small grey tooltip" data-gravity="s" title="حذف"><i class="icon-remove"></i></a>
									</td>
									 
									<td class="center"><img src='<?php echo site_url().'images/clients/'.$row->logo; ?>' width="50px" hieght="50px"/> </td>
									<td class="center"><?php echo $row->arr; ?></td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
							
					</div><!-- End of .content -->
					
		 
			</div>
			
			<div class="grid_6" style="width:48%;float:right">
				
				<?php echo form_open_multipart('', array("class" => 'box validate'));?>
					<div class="header">
						<h2>
						Add a new Logo 
						</h2>
					</div>
							
					<div class="content">
						<p class="_100 small" style="padding-top: 10px">
							<label for="arr" class="inline" >Order</label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="arr" id="arr" pattern="^\d{1,10}$" />
						</p>
					 
						<p class="_100 small" >
							<label for="userfile" class="inline"></label>
							<input type="file" id="userfile" name="userfile" />
							<small>Image must be 165 x 165 px</small>
						</p>
				 
					</div><!-- End of .content -->
							
					<div class="actions">
						<div class="right">
							<input type="submit" value="Add" name="upload" />
						</div>
					</div><!-- End of .actions -->
							
				<?php echo form_close() ?>
						
			</div><!-- End of .grid_6 -->
			
		</section><!-- End of #content -->