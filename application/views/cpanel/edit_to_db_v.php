 
<?php include 'sidebar.php'; ?>

 

<section id="content" class="container_12 clearfix" data-sort="true">
<?php
				// if($sent == "sent"){
					// echo '<p class="boxes done_box" style="width:91%">تم التعديل بنجاح</p>';
				// }elseif($sent == "error"){
					// echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ: لم يتم رفع الصورة!</p>';
				// }
			?>
	<?php 
	// echo form_open_multipart('edit_to_db', array("class" => 'grid_12 validate'));
	echo form_open_multipart('', array("class" => 'grid_12 validate'));
	?>
				<fieldset>
				<!-- hidden -->
				<input   type="hidden" name="id" id="id" dir="ltr" value="<?php echo $about[0]['id']; ?>" />	
				<!-- hidden -->
				<?php foreach($about as $row){  

// echo "the row contain ".$row[0];
				?>
					<!-----------------------R2--------------------->
					<div class="row">
						<label for="title">
							<strong>El Block name</strong>
						</label>
						<div class="content">
							<input class="required" minlength="4" type="text" name="title" id="title" dir="ltr" value="<?php 
							// try{
							echo $about[0]['block_name'];
// }catch(Exception $e){

// echo "ERROR".$e->getMessage();
}
							?>" />
						</div>
					</div>
					<?php //} //end the for each ?>
					<!-----------------------R2--------------------->
					<div class="row">
						<label for="userfile">
							<strong>Block URL</strong>
						</label>
						
						<div class="content">
						<input class="required" minlength="4" type="text" name="url" id="url" dir="ltr" value="<?php echo $about[0]['block_url']; ?>" />	
						</div>
					</div>
					<div class="row">
						<label for="details">
							<strong>BLOCK Notes</strong>
						</label>
						<div class="content">
							<textarea class="ckeditor full required" name="details" id="details"><?php echo $about[0]['block_notes']; ?></textarea>
						</div>
					</div>
							
				</fieldset><!-- End of fieldset -->
							
				<div class="actions">
					<div class="left">
						<a href="<?php echo site_url(); ?>eabout" class="button red block">إلغاء</a>
					</div>
					<div class="right">
						<input type="submit" value="تعديل" name="upload" />
					</div>
				</div><!-- End of .actions -->
							
			<?php echo form_close(); ?>
			</section>