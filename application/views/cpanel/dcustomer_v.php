<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
﻿			<h1 class="grid_12">حذف الصورة</h1>
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">تم الحذف بنجاح ، انتظر من فضلك سيتم توجيهك الأن</p>';
				}else{
				
				if($customer):foreach($customer as $row):
			?>
			
			<form method="post" class="grid_12 validate">
                                <p class="center">&nbsp;&nbsp;هل تريد حذف هذه الصورة ؟</p>
				<center><p><img src="<?php echo site_url().'images/companies/'.$row->img; ?>" width="230" height="102" /></p></center>
                                <div class="actions">
					<div class="left">
						<a href="<?php echo site_url(); ?>customers" class="button red block">إلغاء</a>
					</div>
					<div class="right">
						<input type="submit" value="حذف" name="send" />
					</div>
				</div><!-- End of .actions -->
				
			</form><!-- End of form -->
			<?php endforeach;else: ?>
                        <p class="boxes error_box">خطأ!</p>
			<?php endif; } ?>
		</section><!-- End of #content -->