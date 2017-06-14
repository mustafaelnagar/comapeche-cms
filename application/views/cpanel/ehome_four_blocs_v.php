<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
﻿			<h1 class="grid_12">Edit Home , Main page</h1>
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">Done successfully </p>';
				}
				
				if($home): //that main the 4 blocks data 
			?>
			<form method="post" class="grid_12 validate">
				<fieldset>
					
					<div class="row">
						<label for="title">
							<strong>Block 1 </strong>
						</label>
						<div class="content">
							<input type="text" name="title" id="title" dir="ltr" class="required" minlength="4" value="<?php echo $home[0]['block_name']; ?>" />
						</div>
					</div>
                                        
                          
					
					                   <div class="row">
						<label for="text">
							<strong>URL</strong>
						</label>
						<div class="content">
                                                        <input class="required" dir="ltr" name="url1" id="url1" value="<?php echo $home[0]['block_url']; ?> "/>
                                                </div>
					</div>
					
					
					
					<div class="row">
						<label for="title2">
							<strong>Block 2 </strong>
						</label>
						<div class="content">
							<input type="text" name="title2" id="title2" dir="ltr" class="required" minlength="4" value="<?php echo $home[1]['block_name']; ?>" />
						</div>
					</div>
                                        
                       
					               <div class="row">
						<label for="text">
							<strong>URL</strong>
						</label>
						<div class="content">
                                                        <input class="required" dir="ltr" name="url2" id="url2" value="<?php echo $home[1]['block_url']; ?> "/>
                                                </div>
					</div>
					
					
					<div class="row">
						<label for="title3">
							<strong>Block 3 </strong>
						</label>
						<div class="content">
							<input type="text" name="title3" id="title3" dir="ltr" class="required" minlength="4" value="<?php echo $home[2]['block_name']; ?>" />
						</div>
					</div>
                                        
                                  
					               <div class="row">
						<label for="text">
							<strong>URL</strong>
						</label>
						<div class="content">
                                                        <input class="required" dir="ltr" name="url3" id="url3" value="<?php echo $home[2]['block_url']; ?> "/>
                                                </div>
					</div>
					
					
					<div class="row">
						<label for="title4">
							<strong>Block 4 </strong>
						</label>
						<div class="content">
							<input type="text" name="title4" id="title4" dir="ltr" class="required" minlength="4" value="<?php echo $home[3]['block_name']; ?>" />
						</div>
					</div>
                                        
                                
					               <div class="row">
						<label for="text">
							<strong>URL</strong>
						</label>
						<div class="content">
                                                        <input class="required" dir="ltr" name="url4" id="url4" value="<?php echo $home[3]['block_url']; ?> "/>
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
                        <p class="boxes error_box" direction="rtl">Error</p>
			<?php endif; ?>
		</section><!-- End of #content -->