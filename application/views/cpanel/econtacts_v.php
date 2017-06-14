<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">Contacts page</h1>
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">contact updated succesfuly ! </p>';
				}elseif($sent == "error"){
					// echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ: لم يتم رفع الصورة!</p>';
				}
			?>
			<?php echo form_open_multipart('', array("class" => 'grid_12 validate'));?>
				<fieldset>
					
					<div class="row">
						<label for="title">
							<strong>Address</strong>
						</label>
						<div class="content">
							<input class="required" minlength="4" type="text" name="title" id="title" dir="ltr" value="<?php echo $contacts[0]['title']; ?>" />
						</div>
					</div>
					<div class="row">
				 
						<label for="userfile">
							<strong>
							Map iframe :
							</strong>
						</label>
					 
						
					
						
						<div class="content">
							<textarea id='gmaps' name='gmaps'>
							<?php echo $contacts[0]['gmaps']; ?>
						</textarea>
						</div>
					</div>
					<div class="row">
						<label for="details">
							<strong>Details  : </strong>
						</label>
						<div class="content">
							<textarea class="ckeditor full required" name="details" id="details"><?php echo $contacts[0]['details']; ?></textarea>
						</div>
					</div>
							
				</fieldset><!-- End of fieldset -->
							
				<div class="actions">
					<div align="center">
						<input type="submit" value="update" name="upload" />
					</div>
				</div><!-- End of .actions -->
							
			<?php echo form_close(); ?>
			
		</section><!-- End of #content -->