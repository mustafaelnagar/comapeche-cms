<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">About section</h1>
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">section data updated successfully </p>';
				}elseif($sent == "error"){
					//echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ: لم يتم رفع الصورة!</p>';
				}
			?>
			<?php echo form_open_multipart('', array("class" => 'grid_12 validate'));?>
			
			
			<!------------------------------------------------------mango table 			-->
			<div class="grid_12">
    <div class="box">
        <div class="header">
            <h2>About section[headline , subtitle ,img]</h2>
        </div>
        <div class="content">
            <table class="styled">
                <thead>
                    
                </thead>
                <tbody>
                
					<tr>
					<td> Headline</td>
					<td> <input class="required" minlength="4" type="text" name="title" id="title" dir="ltr" value="<?php echo $about[0]['title']; ?>" style="width:100%"  /></td>
					</tr>
					
				
					
					
					<tr>
					<td>Subtitle</td>
					<td> <textarea class="ckeditor full required" name="details" id="details"><?php echo $about[0]['details']; ?></textarea></td>
					</tr>
					
						<tr>
					<td> List Headline</td>
					<td> <input class="required" minlength="4" type="text" name="list_intro" id="list_intro" dir="ltr" value="<?php echo $about[0]['list_intro']; ?>" style="width:100%"  /></td>
					</tr>
					<tr>
					
					
					
					<tr>
					<td>About img</td>
					<td> <img src="<?php echo base_url()."".$about[0]['img'];   ?> " width="400px" alt="About img">  </td>
					</tr>
					
					 
					 
					<tr>
					<td>Update About image  </td>
					<td>

							<input type="file" id="userfile" name="userfile" />
					</td>
					</tr>
					
					 
					 
					<tr>
					
					
					<!------->
					<!------->
					<td colspan="2" align="center">
					<div class="actions">
					<div >
						<input type="submit" value="update" name="upload" />
					</div>
				</div><!-- End of .actions -->
					</td>
					</tr>
            </table>
        </div>
    </div>
</div>
			<!------------------------------------------------------mango table 			-->
			 
				
							
			<?php echo form_close(); ?>
				
			
			
		</section><!-- End of #content -->