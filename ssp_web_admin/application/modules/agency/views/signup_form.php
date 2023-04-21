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
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css" />
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/base.css" />    
	
 
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
                     
        <?php 
		$attributes = array('class' => 'contact100-form', 'name' => 'otpverify','method'=>'POST','onsubmit'=>'return formvalidation()');
		echo form_open('admin/register',$attributes);?>
  
						
				<?php if(isset($error_msg)){?> <span style="color:red;"><?php echo $error_msg; ?></span> <?php }?>
				<?php if(isset($suc)){?> <span style="color:green;">Successfully registered </span> <?php }?>
				<span class="contact100-form-title">
					Register
				</span>

				<label class="col-sm-3 formtext" for="Aadhaar">Username:</label>
				<div class="col-sm-9">
					<input name="username" id="username" maxlength="20" type="textbox" class="form-control formtext" placeholder="Username"> 
					<span style="color:red;"><?php echo form_error('username'); ?></span>
				</div>
				
				<label class="col-sm-3 formtext" for="Aadhaar">Name:</label>
				<div class="col-sm-9">
					<input name="name" id="name" autocomplete="off" maxlength="20" type="textbox" class="form-control formtext" placeholder="Name"> 
					<span style="color:red;"><?php echo form_error('name'); ?></span>
				</div>

				<label class="col-sm-3 formtext" for="Mobile">Password:</label>
				<div class="col-sm-9">
					<input maxlength="50" type="password" class="form-control formtext" placeholder="Password" name="password" id="password">
					<span style="color:red;"><?php echo form_error('password'); ?></span>
				</div> 
				
				<label class="col-sm-3 formtext">Enter Captcha:</label>
				<div class="col-sm-5">
					<input class="form-control formtext" type="text" name="captcha_code" id="captcha_code" placeholder="Enter Capcha" onkeypress="return isNumberKey(event)" maxlength="6">
					<span style="color:red;"><?php echo form_error('captchacode'); if(isset($captcha_error)){ echo $captcha_error;} ?></span>                            
				</div>
				
				<div class="col-sm-4" id="captcha_img">                            
					<img src="<?php echo base_url()."captcha/".$captcha_image?>" style="width:100%;height:32px" alt="captcha image" />
				</div> 
				
				<label class="col-sm-3 formtext"></label>
				<div class="col-sm-9">					
					<a class="small" href="javascript:void(0)" onclick="change_captcha();" id="change-image">Not readable? Change text.</a>
				</div>
				
				
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>                                
						  <button class="contact100-form-btn" type="submit">Submit</button>
					</div>
					
				</div>
                    <?php echo form_close();?> 
					
                </div><!-- Block form div End-->
   
	
	
    
    
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>   

<script src="<?php echo base_url()?>assets/js/aes.js"></script>
<script src="<?php echo base_url()?>assets/js/pbkbf2.js"></script>
<script src="<?php echo base_url()?>assets/js/encrypt.js"></script>
	
	
    <!-- Menu Toggle Script -->
    <script type="text/javascript">
	
	function change_captcha()
	{
		//alert("dgdg");
	   $.ajax({
				type : "GET",
				url :"<?php echo base_url()?>admin/change_captcha",
				success: function (data){
				var imagepath = "<?php echo base_url()?>/captcha/"+data;	
				var img = '<img src="'+imagepath+'" style="width:100%;height:32px" alt="captcha image" />';						
				$('#captcha_img').html(img).fadeIn('slow');
				}
			});
    }
			
			function isNumberKey(evt) {
                var charCode = (evt.which) ? evt.which : event.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                return true;
            }
			
			function formvalidation()
			{
				var flagerror = 0;
				
				var username = $("#username").val();
				var name = $("#name").val();
				var password = $("#password").val();
				var captcha_code = $("#captcha_code").val();
				
				if(username=='')
				{	
					$("#username").css({'border-color' : "red"});
					var flagerror = 1;					
				}else{$("#username").css({'border-color' : ""});}
				
				if(name=='')
				{	
					$("#name").css({'border-color' : "red"});
					var flagerror = 1;					
				}else{$("#name").css({'border-color' : ""});}
				
				if(password=='')
				{					
					$("#password").css({'border-color' : "red"});
					var flagerror = 1;
				}else{$("#password").css({'border-color' : ""});}
				
				if(captcha_code=='')
				{					
					$("#captcha_code").css({'border-color' : "red"});
					var flagerror = 1;
				}else{$("#captcha_code").css({'border-color' : ""});}
				
				if(flagerror==1)
				{
					return false;
				}else{
					   var newp = $('#password').val();						
						enc_new(newp);
						
					return true;
					}
				
			}
			
			function enc_new(ne)
		{
			if(ne !=''){
				var jnew = enc_pas(ne);
			//console.log(jnew);
				$('#password').val(jnew);
			}else{
				return false;
			}
			
		}
		
		
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
   
  	$(document).ready(function(){
	    $('#backtotop').click(function(){
	        $("html, body").animate({ scrollTop: 0 }, 600);
	        return false;
	    });
	});
    
	  	$(document).ready(function() {
	  		$(".b-navdropdown-click").click(function() {
	  			if($(".b-navdropdown").hasClass("hide")) {
	  				$(".b-navdropdown").addClass("show");
	  				$(".b-navdropdown").removeClass("hide");
	  				// $(".b-icon-up").show();
	  				// $(".b-icon-down").hide();
	  			}
	  			else if($(".b-navdropdown").hasClass("show")) {
	  				$(".b-navdropdown").addClass("hide");
	  				$(".b-navdropdown").removeClass("show");
	  				// $(".b-icon-down").show();
	  				// $(".b-icon-up").hide();
	  			}
			});
	  	});



    </script>
	
</body>
</html>