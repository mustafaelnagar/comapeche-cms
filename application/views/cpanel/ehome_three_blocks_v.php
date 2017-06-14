<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
﻿	<h1 class="grid_12">Edit Home , Main page</h1>
			<?php
				if($sent == "sent"){
				  echo '<p class="boxes done_box" style="width:91%">Done successfully </p>';
				}
				
				if($home): //that main the 4 blocks data 
			?>
			
			 <?php echo form_open_multipart();?>
				<fieldset>
					
					<div class="row">
						<label for="title">
							<strong>Block 1 </strong>
						</label>
						<div class="content">
							<input type="text" name="title7" id="title7" dir="ltr" class="required" minlength="4" value="<?php echo $home[0]['block_name']; ?>" />
						</div>
					</div>
                                        
                                        <div class="row">
						<label for="text">
							<strong>The image</strong>
						</label>
						<div class="content">
                                                        						
						                                <img style="width:250px;" src="<?php echo base_url().$home[0]['background']; ?>" /> 

														<input type="file" id="userfile7" name="userfile7" >
														<small>Image must be 705 x 560 px</small>

                                                </div>
					</div>
					
					                   <div class="row">
						<label for="text">
							<strong>URL</strong>
						</label>
						<div class="content">
                                                        <input class="required" dir="ltr" name="url7" id="url7" value="<?php echo $home[0]['block_url']; ?> "/>
                                                </div>
					</div>
					
					
					<!----------------------------------------------------------------------------------------------------------------------------------------->		
					<div class="row">
						<label for="title2">
							<strong>Block 2</strong>
						</label>
						<div class="content">
							<input type="text" name="title6" id="title6" dir="ltr" class="required" minlength="4" value="<?php echo $home[1]['block_name']; ?>" />
						</div>
					</div>
                                        
                                        <div class="row">
						<label for="text2">
							<strong>The image</strong>
						</label>
						<div class="content">
                                                        
						                                <img  style="width:250px;" src="<?php echo base_url().$home[1]['background']; ?>" /> 
<br>
														<input type="file" id="userfile6" name="userfile6" >
														<small>Image must be 705 x 560 px</small>
                                                </div>
					</div>
					               <div class="row">
						<label for="text">
							<strong>URL</strong>
						</label>
						<div class="content">
                                                        <input class="required" dir="ltr" name="url6" id="url6" value="<?php echo $home[1]['block_url']; ?> "/>
                                                </div>
					</div>
			<!----------------------------------------------------------------------------------------------------------------------------------------->		
					
					<div class="row">
						<label for="title3">
							<strong>Block 3</strong>
						</label>
						<div class="content">
							<input type="text" name="title5" id="title5" dir="ltr" class="required" minlength="4" value="<?php echo $home[2]['block_name']; ?>" />
						</div>
					</div>
                                        
                                        <div class="row">
						<label for="text3">
							<strong>The image</strong>
						</label>
						<div class="content">
						
						                                <img style="width:250px;" src="<?php echo base_url().$home[2]['background']; ?>" /> 

														<input type="file" id="userfile5" name="userfile5" >
														<small>Image must be 705 x 560 px</small>
					</div>
					            
						</div>


   <div class="row">
						<label for="text">
							<strong>URL</strong>
						</label>
						<div class="content">
                                                        <input class="required" dir="ltr" name="url5" id="url5" value="<?php echo $home[2]['block_url']; ?> "/>
                                                </div>
					</div>						
					
					
		  
				</fieldset><!-- End of fieldset -->
                                
                                <div class="actions">
					<div class="right">
						<input type="submit" value="save" name="send" />
					</div>
				</div><!-- End of .actions -->
				
			</form><!-- End of form -->
			<?php else: ?>
                        <p class="boxes error_box" direction="rtl">خطأ!</p>
			<?php endif; ?>
		</section><!-- End of #content -->