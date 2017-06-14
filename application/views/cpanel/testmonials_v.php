<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">Tessmonials , what they said about your business ! </h1>
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">testmonilas Added succsfuly ! </p>';
				}elseif($sent == "error"){
					echo '<p class="boxes error_box" style="width:91%;direction:rtl">Error on uplading the auther image </p>';
				}
			?>


			<!------------------------------Add a new testmonials ---------->
			<!------------------------------Add a new testmonials ---------->
			<!------------------------------Add a new testmonials ---------->
			<div class="col6" style="width: 40%;float: right;" >
			
				
				<?php echo form_open_multipart('', array("class" => 'box validate'));?>
					<div class="header">
						<h2>Add quote to the testmonials</h2>
					</div>
							
					<div class="content" >
						<p class="_100 small" style="padding-top: 10px">
							<label for="arr" class="inline" >Order :</label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="arr" id="arr"   />
						
						</p>
						<br/>
						<p class="_100 small" style="padding-top: 10px">
						    <label for="auther" class="inline" >author  :</label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="auther" id="auther"   />
						</p>
						 
						
					 
						<br/>
						<p class="_100 small" style="padding-top: 10px">
							<label for="qt" class="inline" >quote  :</label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="qt" id="qt"   />
						</p>
						
					 <br/>
					
 
					
					
						
						
						<p class="_100 small" style="padding-top: 10px">
                        <label for="" class="" >select image</label>						
						<label for="userfile" class="inline"></label>
							<input type="file" id="userfile" name="userfile" />
							<small>Image must be 940 x 500 px</small>
						</p>
					</div><!-- End of .content -->
							
					<div class="actions">
						<div class="right">
							<input type="submit" value="ADD" name="upload" />
						</div>
					</div><!-- End of .actions -->
							
				<?php echo form_close() ?>
						
			</div><!-- End of .grid_6 -->
			
    		<!------------------------------//Add a new testmonials ---------->
    		<!------------------------------//Add a new testmonials ---------->
    		<!------------------------------//Add a new testmonials ---------->			
			<div class="grid_6" >
			<!------------------------------View  testmonials ---------->
			<!------------------------------View  testmonials ---------->
			<!------------------------------View  testmonials ---------->
			 
			 
				
					<div class="header"></div>
					
					<div class="content">
					
						<table id="example" class="dynamic styled" data-filter-Bar="always" data-table-tools='{"display":false}'> <!-- OPTIONAL: class=with-prev-next -->
							<thead>
								<tr>
									<th>Options</th>
									<th>Qutoe </th>
									<th>image</th>
									<th>c</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; if($banner):foreach($banner as $row): ?>
								<tr>
									<td class="center">
										<!--
										<a href="<?php //echo site_url(); ?>ebanner/<?php ///echo $row['id']; ?>" class="button small grey tooltip" data-gravity="s" title="edit Quteo"><i class="icon-pencil"></i></a>
										-->
										<a href="<?php echo site_url(); ?>dquote/<?php echo $row['id']; ?>" class="button small grey tooltip" data-gravity="s" title="delete Quteo"><i class="icon-remove"></i></a>
									</td>
									<td class="center"> <?php echo $row['auther']; ?></td>
									<td class="center"><img src="<?php echo site_url(); ?><?php echo $row['img']; ?>" width="285" /></td>									
									<td class="center"><?php echo $row['arr']; ?></td>
								</tr>
								<?php ++$i; endforeach;else: ?>
								<tr>
									<td class="center" style="direction: rtl" colspan="4">
										No Data Found , knely insert new Data
									</td>
								</tr>
								<?php endif; ?>
							</tbody>
						</table>
						
					</div><!-- End of .content -->
					
				 
			</div><!-- End of .grid_6 -->
			
			
						<!------------------------------//View  testmonials ---------->
						<!------------------------------//View  testmonials ---------->
						<!------------------------------//View  testmonials ---------->
</div>

			</div>
		</section><!-- End of #content -->