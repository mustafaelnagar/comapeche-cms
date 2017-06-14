<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">تعديل منتج</h1>
			
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
						<label for="arr">
							<strong>الترتيب</strong>
						</label>
						<div class="content">
							<input class="required" minlength="1" type="text" name="arr" id="arr" pattern="^\d{1,10}$" value="<?php echo $product[0]['arr']; ?>" />
						</div>
					</div>
					<div class="row">
						<label for="name">
							<strong>اسم البرنامج</strong>
						</label>
						<div class="content">
							<input class="required" minlength="4" type="text" name="name" id="name" dir="ltr" value="<?php echo $product[0]['name']; ?>" />
						</div>
					</div>
					<div class="row">
						<label for="company">
							<strong>اسم الشركة</strong>
						</label>
						<div class="content">
							<input class="required" minlength="3" type="text" name="company" id="company" dir="ltr" value="<?php echo $product[0]['company']; ?>" />
						</div>
					</div>
					<div class="row">
						<label for="userfile">
							<strong>صورة المنتج</strong>
						</label>
						<div class="content">
							<input type="file" id="userfile" name="userfile" />
							<small>Image must be 560 X 450 px</small>
						</div>
					</div>
					<div class="row">
						<label for="userfile2">
							<strong>صورة الهدية</strong>
						</label>
						<div class="content">
							<input type="file" id="userfile2" name="userfile2" />
							<small>Image must be 560 X 450 px</small>
						</div>
					</div>
					<div class="row">
						<label for="details">
							<strong>التفاصيل</strong>
						</label>
						<div class="content">
							<textarea class="ckeditor full required" name="details" id="details"><?php echo $product[0]['details']; ?></textarea>
						</div>
					</div>
							
				</fieldset><!-- End of fieldset -->
							
				<div class="actions">
					<div class="left">
						<a href="<?php echo site_url(); ?>products_list" class="button red block">إلغاء</a>
					</div>
					<div class="right">
						<input type="submit" value="تعديل" name="upload" />
					</div>
				</div><!-- End of .actions -->
							
			<?php echo form_close(); ?>
			
		</section><!-- End of #content -->