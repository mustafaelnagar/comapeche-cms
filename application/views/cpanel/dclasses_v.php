<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
﻿			<h1 class="grid_12">delete category</h1>
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">تم الحذف بنجاح ، انتظر من فضلك سيتم توجيهك الأن</p>';
				}else{
			?>
			
			<form method="post" class="grid_12 validate">
                                <p class="center">&nbsp;&nbsp; Do you want to delete this category ?
								
								</p>
				<center><p> 
				<?php foreach($classes as $row ){ ?>
				<?php  echo $row['the_class'];  ?>
				<?php }?>
				
				
				
				
                                <div class="actions">
					<div class="left">
						<a href="<?php echo site_url('logos'); ?>logos" class="button red block">cancel</a>
					</div>
					<div class="right">
						<input type="submit" value="delete" name="send" />
					</div>
				</div><!-- End of .actions -->
				
			</form><!-- End of form -->
			<?php } ?>
		</section><!-- End of #content -->