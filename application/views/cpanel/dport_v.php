<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
﻿			<h1 class="grid_12">
Delete Portfolio </h1>
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">This portfolio deleted successfully , you will be redirected now ! </p >';
				}else{
			?>
			
			<form method="post" class="grid_12 validate">
                                <p class="center">&nbsp;&nbsp;Do you want to delete this Portfolio ? </p>
				<center><p><?php echo $portfolio[0]['name']; ?></p></center>
                                <div class="actions">
				<div align="center">
						<a href="<?php echo site_url(); ?>eportofolio" class="button red block">Cancel</a>
					 
					
						<input type="submit" value="delete" name="send" />
					</div>
				</div><!-- End of .actions -->
				
			</form><!-- End of form -->
			<?php } ?>
		</section><!-- End of #content -->