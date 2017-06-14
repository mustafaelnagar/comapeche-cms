<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">المنتجات</h1>
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">تمت الإضافة بنجاح</p>';
				}elseif($sent == "error"){
					echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ: لم يتم رفع الصورة!</p>';
				}
			?>
			<div class="grid_6">
				<div class="box">
				
					<div class="header"></div>
					
					<div class="content">
						
						<table id="example" class="dynamic styled" data-filter-Bar="always" data-table-tools='{"display":false}'>
							<thead>
								<tr>
									<th>الخيارات</th>
									<th>الشركة المنتجة</th>
									<th>اسم المنتج</th>
									<th>م</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($products as $row): ?>
								<tr>
									<td class="center">
										<a href="<?php echo site_url(); ?>eproduct/<?php echo $row->id; ?>" class="button small grey tooltip" data-gravity="s" title="تعديل"><i class="icon-pencil"></i></a>
										<a href="<?php echo site_url(); ?>dproduct/<?php echo $row->id; ?>" class="button small grey tooltip" data-gravity="s" title="حذف"><i class="icon-remove"></i></a>
									</td>
									<td class="center"><?php echo $row->company; ?></td>
									<td class="center"><?php echo $row->name; ?></td>
									<td class="center"><?php echo $row->arr; ?></td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
							
					</div><!-- End of .content -->
					
				</div><!-- End of .box -->
			</div>
			
			<div class="grid_6">
				
				<?php echo form_open_multipart('', array("class" => 'box validate'));?>
					<div class="header">
						<h2>إضافة منتج جديد</h2>
					</div>
							
					<div class="content">
						<p class="_100 small" style="padding-top: 10px">
							<label for="arr" class="inline" >الترتيب:</label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="arr" id="arr" pattern="^\d{1,10}$" />
						</p>
						<p class="_100 small" style="padding-top: 10px">
							<label for="name" class="inline" >الاسم:</label>
							<input data-error-type="inline" class="required" minlength="4" type="text" name="name" id="name" />
						</p>
						<p class="_100 small" style="padding-top: 10px">
							<label for="company" class="inline" >الشركة:</label>
							<input data-error-type="inline" class="required" minlength="3" type="text" name="company" id="company" />
						</p>
						<p class="_100 small" >
							<label for="userfile" class="inline"></label>
							<input type="file" id="userfile" name="userfile" />
							<small>Image must be 560 X 450 px</small>
						</p>
						<p class="_100 small" >
							<label for="userfile2" class="inline"></label>
							<input type="file" id="userfile2" name="userfile2" />
							<small>Image must be 560 X 450 px</small>
						</p>
						<p class="_100 small">
							<textarea class="ckeditor required" name="details"></textarea>
						</p>
					</div><!-- End of .content -->
							
					<div class="actions">
						<div class="right">
							<input type="submit" value="إضافة" name="upload" />
						</div>
					</div><!-- End of .actions -->
							
				<?php echo form_close() ?>
						
			</div><!-- End of .grid_6 -->
			
		</section><!-- End of #content -->