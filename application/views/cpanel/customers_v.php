<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
		
			<h1 class="grid_12">العملاء</h1>
			
			<?php
				if($sent == "sent"){
					echo '<p class="boxes done_box" style="width:91%">تمت الإضافة بنجاح</p>';
				}elseif($sent == "error"){
					echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ: لم يتم رفع الصورة!</p>';
				}
			?>
			<div class="grid_6">
				<div class="box">
				
					<div class="header">
					</div>
					
					<div class="content">
					
						<table id="example" class="dynamic styled" data-filter-Bar="always" data-table-tools='{"display":false}'> <!-- OPTIONAL: class=with-prev-next -->
							<thead>
								<tr>
									<th>الخيارات</th>
									<th>الصورة</th>
									<th>م</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; if($customers):foreach($customers as $row): ?>
								<tr>
									<td class="center">
										<a href="<?php echo site_url(); ?>ecustomer/<?php echo $row->id; ?>" class="button small grey tooltip" data-gravity="s" title="تعديل الصورة"><i class="icon-pencil"></i></a>
										<a href="<?php echo site_url(); ?>dcustomer/<?php echo $row->id; ?>" class="button small grey tooltip" data-gravity="s" title="حذف الصورة"><i class="icon-remove"></i></a>
									</td>
									<td class="center"><img src="<?php echo site_url(); ?>images/companies/<?php echo $row->img; ?>" width="230" /></td>
									<td class="center"><?php echo $row->arr; ?></td>
								</tr>
								<?php ++$i; endforeach;else: ?>
								<tr>
									<td class="center" style="direction: rtl" colspan="4">
										لا توجد أى بيانات!
									</td>
								</tr>
								<?php endif; ?>
							</tbody>
						</table>
						
					</div><!-- End of .content -->
					
				</div><!-- End of .box -->
			</div><!-- End of .grid_6 -->
			
			<div class="grid_6">
				
				<?php echo form_open_multipart('', array("class" => 'box validate'));?>
					<div class="header">
						<h2>إضافة لوجو عميل جديد</h2>
					</div>
							
					<div class="content">
						<p class="_100 small" style="padding-top: 10px">
							<label for="arr" class="inline" >الترتيب:</label>
							<input data-error-type="inline" class="required" minlength="1" type="text" name="arr" id="arr" pattern="^\d{1,10}$" />
						</p>
						<p class="_100 small" >
							<label for="userfile" class="inline"></label>
							<input type="file" id="userfile" name="userfile" />
							<small>Image must be 230 X 102 px</small>
						</p>
					</div><!-- End of .content -->
							
					<div class="actions">
						<div class="right">
							<input type="submit" value="إضافة" name="upload" />
						</div>
					</div><!-- End of .actions -->
							
				</form><!-- End of form -->
						
			</div><!-- End of .grid_6 -->
			
		</section><!-- End of #content -->