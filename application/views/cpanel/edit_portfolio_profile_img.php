<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">updated successfuly </p>';
				}
				
				if($banner):foreach($banner as $row):
			?>
			<div class="grid_12">
				
				<?php echo form_open_multipart('', array("class" => 'box validate'));?>
					<div class="header">
						<h2>Update image</h2>
					</div>
							
					<div class="content">
						<p class="_100 small" style="padding-top: 10px;text-align: center">
						 <?php
                         //define which image at the record to show 
                          
						  $img;
                           if($imgnumber==1){$img=$row->img ;}						   
						   if($imgnumber==2){$img=$row->img2 ;}						   
						   if($imgnumber==3){$img=$row->img3 ;}						   
						 ?>
							<img src="<?php echo site_url().'images/portfolio/'.$img ?>" width="100%" height="360" />
						</p>
						<p class="_100 small" style="padding-top: 10px">
							<label for="arr" class="inline" >Order:</label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="arr" id="arr" pattern="^\d{1,10}$" value="<?php echo $row->arr; ?>" />
						</p>
						<p class="_100 small" >
							<label for="userfile" class="inline"></label>
							<input type="file" id="userfile" name="userfile" />
							<small>Image must be 875 X 360 px</small>
						</p>
					</div><!-- End of .content -->
							
					<div class="actions">
						<div align="center" >
							<a href="<?php echo site_url(); ?>banner" class="button red block">Cancel</a>
						</div>
						<div class="right">
							<input type="submit" value="تعديل" name="upload" />
						</div>
					</div><!-- End of .actions -->
							
				</form><!-- End of form -->
						
			</div><!-- End of .grid_6 -->
			
			<?php endforeach;else: ?>
                        <p class="boxes error_box">ERROR ! </p>
			<?php endif; ?>
		</section><!-- End of #content -->