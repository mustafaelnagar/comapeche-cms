<!-- The sidebar -->
		<aside>
			<div class="top">
			
				<!-- Navigation -->
				<nav>
				
				<ul class="collapsible accordion">
					<!---------------------------------------------------HOME section------------------------------------------------------->
					<!---------------------------------------------------HOME section ------------------------------------------------------->
					<!---------------------------------------------------HOME section ------------------------------------------------------->
					<!---------------------------------------------------HOME section ------------------------------------------------------->
                    <li class="<?php if($this->uri->segment(1)=="banner" || $this->uri->segment(1)=="social"){echo "current";} ?>">
						<a class="<?php if($this->uri->segment(1)=="banner" ){echo "open";} ?>" href="javascript:void(0);"><img src="<?php echo site_url(); ?>img/icons/packs/fugue/24x24/globe-green.png" height="24" width="24" />Home section</a>
						<ul>
							<li class="<?php if($this->uri->segment(1)=="banner"){echo "current";} ?>"><a href="<?php echo base_url('banner'); ?>"><span class="icon icon-picture"></span>The main Slider</a></li>							
                            <li class="<?php if($this->uri->segment(1)=="social"){echo "current";} ?>"><a href="<?php echo site_url('social'); ?>"><span class="icon icon-globe"></span>social media</a></li>
                        </ul>
					</li>
					<!---------------------------------------------------About section ------------------------------------------------------->
					<!---------------------------------------------------About section ------------------------------------------------------->
					<!---------------------------------------------------About section ------------------------------------------------------->
					
					
					
					
					                  <li class="<?php if($this->uri->segment(1)=="eabout" || $this->uri->segment(1)=="tab" ){echo "current";} ?>">
									  <!---Open or not at the about-->
						<a class="<?php if($this->uri->segment(1)=="eabout" ||   $this->uri->segment(1)=="social"){echo "open";} ?>" href="javascript:void(0);"><img src="<?php echo site_url(); ?>img/icons/packs/fugue/24x24/document-text-image.png" height="24" width="24" />About section</a>
						<ul>
							<li class="<?php if($this->uri->segment(1)=="banner"){echo "current";} ?>"><a href="<?php echo site_url('eabout');?>"><span class="icon icon-picture"></span>About Headlines</a></li>
<li class="<?php if($this->uri->segment(1)=="ehome"){echo "current";} ?>"><a href="<?php echo site_url('eabout_list'); ?>"><span class="icon icon-reorder"></span>About list of deatils </a></li>
 


				
				</ul>
					</li>
					
					
					<!---------------------------------------------------ُEnd About section ------------------------------------------------------->
					<!---------------------------------------------------ُEnd About section ------------------------------------------------------->
					<!---------------------------------------------------ُEnd About section ------------------------------------------------------->
					
					
					
					
					
					<!---------------------------------------------------Tesmonials  section ------------------------------------------------------->
					<!---------------------------------------------------Tesmonials  section ------------------------------------------------------->
					<!---------------------------------------------------Tesmonials  section ------------------------------------------------------->
					
					
					
					
					
					
					                  <li class="<?php if($this->uri->segment(1)=="testmonials" || $this->uri->segment(1)=="social"){echo "current";} ?>">
						<a class="<?php if($this->uri->segment(1)=="testmonials" ){echo "open";} ?>" href="javascript:void(0);"><img src="<?php echo site_url(); ?>img/icons/packs/fugue/24x24/document-text-image.png" height="24" width="24" />Testimonials  section</a>
						<ul>
							<li class="<?php if($this->uri->segment(1)=="banner"){echo "current";} ?>"><a href="<?php echo site_url('testmonials');?>"><span class="icon icon-picture"></span>testmonials</a></li>

 


				
				</ul>
					</li>
						<!---------------------------------------------------//Tesmonials  section ------------------------------------------------------->
						<!---------------------------------------------------//Tesmonials  section ------------------------------------------------------->
						<!---------------------------------------------------//Tesmonials  section ------------------------------------------------------->
					
			 
					
					
					<!--------------------------------------------------Our BEst three ^ Mumber------------------------------------------------------->
					<!--------------------------------------------------Our BEst three ^ Mumber------------------------------------------------------->
					<!--------------------------------------------------Our BEst three ^ Mumber------------------------------------------------------->
					
					
 
					
					
					
					
					
					
					                  <li class="<?php if($this->uri->segment(1)=="testmonials" || $this->uri->segment(1)=="social"){echo "current";} ?>">
						<a class="<?php if($this->uri->segment(1)=="" ){echo "open";} ?>" href="javascript:void(0);"><img src="<?php echo site_url(); ?>img/icons/packs/fugue/24x24/document-text-image.png" height="24" width="24" />Best three And Numbers</a>
						<ul>
							<li class="<?php if($this->uri->segment(1)=="best_three"){echo "current";} ?>"><a href="<?php echo site_url('best_three');?>"><span class="icon icon-picture"></span>Our Best Three</a></li>
							<li class="<?php if($this->uri->segment(1)=="org_numbers"){echo "current";} ?>"><a href="<?php echo site_url('org_numbers');?>"><span class="icon icon-picture"></span>Organization numbers </a></li>

 
