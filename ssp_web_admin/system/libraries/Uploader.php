<?php
class CI_Uploader {
    var $config;
    public function __construct() {
        $this->ci =& get_instance();
        
        $this->config =  array(
                  'upload_path'     => dirname($_SERVER["SCRIPT_FILENAME"])."/files/inbox",
                  /*'upload_url'      => base_url()."files/",*/
				 //'upload_path'     => "/var/www/html/files/inbox/",
                  //'upload_url'      => base_url()."files/",
                  'allowed_types'   => "gif|jpg|png|jpeg|pdf|doc|xml|dat",
                  'overwrite'       => TRUE,
                  'max_size'        => "1000KB",
                  'max_height'      => "768",
                  'max_width'       => "1024"   
                );
				
				
    }
    
    public function do_upload(){
        
        $this->remove_dir($this->config["upload_path"], false);
        
        $this->ci->load->library('uploadfile', $this->config);
        if($this->ci->uploadfile->do_upload())
        {
            $this->ci->data['status']->message = "File Uploaded Successfully";
            $this->ci->data['status']->success = TRUE;
            $this->ci->data["uploaded_file"] = $this->ci->uploadfile->data();
			
        }
        else
        {
		$this->ci->data['status']->message = $this->ci->uploadfile->display_errors();
            $this->ci->data['status']->success = FALSE;
        }
		return $this->ci->data;
    }
    
    function remove_dir($dir, $DeleteMe) {
        if(!$dh = @opendir($dir)) return;
        while (false !== ($obj = readdir($dh))) {
            if($obj=='.' || $obj=='..') continue;
            if (!@unlink($dir.'/'.$obj)) $this->remove_dir($dir.'/'.$obj, true);
        }
 
        closedir($dh);
        if ($DeleteMe){
            @rmdir($dir);
        }
    
    }
}
 ?>