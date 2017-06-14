<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">categories </h1>
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">تمت الإضافة بنجاح</p>';
				}elseif($sent == "error"){
					echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ: لم يتم رفع الصورة!</p>';
				}
			?>
			<div class="grid_6">
				<div class="box">
				
					<div class="header"></div>
					
					<div class="content">
						
						<table id="example" class="dynamic styled" data-filter-Bar="always" data-table-tools='{"display":false}'>
							<thead>
								<tr>
									<th>Options</th>
                                     <th>category </th>
									<th>order</th>
								</tr>
							</thead>
							<tbody>
							<?php $i=1; foreach($classes as $row): ?>
								<tr>
									<td class="center">
									
									<!--
										<a href="<?php //echo site_url(); ?>elogos/<?php //echo $row->id; ?>" class="button small grey tooltip" data-gravity="s" title="تعديل"><i class="icon-pencil"></i></a>
										-->
										<a href="<?php echo site_url(); ?>dclasses/<?php echo $row->id; ?>" class="button small grey tooltip" data-gravity="s" title="حذف"><i class="icon-remove"></i></a>
									</td>
									<td class="center"><?php echo $row->the_class; ?></td>
									<td class="center"><?php echo $i;$i++; ?></td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
							
					</div><!-- End of .content -->
					
				</div><!-- End of .box -->
			</div>
			
			<div class="grid_6">
				
				<?php echo form_open_multipart('', array("class" => 'box validate'));?>
					<div class="header">
						<h2>Add a new category </h2>
					</div>
							
					<div class="content">
						<p class="_100 small" style="padding-top: 10px">
						 
						</p>
						<p class="_100 small" style="padding-top: 10px">
							<label for="title" class="inline" >category </label>
							<input data-error-type="inline" class="required" minlength="4" type="text" name="title" id="title" />
						</p>
					  <p class="_100 small" >&nbsp;</p>
				 
			  </div><!-- End of .content -->
							
					<div class="actions">
						<div class="right">
							<input type="submit" value="ADD" name="upload" />
						</div>
					</div><!-- End of .actions -->
							
				<?php echo form_close() ?>
						
			</div><!-- End of .grid_6 -->
			
		</section><!-- End of #content -->