<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">products List </h1>
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">تمت الإضافة بنجاح</p>';
				}elseif($sent == "error"){
					echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ: لم يتم رفع الصورة!</p>';
				}
			?>
			 
			<div class="grid_12">
				
				<?php //echo form_open_multipart('', array("class" => 'box validate'));?>
				<form method="post" action="" enctype="multipart/form-data" />
					<div class="header">
						<h2 align="centre">
							Add a new Product
						</h2>
					</div>
							
					<div class="content">
						<p class="_100 small" style="padding-top: 10px">
							<label for="arr" class="inline" >Order : </label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="arr" id="arr" pattern="^\d{1,10}$" />
						</p>
						<p class="_100 small" style="padding-top: 10px">
							<label for="title" class="inline" >Title :</label>
							<input data-error-type="inline" class="required" minlength="4" type="text" name="title" id="title" />
						</p>
						<p class="_100 small" >
							<label for="userfile" class="inline"></label>
							<input type="file" id="userfile" name="userfile" />
							<small>Image must be 290 X 210 px</small>
						</p>
					 
					 
					 
					 	<p class="_100 small" >
							<label for="userfile" class="inline"></label>
							<input type="file" id="userfile3" name="userfile3" />
							<small>Image must be 290 X 210 px</small>
						</p>
					 
					 
					 
					 	<p class="_100 small" >
							<label for="userfile" class="inline"></label>
							<input type="file" id="userfiles" name="userfile2" />
							<small>Image must be 290 X 210 px</small>
						</p>
					 
					  
					 
					 	<p class="_100 small" >
							
							<!--
							<label for="pclass" class="inline"> التصنيف</label>
							<input type="text" id="pclass" name="pclass" />
							-->
							
							<select name='pclass' id='pclass'>
							<?php 
							foreach ($classes as $row){
							echo "<option value=".$row['the_class'].">".$row['the_class']."</option>";
							}
							?>
							</select>
							
						</p>
					 
						<p class="_100 small">
							<textarea class="ckeditor required" name="details"></textarea>
						</p>
					</div><!-- End of .content -->
							
					<div class="actions">
						<div align="center">
							<input type="submit" value="Add" name="upload" />
						</div>
					</div><!-- End of .actions -->
							
				<?php echo form_close() ?>
						
			</div><!-- End of .grid_6 -->
			
		</section><!-- End of #content -->