<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">The Org numbers</h1>
			
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
            <h2>Numbers  section[headline , Tons of the best three]</h2>
        </div>
        <div class="content">
            <table class="styled">
                <thead>
                    <th>
					title
					</th>
					  <th>
					name
					</th>
					  <th>
					Number
					</th>
					 
                </thead>
                <tbody>
                
					<tr>
					<td> Headline</td>
					<td colspan="2"> <input class="required" minlength="4" type="text" name="headline" id="headline" dir="ltr" value="<?php echo $data[0]['name']; ?>" style="width:100%"  /></td>
					</tr>
					
				
					
					
					<tr>
					<td>Best 1 </td>
					<td> 
					<input type="text" name="name1" id="name1" value="<?php echo $data[1]['name']; ?> " />
					</td>
					<td> 
					<input type="text" name="no1" id="no1" value="<?php echo $data[1]['nu']; ?> " />
					</td>
					
					</tr>
					
						<tr>
					<td> Best 2 </td>
				<td> 
					<input type="text" name="name2" id="name2" value="<?php echo $data[2]['name']; ?> " />
					</td>
					<td> 
					<input type="text" name="no2" id="no2" value="<?php echo $data[2]['nu']; ?> " />
					</td>
					</tr>
					<tr>
					
					
					
					<tr>
					<td>Best 3 </td>
			<td> 
					<input type="text" name="name3" id="name3" value="<?php echo $data[3]['name']; ?> " />
					</td>
					<td> 
					<input type="text" name="no3" id="no3" value="<?php echo $data[3]['nu']; ?> " />
					</td>
					</tr>
					
					 	
					<tr>
					<td>Best 4 </td>
			<td> 
					<input type="text" name="name4" id="name4" value="<?php echo $data[4]['name']; ?> " />
					</td>
					<td> 
					<input type="text" name="no4" id="no4" value="<?php echo $data[4]['nu']; ?> " />
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