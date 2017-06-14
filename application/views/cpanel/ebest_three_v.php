<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">Product Updated successfully ! </p>';
				}
				
				if($three):foreach($three as $row):
			?>
			<div class="grid_12">
				
				<?php echo form_open_multipart('', array("class" => 'box validate'));?>
					<div class="header">
						<h2>Edit Products / Best Three</h2>
					</div>
							
					<div class="content" style="">
						
						
						<!----------------------------------------------------------------------------->
						<p class="_100 small" style="padding-top: 10px">
							<label for="headline" class="" >Headline :</label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="headline" id="headline"  value="<?php echo $row['headline'] ?>" />
						</p>
						
						
						<!----------------------------------------------------------------------------->
						<p class="_100 small" style="padding-top: 10px">
							<label for="headline" class="" >Sub Headline :</label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="subheadline" id="subheadline"  value="<?php echo $row['subheadline'] ?>" />
						</p>
						
						
						<!----------------------------------------------------------------------------->
						<p class="_100 small" style="padding-top: 10px">
							<label for="headline" class="" >Description :</label>
							<textarea class="ckeditor full required" name="desc" id="desc"><?php  echo $row['desc'] ?></textarea></td>
							
						</p>
						
						
						<!----------------------------------------------------------------------------->
						
						<p class="_100 small" style="padding-top: 10px;text-align: center">
							<img src="<?php echo site_url().$row['img']; ?>" width="50%" />
						</p>
						
						<!----------------------------------------------------------------------------->
						<!---Upload fiile -->
						<p class="_100 small" >
							<label for="userfile" class="inline"></label>
							<input type="file" id="userfile" name="userfile" />
							<small>Image must be 940 x 500 px</small>
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
                        <p class="boxes error_box">This is error, if problem still exists call your system administrator ! </p>
			<?php endif; ?>
		</section><!-- End of #content -->