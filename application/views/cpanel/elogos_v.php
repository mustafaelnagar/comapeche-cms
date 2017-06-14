<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">edit this logo</h1>
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">Data updated successfully </p>';
				}elseif($sent == "error"){
					echo '<p class="boxes error_box" style="width:91%;direction:rtl">Error uploading the image </p>';
				}
			?>
			<?php echo form_open_multipart('', array("class" => 'grid_12 validate'));?>
				<fieldset>
					
					<div class="row">
						<label for="arr">
							<strong>order</strong>
						</label>
						<div class="content">
							<input class="required" minlength="1" type="text" name="arr" id="arr" pattern="^\d{1,10}$" value="<?php echo $service[0]['arr']; ?>" />
						</div>
					</div>
					<div class="row">
						<label for="title">
							<strong>URL </strong>
						</label>
						<div class="content">
							<input class="required" minlength="4" type="text" name="title" id="title" dir="ltr" value="<?php echo $service[0]['logo_url']; ?>" />
						</div>
					</div>
			 
					<div class="row">
						<label for="details">
							<strong>img  </strong>
						</label>
						<div class="content">
							 
							 <img src="<?php echo base_url().$service[0]['logo']; ?>"  style="width:250px;" />
							 
						</div>
					</div>
								
								
								<div class="row">
						<label for="title">
							<strong>update image</strong>
						</label>
						<div class="content">
						<input type="file" id="userfile" name="userfile" />
						</div>
					</div>
				</fieldset><!-- End of fieldset -->
							
				<div class="actions">
					<div align="center">
						<a href="<?php echo site_url(); ?>logos" class="button red block">cancel</a>
					 
						<input type="submit" value="update" name="upload" />
					</div>
				</div><!-- End of .actions -->
							
			<?php echo form_close(); ?>
			
		</section><!-- End of #content -->