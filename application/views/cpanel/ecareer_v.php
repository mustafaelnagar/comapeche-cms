<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">Career صفحة</h1>
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">تم التعديل بنجاح</p>';
				}elseif($sent == "error"){
					echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ: لم يتم رفع الصورة!</p>';
				}
			?>
			<?php echo form_open_multipart('', array("class" => 'grid_12 validate'));?>
				<fieldset>
					
					<div class="row">
						<label for="title">
							<strong>العنوان</strong>
						</label>
						<div class="content">
							<input class="required" minlength="4" type="text" name="title" id="title" dir="ltr" value="<?php echo $career[0]['title']; ?>" />
						</div>
					</div>
					<div class="row">
						<label for="userfile">
							<strong>الصورة</strong>
						</label>
						<div class="content">
							<input type="file" id="userfile" name="userfile" />
							<small>Image must be 450 X 350 px</small>
						</div>
					</div>
					<div class="row">
						<label for="details">
							<strong>التفاصيل</strong>
						</label>
						<div class="content">
							<textarea class="ckeditor full required" name="details" id="details"><?php echo $career[0]['details']; ?></textarea>
						</div>
					</div>
					<div class="row">
						<label for="email">
							<strong>البريد المرسل إليه</strong>
						</label>
						<div class="content">
							<input class="required" minlength="4" type="text" name="email" id="email" dir="ltr" value="<?php echo $career[1]['details']; ?>" />
						</div>
					</div>
							
				</fieldset><!-- End of fieldset -->
							
				<div class="actions">
					<div class="right">
						<input type="submit" value="تعديل" name="upload" />
					</div>
				</div><!-- End of .actions -->
							
			<?php echo form_close(); ?>
			
		</section><!-- End of #content -->