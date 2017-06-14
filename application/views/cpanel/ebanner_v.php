<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">Updated successfully ! </p>';
				}
				
				if($banner):foreach($banner as $row):
			?>
			<div class="grid_12">
				
				<?php echo form_open_multipart('', array("class" => 'box validate'));?>
					<div class="header">
						<h2>Edit slide</h2>
					</div>
							
					<div class="content" style="direction:rtl">
						<p class="_100 small" style="padding-top: 10px;text-align: center">
							<img src="<?php echo site_url().$row->img; ?>" width="80%" />
						</p>
						<p class="_100 small" style="padding-top: 10px">
							<label for="arr" class="inline" >order :</label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="arr" id="arr" pattern="^\d{1,10}$" value="<?php echo $row->arr; ?>" />
						</p>
					
		<p class="_100 small" style="padding-top: 10px">
							<label for="" class="" >Slide  Text :</label>
							</p>
							<p>
							
							<input data-error-type="inline" class="required"   type="text" name="txt" id="txt" width="100%" value="<?php echo $row->txt; ?>" />
							
						</p>


					<p class="_100 small" >
							<label for="userfile" class="inline">Updatre the image </label>
							<input type="file" id="userfile" name="userfile" />
							<small>Image will be updated </small>
						</p>
						
							
						
							<p class="_100 small" style="padding-top: 10px">
							<label for="" class="" >transition type :</label>
							</p>
							<p>
							<select name="transition" id="transition">
							<option value="transition2d">2 D </option>
							<option value="transition3d"> 3 D </option>
							
							</select>
							
						</p>
					

							<p class="_100 small" style="padding-top: 10px">
							<label for="" class="" >transition direction : </label>
							</p>
							<p>
							<select name="dir" id="dir">
							<option value="right">right</option>
							<option value="left">left</option>
							<option value="bottom">Bottom</option>
							<option value="fade">fade</option>
							
							
							
							
							</select>
							
						</p>
					
					</div><!-- End of .content -->
							
					<div class="actions">
						<div class="left">
							<a href="<?php echo site_url(); ?>banner" class="button red block">cancel</a>
						</div>
						<div class="right">
							<input type="submit" value="update" name="upload" />
						</div>
					</div><!-- End of .actions -->
							
				</form><!-- End of form -->
						
			</div><!-- End of .grid_6 -->
			
			<?php endforeach;else: ?>
                        <p class="boxes error_box">This is error @the VE_bann , if problem still Exists call your system administrator ! </p>
			<?php endif; ?>
		</section><!-- End of #content -->