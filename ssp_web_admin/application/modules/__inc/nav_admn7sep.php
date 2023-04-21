<!-- Navigation Section -->
	<section id="navigation" class="shadow">
	
		<div class="inner navigation">
			
			<!-- Logo Img -->
			<div class="logo">				
			</div>
			
			<!-- Nav Menu -->
			<div class="nav-menu">
				
				<ul class="nav main-nav">
				<li class="hidden"><a href="#page-top"></a></li>
					     <?php if($this->session->userdata('user_user_group')=="A"){?> 
                     <li class="page-scroll"><a href="<?php echo base_url()?>admin/dashboard">Dashboard</a></li>
					 
					 <li class="page-scroll"><a href="<?php echo base_url()?>manager/usermanager">Manage Users</a></li>
					 
                     <li class="dropdown-toggle nav-toggle"><a class="scroll" href="#">Manage Masters <b data-toggle="dropdown" class="caret"></b></a>
					  	 <ul class="dropdown-menu" style="display: none;">
						<li><a href="<?php echo base_url()?>master/manage_authority">Authority</a></li>								
						 </ul>

					  </li>
					  
						 <?php }?>
						 

						 <?php if($this->session->userdata('user_user_group')!="A"){?>
						 <li class="page-scroll"><a href="<?php echo base_url()?>agency/dashboard">Dashboard</a></li>
						 <?php  if($this->session->userdata('user_upload_status')!="Y"){?>
						 <li class="page-scroll"><a href="<?php echo base_url()?>agency/downloadform">Download the Partially Filled Form</a></li>
						 <li class="page-scroll"><a href="<?php echo base_url()?>agency/uploadform">Upload the Filled Signed form</a></li>
						 <?php }?>
						 <?php }?>
					  
                       <li class="dropdown-toggle nav-toggle"><a class="scroll" href="#">My Account<b data-toggle="dropdown" class="caret"></b></a>
							<ul class="dropdown-menu">								
								<li><a href="<?php echo base_url('admin/logout');?>">Logout</a></li>
							</ul>
						</li>
					
           

                </ul>

				
				
			</div>
				
		
			<div class="clear"></div>
		</div>
	
	</section>
	<!-- End Navigation Section -->