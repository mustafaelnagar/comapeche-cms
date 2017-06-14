<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
﻿			<h1 class="grid_12">Social Media Links</h1>
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">Your social Links Updated successfully ! </p>';
				}
				
				if($social):
			?>
			<form method="post" class="grid_12 validate">
				<fieldset>
					
					<div class="row">
						<label for="title">
							<strong>Facebook</strong>
						</label>
						<div class="content">
							<input type="text" name="url" id="title" dir="ltr" class="required" minlength="1" value="<?php echo $social[0]['url']; ?>" />
						</div>
					</div>
					
					<div class="row">
						<label for="title2">
							<strong>Google</strong>
						</label>
						<div class="content">
							<input type="text" name="url2" id="title2" dir="ltr" class="required" minlength="1" value="<?php echo $social[1]['url']; ?>" />
						</div>
					</div>
					
					<div class="row">
						<label for="title3">
							<strong>Twitter</strong>
						</label>
						<div class="content">
							<input type="text" name="url3" id="title3" dir="ltr" class="required" minlength="1" value="<?php echo $social[2]['url']; ?>" />
						</div>
					</div>
					
					<div class="row">
						<label for="title4">
							<strong>Youtube</strong>
						</label>
						<div class="content">
							<input type="text" name="url4" id="title4" dir="ltr" class="required" minlength="1" value="<?php echo $social[3]['url']; ?>" />
						</div>
					</div>
					<!-- 
					<div class="row">
						<label for="title5">
							<strong>Twitter Account</strong>
						</label>
						<div class="content">
							<input type="text" name="url5" id="title5" dir="ltr" class="required" value="<?php //echo $social[4]['url']; ?>" />
						</div>
					</div>
					-->
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