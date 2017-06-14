<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">Edit Products </h1>
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">Data Updated successfully , you will be redirect now   </p>
					
					';
					//redirect here 
					 // redirect('/eportofolio', 'refresh');
					 $this->output->set_header('refresh:2; url='.site_url().'eportofolio');
					 
				}elseif($sent == "error"){
					echo '<p class="boxes error_box" style="width:91%;direction:rtl">Error , Can\'t Upload Now , kindly try again later ! </p>';
				}
			?>
			<?php echo form_open_multipart('edit_port/upload3', array("class" => 'grid_12 validate'));?>
				<fieldset>
					<input type='hidden' value='<?php echo $this->uri->segment(2); ?>' id='theid' name='theid'/> 
					<div class="row">
						<label for="arr">
							<strong>order</strong>
						</label>
						<div class="content">
							<input class="required" minlength="1" type="text" name="arr" id="arr" pattern="^\d{1,10}$" value="<?php echo $portfolio[0]['arr']; ?>" />
						</div>
					</div>
					<div class="row">
						<label for="title">
							<strong>title</strong>
						</label>
						<div class="content">
							<input class="required" minlength="4" type="text" name="title" id="title" dir="ltr" value="<?php echo $portfolio[0]['name']; ?>" />
						</div>
					</div>
					
					
					<div class="row">
 		               
							<label for="pclass" > classification </label>

							<div class="content"> 						
					<select name='pclass' id='pclass'>
							<?php 
							foreach ($classes as $row){
							if($portfolio[0]['class']==$row['the_class']){
							
							
							echo "<option value=".$row['the_class']." selected='selected'>".$row['the_class']."</option>";
							}else{
							
							echo "<option value=".$row['the_class']." >".$row['the_class']."</option>";
							}
							}
							?>
							</select>
							<small>selct portfolio class , you can add classes from here <a href='<?php echo base_url().'classes';?>'></small>
					</div>	
					   		
       				</div>
						<div class="row">
						 
						<div class="content">
							 <label for="userfile">
							<strong>
							<h2 align='center'>
							<?php $current_port=$this->uri->segment(2); ?>
							<a href='<?php echo site_url('portfolio_profile/'.$current_port); ?>'>
							edit images
							</a>
							</h2>
							</strong>
						</label>
						</div>
						
						
						
						

					</div>
					
					
					<div class="row">
						<label for="userfile">
							<strong>image</strong>
						</label>
						<div class="content">
							<!--
							<input type="file" id="img1" name="img1" />
						 -->
							<small> <img src='<?php echo  base_url().'images/portfolio/'.$portfolio[0]['img'];  ?>' style='width:250px;'></small>
						</div>
						
						 
						
						

					</div>
					
					
					
					
					<div class="row">
						<label for="userfile">
							<strong>image 2</strong>
						</label>
						<div class="content">
						<!--
							<input type="file" id="img3" name="img3" />
							-->
							<small><img src='<?php echo  base_url().'images/portfolio/'.$portfolio[0]['img2'];  ?>' style='width:250px;'></small>
						</div>
					</div>
					
							<div class="row">
						<label for="userfile">
							<strong>image 3</strong>
						</label>
						<div class="content">
					
					
							<small>  <img src='<?php echo  base_url().'images/portfolio/'.$portfolio[0]['img3'];  ?>' style='width:250px;'></small>
						</div>
					</div>
					
				 
					<div class="row">
						<label for="details">
							<strong>details</strong>
						</label>
						<div class="content">
							<textarea class="ckeditor full required" name="details" id="details"><?php echo $portfolio[0]['desc']; ?></textarea>
						</div>
					</div>
							
				</fieldset><!-- End of fieldset -->
							
				<div align="center">
					
						<a href="<?php echo site_url(); ?>eportfolio" class="button red block">Cancel</a>
					
					<input type="submit" value="edit" name="upload" />
					</div>
				</div><!-- End of .actions -->
							
			<?php echo form_close(); ?>
			
		</section><!-- End of #content -->