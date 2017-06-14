<?php include 'sidebar.php'; ?>
    <!-- Here goes the content. -->
		<section id="content" class="container_12 clearfix" data-sort=true>
﻿			<h1 class="grid_12">كتابات الصفحة الرئيسية</h1>
			<?php
				if($sent == "sent"){
				    echo '<p class="boxes done_box" style="width:91%">تم التعديل بنجاح</p>';
				}
				
				if($home):
			?>
			<form method="post" class="grid_12 validate">
				<fieldset>
					
					<div class="row">
						<label for="title">
							<strong>العنوان الأول</strong>
						</label>
						<div class="content">
							<input type="text" name="title" id="title" dir="ltr" class="required" minlength="4" value="<?php echo $home[0]['title']; ?>" />
						</div>
					</div>
                                        
                                        <div class="row">
						<label for="text">
							<strong>التفاصيل</strong>
						</label>
						<div class="content">
                                                        <textarea class="ckeditor full required" dir="ltr" name="text" id="text"><?php echo $home[0]['text']; ?></textarea>
                                                </div>
					</div>
					
					<div class="row">
						<label for="title2">
							<strong>العنوان الثانى</strong>
						</label>
						<div class="content">
							<input type="text" name="title2" id="title2" dir="ltr" class="required" minlength="4" value="<?php echo $home[1]['title']; ?>" />
						</div>
					</div>
                                        
                                        <div class="row">
						<label for="text2">
							<strong>التفاصيل</strong>
						</label>
						<div class="content">
                                                        <textarea class="ckeditor full required" dir="ltr" name="text2" id="text2"><?php echo $home[1]['text']; ?></textarea>
                                                </div>
					</div>
					
					<div class="row">
						<label for="title3">
							<strong>العنوان الثالث</strong>
						</label>
						<div class="content">
							<input type="text" name="title3" id="title3" dir="ltr" class="required" minlength="4" value="<?php echo $home[2]['title']; ?>" />
						</div>
					</div>
                                        
                                        <div class="row">
						<label for="text3">
							<strong>التفاصيل</strong>
						</label>
						<div class="content">
                                                        <textarea class="ckeditor full required" dir="ltr" name="text3" id="text3"><?php echo $home[2]['text']; ?></textarea>
                                                </div>
					</div>
					
					<div class="row">
						<label for="title4">
							<strong>العنوان الرابع</strong>
						</label>
						<div class="content">
							<input type="text" name="title4" id="title4" dir="ltr" class="required" minlength="4" value="<?php echo $home[3]['title']; ?>" />
						</div>
					</div>
                                        
                                        <div class="row">
						<label for="text4">
							<strong>التفاصيل</strong>
						</label>
						<div class="content">
                                                        <textarea class="ckeditor full required" dir="ltr" name="text4" id="text4"><?php echo $home[3]['text']; ?></textarea>
                                                </div>
					</div>
					
					<div class="row">
						<label for="title5">
							<strong>العنوان الخامس</strong>
						</label>
						<div class="content">
							<input type="text" name="title5" id="title5" dir="ltr" class="required" minlength="4" value="<?php echo $home[4]['title']; ?>" />
						</div>
					</div>
                                        
                                        <div class="row">
						<label for="text5">
							<strong>التفاصيل</strong>
						</label>
						<div class="content">
                                                        <textarea class="ckeditor full required" dir="ltr" name="text5" id="text5"><?php echo $home[4]['text']; ?></textarea>
                                                </div>
					</div>
					
				</fieldset><!-- End of fieldset -->
                                
                                <div class="actions">
					<div class="right">
						<input type="submit" value="حفظ" name="send" />
					</div>
				</div><!-- End of .actions -->
				
			</form><!-- End of form -->
			<?php else: ?>
                        <p class="boxes error_box" direction="rtl">خطأ!</p>
			<?php endif; ?>
		</section><!-- End of #content -->