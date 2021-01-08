
<?php

use PHPMailer\PHPMailer\PHPMailer;
	include('config.php');
	
	
	error_reporting(E_ALL); 
	ini_set('display_errors', 1);
	

		$hash=md5( rand(0,1000) );
		
	
		
			  // mysql_escape_string
		$name=isset($_POST['name'])?mysqli_escape_string($con,$_POST['name']):header("location:register.php");
		echo $name;
		$email=isset($_POST['email_id'])?mysqli_escape_string($con,$_POST['email_id']):header("location:register.php");
		$addr=isset($_POST['addr'])?mysqli_escape_string($con,$_POST['addr']):header("location:register.php");
		$contn=isset($_POST['contn'])?mysqli_escape_string($con,$_POST['contn']):header("location:register.php");
		$pass=isset($_POST['pass'])?mysqli_escape_string($con,$_POST['pass']):header("location:register.php");
		$state=isset($_POST['state'])?mysqli_escape_string($con,$_POST['state']):header("location:register.php");
		$city=isset($_POST['city'])?mysqli_escape_string($con,$_POST['city']):header("location:register.php");
		$postz=isset($_POST['postz'])?mysqli_escape_string($con,$_POST['postz']):header("location:register.php");
		$gstn=isset($_POST['gstn'])?mysqli_escape_string($con,$_POST['gstn']):header("location:register.php");
		$user=isset($_POST['user'])?mysqli_escape_string($con,$_POST['user']):'';
		
		 
		
		
		if($user=="false"){
			$id1="C".floor(100 + rand(0,900) * 90);
			
					$sql="INSERT INTO `registration`(`u_id`,`f_name`,`email_id`,`contact_no`,`passwrd`,`address`,`State_Name`,`City_Name`,`post_code`,`hash`) VALUES('{$id1}','{$name}','{$email}','{$contn}','{$pass}','{$addr}','{$state}','{$city}','{$postz}','{$hash}')";
					$b=mysqli_query($con,$sql) or die(mysqli_error($con));
			

				$email = $_POST['email_id']; 
				$subject = "Signup | Verification";  
				$body = "
 
				Thanks for signing up!
				Your account has been created, you can login after you have activated your account by pressing the url below.
 

				------------------------
 
				Please click this link to activate your account:
				http://localhost/asss/verify.php?email=$email&hash=$hash
 
				"; 
                    


    if (isset($_POST['name']) && isset($_POST['email_id'])) {
		$name = $_POST['name'];
		$email1 = $_POST['email_id'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        //$mail->Host = "ssl://smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "infoams3809@gmail.com";
        $mail->Password = "pran@3809";
        $mail->Port = 587; //465
		$mail->SMTPSecure = "tls";//"ssl";
		$mail->SMTPDebug = 2;

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email1,$name);
        $mail->addAddress("infoams3809@gmail.com");
        $mail->Subject = $subject;
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = $email; //"Something is wrong: <br><br>" . $mail->ErrorInfo + $email;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }








		
		/*	$to      = $email; 
				$subject = 'Signup | Verification';  
				$message = '
 
				Thanks for signing up!
				Your account has been created, you can login after you have activated your account by pressing the url below.
 

				------------------------
 
				Please click this link to activate your account:
				http://localhost/asss/verify.php?email='.$email.'&hash='.$hash.'
 
				'; 
                     
				$headers = 'From:pujan007mm@gmail.com' . "\r\n"; 
						
				if(mail($to, $subject, $message, $headers))
				{
					echo "Email has been sent to your account, Please verify to login!";
					
				}
				else{
					mysqli_query($con,"delete from registration where u_id='$id1'");
					echo "Email cannot be sent, Please enter valid Email ID";
				}
			}
		
				else
			{
				$gstn=isset($_POST['gstn'])?mysqli_escape_string($con,$_POST['gstn']):header("location:register.php");
				$id2="D".floor(100 + rand(0,900) * 90);
				$user=1;
			
		
					$sql2="INSERT INTO `registration`(`u_id`,`f_name`,`email_id`,`contact_no`,`type`,`passwrd`,`address`,`State_Name`,`City_Name`,`post_code`,`gst_no`,`hash`) VALUES('{$id2}','{$name}','{$email}','{$contn}','1','{$pass}','{$addr}','{$state}','{$city}','{$postz}','{$gstn}','{$hash}')";
					$c=mysqli_query($con,$sql2) or die(mysqli_error($con));
				
				$to      = $email; // Send email to our user
				$subject = 'Signup | Verification'; // Give the email a subject 
				$message = '
 
				Thanks for signing up!
				Your account has been created, you can login after you have activated your account by pressing the url below.
 

				------------------------
 
				Please click this link to activate your account:
				http://localhost/asss/verify.php?email='.$email.'&hash='.$hash.'
 
				'; // Our message above including the link
                     
				$headers = 'From:pujan007mm@gmail.com' . "\r\n"; // Set from headers
				
				if(mail($to, $subject, $message, $headers))
				{
					
					echo "Email has been sent to your account, Please verify to login!";	
				}			
				else{
					mysqli_query($con,"delete from registration where u_id='$id2'");
					echo "Email cannot be sent, Please enter valid Email ID";
				}*/

			}
			else{
				$gstn=isset($_POST['gstn'])?mysqli_escape_string($con,$_POST['gstn']):header("location:register.php");
				$id1="D".floor(100 + rand(0,900) * 90);
				$user=1;
			
					$t="1";
					//$sql="INSERT INTO `registration`(`u_id`,`f_name`,`email_id`,`contact_no`,`passwrd`,`address`,`State_Name`,`City_Name`,`post_code`,`hash`) VALUES('{$id1}','{$name}','{$email}','{$contn}','{$pass}','{$addr}','{$state}','{$city}','{$postz}','{$hash}')";
					$sql="INSERT INTO `registration`(`u_id`,`f_name`,`email_id`,`contact_no`,`passwrd`,`address`,`State_Name`,`City_Name`,`post_code`,`hash`,`gst_no`,`type`) VALUES('{$id1}','{$name}','{$email}','{$contn}','{$pass}','{$addr}','{$state}','{$city}','{$postz}','{$hash}','{$gstn}','{$t}')";
					$b=mysqli_query($con,$sql) or die(mysqli_error($con));
				//	$b=mysqli_query($con,$sql) or die(mysqli_error($con));
			

				$email = $_POST['email_id']; 
				$subject = "Signup | Verification";  
				$body = "
 
				Thanks for signing up!
				Your account has been created, you can login after you have activated your account by pressing the url below.
 

				------------------------
 
				Please click this link to activate your account:
				http://localhost/asss/verify.php?email=$email&hash=$hash
 
				"; 
                    


    if (isset($_POST['name']) && isset($_POST['email_id'])) {
        $name = $_POST['name'];

        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        //$mail->Host = "ssl://smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "infoams3809@gmail.com";
        $mail->Password = "pran@3809";
        $mail->Port = 587; //465
		$mail->SMTPSecure = "tls";//"ssl";
		$mail->SMTPDebug = 2;

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("infoams3809@gmail.com");
        $mail->Subject = $subject;
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }

			}
	
	
	
		?>