<?php 
		  require 'recaptchalib.php';
		  //IMPORTANT!!
          $siteKey = '6LerkicTAAAAAIRM-51lwA2XFXAXOKREjh_AH6Ku'; 
          $secret  = '6LerkicTAAAAAIRP9ECsexxjKKT_TXaeyZwmmJDw'; 
		  //$to = 'vox16@hotmail.fr';
		  $to = 'info@brainpulse.ca';
		  
		  $lastname = stripslashes($_POST['lastname']);
		  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
		  $firstname = stripslashes($_POST['firstname']);
		  $phone = stripslashes($_POST['phone']);
		  $title = stripslashes($_POST['title']);
		  $company = stripslashes($_POST['company']);
         
		  $subject  = "Contact Brainpulse";
		  //$subject .= stripslashes($_POST['subject']); // the subject
		  
		  $msg  = "From : $firstname $lastname \r\n";
		  $msg .= "E-mail : $email \r\n"; 
		  $msg .= "Phone : $phone \r\n";

		  $msg .= "Title : $title \r\n";
		  $msg .= "Company : $company \r\n";
		  $msg .= "---Message--- \r\n\n".stripslashes($_POST['message'])."\r\n\n";  
		 
		  $msg .= "---Contact information--- \r\n\n"; 
		  $msg .= "IP : ".$_SERVER["REMOTE_ADDR"]."\r\n";
		  $msg .= "Browser : ".$_SERVER["HTTP_USER_AGENT"]."\r\n";
		  
          /*
$reCaptcha = new ReCaptcha($secret);
          if(isset($_POST["g-recaptcha-response"])) {
            $resp = $reCaptcha->verifyResponse(
                    $_SERVER["REMOTE_ADDR"],
                    $_POST["g-recaptcha-response"]
                );
            if ($resp != null && $resp->success) {
                mail($to, $subject, $msg)
                echo "Your message has been sent successfully.";
            }
            else {
                echo "Sending fail, Please try again.";
            }
          }
*/
        
          if(mail($to, $subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n")){
		     echo "Your message has been sent successfully.";
		     mail($to, $subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n");
		  }
		  else{
		    echo "Sending fail, Please try again.";
		  }
          
 
		  
      
?>
