<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">Edit service</h1>
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">Updated successfully </p>';
				}elseif($sent == "error"){
					echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ: لم يتم رفع الصورة!</p>';
				}
			?>
			<?php echo form_open_multipart('', array("class" => 'grid_12 validate'));?>
				<fieldset>
					
					<div class="row">
						<label for="arr">
							<strong>Order</strong>
						</label>
						<div class="content">
							<input class="required" minlength="1" type="text" name="arr" id="arr" pattern="^\d{1,10}$" value="<?php echo $service[0]['arr']; ?>" />
						</div>
					</div>
					<div class="row">
						<label for="title">
							<strong>title</strong>
						</label>
						<div class="content">
							<input class="required" minlength="4" type="text" name="title" id="title" dir="ltr" value="<?php echo $service[0]['title']; ?>" />
						</div>
					</div>
					
					<div class="row">
						<label for="details">
							<strong>details</strong>
						</label>
						<div class="content">
							<textarea class="ckeditor full required" name="details" id="details"><?php echo $service[0]['details']; ?></textarea>
						</div>
					</div>
							
				</fieldset><!-- End of fieldset -->
							
				<div class="actions">
					<div align="center">
						<a href="<?php echo site_url(); ?>services_list" class="button red block">Cancel</a>
					<input type="submit" value="Update" name="upload" />
					</div> 
				</div><!-- End of .actions -->
							
			<?php echo form_close(); ?>
			
		</section><!-- End of #content -->