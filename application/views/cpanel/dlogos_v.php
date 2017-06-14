<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
﻿			<h1 class="grid_12">Delete one of your Works  </h1>
			<?php
				if($sent == "sent"){
				 	    echo '<p class="boxes done_box" style="width:91%">Deleted successfully , you will redirected Now . </p>';
				}else{
			?>
			
			<form method="post" class="grid_12 validate">
                                <p class="center">&nbsp;&nbsp;
								
								Do You want to delete this this work  ?
								</p>
				<center><p> 
				<?php foreach($record as $row ){ ?>
				<img src="<?php echo site_url()."images/clients/".$row->logo; ?>"  alt='img <?php echo "X"; ?>' /> 
				<?php }?>
				
				
				
				
                                <div class="actions">
					<div align="center">
						<a href="<?php echo site_url('logos'); ?>logos" class="button red block">cancel</a>
					
					
						<input type="submit" value="delete" name="send" />
					</div>
				</div><!-- End of .actions -->
				
			</form><!-- End of form -->
			<?php } ?>
		</section><!-- End of #content -->