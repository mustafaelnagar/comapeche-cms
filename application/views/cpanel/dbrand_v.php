<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
﻿			<h1 class="grid_12">
Delete Logo  
 </h1>
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">تم الحذف بنجاح ، انتظر من فضلك سيتم توجيهك الأن</p>';
				}else{
			?>
			
			<form method="post" class="grid_12 validate">
                                <p class="center">&nbsp;&nbsp;
								Do You want to delete this Logo ? 
								</p>
				<center>  
				<img src='<?php echo site_url().'images/clients/'.$brands[0]['logo']; ?>' /> 
				
				</center>
				
                                <div class="actions">
					<div class="left">
						<a href='<?php echo site_url('brands'); ?>'.' class='button red block'>Cancel </a>
					</div>
					<div class="right">
						<input type="submit" value="Delete" name="send" />
					</div>
				</div><!-- End of .actions -->
				
			</form><!-- End of form -->
			<?php } ?>
		</section><!-- End of #content -->