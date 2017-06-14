<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
			<h1 class="grid_12">تعديل اسم المستخدم وكلمة المرور</h1>
			
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">تم التعديل بنجاح</p>';
				}elseif($sent == "error"){
				    echo '<p class="boxes error_box" style="width:91%;direction:rtl">خطأ فى كلمة المرور الحالية!</p>';
				}
				
				if($profile):foreach($profile as $row):
			?>
			
			<form method="post" class="grid_12 validate" id="contactform">
				<fieldset>
					<div class="row">
						<label for="name">
							<strong>الاسم</strong>
						</label>
						<div class="content">
							<input class="required" minlength="4" type="text" name="name" id="name" value="<?php echo $row->name; ?>" />
						</div>
					</div>
					<div class="row">
						<label for="email">
							<strong>البريد الإلكترونى</strong>
						</label>
						<div class="content">
							<input class="required email" type="text" name="email" id="email" value="<?php echo $row->email; ?>" />
						</div>
					</div>
					<div class="row">
						<label for="oldpass">
							<strong>كلمة المرور الحالية</strong>
						</label>
						<div class="content">
							<input class="required" minlength="6" type="password" name="oldpass" id="oldpass" />
						</div>
					</div>
					<div class="row">
						<label for="newpass">
							<strong>كلمة المرور الجديدة</strong>
						</label>
						<div class="content">
							<input class="required" minlength="6" type="password" name="newpass" id="newpass" />
						</div>
					</div>
					<div class="row">
						<label for="newpass2">
							<strong>تأكيد كلمة المرور الجديدة</strong>
						</label>
						<div class="content">
							<input class="required" equalto="#newpass" type="password" name="newpass2" id="newpass2" />
						</div>
					</div>
				</fieldset><!-- End of fieldset -->
							
				<div class="actions">
					<div class="right">
						<input type="submit" value="تعديل" name="send" />
					</div>
				</div><!-- End of .actions -->
							
			</form><!-- End of form -->
			
			<?php endforeach;else: ?>
				<p class="boxes error_box" direction="rtl">خطأ!</p>
			<?php endif; ?>
		</section><!-- End of #content -->