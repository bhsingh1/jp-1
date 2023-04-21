<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
    <title>Social Security Pensioner</title>
	<meta name="keywords" content="Jeevan Pramaan,DLC,Pensioners,Life Certificate" />
    <meta name="description" content="Jeevan Pramaan is a biometric enabled digital service for pensioners. Pensioners of Central Government, State Government or any other Government organization can take benefit of this facility." />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
	<!-- CSS Files 
	<link rel="stylesheet" href="<?php echo base_url(); ?>newassets/css/app-lib-all.css"/>	
	<link rel="stylesheet" href="<?php echo base_url(); ?>newassets/css/style.css"/>
	-->
		
	<!-- End CSS Files -->
	<link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/main.css" />
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/base.css" />
    <link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/base-responsive.css" />
    <link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/animate.min.css" />
    <link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/slicknav.min.css" />
    <link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo $this->config->item("app_url")?>assets/fontawesome/css/all.min.css" />
	
 
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

		


<!-- Home Section -->
	
	
		<!-- Accessibility -->
    <div class="container d-flex clearfix" style="height:32px;" id="b-accessibility">
        <div class="b-ministryname">
            <div class="text-right d-inline-block font-weight-bold b-acc-goi pr-sm-2">
                <a href="https://www.india.gov.in/" target="_blank"><span>Government of India</span></a>
            </div>
            <div class="d-inline-block font-weight-bold b-acc-ministry pl-sm-2">
                <a href="https://finmin.nic.in/" target="_blank"><span>National Informatics Centre</span></a>
            </div>
        </div>


       <div class="ml-auto d-flex b-acc-icons">
            <div class="align-self-center">
                <div class="d-inline-block h-100 px-3">
                    <a style="color:#505050;" href="javascript:void(0);" onclick="changefontsize('plus');" title="Font Increase">A+</a>
                </div>
                <div class="d-inline-block h-100 px-3">
                    <a style="color:#505050;" href="javascript:void(0);" onclick="changefontsize('minus');" title="Font Decrease">A-</a>
                </div>
				<div class="d-inline-block h-100 px-3">
				<a class="midicon" href="javascript:void(0);" onclick="change_black();" title="High contrast">
				<img id="hcd" src="<?php echo $this->config->item("app_url")?>assets/images/black.gif" alt="High contrast"></a>
				</div>
				<div class="d-inline-block h-100 px-3">
				<a class="midicon" href="javascript:void(0);" onclick="normal();" title="Normal Contrast">
				<img src="<?php echo $this->config->item("app_url")?>assets/images/white.gif" alt="Normal"></a>
				</div>
				
				<div class="d-inline-block h-100 px-3">
				<a style="color:#505050;" id="sspdlc_mail" href="mailto:sspdlc-support[at]nic[dot]in" title="Helpdesk">
						<i class="fa fa-envelope"></i>
					</a>
				</div>
				
				<div class="d-inline-block h-100 px-3">                    
					<a style="color:#505050;" href="<?php echo $this->config->item("app_url")?>misc/download" title="Download SSP-DLC Client">
						<i class="fa fa-cloud-download"></i>
					</a>
                </div>				
					
				<div class="d-inline-block h-100 px-3">                    
					<a style="color:#505050;" href="<?php echo $this->config->item("app_url")?>ppouser/login" title="Pensioner Sign in"><i class="fa fa-user"></i></a>
                </div>
            </div>

        </div>

    </div>       
	
	<!-- Header -->
    <div class="container clearfix" id="b-header">
        <div class="float-left d-flex h-100">
            <img src="<?php echo $this->config->item("app_url")?>assets/images/emblem-dark.png" class="align-self-center b-emblem-image" title="National Emblem of India" alt="emblem of india logo">
        </div>

        <div class="float-left d-flex h-100">
            <h2 class="align-self-center pl-3 b-appname"><span class="font-weight-bold">SSPDLC</span> <br><span class="b-appfullname">(Digital Life Certificate for Social Security Pensioners)</span></h2>
        </div>
    </div>