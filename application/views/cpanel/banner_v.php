<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">The main Slider</h1>
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">Slide Addes succsfuly ! </p>';
				}elseif($sent == "error"){
					echo '<p class="boxes error_box" style="width:91%;direction:rtl">Error uploadinng the slide , kindely try again later 
</p>';
				}
			?>
			
			<div class="grid_12" >
			<div class="" style="width: 48%;float:left;">
				<div class="box">
				
					<div class="header"></div>
					
					<div class="content">
					
						<table id="example" class="dynamic styled" data-filter-Bar="always" data-table-tools='{"display":false}'> <!-- OPTIONAL: class=with-prev-next -->
							<thead>
								<tr>
									<th>Options</th>
									<th>image</th>
									<th>c</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; if($banner):foreach($banner as $row): ?>
								<tr>
									<td class="center">
										<a href="<?php echo site_url(); ?>ebanner/<?php echo $row['id']; ?>" class="button small grey tooltip" data-gravity="s" title="edit image"><i class="icon-pencil"></i></a>
										<a href="<?php echo site_url(); ?>dbanner/<?php echo $row['id']; ?>" class="button small grey tooltip" data-gravity="s" title="delete image"><i class="icon-remove"></i></a>
									</td>
									<td class="center"><img src="<?php echo site_url(); ?><?php echo $row['img']; ?>" width="285" /></td>
									<td class="center"><?php echo $row['arr']; ?></td>
								</tr>
								<?php ++$i; endforeach;else: ?>
								<tr>
									<td class="center" style="direction: rtl" colspan="4">
										No Data Found , knely insert new Data
									</td>
								</tr>
								<?php endif; ?>
							</tbody>
						</table>
						
					</div><!-- End of .content -->
					
				</div><!-- End of .box -->
			</div><!-- End of .grid_6 -->
			
			<div class="" style="width:48%;float:right">
				
				<?php echo form_open_multipart('', array("class" => 'box validate'));?>
					<div class="header">
						<h2>Add slide to the slider</h2>
					</div>
							
					<div class="content" style="direction:rtl">
						<p class="_100 small" style="padding-top: 10px">
							<label for="arr" class="inline" >Order :</label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="arr" id="arr" pattern="^\d{1,10}$" />
						</p>
						
							<p class="_100 small" style="padding-top: 10px">
							<label for="" class="" >Slide  Text :</label>
							</p>
							<p>
							
							<input data-error-type="inline" class="required"   type="text" name="txt" id="txt" width="100%" value=""  placeholder="slide text " />
							
						</p>

 
							<p class="_100 small" style="padding-top: 10px">
							<label for="" class="" >Motion Type :</label>
							</p>
							<p>
							<select name="transition" id="transition">
							<option value="transition2d">2 D</option>
							<option value="transition3d">3 D</option>
							
							</select>
							
						</p>
					

							<p class="_100 small" style="padding-top: 10px">
							<label for="" class="" >Direction :</label>
							</p>
							<p>
							<select name="dir" id="dir">
							<option value="right">right</option>
							<option value="left">left</option>
							<option value="bottom">bottom</option>
							<option value="fade">fade</option>
							
							
							
							
							</select>
							
						</p>
					
					
						<label for="" class="" >select image</label>
						
						<p class="_100 small" >
							<label for="userfile" class="inline"></label>
							<input type="file" id="userfile" name="userfile" />
							<small>Image must be 940 x 500 px</small>
						</p>
					</div><!-- End of .content -->
							
					<div class="actions">
						<div class="right">
							<input type="submit" value="ADD" name="upload" />
						</div>
					</div><!-- End of .actions -->
							
				<?php echo form_close() ?>
						
			</div><!-- End of .grid_6 -->
			</div>
		</section><!-- End of #content -->