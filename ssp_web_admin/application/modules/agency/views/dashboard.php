<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
    <title>Social Security Pensioner</title>
	<meta name="keywords" content="Jeevan Pramaan,DLC,Pensioners,Life Certificate" />
    <meta name="description" content="Jeevan Pramaan is a biometric enabled digital service for pensioners. Pensioners of Central Government, State Government or any other Government organization can take benefit of this facility." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
	<!-- End CSS Files -->
	<link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/main.css" />
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/base.css" />
    <!--<link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/base-responsive.css" />
    <link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/slicknav.min.css" />-->
    <!--<link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/fontawesome/css/all.min.css" />-->
	
 
</head>	
	<script type="text/javascript">
	function changefontsize(e) { var t = $("body").css("font-size"); t = t.replace(/\D/g, ""), t > 30 && (t = 30), 9 > t && (t = 9), "plus" == e ? (t++, $("*").css("font-size", t + "px")) : "minus" == e ? (t--, $("*").css("font-size", t + "px")) : (t = 12, $("*").css("font-size", t + "px")) }	
	
function change_black(){		
		$(".container").css("background-color","#000");
		$(".container").css("color","#fff");
		$("input").css("color","#000");
		$("span").css("color","#fff");
		$("select").css("color","#000");
		$("select").find('option').css("color","#000");	
		$(".wrap-contact100").css("background-color","#000");
        		
	}
	
	
	function normal()
	{
	 location.reload(); 
	}

</script>
<body>
<div class="col-sm-6 wrap-contact100" style="margin-left:-10px;">			
                     
        <p>Hi, <?php echo $this->session->userdata('reg_name');?>  <a href='<?php echo base_url();?>admin/logout'>Logout</a></p>
					
                </div><!-- Block form div End-->
   
	
	
    
    
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo $this->config->item("app_url")?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $this->config->item("app_url")?>assets/js/bootstrap.min.js"></script>   
    
	
</body>
</html>