<!--------------------------------------------------Our BEst three ^ Mumber------------------------------------------------------->
<!--------------------------------------------------Our BEst three ^ Mumber------------------------------------------------------->

				
				</ul>
					</li>
					 
					
					
					
							<!--------------------------------------------------Our Services------------------------------------------------------->
                                        
                    <li class="<?php if($this->uri->segment(1)=="eservices" || $this->uri->segment(1)=="services_list" || $this->uri->segment(1)=="services_list_add_new" ){echo "current";} ?>">
						<a class="<?php if($this->uri->segment(1)=="eservices" || $this->uri->segment(1)=="services_list"|| $this->uri->segment(1)=="services_list_add_new"|| $this->uri->segment(1)=="dservice" || $this->uri->segment(1)=="eservice"    ){echo "open";} ?>" href="javascript:void(0);"><img src="<?php echo site_url(); ?>img/icons/packs/fugue/24x24/thumb-up.png" height="24" width="24" />
						Services page
						</a>
						<ul>
							
							<li class="<?php if($this->uri->segment(1)=="services_list"){echo "current";} ?>"><a href="<?php echo site_url('services_list'); ?>"><span class="icon icon-list"></span>Services List</a></li>
							<!--
							<li class="<?php //if($this->uri->segment(1)=="services_list_add_new"){echo "current";} ?>"><a href="<?php //echo site_url('services_list_add_new'); ?>"><span class="icon icon-list"></span>Add service  </a></li>
							-->
						</ul>
					</li>
					
					
					<li class="<?php if($this->uri->segment(1)=="eservices" || $this->uri->segment(1)=="services_list"){echo "current";} ?>">
						<a class="<?php if($this->uri->segment(1)=="eportofolio_list_add_new" ||$this->uri->segment(1)=="eportofolio_list_add_new" ||$this->uri->segment(1)=="edit_port" ||  $this->uri->segment(1)=="eportofolio"){echo "open";} ?>" href="javascript:void(0);"><img src="<?php echo site_url(); ?>img/icons/packs/fugue/24x24/star.png" height="24" width="24" />Portofolio</a>
						<ul>
							<li class="<?php if($this->uri->segment(1)=="eportofolio"){echo "current";} ?>"><a href="<?php echo site_url('eportofolio'); ?>"><span class="icon icon-reorder"></span>All Projects</a></li>
							
							<li class="<?php if($this->uri->segment(1)=="eportofolio_list_add_new"){echo "current";} ?>"><a href="<?php echo site_url('eportofolio_list_add_new'); ?>"><span class="icon icon-list"></span>Add Project</a></li>
							<li class="<?php if($this->uri->segment(1)=="eportofolio_list_add_new"){echo "current";} ?>"><a href="<?php echo site_url('classes'); ?>"><span class="icon icon-list"></span>Categories</a></li>
						</ul>
					</li>
					

					

					<li class="<?php if($this->uri->segment(1)=="econtacts"){echo "current";} ?>"><a href="<?php echo site_url('econtacts'); ?>"><img src="<?php echo site_url(); ?>img/icons/packs/fugue/24x24/mail-open.png" height="24" width="24" />Contacts page</a></li>
					<li class="<?php if($this->uri->segment(1)=="econtacts"){echo "current";} ?>"><a href="<?php echo site_url('site_meta'); ?>"><img src="<?php echo site_url(); ?>img/icons/packs/fugue/24x24/globe-green.png" height="24" width="24" /> <span class="icon icon-list"></span>Site Meta Data</a></li>
				
<li class="<?php if($this->uri->segment(1)=="social"){echo "current";} ?>"><a href="<?php echo site_url('logos'); ?>"><span class="icon icon-picture"></span>
				Our Clients Logos</a></li>		 
				




					
					
				
				</ul></nav><!-- End of nav -->				
			</div><!-- End of .top -->
			
		</aside><!-- End of sidebar -->