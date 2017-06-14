<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
﻿			<h1 class="grid_12">Delete a slider img</h1>
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">Done , you have successfully delete this slide , you would be redirected now .</p>';
				}else{
				
				if($banner):foreach($banner as $row):
			?>
			
			<form method="post" class="grid_12 validate">
                                <p class="center">&nbsp;&nbsp;You  are about to delete this slide ..... </p>
				<center><p><img src="<?php echo site_url().''.$row->img; ?>" width="80%" /></p></center>
                                <div class="actions">
					<div align="center">
						<a href="<?php echo site_url(); ?>banner" class="button red block">cancel</a>
					 
				 
						<input type="submit" value="delete" name="send" />
					</div>
				</div><!-- End of .actions -->
				
			</form><!-- End of form -->
			<?php endforeach;else: ?>
                        <p class="boxes error_box">Error deleting this slide</p>
			<?php endif; } ?>
		</section><!-- End of #content -->