<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
﻿			<h1 class="grid_12">Delete </h1>
			<?php
				if($sent == "sent"){
					    echo '<p class="boxes done_box" style="width:91%">Deleted successfully , you will redirected Now . </p>';
				}else{
			?>
			
			<form method="post" class="grid_12 validate">
                                <p class="center">&nbsp;&nbsp; Do you want to Delete this ? </p>
				<center><p><?php echo $product[0]['name']; ?></p></center>
                                <div class="actions">
					<div class="left">
						<a href="<?php echo site_url(); ?>products_list" class="button red block">cancel </a>
					</div>
					<div class="right">
						<input type="submit" value="delete" name="send" />
					</div>
				</div><!-- End of .actions -->
				
			</form><!-- End of form -->
			<?php } ?>
		</section><!-- End of #content -->