<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">تم التعديل بنجاح</p>';
				}
				
				if($customer):foreach($customer as $row):
			?>
			<div class="grid_12">
				
				<?php echo form_open_multipart('', array("class" => 'box validate'));?>
					<div class="header">
						<h2>تعديل الصورة</h2>
					</div>
							
					<div class="content">
						<p class="_100 small" style="padding-top: 10px;text-align: center">
							<img src="<?php echo site_url().'images/companies/'.$row->img; ?>" width="230" height="102" />
						</p>
						<p class="_100 small" style="padding-top: 10px">
							<label for="arr" class="inline" >الترتيب:</label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="arr" id="arr" pattern="^\d{1,10}$" value="<?php echo $row->arr; ?>" />
						</p>
						<p class="_100 small" >
							<label for="userfile" class="inline"></label>
							<input type="file" id="userfile" name="userfile" />
							<small>Image must be 230 X 102 px</small>
						</p>
					</div><!-- End of .content -->
							
					<div class="actions">
						<div class="left">
							<a href="<?php echo site_url(); ?>customers" class="button red block">إلغاء</a>
						</div>
						<div class="right">
							<input type="submit" value="تعديل" name="upload" />
						</div>
					</div><!-- End of .actions -->
							
				</form><!-- End of form -->
						
			</div><!-- End of .grid_6 -->
			
			<?php endforeach;else: ?>
                        <p class="boxes error_box">خطأ!</p>
			<?php endif; ?>
		</section><!-- End of #content -->