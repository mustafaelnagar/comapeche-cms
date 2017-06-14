<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">قائمة الخدمات</h1>
			
			<?php
				if($sent == "sent"){
					//echo '<p class="boxes done_box" style="width:91%">تمت الإضافة بنجاح</p>';
				}elseif($sent == "error"){
					//echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ: لم يتم رفع الصورة!</p>';
				}
			?>
		 
			
			
				
				<?php echo form_open_multipart('', array("class" => 'box validate'));?>
					<div class="header">
						<h2>إضافة خدمة جديدة</h2>
					</div>
							
					<div class="content">
						<p class="_100 small" style="padding-top: 10px">
							<label for="arr" class="inline" >الترتيب:</label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="arr" id="arr" pattern="^\d{1,10}$" />
						</p>
						<p class="_100 small" style="padding-top: 10px">
							<label for="title" class="inline" >العنوان:</label>
							<input data-error-type="inline" class="required" minlength="4" type="text" name="title" id="title" />
						</p>
						<!-- 
						<p class="_100 small" >
							<label for="userfile" class="inline"></label>
							<input type="file" id="userfile" name="userfile" />
							<small>Image must be 290 X 210 px</small>
						</p>
						
						<p class="_100 small" style="padding-bottom: 10px;">
							<select name="img_pos" id="img_pos" class="required" data-placeholder="حدد مكان الصورة">
								<option value=""></option>
								<option value="alignright">يمين الكتابات</option>
								<option value="alignleft">يسار الكتابات</option>
							</select>
						</p>
						-->
						<p class="_100 small">
							<textarea class="ckeditor required" name="details"></textarea>
						</p>
					</div><!-- End of .content -->
							
					<div class="actions">
						<div class="right">
							<input type="submit" value="إضافة" name="upload" />
						</div>
					</div><!-- End of .actions -->
							
				<?php echo form_close() ?>
						
			
			
		</section><!-- End of #content -->