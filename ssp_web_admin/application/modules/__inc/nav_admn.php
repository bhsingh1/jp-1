<!-- Global Navigation -->
    <div class="globalnav-bg">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-dark px-0">
                
    <?php if($this->session->userdata('userlogin')){?>
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
		<ul class="navbar-nav main-menu d-flex">
		<?php if($this->session->userdata('user_user_group')=="A"){?>
			<li class="nav-item d-block"> <a href="<?php echo base_url()?>admin/dashboard">Dashboard</a> </li>
			<li class="nav-item d-block"> <a href="<?php echo base_url()?>manager/usermanager">Manage Users</a></li>
			<li class="nav-item d-block"> <a href="<?php echo base_url()?>master/manage_authority">Manage Authority</a></li>
			
		<?php }?>
		<?php if($this->session->userdata('user_user_group')!="A"){?>
		<li class="nav-item d-block"> <a href="<?php echo base_url()?>agency/dashboard">Dashboard</a> </li>
			<?php  if($this->session->userdata('user_upload_status')!="Y"){?>
						 <li class="nav-item d-block"><a href="<?php echo base_url()?>agency/downloadform">Download the Partially Filled Form</a></li>
						 <li class="nav-item d-block"><a href="<?php echo base_url()?>agency/uploadform">Upload the Filled Signed form</a></li>
						 <?php }?>						 
		<?php }?>
			
			<li class="nav-item d-block"><a href="<?php echo base_url('admin/logout');?>">Logout</a></li>
		</ul>
	</div>
	<?php }else{?>
	
	<div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav main-menu d-flex">
                        <li class="nav-item d-block"> <a href="<?php echo $this->config->item("app_url")?>misc/appindex" class="nav-link <?php if(isset($auth)){?> active <?php }?>">Generate DLC</a></li>
                        <li class="nav-item d-block"> <a href="<?php echo $this->config->item("app_url")?>ppouser/login" class="nav-link <?php if(isset($login)){?> active <?php }?>">Download DLC</a></li>
                        <li class="nav-item d-block"> <a href="<?php echo $this->config->item("app_url")?>misc/download" class="nav-link <?php if(isset($download)){?> active <?php }?>">Download APP</a></li>
                        <li class="nav-item d-block"> <a href="<?php echo $this->config->item("app_url")?>misc/faq" class="nav-link <?php if(isset($faq)){?> active <?php }?>">FAQ</a></li>
                        <li class="nav-item d-block"> <a href="<?php echo $this->config->item("app_url")?>misc/flowdownload" class="nav-link">Process Flow</a></li>
                        
                    </ul>
    </div>
	<?php }?>
				

            </nav>
        </div>
    </div> 