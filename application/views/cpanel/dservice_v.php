<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
﻿			<h1 class="grid_12">Delete service</h1>
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">Deleted successfully , you will redirected Now . </p>';
				}else{
			?>
			
			<form method="post" class="grid_12 validate">
                                <p class="center">&nbsp;&nbsp;Do you want to delete this service ?</p>
				<center><p><?php echo $service[0]['title']; ?></p></center>
                                <div class="actions">
					<div class="left">
						<a href="<?php echo site_url(); ?>services_list" class="button red block">Cancel</a>
					</div>
					<div class="right">
						<input type="submit" value="Delete" name="send" />
					</div>
				</div><!-- End of .actions -->
				
			</form><!-- End of form -->
			<?php } ?>
		</section><!-- End of #content -->