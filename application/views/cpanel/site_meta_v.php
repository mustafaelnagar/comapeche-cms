<?php include 'sidebar.php'; ?>


		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">Site Meta </h1>
			
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
							<strong>Address </strong>
						</label>
						<div class="content">
							<input class="required" minlength="4" type="text" name="title" id="title" dir="ltr" value="<?php echo $site_meta[0]['title']; ?>" />
						</div>
					</div>
					<div class="row">
				 
						<label for="userfile">
							<strong>
							Site Description : 
							</strong>
						</label>
					 
						
					
						
						
						
						<div class="content">
							<textarea id='site_desc' name='site_desc'>
							<?php echo $site_meta[0]['site_desc']; ?>
						</textarea>
						</div>
					</div>
					<div class="row">
						<label for="details">
							<strong>
							keywords for  Search Engine Optimization : 
							</strong>
						</label>
						<div class="content">
							<input class="required" minlength="4" type="text" name="keywords" id="keywords" dir="ltr" value="<?php echo $site_meta[0]['keywords']; ?>" />
							
							
							
						</div>
					</div>
					
					
					<div class="row">
						<label for="phone">
							<strong>
					site contact Emial  :
							</strong>
						</label>
						<div class="content">
							<input class="required" minlength="4" type="text" name="sitemail" id="sitemail" dir="ltr" value="<?php echo $site_meta[0]['sitemail']; ?>" />
							
							
							
						</div>
					</div>
					
					
					
					<div class="row">
						<label for="phone">
							<strong>
							phone :
							</strong>
						</label>
						<div class="content">
							<input class="required" minlength="4" type="text" name="phone" id="phone" dir="ltr" value="<?php echo $site_meta[0]['phone']; ?>" />
							
							
							
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