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
            <h2>About section deatils [L1,L2,L3,L4,L5]</h2>
			<span>
			You could leave the list embty and it won't appear at the front end . 
			</span>
        </div>
        <div class="content">
            <table class="styled">
                <thead>
                    
                </thead>
                <tbody>
                <!--------------------------list ------------------>
                
					<tr>
					<td> List 1</td>
					<td> <input class="required" minlength="4" type="text" name="list1" id="list1" dir="ltr" value="<?php echo $about[0]['title']; ?>" style="width:100%"  /></td>
					</tr>
					
				<!------------------------//list ------------------>	
				      <!--------------------------list ------------------>
                
					<tr>
					<td> List 2</td>
					<td> <input class="required" minlength="4" type="text" name="list2" id="list2" dir="ltr" value="<?php echo $about[1]['title']; ?>" style="width:100%"  /></td>
					</tr>
					
				<!------------------------//list ------------------>	
				      <!--------------------------list ------------------>
                
					<tr>
					<td> List 3</td>
					<td> <input class="required" minlength="4" type="text" name="list3" id="list3" dir="ltr" value="<?php echo $about[2]['title']; ?>" style="width:100%"  /></td>
					</tr>
					
				<!------------------------//list ------------------>	
				      <!--------------------------list ------------------>
                
					<tr>
					<td> List 4</td>
					<td> <input class="required" minlength="4" type="text" name="list4" id="list4" dir="ltr" value="<?php echo $about[3]['title']; ?>" style="width:100%"  /></td>
					</tr>
					
				<!------------------------//list ------------------>	
				      <!--------------------------list ------------------>
                
					<tr>
					<td> List 5</td>
					<td> <input class="required" minlength="4" type="text" name="list5" id="list5" dir="ltr" value="<?php echo $about[4]['title']; ?>" style="width:100%"  /></td>
					</tr>
					
				<!------------------------//list ------------------>
                   <tr>				
					<td colspan="2" align="center">
					<div class="actions">
					 
						<input type="submit" value="update" name="upload" />
					</div>
				 
					</td>
			      </tr>
				 
		   </table>
        </div>
    </div>
</div>
			<!------------------------------------------------------mango table 			-->
			 
				
							
			<?php echo form_close(); ?>
				
			
			
		</section><!-- End of #content -->