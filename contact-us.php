<?php
if(isset($_POST['email'])){
	$to 		= 'designer.nagesh@gmail.com'; 
	$send_date 	= date('d-m-Y H:i:s');
	$subject 	= 'Course Contact';
	$message 	= '
	<p>Data &amp; Time: '.$send_date.'</p>
	<table>
	<tr>
	<td><strong>Name:</strong> '.$_POST['name'].'</td>
	</tr>
	<tr>
	<td><strong>E-Mail:</strong> <a href="mailto:'.$_POST['email'].'">'.$_POST['email'].'</a></td>
	</tr>
	<tr>
	<td><strong>Phone:</strong>  '.$_POST['phone'].'</td>
	</tr>
	<tr>
	<td><strong>Message:</strong>  '.$_POST['msg'].'</td>
	</tr>
	</table>
	';
	
	$headere  = "MIME-Version: 1.0\r\n";
	$headere .= "Content-type: text/html; charset=iso-8859-1\r\n";
	$headere .= "From: " . $_POST['name'] . "<" . $_POST['email'] . ">\r\n";
	
	mail($to, $subject, $message, $headere);
	
	header('Location: thankyou.html');
	
	$mailback = $_POST['email'];
	$message2 = "Thank you for your interest. We will get back to you as soon as possible.<br /><br /><br />
	
				  Thanks,<br /><br />
				  
				  Best Regards,<br />
				  <strong>Ace Online Trainings</strong><br />
				  http://www.aceonlinetrainings.com";
				  
	$subject2 = "Confirmation from Ace Online Trainings";
	
	$headers2 = "From: $to\r\n";
	$headers2 .= "Content-type:  text/html\r\n";
	mail($mailback, $subject2, $message2, $headers2);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/styles.css" />
<title>Ace Online Trainings</title>
<!-- Form Validation -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript">
(function($,W,D){
    var JQUERY4U = {};
    JQUERY4U.UTIL = {
        setupFormValidation: function(){
            //form validation rules
            $("#contact").validate({
                rules: {
                    name: "required",                    
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                        minlength: 10
                    },
					msg:{
                        required: true,
                        minlength: 10
                    }
                },
                messages: {
                    name: "Please enter your name",                    
                    phone: {
                        required: "Please provide a valid phone no.",
                        minlength: "Your password must be at least 10 characters long"
                    },
                    email: "Please enter a valid email address",
                    msg: {
                        required: "Please write some message",
                        minlength: "Your password must be at least 10 characters long"
                    }
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }
    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>
</head>
<body>          
  <div class="wrapper">
<div class="row1">
<div class="row1-wrapper">
      <div class="social-icons">
        <ul class="social-top">
          <li><a href="#" class="facebook">&nbsp;</a></li>
          <li><a href="#" class="twitter">&nbsp;</a></li>
          <li><a href="#" class="linkedin">&nbsp;</a></li>
          <li><a href="#" class="googleplus">&nbsp;</a></li>
          <li><a href="#" class="youtube">&nbsp;</a></li>
        </ul>
      </div>
      <div class="top-add"><span class="add">Wellington Road, Picket, Hyderabad-56</span><span class="phone">8790503719</span><span class="email">info@creativeknights.in</span></div>
</div>      
    </div>
  
    
    <div class="row2">
    <div class="row2-wrapper">
      <div class="navigation">
        <ul class="nav">
          <li><a href="index.html">home</a></li>
          <li><a href="#" class="active">about</a></li>
          <li><a href="services.html">services</a></li>
          <li><a href="gallery.html">gallery</a></li>
          <li><a href="contact.html">contact</a></li>
        </ul>
      </div>
      <div class="logo"><a href="#"><img src="images/logo.jpg" alt="logo" /></a></div>
    </div>
    </div>
     <div class="inner-banner">

    </div>
   
    
  <div class="content-wrapper">
 

      <h1>About CreativesKnight</h1>     

<div class="map-wrapper">                                    
                                    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
                                    <div style="overflow:hidden;height:250px;">
                                    <div id="gmap_canvas" style="height:250px;"></div>
									<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
                                    <a class="google-map-code" href="http://goertz-gutschein-map.com" id="get-map-data">goertz-gutschein-map.com</a></div>
									<script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(17.4817501,78.53653669999994),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(17.4817501, 78.53653669999994)});infowindow = new google.maps.InfoWindow({content:"<b>ACE Online Trainings</b><br/>X Roads, AS Rao Nagar<br/>500062 Hyderabad" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                                </div>
  




 	      
   <br class="clear"  />
  </div>
 
  <div class="clear"></div>
  <!-- Footer HTML Starts Here -->
  <div class="footer">
    <div class="footer-wrapper">
      
      &copy; 2014 www.creativesknight.com. All Rights Reserved. <a href="#">Privacy Policy</a>
        <ul class="social-footer">          
          <li><a href="#" class="facebook">&nbsp;</a></li>
          <li><a href="#" class="twitter">&nbsp;</a></li>
          <li><a href="#" class="linkedin">&nbsp;</a></li>
          <li><a href="#" class="googleplus">&nbsp;</a></li>
          <li><a href="#" class="youtube">&nbsp;</a></li>          
        </ul>
      
    </div>
  </div>
  <!-- Footer HTML Ends Here -->
</div>                     
                       
                       
                       
                      
                        
                        
                        
                      
</body>
</html>
