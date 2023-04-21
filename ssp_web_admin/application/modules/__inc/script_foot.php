<!----------- Footer ------------>
    <div class="footer-bs">
        <footer class="container">
            <div class="row">
                <div class="row col-md-7 col-sm-12 footer-nav">
                    <p class="col-md-12">Quick Links</p>
                    <div class="col-sm-6">
	                    <ul class="list">
	                        <li><a href="<?php echo $this->config->item("app_url")?>misc/faq">Help</a></li>
                            <li><a href="<?php echo $this->config->item("app_url")?>misc/webpolicy">Website Policy</a></li>
                            <li><a href="<?php echo $this->config->item("app_url")?>misc/contactus">Contact Us</a></li>
							
	                    </ul>
	                </div>
	                <div class="col-sm-6">
	                    <ul class="list">
	                    	<li><a href="<?php echo $this->config->item("app_url")?>misc/feedback">Feedback</a></li>	                        
	                        <li><a href="<?php echo $this->config->item("app_url")?>misc/sitemap">Sitemap</a></li>
	                    </ul>
	                </div>
                </div>
                <div class="col-md-3 col-sm-8 footer-social d-flex">
                    <div class="d-inline-block align-self-center">
                        <p class="bg-light"><img src="<?php echo $this->config->item("app_url")?>assets/images/NIC.png" alt="NIC logo"></p>
                        <p class="bg-light mb-0"><img src="<?php echo $this->config->item("app_url")?>assets/images/digital-india.png" alt="digital india logo"></p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 footer-ns d-flex">
                    <a class="backtotop align-self-center d-flex text-center text-decoration-none text-white" title="Back to top" href="#b-accessibility">
                        <span style="display:none;">Back to top</span>
                        <span style="font-size: 24px;" class="fas fa-angle-up align-self-center mx-auto"></span>
                    </a>
                </div>
            </div>
            <div class="text-center mt-5 b-footer-credit" style="color: #FFF!important">
                This website belongs to Department of <a class="font-weight-bold" href="https://financialservices.gov.in/">Department of Financial Services</a>, <a class="font-weight-bold" href="https://finmin.nic.in/">Ministry of Finance</a>, <a class="font-weight-bold" href="https://www.india.gov.in/">Govt. of India.</a>
            </div>
        </footer>
    </div>
    
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo $this->config->item("app_url")?>assets/js/jquery.min.js"></script>
    <script src="<?php echo $this->config->item("app_url")?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $this->config->item("app_url")?>assets/js/jquery.slicknav.min.js"></script>
	<script type="text/javascript">
	function isNumberKey(evt) 
	{
                var charCode = (evt.which) ? evt.which : event.keyCode;
                if (charCode > 31 && (charCode < 48 || charCode > 57))
                    return false;
                return true;
    }
	</script>